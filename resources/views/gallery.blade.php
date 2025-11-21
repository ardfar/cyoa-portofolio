<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eksplorasi Perspektif - Farras Arrafi</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700&display=swap"
        rel="stylesheet">
</head>

<body class="artist-gallery-bg creative-typography">
    <div class="persona-switcher">
        <a href="{{ route('home') }}" class="persona-home">Beranda</a>
        <a href="{{ url('/persona/tech') }}" class="persona-tech">Tech</a>
        <a href="{{ url('/persona/management') }}" class="persona-management">Management</a>
        <a href="{{ url('/persona/creative') }}" class="active persona-creative">Creative</a>
    </div>

    <div class="w-[90vw] mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="text-center">
            <h1 class="text-4xl font-black artist-title sm:text-5xl lg:text-6xl">Eksplorasi Perspektif</h1>
            <p class="mt-6 text-lg artist-subtitle">Mengkurasi keindahan dari struktur beton, hangatnya sajian, hingga
                pendar senja. Sebuah antologi visual.</p>
        </div>

        <div class="mt-8 flex justify-center flex-wrap gap-3">
            <button class="creative-chip creative-chip-bold filter-btn active" data-filter="all">All</button>
            <button class="creative-chip filter-btn" data-filter="Architecture">Architecture</button>
            <button class="creative-chip filter-btn" data-filter="Culinary">Culinary</button>
            <button class="creative-chip filter-btn" data-filter="Nature">Nature</button>
            <button class="creative-chip filter-btn" data-filter="Urban">Urban</button>
        </div>

        <div class="mt-12 masonry-gallery">
            @foreach ($photos as $photo)
                @php
                    // 1. DEFINISI VARIABEL DEFAULT DI AWAL (Anti-Error)
                    $rawTheme = $photo['theme'] ?? 'Other';
                    
                    // Mapping kategori manual di dalam loop agar scope aman
                    $displayTheme = match ($rawTheme) {
                        'Building' => 'Architecture',
                        'Foods' => 'Culinary',
                        'Sunset' => 'Nature',
                        'Transportation' => 'Urban',
                        default => ucfirst($rawTheme),
                    };

                    // Default variables untuk EXIF
                    $camera = null;
                    $exifLine = ''; 
                    
                    // 2. LOGIKA EXIF (Menggunakan @ untuk suppress warning jika file tidak ditemukan)
                    $exifData = @exif_read_data($photo['file'] ?? '');

                    if ($exifData) {
                        $camera = $exifData['Model'] ?? null;
                        
                        // Logic Aperture
                        $aperture = null;
                        if (isset($exifData['FNumber'])) {
                            $parts = explode('/', (string)$exifData['FNumber']);
                            if (count($parts) === 2 && (float)$parts[1] != 0) {
                                $aperture = 'f/' . round((float)$parts[0] / (float)$parts[1], 1);
                            } else {
                                $aperture = 'f/' . round((float)$exifData['FNumber'], 1);
                            }
                        }

                        // Logic Shutter Speed
                        $shutter = null;
                        if (isset($exifData['ExposureTime'])) {
                            $val = $exifData['ExposureTime'];
                            $exposure = null;
                            if (is_string($val) && strpos($val, '/') !== false) {
                                [$num, $den] = explode('/', $val);
                                if ((float)$den > 0) $exposure = (float)$num / (float)$den;
                            } else {
                                $exposure = (float)$val;
                            }

                            if ($exposure > 0) {
                                $shutter = ($exposure >= 1) 
                                    ? round($exposure, ($exposure < 10 ? 1 : 0)) . 's' 
                                    : '1/' . round(1 / $exposure) . 's';
                            }
                        }

                        // Logic ISO
                        $iso = $exifData['ISOSpeedRatings'] ?? null;
                        if (is_array($iso)) $iso = $iso[0]; // Ambil elemen pertama jika array

                        // Gabungkan string EXIF
                        $exifParts = array_filter([
                            $iso ? 'ISO ' . $iso : null, 
                            $aperture,
                            $shutter
                        ]);
                        $exifLine = implode(' | ', $exifParts);
                    }
                @endphp

                <div class="masonry-item group relative overflow-hidden rounded-lg shadow-lg bg-white"
                     data-theme="{{ $displayTheme }}">
                    
                    <img src="{{ $photo['url'] }}" alt="{{ $displayTheme }}"
                        class="w-full h-full object-cover transition-transform duration-500 ease-in-out transform group-hover:scale-105">

                    {{-- Badge Commercial Project --}}
                    @if ($displayTheme === 'Culinary')
                        <span class="absolute top-3 left-3 bg-yellow-100 text-yellow-800 text-xs font-semibold px-2 py-1 rounded-full z-10 shadow-sm">
                            Commercial Project
                        </span>
                    @endif

                    {{-- Hover Overlay EXIF --}}
                    @if ($camera || $exifLine)
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-4">
                            <div class="text-white transform translate-y-3 group-hover:translate-y-0 transition-transform duration-300 ease-in-out">
                                <p class="text-sm font-bold tracking-wide">{{ $camera }}</p>
                                <div class="text-xs mt-1 opacity-90 font-mono">{{ $exifLine }}</div>
                            </div>
                        </div>
                    @endif
                </div>
            @endforeach
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const buttons = document.querySelectorAll('.filter-btn');
            const items = document.querySelectorAll('.masonry-item');
            
            buttons.forEach(btn => {
                btn.addEventListener('click', function() {
                    // Update active state button
                    buttons.forEach(b => b.classList.remove('active'));
                    this.classList.add('active');
                    
                    const filterValue = this.getAttribute('data-filter').toLowerCase();
                    
                    items.forEach(item => {
                        const itemTheme = (item.getAttribute('data-theme') || '').toLowerCase();
                        
                        if (filterValue === 'all' || itemTheme === filterValue) {
                            item.style.display = 'block';
                            item.classList.remove('animate-fade-in');
                            void item.offsetWidth; // Trigger reflow
                            item.classList.add('animate-fade-in');
                        } else {
                            item.style.display = 'none';
                        }
                    });
                });
            });
        });
    </script>
</body>
</html>