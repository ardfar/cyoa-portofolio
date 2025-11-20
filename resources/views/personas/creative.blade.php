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
    <div class="relative overflow-hidden hero-section will-change-transform">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 lg:py-20">
            <div class="text-center content-visibility-auto">
                <h1 class="text-4xl font-extrabold tracking-tight creative-text sm:text-5xl lg:text-6xl will-change-opacity">
                    {{ $persona['headline'] }}
                </h1>
                <p class="mt-6 max-w-2xl mx-auto text-xl creative-muted">
                    {{ $persona['description'] }}
                </p>
                <div class="mt-8 flex justify-center gap-3 flex-wrap">
                    @foreach(($persona['roles'] ?? []) as $role)
                        <span class="creative-chip">{{ $role }}</span>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <!-- Navigation -->
    <div class="sticky-nav creative-navbar">
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
    <section id="about" class="py-16 creative-bg creative-shapes">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:grid lg:grid-cols-2 lg:gap-12 lg:items-center">
                <div>
                    <h2 class="text-3xl font-bold creative-text sm:text-4xl">Menangkap Momen. Menciptakan Identitas.</h2>
                    <p class="mt-6 text-lg creative-muted">Visual storytelling yang menghidupkan brand dan mengabadikan cerita melalui fotografi dan desain grafis.</p>
                    <div class="mt-8 flex flex-wrap gap-4">
                        <a href="#photo" class="creative-btn inline-flex items-center px-6 py-3 rounded-md font-semibold">Lihat Portofolio Fotografi</a>
                        <a href="#design" class="creative-btn inline-flex items-center px-6 py-3 rounded-md font-semibold">Jelajahi Proyek Desain</a>
                    </div>
                    <div class="mt-8 space-y-4">
                        <div class="flex items-start">
                            <div class="flex-shrink-0">
                                <div class="w-8 h-8 bg-green-100 rounded-full flex items-center justify-center">
                                    <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-medium creative-text">Graphic Design</h3>
                                <p class="creative-muted">Brand identity, layout, dan desain visual untuk komunikasi yang efektif.</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="flex-shrink-0">
                                <div class="w-8 h-8 bg-purple-100 rounded-full flex items-center justify-center">
                                    <svg class="w-5 h-5 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-medium creative-text">Creative Photography</h3>
                                <p class="creative-muted">Visual storytelling dan creative direction untuk kebutuhan branding dan marketing.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-12 lg:mt-0">
                    <div class="creative-secondary rounded-2xl p-8">
                        <h3 class="text-xl font-semibold creative-text mb-4">Skills & Tools</h3>
                        <div class="grid grid-cols-2 gap-4">
                            <div class="rounded-lg p-4 text-center creative-card">
                                <div class="text-2xl font-bold creative-text">Graphic Design</div>
                                <div class="text-sm creative-muted">Brand Identity</div>
                            </div>
                            <div class="rounded-lg p-4 text-center creative-card">
                                <div class="text-2xl font-bold creative-text">Photography</div>
                                <div class="text-sm creative-muted">Studio & Outdoor</div>
                            </div>
                            <div class="rounded-lg p-4 text-center creative-card">
                                <div class="text-2xl font-bold creative-text">Adobe Suite</div>
                                <div class="text-sm creative-muted">PS, AI, LR</div>
                            </div>
                            <div class="rounded-lg p-4 text-center creative-card">
                                <div class="text-2xl font-bold creative-text">UI/UX</div>
                                <div class="text-sm creative-muted">Layout & Components</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Photography Gallery Section -->
    <section id="photo" class="py-16 creative-bg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-3xl font-extrabold creative-text sm:text-4xl">Portofolio Fotografi</h2>
                <p class="mt-4 max-w-2xl mx-auto text-xl creative-muted">Galeri yang menampilkan karya terbaik dengan efek hover yang halus.</p>
            </div>

            <div class="mt-12 creative-gallery">
                <div class="creative-thumb" style="background:linear-gradient(135deg,#DDF4E4,#FFFFFF)">
                    <div class="overlay">Portrait</div>
                </div>
                <div class="creative-thumb" style="background:linear-gradient(135deg,#FFD166,#FFF4CC)">
                    <div class="overlay">Event</div>
                </div>
                <div class="creative-thumb" style="background:linear-gradient(135deg,#DDF4E4,#FFFFFF)">
                    <div class="overlay">Corporate</div>
                </div>
            </div>

            <div class="mt-8 text-center">
                <a href="#photo" class="inline-flex items-center px-6 py-3 rounded-md font-semibold creative-btn">Lihat Galeri Lengkap</a>
            </div>
        </div>
    </section>

    <!-- Portfolio Section -->
    <section id="design" class="py-16 creative-bg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-3xl font-extrabold creative-text sm:text-4xl">Proyek Desain</h2>
                <p class="mt-4 max-w-2xl mx-auto text-xl creative-muted">Grid proyek desain dengan kartu minimalis dan tag kategori.</p>
            </div>

            <div class="mt-12 grid gap-8 md:grid-cols-2 lg:grid-cols-3">
                <!-- IT Support Case Study -->
                <div class="creative-card rounded-lg overflow-hidden">
                    <div class="bg-gradient-to-br from-green-500 to-teal-600 h-48 flex items-center justify-center">
                        <svg class="w-16 h-16 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                        </svg>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold creative-text mb-2">Brand Identity & Visual System</h3>
                        <p class="creative-muted mb-4">Pengembangan sistem identitas visual yang konsisten untuk meningkatkan pengenalan merek dan engagement.</p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="px-2 py-1 rounded text-xs" style="background:#E9F7F0;color:#5CCF9F">Branding</span>
                            <span class="px-2 py-1 rounded text-xs" style="background:#E9F7F0;color:#5CCF9F">Visual System</span>
                        </div>
                        <div class="flex space-x-4">
                            <button class="creative-text hover:creative-accent font-medium">Lihat Studi Kasus</button>
                        </div>
                    </div>
                </div>

                <!-- Admin Efficiency -->
                <div class="creative-card rounded-lg overflow-hidden">
                    <div class="bg-gradient-to-br from-gray-500 to-blue-600 h-48 flex items-center justify-center">
                        <svg class="w-16 h-16 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path>
                        </svg>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold creative-text mb-2">Marketing Collateral Design</h3>
                        <p class="creative-muted mb-4">Desain materi campaign seperti poster, banner, dan social media assets yang kohesif dan menarik.</p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="px-2 py-1 rounded text-xs" style="background:#E9F7F0;color:#5CCF9F">Poster</span>
                            <span class="px-2 py-1 rounded text-xs" style="background:#E9F7F0;color:#5CCF9F">Social Media</span>
                        </div>
                        <div class="flex space-x-4">
                            <button class="creative-text hover:creative-accent font-medium">Lihat Detail</button>
                        </div>
                    </div>
                </div>

                <!-- Creative Solutions -->
                <div class="creative-card rounded-lg overflow-hidden">
                    <div class="bg-gradient-to-br from-purple-500 to-pink-600 h-48 flex items-center justify-center">
                        <svg class="w-16 h-16 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"></path>
                        </svg>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold creative-text mb-2">Studio & Editorial Photography</h3>
                        <p class="creative-muted mb-4">Produksi visual berkualitas untuk kebutuhan editorial, komersial, dan promosi.</p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="px-2 py-1 rounded text-xs" style="background:#E9F7F0;color:#5CCF9F">Editorial</span>
                            <span class="px-2 py-1 rounded text-xs" style="background:#E9F7F0;color:#5CCF9F">Studio</span>
                        </div>
                        <div class="flex space-x-4">
                            <button class="creative-text hover:creative-accent font-medium">Lihat Detail</button>
                        </div>
                    </div>
                </div>
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