<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google-site-verification" content="sppRtu0hPAhZtFcVO9A6OJMMn6Eg6skizJaFOGDQT5Y" />
    <title>@yield('title', 'Faisal Yusra | Web Developer & Digital Consultant Bukittinggi')</title>

    {{-- SEO Primary --}}
    <meta name="description" content="@yield('meta_description', 'Default description')" />
    <meta name="keywords" content="@yield('meta_keywords', 'default, keywords')" />
    <meta name="author" content="Muhammad Faishal">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="@yield('canonical', url()->current())" />

    {{-- Open Graph --}}
    <meta property="og:type" content="website" />
    <meta property="og:title" content="@yield('og_title', 'Default OG Title')" />
    <meta property="og:description" content="@yield('og_description', 'Default OG Description')" />
    <meta property="og:url" content="@yield('og_url', url()->current())" />
    <meta property="og:image" content=" {{ asset('img/loggo.webp') }}" />
    <meta property="og:image:width" content="800">
    <meta property="og:image:height" content="800">
    <meta property="og:locale" content="id_ID">
    <meta property="og:site_name" content="Faisal Yusra">

    {{-- Twitter / X Card --}}
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="@yield('twitter_title', 'Default Twitter Title')" />
    <meta name="twitter:description" content="@yield('twitter_description', 'Default Twitter Description')" />
    <meta name="twitter:image" content="@yield('twitter_image', asset('img/default.webp'))" />

    {{-- CSRF --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- Favicon --}}
    <link rel="icon" href="{{ asset('img/loggo.webp') }}">

    {{-- JSON-LD Structured Data --}}
    @php
        $personSchema = [
            '@context' => 'https://schema.org',
            '@type' => 'Person',
            '@id' => 'https://faisalyusra.my.id/#person',
            'name' => 'Muhammad Faisal Alyusra',
            'alternateName' => 'Faisal Yusra',
            'url' => 'https://faisalyusra.my.id',
            'image' => asset('img/profile.webp'),
            'jobTitle' => 'IT Support Spesialis | Web Developer & Digital Consultant',
            'description' =>
                'Web Developer & Digital Consultant dari Bukittinggi yang membantu UMKM dan talent muda tumbuh melalui teknologi digital.',
            'address' => [
                '@type' => 'PostalAddress',
                'streetAddress' => 'Bukittinggi',
                'addressLocality' => 'Bukittinggi',
                'addressRegion' => 'Sumatera Barat',
                'addressCountry' => 'ID',
            ],
            'areaServed' => [
                '@type' => 'Place',
                'name' => 'Indonesia',
            ],
            'alumniOf' => [
                '@type' => 'CollegeOrUniversity',
                'name' => 'UIN Sjech M Djamil Djambek Bukittinggi',
            ],
            'knowsAbout' => [
                'Laravel',
                'Livewire',
                'Filament',
                'Tailwind CSS',
                'Web Application Development',
                'IT Support',
                'UI/UX Design',
                'Digital Consulting',
                'UMKM Empowerment',
            ],
            'sameAs' => [
                'https://www.linkedin.com/in/faisalyusra41/',
                'https://share.google/4uVCD3dAp3mktZF7B/',
                'https://github.com/Faisal-Trainer',
                'https://scholar.google.co.id/citations?view_op=list_works&hl=id&user=-4Ghx-0AAAAJ',
            ],
        ];

        $localBusinessSchema = [
            '@context' => 'https://schema.org',
            '@type' => 'ProfessionalService',
            'name' => 'Faisal Yusra | Web Developer & Digital Consultant Bukittinggi',
            'image' => asset('img/loggo.webp'),
            '@id' => 'https://faisalyusra.my.id/#service',
            'url' => 'https://faisalyusra.my.id',
            'address' => [
                '@type' => 'PostalAddress',
                'streetAddress' => 'Bukittinggi',
                'addressLocality' => 'Bukittinggi',
                'addressRegion' => 'Sumatera Barat',
                'postalCode' => '26115',
                'addressCountry' => 'ID',
            ],
            'founder' => [
                '@type' => 'Person',
                '@id' => 'https://faisalyusra.my.id/#person',
            ],
            'geo' => [
                '@type' => 'GeoCoordinates',
                'latitude' => -0.311639,
                'longitude' => 100.38725,
            ],
            'areaServed' => [
                '@type' => 'Place',
                'name' => 'Indonesia',
            ],
            'openingHoursSpecification' => [
                '@type' => 'OpeningHoursSpecification',
                'dayOfWeek' => ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'],
                'opens' => '08:00',
                'closes' => '17:00',
            ],
            'sameAs' => [
                'https://www.linkedin.com/in/faisalyusra41/',
                'https://share.google/4uVCD3dAp3mktZF7B/',
                'https://github.com/Faisal-Trainer',
                'https://scholar.google.co.id/citations?view_op=list_works&hl=id&user=-4Ghx-0AAAAJ',
            ],
        ];

        echo '<script type="application/ld+json">' . json_encode($personSchema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) . '</script>';
        echo '<script type="application/ld+json">' . json_encode($localBusinessSchema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) . '</script>';
    @endphp

    @stack('schemas')
    {{-- Fonts --}}
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet">

    {{-- Icons --}}
    <link rel="preconnect" href="https://cdn-uicons.flaticon.com" crossorigin>
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

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-NEX8Z7GJLK"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-NEX8Z7GJLK');
    </script>
</body>

</html>
