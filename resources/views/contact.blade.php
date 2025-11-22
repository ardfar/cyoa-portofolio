<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('portfolio.contact.seo.title', 'Hubungi Farras - Start a Collaboration') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;500;700&family=Inter:wght@300;400;600&family=JetBrains+Mono:wght@400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-persona-dark text-slate-300 font-body antialiased selection:bg-persona-tech selection:text-persona-dark">
    <nav class="fixed top-0 w-full z-50 glass-card border-b border-white/10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex-shrink-0">
                    <a href="{{ route('home') }}" class="font-display font-bold text-2xl text-white tracking-tight hover:opacity-80 transition">farras.<span class="text-slate-500">arrafi</span></a>
                </div>
                <div class="hidden md:flex space-x-8">
                    <a href="{{ route('home') }}" class="text-sm font-medium text-slate-400 hover:text-white transition">Kembali ke Beranda</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="min-h-screen pt-24 pb-12 px-4 sm:px-6 lg:px-8 flex flex-col md:flex-row max-w-7xl mx-auto gap-12">
        <div class="w-full md:w-5/12 space-y-8">
            <div>
                <div class="inline-flex items-center space-x-2 bg-persona-tech/10 px-3 py-1 rounded-full border border-persona-tech/20 mb-6">
                    <span class="w-2 h-2 rounded-full bg-persona-tech animate-pulse"></span>
                    <span class="text-xs font-mono text-persona-tech">Available for New Projects</span>
                </div>
                <h1 class="font-display text-4xl md:text-5xl font-bold text-white mb-4">Mari Membangun <br> Sesuatu yang <span class="text-transparent bg-clip-text bg-gradient-to-r from-persona-tech to-persona-mgmt">Hebat</span>.</h1>
                <p class="text-slate-400 text-lg leading-relaxed">Punya ide startup? Butuh transformasi digital korporat? Atau ingin mengabadikan momen visual? Ceritakan kebutuhan Anda, dan saya akan menyesuaikan topi saya untuk Anda.</p>
            </div>

            <div class="glass-card rounded-2xl p-6 space-y-6">
                <div class="flex items-start space-x-4">
                    <div class="w-10 h-10 rounded-lg bg-slate-800 flex items-center justify-center text-persona-tech border border-white/5"><i class="fa-regular fa-envelope"></i></div>
                    <div>
                        <h3 class="text-white font-bold text-sm">Email</h3>
                        @obfuscateEmail('me@aradenta.com', 'text-slate-400 hover:text-persona-tech transition text-sm font-mono')
                    </div>
                </div>
                <div class="flex items-start space-x-4">
                    <div class="w-10 h-10 rounded-lg bg-slate-800 flex items-center justify-center text-persona-mgmt border border-white/5"><i class="fa-solid fa-location-dot"></i></div>
                    <div>
                        <h3 class="text-white font-bold text-sm">Basis Operasional</h3>
                        <p class="text-slate-400 text-sm">Bekasi, Jawa Barat</p>
                        <p class="text-xs text-slate-600 mt-1">Siap untuk Meeting Online & Hybrid</p>
                    </div>
                </div>
                <div class="flex items-start space-x-4">
                    <div class="w-10 h-10 rounded-lg bg-slate-800 flex items-center justify-center text-persona-art border border-white/5"><i class="fa-brands fa-whatsapp"></i></div>
                    <div>
                        <h3 class="text-white font-bold text-sm">WhatsApp</h3>
                        @obfuscatePhone('+62 895-3150-3505', 'wa', 'text-slate-400 hover:text-persona-art transition text-sm font-mono')
                    </div>
                </div>
            </div>

            <div class="flex gap-4">
                <a href="https://linkedin.com/in/farras-arrafi" class="w-12 h-12 rounded-full bg-slate-800 border border-white/10 flex items-center justify-center text-slate-400 hover:bg-[#0077b5] hover:text-white hover:border-[#0077b5] transition duration-300"><i class="fa-brands fa-linkedin-in text-xl"></i></a>
                <a href="https://github.com/farras-arrafi" class="w-12 h-12 rounded-full bg-slate-800 border border-white/10 flex items-center justify-center text-slate-400 hover:bg-white hover:text-black hover:border-white transition duration-300"><i class="fa-brands fa-github text-xl"></i></a>
                <a href="#" class="w-12 h-12 rounded-full bg-slate-800 border border-white/10 flex items-center justify-center text-slate-400 hover:bg-persona-art hover:text-persona-dark hover:border-persona-art transition duration-300"><i class="fa-brands fa-instagram text-xl"></i></a>
            </div>
        </div>

        <div class="w-full md:w-7/12">
            <form id="contact-form" action="{{ route('contact.send') }}" method="POST" class="glass-card p-8 rounded-3xl border border-white/10 relative overflow-hidden">
                @csrf
                <div class="absolute top-0 right-0 w-32 h-32 bg-white/5 rounded-full blur-3xl -mr-16 -mt-16 pointer-events-none"></div>
                <h2 class="font-display text-2xl font-bold text-white mb-6">Kirim Pesan</h2>
                @if(session('success'))
                    <div class="my-2 p-4 rounded-md bg-green-50 text-green-700">{{ session('success') }}</div>
                @endif
                @if ($errors->any())
                    <div class="mt-2 p-4 rounded-md bg-red-50 text-red-700">
                        <ul class="list-disc pl-5">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="mb-8">
                    <label class="block text-xs font-mono text-slate-500 uppercase tracking-wider mb-4">Tentang apa pesan ini?</label>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <label class="cursor-pointer group relative" style="--active-color: #00F7A6; --active-color-glow: rgba(0, 247, 166, 0.4);">
                            <input type="radio" name="topic" value="tech" class="sr-only" checked>
                            <div class="p-4 rounded-xl border border-white/10 bg-slate-800/50 hover:bg-slate-800 transition-all duration-300 flex items-center gap-3 group-hover:border-persona-tech/50">
                                <div class="icon-box w-8 h-8 rounded bg-slate-700 flex items-center justify-center text-slate-400 transition-colors duration-300"><i class="fa-solid fa-code"></i></div>
                                <div><span class="block text-sm font-bold text-white">Development</span><span class="block text-[10px] text-slate-500">Web, App, AI System</span></div>
                            </div>
                        </label>
                        <label class="cursor-pointer group relative" style="--active-color: #FCD34D; --active-color-glow: rgba(252, 211, 77, 0.4);">
                            <input type="radio" name="topic" value="mgmt" class="sr-only">
                            <div class="p-4 rounded-xl border border-white/10 bg-slate-800/50 hover:bg-slate-800 transition-all duration-300 flex items-center gap-3 group-hover:border-persona-mgmt/50">
                                <div class="icon-box w-8 h-8 rounded bg-slate-700 flex items-center justify-center text-slate-400 transition-colors duration-300"><i class="fa-solid fa-chart-line"></i></div>
                                <div><span class="block text-sm font-bold text-white">Business</span><span class="block text-[10px] text-slate-500">Project, Consult, Strategy</span></div>
                            </div>
                        </label>
                        <label class="cursor-pointer group relative" style="--active-color: #86EFAC; --active-color-glow: rgba(134, 239, 172, 0.4);">
                            <input type="radio" name="topic" value="creative" class="sr-only">
                            <div class="p-4 rounded-xl border border-white/10 bg-slate-800/50 hover:bg-slate-800 transition-all duration-300 flex items-center gap-3 group-hover:border-persona-art/50">
                                <div class="icon-box w-8 h-8 rounded bg-slate-700 flex items-center justify-center text-slate-400 transition-colors duration-300"><i class="fa-solid fa-camera"></i></div>
                                <div><span class="block text-sm font-bold text-white">Creative</span><span class="block text-[10px] text-slate-500">Design, Photo, Visual</span></div>
                            </div>
                        </label>
                        <label class="cursor-pointer group relative" style="--active-color: #ffffff; --active-color-glow: rgba(255, 255, 255, 0.4);">
                            <input type="radio" name="topic" value="general" class="sr-only">
                            <div class="p-4 rounded-xl border border-white/10 bg-slate-800/50 hover:bg-slate-800 transition-all duration-300 flex items-center gap-3 group-hover:border-white/50">
                                <div class="icon-box w-8 h-8 rounded bg-slate-700 flex items-center justify-center text-slate-400 transition-colors duration-300"><i class="fa-regular fa-comment"></i></div>
                                <div><span class="block text-sm font-bold text-white">Lainnya</span><span class="block text-[10px] text-slate-500">General Inquiry / Hello</span></div>
                            </div>
                        </label>
                    </div>
                </div>
                <div class="space-y-5">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                        <div class="space-y-1"><label class="text-xs font-medium text-slate-400">Nama Lengkap</label><input type="text" name="name" placeholder="Nama Anda" class="w-full bg-slate-900/50 border border-white/10 rounded-lg px-4 py-3 text-white focus:outline-none focus:border-persona-tech focus:ring-1 focus:ring-persona-tech transition placeholder-slate-600" required></div>
                        <div class="space-y-1"><label class="text-xs font-medium text-slate-400">Email</label><input type="email" name="email" placeholder="email@anda.com" class="w-full bg-slate-900/50 border border-white/10 rounded-lg px-4 py-3 text-white focus:outline-none focus:border-persona-tech focus:ring-1 focus:ring-persona-tech transition placeholder-slate-600" required></div>
                    </div>
                    <div class="space-y-1"><label class="text-xs font-medium text-slate-400">Pesan</label><textarea name="message" rows="4" placeholder="Ceritakan sedikit tentang proyek atau kebutuhan Anda..." class="w-full bg-slate-900/50 border border-white/10 rounded-lg px-4 py-3 text-white focus:outline-none focus:border-persona-tech focus:ring-1 focus:ring-persona-tech transition placeholder-slate-600 resize-none" required></textarea></div>
                </div>
                <div class="mt-8 flex items-center justify-between">
                    <p class="text-[10px] text-slate-500">Biasanya membalas dalam <br> 24 jam hari kerja.</p>
                    <button type="submit" class="group relative px-6 py-3 bg-white text-persona-dark font-bold rounded-lg hover:bg-persona-tech transition-all duration-300 flex items-center gap-2 shadow-lg shadow-white/5 hover:shadow-persona-tech/20">Kirim Pesan <i class="fa-solid fa-paper-plane group-hover:translate-x-1 transition-transform"></i></button>
                </div>
                <div id="form-status" class="mt-4 hidden"><div class="p-4 rounded-md"><p id="status-message"></p></div></div>
            </form>
        </div>
    </div>

    
</body>
</html>