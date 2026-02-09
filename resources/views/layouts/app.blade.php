<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'faisal yusra') }}</title>

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
        <main class="flex-1 p-2.5 lg:p-5 mt-25 md:mt-35">
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
