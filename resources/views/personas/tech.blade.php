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

    <!-- Tech Stack Section (from docs/tech-stack.md) -->
    <section id="stack" class="py-16 tech-bg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="section-highlight rounded-2xl p-8">
                <div class="text-center">
                    <h2 class="text-3xl font-extrabold sm:text-4xl glow-green">Tech Stack</h2>
                    <p class="mt-4 max-w-2xl mx-auto text-xl tech-muted">Ringkasan teknologi yang digunakan, disusun berdasarkan kategori untuk memudahkan navigasi.</p>
                </div>
                <div class="mt-8 stack-links justify-center">
                    <a href="https://www.python.org/" class="tech-btn inline-flex items-center gap-2 px-4 py-2 rounded" target="_blank" rel="noopener">
                        <svg class="w-4 h-4 accent-green" viewBox="0 0 24 24" fill="none" stroke="currentColor" aria-hidden="true"><rect x="3" y="5" width="18" height="12" rx="2"></rect><path d="M7 10l2 2-2 2"></path><path d="M12 14h5"></path></svg>
                        <span>Python</span>
                    </a>
                    <a href="https://www.tensorflow.org/" class="tech-btn inline-flex items-center gap-2 px-4 py-2 rounded" target="_blank" rel="noopener">
                        <svg class="w-4 h-4 accent-green" viewBox="0 0 24 24" fill="none" stroke="currentColor" aria-hidden="true"><path d="M12 3l8 4-8 4-8-4 8-4z"></path><path d="M4 11l8 4 8-4"></path><path d="M4 15l8 4 8-4"></path></svg>
                        <span>TensorFlow</span>
                    </a>
                    <a href="https://pytorch.org/" class="tech-btn inline-flex items-center gap-2 px-4 py-2 rounded" target="_blank" rel="noopener">
                        <svg class="w-4 h-4 accent-green" viewBox="0 0 24 24" fill="none" stroke="currentColor" aria-hidden="true"><path d="M12 4c2.5 3.2 6 5.3 6 9a6 6 0 11-12 0c0-3.7 3.5-5.8 6-9z"></path><circle cx="17" cy="8" r="1"></circle></svg>
                        <span>PyTorch</span>
                    </a>
                    <a href="https://laravel.com/" class="tech-btn inline-flex items-center gap-2 px-4 py-2 rounded" target="_blank" rel="noopener">
                        <svg class="w-4 h-4 accent-green" viewBox="0 0 24 24" fill="none" stroke="currentColor" aria-hidden="true"><path d="M12 3l8 5-8 5-8-5 8-5z"></path><path d="M4 8v8l8 5 8-5V8"></path></svg>
                        <span>Laravel</span>
                    </a>
                    <a href="https://react.dev/" class="tech-btn inline-flex items-center gap-2 px-4 py-2 rounded" target="_blank" rel="noopener">
                        <svg class="w-4 h-4 accent-green" viewBox="0 0 24 24" fill="none" stroke="currentColor" aria-hidden="true"><circle cx="12" cy="12" r="2"></circle><ellipse cx="12" cy="12" rx="8" ry="4"></ellipse><ellipse transform="rotate(60 12 12)" cx="12" cy="12" rx="8" ry="4"></ellipse><ellipse transform="rotate(120 12 12)" cx="12" cy="12" rx="8" ry="4"></ellipse></svg>
                        <span>React</span>
                    </a>
                    <a href="https://www.docker.com/" class="tech-btn inline-flex items-center gap-2 px-4 py-2 rounded" target="_blank" rel="noopener">
                        <svg class="w-4 h-4 accent-green" viewBox="0 0 24 24" fill="none" stroke="currentColor" aria-hidden="true"><rect x="3" y="12" width="4" height="3"></rect><rect x="8" y="12" width="4" height="3"></rect><rect x="13" y="12" width="4" height="3"></rect><path d="M3 16h16a3 3 0 01-3 3H6a3 3 0 01-3-3z"></path></svg>
                        <span>Docker</span>
                    </a>
                </div>
                <div class="mt-12 grid gap-8 md:grid-cols-2 lg:grid-cols-3">
                    <div class="tech-card rounded-lg overflow-hidden">
                        <div class="h-24 flex items-center justify-between px-6" style="background-color:#10101A;">
                            <h3 class="text-xl font-semibold glow-green">AI & Machine Learning</h3>
                            <svg class="w-6 h-6 accent-green" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M12 2l3 3-3 3-3-3 3-3zm0 14l3 3-3 3-3-3 3-3zM2 12l3-3 3 3-3 3-3-3zm16-3l3 3-3 3-3-3 3-3z"></path></svg>
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

                    <div class="tech-card rounded-lg overflow-hidden">
                        <div class="h-24 flex items-center justify-between px-6" style="background-color:#10101A;">
                            <h3 class="text-xl font-semibold glow-green">PHP & Laravel</h3>
                            <svg class="w-6 h-6 accent-green" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M4 4h16v4H4V4zm0 6h16v10H4V10z"></path></svg>
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

                    <div class="tech-card rounded-lg overflow-hidden">
                        <div class="h-24 flex items-center justify-between px-6" style="background-color:#10101A;">
                            <h3 class="text-xl font-semibold glow-green">Web Development</h3>
                            <svg class="w-6 h-6 accent-green" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M3 4h18v12H3zM2 18h20v2H2z"></path></svg>
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

                    <div class="tech-card rounded-lg overflow-hidden">
                        <div class="h-24 flex items-center justify-between px-6" style="background-color:#10101A;">
                            <h3 class="text-xl font-semibold glow-green">Front-end Frameworks</h3>
                            <svg class="w-6 h-6 accent-green" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M12 2l10 6-10 6L2 8l10-6zm0 12l10 6-10 6-10-6 10-6z"></path></svg>
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

                    <div class="tech-card rounded-lg overflow-hidden">
                        <div class="h-24 flex items-center justify-between px-6" style="background-color:#10101A;">
                            <h3 class="text-xl font-semibold glow-green">Miscellaneous</h3>
                            <svg class="w-6 h-6 accent-green" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M12 2a5 5 0 015 5v3h3a4 4 0 010 8h-3v3a5 5 0 01-10 0v-3H4a4 4 0 110-8h3V7a5 5 0 015-5z"></path></svg>
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

                    <div class="tech-card rounded-lg overflow-hidden">
                        <div class="h-24 flex items-center justify-between px-6" style="background-color:#10101A;">
                            <h3 class="text-xl font-semibold glow-green">LLM (Large Language Model)</h3>
                            <svg class="w-6 h-6 accent-green" viewBox="0 0 24 24" fill="none" stroke="currentColor" aria-hidden="true"><path d="M12 3c4.418 0 8 3.582 8 8s-3.582 8-8 8-8-3.582-8-8 3.582-8 8-8z"></path><path d="M8.5 12h7M9 9.5l6 6"></path></svg>
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