<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="{{ config('portfolio.personas.creative.seo.description', 'Praktisi Kreatif - Desain Grafis & Fotografi untuk brand yang kuat') }}">
    <meta name="keywords" content="{{ config('portfolio.personas.creative.seo.keywords', 'desain grafis, graphic design, fotografer, photography, konten visual, branding') }}">
    <meta name="author" content="{{ config('portfolio.site.author', 'Portfolio Professional') }}">
    <meta property="og:title" content="{{ config('portfolio.personas.creative.seo.og_title', 'Creative - Portfolio') }}">
    <meta property="og:description" content="{{ config('portfolio.personas.creative.seo.og_description', 'Desain grafis dan fotografi untuk komunikasi visual yang kuat') }}">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ config('portfolio.personas.creative.seo.og_image', asset('images/creative-og-image.jpg')) }}">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ config('portfolio.personas.creative.seo.twitter_title', 'Creative Portfolio') }}">
    <meta name="twitter:description" content="{{ config('portfolio.personas.creative.seo.twitter_description', 'Desain grafis dan fotografi untuk kebutuhan branding') }}">
    <title>{{ config('portfolio.personas.creative.seo.title', 'Creative - Portfolio') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&family=Lora:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="canonical" href="{{ url()->current() }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
</head>
<body>
<div class="persona-switcher">
    <a href="{{ route('home') }}" class="persona-home">Beranda</a>
    <a href="{{ url('/persona/tech') }}" class="persona-tech">Tech</a>
    <a href="{{ url('/persona/management') }}" class="persona-management">Management</a>
    <a href="{{ url('/persona/creative') }}" class="active persona-creative">Creative</a>
</div>
<!-- Creative Persona -->
<div class="creative-bg creative-typography">
    <!-- Hero Section -->
    <div class="relative overflow-hidden hero-section will-change-transform creative-hero h-fit">
        <div class="creative-hero-bg w-full overflow-hidden"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 lg:py-24">
            <div class="text-center content-visibility-auto relative z-10">
                <h1 class="text-5xl font-black tracking-tighter creative-text sm:text-6xl lg:text-7xl xl:text-8xl hero-headline">
                    {{ $persona['headline'] }}
                </h1>
                <p class="mt-8 max-w-3xl mx-auto text-xl lg:text-2xl creative-muted hero-description">
                    {{ $persona['description'] }}
                </p>
                <div class="mt-12 flex justify-center gap-4 flex-wrap hero-roles">
                    @foreach(($persona['roles'] ?? []) as $role)
                        <span class="creative-chip creative-chip-bold">{{ $role }}</span>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <!-- Navigation -->
    <div class="sticky-nav creative-navbar sticky-nav-light will-change-transform">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <nav class="flex space-x-8 py-4">
                <a href="#about" class="creative-link hover:creative-link-active font-medium">Tentang</a>
                <a href="#photo" class="creative-link hover:creative-link-active font-medium">Portofolio Fotografi</a>
                <a href="#design" class="creative-link hover:creative-link-active font-medium">Proyek Desain</a>
                <a href="#contact" class="creative-link hover:creative-link-active font-medium">Kontak</a>
            </nav>
        </div>
    </div>

    <!-- About Section -->
    <section id="about" class="py-20 creative-shapes">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:grid lg:grid-cols-2 lg:gap-16 lg:items-center">
                <div class="creative-about-content">
                    <h2 class="text-4xl font-black creative-text sm:text-5xl lg:text-6xl creative-section-title">
                        Merangkai Cerita dalam Setiap Lensa dan Goresan.
                    </h2>
                    <p class="mt-8 text-xl creative-muted creative-about-description">
                        Setiap brand punya jiwa, setiap momen punya cerita. Saya di sini untuk menerjemahkannya ke dalam bahasa visual yang menggugah rasa.
                    </p>
                    <div class="mt-10 flex flex-wrap gap-4 creative-cta-group">
                        <a href="#photo" class="creative-btn creative-btn-bold inline-flex items-center px-8 py-4 rounded-full font-bold text-lg">
                            Jelajahi Karya Lensa
                        </a>
                        <a href="#design" class="creative-btn creative-btn-outline inline-flex items-center px-8 py-4 rounded-full font-bold text-lg">
                            Selami Dunia Desain
                        </a>
                    </div>
                </div>
                <div class="mt-16 lg:mt-0">
                    <div class="creative-secondary rounded-3xl p-6 creative-skills-card">
                        <h3 class="text-2xl font-bold creative-text mb-4 creative-skills-title">Skills & Tools</h3>
                        <div class="grid grid-cols-2 gap-4">
                            <div class="creative-skill-item">
                                <div class="text-2xl font-black creative-text">95%</div>
                                <div class="text-sm creative-muted font-semibold">Graphic Design</div>
                                <div class="creative-skill-bar">
                                    <div class="creative-skill-progress" style="width: 95%"></div>
                                </div>
                            </div>
                            <div class="creative-skill-item">
                                <div class="text-2xl font-black creative-text">90%</div>
                                <div class="text-sm creative-muted font-semibold">Photography</div>
                                <div class="creative-skill-bar">
                                    <div class="creative-skill-progress" style="width: 90%"></div>
                                </div>
                            </div>
                            <div class="creative-skill-item">
                                <div class="text-2xl font-black creative-text">88%</div>
                                <div class="text-sm creative-muted font-semibold">Adobe Suite</div>
                                <div class="creative-skill-bar">
                                    <div class="creative-skill-progress" style="width: 88%"></div>
                                </div>
                            </div>
                            <div class="creative-skill-item">
                                <div class="text-2xl font-black creative-text">85%</div>
                                <div class="text-sm creative-muted font-semibold">UI/UX Design</div>
                                <div class="creative-skill-bar">
                                    <div class="creative-skill-progress" style="width: 85%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Photography Gallery Section -->
    <section id="photo" class="py-20 creative-bg">
        <div class="w-[90%] mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-4xl font-black creative-text sm:text-5xl lg:text-6xl creative-section-title">Galeri Jiwa</h2>
                <p class="mt-8 text-xl creative-muted creative-about-description">
                    Sebuah persembahan visual, di mana setiap frame adalah jeda puitis dari realita yang fana. Momen yang tertangkap, cerita yang abadi.
                </p>
            </div>

            <div class="scrolling-gallery-container mt-12">
                <div class="scrolling-gallery">
                    <div class="masonry-gallery">
                        @php
                            $imageFiles = glob(public_path('images/portofolio/*.jpg'));
                            $imageFiles = array_merge($imageFiles, $imageFiles); // Duplicate images for seamless scroll
                        @endphp
                        @foreach ($imageFiles as $file)
                            @php
                                // Suppress warnings if exif extension is not available or data is not present
                                $exifData = @exif_read_data($file);
                                $camera = $exifData['Model'] ?? null;
                                
                                $apertureValue = $exifData['FNumber'] ?? null;
                                $aperture = null;
                                if ($apertureValue) {
                                    $parts = explode('/', $apertureValue);
                                    if (count($parts) == 2 && $parts[1] != 0) {
                                        $aperture = 'f/' . round($parts[0] / $parts[1], 1);
                                    }
                                }

                                $shutterValue = $exifData['ExposureTime'] ?? null;
                                $shutter = null;
                                if ($shutterValue) {
                                    if (strpos($shutterValue, '/') !== false) {
                                        list($num, $den) = explode('/', $shutterValue);
                                        if ($den != 0) {
                                            $exposure = $num / $den;
                                            if ($exposure >= 1) {
                                                $shutter = round($exposure) . 's';
                                            } else {
                                                $shutter = '1/' . round(1 / $exposure) . 's';
                                            }
                                        }
                                    } else {
                                        $shutter = $shutterValue . 's';
                                    }
                                }
                                $iso = $exifData['ISOSpeedRatings'] ?? null;
                            @endphp
                            <div class="masonry-item group relative overflow-hidden rounded-lg shadow-lg bg-white">
                                <img src="{{ asset('images/portofolio/' . basename($file)) }}" alt="Portofolio Fotografi" class="w-full h-full object-cover transition-transform duration-500 ease-in-out transform group-hover:scale-110">
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
            </div>

            <div class="mt-4 text-center">
                <a href="{{ route('persona.creative.gallery') }}" class="inline-flex items-center px-8 py-4 rounded-full font-bold text-lg creative-btn creative-gallery-btn">
                    Lihat Koleksi Penuh
                    <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <!-- Portfolio Section -->
    <section id="design" class="py-16 creative-bg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-3xl font-extrabold creative-text sm:text-4xl">Kanvas Digital</h2>
                <p class="mt-4 max-w-2xl mx-auto text-xl creative-muted">Dari konsep hingga mahakarya, inilah beberapa proyek pilihan yang lahir dari kolaborasi dan imajinasi.</p>
            </div>

            @php
                $designProjects = [
                    [
                        'folder' => 'kopinaren',
                        'title' => 'Kopinaren: Meracik Identitas Rasa',
                        'description' => 'Membangun jiwa sebuah coffee shop terjangkau, mulai dari goresan tipografi hingga desain menu yang mengundang selera.',
                        'tags' => ['Branding', 'Identity', 'Menu Design']
                    ],
                    [
                        'folder' => 'mik',
                        'title' => 'MIK: Visualisasi Data Kompleks',
                        'description' => 'Mentransformasi data teknis yang rumit menjadi sebuah presentasi visual yang jernih, memukau, dan mudah dicerna oleh klien.',
                        'tags' => ['Presentation', 'Data Visualization', 'Corporate']
                    ],
                    [
                        'folder' => 'bakso-boss',
                        'title' => 'Bakso Boss 88: Vibe & Kredibilitas',
                        'description' => 'Menghadirkan desain dan vibe yang membangun kredibilitas, mengubah gerai bakso sederhana menjadi destinasi kuliner yang berkesan.',
                        'tags' => ['Food Stall', 'Branding', 'Environmental']
                    ]
                ];
            @endphp

            <div class="mt-12 grid gap-8 md:grid-cols-2 lg:grid-cols-3">
                @foreach ($designProjects as $project)
                <div class="creative-card creative-project-card">
                    <div class="creative-card-header">
                        {{-- Using inline style for dynamic background image --}}
                        <div class="h-48 bg-cover bg-center" style="background-image: url('{{ asset('images/design/' . $project['folder'] . '/hero.png') }}')">
                        </div>
                        <div class="creative-card-overlay">
                            <div class="creative-card-overlay-content">
                                <h4 class="text-white font-bold mb-2">{{ $project['title'] }}</h4>
                                <p class="text-gray-200 text-sm">{{ $project['tags'][0] ?? '' }}</p>
                                <button class="creative-overlay-btn mt-4">Lihat Detail</button>
                            </div>
                        </div>
                    </div>
                    <div class="creative-card-body">
                        <h3 class="text-xl font-bold creative-text mb-2">{{ $project['title'] }}</h3>
                        <p class="creative-muted mb-4">{{ $project['description'] }}</p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            @foreach ($project['tags'] as $tag)
                                <span class="creative-tag">{{ $tag }}</span>
                            @endforeach
                        </div>
                        <div class="creative-card-footer">
                            @if(($project['folder'] ?? '') === 'kopinaren')
                                <a href="{{ route('portfolio.kopinaren') }}" class="creative-project-btn">Pelajari Kisahnya</a>
                            @else
                                <button class="creative-project-btn">Pelajari Kisahnya</button>
                            @endif
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section id="contact" class="py-16 creative-secondary">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-extrabold creative-text sm:text-4xl">Tertarik bekerja sama?</h2>
            <p class="mt-4 text-xl creative-muted">Hubungi saya atau jelajahi portofolio selengkapnya.</p>
            <div class="mt-8 flex justify-center space-x-4">
                <a href="{{ route('contact') }}" class="inline-flex items-center px-6 py-3 rounded-md font-semibold creative-btn">Hubungi Saya</a>
                <a href="#design" class="inline-flex items-center px-6 py-3 rounded-md font-semibold creative-btn">Lihat Proyek Desain</a>
            </div>
        </div>
    </section>
</div>
</body>
</html>