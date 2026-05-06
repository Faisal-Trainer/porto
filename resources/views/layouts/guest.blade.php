<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', $title ?? config('app.name', 'faisal yusra'))</title>

    {{-- SEO --}}
    <meta name="description" content="@yield('meta_description', 'Faisal Yusra Platform')" />
    <meta name="robots" content="@yield('robots', 'index, follow')" />
    <link rel="canonical" href="@yield('canonical', url()->current())" />

    {{-- Open Graph --}}
    <meta property="og:type" content="website" />
    <meta property="og:title" content="@yield('og_title', config('app.name'))" />
    <meta property="og:description" content="@yield('og_description', 'Faisal Yusra Platform')" />
    <meta property="og:url" content="@yield('canonical', url()->current())" />
    <meta property="og:image" content="{{ asset('img/loggo.webp') }}" />
    <meta property="og:locale" content="id_ID" />
    <meta property="og:site_name" content="Faisal Yusra" />

    {{-- Schema inject per halaman --}}
    @stack('schemas')

    <link rel="icon" href="{{ asset('img/loggo.webp') }}">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>

<body class="bg-(--color-bg-light)">
    <div class="font-sans text-gray-900 antialiased">
        {{ $slot }}
    </div>

    @livewireScripts
</body>

</html>
