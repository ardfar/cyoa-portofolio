<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>{{ config('portfolio.contact.seo.title', 'Kontak - Portofolio Multi-Peran') }}</title>
    <meta name="description" content="{{ config('portfolio.contact.seo.description', 'Hubungi saya untuk diskusi proyek, kolaborasi, atau pertanyaan profesional.') }}">
    <meta name="keywords" content="{{ config('portfolio.contact.seo.keywords', 'kontak, hubungi, kolaborasi, proyek, profesional') }}">
    <meta name="author" content="{{ config('portfolio.site.author', 'Portfolio Professional') }}">
    
    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="{{ config('portfolio.contact.seo.og_title', 'Kontak - Portofolio Multi-Peran') }}">
    <meta property="og:description" content="{{ config('portfolio.contact.seo.og_description', 'Hubungi untuk diskusi proyek dan kolaborasi profesional.') }}">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ config('portfolio.contact.seo.og_image', asset('images/contact-og-image.jpg')) }}">
    
    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ config('portfolio.contact.seo.twitter_title', 'Kontak - Portofolio Multi-Peran') }}">
    <meta name="twitter:description" content="{{ config('portfolio.contact.seo.twitter_description', 'Siap untuk berdiskusi tentang proyek dan kolaborasi.') }}">
    
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
                        <a href="{{ route('resume') }}" class="text-sm text-gray-600 hover:text-gray-900">Resume</a>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Main Content -->
        <main>
            <!-- Header Section -->
            <div class="bg-gradient-to-br from-blue-600 to-purple-700 text-white">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 lg:py-20">
                    <div class="text-center">
                        <h1 class="text-4xl font-extrabold tracking-tight sm:text-5xl lg:text-6xl">
                            Hubungi Saya
                        </h1>
                        <p class="mt-6 max-w-2xl mx-auto text-xl text-blue-100">
                            Siap membantu mewujudkan proyek Anda. Mari diskusikan kebutuhan dan bagaimana saya bisa memberikan solusi terbaik.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Contact Section -->
            <section class="py-16 bg-white">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="grid gap-12 lg:grid-cols-2">
                        <!-- Contact Form -->
                        <div>
                            <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl mb-8">
                                Kirim Pesan
                            </h2>
                            
                            <form id="contact-form" class="space-y-6">
                                <div>
                                    <label for="name" class="block text-sm font-medium text-gray-700">Nama Lengkap</label>
                                    <input type="text" name="name" id="name" required
                                           class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                                </div>
                                
                                <div>
                                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                                    <input type="email" name="email" id="email" required
                                           class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                                </div>
                                
                                <div>
                                    <label for="subject" class="block text-sm font-medium text-gray-700">Subjek</label>
                                    <select name="subject" id="subject" required
                                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                                        <option value="">Pilih subjek</option>
                                        <option value="project">Diskusi Proyek</option>
                                        <option value="collaboration">Kolaborasi</option>
                                        <option value="consultation">Konsultasi</option>
                                        <option value="other">Lainnya</option>
                                    </select>
                                </div>
                                
                                <div>
                                    <label for="message" class="block text-sm font-medium text-gray-700">Pesan</label>
                                    <textarea name="message" id="message" rows="4" required
                                              class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"
                                              placeholder="Ceritakan tentang proyek atau kebutuhan Anda..."></textarea>
                                </div>
                                
                                <div>
                                    <button type="submit" 
                                            class="w-full inline-flex justify-center py-3 px-6 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-700 hover:to-purple-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-colors">
                                        Kirim Pesan
                                    </button>
                                </div>
                            </form>
                            
                            <div id="form-status" class="mt-4 hidden">
                                <div class="p-4 rounded-md">
                                    <p id="status-message"></p>
                                </div>
                            </div>
                        </div>

                        <!-- Contact Information -->
                        <div>
                            <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl mb-8">
                                Informasi Kontak
                            </h2>
                            
                            <div class="space-y-8">
                                <div class="flex items-start">
                                    <div class="flex-shrink-0">
                                        <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center">
                                            <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="ml-4">
                                        <h3 class="text-lg font-medium text-gray-900">Email</h3>
                                        <p class="mt-1 text-gray-600">nama@email.com</p>
                                        <p class="mt-1 text-sm text-gray-500">Respon dalam 24 jam</p>
                                    </div>
                                </div>
                                
                                <div class="flex items-start">
                                    <div class="flex-shrink-0">
                                        <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center">
                                            <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="ml-4">
                                        <h3 class="text-lg font-medium text-gray-900">Telepon</h3>
                                        <p class="mt-1 text-gray-600">+62 812-3456-7890</p>
                                        <p class="mt-1 text-sm text-gray-500">Senin - Jumat, 9AM - 6PM</p>
                                    </div>
                                </div>
                                
                                <div class="flex items-start">
                                    <div class="flex-shrink-0">
                                        <div class="w-12 h-12 bg-purple-100 rounded-full flex items-center justify-center">
                                            <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="ml-4">
                                        <h3 class="text-lg font-medium text-gray-900">Lokasi</h3>
                                        <p class="mt-1 text-gray-600">Jakarta, Indonesia</p>
                                        <p class="mt-1 text-sm text-gray-500">Tersedia untuk meeting online & offline</p>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Social Links -->
                            <div class="mt-12">
                                <h3 class="text-lg font-medium text-gray-900 mb-4">Connect dengan Saya</h3>
                                <div class="flex space-x-4">
                                    <a href="#" class="inline-flex items-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 transition-colors">
                                        <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                                        </svg>
                                        LinkedIn
                                    </a>
                                    <a href="#" class="inline-flex items-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 transition-colors">
                                        <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                                        </svg>
                                        GitHub
                                    </a>
                                    <a href="#" class="inline-flex items-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 transition-colors">
                                        <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                                        </svg>
                                        Twitter
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- FAQ Section -->
            <section class="py-16 bg-gray-50">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="text-center mb-12">
                        <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl">Pertanyaan Umum</h2>
                        <p class="mt-4 text-xl text-gray-600">Jawaban untuk pertanyaan yang sering diajukan</p>
                    </div>
                    
                    <div class="max-w-3xl mx-auto space-y-6">
                        <div class="bg-white rounded-lg shadow-sm p-6">
                            <h3 class="text-lg font-semibold text-gray-900 mb-2">Apa jenis proyek yang Anda tangani?</h3>
                            <p class="text-gray-600">Saya menangani berbagai jenis proyek mulai dari pengembangan web dan aplikasi mobile, manajemen proyek teknologi, konsultasi bisnis, hingga proyek fotografi dan kreatif.</p>
                        </div>
                        
                        <div class="bg-white rounded-lg shadow-sm p-6">
                            <h3 class="text-lg font-semibold text-gray-900 mb-2">Bagaimana proses kolaborasi dengan Anda?</h3>
                            <p class="text-gray-600">Proses kolaborasi dimulai dengan konsultasi awal untuk memahami kebutuhan, diikuti dengan proposal dan timeline yang jelas, serta komunikasi yang teratur selama proyek berlangsung.</p>
                        </div>
                        
                        <div class="bg-white rounded-lg shadow-sm p-6">
                            <h3 class="text-lg font-semibold text-gray-900 mb-2">Apakah Anda tersedia untuk proyek jangka panjang?</h3>
                            <p class="text-gray-600">Ya, saya tersedia untuk proyek jangka pendek maupun panjang. Saya dapat bekerja sebagai freelancer, konsultan, atau dalam kontrak jangka panjang tergantung kebutuhan Anda.</p>
                        </div>
                        
                        <div class="bg-white rounded-lg shadow-sm p-6">
                            <h3 class="text-lg font-semibold text-gray-900 mb-2">Bagaimana dengan privasi dan NDA?</h3>
                            <p class="text-gray-600">Saya sangat menghargai privasi klien dan bersedia menandatangani NDA (Non-Disclosure Agreement) untuk proyek-proyek yang memerlukan kerahasiaan informasi.</p>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </div>

    <script>
        // Contact form handling
        document.getElementById('contact-form').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const formData = new FormData(this);
            const statusDiv = document.getElementById('form-status');
            const statusMessage = document.getElementById('status-message');
            
            // Show loading state
            statusDiv.classList.remove('hidden');
            statusDiv.className = 'mt-4 p-4 rounded-md bg-blue-50';
            statusMessage.className = 'text-blue-700';
            statusMessage.textContent = 'Mengirim pesan...';
            
            // Simulate form submission (replace with actual API call)
            setTimeout(() => {
                statusDiv.className = 'mt-4 p-4 rounded-md bg-green-50';
                statusMessage.className = 'text-green-700';
                statusMessage.textContent = 'Pesan berhasil dikirim! Saya akan segera menghubungi Anda.';
                
                // Reset form
                this.reset();
                
                // Hide status after 5 seconds
                setTimeout(() => {
                    statusDiv.classList.add('hidden');
                }, 5000);
            }, 2000);
        });
    </script>
</body>
</html>