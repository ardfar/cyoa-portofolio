<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="{{ config('portfolio.personas.management.seo.description', 'Praktisi Manajemen & Strategi - Merancang dan mengeksekusi strategi bisnis untuk pertumbuhan berkelanjutan') }}">
    <meta name="keywords" content="{{ config('portfolio.personas.management.seo.keywords', 'product manager, business analyst, manajemen produk, strategi bisnis, analisis bisnis') }}">
    <meta name="author" content="{{ config('portfolio.site.author', 'Portfolio Professional') }}">
    <meta property="og:title" content="{{ config('portfolio.personas.management.seo.og_title', 'Management & Strategy - Portfolio') }}">
    <meta property="og:description" content="{{ config('portfolio.personas.management.seo.og_description', 'Merancang strategi, mengelola produk, dan mendorong transformasi bisnis') }}">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ config('portfolio.personas.management.seo.og_image', asset('images/management-og-image.jpg')) }}">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ config('portfolio.personas.management.seo.twitter_title', 'Management & Strategy Portfolio') }}">
    <meta name="twitter:description" content="{{ config('portfolio.personas.management.seo.twitter_description', 'Praktisi manajemen dengan fokus pada strategi produk dan transformasi bisnis') }}">
    <title>{{ config('portfolio.personas.management.seo.title', 'Management & Strategy - Portfolio') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Merriweather:wght@400;700&display=swap" rel="stylesheet">
    <link rel="canonical" href="{{ url()->current() }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
</head>
<body>
<div class="persona-switcher">
    <a href="{{ route('home') }}" class="persona-home">Beranda</a>
    <a href="{{ url('/persona/tech') }}" class="persona-tech">Tech</a>
    <a href="{{ url('/persona/management') }}" class="active persona-management">Management</a>
    <a href="{{ url('/persona/operations') }}" class="persona-operations">Operations</a>
</div>
<!-- Management & Strategy Persona -->
<div class="bg-gradient-to-br from-gray-50 to-yellow-50 management-typography">
    <!-- Hero Section -->
    <div class="relative overflow-hidden hero-section will-change-transform">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 lg:py-20">
            <div class="text-center content-visibility-auto">
                <h1 class="text-4xl font-extrabold tracking-tight text-gray-900 sm:text-5xl lg:text-6xl will-change-opacity">
                    {{ $persona['headline'] }}
                </h1>
                <p class="mt-6 max-w-2xl mx-auto text-xl text-gray-600">
                    {{ $persona['description'] }}
                </p>
                <div class="mt-8 flex justify-center space-x-4">
                    <span class="inline-flex items-center px-4 py-2 bg-yellow-100 text-yellow-800 text-sm font-medium rounded-full">
                        Product Manager
                    </span>
                    <span class="inline-flex items-center px-4 py-2 bg-amber-100 text-amber-800 text-sm font-medium rounded-full">
                        Business Development
                    </span>
                     <span class="inline-flex items-center px-4 py-2 bg-gray-100 text-gray-800 text-sm font-medium rounded-full">
                        Project Manager
                    </span>
                </div>
            </div>
        </div>
    </div>

    <!-- Navigation -->
    <div id="management-local-nav" class="bg-white shadow-sm border-b border-gray-200 sticky-nav sticky-nav-light will-change-transform">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <nav class="flex space-x-8 py-4">
                <a href="#about" class="text-gray-800 hover:text-gray-900 font-medium">Tentang</a>
                <a href="#case-studies" class="text-gray-600 hover:text-gray-800 font-medium">Track Record</a>
                <a href="#roadmap" class="text-gray-600 hover:text-gray-800 font-medium">Roadmap</a>
                <a href="#contact" class="text-gray-600 hover:text-gray-800 font-medium">Kontak</a>
            </nav>
        </div>
    </div>

    <!-- About Section -->
    <section id="about" class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:grid lg:grid-cols-2 lg:gap-12 lg:items-center">
                <div>
                    <h2 class="text-3xl font-bold text-gray-900 sm:text-4xl">
                        Kepemimpinan Strategis & Pertumbuhan Bisnis
                    </h2>
                    <p class="mt-6 text-lg text-gray-600">
                        Dengan pengalaman luas dalam manajemen proyek dan pengembangan bisnis, saya berfokus pada penerjemahan visi kompleks menjadi strategi yang dapat dieksekusi dan menghasilkan ROI.
                    </p>
                    <div class="mt-8 space-y-4">
                        <div class="flex items-start">
                            <div class="flex-shrink-0">
                                <div class="w-8 h-8 bg-gray-100 rounded-full flex items-center justify-center">
                                    <svg class="w-5 h-5 text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-medium text-gray-900">Project Management</h3>
                                <p class="text-gray-600">Pengelolaan proyek kompleks dengan metodologi Agile dan Scrum untuk hasil yang konsisten.</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="flex-shrink-0">
                                <div class="w-8 h-8 bg-yellow-100 rounded-full flex items-center justify-center">
                                    <svg class="w-5 h-5 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-medium text-gray-900">Business Strategy</h3>
                                <p class="text-gray-600">Pengembangan strategi bisnis yang berorientasi pada pertumbuhan dan profitabilitas.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-12 lg:mt-0">
                    <div class="bg-gradient-to-br from-gray-100 to-yellow-100 rounded-2xl p-8">
                        <h3 class="text-xl font-semibold text-gray-900 mb-4">Key Metrics</h3>
                        <div class="grid grid-cols-2 gap-4">
                            <div class="bg-white rounded-lg p-4 text-center">
                                <div class="text-3xl font-bold text-gray-800">25%</div>
                                <div class="text-sm text-gray-600">Pengurangan Biaya</div>
                            </div>
                            <div class="bg-white rounded-lg p-4 text-center">
                                <div class="text-3xl font-bold text-yellow-600">10+</div>
                                <div class="text-sm text-gray-600">Bisnis Terbantu</div>
                            </div>
                            <div class="bg-white rounded-lg p-4 text-center">
                                <div class="text-3xl font-bold text-green-600">98%</div>
                                <div class="text-sm text-gray-600">Kepuasan Pelanggan</div>
                            </div>
                            <div class="bg-white rounded-lg p-4 text-center">
                                <div class="text-3xl font-bold text-blue-600">10%</div>
                                <div class="text-sm text-gray-600">Perkembangan Bisnis</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Case Studies Section -->
    <section id="case-studies" class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl">
                    Studi Kasus & Hasil
                </h2>
                <p class="mt-4 max-w-2xl mx-auto text-xl text-gray-600">
                    Contoh nyata bagaimana strategic approach saya menghasilkan dampak bisnis yang signifikan.
                </p>
            </div>

            <div class="mt-12 grid gap-8 md:grid-cols-2 lg:grid-cols-3">
                <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow">
                    <div class="bg-gradient-to-br from-gray-700 to-yellow-600 h-48 flex items-center justify-center">
                        <svg class="w-16 h-16 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Digirekber</h3>
                        <p class="text-gray-600 mb-4">Memimpin pengembangan platform Escrow Digital dari nol yang akan memfasilitasi 5.000+ transaksi aman dan menurunkan risiko penipuan online hingga 90% di tahun pertama.</p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="px-2 py-1 bg-gray-100 text-gray-800 text-xs rounded">Product Strategy</span>
                            <span class="px-2 py-1 bg-yellow-100 text-yellow-800 text-xs rounded">Risk Mitigation</span>
                            <span class="px-2 py-1 bg-green-100 text-green-800 text-xs rounded">Go-to-Market</span>
                        </div>
                        <div class="flex space-x-4">
                            <button class="text-gray-700 hover:text-gray-900 font-medium">Lihat Detail</button>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow">
                    <div class="bg-gradient-to-br from-yellow-500 to-amber-600 h-48 flex items-center justify-center">
                        <svg class="w-16 h-16 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                        </svg>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Dapur BuAs</h3>
                        <p class="text-gray-600 mb-4">Transformasi manajemen keuangan bisnis yang menghasilkan kenaikan laba bersih 25% dan efisiensi biaya operasional yang signifikan dalam kurun waktu 12 bulan.</p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="px-2 py-1 bg-blue-100 text-blue-800 text-xs rounded">Financial Strategy</span>
                            <span class="px-2 py-1 bg-green-100 text-green-800 text-xs rounded">Cost Efficiency</span>
                            <span class="px-2 py-1 bg-yellow-100 text-yellow-800 text-xs rounded">Business Growth</span>
                        </div>
                        <div class="flex space-x-4">
                            <button class="text-yellow-600 hover:text-yellow-800 font-medium">Lihat Detail</button>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow">
                    <div class="bg-gradient-to-br from-amber-500 to-orange-600 h-48 flex items-center justify-center">
                        <svg class="w-16 h-16 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">PCRPC</h3>
                        <p class="text-gray-600 mb-4">Membangun sistem layanan IT support untuk 500+ UMKM, mempercepat waktu penyelesaian masalah (SLA) dari 3 hari menjadi 1 hari dengan kepuasan pengguna 95%.</p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="px-2 py-1 bg-orange-100 text-orange-800 text-xs rounded">Ops Management</span>
                            <span class="px-2 py-1 bg-red-100 text-red-800 text-xs rounded">Service Delivery</span>
                            <span class="px-2 py-1 bg-green-100 text-green-800 text-xs rounded">Leadership</span>
                        </div>
                        <div class="flex space-x-4">
                            <button class="text-orange-600 hover:text-orange-800 font-medium">Lihat Detail</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Roadmap Section -->
    <section id="roadmap" class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl">
                    Strategic Roadmap
                </h2>
                <p class="mt-4 max-w-2xl mx-auto text-xl text-gray-600">
                    Pendekatan terstruktur untuk mencapai tujuan bisnis dengan timeline yang jelas dan measurable outcomes.
                </p>
            </div>

            <div class="mt-12">
                <div class="relative">
                    <div class="absolute inset-0 flex items-center" aria-hidden="true">
                        <div class="w-full border-t border-gray-300"></div>
                    </div>
                    <div class="relative flex justify-center">
                        <span class="px-3 bg-white text-lg font-medium text-gray-900">Q1 2024 - Q4 2024</span>
                    </div>
                </div>

                <div class="mt-8 grid gap-8 md:grid-cols-4">
                    <div class="text-center">
                        <div class="w-16 h-16 mx-auto bg-gray-100 rounded-full flex items-center justify-center mb-4">
                            <span class="text-2xl font-bold text-gray-800">Q1</span>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-900">Research & Planning</h3>
                        <p class="mt-2 text-gray-600">Market research, competitive analysis, dan strategic planning.</p>
                    </div>
                    <div class="text-center">
                        <div class="w-16 h-16 mx-auto bg-yellow-100 rounded-full flex items-center justify-center mb-4">
                            <span class="text-2xl font-bold text-yellow-600">Q2</span>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-900">Development & Testing</h3>
                        <p class="mt-2 text-gray-600">Pengembangan MVP dan user testing untuk validasi pasar.</p>
                    </div>
                    <div class="text-center">
                        <div class="w-16 h-16 mx-auto bg-orange-100 rounded-full flex items-center justify-center mb-4">
                            <span class="text-2xl font-bold text-orange-600">Q3</span>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-900">Launch & Marketing</h3>
                        <p class="mt-2 text-gray-600">Product launch dengan go-to-market strategy yang terintegrasi.</p>
                    </div>
                    <div class="text-center">
                        <div class="w-16 h-16 mx-auto bg-green-100 rounded-full flex items-center justify-center mb-4">
                            <span class="text-2xl font-bold text-green-600">Q4</span>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-900">Scale & Optimize</h3>
                        <p class="mt-2 text-gray-600">Scaling operations dan continuous improvement berdasarkan feedback.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section id="contact" class="py-16 bg-gradient-to-br from-gray-800 to-yellow-600">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-extrabold text-white sm:text-4xl">
                Ingin melihat studi kasus saya?
            </h2>
            <p class="mt-4 text-xl text-gray-200">
                Mari diskusikan bagaimana strategic approach saya bisa membantu mencapai tujuan bisnis Anda.
            </p>
            <div class="mt-8 flex justify-center space-x-4">
                <a href="{{ route('contact') }}" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-gray-900 bg-white hover:bg-gray-100 transition-colors">
                    Hubungi Saya
                </a>
                <a href="#" class="inline-flex items-center px-6 py-3 border border-white text-base font-medium rounded-md text-white hover:bg-white hover:text-gray-900 transition-colors">
                    Lihat LinkedIn
                </a>
            </div>
        </div>
    </section>
</div>
</body>
</html>