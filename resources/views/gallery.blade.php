<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeri Foto</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="creative-bg creative-typography">
<div class="persona-switcher">
    <a href="{{ route('home') }}" class="persona-home">Beranda</a>
    <a href="{{ url('/persona/tech') }}" class="persona-tech">Tech</a>
    <a href="{{ url('/persona/management') }}" class="persona-management">Management</a>
    <a href="{{ url('/persona/creative') }}" class="active persona-creative">Creative</a>
    </div>
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    <div class="text-center">
        <h1 class="text-4xl font-black creative-text sm:text-5xl lg:text-6xl">Galeri Koleksi Foto</h1>
        <p class="mt-6 text-lg creative-muted">Jelajahi koleksi fotografi yang dikelompokkan berdasarkan tema.</p>
    </div>

    <div class="mt-8 flex justify-center flex-wrap gap-3">
        <button class="creative-chip creative-chip-bold filter-btn active" data-filter="all">Semua</button>
        @foreach($themes as $themeName => $items)
            <button class="creative-chip filter-btn" data-filter="{{ $themeName }}">{{ ucfirst($themeName) }}</button>
        @endforeach
    </div>

    <div class="mt-12 masonry-gallery">
        @foreach($photos as $photo)
            @php
                $exifData = @exif_read_data($photo['file'] ?? '');
                $camera = $exifData['Model'] ?? null;
                $apertureValue = $exifData['FNumber'] ?? null;
                $aperture = null;
                if ($apertureValue) {
                    $parts = explode('/', (string)$apertureValue);
                    if (count($parts) === 2 && (float)$parts[1] != 0.0) {
                        $aperture = 'f/' . round(((float)$parts[0]) / ((float)$parts[1]), 1);
                    } else {
                        $aperture = 'f/' . round((float)$apertureValue, 1);
                    }
                }
                $shutterValue = $exifData['ExposureTime'] ?? null;
                $shutter = null;
                if ($shutterValue) {
                    $exposure = null;
                    if (is_string($shutterValue) && strpos($shutterValue, '/') !== false) {
                        list($num, $den) = explode('/', $shutterValue);
                        $denF = (float)$den;
                        if ($denF > 0) {
                            $exposure = ((float)$num) / $denF;
                        }
                    } else {
                        $exposure = (float)$shutterValue;
                    }
                    if ($exposure !== null && $exposure > 0) {
                        if ($exposure >= 1) {
                            $shutter = (string) (round($exposure, $exposure < 10 ? 1 : 0)) . 's';
                        } else {
                            $shutter = '1/' . (string) round(1 / $exposure) . 's';
                        }
                    }
                }
                $iso = $exifData['ISOSpeedRatings'] ?? null;
            @endphp
            <div class="masonry-item group relative overflow-hidden rounded-lg shadow-lg bg-white" data-theme="{{ $photo['theme'] }}">
                <img src="{{ $photo['url'] }}" alt="{{ $photo['theme'] }}" class="w-full h-full object-cover transition-transform duration-500 ease-in-out transform group-hover:scale-105">
                @if($camera || $aperture || $shutter || $iso)
                <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-4">
                    <div class="text-white transform translate-y-3 group-hover:translate-y-0 transition-transform duration-300 ease-in-out">
                        @if($camera)
                            <p class="text-sm font-bold tracking-wide">{{ $camera }}</p>
                        @endif
                        <div class="flex items-center space-x-3 text-xs mt-1 opacity-90 font-mono">
                            @if($aperture)
                                <span class="font-semibold">{{ $aperture }}</span>
                            @endif
                            @if($shutter)
                                <span>{{ $shutter }}</span>
                            @endif
                            @if($iso)
                                <span>ISO{{ $iso }}</span>
                            @endif
                        </div>
                    </div>
                </div>
                @endif
            </div>
        @endforeach
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const buttons = document.querySelectorAll('.filter-btn');
    const items = document.querySelectorAll('.masonry-item');
    buttons.forEach(btn => {
        btn.addEventListener('click', function () {
            buttons.forEach(b => b.classList.remove('active'));
            this.classList.add('active');
            const f = this.getAttribute('data-filter');
            items.forEach(it => {
                it.style.display = (f === 'all' || it.getAttribute('data-theme') === f) ? 'block' : 'none';
            });
        });
    });
});
</script>
</body>
</html>