<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="{{ config('portfolio.personas.operations.seo.description', 'Praktisi Operasional & Kreatif - Mengoptimalkan proses dan menciptakan konten visual yang powerful') }}">
    <meta name="keywords" content="{{ config('portfolio.personas.operations.seo.keywords', 'operations manager, content creator, manajemen operasional, konten kreatif, fotografi') }}">
    <meta name="author" content="{{ config('portfolio.site.author', 'Portfolio Professional') }}">
    <meta property="og:title" content="{{ config('portfolio.personas.operations.seo.og_title', 'Operations & Creative - Portfolio') }}">
    <meta property="og:description" content="{{ config('portfolio.personas.operations.seo.og_description', 'Mengoptimalkan operasi, menciptakan konten, dan menghadirkan efisiensi') }}">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ config('portfolio.personas.operations.seo.og_image', asset('images/operations-og-image.jpg')) }}">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ config('portfolio.personas.operations.seo.twitter_title', 'Operations & Creative Portfolio') }}">
    <meta name="twitter:description" content="{{ config('portfolio.personas.operations.seo.twitter_description', 'Praktisi operasional dengan fokus pada optimasi proses dan konten kreatif') }}">
    <title>{{ config('portfolio.personas.operations.seo.title', 'Operations & Creative - Portfolio') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="canonical" href="{{ url()->current() }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
</head>
<body>
<!-- Operations & Creative Persona -->
<div class="bg-gradient-to-br from-green-50 to-gray-50">
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
                    <span class="inline-flex items-center px-4 py-2 bg-green-100 text-green-800 text-sm font-medium rounded-full">
                        IT Support
                    </span>
                    <span class="inline-flex items-center px-4 py-2 bg-gray-100 text-gray-800 text-sm font-medium rounded-full">
                        Administrator
                    </span>
                    <span class="inline-flex items-center px-4 py-2 bg-purple-100 text-purple-800 text-sm font-medium rounded-full">
                        Photography
                    </span>
                </div>
            </div>
        </div>
    </div>

    <!-- Navigation -->
    <div class="bg-white shadow-sm border-b border-gray-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <nav class="flex space-x-8 py-4">
                <a href="#about" class="text-green-600 hover:text-green-800 font-medium">Tentang</a>
                <a href="#gallery" class="text-gray-600 hover:text-green-600 font-medium">Galeri</a>
                <a href="#operations" class="text-gray-600 hover:text-green-600 font-medium">Operasional</a>
                <a href="#contact" class="text-gray-600 hover:text-green-600 font-medium">Kontak</a>
            </nav>
        </div>
    </div>

    <!-- About Section -->
    <section id="about" class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:grid lg:grid-cols-2 lg:gap-12 lg:items-center">
                <div>
                    <h2 class="text-3xl font-bold text-gray-900 sm:text-4xl">
                        Operations Excellence & Creative Solutions
                    </h2>
                    <p class="mt-6 text-lg text-gray-600">
                        Menggabungkan efisiensi operasional dengan kreativitas untuk mendukung pertumbuhan bisnis yang berkelanjutan dan menciptakan solusi yang inovatif.
                    </p>
                    <div class="mt-8 space-y-4">
                        <div class="flex items-start">
                            <div class="flex-shrink-0">
                                <div class="w-8 h-8 bg-green-100 rounded-full flex items-center justify-center">
                                    <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-medium text-gray-900">IT Support & Operations</h3>
                                <p class="text-gray-600">Pemeliharaan sistem IT dan dukungan teknis untuk operasional bisnis yang lancar.</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="flex-shrink-0">
                                <div class="w-8 h-8 bg-purple-100 rounded-full flex items-center justify-center">
                                    <svg class="w-5 h-5 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-medium text-gray-900">Creative Photography</h3>
                                <p class="text-gray-600">Visual storytelling dan creative direction untuk kebutuhan branding dan marketing.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-12 lg:mt-0">
                    <div class="bg-gradient-to-br from-green-100 to-gray-100 rounded-2xl p-8">
                        <h3 class="text-xl font-semibold text-gray-900 mb-4">Skills & Tools</h3>
                        <div class="grid grid-cols-2 gap-4">
                            <div class="bg-white rounded-lg p-4 text-center">
                                <div class="text-2xl font-bold text-green-600">IT Support</div>
                                <div class="text-sm text-gray-600">System Administration</div>
                            </div>
                            <div class="bg-white rounded-lg p-4 text-center">
                                <div class="text-2xl font-bold text-gray-600">Admin</div>
                                <div class="text-sm text-gray-600">Office Management</div>
                            </div>
                            <div class="bg-white rounded-lg p-4 text-center">
                                <div class="text-2xl font-bold text-purple-600">Adobe Suite</div>
                                <div class="text-sm text-gray-600">Creative Tools</div>
                            </div>
                            <div class="bg-white rounded-lg p-4 text-center">
                                <div class="text-2xl font-bold text-blue-600">Photography</div>
                                <div class="text-sm text-gray-600">Visual Arts</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Photography Gallery Section -->
    <section id="gallery" class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl">
                    Photography Portfolio
                </h2>
                <p class="mt-4 max-w-2xl mx-auto text-xl text-gray-600">
                    Karya visual yang menggabungkan teknis fotografi dengan estetika kreatif.
                </p>
            </div>

            <div class="mt-12 grid gap-6 md:grid-cols-2 lg:grid-cols-3">
                <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow">
                    <div class="bg-gradient-to-br from-purple-400 to-pink-500 h-64 flex items-center justify-center">
                        <svg class="w-16 h-16 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <div class="p-6">
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">Portrait Photography</h3>
                        <p class="text-gray-600 text-sm">Professional portrait sessions dengan pendekatan yang personal dan hasil yang autentik.</p>
                        <div class="mt-4 flex space-x-2">
                            <span class="px-2 py-1 bg-purple-100 text-purple-800 text-xs rounded">Portrait</span>
                            <span class="px-2 py-1 bg-pink-100 text-pink-800 text-xs rounded">Studio</span>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow">
                    <div class="bg-gradient-to-br from-blue-400 to-cyan-500 h-64 flex items-center justify-center">
                        <svg class="w-16 h-16 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <div class="p-6">
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">Event Photography</h3>
                        <p class="text-gray-600 text-sm">Documenting special moments dengan gaya foto-jurnalistik yang natural dan penuh emosi.</p>
                        <div class="mt-4 flex space-x-2">
                            <span class="px-2 py-1 bg-blue-100 text-blue-800 text-xs rounded">Event</span>
                            <span class="px-2 py-1 bg-cyan-100 text-cyan-800 text-xs rounded">Journalism</span>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow">
                    <div class="bg-gradient-to-br from-green-400 to-teal-500 h-64 flex items-center justify-center">
                        <svg class="w-16 h-16 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                        </svg>
                    </div>
                    <div class="p-6">
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">Corporate Photography</h3>
                        <p class="text-gray-600 text-sm">Professional corporate imagery untuk branding dan marketing materials yang konsisten dan berkualitas tinggi.</p>
                        <div class="mt-4 flex space-x-2">
                            <span class="px-2 py-1 bg-green-100 text-green-800 text-xs rounded">Corporate</span>
                            <span class="px-2 py-1 bg-teal-100 text-teal-800 text-xs rounded">Branding</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-8 text-center">
                <button class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-white bg-gradient-to-r from-purple-600 to-pink-600 hover:from-purple-700 hover:to-pink-700 transition-colors">
                    Lihat Galeri Lengkap
                </button>
            </div>
        </div>
    </section>

    <!-- Operations Section -->
    <section id="operations" class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl">
                    Operations Excellence
                </h2>
                <p class="mt-4 max-w-2xl mx-auto text-xl text-gray-600">
                    Studi kasus efisiensi operasional dan solusi IT support yang telah saya implementasikan.
                </p>
            </div>

            <div class="mt-12 grid gap-8 md:grid-cols-2 lg:grid-cols-3">
                <!-- IT Support Case Study -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow border border-gray-200">
                    <div class="bg-gradient-to-br from-green-500 to-teal-600 h-48 flex items-center justify-center">
                        <svg class="w-16 h-16 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                        </svg>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">IT Infrastructure Upgrade</h3>
                        <p class="text-gray-600 mb-4">Implementasi sistem IT yang lebih efisien, mengurangi downtime 60% dan meningkatkan productivity seluruh tim.</p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="px-2 py-1 bg-green-100 text-green-800 text-xs rounded">System Admin</span>
                            <span class="px-2 py-1 bg-blue-100 text-blue-800 text-xs rounded">Network</span>
                            <span class="px-2 py-1 bg-purple-100 text-purple-800 text-xs rounded">Security</span>
                        </div>
                        <div class="flex space-x-4">
                            <button class="text-green-600 hover:text-green-800 font-medium">Baca Studi Kasus</button>
                        </div>
                    </div>
                </div>

                <!-- Admin Efficiency -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow border border-gray-200">
                    <div class="bg-gradient-to-br from-gray-500 to-blue-600 h-48 flex items-center justify-center">
                        <svg class="w-16 h-16 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path>
                        </svg>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Administrative Process Optimization</h3>
                        <p class="text-gray-600 mb-4">Redesain proses administratif yang mengurangi paperwork 45% dan meningkatkan response time secara signifikan.</p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="px-2 py-1 bg-gray-100 text-gray-800 text-xs rounded">Process Design</span>
                            <span class="px-2 py-1 bg-blue-100 text-blue-800 text-xs rounded">Documentation</span>
                            <span class="px-2 py-1 bg-green-100 text-green-800 text-xs rounded">Efficiency</span>
                        </div>
                        <div class="flex space-x-4">
                            <button class="text-gray-600 hover:text-gray-800 font-medium">Lihat Detail</button>
                        </div>
                    </div>
                </div>

                <!-- Creative Solutions -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow border border-gray-200">
                    <div class="bg-gradient-to-br from-purple-500 to-pink-600 h-48 flex items-center justify-center">
                        <svg class="w-16 h-16 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"></path>
                        </svg>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Creative Problem Solving</h3>
                        <p class="text-gray-600 mb-4">Solusi kreatif untuk tantangan operasional dengan pendekatan yang inovatif dan cost-effective.</p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="px-2 py-1 bg-purple-100 text-purple-800 text-xs rounded">Innovation</span>
                            <span class="px-2 py-1 bg-pink-100 text-pink-800 text-xs rounded">Creative</span>
                            <span class="px-2 py-1 bg-blue-100 text-blue-800 text-xs rounded">Solutions</span>
                        </div>
                        <div class="flex space-x-4">
                            <button class="text-purple-600 hover:text-purple-800 font-medium">Lihat Detail</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section id="contact" class="py-16 bg-gradient-to-br from-green-600 to-gray-700">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-extrabold text-white sm:text-4xl">
                Lihat galeri atau hubungi saya?
            </h2>
            <p class="mt-4 text-xl text-green-100">
                Mari diskusikan bagaimana solusi operasional dan kreatif saya bisa mendukung kebutuhan Anda.
            </p>
            <div class="mt-8 flex justify-center space-x-4">
                <a href="{{ route('contact') }}" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-green-700 bg-white hover:bg-green-50 transition-colors">
                    Hubungi Saya
                </a>
                <a href="#" class="inline-flex items-center px-6 py-3 border border-white text-base font-medium rounded-md text-white hover:bg-white hover:text-green-700 transition-colors">
                    Lihat Portfolio
                </a>
            </div>
        </div>
    </section>
</div>
</body>
</html>