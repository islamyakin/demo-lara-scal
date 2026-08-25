<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="@yield('description', 'Aplikasi static page Laravel yang dijalankan di atas Octane dan FrankenPHP.')">

    <title>@yield('title', 'Beranda') &mdash; {{ config('app.name') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-white text-slate-800 antialiased dark:bg-slate-950 dark:text-slate-200">
    <a href="#konten" class="sr-only focus:not-sr-only focus:absolute focus:left-4 focus:top-4 focus:z-50 focus:rounded-md focus:bg-slate-900 focus:px-4 focus:py-2 focus:text-white">
        Lompat ke konten
    </a>

    @include('partials.nav')

    <main id="konten">
        @yield('content')
    </main>

    @include('partials.footer')
</body>
</html>
