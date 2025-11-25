<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $persona['name'] ?? 'Farras Arrafi - Management & Strategy' }}</title>
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700;900&family=Plus+Jakarta+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        /* Custom Scrollbar */
        .no-scrollbar::-webkit-scrollbar { display: none; }
        .no-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }

        .glass-nav {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(12px);
            border-bottom: 1px solid rgba(0, 0, 0, 0.05);
        }
    </style>
</head>

<body class="bg-white text-gray-800 font-body-mgmt antialiased selection:bg-mgmt-gold selection:text-white overflow-x-hidden">

    <!-- Global Navigation -->
    <nav class="fixed top-0 w-full z-50 glass-nav">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <div class="flex-shrink-0">
                    <a href="{{ route('home') }}" class="font-display-mgmt font-bold text-2xl text-gray-900 tracking-tight hover:opacity-80 transition">
                        farras.<span class="text-mgmt-gold">biz</span>
                    </a>
                </div>
                <!-- Desktop Menu -->
                <div class="hidden md:flex space-x-1 bg-gray-100 p-1 rounded-full border border-gray-200">
                    <a href="{{ route('home') }}" class="px-5 py-2 text-xs font-medium text-gray-500 hover:text-gray-900 transition rounded-full">Overview</a>
                    <a href="{{ route('persona.content', 'tech') }}" class="px-5 py-2 text-xs font-medium text-gray-500 hover:text-[#00F7A6] hover:bg-gray-50 transition rounded-full">Builder (Tech)</a>
                    <a href="#" class="px-5 py-2 text-xs font-bold text-mgmt-dark bg-white shadow-sm border border-gray-200 rounded-full">Leader (Mgmt)</a>
                    <a href="{{ route('persona.content', 'creative') }}" class="px-5 py-2 text-xs font-medium text-gray-500 hover:text-[#86EFAC] hover:bg-gray-50 transition rounded-full">Artist (Creative)</a>
                </div>
                <!-- Mobile Menu Placeholder -->
                <div class="md:hidden text-gray-500">
                    <a href="{{ route('home') }}"><i class="fa-solid fa-bars"></i> Menu</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <header class="relative pt-32 pb-20 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto overflow-hidden min-h-[60vh] flex flex-col justify-center text-center">
        <!-- Abstract Background -->
        <div class="absolute top-[-20%] left-[-10%] w-[600px] h-[600px] bg-amber-50 rounded-full mix-blend-multiply filter blur-[120px] opacity-50 -z-10"></div>
        <div class="absolute bottom-[-20%] right-[-10%] w-[500px] h-[500px] bg-orange-50 rounded-full mix-blend-multiply filter blur-[100px] opacity-50 -z-10"></div>

        <div class="max-w-4xl mx-auto">
            <span class="inline-block py-2 px-6 rounded-full bg-amber-100 text-amber-800 text-xs font-bold tracking-widest uppercase mb-8 border border-amber-200">
                Business Strategy & Leadership
            </span>

            <h1 class="font-display-mgmt text-5xl md:text-7xl font-black text-gray-900 leading-[1.1] mb-8">
                Menerjemahkan Visi <br>
                Menjadi <span
                    class="text-transparent bg-clip-text bg-gradient-to-r from-mgmt-gold to-amber-600 relative">
                    Hasil Nyata
                    <svg class="absolute w-full h-3 -bottom-1 left-0 text-mgmt-gold/30" viewBox="0 0 100 10"
                        preserveAspectRatio="none">
                        <path d="M0 5 Q 50 10 100 5" stroke="currentColor" stroke-width="8" fill="none" />
                    </svg>
                </span>.
            </h1>

            <p class="font-body-mgmt text-lg md:text-xl text-gray-500 max-w-2xl mx-auto leading-relaxed mb-10">
                Saya membantu organisasi menjembatani kesenjangan antara teknologi kompleks dan tujuan bisnis, memastikan setiap inisiatif memiliki ROI yang terukur.
            </p>

            <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                <a href="#case-studies" class="w-full sm:w-auto px-8 py-4 bg-gray-900 text-white font-medium rounded-lg hover:bg-gray-800 transition shadow-lg shadow-gray-900/20">
                    Lihat Track Record
                </a>
                <a href="#roadmap" class="w-full sm:w-auto px-8 py-4 bg-white text-gray-900 border border-gray-200 font-medium rounded-lg hover:border-amber-600 hover:text-amber-600 transition">
                    Lihat Pendekatan Strategis
                </a>
            </div>
        </div>
    </header>

    <!-- Sticky Local Nav (Mobile Scrollable) -->
    <div class="sticky top-20 z-40 bg-white/80 backdrop-blur border-y border-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <nav class="flex space-x-8 overflow-x-auto py-4 no-scrollbar text-sm font-medium text-gray-500">
                <a href="#about" class="whitespace-nowrap hover:text-mgmt-gold transition">01. Kapabilitas</a>
                <a href="#metrics" class="whitespace-nowrap hover:text-mgmt-gold transition">02. Key Metrics</a>
                <a href="#case-studies" class="whitespace-nowrap hover:text-mgmt-gold transition">03. Studi Kasus</a>
                <a href="#roadmap" class="whitespace-nowrap hover:text-mgmt-gold transition">04. Roadmap</a>
            </nav>
        </div>
    </div>

    <!-- Expertise & Metrics Section -->
    <section id="about" class="py-20 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto">
        <div class="grid lg:grid-cols-2 gap-16 items-start">
            <!-- Text Content -->
            <div>
                <h2 class="font-display-mgmt text-3xl md:text-4xl font-bold text-gray-900 mb-6">
                    Menghubungkan Titik-Titik Bisnis.
                </h2>
                <p class="text-gray-600 text-lg leading-relaxed mb-8">
                    Banyak proyek gagal bukan karena kekurangan teknologi, tapi karena kekurangan arah. Dengan latar belakang teknis yang kuat dan pola pikir bisnis, saya memastikan tim *engineer* membangun apa yang benar-benar dibutuhkan pasar.
                </p>

                <div class="space-y-6">
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 rounded-xl bg-amber-50 flex items-center justify-center text-mgmt-gold shrink-0">
                            <i class="fa-solid fa-chess-knight text-xl"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-900">Strategic Planning</h3>
                            <p class="text-sm text-gray-500 mt-1">Market research, competitive analysis, dan go-to-market strategy.</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 rounded-xl bg-amber-50 flex items-center justify-center text-mgmt-gold shrink-0">
                            <i class="fa-solid fa-people-group text-xl"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-900">Team Leadership</h3>
                            <p class="text-sm text-gray-500 mt-1">Memimpin tim lintas fungsi (Product, Design, Engineering) dengan metodologi Agile/Scrum.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Metrics Grid (Responsive) -->
            <div id="metrics" class="bg-gray-50 rounded-3xl p-8 border border-gray-100">
                <h3 class="font-display-mgmt text-xl font-bold text-gray-900 mb-6 border-b border-gray-200 pb-4">
                    Dampak Terukur (KPIs)
                </h3>
                <div class="grid grid-cols-2 gap-6">
                    @foreach($metrics as $metric)
                    <div class="bg-white p-6 rounded-xl shadow-sm">
                        <div class="text-3xl md:text-4xl font-black {{ $metric['color'] }} mb-1">{{ $metric['value'] }}</div>
                        <div class="text-xs font-bold uppercase tracking-wider text-gray-400">{{ $metric['label'] }}</div>
                        <p class="text-xs text-gray-500 mt-2">{{ $metric['desc'] }}</p>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <!-- Case Studies (Responsive Cards) -->
    <section id="case-studies" class="py-20 bg-gray-50 border-y border-gray-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="font-display-mgmt text-3xl md:text-4xl font-bold text-gray-900">Track Record</h2>
                <p class="text-gray-500 mt-4 text-lg">Portofolio kepemimpinan dalam inisiatif strategis.</p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($records as $record)
                <div class="group bg-white rounded-2xl overflow-hidden shadow-soft hover:shadow-card transition-all duration-300 border border-gray-100 flex flex-col h-full">
                    <div class="h-48 bg-gray-800 flex items-center justify-center relative overflow-hidden">
                        <div class="absolute inset-0 bg-gradient-to-br from-gray-700 to-gray-900"></div>
                        <span class="relative z-10 font-display-mgmt font-bold text-2xl text-white tracking-widest">{{ strtoupper($record['title']) }}</span>
                    </div>
                    <div class="p-8 flex-1 flex flex-col">
                        <h3 class="font-bold text-xl text-gray-900 mb-2">{{ $record['title'] }}</h3>
                        <p class="text-gray-600 text-sm mb-6 flex-1">
                            {{ $record['description'] }}
                        </p>
                        <div class="space-y-3 mb-6">
                            <!-- Placeholder for specific metrics per record if available in future -->
                            <div class="flex items-center text-sm text-gray-600">
                                <i class="fa-solid fa-check text-green-500 mr-3"></i> Proven Success
                            </div>
                        </div>
                        <div class="flex flex-wrap gap-2">
                            @foreach($record['tags'] as $tag)
                            <span class="inline-block px-3 py-1 bg-gray-100 text-gray-600 text-xs font-semibold rounded uppercase tracking-wide w-fit">{{ $tag }}</span>
                            @endforeach
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Strategic Roadmap (Responsive Timeline) -->
    <section id="roadmap" class="py-24 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto">
        <div class="text-center mb-16">
            <h2 class="font-display-mgmt text-3xl md:text-4xl font-bold text-gray-900">Metodologi Kerja</h2>
            <p class="text-gray-500 mt-4 text-lg">Bagaimana saya mengubah masalah menjadi solusi.</p>
        </div>

        <div class="relative">
            <!-- Vertical Line (Mobile) / Horizontal Line (Desktop) -->
            <div class="absolute left-8 top-0 bottom-0 w-0.5 bg-gray-200 md:left-0 md:right-0 md:top-12 md:h-0.5 md:w-full"></div>

            <div class="grid grid-cols-1 md:grid-cols-4 gap-12 md:gap-4 relative">
                @foreach($roadmap as $step)
                <div class="relative flex md:block items-start">
                    <div class="md:mx-auto w-16 h-16 rounded-full bg-white border-4 {{ $step['border'] }} flex items-center justify-center z-10 text-xl font-bold {{ $step['text'] }} shadow-lg shrink-0">
                        {{ $step['step'] }}
                    </div>
                    <div class="ml-8 md:ml-0 md:mt-6 md:text-center pt-2 md:pt-0">
                        <h3 class="font-bold text-lg text-gray-900">{{ $step['title'] }}</h3>
                        <p class="text-sm text-gray-500 mt-2">{{ $step['desc'] }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section id="contact" class="py-20 bg-gray-900 text-white text-center px-4">
        <div class="max-w-3xl mx-auto">
            <h2 class="font-display-mgmt text-3xl md:text-5xl font-bold mb-6">Butuh Strategi yang Jelas?</h2>
            <p class="text-gray-400 text-lg mb-10">
                Jangan biarkan ide bisnis Anda terhenti di tahap konsep. Mari diskusikan bagaimana kita bisa mengeksekusinya menjadi produk yang profitable.
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="{{ route('contact') }}" class="px-8 py-4 bg-white text-gray-900 font-bold rounded-lg hover:bg-gray-100 transition">
                    Konsultasi Bisnis
                </a>
                <a href="#" class="px-8 py-4 border border-gray-600 text-white font-medium rounded-lg hover:border-white transition">
                    Lihat LinkedIn
                </a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-slate-850 text-gray-500 py-8 border-t border-gray-800 text-center text-xs font-mono">
        <p>© {{ date('Y') }} Farras Arrafi. Management & Strategy Portfolio.</p>
    </footer>

</body>
</html>