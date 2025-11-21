<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio: Kopinaren - Farras Arrafi</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600;800&family=Plus+Jakarta+Sans:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; background-color: #F8FDF9; color: #1A1A1A; }
        .font-display { font-family: 'Outfit', sans-serif; }
        ::-webkit-scrollbar { width: 8px; }
        ::-webkit-scrollbar-track { background: #F8FDF9; }
        ::-webkit-scrollbar-thumb { background: #C9D6CD; border-radius: 4px; }
        ::-webkit-scrollbar-thumb:hover { background: #A1B5A8; }
        .fade-up { animation: fadeUp 0.8s cubic-bezier(0.16, 1, 0.3, 1) forwards; opacity: 0; transform: translateY(20px); }
        @keyframes fadeUp { to { opacity: 1; transform: translateY(0); } }
        .delay-100 { animation-delay: 0.1s; }
        .delay-200 { animation-delay: 0.2s; }
        .delay-300 { animation-delay: 0.3s; }
        .hero-accent { position: relative; }
        .hero-splash { position: absolute; right: -40px; top: 10%; width: min(34vw, 520px); height: min(34vw, 520px); background-repeat: no-repeat; background-position: right top; background-size: contain; opacity: 0.08; mix-blend-mode: multiply; pointer-events: none; }
        .hero-radial { position: absolute; left: -60px; top: 160px; width: 280px; height: 280px; border-radius: 9999px; background: rgba(139, 94, 60, 0.08); filter: blur(36px); pointer-events: none; }
        .cta-btn { position: relative; display: inline-flex; align-items: center; justify-content: center; border-radius: 9999px; padding: 0.75rem 2rem; font-weight: 700; transition: transform .2s ease, box-shadow .2s ease, background-color .2s ease, color .2s ease; overflow: hidden; will-change: transform; }
        .cta-btn:hover { transform: translateY(-2px) scale(1.02); }
        .cta-btn::after { content: ""; position: absolute; top: 0; left: -60%; width: 60%; height: 100%; background: linear-gradient(90deg, transparent, rgba(255,255,255,.3), transparent); transform: skewX(-20deg); opacity: 0; }
        .cta-btn:hover::after { animation: ctaShine 1s ease; opacity: 1; }
        @keyframes ctaShine { 0% { left: -60%; } 100% { left: 120%; } }
        .cta-dark { background-color: #111827; color: #ffffff; }
        .cta-dark:hover { background-color: #0F172A; box-shadow: 0 12px 28px rgba(17, 24, 39, .25); }
        .cta-outline { border: 1px solid #D1D5DB; color: #374151; background-color: transparent; }
        .cta-outline:hover { background-color: #F9FAFB; border-color: #9CA3AF; box-shadow: 0 8px 20px rgba(17, 24, 39, .12); }
    </style>
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
</head>
<body class="antialiased selection:bg-green-200 selection:text-green-900">
    <nav class="fixed top-0 w-full z-50 bg-[#F8FDF9]/80 backdrop-blur-md border-b border-green-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex-shrink-0">
                    <a href="{{ route('home') }}" class="font-display font-bold text-xl tracking-tight text-gray-900">farras arrafi.</a>
                </div>
                <div class="hidden md:flex space-x-8">
                    <a href="{{ url('/persona/creative') }}" class="text-gray-500 hover:text-gray-900 px-3 py-2 text-sm font-medium">Kembali ke Portofolio</a>
                </div>
            </div>
        </div>
    </nav>

    <header class="relative pt-32 pb-20 px-4 sm:px-6 lg:px-8">
        <div class="absolute inset-0 hero-accent">
            <div class="hero-radial"></div>
        </div>
        <div class="max-w-7xl mx-auto relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 items-center gap-12">
                <div>
                    <span class="fade-up inline-block px-3 py-1 mb-4 text-xs font-semibold tracking-wider text-green-800 uppercase bg-green-100 rounded-full">Brand Identity & Menu Design</span>
                    <h1 class="fade-up delay-100 font-display text-5xl md:text-7xl font-extrabold text-gray-900 leading-tight mb-6">Kopinaren: Mendefinisikan Ulang <span class="text-[#8B5E3C]">Budaya Kopi</span> Urban.</h1>
                    <p class="fade-up delay-200 text-xl text-gray-600 leading-relaxed max-w-2xl">Bagaimana menerjemahkan visi "Kopi Berkualitas Tanpa Kompromi" menjadi identitas visual yang menggugah selera Gen-Z.</p>
                </div>
                <div class="flex justify-center lg:justify-end">
                    <img src="{{ asset('images/design/kopinaren/logo-dark.png') }}" alt="Logo Kopinaren" class="w-64 md:w-80 lg:w-[420px] h-auto drop-shadow-sm opacity-95">
                </div>
            </div>
        </div>
    </header>

    <section class="fade-up delay-300 border-y border-gray-200 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-xs font-bold text-gray-400 uppercase tracking-wider mb-1">Klien</h3>
                    <p class="font-medium text-gray-900">Kopinaren</p>
                </div>
                <div>
                    <h3 class="text-xs font-bold text-gray-400 uppercase tracking-wider mb-1">Layanan</h3>
                    <p class="font-medium text-gray-900">Graphic Design & Photography</p>
                </div>
                <div>
                    <h3 class="text-xs font-bold text-gray-400 uppercase tracking-wider mb-1">Tahun</h3>
                    <p class="font-medium text-gray-900">2025</p>
                </div>
                <div>
                    <h3 class="text-xs font-bold text-gray-400 uppercase tracking-wider mb-1">Industri</h3>
                    <p class="font-medium text-gray-900">Food & Beverage (F&B)</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto">
        <div class="grid md:grid-cols-2 gap-16 items-start">
            <div class="sticky top-24">
                <h2 class="font-display text-3xl md:text-4xl font-bold text-gray-900 mb-6">Filosofi: Kualitas & Kecepatan</h2>
                <div class="text-gray-600 text-lg">
                    <p class="mb-4">Kopinaren lahir dari kebutuhan sederhana: menikmati kopi berkualitas kapanpun tanpa kompromi pada rasa dan harga.</p>
                    <p>Sebagai brand yang fokus pada model <strong>'grab-and-go'</strong>, tantangan desainnya adalah menciptakan visual yang:</p>
                    <ul class="list-disc pl-5 space-y-2 mt-4 mb-6 text-gray-800 font-medium">
                        <li>Cepat dipahami (High Readability)</li>
                        <li>Menarik bagi target pasar Gen Z & Pekerja Muda</li>
                        <li>Mencerminkan kualitas "Rajanya Kopi Aren"</li>
                    </ul>
                    <blockquote class="border-l-4 border-[#8B5E3C] pl-4 italic text-gray-500 bg-[#FDF8F4] p-4 rounded-r-lg">"Menjadi 'teman' yang selalu ada, baik untuk memulai hari, menemani kerja, atau penyemangat tengah malam."</blockquote>
                </div>
            </div>
            <div class="space-y-6">
                <div class="bg-gray-100 rounded-2xl p-8 h-96 flex items-center justify-center relative overflow-hidden group">
                    <div class="absolute inset-0 bg-[#2C1810] opacity-90"></div>
                    <div class="relative z-10 text-center">
                        <p class="text-white/50 text-sm uppercase tracking-widest mb-2">Target Market</p>
                        <h3 class="text-3xl font-display text-white font-bold">Pelajar & Mahasiswa</h3>
                        <div class="w-16 h-1 bg-[#8B5E3C] mx-auto mt-4"></div>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-6">
                    <div class="bg-gray-50 p-6 rounded-xl border border-gray-100 text-center">
                         <p class="text-4xl font-bold text-[#8B5E3C] mb-2">24h</p>
                         <p class="text-sm text-gray-500">Non-stop Operation</p>
                    </div>
                    <div class="bg-gray-50 p-6 rounded-xl border border-gray-100 text-center">
                         <p class="text-4xl font-bold text-[#8B5E3C] mb-2">15K</p>
                         <p class="text-sm text-gray-500">Average Price Point</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-gray-900 text-white py-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <h2 class="font-display text-3xl md:text-5xl font-bold mb-6">Visualisasi Rasa</h2>
                <p class="text-gray-400 text-lg">Desain buku menu difokuskan pada fotografi produk yang tajam dengan typografi yang bersih, memudahkan pelanggan memilih varian favorit mereka dalam hitungan detik.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-gray-800 rounded-2xl overflow-hidden hover:-translate-y-2 transition duration-500">
                    <div class="h-64 bg-gray-700/60 relative overflow-hidden">
                        <img src="{{ asset('images/design/kopinaren/Kano Hitam.png') }}" alt="Kano Hitam / Americano" class="w-full h-full object-contain p-4" loading="lazy">
                        <div class="absolute inset-x-0 bottom-0 h-20 bg-gradient-to-t from-gray-900/60 to-transparent pointer-events-none"></div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2">Kano Hitam</h3>
                        <p class="text-gray-400 text-sm mb-4">Simplicity at its finest. Fotografi menonjolkan kesegaran es dan kepekatan kopi.</p>
                        <span class="text-[#D4A373] font-mono font-bold">IDR 12K</span>
                    </div>
                </div>
                <div class="bg-gray-800 rounded-2xl overflow-hidden hover:-translate-y-2 transition duration-500 border border-[#8B5E3C]">
                    <div class="h-64 bg-gray-700/60 relative overflow-hidden">
                        <img src="{{ asset('images/design/kopinaren/Naren Aren.png') }}" alt="Naren Aren" class="w-full h-full object-contain p-4" loading="lazy">
                        <div class="absolute inset-x-0 bottom-0 h-20 bg-gradient-to-t from-gray-900/60 to-transparent pointer-events-none"></div>
                        <div class="absolute top-4 right-4 bg-[#8B5E3C] text-white text-xs font-bold px-2 py-1 rounded z-10">BEST SELLER</div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2">Naren Aren</h3>
                        <p class="text-gray-400 text-sm mb-4">Signature drink. Komposisi layer gula aren dan susu yang menggugah selera.</p>
                        <span class="text-[#D4A373] font-mono font-bold">IDR 15K</span>
                    </div>
                </div>
                <div class="bg-gray-800 rounded-2xl overflow-hidden hover:-translate-y-2 transition duration-500">
                    <div class="h-64 bg-gray-700/60 relative overflow-hidden">
                        <img src="{{ asset('images/design/kopinaren/Matcha.png') }}" alt="Naren Matcha" class="w-full h-full object-contain p-4" loading="lazy">
                        <div class="absolute inset-x-0 bottom-0 h-20 bg-gradient-to-t from-gray-900/60 to-transparent pointer-events-none"></div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2">Naren Matcha</h3>
                        <p class="text-gray-400 text-sm mb-4">Variasi warna hijau cerah untuk menarik audiens yang tidak minum kopi.</p>
                        <span class="text-[#D4A373] font-mono font-bold">IDR 15K</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 px-4 sm:px-6 lg:px-8 max-w-3xl mx-auto text-center">
        <h2 class="font-display text-3xl font-bold text-gray-900 mb-6">Dampak Desain</h2>
        <p class="text-gray-600 mb-10">Dengan rebranding visual ini, Kopinaren berhasil memperkuat posisinya sebagai pilihan utama pelajar dan pekerja muda yang mencari kualitas dengan harga terjangkau. Desain bukan hanya tentang estetika, tapi tentang menyampaikan value "Teman yang Selalu Ada".</p>
        <div class="flex justify-center gap-4">
            <a href="{{ url('/persona/creative') }}" class="cta-btn cta-dark">Lihat Proyek Lainnya</a>
            <a href="{{ route('contact') }}" class="cta-btn cta-outline">Kontak Farras</a>
        </div>
    </section>
</body>
</html>