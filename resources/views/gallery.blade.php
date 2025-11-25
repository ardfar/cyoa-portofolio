<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eksplorasi Perspektif - Farras Arrafi</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body class="bg-art-light text-gray-800 font-body-art antialiased selection:bg-art-primary selection:text-white">

    <!-- Global Navigation -->
    <nav class="fixed top-0 w-full z-50 glass-nav">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <div class="flex-shrink-0">
                    <a href="{{ route('home') }}"
                        class="font-display-art font-bold text-2xl text-gray-900 tracking-tight hover:opacity-80 transition">
                        farras.<span class="text-art-primary">art</span>
                    </a>
                </div>
                <!-- Desktop Menu -->
                <div class="hidden md:flex space-x-1 bg-white p-1 rounded-full border border-gray-200 shadow-sm">
                    <a href="{{ route('home') }}"
                        class="px-5 py-2 text-xs font-bold text-gray-500 hover:text-gray-900 transition rounded-full">Overview</a>
                    <a href="{{ url('/persona/tech') }}"
                        class="px-5 py-2 text-xs font-bold text-gray-500 hover:text-[#00F7A6] hover:bg-gray-50 transition rounded-full">Builder
                        (Tech)</a>
                    <a href="{{ url('/persona/management') }}"
                        class="px-5 py-2 text-xs font-bold text-gray-500 hover:text-[#D97706] hover:bg-gray-50 transition rounded-full">Leader
                        (Mgmt)</a>
                    <a href="{{ url('/persona/creative') }}"
                        class="px-5 py-2 text-xs font-bold text-art-dark bg-art-light border border-art-primary/20 rounded-full shadow-inner">Artist
                        (Creative)</a>
                </div>
                <!-- Mobile Menu -->
                <div class="md:hidden text-gray-500">
                    <a href="{{ route('home') }}"><i class="fa-solid fa-bars"></i> Menu</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Header Section -->
    <header class="pt-32 pb-12 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto text-center">
        <span
            class="inline-block py-1 px-3 rounded-full bg-white border border-art-primary/30 text-art-primary text-xs font-bold tracking-widest uppercase mb-6">
            Curated Visuals
        </span>
        <h1 class="text-5xl md:text-7xl font-display-art font-black text-gray-900 mb-6 tracking-tight">
            Eksplorasi Perspektif
        </h1>
        <p class="mt-4 max-w-2xl mx-auto text-lg md:text-xl text-gray-600 font-light leading-relaxed">
            Mengkurasi keindahan dari struktur beton, hangatnya sajian, hingga pendar senja. Sebuah antologi visual.
        </p>
    </header>

    <!-- Sticky Filter Bar (Responsive Scroll) -->
    <div class="sticky top-20 z-40 bg-art-light/95 backdrop-blur py-4 border-y border-art-primary/10">
        <div class="max-w-7xl h-auto mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-start md:justify-center gap-3 overflow-x-auto no-scrollbar py-2">
                <!-- Filter Buttons -->
                <button
                    class="filter-btn px-6 py-2 rounded-full bg-art-primary text-white font-bold text-sm transition shadow-md shadow-art-primary/20 whitespace-nowrap hover:scale-105 active:scale-95"
                    data-filter="all">
                    All Works
                </button>
                <button
                    class="filter-btn px-6 py-2 rounded-full bg-white text-gray-600 border border-gray-200 font-bold text-sm transition hover:border-art-primary hover:text-art-primary whitespace-nowrap"
                    data-filter="Architecture">
                    Architecture
                </button>
                <button
                    class="filter-btn px-6 py-2 rounded-full bg-white text-gray-600 border border-gray-200 font-bold text-sm transition hover:border-art-primary hover:text-art-primary whitespace-nowrap"
                    data-filter="Culinary">
                    Culinary
                </button>
                <button
                    class="filter-btn px-6 py-2 rounded-full bg-white text-gray-600 border border-gray-200 font-bold text-sm transition hover:border-art-primary hover:text-art-primary whitespace-nowrap"
                    data-filter="Nature">
                    Nature
                </button>
                <button
                    class="filter-btn px-6 py-2 rounded-full bg-white text-gray-600 border border-gray-200 font-bold text-sm transition hover:border-art-primary hover:text-art-primary whitespace-nowrap"
                    data-filter="Urban">
                    Urban
                </button>
            </div>
        </div>
    </div>

    <!-- Masonry Gallery -->
    <section class="py-12 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto min-h-screen">

        <!-- Grid Container: 1 col mobile, 2 col tablet, 3 col desktop -->
        <div class="columns-1 md:columns-2 lg:columns-3 gap-6 space-y-6 masonry-gallery">
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

                <!-- Gallery Item -->
                <div class="masonry-item group relative overflow-hidden rounded-2xl bg-white shadow-sm hover:shadow-xl transition-all duration-500 break-inside-avoid"
                    data-theme="{{ $displayTheme }}">
                    
                    {{-- Badge Commercial Project --}}
                    @if ($displayTheme === 'Culinary')
                        <div
                            class="absolute top-4 left-4 z-20 bg-white/90 backdrop-blur text-art-dark text-[10px] font-bold px-3 py-1 rounded-full shadow-sm uppercase tracking-wide">
                            Commercial Project
                        </div>
                    @endif

                    <img src="{{ $photo['url'] }}" alt="{{ $displayTheme }}"
                        class="w-full h-auto object-cover transition-transform duration-700 ease-in-out group-hover:scale-105">

                    <!-- Hover Overlay -->
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-6">
                        <span
                            class="text-art-primary text-[10px] font-mono font-bold tracking-widest uppercase mb-1">{{ $displayTheme }}</span>
                        <h3 class="text-white font-display-art text-xl font-bold mb-2">{{ $photo['filename'] ?? 'Untitled' }}</h3>
                        
                        @if ($camera || $exifLine)
                        <div class="flex items-center gap-3 text-white/70 text-xs font-mono border-t border-white/20 pt-3">
                            <span><i class="fa-solid fa-camera mr-1"></i> {{ $camera ?? 'Unknown Camera' }}</span>
                            <span>{{ $exifLine }}</span>
                        </div>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <!-- Footer -->
    <footer class="py-12 bg-white border-t border-gray-100 text-center">
        <a href="{{ url('/persona/creative') }}"
            class="inline-flex items-center gap-2 text-art-dark font-bold hover:text-art-primary transition mb-4">
            <i class="fa-solid fa-arrow-left"></i> Kembali ke Profil Creative
        </a>
        <p class="text-xs text-gray-400 font-mono">© 2025 Farras Arrafi. All Rights Reserved.</p>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const buttons = document.querySelectorAll('.filter-btn');
            const items = document.querySelectorAll('.masonry-item');

            buttons.forEach(btn => {
                btn.addEventListener('click', function () {
                    // Update active state UI
                    buttons.forEach(b => {
                        b.classList.remove('bg-art-primary', 'text-white', 'hover:text-gray-600', 'shadow-md');
                        b.classList.add('bg-white', 'text-gray-600');
                    });
                    this.classList.remove('bg-white', 'text-gray-600');
                    this.classList.add('bg-art-primary', 'text-white', 'hover:text-gray-600', 'shadow-md');

                    const filterValue = this.getAttribute('data-filter').toLowerCase();

                    items.forEach(item => {
                        const itemTheme = (item.getAttribute('data-theme') || '').toLowerCase();

                        if (filterValue === 'all' || itemTheme === filterValue) {
                            item.style.display = 'block'; // Reset display first
                            // Add animation class
                            item.classList.remove('hidden');
                            item.classList.add('animate-fade-in');
                        } else {
                            item.style.display = 'none'; // Completely hide
                            item.classList.remove('animate-fade-in');
                        }
                    });
                });
            });
        });
    </script>
</body>

</html>