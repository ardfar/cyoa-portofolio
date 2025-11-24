<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $persona['name'] ?? 'Farras Arrafi - Technology & Engineering' }}</title>
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;500;700&family=Inter:wght@300;400;600&family=JetBrains+Mono:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper@9/swiper-bundle.min.css" />
    
    <style>
        /* Custom Scrollbar */
        ::-webkit-scrollbar { width: 6px; height: 6px; }
        ::-webkit-scrollbar-track { background: #0B1120; }
        ::-webkit-scrollbar-thumb { background: #1E293B; border-radius: 3px; }
        ::-webkit-scrollbar-thumb:hover { background: #00F7A6; }

        .glass-nav {
            background: rgba(11, 17, 32, 0.85);
            backdrop-filter: blur(12px);
            border-bottom: 1px solid rgba(0, 247, 166, 0.1);
        }

        .tech-glow-text {
            text-shadow: 0 0 20px rgba(0, 247, 166, 0.3);
        }

        .grid-bg {
            background-image: linear-gradient(to right, #1E293B 1px, transparent 1px),
                              linear-gradient(to bottom, #1E293B 1px, transparent 1px);
            background-size: 40px 40px;
            opacity: 0.1;
        }
    </style>
</head>

<body class="bg-dark text-slate-300 font-body antialiased selection:bg-tech selection:text-dark overflow-x-hidden">

    <!-- Global Navigation (Consistent) -->
    <nav class="fixed top-0 w-full z-50 glass-nav">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex-shrink-0">
                    <a href="{{ route('home') }}" class="font-display font-bold text-xl text-white tracking-tight group">
                        <span class="text-tech mr-1 group-hover:animate-pulse">></span>farras.<span class="text-slate-500">dev</span>
                    </a>
                </div>
                <!-- Desktop Menu -->
                <div class="hidden md:flex space-x-1 bg-dark/50 p-1 rounded-full border border-white/5">
                    <a href="{{ route('home') }}" class="px-4 py-1.5 text-xs font-medium text-slate-400 hover:text-white transition rounded-full">Overview</a>
                    <a href="#" class="px-4 py-1.5 text-xs font-medium text-dark bg-tech rounded-full shadow-[0_0_15px_rgba(0,247,166,0.4)]">Builder (Tech)</a>
                    <a href="{{ route('persona.content', 'management') }}" class="px-4 py-1.5 text-xs font-medium text-slate-400 hover:text-[#FCD34D] transition rounded-full">Leader (Mgmt)</a>
                    <a href="{{ route('persona.content', 'creative') }}" class="px-4 py-1.5 text-xs font-medium text-slate-400 hover:text-[#86EFAC] transition rounded-full">Artist (Creative)</a>
                </div>
                <!-- Mobile Menu Button (Placeholder logic) -->
                <div class="md:hidden">
                    <a href="{{ route('home') }}" class="text-slate-400 hover:text-tech"><i class="fa-solid fa-bars"></i> Menu</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <header class="relative pt-32 pb-20 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto min-h-[60vh] flex flex-col justify-center">
        <!-- Tech Background Elements -->
        <div class="absolute inset-0 grid-bg -z-10"></div>
        <div class="absolute top-1/2 -translate-y-1/2 right-10 w-[400px] h-[400px] bg-tech/20 rounded-full blur-[120px] -z-10"></div>

        <div class="max-w-4xl">
            <div class="inline-flex items-center gap-2 px-3 py-1 rounded border border-tech/30 bg-tech/5 text-tech font-mono text-xs mb-6">
                <span class="w-2 h-2 bg-tech rounded-full animate-ping"></span>
                SYSTEM_ONLINE: PORTFOLIO_V2.0
            </div>
            
            <h1 class="font-display text-5xl md:text-7xl font-bold text-white leading-tight mb-6 tech-glow-text">
                {!! $persona['headline'] ?? 'Membangun <br><span class="text-transparent bg-clip-text bg-gradient-to-r from-tech to-emerald-500">Ekosistem Digital</span> <br>yang Cerdas.' !!}
            </h1>
            
            <p class="text-lg text-slate-400 max-w-2xl leading-relaxed font-mono">
                // {{ implode(' & ', $persona['roles'] ?? ['Full-Stack Developer', 'AI Engineer']) }} <br>
                {{ $persona['description'] ?? 'Menggabungkan ketangguhan kode dengan kecerdasan data untuk menciptakan solusi yang scalable dan efisien.' }}
            </p>

            <div class="mt-10 flex flex-wrap gap-4">
                <a href="#projects" class="px-6 py-3 bg-tech text-dark font-bold rounded hover:bg-emerald-400 transition shadow-[0_0_20px_rgba(0,247,166,0.3)]">
                    Lihat Proyek
                </a>
                <a href="#stack" class="px-6 py-3 border border-slate-600 text-slate-300 rounded hover:border-tech hover:text-tech transition font-mono">
                    view_stack()
                </a>
            </div>
        </div>
    </header>

    <!-- Sticky Local Nav (Mobile Scrollable) -->
    <div class="sticky top-16 z-40 bg-dark/90 backdrop-blur border-y border-border">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <nav class="flex space-x-8 overflow-x-auto py-4 no-scrollbar text-sm font-mono">
                <a href="#about" class="whitespace-nowrap text-tech hover:underline decoration-tech underline-offset-4">01. Tentang</a>
                <a href="#stack" class="whitespace-nowrap text-slate-400 hover:text-white transition">02. Tech Stack</a>
                <a href="#projects" class="whitespace-nowrap text-slate-400 hover:text-white transition">03. Proyek</a>
                <a href="#github" class="whitespace-nowrap text-slate-400 hover:text-white transition">04. GitHub</a>
            </nav>
        </div>
    </div>

    <!-- About Section -->
    <section id="about" class="py-20 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto border-b border-border">
        <div class="grid md:grid-cols-2 gap-12 items-center">
            <div>
                <h2 class="font-display text-3xl font-bold text-white mb-6">Engineer & Problem Solver.</h2>
                <p class="text-slate-400 mb-6 leading-relaxed">
                    Di dunia yang penuh dengan kebisingan data, saya membangun struktur. Fokus saya bukan hanya menulis kode yang berjalan, tapi menciptakan arsitektur yang *maintainable* dan performan.
                </p>
                <div class="space-y-4">
                    @foreach($experiences as $exp)
                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 rounded bg-card border border-border flex items-center justify-center text-tech shrink-0">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path></svg>
                        </div>
                        <div>
                            <h3 class="text-white font-bold">{{ $exp['title'] }}</h3>
                            <p class="text-sm text-slate-500">{{ $exp['org'] ?? 'Experience' }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <!-- Code Snippet Visual -->
            <div class="bg-card border border-border rounded-lg p-6 font-mono text-xs md:text-sm overflow-hidden relative group">
                <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-tech to-transparent"></div>
                <div class="text-slate-500 mb-2">// My Philosophy</div>
                <div class="text-purple-400">class</div> <div class="text-yellow-300 inline">Engineer</div> {
                <div class="pl-4">
                    <span class="text-purple-400">constructor</span>() {
                    <div class="pl-4">
                        <span class="text-blue-400">this</span>.passion = <span class="text-green-400">"Clean Code"</span>;<br>
                        <span class="text-blue-400">this</span>.goal = <span class="text-green-400">"Scalable Solutions"</span>;
                    </div>
                    }
                    <br>
                    <span class="text-purple-400">solve</span>(problem) {
                    <div class="pl-4">
                        <span class="text-purple-400">return</span> problem.<span class="text-blue-400">optimize</span>().<span class="text-blue-400">deploy</span>();
                    </div>
                    }
                </div>
                }
            </div>
        </div>
    </section>

    <!-- Tech Stack Grid -->
    <section id="stack" class="py-20 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto">
        <div class="text-center mb-12">
            <h2 class="font-display text-3xl font-bold text-white">The Arsenal</h2>
            <p class="text-slate-500 mt-2">Teknologi yang saya gunakan untuk membangun masa depan.</p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach($stack as $category)
            <div class="bg-card border border-border p-6 rounded-xl hover:border-tech/50 transition group">
                <h3 class="font-mono text-tech mb-4 text-sm border-b border-border pb-2 group-hover:border-tech/30">{{ $category['title'] }}</h3>
                <ul class="space-y-2 text-sm text-slate-300">
                    @foreach($category['items'] as $item)
                    <li class="flex justify-between"><span>{{ $item['name'] }}</span> <span class="{{ $item['class'] }} text-xs">{{ $item['level'] }}</span></li>
                    @endforeach
                </ul>
            </div>
            @endforeach
        </div>
    </section>

    <!-- Projects (Swiper) -->
    <section id="projects" class="py-20 bg-black/20 border-y border-border">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-end mb-10">
                <div>
                    <h2 class="font-display text-3xl font-bold text-white">Featured Projects</h2>
                    <p class="text-slate-500 mt-2">Implementasi nyata dari kemampuan teknis.</p>
                </div>
                <div class="flex gap-2">
                    <button class="swiper-button-prev-custom p-3 rounded-full border border-border hover:bg-tech hover:text-dark transition text-slate-400">
                        <i class="fa-solid fa-arrow-left"></i> ←
                    </button>
                    <button class="swiper-button-next-custom p-3 rounded-full border border-border hover:bg-tech hover:text-dark transition text-slate-400">
                        →
                    </button>
                </div>
            </div>

            <!-- Swiper Container -->
            <div class="swiper project-swiper overflow-visible">
                <div class="swiper-wrapper">
                    
                    @foreach($projects as $project)
                    <div class="swiper-slide h-auto">
                        <div class="bg-card border border-border rounded-xl overflow-hidden h-full flex flex-col hover:border-tech/50 transition group">
                            <div class="h-48 bg-slate-800 flex items-center justify-center group-hover:bg-slate-700 transition relative overflow-hidden">
                                <div class="absolute inset-0 bg-tech/10 opacity-0 group-hover:opacity-100 transition"></div>
                                <span class="font-mono text-4xl text-slate-600 group-hover:text-tech transition">{{ strtoupper(str()->limit($project['title'], 10)) }}</span>
                            </div>
                            <div class="p-6 flex-1 flex flex-col">
                                <h3 class="text-xl font-bold text-white mb-2">{{ $project['title'] }}</h3>
                                <p class="text-sm text-slate-400 mb-4 flex-1">{{ str()->limit($project['description'], 100) }}</p>
                                <div class="flex flex-wrap gap-2 mb-6">
                                    @foreach($project['technologies'] as $tech)
                                    <span class="px-2 py-1 bg-dark border border-border rounded text-[10px] text-tech font-mono">{{ $tech }}</span>
                                    @endforeach
                                </div>
                                @if($project['link'])
                                <a href="{{ $project['link'] }}" class="text-sm font-mono text-white hover:text-tech flex items-center gap-2">
                                    Lihat Repository <span class="text-xs">↗</span>
                                </a>
                                @endif
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section id="contact" class="py-24 px-4 text-center">
        <h2 class="font-display text-3xl md:text-4xl font-bold text-white mb-6">Ready to Deploy?</h2>
        <p class="text-slate-400 mb-8 max-w-xl mx-auto">
            Jika Anda membutuhkan solusi teknis yang kompleks, saya siap membantu menerjemahkan kebutuhan bisnis menjadi kode yang efisien.
        </p>
        <a href="{{ route('contact') }}" class="inline-block px-8 py-4 bg-tech text-dark font-bold rounded hover:bg-emerald-400 transition shadow-[0_0_20px_rgba(0,247,166,0.4)]">
            Mulai Kolaborasi Teknis
        </a>
    </section>

    <!-- Footer -->
    <footer class="py-8 border-t border-border text-center text-xs font-mono text-slate-600">
        © {{ date('Y') }} Farras Arrafi. System Status: <span class="text-tech">ONLINE</span>
    </footer>

    <script src="https://unpkg.com/swiper@9/swiper-bundle.min.js"></script>
    <script>
        const swiper = new Swiper('.project-swiper', {
            slidesPerView: 1,
            spaceBetween: 24,
            navigation: {
                nextEl: '.swiper-button-next-custom',
                prevEl: '.swiper-button-prev-custom',
            },
            breakpoints: {
                640: {
                    slidesPerView: 2,
                },
                1024: {
                    slidesPerView: 3,
                },
            },
        });
    </script>
</body>
</html>