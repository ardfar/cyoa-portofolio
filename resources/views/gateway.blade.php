<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('portfolio.site.title', 'Welcome - Choose Your Path') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link
        href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;700&family=Inter:wght@300;400;600&display=swap"
        rel="stylesheet">
</head>

<body
    class="bg-persona-dark text-white h-screen flex flex-col overflow-hidden selection:bg-persona-tech selection:text-persona-dark font-body">
    <div class="absolute inset-0 overflow-hidden -z-10 pointer-events-none">
        <div class="absolute -top-10 -left-10 w-[500px] h-[500px] bg-persona-tech/5 rounded-full blur-[120px]"></div>
        <div class="absolute -bottom-10 -right-10 w-[500px] h-[500px] bg-persona-mgmt/5 rounded-full blur-[120px]">
        </div>
    </div>

    <div class="flex-1 flex flex-col items-center justify-center px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto w-full">
        <div class="text-center mb-12 animate-float">
            <div class="relative w-72 h-72 mx-auto mb-6 group">
                <div
                    class="absolute inset-0 rounded-full bg-gradient-to-r from-persona-tech via-persona-mgmt to-persona-art blur opacity-50 group-hover:opacity-100 transition duration-500 animate-pulse-slow">
                </div>
                @php($avatarFile = public_path('images/profile.jpg'))
                @if (file_exists($avatarFile))
                    <img src="{{ asset('images/profile.jpg') }}" alt="Farras Arrafi"
                        class="relative w-full h-full object-cover rounded-full border-2 border-white/10 group-hover:border-white/30 transition">
                @else
                    <div
                        class="relative w-full h-full rounded-full border-2 border-white/10 group-hover:border-white/30 transition bg-slate-800 flex items-center justify-center">
                        <span class="text-xl font-bold">FA</span>
                    </div>
                @endif
            </div>
            <h1 class="font-display text-4xl md:text-5xl font-bold mb-3 tracking-tight">
                Halo, saya <span
                    class="text-transparent bg-clip-text bg-gradient-to-r from-persona-tech via-persona-mgmt to-persona-art">Farras
                    Arrafi</span>
            </h1>
            <p class="text-slate-400 text-lg max-w-xl mx-auto">
                Selamat datang di arsip digital saya. Silakan pilih Dunia mana yang ingin Anda jelajahi hari ini.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 w-full max-w-5xl">
            <a href="{{ url('/persona/tech') }}"
                class="group card-hover hover-tech relative bg-white/5 border border-white/10 rounded-2xl p-8 cursor-pointer overflow-hidden">
                <div
                    class="absolute top-0 left-0 w-1 h-full bg-persona-tech opacity-50 group-hover:opacity-100 transition">
                </div>
                <div class="relative z-10">
                    <div
                        class="w-12 h-12 bg-persona-tech/10 rounded-lg flex items-center justify-center mb-6 group-hover:bg-persona-tech/20 transition text-persona-tech">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                        </svg>
                    </div>
                    <h2
                        class="font-display text-2xl font-bold mb-2 text-white group-hover:text-persona-tech transition">
                        Technology &amp; Engineering</h2>
                    <p class="text-sm text-slate-400 mb-4 line-clamp-2">Full Stack Development, AI/ML Engineering, &
                        System Architecture.</p>
                    <span
                        class="text-xs font-mono text-persona-tech opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center gap-1">&gt;
                        ENTER_TERMINAL <span class="animate-pulse">_</span></span>
                </div>
                <div
                    class="absolute -right-5 -bottom-5 text-[100px] font-display font-bold text-white/5 -rotate-12 pointer-events-none">
                    {}</div>
            </a>

            <a href="{{ url('/persona/management') }}"
                class="group card-hover hover-mgmt relative bg-white/5 border border-white/10 rounded-2xl p-8 cursor-pointer overflow-hidden">
                <div
                    class="absolute top-0 left-0 w-1 h-full bg-persona-mgmt opacity-50 group-hover:opacity-100 transition">
                </div>
                <div class="relative z-10">
                    <div
                        class="w-12 h-12 bg-persona-mgmt/10 rounded-lg flex items-center justify-center mb-6 group-hover:bg-persona-mgmt/20 transition text-persona-mgmt">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z">
                            </path>
                        </svg>
                    </div>
                    <h2
                        class="font-display text-2xl font-bold mb-2 text-white group-hover:text-persona-mgmt transition">
                        Management &amp; Strategy</h2>
                    <p class="text-sm text-slate-400 mb-4 line-clamp-2">Project Management, Product Strategy, & Business
                        Development.</p>
                    <span
                        class="text-xs font-mono text-persona-mgmt opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center gap-1">&gt;
                        VIEW_METRICS ↗</span>
                </div>
                <div
                    class="absolute -right-5 -bottom-5 text-[100px] font-display font-bold text-white/5 -rotate-12 pointer-events-none">
                    %</div>
            </a>

            <a href="{{ url('/persona/creative') }}"
                class="group card-hover hover-art relative bg-white/5 border border-white/10 rounded-2xl p-8 cursor-pointer overflow-hidden">
                <div
                    class="absolute top-0 left-0 w-1 h-full bg-persona-art opacity-50 group-hover:opacity-100 transition">
                </div>
                <div class="relative z-10">
                    <div
                        class="w-12 h-12 bg-persona-art/10 rounded-lg flex items-center justify-center mb-6 group-hover:bg-persona-art/20 transition text-persona-art">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z">
                            </path>
                        </svg>
                    </div>
                    <h2 class="font-display text-2xl font-bold mb-2 text-white group-hover:text-persona-art transition">
                        Operations &amp; Creative</h2>
                    <p class="text-sm text-slate-400 mb-4 line-clamp-2">Photography, Visual Design, & Creative Problem
                        Solving.</p>
                    <span
                        class="text-xs font-mono text-persona-art opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center gap-1">&gt;
                        OPEN_GALLERY *</span>
                </div>
                <div
                    class="absolute -right-5 -bottom-5 text-[100px] font-display font-bold text-white/5 -rotate-12 pointer-events-none">
                    @</div>
            </a>
        </div>

        <div class="mt-12">
            <a href="{{ route('resume') }}"
                class="text-slate-500 hover:text-white text-sm transition flex items-center gap-2 group">
                <span class="w-8 h-px bg-slate-700 group-hover:bg-white transition"></span>
                Atau lihat ringkasan karir penuh (Resume)
                <span class="w-8 h-px bg-slate-700 group-hover:bg-white transition"></span>
            </a>
        </div>
    </div>
</body>

</html>
