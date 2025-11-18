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
    <link rel="stylesheet" href="https://unpkg.com/swiper@9/swiper-bundle.min.css" />
    <link rel="canonical" href="{{ url()->current() }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <script src="https://unpkg.com/swiper@9/swiper-bundle.min.js" defer></script>
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
                    <a href="#stack" class="tech-btn inline-flex items-center px-6 py-3 rounded-md">Lihat Kemampuan Saya</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Navigation -->
    <div id="tech-local-nav" class="tech-bg border-b tech-separator backdrop-blur-optimized sticky-nav will-change-transform">
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
                        Engineer & Problem Solver.
                    </h2>
                    <p class="mt-6 text-lg tech-muted">
                        Dengan pengalaman luas dalam pengembangan perangkat lunak dan kecerdasan buatan, saya berdedikasi untuk menciptakan solusi teknologi yang inovatif dan berdampak.
                    </p>
                    <div class="mt-8 space-y-4">
                        <div class="flex items-start">
                            <div class="flex-shrink-0">
                                <div class="w-8 h-8 rounded-full flex items-center justify-center" style="background-color:#3A3A4E;">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 accent-green" viewBox="0 0 20 20"><g fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"><path d="M1.59 9.331a1 1 0 0 1 1.412-.074l3.334 3a1 1 0 0 1-1.338 1.486l-3.334-3a1 1 0 0 1-.074-1.412Z"/><path d="M6.41 6.331a1 1 0 0 1-.074 1.412l-3.334 3a1 1 0 1 1-1.338-1.486l3.334-3a1 1 0 0 1 1.412.074Zm12 3a1 1 0 0 1-.074 1.412l-3.334 3a1 1 0 1 1-1.338-1.486l3.334-3a1 1 0 0 1 1.412.074Z"/><path d="M13.59 6.331a1 1 0 0 1 1.412-.074l3.334 3a1 1 0 0 1-1.338 1.486l-3.334-3a1 1 0 0 1-.074-1.412Zm-1.827-2.796a1 1 0 0 1 .702 1.228l-3 11a1 1 0 0 1-1.93-.526l3-11a1 1 0 0 1 1.228-.702Z"/></g></svg>
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
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 accent-green" viewBox="0 0 24 24"><path fill="currentColor" d="m14.04 9.137l-.886-3.099c-.332-1.16-1.976-1.16-2.308 0l-.885 3.099a1.2 1.2 0 0 1-.824.824l-3.099.885c-1.16.332-1.16 1.976 0 2.308l3.099.885a1.2 1.2 0 0 1 .824.824l.885 3.099c.332 1.16 1.976 1.16 2.308 0l.885-3.099a1.2 1.2 0 0 1 .824-.824l3.099-.885c1.16-.332 1.16-1.976 0-2.308l-3.099-.885a1.2 1.2 0 0 1-.824-.824m-8.143 7.37c-.289-.844-1.504-.844-1.792 0l-.025.087l-.297 1.188l-1.188.296c-.959.24-.96 1.603 0 1.843l1.188.297l.297 1.188c.24.959 1.602.959 1.842 0l.297-1.188l1.188-.297c.96-.24.96-1.603 0-1.843l-1.188-.296l-.297-1.188zM5 18.797a1 1 0 0 0 .204.202a1 1 0 0 0-.204.204a1 1 0 0 0-.203-.204A1 1 0 0 0 5 18.796m14.896-16.29c-.298-.871-1.585-.842-1.817.087l-.297 1.188l-1.188.297c-.959.24-.96 1.602 0 1.842l1.188.297l.297 1.188c.24.959 1.602.959 1.842 0l.297-1.188l1.188-.297c.96-.24.96-1.603 0-1.842l-1.188-.297l-.297-1.188zM19 4.797a1 1 0 0 0 .204.202a1 1 0 0 0-.204.204a1 1 0 0 0-.203-.204A1 1 0 0 0 19 4.796"/></svg>
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
                    <div class="flex items-center justify-center">
                        <div class="avatar-orbit">
                            <div class="avatar">
                                @php($avatarFile = public_path('images/profile.jpg'))
                                @if(file_exists($avatarFile))
                                    <img src="{{ asset('images/profile.jpg') }}" alt="Foto Profil" class="profile-image">
                                @else
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" aria-hidden="true">
                                        <circle cx="12" cy="8" r="4"></circle>
                                        <path d="M4 20c2-4 6-6 8-6s6 2 8 6"></path>
                                    </svg>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Tech Stack Section (from docs/tech-stack.md) -->
    <section id="stack" class="py-16 tech-bg">
        <div class="w-[90%] mx-auto px-4 sm:px-6 lg:px-8">
            <div class="section-highlight rounded-2xl p-8">
                <div class="text-center">
                    <h2 class="text-3xl font-extrabold sm:text-4xl glow-green">Tech Stack</h2>
                    <p class="mt-4 max-w-2xl mx-auto text-xl tech-muted">Ringkasan teknologi yang digunakan, disusun berdasarkan kategori untuk memudahkan navigasi.</p>
                </div>
                <div class="mt-8 stack-links justify-center">
                    <a href="https://www.python.org/" class="tech-btn inline-flex items-center gap-2 px-4 py-2 rounded" target="_blank" rel="noopener">
                        <svg xmlns="http://www.w3.org/2000/svg" width="200" height="200" viewBox="0 0 1024 1024"><path fill="#000000" d="M832 768H544q-13 0-22.5 9.5T512 800t9.5 22.5T544 832h192q13 0 22.5 9.5T768 864v32q0 53-37.5 90.5T640 1024H448q-53 0-90.5-37.5T320 896V672q0-53 21.5-74.5T416 576h256q53 0 106.5-53.5T832 416V256h64q53 0 90.5 37.5T1024 384v192q0 73-59.5 132.5T832 768zM576 944q0 7 4.5 11.5T592 960h32q7 0 11.5-4.5T640 944v-32q0-7-4.5-11.5T624 896h-32q-7 0-11.5 4.5T576 912v32zm64-432H384q-53 0-90.5 37.5T256 640v128H128q-53 0-90.5-37.5T0 640V448q0-73 59.5-132.5T192 256h288q13 0 22.5-9.5T512 224t-9.5-22.5T480 192H288q-13 0-22.5-9.5T256 160v-32q0-53 37.5-90.5T384 0h256q53 0 90.5 37.5T768 128v256q0 53-37.5 90.5T640 512zM448 80q0-7-4.5-11.5T432 64h-32q-7 0-11.5 4.5T384 80v32q0 7 4.5 11.5T400 128h32q7 0 11.5-4.5T448 112V80z"/></svg>
                        <span>Python</span>
                    </a>
                    <a href="https://www.tensorflow.org/" class="tech-btn inline-flex items-center gap-2 px-4 py-2 rounded" target="_blank" rel="noopener">
                        <svg xmlns="http://www.w3.org/2000/svg" width="200" height="200" viewBox="0 0 24 24"><path fill="#000000" d="M1.292 5.856L11.54 0v24l-4.095-2.378V7.603l-6.168 3.564l.015-5.31zm21.43 5.311l-.014-5.31L12.46 0v24l4.095-2.378V14.87l3.092 1.788l-.018-4.618l-3.074-1.756V7.603l6.168 3.564z"/></svg>
                        <span>TensorFlow</span>
                    </a>
                    <a href="https://pytorch.org/" class="tech-btn inline-flex items-center gap-2 px-4 py-2 rounded" target="_blank" rel="noopener">
                        <svg xmlns="http://www.w3.org/2000/svg" width="200" height="200" viewBox="0 0 32 32"><path fill="#000000" d="M16.005.052L6.636 9.427a13.106 13.106 0 0 0 0 18.636a13.105 13.105 0 0 0 18.629 0c5.297-5.188 5.297-13.563.115-18.636l-2.317 2.313c3.859 3.859 3.859 10.145 0 14.005c-3.86 3.859-10.145 3.859-14.005 0c-3.86-3.86-3.86-10.147 0-14.005l6.177-6.172l.776-.885zm4.744 5.183c-.973 0-1.765.792-1.765 1.765a1.763 1.763 0 1 0 1.765-1.765z"/></svg>
                        <span>PyTorch</span>
                    </a>
                    <a href="https://laravel.com/" class="tech-btn inline-flex items-center gap-2 px-4 py-2 rounded" target="_blank" rel="noopener">
                        <svg xmlns="http://www.w3.org/2000/svg" width="200" height="200" viewBox="0 0 24 24"><path fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m14 10.8l4.5 2.5M5.5 1L1 3.5V18l9 5l8.5-4.7v-10L23 5.8v5L10 18l-4.5-2.5V6L10 3.5ZM1 3.5L5.5 6m0 9.5l8.5-4.7v-5l4.5-2.5L23 5.8M10 3.5V13m4-7.2l4.5 2.5M10 18v5"/></svg>
                        <span>Laravel</span>
                    </a>
                    <a href="https://react.dev/" class="tech-btn inline-flex items-center gap-2 px-4 py-2 rounded" target="_blank" rel="noopener">
                        <svg xmlns="http://www.w3.org/2000/svg" width="200" height="200" viewBox="0 0 24 24"><path fill="#000000" d="M14.23 12.004a2.236 2.236 0 0 1-2.235 2.236a2.236 2.236 0 0 1-2.236-2.236a2.236 2.236 0 0 1 2.235-2.236a2.236 2.236 0 0 1 2.236 2.236zm2.648-10.69c-1.346 0-3.107.96-4.888 2.622c-1.78-1.653-3.542-2.602-4.887-2.602c-.41 0-.783.093-1.106.278c-1.375.793-1.683 3.264-.973 6.365C1.98 8.917 0 10.42 0 12.004c0 1.59 1.99 3.097 5.043 4.03c-.704 3.113-.39 5.588.988 6.38c.32.187.69.275 1.102.275c1.345 0 3.107-.96 4.888-2.624c1.78 1.654 3.542 2.603 4.887 2.603c.41 0 .783-.09 1.106-.275c1.374-.792 1.683-3.263.973-6.365C22.02 15.096 24 13.59 24 12.004c0-1.59-1.99-3.097-5.043-4.032c.704-3.11.39-5.587-.988-6.38a2.167 2.167 0 0 0-1.092-.278zm-.005 1.09v.006c.225 0 .406.044.558.127c.666.382.955 1.835.73 3.704c-.054.46-.142.945-.25 1.44a23.476 23.476 0 0 0-3.107-.534A23.892 23.892 0 0 0 12.769 4.7c1.592-1.48 3.087-2.292 4.105-2.295zm-9.77.02c1.012 0 2.514.808 4.11 2.28c-.686.72-1.37 1.537-2.02 2.442a22.73 22.73 0 0 0-3.113.538a15.02 15.02 0 0 1-.254-1.42c-.23-1.868.054-3.32.714-3.707c.19-.09.4-.127.563-.132zm4.882 3.05c.455.468.91.992 1.36 1.564c-.44-.02-.89-.034-1.345-.034c-.46 0-.915.01-1.36.034c.44-.572.895-1.096 1.345-1.565zM12 8.1c.74 0 1.477.034 2.202.093c.406.582.802 1.203 1.183 1.86c.372.64.71 1.29 1.018 1.946c-.308.655-.646 1.31-1.013 1.95c-.38.66-.773 1.288-1.18 1.87a25.64 25.64 0 0 1-4.412.005a26.64 26.64 0 0 1-1.183-1.86c-.372-.64-.71-1.29-1.018-1.946a25.17 25.17 0 0 1 1.013-1.954c.38-.66.773-1.286 1.18-1.868A25.245 25.245 0 0 1 12 8.098zm-3.635.254c-.24.377-.48.763-.704 1.16c-.225.39-.435.782-.635 1.174c-.265-.656-.49-1.31-.676-1.947c.64-.15 1.315-.283 2.015-.386zm7.26 0c.695.103 1.365.23 2.006.387c-.18.632-.405 1.282-.66 1.933a25.952 25.952 0 0 0-1.345-2.32zm3.063.675c.484.15.944.317 1.375.498c1.732.74 2.852 1.708 2.852 2.476c-.005.768-1.125 1.74-2.857 2.475c-.42.18-.88.342-1.355.493a23.966 23.966 0 0 0-1.1-2.98c.45-1.017.81-2.01 1.085-2.964zm-13.395.004c.278.96.645 1.957 1.1 2.98a23.142 23.142 0 0 0-1.086 2.964c-.484-.15-.944-.318-1.37-.5c-1.732-.737-2.852-1.706-2.852-2.474c0-.768 1.12-1.742 2.852-2.476c.42-.18.88-.342 1.356-.494zm11.678 4.28c.265.657.49 1.312.676 1.948c-.64.157-1.316.29-2.016.39a25.819 25.819 0 0 0 1.341-2.338zm-9.945.02c.2.392.41.783.64 1.175c.23.39.465.772.705 1.143a22.005 22.005 0 0 1-2.006-.386c.18-.63.406-1.282.66-1.933zM17.92 16.32c.112.493.2.968.254 1.423c.23 1.868-.054 3.32-.714 3.708c-.147.09-.338.128-.563.128c-1.012 0-2.514-.807-4.11-2.28c.686-.72 1.37-1.536 2.02-2.44c1.107-.118 2.154-.3 3.113-.54zm-11.83.01c.96.234 2.006.415 3.107.532c.66.905 1.345 1.727 2.035 2.446c-1.595 1.483-3.092 2.295-4.11 2.295a1.185 1.185 0 0 1-.553-.132c-.666-.38-.955-1.834-.73-3.703c.054-.46.142-.944.25-1.438zm4.56.64c.44.02.89.034 1.345.034c.46 0 .915-.01 1.36-.034c-.44.572-.895 1.095-1.345 1.565c-.455-.47-.91-.993-1.36-1.565z"/></svg>
                        <span>React</span>
                    </a>
                    <a href="https://www.docker.com/" class="tech-btn inline-flex items-center gap-2 px-4 py-2 rounded" target="_blank" rel="noopener">
                        <svg xmlns="http://www.w3.org/2000/svg" width="200" height="200" viewBox="0 0 24 24"><path fill="#000000" d="M8.8 8.8h1.8c.1 0 .2-.1.2-.2V7.1c0-.1-.1-.2-.2-.2H8.8c-.1 0-.2.1-.2.2v1.6s.1.1.2.1zm2.4 2.3H13c.1 0 .2-.1.2-.2V9.3c0-.1-.1-.2-.2-.2h-1.8c-.1 0-.2.1-.2.2v1.6c0 .1.1.2.2.2zm0-2.3H13c.1 0 .2-.1.2-.2V7.1l-.2-.2h-1.8c-.1 0-.2.1-.2.2v1.6s.1.1.2.1zm2.5 2.3h1.8c.1 0 .2-.1.2-.2V9.3c0-.1-.1-.2-.2-.2h-1.8c-.1 0-.2.1-.2.2v1.6c0 .1.1.2.2.2zm-2.5-4.6H13c.1 0 .2-.1.2-.2V4.8c0-.1-.1-.2-.2-.2h-1.8c-.1 0-.2.1-.2.2v1.6c0 .1.1.1.2.1zm-7.4 4.6h1.8c.1 0 .2-.1.2-.2V9.3c0-.1-.1-.2-.2-.2H3.8c-.1 0-.2.1-.2.2v1.6l.2.2zm18-1c-.5-.3-1.1-.5-1.6-.4c-.3 0-.6 0-.8.1c-.2-.9-.7-1.7-1.4-2.1l-.3-.2l-.2.3c-.3.2-.5.6-.6 1.1c-.2.8-.1 1.6.3 2.2c-.5.2-1 .3-1.5.4H2.6c-.3 0-.6.3-.6.6c0 1.2.2 2.3.6 3.4c.4 1.1 1.1 2 2 2.6c1.4.7 2.9 1 4.4.9c.8 0 1.6-.1 2.4-.2c1.1-.2 2.2-.6 3.2-1.2c.8-.5 1.5-1.1 2.2-1.8c.9-1.1 1.6-2.3 2.1-3.7h.2c.8 0 1.6-.3 2.2-.8c.3-.2.5-.5.6-.9l.1-.2l-.2-.1zm-15.5 1H8c.1 0 .2-.1.2-.2V9.3c0-.1-.1-.2-.2-.2H6.3c-.1 0-.2.1-.2.2v1.6c0 .1.1.2.2.2zm0-2.3H8c.1 0 .2-.1.2-.2V7.1c0-.1-.1-.2-.2-.2H6.3c-.1 0-.2.1-.2.2v1.6s.1.1.2.1zm2.5 2.3h1.8c.1 0 .2-.1.2-.2V9.3c0-.1-.1-.2-.2-.2H8.8c-.1 0-.2.1-.2.2v1.6c0 .1.1.2.2.2z"/></svg>
                        <span>Docker</span>
                    </a>
                </div>
                <div class="mt-12 grid gap-8 md:grid-cols-2 lg:grid-cols-3">
                    {{-- AI Card --}}
                    <div class="tech-card rounded-lg overflow-hidden">
                        <div class="h-24 flex items-center justify-between px-6" style="background-color:#10101A;">
                            <h3 class="text-xl font-semibold glow-green">AI & Machine Learning</h3>
                            <svg class="w-6 h-6 accent-green" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="2" d="M15 19c1.2-3.678 2.526-5.005 6-6c-3.474-.995-4.8-2.322-6-6c-1.2 3.678-2.526 5.005-6 6c3.474.995 4.8 2.322 6 6Zm-8-9c.6-1.84 1.263-2.503 3-3c-1.737-.497-2.4-1.16-3-3c-.6 1.84-1.263 2.503-3 3c1.737.497 2.4 1.16 3 3Zm1.5 10c.3-.92.631-1.251 1.5-1.5c-.869-.249-1.2-.58-1.5-1.5c-.3.92-.631 1.251-1.5 1.5c.869.249 1.2.58 1.5 1.5Z"/></svg>
                        </div>
                        <div class="p-6">
                            <ul class="stack-list">
                                <li class="stack-item"><span class="tech-tag stack-tag">Python</span><span class="stack-desc">Bahasa utama untuk data dan ML.</span></li>
                                <li class="stack-item"><span class="tech-tag stack-tag">TensorFlow</span><span class="stack-desc">Framework deep learning.</span></li>
                                <li class="stack-item"><span class="tech-tag stack-tag">PyTorch</span><span class="stack-desc">Alternatif fleksibel untuk riset.</span></li>
                                <li class="stack-item"><span class="tech-tag stack-tag">Jupyter</span><span class="stack-desc">Eksperimen interaktif.</span></li>
                                <li class="stack-item"><span class="tech-tag stack-tag">Pandas/NumPy</span><span class="stack-desc">Manipulasi dan numerik data.</span></li>
                                <li class="stack-item"><span class="tech-tag stack-tag">Scikit-learn</span><span class="stack-desc">Algoritma klasik ML.</span></li>
                                <li class="stack-item"><span class="tech-tag stack-tag">OpenCV</span><span class="stack-desc">Computer vision.</span></li>
                                <li class="stack-item"><span class="tech-tag stack-tag">CUDA</span><span class="stack-desc">Akselerasi GPU.</span></li>
                                <li class="stack-item"><span class="tech-tag stack-tag">Data Viz</span><span class="stack-desc">Visualisasi insight.</span></li>
                                <li class="stack-item"><span class="tech-tag stack-tag">Data Cleansing</span><span class="stack-desc">Pembersihan dan validasi.</span></li>
                                <li class="stack-item"><span class="tech-tag stack-tag">Flask/FastAPI</span><span class="stack-desc">Penyediaan API model.</span></li>
                            </ul>
                        </div>
                    </div>

                    {{-- PHP & Laravel Card --}}
                    <div class="tech-card rounded-lg overflow-hidden">
                        <div class="h-24 flex items-center justify-between px-6" style="background-color:#10101A;">
                            <h3 class="text-xl font-semibold glow-green">PHP & Laravel</h3>
                            <svg class="w-6 h-6 accent-green" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="currentColor" d="M7.01 10.207h-.944l-.515 2.648h.838c.556 0 .97-.105 1.242-.314c.272-.21.455-.559.55-1.049c.092-.47.05-.802-.124-.995c-.175-.193-.523-.29-1.047-.29zM12 5.688C5.373 5.688 0 8.514 0 12s5.373 6.313 12 6.313S24 15.486 24 12c0-3.486-5.373-6.312-12-6.312zm-3.26 7.451c-.261.25-.575.438-.917.551c-.336.108-.765.164-1.285.164H5.357l-.327 1.681H3.652l1.23-6.326h2.65c.797 0 1.378.209 1.744.628c.366.418.476 1.002.33 1.752a2.836 2.836 0 0 1-.305.847c-.143.255-.33.49-.561.703zm4.024.715l.543-2.799c.063-.318.039-.536-.068-.651c-.107-.116-.336-.174-.687-.174H11.46l-.704 3.625H9.388l1.23-6.327h1.367l-.327 1.682h1.218c.767 0 1.295.134 1.586.401s.378.7.263 1.299l-.572 2.944h-1.389zm7.597-2.265a2.782 2.782 0 0 1-.305.847c-.143.255-.33.49-.561.703a2.44 2.44 0 0 1-.917.551c-.336.108-.765.164-1.286.164h-1.18l-.327 1.682h-1.378l1.23-6.326h2.649c.797 0 1.378.209 1.744.628c.366.417.477 1.001.331 1.751zm-2.595-1.382h-.943l-.516 2.648h.838c.557 0 .971-.105 1.242-.314c.272-.21.455-.559.551-1.049c.092-.47.049-.802-.125-.995s-.524-.29-1.047-.29z"/></svg>
                        </div>
                        <div class="p-6">
                            <ul class="stack-list">
                                <li class="stack-item"><span class="tech-tag stack-tag">PHP 8+</span><span class="stack-desc">Versi modern dan performa.</span></li>
                                <li class="stack-item"><span class="tech-tag stack-tag">Laravel</span><span class="stack-desc">Framework MVC produktif.</span></li>
                                <li class="stack-item"><span class="tech-tag stack-tag">Blade</span><span class="stack-desc">Templating server-side.</span></li>
                                <li class="stack-item"><span class="tech-tag stack-tag">Eloquent</span><span class="stack-desc">ORM untuk basis data.</span></li>
                                <li class="stack-item"><span class="tech-tag stack-tag">MySQL/PostgreSQL</span><span class="stack-desc">Relasional DBMS.</span></li>
                                <li class="stack-item"><span class="tech-tag stack-tag">REST API</span><span class="stack-desc">Layanan data standar.</span></li>
                                <li class="stack-item"><span class="tech-tag stack-tag">PHPUnit</span><span class="stack-desc">Pengujian otomatis.</span></li>
                                <li class="stack-item"><span class="tech-tag stack-tag">Composer</span><span class="stack-desc">Manajemen dependensi.</span></li>
                                <li class="stack-item"><span class="tech-tag stack-tag">Arsitektur MVC</span><span class="stack-desc">Struktur aplikasi terukur.</span></li>
                            </ul>
                        </div>
                    </div>

                    {{-- Front-end Frameworks Card --}}
                    <div class="tech-card rounded-lg overflow-hidden">
                        <div class="h-24 flex items-center justify-between px-6" style="background-color:#10101A;">
                            <h3 class="text-xl font-semibold glow-green">Front-end Frameworks</h3>
                            <svg class="w-6 h-6 accent-green" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"><path fill="currentColor" d="M3 0a3 3 0 0 0-3 3v7h7V0zm4 12H0v1a3 3 0 0 0 3 3h4zM9 0h4a3 3 0 0 1 3 3v1H9zm7 6H9v10h4a3 3 0 0 0 3-3z"/></svg>
                        </div>
                        <div class="p-6">
                            <ul class="stack-list">
                                <li class="stack-item"><span class="tech-tag stack-tag">React.js</span><span class="stack-desc">Komponen UI deklaratif.</span></li>
                                <li class="stack-item"><span class="tech-tag stack-tag">Vue.js</span><span class="stack-desc">Ringan dan progresif.</span></li>
                                <li class="stack-item"><span class="tech-tag stack-tag">Angular</span><span class="stack-desc">Framework terpadu.</span></li>
                                <li class="stack-item"><span class="tech-tag stack-tag">Next.js</span><span class="stack-desc">SSR & routing React.</span></li>
                                <li class="stack-item"><span class="tech-tag stack-tag">Svelte</span><span class="stack-desc">Compiler-first UI.</span></li>
                            </ul>
                        </div>
                    </div>

                    {{-- Web Development Card --}}
                    <div class="tech-card rounded-lg overflow-hidden">
                        <div class="h-24 flex items-center justify-between px-6" style="background-color:#10101A;">
                            <h3 class="text-xl font-semibold glow-green">Web Development</h3>
                            <svg class="w-6 h-6 accent-green" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="currentColor" d="M4 20q-.825 0-1.413-.588T2 18V6q0-.825.588-1.413T4 4h16q.825 0 1.413.588T22 6v12q0 .825-.588 1.413T20 20H4Zm0-2h16V8H4v10Z"/></svg>
                        </div>
                        <div class="p-6">
                            <ul class="stack-list">
                                <li class="stack-item"><span class="tech-tag stack-tag">HTML5</span><span class="stack-desc">Markup modern.</span></li>
                                <li class="stack-item"><span class="tech-tag stack-tag">CSS3</span><span class="stack-desc">Flexbox, Grid, Animations.</span></li>
                                <li class="stack-item"><span class="tech-tag stack-tag">JavaScript (ES6+)</span><span class="stack-desc">Fitur modern JS.</span></li>
                                <li class="stack-item"><span class="tech-tag stack-tag">DOM & Web APIs</span><span class="stack-desc">Manipulasi dan integrasi.</span></li>
                                <li class="stack-item"><span class="tech-tag stack-tag">Responsive</span><span class="stack-desc">Tampilan adaptif.</span></li>
                                <li class="stack-item"><span class="tech-tag stack-tag">Performance</span><span class="stack-desc">Optimasi loading.</span></li>
                            </ul>
                        </div>
                    </div>

                    {{-- Miscellaneous Card --}}
                    <div class="tech-card rounded-lg overflow-hidden">
                        <div class="h-24 flex items-center justify-between px-6" style="background-color:#10101A;">
                            <h3 class="text-xl font-semibold glow-green">Miscellaneous</h3>
                            <svg class="w-6 h-6 accent-green" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"><path fill="currentColor" d="m10.3 8.2l-.9.9l.9.9l-1.2 1.2l4.3 4.3c.6.6 1.5.6 2.1 0s.6-1.5 0-2.1l-5.2-5.2zm3.9 6.8c-.4 0-.8-.3-.8-.8c0-.4.3-.8.8-.8s.8.3.8.8s-.3.8-.8.8zM3.6 8l.9-.6L6 5.7l.9.9l.9-.9l-.1-.1c.2-.5.3-1 .3-1.6c0-2.2-1.8-4-4-4c-.6 0-1.1.1-1.6.3l2.9 2.9l-2.1 2.1L.3 2.4C.1 2.9 0 3.4 0 4c0 2.1 1.6 3.7 3.6 4z"/><path fill="currentColor" d="m8 10.8l.9-.8l-.9-.9l5.7-5.7l1.2-.4L16 .8l-.7-.7l-2.3 1l-.5 1.2L6.9 8L6 7.1l-.8.9s.8.6-.1 1.5c-.5.5-1.3-.1-2.8 1.4L.2 13s-.6 1 .6 2.2s2.2.6 2.2.6l2.1-2.1c1.4-1.4.9-2.3 1.3-2.7c.9-.9 1.6-.2 1.6-.2zm-3.1-.4l.7.7l-3.8 3.8l-.7-.7z"/></svg>
                        </div>
                        <div class="p-6">
                            <ul class="stack-list">
                                <li class="stack-item"><span class="tech-tag stack-tag">Docker</span><span class="stack-desc">Containerization.</span></li>
                                <li class="stack-item"><span class="tech-tag stack-tag">Docker Compose</span><span class="stack-desc">Orkestrasi lokal.</span></li>
                                <li class="stack-item"><span class="tech-tag stack-tag">CI/CD</span><span class="stack-desc">Pipeline otomatis.</span></li>
                                <li class="stack-item"><span class="tech-tag stack-tag">GitHub Actions</span><span class="stack-desc">Workflow GitHub.</span></li>
                                <li class="stack-item"><span class="tech-tag stack-tag">GitLab CI</span><span class="stack-desc">Pipeline GitLab.</span></li>
                                <li class="stack-item"><span class="tech-tag stack-tag">Bash Scripting</span><span class="stack-desc">Automasi terminal.</span></li>
                                <li class="stack-item"><span class="tech-tag stack-tag">NGINX/Apache</span><span class="stack-desc">Konfigurasi server web.</span></li>
                                <li class="stack-item"><span class="tech-tag stack-tag">Git</span><span class="stack-desc">Version control.</span></li>
                            </ul>
                        </div>
                    </div>

                    {{-- LLM (Large Language Model) Card --}}
                    <div class="tech-card rounded-lg overflow-hidden">
                        <div class="h-24 flex items-center justify-between px-6" style="background-color:#10101A;">
                            <h3 class="text-xl font-semibold glow-green">LLM (Large Language Model)</h3>
                            <svg class="w-6 h-6 accent-green" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 8 8"><path fill="currentColor" d="M6 6H0V1h2V0h1v1h2V0h1v1h2v7M2 4v1h4V4M2 3h1V2H2m3 1h1V2H5"/></svg>
                        </div>
                        <div class="p-6">
                            <ul class="stack-list">
                                <li class="stack-item"><span class="tech-tag stack-tag">OpenAI GPT-3</span><span class="stack-desc">Penulisan kode, penjelasan, dan generasi teks.</span></li>
                                <li class="stack-item"><span class="tech-tag stack-tag">GPT-4</span><span class="stack-desc">Analisis data dan pengembangan aplikasi.</span></li>
                                <li class="stack-item"><span class="tech-tag stack-tag">BERT</span><span class="stack-desc">Ppengenalan entitas.</span></li>
                                <li class="stack-item"><span class="tech-tag stack-tag">T5</span><span class="stack-desc">Generasi teks dan pengenalan entitas.</span></li>
                                <li class="stack-item"><span class="tech-tag stack-tag">RoBERTa</span><span class="stack-desc">analisis sentimen dan pengenalan entitas.</span></li>
                                <li class="stack-item"><span class="tech-tag stack-tag">DistilBERT</span><span class="stack-desc">Untuk Tanya Jawab</span></li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="py-16 tech-bg">
        <div class="mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-3xl font-extrabold sm:text-4xl glow-green">Proyek Unggulan</h2>
                <p class="mt-4 max-w-2xl mx-auto text-xl tech-muted">Beberapa proyek teknis yang menunjukkan kemampuan saya dalam mengembangkan solusi end-to-end.</p>
            </div>

            <div class="mt-12">
                @php($hasProjects = isset($projects) && is_array($projects) && count($projects) > 0)
                @if($hasProjects)
                    <div class="project-swiper-shell" aria-label="Slider Proyek Teknologi" role="region">
                        <button class="swiper-nav swiper-button-prev prev" aria-label="Sebelumnya" tabindex="0">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" /></svg>
                        </button>
                        <div class="swiper project-swiper">
                            <div class="swiper-wrapper py-4">
                            @foreach($projects as $p)
                                <div class="swiper-slide">
                                    <div class="tech-card slide-card rounded-lg overflow-hidden flex flex-col">
                                        <div class="project-thumb">
                                            @if(!empty($p['image']))
                                                <img src="{{ $p['image'] }}" alt="Thumbnail {{ $p['title'] }}">
                                            @else
                                                <svg class="w-16 h-16 text-white mx-auto my-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7h18M3 12h18M3 17h18"></path>
                                                </svg>
                                            @endif
                                        </div>
                                        <div class="p-6 flex-1 flex flex-col">
                                            <h3 class="text-xl font-semibold mb-2 glow-green">{{ $p['title'] }}</h3>
                                            <p class="tech-muted mb-4">{{ $p['description'] }}</p>
                                            @if(!empty($p['technologies']))
                                                <div class="flex flex-wrap gap-2 mb-4">
                                                    @foreach($p['technologies'] as $t)
                                                        <span class="tech-tag">{{ $t }}</span>
                                                    @endforeach
                                                </div>
                                            @endif
                                            <div class="mt-auto flex space-x-4">
                                                @if(!empty($p['link']))
                                                    <a href="{{ $p['link'] }}" class="tech-btn inline-flex items-center px-4 py-2 rounded-md" target="_blank" rel="noopener" aria-label="Lihat detail {{ $p['title'] }}">Lihat Detail</a>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            </div>
                        </div>
                        <button class="swiper-nav swiper-button-next next" aria-label="Berikutnya" tabindex="0">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" /></svg>
                        </button>
                        <div class="swiper-pagination" aria-label="Pagination" tabindex="0"></div>
                    </div>
                @else
                    <div class="tech-card rounded-lg p-6 text-center">
                        <p class="tech-muted">Data proyek tidak tersedia atau format tidak valid.</p>
                    </div>
                @endif
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section id="contact" class="py-16 tech-bg-dark">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-extrabold sm:text-4xl glow-green">
                Siap Wujudkan Ide Teknologi Anda?
            </h2>
            <p class="mt-4 text-xl tech-muted">
                Mari berkolaborasi membangun solusi digital inovatif yang skalabel dan efisien untuk kebutuhan bisnis Anda.
            </p>
            <div class="mt-8 flex justify-center space-x-4">
                <a href="{{ route('contact') }}" class="tech-btn inline-flex items-center px-6 py-3 rounded-md">Mulai Proyek Baru</a>
                <a href="https://github.com/ardfar" target="_blank" class="tech-btn inline-flex items-center px-6 py-3 rounded-md">Lihat GitHub</a>
            </div>
        </div>
    </section>
</div>
</body>
</html>