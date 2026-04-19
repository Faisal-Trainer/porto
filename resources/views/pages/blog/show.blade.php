<x-app-layout>
    @section('title', ($post->meta_title ?? $post->title) . ' | Faisal Yusra — Web Developer & Consultant')
    @section('meta_description', $post->meta_description ?? $post->excerpt)
    @section('meta_keywords', $post->meta_keywords ?? 'blog, bukittinggi, teknologi, umkm')
    @section('canonical', route('blog.show', $post->slug))
    <meta name="author" content="Muhammad Faisal Alyusra">
    <meta name="robots" content="index, follow">

    {{-- OPEN GRAPH --}}
    <meta property="og:type" content="article">
    @section('og_title', ($post->meta_title ?? $post->title) . ' | Faisal Yusra')
    @section('og_description', $post->meta_description ?? $post->excerpt)
    @section('og_image', $post->image ? asset('storage/' . $post->image) : ($post->is_journal ? asset('banners/journal.webp') : asset('banners/article.webp')))
    <meta property="og:url" content="{{ route('blog.show', $post->slug) }}">
    <meta property="og:site_name" content="Faisal Yusra">
    <meta property="article:published_time" content="{{ $post->published_at->toIso8601String() }}">

    {{-- Twitter / X Card --}}
    <meta name="twitter:card" content="summary_large_image">
    @section('twitter_title', ($post->meta_title ?? $post->title) . ' | Faisal Yusra')
    @section('twitter_description', $post->meta_description ?? $post->excerpt)
    @section('twitter_image', $post->image ? asset('storage/' . $post->image) : ($post->is_journal ? asset('banners/journal.webp') : asset('banners/article.webp')))

    {{-- JSON-LD Schema --}}
    @push('schemas')
        @php
            $ogImage = $post->image
                ? asset('storage/' . $post->image)
                : ($post->is_journal ? asset('banners/journal.webp') : asset('banners/article.webp'));

            $blogPostingSchema = [
                '@context' => 'https://schema.org',
                '@type' => $post->is_journal ? 'ScholarlyArticle' : 'BlogPosting',
                'headline' => $post->title,
                'description' => $post->excerpt,
                'image' => $ogImage,
                'url' => route('blog.show', $post->slug),
                'mainEntityOfPage' => [
                    '@type' => 'WebPage',
                    '@id' => route('blog.show', $post->slug),
                ],
                'author' => [
                    '@type' => 'Person',
                    '@id' => 'https://faisalyusra.my.id/#person',
                    'name' => $post->author->name,
                    'url' => 'https://faisalyusra.my.id',
                ],
                'publisher' => [
                    '@type' => 'Organization',
                    'name' => 'Faisal Yusra',
                    'logo' => [
                        '@type' => 'ImageObject',
                        'url' => asset('img/loggo.webp'),
                    ],
                ],
                'datePublished' => $post->published_at->toIso8601String(),
                'dateModified' => $post->updated_at->toIso8601String(),
                'keywords' => $post->meta_keywords ?? 'blog, bukittinggi, teknologi, umkm',
                'inLanguage' => 'id-ID',
            ];

            echo '<script type="application/ld+json">' . json_encode($blogPostingSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) . '</script>';
        @endphp

        <x-seo-breadcrumb :items="[
            ['name' => 'Home', 'url' => route('home')],
            ['name' => 'Blog', 'url' => route('blog.index')],
            ['name' => $post->title],
        ]" />
    @endpush

    <article class="min-h-screen pt-28 pb-12 md:pt-36 md:pb-24 px-4 md:px-8 bg-white">
        <div class="max-w-3xl mx-auto">
            {{-- Breadcrumb --}}
            <nav
                class="flex items-center gap-2 text-xs font-semibold text-(--color-primary-500) mb-8 uppercase tracking-widest">
                <a href="{{ route('home') }}" class="hover:text-(--color-primary-700)">Home</a>
                <i class="fi fi-rr-angle-small-right"></i>
                <a href="{{ route('blog.index') }}" class="hover:text-(--color-primary-700)">Blog</a>
                <i class="fi fi-rr-angle-small-right"></i>
                <span class="text-(--color-primary-300)">Detail Artikel</span>
            </nav>

            {{-- Header --}}
            <header class="mb-12">
                <div class="flex items-center gap-3 mb-6">
                    <span
                        class="bg-(--color-primary-100) text-(--color-primary-700) px-3 py-1 rounded-lg text-[10px] font-bold uppercase tracking-wider">
                        {{ $post->category->name ?? 'Insight' }}
                    </span>
                    @if ($post->is_journal)
                        <span
                            class="bg-blue-600 text-white px-3 py-1 rounded-lg text-[10px] font-bold uppercase tracking-wider">
                            Scientific Journal
                        </span>
                    @endif
                    <time class="text-xs text-gray-500 font-bold"
                        datetime="{{ $post->published_at->toIso8601String() }}">
                        <i class="fi fi-rr-calendar"></i> {{ $post->published_at->format('d M Y') }}
                    </time>
                    <span class="text-xs text-gray-300">•</span>
                    <span class="text-xs text-gray-500 font-bold">
                        <i class="fi fi-rr-clock-three"></i> ⏳ {{ max(1, ceil(str_word_count(strip_tags($post->content)) / 250)) }} Menit Baca
                    </span>
                </div>

                <h1 class="text-3xl md:text-5xl font-extrabold text-(--color-primary-950) leading-tight mb-8">
                    {{ $post->title }}
                </h1>

                {{-- Author --}}
                <div
                    class="flex items-center gap-4 p-4 rounded-2xl bg-(--color-primary-50) border border-(--color-primary-100)">
                    <img src="{{ $post->author->profile_photo_url }}" alt="{{ $post->author->name }}"
                        class="w-12 h-12 rounded-full object-cover ring-2 ring-white">
                    <div>
                        <p class="text-sm font-bold text-(--color-primary-950)">{{ $post->author->name }}</p>
                        <p class="text-xs text-(--color-primary-600)">Web Developer & Digital Consultant</p>
                    </div>
                </div>
            </header>

            {{-- Featured Image --}}
            <div class="mb-12 rounded-3xl overflow-hidden border border-[rgba(0,0,0,0.05)] shadow-xl">
                @if ($post->image)
                    <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" class="w-full object-cover aspect-[21/9]">
                @elseif ($post->is_journal)
                    <img src="{{ asset('banners/journal.webp') }}" alt="{{ $post->title }}" class="w-full object-cover aspect-[21/9]">
                @else
                    <img src="{{ asset('banners/article.webp') }}" alt="{{ $post->title }}" class="w-full object-cover aspect-[21/9]">
                @endif
            </div>

            {{-- Content --}}
            <div
                class="prose prose-purple max-w-none prose-headings:text-(--color-primary-950) prose-headings:font-extrabold prose-p:text-gray-600 prose-p:leading-relaxed prose-a:text-(--color-primary-600) prose-strong:text-(--color-primary-950) prose-img:rounded-2xl">
                {!! str_replace('@', '&#64;', $post->content) !!}
            </div>

            {{-- Tags & Share --}}
            <div class="mt-12 pt-8 border-t border-gray-100 flex flex-col md:flex-row justify-between items-center gap-6">
                {{-- Tags --}}
                <div class="flex flex-wrap gap-2">
                    @if($post->meta_keywords)
                        @foreach(explode(',', $post->meta_keywords) as $tag)
                            <span class="px-3 py-1 bg-gray-100 text-gray-600 text-[10px] font-bold rounded-full uppercase tracking-wider">#{{ trim($tag) }}</span>
                        @endforeach
                    @endif
                </div>

                {{-- Share --}}
                <div class="flex items-center gap-3">
                    <span class="text-sm font-bold text-gray-500">Bagikan:</span>
                    <a href="https://api.whatsapp.com/send?text={{ urlencode($post->title . ' - ' . route('blog.show', $post->slug)) }}" target="_blank" class="w-10 h-10 rounded-full bg-green-500 text-white flex items-center justify-center hover:scale-110 transition-transform shadow-md">
                        <i class="fi fi-brands-whatsapp text-lg mt-1"></i>
                    </a>
                    <a href="https://twitter.com/intent/tweet?url={{ urlencode(route('blog.show', $post->slug)) }}&text={{ urlencode($post->title) }}" target="_blank" class="w-10 h-10 rounded-full bg-black text-white flex items-center justify-center hover:scale-110 transition-transform shadow-md">
                        <i class="fi fi-brands-twitter text-lg mt-1"></i>
                    </a>
                    <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ urlencode(route('blog.show', $post->slug)) }}" target="_blank" class="w-10 h-10 rounded-full bg-blue-600 text-white flex items-center justify-center hover:scale-110 transition-transform shadow-md">
                        <i class="fi fi-brands-linkedin text-lg mt-1"></i>
                    </a>
                </div>
            </div>

            {{-- Artikel Selanjutnya / CTA --}}
            <div class="mt-12 p-8 bg-(--color-primary-50) rounded-3xl border border-(--color-primary-100) flex flex-col items-center text-center shadow-sm">
                <div class="w-16 h-16 bg-(--color-primary-100) text-(--color-primary-600) rounded-full flex items-center justify-center text-2xl mb-4 shadow-sm border border-(--color-primary-200)">
                    <i class="fi fi-rr-book-alt mt-1"></i>
                </div>
                <h3 class="text-xl md:text-2xl font-extrabold text-(--color-primary-950) mb-2">Eksplorasi Insight Lainnya</h3>
                <p class="text-(--color-primary-700) mb-6 text-sm max-w-lg">
                    Tingkatkan wawasan Anda seputar dunia digital, edukasi, dan pengembangan teknologi bersama Faisal Yusra.
                </p>
                <x-button-primary-purple href="{{ route('blog.index') }}">
                    Baca Artikel Lainnya &rarr;
                </x-button-primary-purple>
            </div>

            {{-- Footer Consultation --}}
            <section class="mt-12 pt-10 border-t border-gray-100">
                <div class="flex flex-col md:flex-row justify-between items-center gap-6">
                    <div>
                        <h4 class="text-sm font-bold text-(--color-primary-950) mb-2">Tertarik berdiskusi lebih lanjut?
                        </h4>
                        <p class="text-xs text-gray-500">Mari kembangkan ekosistem digital Bukittinggi bersama Faisal
                            Yusra.</p>
                    </div>
                    <div class="flex gap-2.5 md:gap-5 flex-wrap justify-center md:justify-end">
                        <x-button-primary-purple href="{{ route('contact.create') }}">
                            Hubungi Saya &rarr;
                        </x-button-primary-purple>
                        <x-button-secondary-purple href="{{ route('blog.index') }}">
                            Kembali
                        </x-button-secondary-purple>
                    </div>
                </div>
            </section>
        </div>
    </article>
</x-app-layout>