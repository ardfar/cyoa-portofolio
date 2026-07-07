<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title ?? 'Admin Panel' }} - CYOA Portfolio</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;700&family=Inter:wght@300;400;600&display=swap" rel="stylesheet">

    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <!-- Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    @stack('head')
</head>
<body class="font-body text-gray-900 bg-gray-50 antialiased !bg-gray-50 !text-gray-900" style="background-color: #f9fafb; color: #111827;">
    <div class="flex h-screen overflow-hidden">
        
        <!-- Sidebar -->
        <aside class="flex-shrink-0 w-64 flex flex-col border-r transition-all duration-300" style="background-color: #1e1e2e; border-color: #2a2a3c;">
            <div class="h-16 flex items-center px-6 border-b" style="border-color: #2a2a3c;">
                <span class="text-xl font-display font-bold text-white tracking-wider">CYOA<span class="text-persona-tech">Admin</span></span>
            </div>
            
            <nav class="flex-1 overflow-y-auto py-4 px-3 space-y-1">
                <a href="{{ route('admin.dashboard') }}" class="block px-3 py-2 rounded-md text-sm font-medium {{ request()->routeIs('admin.dashboard') ? 'bg-persona-tech text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}">Dashboard</a>
                
                <p class="px-3 pt-4 pb-2 text-xs font-semibold text-gray-400 uppercase tracking-wider">Content</p>
                <a href="{{ route('admin.projects.index') }}" class="block px-3 py-2 rounded-md text-sm font-medium {{ request()->routeIs('admin.projects.*') ? 'bg-persona-tech text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}">Projects</a>
                <a href="{{ route('admin.experiences.index') }}" class="block px-3 py-2 rounded-md text-sm font-medium {{ request()->routeIs('admin.experiences.*') ? 'bg-persona-tech text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}">Experiences</a>
                <a href="{{ route('admin.skills.index') }}" class="block px-3 py-2 rounded-md text-sm font-medium {{ request()->routeIs('admin.skills.*', 'admin.certifications.*') ? 'bg-persona-tech text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}">Skills & Certs</a>
                <a href="{{ route('admin.gallery.index') }}" class="block px-3 py-2 rounded-md text-sm font-medium {{ request()->routeIs('admin.gallery.*') ? 'bg-persona-tech text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}">Gallery</a>
                
                <p class="px-3 pt-4 pb-2 text-xs font-semibold text-gray-400 uppercase tracking-wider">System</p>
                <a href="{{ route('admin.settings.index') }}" class="block px-3 py-2 rounded-md text-sm font-medium {{ request()->routeIs('admin.settings.*') ? 'bg-persona-tech text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}">Settings</a>
            </nav>
            
            <div class="p-4 border-t" style="border-color: #2a2a3c;">
                <form method="POST" action="{{ route('admin.logout') }}">
                    @csrf
                    <button type="submit" class="w-full text-left px-3 py-2 text-sm font-medium text-gray-300 hover:text-white hover:bg-gray-700 rounded-md">
                        Logout
                    </button>
                </form>
            </div>
        </aside>

        <!-- Main Content -->
        <div class="flex-1 flex flex-col overflow-hidden">
            <!-- Topbar -->
            <header class="h-16 bg-white shadow-sm flex items-center justify-between px-6 z-10 border-b border-gray-200" style="background-color: white;">
                <div>
                    <h2 class="text-xl font-semibold text-gray-800">{{ $header ?? '' }}</h2>
                </div>
                <div class="flex items-center gap-4">
                    <a href="{{ url('/') }}" target="_blank" class="text-sm text-gray-500 hover:text-gray-700 flex items-center gap-1">
                        View Site
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                    </a>
                </div>
            </header>

            <!-- Main Page Content -->
            <main class="flex-1 overflow-x-hidden overflow-y-auto p-6" style="background-color: #f9fafb;">
                <!-- Flash Messages -->
                @if (session('success'))
                    <div class="mb-4 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                        <span class="block sm:inline">{{ session('success') }}</span>
                    </div>
                @endif
                @if (session('error'))
                    <div class="mb-4 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                        <span class="block sm:inline">{{ session('error') }}</span>
                    </div>
                @endif

                {{ $slot }}
            </main>
        </div>
    </div>
    
    @stack('scripts')
</body>
</html>
