<x-app-layout>
    @section('title', 'Blog & Wawasan Digital | Faisal Yusra Web Developer Bukittinggi')
    @section('meta_description', 'Artikel praktis seputar web development, SEO lokal, dan solusi digital untuk UMKM
        Bukittinggi. Tips, tutorial, dan wawasan dari Faisal Yusra, Web Developer & Digital Consultant')
    @section('meta_keywords',
        'blog IT bukittinggi, wawasan digital umkm, artikel web developer, faisal yusra blog,
        jurnal digital bukittinggi')
    @section('canonical', route('blog.index'))
    <meta name="author" content="Muhammad Faisal Alyusra">
    <meta name="robots" content="index, follow">

    {{-- OPEN GRAPH --}}
    <meta property="og:type" content="website">
    @section('og_title', 'Blog & Wawasan Digital | Faisal Yusra Web Developer Bukittinggi')
    @section('og_description',
        'Temukan artikel menarik seputar pengembangan website, IT support, dan solusi digital
        untuk UMKM di Bukittinggi. Wawasan teraktual dari Faisal Yusra.')
    @section('og_image', asset('img/loggo.webp'))
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:locale" content="id_ID">
    <meta property="og:site_name" content="Faisal Yusra">

    {{-- Twitter / X Card --}}
    <meta name="twitter:card" content="summary_large_image">
    @section('twitter_title', 'Blog & Wawasan Digital Faisal yusra | Web Developer Bukittinggi')
    @section('twitter_description',
        'Temukan artikel menarik seputar pengembangan website, IT support, dan solusi
        digital untuk UMKM di Bukittinggi. Wawasan teraktual dari Faisal Yusra.')
    @section('twitter_image', asset('img/loggo.webp'))

    @push('schemas')
        <x-seo-breadcrumb :items="[
            ['name' => 'Home', 'url' => route('home')],
            ['name' => 'Blog & Wawasan Digital'],
        ]" />
    @endpush

    <livewire:blog-index />
</x-app-layout>
