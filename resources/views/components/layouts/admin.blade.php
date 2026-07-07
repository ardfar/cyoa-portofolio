<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full bg-gray-50">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Panel - {{ config('app.name', 'CYOA Portfolio') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="h-full font-body text-gray-900 bg-gray-50">
    <div class="flex h-screen overflow-hidden bg-gray-50">
        <!-- Sidebar -->
        <aside class="hidden w-64 overflow-y-auto border-r border-gray-200 bg-white md:block">
            <div class="flex h-16 items-center px-6">
                <span class="text-lg font-bold">Admin Panel</span>
            </div>
            <nav class="mt-6 px-4">
                <a href="{{ route('admin.dashboard') }}" class="flex items-center px-4 py-2 text-gray-700 bg-gray-100 rounded-lg">
                    <span class="font-medium">Dashboard</span>
                </a>
                <!-- Future CRUD links will go here -->
            </nav>
        </aside>

        <div class="flex flex-col flex-1 w-full overflow-hidden">
            <!-- Topbar -->
            <header class="flex items-center justify-between h-16 px-6 bg-white border-b border-gray-200">
                <div class="flex items-center md:hidden">
                    <span class="text-lg font-bold">Admin</span>
                </div>
                <div class="flex items-center justify-end w-full">
                    <form method="POST" action="{{ route('admin.logout') }}">
                        @csrf
                        <button type="submit" class="text-sm font-medium text-gray-700 hover:text-gray-900">
                            Log out
                        </button>
                    </form>
                </div>
            </header>

            <!-- Main Content -->
            <main class="flex-1 overflow-y-auto bg-gray-50 p-6">
                {{ $slot }}
            </main>
        </div>
    </div>
</body>
</html>
