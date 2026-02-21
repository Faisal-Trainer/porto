<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- SEO Primary --}}
    <title>Faisal Yusra | IT Support Spesialis · Web Developer & Digital Consultant</title>
    <meta name="description"
        content="Muhammad Faisal Alyusra — IT Support Spesialis, Web Developer & Digital Consultant dari Bukittinggi. Membangun solusi digital dengan Laravel, Livewire & Tailwind untuk memberdayakan UMKM dan talent muda Indonesia.">
    <meta name="keywords"
        content="Faisal Yusra, Muhammad Faisal Alyusra, Web Developer, Laravel, Livewire, Filament, Tailwind CSS, Digital Consultant, IT Support Specialist, UMKM, Talent Development, Bukittinggi, Sumatera Barat">
    <meta name="author" content="Muhammad Faisal Alyusra">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://faisalyusra.my.id">

    {{-- Open Graph --}}
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://faisalyusra.my.id">
    <meta property="og:title" content="Faisal Yusra | IT Support Spesialis · Web Developer & Digital Consultant">
    <meta property="og:description"
        content="Membangun solusi digital dengan Laravel & teknologi modern untuk memberdayakan UMKM dan talent muda. Terbuka untuk Web Dev, IT Consultant, dan IT Support.">
    <meta property="og:image" content="{{ asset('img/loggo.webp') }}">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:locale" content="id_ID">
    <meta property="og:site_name" content="Faisal Yusra">

    {{-- Twitter / X Card --}}
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Faisal Yusra | Web Developer & Digital Consultant">
    <meta name="twitter:description"
        content="Membangun solusi digital dengan Laravel untuk memberdayakan UMKM dan talent muda Indonesia.">
    <meta name="twitter:image" content="{{ asset('img/loggo.webp') }}">

    {{-- CSRF --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- Favicon --}}
    <link rel="icon" href="{{ asset('img/loggo.webp') }}">

    {{-- JSON-LD Structured Data --}}
    @php
        echo '<script type="application/ld+json">' .
            json_encode([
                "@context" => "https://schema.org",
                "@type" => "Person",
                "name" => "Muhammad Faisal Alyusra",
                "alternateName" => "Faisal Yusra",
                "url" => "https://faisalyusra.my.id",
                "image" => asset('img/profile.webp'),
                "jobTitle" => "IT Support Spesialis | Web Developer & Digital Consultant",
                "description" => "Web Developer & Digital Consultant dari Bukittinggi yang membantu UMKM dan talent muda tumbuh melalui teknologi digital.",
                "address" => [
                    "@type" => "PostalAddress",
                    "addressLocality" => "Bukittinggi",
                    "addressRegion" => "Sumatera Barat",
                    "addressCountry" => "ID"
                ],
                "alumniOf" => [
                    "@type" => "CollegeOrUniversity",
                    "name" => "UIN Sjech M Djamil Djambek Bukittinggi"
                ],
                "knowsAbout" => [
                    "Laravel", "Livewire", "Filament", "Tailwind CSS",
                    "Jetstream", "Spatie", "Web Application Development",
                    "IT Support", "UI/UX Design", "Digital Consulting",
                    "UMKM Empowerment", "Talent Development"
                ],
                "sameAs" => [
                    "https://www.linkedin.com/in/faisalyusra41/"
                ]
            ], JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES) . '</script>';
    @endphp

    {{-- Fonts --}}
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet">

    {{-- Icons --}}
    <link rel="stylesheet" href="https://cdn-uicons.flaticon.com/3.0.0/uicons-brands/css/uicons-brands.css">
    <link rel="stylesheet"
        href="https://cdn-uicons.flaticon.com/3.0.0/uicons-regular-rounded/css/uicons-regular-rounded.css">
    <link rel="stylesheet"
        href="https://cdn-uicons.flaticon.com/3.0.0/uicons-solid-rounded/css/uicons-solid-rounded.css">

    {{-- Scripts --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- Livewire --}}
    @livewireStyles
</head>

<body class="min-h-screen flex flex-col bg-(--color-bg-light)">

    @livewire('navigation-menu')

    <main class="flex-1 mt-25 md:mt-35">
        {{ $slot }}
    </main>

    <footer>
        <x-footer />
    </footer>

    @stack('modals')
    @livewireScripts

</body>

</html>
