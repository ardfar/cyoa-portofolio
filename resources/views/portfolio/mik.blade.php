<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Studi Kasus: Media Info Kreasindo - Farras Arrafi</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@500;600;700&family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; background-color: #F8FAFC; color: #0F172A; }
        .font-display { font-family: 'Rajdhani', sans-serif; }
        ::-webkit-scrollbar { width: 8px; }
        ::-webkit-scrollbar-track { background: #F1F5F9; }
        ::-webkit-scrollbar-thumb { background: #EF4444; border-radius: 4px; }
        .fade-up { animation: fadeUp 0.8s cubic-bezier(0.16, 1, 0.3, 1) forwards; opacity: 0; transform: translateY(20px); }
        @keyframes fadeUp { to { opacity: 1; transform: translateY(0); } }
        .delay-100 { animation-delay: 0.1s; }
        .delay-200 { animation-delay: 0.2s; }
        .delay-300 { animation-delay: 0.3s; }
        .bg-grid-pattern { background-image: radial-gradient(#cbd5e1 1px, transparent 1px); background-size: 30px 30px; }
    </style>
    <link rel="canonical" href="{{ url()->current() }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
</head>
<body class="antialiased selection:bg-red-500 selection:text-white">
    <nav class="fixed top-0 w-full z-50 bg-white/90 backdrop-blur-md border-b border-slate-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex-shrink-0">
                    <a href="{{ route('home') }}" class="font-display font-bold text-2xl tracking-tight text-slate-900">farras.<span class="text-red-600">arrafi</span></a>
                </div>
                <div class="hidden md:flex space-x-8">
                    <a href="{{ url('/persona/creative') }}#design" class="text-slate-500 hover:text-red-600 px-3 py-2 text-sm font-medium transition">Kembali ke Portofolio</a>
                </div>
            </div>
        </div>
    </nav>

    <header class="relative pt-32 pb-20 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto overflow-hidden">
        <div class="absolute top-0 right-0 w-1/2 h-full bg-grid-pattern opacity-30 -z-10"></div>
        <div class="absolute top-20 right-20 w-64 h-64 bg-red-500/10 rounded-full blur-3xl -z-10"></div>
        <div class="max-w-4xl">
            <div class="flex items-center gap-3 mb-6 fade-up">
                <span class="w-2 h-8 bg-red-600 block"></span>
                <span class="text-sm font-bold tracking-widest text-slate-500 uppercase">Corporate Identity & Web Design</span>
            </div>
            <h1 class="fade-up delay-100 font-display text-5xl md:text-7xl font-bold text-slate-900 leading-none mb-6">Media Info Kreasindo:<br><span class="text-red-600">Harmonisasi</span> Teknologi & Manusia.</h1>
            <p class="fade-up delay-200 text-xl text-slate-600 leading-relaxed max-w-2xl border-l-4 border-slate-200 pl-6">Membangun narasi visual untuk perusahaan yang berdiri di dua kaki: Ketangguhan Infrastruktur IT dan Kehangatan Manajemen Event.</p>
        </div>
    </header>

    <section class="fade-up delay-300 bg-slate-900 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 items-center">
                <div class="col-span-1">
                    <h3 class="text-slate-400 uppercase text-xs font-bold tracking-wider mb-2">The Challenge</h3>
                    <p class="font-display text-2xl font-medium">Menyatukan "Logic" (IT Services) dan "Magic" (Event Organizer) dalam satu brand.</p>
                </div>
                <div class="col-span-2 grid grid-cols-3 gap-4 border-l border-slate-700 pl-8">
                    <div>
                        <h4 class="text-3xl font-display font-bold text-red-500">2024</h4>
                        <p class="text-sm text-slate-400">Year Established</p>
                    </div>
                    <div>
                        <h4 class="text-3xl font-display font-bold text-red-500">B2B</h4>
                        <p class="text-sm text-slate-400">Primary Segment</p>
                    </div>
                    <div>
                        <h4 class="text-3xl font-display font-bold text-red-500">Hybrid</h4>
                        <p class="text-sm text-slate-400">Service Model</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-24 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto">
        <div class="text-center mb-16">
            <h2 class="font-display text-4xl font-bold text-slate-900 mb-4">Solusi: The Red Thread</h2>
            <p class="text-slate-600 max-w-2xl mx-auto">Kami menggunakan elemen visual "Benang Merah" yang melambangkan konektivitas. Di dunia IT, ini adalah kabel jaringan. Di dunia Event, ini adalah koneksi antar manusia.</p>
        </div>
        <div class="grid md:grid-cols-2 gap-8">
            <div class="group relative bg-white border border-slate-200 rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300">
                <div class="h-2 bg-slate-800 w-full"></div>
                <div class="p-8">
                    <div class="w-12 h-12 bg-slate-100 rounded-lg flex items-center justify-center mb-6 text-2xl">🖥️</div>
                    <h3 class="font-display text-2xl font-bold text-slate-900 mb-3">Managed Services</h3>
                    <p class="text-slate-600 mb-6 text-sm leading-relaxed">Visualisasi data center, cloud computing, dan cybersecurity. Menggunakan ikonografi geometris yang bersih dan tegas untuk membangun kepercayaan.</p>
                    <ul class="space-y-2">
                        <li class="flex items-center text-sm text-slate-700"><span class="w-2 h-2 bg-green-500 rounded-full mr-3"></span>Cybersecurity & Firewall</li>
                        <li class="flex items-center text-sm text-slate-700"><span class="w-2 h-2 bg-green-500 rounded-full mr-3"></span>Cloud Infrastructure</li>
                    </ul>
                </div>
                <div class="absolute bottom-0 right-0 opacity-5 group-hover:opacity-10 transition duration-500"></div>
            </div>
            <div class="group relative bg-white border border-slate-200 rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300">
                <div class="h-2 bg-red-600 w-full"></div>
                <div class="p-8">
                    <div class="w-12 h-12 bg-red-50 rounded-lg flex items-center justify-center mb-6 text-2xl">🎉</div>
                    <h3 class="font-display text-2xl font-bold text-slate-900 mb-3">Event Production</h3>
                    <p class="text-slate-600 mb-6 text-sm leading-relaxed">Menampilkan kedinamisan acara MICE dan launching produk. Layout galeri yang lebih organik untuk menonjolkan sisi humanis.</p>
                    <ul class="space-y-2">
                        <li class="flex items-center text-sm text-slate-700"><span class="w-2 h-2 bg-red-500 rounded-full mr-3"></span>Product Launching</li>
                        <li class="flex items-center text-sm text-slate-700"><span class="w-2 h-2 bg-red-500 rounded-full mr-3"></span>MICE & Gathering</li>
                    </ul>
                </div>
                <div class="absolute bottom-0 right-0 opacity-5 group-hover:opacity-10 transition duration-500"></div>
            </div>
        </div>
    </section>

    <section class="py-20 px-4 sm:px-6 lg:px-8 max-w-4xl mx-auto text-center">
        <h2 class="font-display text-3xl font-bold text-slate-900 mb-6">Business Impact</h2>
        <div class="bg-white p-8 rounded-2xl shadow-lg border border-red-100 relative overflow-hidden">
            <div class="absolute top-0 left-0 w-1 h-full bg-red-500"></div>
            <p class="text-slate-600 italic text-lg">"Website dan Company Profile baru ini berhasil menjadi alat sales yang efektif. Klien B2B langsung memahami kapabilitas kami dalam sekali lihat—bahwa kami bukan sekadar EO, dan bukan sekadar Vendor IT. Kami adalah Solusi."</p>
        </div>
        <div class="mt-10 flex justify-center gap-4">
             <a href="https://mediainfokreasindo.com/" class="px-8 py-3 bg-red-600 text-white rounded-lg font-semibold hover:bg-red-700 transition shadow-lg shadow-red-500/30">Lihat Live Website</a>
            <a href="{{ url('/persona/creative') }}#design" class="px-8 py-3 bg-white border border-slate-300 text-slate-700 rounded-lg font-semibold hover:bg-slate-50 transition">Kembali ke Portofolio</a>
        </div>
    </section>

</body>
</html>