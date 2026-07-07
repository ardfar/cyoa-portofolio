<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? config('app.name', 'Farras Arrafi Portfolio') }}</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;700&family=Inter:wght@300;400;600&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="h-full bg-persona-dark text-white font-body selection:bg-persona-tech/30 selection:text-white">
    <!-- Navbar placeholder slot -->
    @if (isset($nav))
        {{ $nav }}
    @endif

    <main>
        {{ $slot }}
    </main>

    <!-- Footer placeholder slot -->
    @if (isset($footer))
        {{ $footer }}
    @endif
</body>
</html>
