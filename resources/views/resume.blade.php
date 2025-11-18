<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>{{ config('portfolio.resume.seo.title', 'Resume - Portofolio Multi-Peran') }}</title>
    <meta name="description" content="{{ config('portfolio.resume.seo.description', 'Ringkasan lengkap 8 keahlian profesional dalam berbagai bidang teknologi, manajemen, dan kreatif.') }}">
    <meta name="keywords" content="{{ config('portfolio.resume.seo.keywords', 'resume, CV, keahlian profesional, teknologi, manajemen, operasional, kreatif') }}">
    <meta name="author" content="{{ config('portfolio.site.author', 'Portfolio Professional') }}">
    
    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="{{ config('portfolio.resume.seo.og_title', 'Resume - Portofolio Multi-Peran') }}">
    <meta property="og:description" content="{{ config('portfolio.resume.seo.og_description', 'Lihat ringkasan lengkap keahlian profesional multi-disiplin.') }}">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ config('portfolio.resume.seo.og_image', asset('images/resume-og-image.jpg')) }}">
    
    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ config('portfolio.resume.seo.twitter_title', 'Resume - Portofolio Multi-Peran') }}">
    <meta name="twitter:description" content="{{ config('portfolio.resume.seo.twitter_description', 'Ringkasan keahlian profesional dalam teknologi, manajemen, dan kreatif.') }}">
    
    <!-- Canonical URL -->
    <link rel="canonical" href="{{ url()->current() }}">
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased bg-gray-50">
    <div class="min-h-screen">
        <!-- Navigation -->
        <nav class="bg-white shadow-sm border-b border-gray-200">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between h-16">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <a href="{{ route('home') }}" class="text-xl font-semibold text-gray-900 hover:text-gray-700">Portofolio</a>
                        </div>
                    </div>
                    
                    <div class="flex items-center space-x-4">
                        <a href="{{ route('home') }}" class="text-sm text-gray-600 hover:text-gray-900">Home</a>
                        <a href="{{ route('contact') }}" class="text-sm text-gray-600 hover:text-gray-900">Kontak</a>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Main Content -->
        <main>
            <!-- Header Section -->
            <div class="bg-gradient-to-br from-gray-900 to-blue-900 text-white">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 lg:py-24">
                    <div class="text-center">
                        <div class="mb-8">
                            <div class="w-32 h-32 mx-auto bg-gradient-to-br from-blue-500 to-purple-600 rounded-full flex items-center justify-center">
                                <span class="text-4xl font-bold text-white">NA</span>
                            </div>
                        </div>
                        
                        <h1 class="text-4xl font-extrabold tracking-tight sm:text-5xl lg:text-6xl">
                            Nama Anda
                        </h1>
                        
                        <p class="mt-4 text-xl text-gray-300 max-w-3xl mx-auto">
                            Professional multi-talenta dengan 8 keahlian di bidang teknologi, manajemen, dan kreatif. 
                            Berpengalaman dalam mengelola proyek kompleks dan memberikan solusi inovatif.
                        </p>
                        
                        <div class="mt-8 flex justify-center space-x-4">
                            <button class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-blue-700 bg-white hover:bg-blue-50 transition-colors">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                </svg>
                                Download CV
                            </button>
                            <a href="{{ route('contact') }}" class="inline-flex items-center px-6 py-3 border border-white text-base font-medium rounded-md text-white hover:bg-white hover:text-gray-900 transition-colors">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                                Hubungi Saya
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Professional Summary -->
            <section class="py-16 bg-white">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="text-center mb-12">
                        <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl">Ringkasan Profesional</h2>
                        <p class="mt-4 text-xl text-gray-600 max-w-3xl mx-auto">
                            Professional dengan lebih dari 5 tahun pengalaman di berbagai bidang. 
                            Kombinasi unik antara kemampuan teknis, leadership, dan kreativitas.
                        </p>
                    </div>

                    <div class="grid gap-8 md:grid-cols-3">
                        <div class="text-center">
                            <div class="w-16 h-16 mx-auto bg-blue-100 rounded-full flex items-center justify-center mb-4">
                                <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                </svg>
                            </div>
                            <h3 class="text-lg font-semibold text-gray-900">Teknologi</h3>
                            <p class="mt-2 text-gray-600">Full-stack development, AI/ML, dan infrastruktur IT</p>
                        </div>
                        <div class="text-center">
                            <div class="w-16 h-16 mx-auto bg-yellow-100 rounded-full flex items-center justify-center mb-4">
                                <svg class="w-8 h-8 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                                </svg>
                            </div>
                            <h3 class="text-lg font-semibold text-gray-900">Manajemen</h3>
                            <p class="mt-2 text-gray-600">Project management, business development, dan strategic planning</p>
                        </div>
                        <div class="text-center">
                            <div class="w-16 h-16 mx-auto bg-green-100 rounded-full flex items-center justify-center mb-4">
                                <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"></path>
                                </svg>
                            </div>
                            <h3 class="text-lg font-semibold text-gray-900">Kreatif</h3>
                            <p class="mt-2 text-gray-600">Photography, visual design, dan creative problem solving</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Skills Overview -->
            <section class="py-16 bg-gray-50">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <h2 class="text-3xl font-extrabold text-gray-900 text-center mb-12">Ringkasan Keahlian</h2>
                    
                    <div class="space-y-8">
                        @foreach($roles as $role)
                        <div class="bg-white rounded-lg shadow-sm p-6">
                            <div class="flex items-start">
                                <div class="flex-shrink-0">
                                    <div class="w-12 h-12 rounded-lg bg-gradient-to-br 
                                        @if(str_contains($role['category'], 'Technology')) from-blue-500 to-purple-600
                                        @elseif(str_contains($role['category'], 'Management')) from-gray-600 to-yellow-600
                                        @else from-green-500 to-gray-600 @endif
                                        flex items-center justify-center">
                                        <span class="text-white font-bold text-lg">
                                            {{ substr($role['title'], 0, 1) }}
                                        </span>
                                    </div>
                                </div>
                                <div class="ml-6 flex-1">
                                    <div class="flex items-center justify-between">
                                        <h3 class="text-xl font-semibold text-gray-900">{{ $role['title'] }}</h3>
                                        <span class="px-3 py-1 bg-gray-100 text-gray-700 text-sm rounded-full">{{ $role['category'] }}</span>
                                    </div>
                                    <p class="mt-2 text-gray-600">{{ $role['description'] }}</p>
                                    <div class="mt-4 flex flex-wrap gap-2">
                                        @foreach($role['skills'] as $skill)
                                        <span class="px-3 py-1 bg-blue-100 text-blue-800 text-sm rounded-full">{{ $skill }}</span>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </section>

            <!-- Experience Timeline -->
            <section class="py-16 bg-white">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <h2 class="text-3xl font-extrabold text-gray-900 text-center mb-12">Pengalaman & Pencapaian</h2>
                    
                    <div class="relative">
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="h-full w-0.5 bg-gray-200"></div>
                        </div>
                        
                        <div class="relative space-y-12">
                            <!-- Experience 1 -->
                            <div class="relative flex items-center justify-center">
                                <div class="bg-white p-6 rounded-lg shadow-lg max-w-2xl w-full">
                                    <div class="flex items-start">
                                        <div class="flex-shrink-0">
                                            <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center">
                                                <span class="text-blue-600 font-bold">2023</span>
                                            </div>
                                        </div>
                                        <div class="ml-6">
                                            <h3 class="text-lg font-semibold text-gray-900">Senior Full Stack Developer</h3>
                                            <p class="text-blue-600">PT Teknologi Indonesia</p>
                                            <p class="mt-2 text-gray-600">Memimpin pengembangan platform e-commerce dengan Laravel dan Vue.js, mengelola tim 5 developer, dan meningkatkan performance aplikasi 40%.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Experience 2 -->
                            <div class="relative flex items-center justify-center">
                                <div class="bg-white p-6 rounded-lg shadow-lg max-w-2xl w-full">
                                    <div class="flex items-start">
                                        <div class="flex-shrink-0">
                                            <div class="w-12 h-12 bg-yellow-100 rounded-full flex items-center justify-center">
                                                <span class="text-yellow-600 font-bold">2022</span>
                                            </div>
                                        </div>
                                        <div class="ml-6">
                                            <h3 class="text-lg font-semibold text-gray-900">Project Manager</h3>
                                            <p class="text-yellow-600">Digital Agency Jakarta</p>
                                            <p class="mt-2 text-gray-600">Mengelola 15+ proyek digital dengan total nilai $500K+, implementasi metodologi Agile yang meningkatkan on-time delivery menjadi 95%.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Experience 3 -->
                            <div class="relative flex items-center justify-center">
                                <div class="bg-white p-6 rounded-lg shadow-lg max-w-2xl w-full">
                                    <div class="flex items-start">
                                        <div class="flex-shrink-0">
                                            <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center">
                                                <span class="text-green-600 font-bold">2021</span>
                                            </div>
                                        </div>
                                        <div class="ml-6">
                                            <h3 class="text-lg font-semibold text-gray-900">IT Support Specialist</h3>
                                            <p class="text-green-600">Corporate Solutions Inc.</p>
                                            <p class="mt-2 text-gray-600">Menyediakan dukungan IT untuk 200+ user, mengurangi downtime sistem 60% melalui proactive maintenance dan troubleshooting efektif.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Education & Certifications -->
            <section class="py-16 bg-gray-50">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <h2 class="text-3xl font-extrabold text-gray-900 text-center mb-12">Pendidikan & Sertifikasi</h2>
                    
                    <div class="grid gap-8 md:grid-cols-2">
                        <!-- Education -->
                        <div class="bg-white rounded-lg shadow-sm p-6">
                            <h3 class="text-xl font-semibold text-gray-900 mb-4">Pendidikan</h3>
                            <div class="space-y-4">
                                <div class="border-l-4 border-blue-500 pl-4">
                                    <h4 class="font-semibold text-gray-900">Sarjana Teknik Informatika</h4>
                                    <p class="text-gray-600">Universitas Indonesia (2017-2021)</p>
                                    <p class="text-sm text-gray-500">GPA: 3.8/4.0 - Cum Laude</p>
                                </div>
                                <div class="border-l-4 border-yellow-500 pl-4">
                                    <h4 class="font-semibold text-gray-900">Business Management Certification</h4>
                                    <p class="text-gray-600">Harvard Business School Online (2022)</p>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Certifications -->
                        <div class="bg-white rounded-lg shadow-sm p-6">
                            <h3 class="text-xl font-semibold text-gray-900 mb-4">Sertifikasi Profesional</h3>
                            <div class="space-y-4">
                                <div class="border-l-4 border-green-500 pl-4">
                                    <h4 class="font-semibold text-gray-900">AWS Certified Solutions Architect</h4>
                                    <p class="text-gray-600">Amazon Web Services (2023)</p>
                                </div>
                                <div class="border-l-4 border-purple-500 pl-4">
                                    <h4 class="font-semibold text-gray-900">Certified Scrum Master</h4>
                                    <p class="text-gray-600">Scrum Alliance (2022)</p>
                                </div>
                                <div class="border-l-4 border-red-500 pl-4">
                                    <h4 class="font-semibold text-gray-900">Google Analytics Certified</h4>
                                    <p class="text-gray-600">Google (2021)</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Contact CTA -->
            <section class="py-16 bg-gradient-to-br from-blue-600 to-purple-700">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                    <h2 class="text-3xl font-extrabold text-white sm:text-4xl">
                        Tertarik untuk berkolaborasi?
                    </h2>
                    <p class="mt-4 text-xl text-blue-100">
                        Saya siap membantu mewujudkan proyek atau ide Anda. Mari diskusikan kebutuhan Anda.
                    </p>
                    <div class="mt-8 flex justify-center space-x-4">
                        <a href="{{ route('contact') }}" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-blue-700 bg-white hover:bg-blue-50 transition-colors">
                            Hubungi Saya
                        </a>
                        <button class="inline-flex items-center px-6 py-3 border border-white text-base font-medium rounded-md text-white hover:bg-white hover:text-blue-700 transition-colors">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                            </svg>
                            Download CV
                        </button>
                    </div>
                </div>
            </section>
        </main>
    </div>
</body>
</html>