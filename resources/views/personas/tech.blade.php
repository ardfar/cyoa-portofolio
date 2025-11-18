<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="{{ config('portfolio.personas.tech.seo.description', 'Praktisi Teknologi & Engineering - Pengembangan solusi teknis end-to-end yang scalable dan inovatif') }}">
    <meta name="keywords" content="{{ config('portfolio.personas.tech.seo.keywords', 'full stack developer, AI ML engineer, teknologi, pengembangan software, kecerdasan buatan') }}">
    <meta name="author" content="{{ config('portfolio.site.author', 'Portfolio Professional') }}">
    <meta property="og:title" content="{{ config('portfolio.personas.tech.seo.og_title', 'Technology & Engineering - Portfolio') }}">
    <meta property="og:description" content="{{ config('portfolio.personas.tech.seo.og_description', 'Membangun solusi teknis, dari kode hingga infrastruktur cerdas') }}">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ config('portfolio.personas.tech.seo.og_image', asset('images/tech-og-image.jpg')) }}">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ config('portfolio.personas.tech.seo.twitter_title', 'Technology & Engineering Portfolio') }}">
    <meta name="twitter:description" content="{{ config('portfolio.personas.tech.seo.twitter_description', 'Praktisi teknologi dengan fokus pada pengembangan solusi end-to-end') }}">
    <title>{{ config('portfolio.personas.tech.seo.title', 'Technology & Engineering - Portfolio') }}</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="canonical" href="{{ url()->current() }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
</head>
<body>
<!-- Technology & Engineering Persona -->
<div class="bg-gradient-to-br from-blue-50 to-purple-50">
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
                    <span class="inline-flex items-center px-4 py-2 bg-blue-100 text-blue-800 text-sm font-medium rounded-full">
                        Full Stack Developer
                    </span>
                    <span class="inline-flex items-center px-4 py-2 bg-purple-100 text-purple-800 text-sm font-medium rounded-full">
                        AI/ML Engineer
                    </span>
                </div>
            </div>
        </div>
    </div>

    <!-- Navigation -->
    <div class="bg-white shadow-sm border-b border-gray-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <nav class="flex space-x-8 py-4">
                <a href="#about" class="text-blue-600 hover:text-blue-800 font-medium">Tentang</a>
                <a href="#projects" class="text-gray-600 hover:text-blue-600 font-medium">Proyek Tech</a>
                <a href="#stack" class="text-gray-600 hover:text-blue-600 font-medium">Stack</a>
                <a href="#github" class="text-gray-600 hover:text-blue-600 font-medium">GitHub</a>
                <a href="#contact" class="text-gray-600 hover:text-blue-600 font-medium">Kontak</a>
            </nav>
        </div>
    </div>

    <!-- About Section -->
    <section id="about" class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:grid lg:grid-cols-2 lg:gap-12 lg:items-center">
                <div>
                    <h2 class="text-3xl font-bold text-gray-900 sm:text-4xl">
                        Tentang Saya sebagai Praktisi Teknologi
                    </h2>
                    <p class="mt-6 text-lg text-gray-600">
                        Dengan pengalaman luas dalam pengembangan perangkat lunak dan kecerdasan buatan, saya berdedikasi untuk menciptakan solusi teknologi yang inovatif dan berdampak.
                    </p>
                    <div class="mt-8 space-y-4">
                        <div class="flex items-start">
                            <div class="flex-shrink-0">
                                <div class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center">
                                    <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-medium text-gray-900">Full Stack Development</h3>
                                <p class="text-gray-600">Pengembangan aplikasi web dari frontend hingga backend dengan teknologi modern.</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="flex-shrink-0">
                                <div class="w-8 h-8 bg-purple-100 rounded-full flex items-center justify-center">
                                    <svg class="w-5 h-5 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-medium text-gray-900">AI/ML Engineering</h3>
                                <p class="text-gray-600">Pengembangan model machine learning untuk computer vision dan data analytics.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-12 lg:mt-0">
                    <div class="bg-gradient-to-br from-blue-100 to-purple-100 rounded-2xl p-8">
                        <h3 class="text-xl font-semibold text-gray-900 mb-4">Tech Stack</h3>
                        <div class="grid grid-cols-2 gap-4">
                            <div class="bg-white rounded-lg p-4 text-center">
                                <div class="text-2xl font-bold text-blue-600">Laravel</div>
                                <div class="text-sm text-gray-600">Backend Framework</div>
                            </div>
                            <div class="bg-white rounded-lg p-4 text-center">
                                <div class="text-2xl font-bold text-purple-600">Python</div>
                                <div class="text-sm text-gray-600">AI/ML</div>
                            </div>
                            <div class="bg-white rounded-lg p-4 text-center">
                                <div class="text-2xl font-bold text-yellow-600">JavaScript</div>
                                <div class="text-sm text-gray-600">Frontend</div>
                            </div>
                            <div class="bg-white rounded-lg p-4 text-center">
                                <div class="text-2xl font-bold text-green-600">Docker</div>
                                <div class="text-sm text-gray-600">Containerization</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl">
                    Proyek Teknologi Unggulan
                </h2>
                <p class="mt-4 max-w-2xl mx-auto text-xl text-gray-600">
                    Beberapa proyek teknis yang menunjukkan kemampuan saya dalam mengembangkan solusi end-to-end.
                </p>
            </div>

            <div class="mt-12 grid gap-8 md:grid-cols-2 lg:grid-cols-3">
                <!-- E-commerce Project -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow">
                    <div class="bg-gradient-to-br from-blue-500 to-purple-600 h-48 flex items-center justify-center">
                        <svg class="w-16 h-16 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                        </svg>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Platform E-commerce</h3>
                        <p class="text-gray-600 mb-4">Full-stack e-commerce solution dengan payment gateway, inventory management, dan real-time analytics.</p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="px-2 py-1 bg-blue-100 text-blue-800 text-xs rounded">Laravel</span>
                            <span class="px-2 py-1 bg-purple-100 text-purple-800 text-xs rounded">Vue.js</span>
                            <span class="px-2 py-1 bg-green-100 text-green-800 text-xs rounded">MySQL</span>
                            <span class="px-2 py-1 bg-yellow-100 text-yellow-800 text-xs rounded">Redis</span>
                        </div>
                        <div class="flex space-x-4">
                            <button class="text-blue-600 hover:text-blue-800 font-medium">Lihat Detail</button>
                            <button class="text-gray-600 hover:text-gray-800 font-medium">GitHub</button>
                        </div>
                    </div>
                </div>

                <!-- AI Object Detection -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow">
                    <div class="bg-gradient-to-br from-purple-500 to-pink-600 h-48 flex items-center justify-center">
                        <svg class="w-16 h-16 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">AI Object Detection</h3>
                        <p class="text-gray-600 mb-4">Sistem deteksi objek real-time menggunakan YOLO dan OpenCV untuk aplikasi monitoring.</p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="px-2 py-1 bg-purple-100 text-purple-800 text-xs rounded">Python</span>
                            <span class="px-2 py-1 bg-pink-100 text-pink-800 text-xs rounded">YOLO</span>
                            <span class="px-2 py-1 bg-blue-100 text-blue-800 text-xs rounded">OpenCV</span>
                            <span class="px-2 py-1 bg-green-100 text-green-800 text-xs rounded">CUDA</span>
                        </div>
                        <div class="flex space-x-4">
                            <button class="text-purple-600 hover:text-purple-800 font-medium">Lihat Demo</button>
                            <button class="text-gray-600 hover:text-gray-800 font-medium">GitHub</button>
                        </div>
                    </div>
                </div>

                <!-- DevOps Dashboard -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow">
                    <div class="bg-gradient-to-br from-green-500 to-blue-600 h-48 flex items-center justify-center">
                        <svg class="w-16 h-16 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                        </svg>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">DevOps Dashboard</h3>
                        <p class="text-gray-600 mb-4">Monitoring dan manajemen infrastruktur dengan CI/CD pipeline automation dan real-time metrics.</p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="px-2 py-1 bg-green-100 text-green-800 text-xs rounded">Docker</span>
                            <span class="px-2 py-1 bg-blue-100 text-blue-800 text-xs rounded">Kubernetes</span>
                            <span class="px-2 py-1 bg-purple-100 text-purple-800 text-xs rounded">Jenkins</span>
                            <span class="px-2 py-1 bg-yellow-100 text-yellow-800 text-xs rounded">Grafana</span>
                        </div>
                        <div class="flex space-x-4">
                            <button class="text-green-600 hover:text-green-800 font-medium">Lihat Detail</button>
                            <button class="text-gray-600 hover:text-gray-800 font-medium">GitHub</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section id="contact" class="py-16 bg-gradient-to-br from-blue-600 to-purple-700">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-extrabold text-white sm:text-4xl">
                Tertarik dengan proyek teknis saya?
            </h2>
            <p class="mt-4 text-xl text-blue-100">
                Mari diskusikan bagaimana saya bisa membantu mengembangkan solusi teknologi untuk kebutuhan Anda.
            </p>
            <div class="mt-8 flex justify-center space-x-4">
                <a href="{{ route('contact') }}" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-blue-700 bg-white hover:bg-blue-50 transition-colors">
                    Hubungi Saya
                </a>
                <a href="#" class="inline-flex items-center px-6 py-3 border border-white text-base font-medium rounded-md text-white hover:bg-blue-600 transition-colors">
                    Lihat GitHub
                </a>
            </div>
        </div>
    </section>
</div>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>