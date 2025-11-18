<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="{{ config('portfolio.personas.tech.seo.description', 'Praktisi Teknologi & Engineering - Pengembangan solusi teknis end-to-end yang scalable dan inovatif') }}">
    <meta name="keywords" content="{{ config('portfolio.personas.tech.seo.keywords', 'full stack developer, AI ML engineer, teknologi, pengembangan software, kecerdasan buatan') }}">
    <meta name="author" content="{{ config('portfolio.site.author', 'Portfolio Professional') }}">
    <meta property="og:title" content="{{ config('portfolio.personas.tech.seo.og_title', 'Technology & Engineering - Portfolio') }}">
    <meta property="og:description" content="{{ config('portfolio.personas.tech.seo.og_description', 'Membangun solusi teknis, dari kode hingga infrastruktur cerdas') }}">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ config('portfolio.personas.tech.seo.og_image', asset('images/tech-og-image.jpg')) }}">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ config('portfolio.personas.tech.seo.twitter_title', 'Technology & Engineering Portfolio') }}">
    <meta name="twitter:description" content="{{ config('portfolio.personas.tech.seo.twitter_description', 'Praktisi teknologi dengan fokus pada pengembangan solusi end-to-end') }}">
    <title>{{ config('portfolio.personas.tech.seo.title', 'Technology & Engineering - Portfolio') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="canonical" href="{{ url()->current() }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
</head>
<body class="tech-bg tech-text font-mono-tech">
<!-- Technology & Engineering Persona -->
<div class="tech-bg">
    <!-- Hero Section -->
    <div class="relative overflow-hidden hero-section will-change-transform tech-bg-dark">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 lg:py-20">
            <div class="text-center content-visibility-auto">
                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold will-change-opacity glow-green" data-typing data-text="{{ $persona['headline'] }}" data-speed="35">{{ $persona['headline'] }}</h1>
                <p class="mt-6 max-w-2xl mx-auto text-xl tech-text">
                    {{ $persona['description'] }}
                </p>
                <div class="mt-8 flex justify-center space-x-4">
                    <span class="inline-flex items-center px-4 py-2 tech-tag">Full Stack Developer</span>
                    <span class="inline-flex items-center px-4 py-2 tech-tag">AI/ML Engineer</span>
                </div>
                <div class="mt-8 flex justify-center space-x-4">
                    <a href="#projects" class="tech-btn inline-flex items-center px-6 py-3 rounded-md">Lihat Proyek Terbaru</a>
                    <a href="#stack" class="tech-btn inline-flex items-center px-6 py-3 rounded-md">Lihat Stack Teknologi</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Navigation -->
    <div class="tech-bg border-b tech-separator backdrop-blur-optimized">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <nav class="flex space-x-8 py-4">
                <a href="#about" class="tech-muted hover:accent-green font-medium">Tentang</a>
                <a href="#stack" class="tech-muted hover:accent-green font-medium">Stack</a>
                <a href="#projects" class="tech-muted hover:accent-green font-medium">Proyek Tech</a>
                <a href="#github" class="tech-muted hover:accent-green font-medium">GitHub</a>
                <a href="#contact" class="tech-muted hover:accent-green font-medium">Kontak</a>
            </nav>
        </div>
    </div>

    <!-- About Section -->
    <section id="about" class="py-16 tech-bg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:grid lg:grid-cols-2 lg:gap-12 lg:items-center">
                <div>
                    <h2 class="text-3xl font-bold sm:text-4xl glow-green">
                        Tentang Saya sebagai Praktisi Teknologi
                    </h2>
                    <p class="mt-6 text-lg tech-muted">
                        Dengan pengalaman luas dalam pengembangan perangkat lunak dan kecerdasan buatan, saya berdedikasi untuk menciptakan solusi teknologi yang inovatif dan berdampak.
                    </p>
                    <div class="mt-8 space-y-4">
                        <div class="flex items-start">
                            <div class="flex-shrink-0">
                                <div class="w-8 h-8 rounded-full flex items-center justify-center" style="background-color:#3A3A4E;">
                                    <svg class="w-5 h-5 accent-green" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-medium glow-green">Full Stack Development</h3>
                                <p class="tech-muted">Pengembangan aplikasi web dari frontend hingga backend dengan teknologi modern.</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="flex-shrink-0">
                                <div class="w-8 h-8 rounded-full flex items-center justify-center" style="background-color:#3A3A4E;">
                                    <svg class="w-5 h-5 accent-green" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-medium glow-green">AI/ML Engineering</h3>
                                <p class="tech-muted">Pengembangan model machine learning untuk computer vision dan data analytics.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-12 lg:mt-0">
                    <div class="tech-card rounded-2xl p-8">
                        <h3 class="text-xl font-semibold mb-4 glow-green">Tech Stack Dominan</h3>
                        <div class="grid grid-cols-2 gap-4">
                            <div class="tech-card rounded-lg p-4 text-center">
                                <div class="text-2xl font-bold glow-green">Laravel</div>
                                <div class="text-sm tech-muted">Backend Framework</div>
                            </div>
                            <div class="tech-card rounded-lg p-4 text-center">
                                <div class="text-2xl font-bold glow-green">Python</div>
                                <div class="text-sm tech-muted">AI/ML</div>
                            </div>
                            <div class="tech-card rounded-lg p-4 text-center">
                                <div class="text-2xl font-bold glow-green">JavaScript</div>
                                <div class="text-sm tech-muted">Frontend</div>
                            </div>
                            <div class="tech-card rounded-lg p-4 text-center">
                                <div class="text-2xl font-bold glow-green">Docker</div>
                                <div class="text-sm tech-muted">Containerization</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="py-16 tech-bg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-3xl font-extrabold sm:text-4xl glow-green">
                    Proyek Teknologi Unggulan
                </h2>
                <p class="mt-4 max-w-2xl mx-auto text-xl tech-muted">
                    Beberapa proyek teknis yang menunjukkan kemampuan saya dalam mengembangkan solusi end-to-end.
                </p>
            </div>

            <div class="mt-12 grid gap-8 md:grid-cols-2 lg:grid-cols-3">
                <div class="tech-card rounded-lg overflow-hidden">
                    <div class="h-48 flex items-center justify-center" style="background-color:#10101A;">
                        <svg class="w-16 h-16 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                        </svg>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2 glow-green">Platform E-commerce</h3>
                        <p class="tech-muted mb-4">Full-stack e-commerce solution dengan payment gateway, inventory management, dan real-time analytics.</p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="tech-tag">Laravel</span>
                            <span class="tech-tag">Vue.js</span>
                            <span class="tech-tag">MySQL</span>
                            <span class="tech-tag">Redis</span>
                        </div>
                        <div class="flex space-x-4">
                            <a href="#" class="tech-btn inline-flex items-center px-4 py-2 rounded-md">View Live</a>
                            <a href="#" class="tech-btn inline-flex items-center px-4 py-2 rounded-md">View Code</a>
                        </div>
                    </div>
                </div>

                <div class="tech-card rounded-lg overflow-hidden">
                    <div class="h-48 flex items-center justify-center" style="background-color:#10101A;">
                        <svg class="w-16 h-16 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2 glow-green">AI Object Detection</h3>
                        <p class="tech-muted mb-4">Sistem deteksi objek real-time menggunakan YOLO dan OpenCV untuk aplikasi monitoring.</p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="tech-tag">Python</span>
                            <span class="tech-tag">YOLO</span>
                            <span class="tech-tag">OpenCV</span>
                            <span class="tech-tag">CUDA</span>
                        </div>
                        <div class="flex space-x-4">
                            <a href="#" class="tech-btn inline-flex items-center px-4 py-2 rounded-md">View Live</a>
                            <a href="#" class="tech-btn inline-flex items-center px-4 py-2 rounded-md">View Code</a>
                        </div>
                    </div>
                </div>

                <div class="tech-card rounded-lg overflow-hidden">
                    <div class="h-48 flex items-center justify-center" style="background-color:#10101A;">
                        <svg class="w-16 h-16 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                        </svg>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2 glow-green">DevOps Dashboard</h3>
                        <p class="tech-muted mb-4">Monitoring dan manajemen infrastruktur dengan CI/CD pipeline automation dan real-time metrics.</p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="tech-tag">Docker</span>
                            <span class="tech-tag">Kubernetes</span>
                            <span class="tech-tag">Jenkins</span>
                            <span class="tech-tag">Grafana</span>
                        </div>
                        <div class="flex space-x-4">
                            <a href="#" class="tech-btn inline-flex items-center px-4 py-2 rounded-md">View Live</a>
                            <a href="#" class="tech-btn inline-flex items-center px-4 py-2 rounded-md">View Code</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section id="contact" class="py-16 tech-bg-dark">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-extrabold sm:text-4xl glow-green">
                Tertarik dengan proyek teknis saya?
            </h2>
            <p class="mt-4 text-xl tech-muted">
                Mari diskusikan bagaimana saya bisa membantu mengembangkan solusi teknologi untuk kebutuhan Anda.
            </p>
            <div class="mt-8 flex justify-center space-x-4">
                <a href="{{ route('contact') }}" class="tech-btn inline-flex items-center px-6 py-3 rounded-md">Hubungi Saya</a>
                <a href="#github" class="tech-btn inline-flex items-center px-6 py-3 rounded-md">Lihat GitHub</a>
            </div>
        </div>
    </section>
</div>
</body>
</html>