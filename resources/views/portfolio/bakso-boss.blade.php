<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Studi Kasus: Bakso Boss 88 - Farras Arrafi</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;700&family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; background-color: #1e293b; color: #f8fafc; }
        .font-display { font-family: 'Space Grotesk', sans-serif; }
        ::-webkit-scrollbar { width: 8px; }
        ::-webkit-scrollbar-track { background: #0f172a; }
        ::-webkit-scrollbar-thumb { background: #fb923c; border-radius: 4px; }
        .fade-up { animation: fadeUp 0.8s cubic-bezier(0.16, 1, 0.3, 1) forwards; opacity: 0; transform: translateY(20px); }
        @keyframes fadeUp { to { opacity: 1; transform: translateY(0); } }
        .delay-100 { animation-delay: 0.1s; }
        .delay-200 { animation-delay: 0.2s; }
        .delay-300 { animation-delay: 0.3s; }
        .bg-doodle { background-image: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.03'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E"); }
    </style>
    <link rel="canonical" href="{{ url()->current() }}">
</head>
<body class="antialiased selection:bg-orange-500 selection:text-white bg-doodle">
    <nav class="fixed top-0 w-full z-50 bg-[#1e293b]/90 backdrop-blur-md border-b border-white/10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex-shrink-0">
                    <a href="{{ route('home') }}" class="font-display font-bold text-xl tracking-tight text-white">farras.<span class="text-orange-500">arrafi</span></a>
                </div>
                <div class="hidden md:flex space-x-8">
                    <a href="{{ url('/persona/creative') }}#design" class="text-gray-300 hover:text-white px-3 py-2 text-sm font-medium">Kembali ke Portofolio</a>
                </div>
            </div>
        </div>
    </nav>

    <header class="relative pt-32 pb-20 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto">
        <div class="max-w-4xl">
            <span class="fade-up inline-block px-3 py-1 mb-4 text-xs font-bold tracking-wider text-orange-900 uppercase bg-orange-400 rounded-full">Branding & Creative Campaign</span>
            <h1 class="fade-up delay-100 font-display text-5xl md:text-7xl font-extrabold text-white leading-tight mb-6">Bakso Boss 88:<br><span class="text-transparent bg-clip-text bg-gradient-to-r from-orange-400 to-red-500">Jenjang Karir</span> dalam Semangkuk Rasa.</h1>
            <p class="fade-up delay-200 text-xl text-gray-400 leading-relaxed max-w-2xl">Mengubah pengalaman makan bakso menjadi simulasi korporat yang menyenangkan. Strategi visual untuk meningkatkan perceived value dari sebuah hidangan rakyat.</p>
        </div>
    </header>

    <section class="fade-up delay-300 border-y border-white/10 bg-[#0f172a]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-xs font-bold text-gray-500 uppercase tracking-wider mb-1">Klien</h3>
                    <p class="font-medium text-white">Bakso Boss 88</p>
                </div>
                <div>
                    <h3 class="text-xs font-bold text-gray-500 uppercase tracking-wider mb-1">Role</h3>
                    <p class="font-medium text-white">Visual Identity & Layout</p>
                </div>
                <div>
                    <h3 class="text-xs font-bold text-gray-500 uppercase tracking-wider mb-1">Konsep</h3>
                    <p class="font-medium text-white">Corporate Fun</p>
                </div>
                <div>
                    <h3 class="text-xs font-bold text-gray-500 uppercase tracking-wider mb-1">Output</h3>
                    <p class="font-medium text-white">Flyer, Menu, Social Media</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto">
        <div class="grid md:grid-cols-2 gap-16 items-center">
            <div>
                <h2 class="font-display text-3xl md:text-4xl font-bold text-white mb-6">Filosofi: Makan Seperti Boss</h2>
                <div class="prose prose-lg text-gray-400">
                    <p class="mb-4">Tantangan utamanya adalah: Bagaimana membuat menu bakso terdengar premium namun tetap fun?</p>
                    <p>Solusinya adalah <strong>Gamifikasi Menu</strong>. Kami mengadopsi struktur hierarki perusahaan ke dalam ukuran dan isi mangkuk. Semakin tinggi jabatannya, semakin lengkap isiannya.</p>
                    <div class="mt-8 grid gap-4">
                        <div class="flex items-center p-4 bg-white/5 rounded-lg border border-white/10">
                            <span class="text-2xl mr-4">👔</span>
                            <div>
                                <h4 class="font-bold text-white">Komisaris (The Top Tier)</h4>
                                <p class="text-sm">Bakso Rudal Besar + Isian Daging/Cabai. The ultimate boss.</p>
                            </div>
                        </div>
                        <div class="flex items-center p-4 bg-white/5 rounded-lg border border-white/10">
                            <span class="text-2xl mr-4">💼</span>
                            <div>
                                <h4 class="font-bold text-white">Karyawan (The Entry Level)</h4>
                                <p class="text-sm">Bakso Urat Sedang. Pilihan tepat untuk makan siang harian.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="relative">
                <div class="absolute -top-10 -right-10 w-64 h-64 bg-orange-500/20 rounded-full blur-3xl"></div>
                <div class="bg-[#1e293b] border border-white/10 rounded-2xl p-2 shadow-2xl transform rotate-2 hover:rotate-0 transition duration-500">
                    <div class="aspect-3/4 bg-slate-800 rounded-xl overflow-hidden relative">
                        <img src="{{ asset('images/design/bakso-boss/flyer.png') }}" alt="Flyer Bakso Boss 88" class="absolute inset-0 w-full h-full object-cover">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white text-[#1e293b] py-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="text-orange-600 font-bold tracking-widest uppercase text-sm">Menu Hierarchy</span>
                <h2 class="font-display text-3xl md:text-5xl font-bold mb-6 mt-2">Struktur Organisasi Rasa</h2>
                <p class="text-gray-600 text-lg">Layout menu didesain dengan hierarki visual yang jelas, memudahkan pelanggan memilih "jabatan" yang sesuai dengan selera dan budget mereka hari ini.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-slate-50 rounded-xl p-6 border-2 border-orange-500 shadow-lg transform hover:-translate-y-2 transition duration-300 relative overflow-hidden">
                    <div class="absolute top-0 right-0 bg-orange-500 text-white text-xs font-bold px-3 py-1 rounded-bl-lg">BEST SELLER</div>
                    <div class="h-48 bg-slate-200 rounded-lg flex items-center pb-12 overflow-hidden">
                        <img src="{{ asset('images/design/bakso-boss/bakso komisaris.png') }}" alt="Bakso Komisaris" class="w-full h-full object-cover">
                    </div>
                    <h3 class="text-2xl font-bold font-display mb-1">Bakso Komisaris</h3>
                    <p class="text-sm text-gray-500 mb-4 line-clamp-2">Bakso Rudal besar isi daging/cabai rawit, tetelan, sayuran.</p>
                    <div class="flex justify-between items-center border-t border-gray-200 pt-4">
                        <span class="font-bold text-2xl text-[#1e293b]">60K</span>
                        <span class="text-xs text-gray-500 bg-gray-200 px-2 py-1 rounded">Mie Ayam Package</span>
                    </div>
                </div>
                <div class="bg-white rounded-xl p-6 border border-gray-200 shadow-sm transform hover:-translate-y-2 transition duration-300">
                    <div class="h-48 bg-slate-100 rounded-lg flex items-center pb-12 overflow-hidden">
                        <img src="{{ asset('images/design/bakso-boss/bakso direktur.png') }}" alt="Bakso Direktur" class="w-full h-full object-cover">
                    </div>
                    <h3 class="text-xl font-bold font-display mb-1">Bakso Direktur</h3>
                    <p class="text-sm text-gray-500 mb-4 line-clamp-2">Bakso isi keju lumer/urat mercon, bakso kecil, tahu bakso.</p>
                    <div class="flex justify-between items-center border-t border-gray-200 pt-4">
                        <span class="font-bold text-2xl text-[#1e293b]">50K</span>
                        <span class="text-xs text-gray-500 bg-gray-100 px-2 py-1 rounded">Complete Set</span>
                    </div>
                </div>
                <div class="bg-white rounded-xl p-6 border border-gray-200 shadow-sm transform hover:-translate-y-2 transition duration-300">
                    <div class="h-48 bg-slate-100 rounded-lg flex items-center pb-12 overflow-hidden">
                        <img src="{{ asset('images/design/bakso-boss/bakso manager.png') }}" alt="Bakso Karyawan" class="w-full h-full object-cover">
                    </div>
                    <h3 class="text-xl font-bold font-display mb-1">Bakso Karyawan</h3>
                    <p class="text-sm text-gray-500 mb-4 line-clamp-2">Bakso urat sedang, bakso kecil, sayuran, pangsit goreng.</p>
                    <div class="flex justify-between items-center border-t border-gray-200 pt-4">
                        <span class="font-bold text-2xl text-[#1e293b]">40K</span>
                        <span class="text-xs text-gray-500 bg-gray-100 px-2 py-1 rounded">Daily Choice</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 px-4 sm:px-6 lg:px-8 max-w-3xl mx-auto text-center">
        <h2 class="font-display text-3xl font-bold text-white mb-6">Impact</h2>
        <p class="text-gray-400 mb-10">Pendekatan visual yang "Bossy" namun fun ini berhasil menciptakan diferensiasi yang kuat di pasar kuliner bakso yang jenuh. Pelanggan tidak hanya membeli makanan, mereka membeli status—meskipun hanya dalam semangkuk mie ayam.</p>
        <div class="flex justify-center gap-4">
            <a href="{{ url('/contact') }}" class="px-8 py-3 bg-orange-500 text-white rounded-full font-bold hover:bg-orange-600 transition shadow-lg shadow-orange-500/30">Hubungi Saya</a>
        </div>
    </section>

</body>
</html>