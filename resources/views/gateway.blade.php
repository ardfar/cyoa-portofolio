<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>{{ config('portfolio.site.title', 'Portofolio Multi-Peran - Choose Your Own Adventure') }}</title>
    <meta name="description" content="{{ config('portfolio.site.description', 'Website portofolio interaktif yang menampilkan berbagai keahlian profesional berdasarkan konteks yang Anda pilih.') }}">
    <meta name="keywords" content="{{ config('portfolio.site.keywords', 'portofolio, multi-peran, teknologi, manajemen, operasional, kreatif, professional') }}">
    <meta name="author" content="{{ config('portfolio.site.author', 'Portfolio Professional') }}">
    
    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="{{ config('portfolio.site.og_title', 'Portofolio Multi-Peran - Choose Your Own Adventure') }}">
    <meta property="og:description" content="{{ config('portfolio.site.og_description', 'Jelajahi berbagai aspek keahlian profesional melalui pengalaman portofolio interaktif yang dipersonalisasi.') }}">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ config('portfolio.site.og_image', asset('images/portfolio-og-image.jpg')) }}">
    <meta property="og:site_name" content="{{ config('portfolio.site.name', 'Multi-Role Portfolio') }}">
    
    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ config('portfolio.site.twitter_title', 'Portofolio Multi-Peran - Choose Your Own Adventure') }}">
    <meta name="twitter:description" content="{{ config('portfolio.site.twitter_description', 'Pengalaman portofolio interaktif yang menampilkan keahlian multi-disiplin.') }}">
    <meta name="twitter:image" content="{{ config('portfolio.site.twitter_image', asset('images/portfolio-twitter-image.jpg')) }}">
    
    <!-- Canonical URL -->
    <link rel="canonical" href="{{ url()->current() }}">
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased gateway-bg gateway-text">
    <div class="gateway-root will-change-transform">

        <!-- Main Content -->
        <main>
            <!-- Gateway Section -->
            <div id="gateway-section" class="relative overflow-hidden gateway-main">
                <div class="max-w-7xl mx-auto">
                    <div class="relative z-10 pb-8 gateway-bg">
                        <div class="pt-8 pb-8 lg:overflow-hidden">
                            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 gateway-main">
                                <div class="lg:grid lg:grid-cols-2 lg:gap-8">
                                    <!-- Profile Section -->
                                    <div class="mx-auto max-w-md px-4 sm:max-w-2xl sm:px-6 sm:text-center lg:px-0 lg:text-left lg:flex lg:items-center">
                                        <div class="lg:py-24">
                                            <!-- Avatar -->
                                            <div class="mb-8">
                                                @php($avatarFile = public_path('images/profile.jpg'))
                                                @if(file_exists($avatarFile))
                                                    <div class="w-52 aspect-square mx-auto lg:mx-0 rounded-full overflow-hidden">
                                                        <img src="{{ asset('images/profile.jpg') }}" alt="Foto Profil" class="gateway-avatar w-full h-full object-cover">
                                                    </div>
                                                @else
                                                    <div class="w-32 h-32 mx-auto lg:mx-0 bg-gradient-to-br from-purple-600 to-violet-700 rounded-full flex items-center justify-center">
                                                        <span class="text-4xl font-bold text-white">NA</span>
                                                    </div>
                                                @endif
                                            </div>
                                            
                                            <h1 class="mt-4 text-4xl tracking-tight font-extrabold gateway-text sm:mt-5 sm:text-6xl lg:mt-6 xl:text-6xl">
                                                <span class="block">Halo, saya</span>
                                                <span class="block text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-purple-600">Farras Arrafi</span>
                                            </h1>

                                            <p class="mt-3 text-base gateway-muted sm:mt-5 sm:text-xl lg:text-lg xl:text-xl">
                                                Ingin melihat saya sebagai apa?
                                            </p>

                                            <p class="mt-2 text-sm gateway-muted sm:text-base">
                                                Pilih salah satu persona di bawah ini untuk melihat konten yang paling relevan dengan kebutuhan Anda.
                                            </p>
                                        </div>
                                    </div>
                                    
                                    <!-- Persona Selection -->
                                    <div class="mt-12 sm:mt-16 lg:mt-0 flex items-center">
                                        <div class="gateway-card rounded-lg p-6 sm:p-8">
                                            <h2 class="text-2xl font-bold gateway-accent mb-6 text-center">Pilih Persona</h2>
                                            
                                            <div class="space-y-4">
                                                @foreach($personas as $persona)
                                                <button 
                                                    onclick="selectPersona('{{ $persona['id'] }}')"
                                                    class="w-full text-left p-4 gateway-card rounded-lg hover:shadow-md transition-all duration-200 group will-change-transform content-visibility-auto cursor-pointer"
                                                >
                                                    <div class="flex items-center">
                                                        <div class="flex-shrink-0">
                                                            <div class="w-12 h-12 rounded-lg bg-gradient-to-br 
                                                                @if($persona['id'] == 'tech') from-blue-500 to-purple-600
                                                                @elseif($persona['id'] == 'management') from-gray-800 to-yellow-600
                                                                @else from-green-500 to-gray-600 @endif
                                                                flex items-center justify-center">
                                                                <span class="text-white font-bold text-lg">
                                                                @if($persona['id'] == 'tech') T
                                                                @elseif($persona['id'] == 'management') M
                                                                @else C @endif
                                                                </span>
                                                        </div>
                                                        </div>
                                                        <div class="ml-4">
                                                            <h3 class="text-lg font-semibold gateway-text">
                                                                {{ $persona['name'] }}
                                                            </h3>
                                                            <p class="text-sm gateway-muted">
                                                                {{ implode(', ', $persona['roles']) }}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </button>
                                                @endforeach
                                                
                                                <!-- Resume Option -->
                                                <a href="{{ route('resume') }}" 
                                                   class="block w-full text-center p-4 gateway-card rounded-lg hover:shadow-md transition-all duration-200 group"
                                                >
                                                    <div class="flex items-center justify-center">
                                                        <div class="flex-shrink-0">
                                                            <div class="w-12 h-12 rounded-lg bg-gradient-to-br from-gray-600 to-gray-800 flex items-center justify-center">
                                                                <span class="text-white font-bold text-lg">R</span>
                                                            </div>
                                                        </div>
                                                        <div class="ml-4">
                                                            <h3 class="text-lg font-semibold gateway-text">
                                                                Lihat Gambaran Umum
                                                            </h3>
                                                            <p class="text-sm gateway-muted">
                                                                Resume lengkap & CV
                                                            </p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Dynamic Content Section -->
            <div id="persona-content" class="hidden gateway-bg min-h-screen">
                <!-- Content will be loaded here via AJAX -->
            </div>
        </main>
    </div>

    <script>
        // Persona selection and content loading
        function selectPersona(persona) {
            localStorage.setItem('selectedPersona', persona);
            window.location.assign(`/persona/${persona}`);
        }
        
        function loadPersonaContent(persona) {
            fetch(`/persona/${persona}`)
                .then(response => response.text())
                .then(html => {
                    document.getElementById('persona-content').innerHTML = html;
                    // Scroll to top
                    window.scrollTo(0, 0);
                    // Initialize enhancements for dynamically injected content
                    if (window.PortfolioJS && typeof window.PortfolioJS.initTypingEffect === 'function') {
                        window.PortfolioJS.initTypingEffect(document.getElementById('persona-content'));
                    }
                    if (window.PortfolioJS && typeof window.PortfolioJS.initNeonParticles === 'function') {
                        const hero = document.querySelector('#persona-content .hero-section');
                        if (hero) window.PortfolioJS.initNeonParticles(hero);
                    }
                    if (window.PortfolioJS && typeof window.PortfolioJS.initTechProjectsSwiper === 'function') {
                        window.PortfolioJS.initTechProjectsSwiper(document.getElementById('persona-content'));
                    }
                    if (window.PortfolioJS && typeof window.PortfolioJS.initStickyNav === 'function') {
                        window.PortfolioJS.initStickyNav(document.getElementById('persona-content'));
                    }
                })
                .catch(error => {
                    console.error('Error loading persona content:', error);
                    document.getElementById('persona-content').innerHTML = `
                        <div class="text-center py-12">
                            <p class="text-red-600">Error loading content. Please try again.</p>
                        </div>
                    `;
                });
        }
        
        // Persona selector change handler
        document.getElementById('persona-selector')?.addEventListener('change', function() {
            const selectedPersona = this.value;
            if (selectedPersona) {
                selectPersona(selectedPersona);
            }
        });
        
        // Check for existing persona selection on page load (path only)
        document.addEventListener('DOMContentLoaded', function() {
            const pathMatch = window.location.pathname.match(/^\/persona\/([^\/]+)$/);
            const persona = pathMatch ? pathMatch[1] : null;
            if (persona) {
                selectPersona(persona);
            }
        });
        
        // Handle browser back/forward buttons (parse path)
        window.addEventListener('popstate', function() {
            const pathMatch = window.location.pathname.match(/^\/persona\/([^\/]+)$/);
            const persona = pathMatch ? pathMatch[1] : null;
            if (persona) {
                selectPersona(persona);
            } else {
                // Show gateway
                document.getElementById('gateway-section').classList.remove('hidden');
                document.getElementById('persona-content').classList.add('hidden');
                document.getElementById('persona-switcher').classList.add('hidden');
            }
        });
    </script>
</body>
</html>