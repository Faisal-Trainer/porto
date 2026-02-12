<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="Faisal Yusra adalah Web App Developer & Digital Growth Partner yang membantu UMKM membangun sistem digital terstruktur, scalable, dan berbasis data menggunakan Laravel & modern web technology.">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta property="og:title" content="Web App Developer & Digital Growth Partner | Faisal Yusra">
    <meta property="og:description"
        content="Membantu UMKM membangun sistem digital terstruktur dan scalable berbasis Laravel.">
    <meta property="og:image" content="{{ asset('img/loggo.webp') }}">
    <meta property="og:type" content="website">


    <title>{{ config('Digital Growth System Architect for SMEs', 'faisal yusra') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link rel="stylesheet" href="https://cdn-uicons.flaticon.com/3.0.0/uicons-brands/css/uicons-brands.css">
    <link rel="stylesheet"
        href="https://cdn-uicons.flaticon.com/3.0.0/uicons-regular-rounded/css/uicons-regular-rounded.css">
    <link rel="stylesheet"
        href="https://cdn-uicons.flaticon.com/3.0.0/uicons-solid-rounded/css/uicons-solid-rounded.css">

    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="icon" href="{{ asset('img/loggo.webp') }}">
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])



    <!-- Styles -->
    @livewireStyles
</head>

<body class="min-h-screen flex flex-col bg-(--color-bg-light)">
    <x-banner />

    <div class="min-h-screen">
        @livewire('navigation-menu')
        <!-- Page Content -->
        <main class="flex-1 mt-25 md:mt-35">
            {{ $slot }}
        </main>
    </div>

    @stack('modals')

    @livewireScripts
    <footer>
        <x-footer />
    </footer>
</body>

</html>
