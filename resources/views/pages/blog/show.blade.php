<x-app-layout>
    @section('title', ($post->meta_title ?? $post->title) . ' | Faisal Yusra Blog')
    @section('meta_description', $post->meta_description ?? $post->excerpt)
    @section('meta_keywords', $post->meta_keywords ?? 'blog, bukittinggi, teknologi, umkm')
    @section('canonical', route('blog.show', $post->slug))
    <meta name="author" content="Muhammad Faisal Alyusra">
    <meta name="robots" content="index, follow">

    {{-- OPEN GRAPH --}}
    <meta property="og:type" content="article">
    @section('og_title', ($post->meta_title ?? $post->title) . ' | Faisal Yusra Blog')
    @section('og_description', $post->meta_description ?? $post->excerpt)
    @section('og_image', $post->image ? asset('storage/' . $post->image) : asset('img/loggo.webp'))
    <meta property="og:url" content="{{ route('blog.show', $post->slug) }}">
    <meta property="og:site_name" content="Faisal Yusra">
    <meta property="article:published_time" content="{{ $post->published_at->toIso8601String() }}">

    {{-- Twitter / X Card --}}
    <meta name="twitter:card" content="summary_large_image">
    @section('twitter_title', ($post->meta_title ?? $post->title) . ' | Faisal Yusra Blog')
    @section('twitter_description', $post->meta_description ?? $post->excerpt)
    @section('twitter_image', $post->image ? asset('storage/' . $post->image) : asset('img/loggo.webp'))

    {{-- JSON-LD Schema --}}
    @push('schemas')
            <script type="application/ld+json">
        {
            "@@context": "https://schema.org",
            "@@type": "{{ $post->is_journal ? 'ScholarlyArticle' : 'BlogPosting' }}",
            "headline": "{{ $post->title }}",
            "description": "{{ $post->excerpt }}",
            "image": "{{ $post->image ? asset('storage/' . $post->image) : asset('img/loggo.webp') }}",
            "author": {
                "@@type": "Person",
                "name": "{{ $post->author->name }}",
                "url": "https://faisalyusra.my.id"
            },
            "publisher": {
                "@@type": "ProfessionalService",
                "name": "Faisal Yusra",
                "logo": {
                    "@@type": "ImageObject",
                    "url": "{{ asset('img/loggo.webp') }}"
                }
            },
            "datePublished": "{{ $post->published_at->toIso8601String() }}",
            "dateModified": "{{ $post->updated_at->toIso8601String() }}"
        }
        </script>
    @endpush

    <article class="min-h-screen py-20 px-4 md:px-8 bg-white">
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
                    @if($post->is_journal)
                        <span
                            class="bg-blue-600 text-white px-3 py-1 rounded-lg text-[10px] font-bold uppercase tracking-wider">
                            Scientific Journal
                        </span>
                    @endif
                    <time class="text-xs text-gray-400 font-medium"
                        datetime="{{ $post->published_at->toIso8601String() }}">
                        {{ $post->published_at->format('d M Y') }}
                    </time>
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
            @if($post->image)
                <div class="mb-12 rounded-3xl overflow-hidden shadow-2xl">
                    <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" class="w-full object-cover">
                </div>
            @endif

            {{-- Content --}}
            <div
                class="prose prose-purple max-w-none prose-headings:text-(--color-primary-950) prose-headings:font-extrabold prose-p:text-gray-600 prose-p:leading-relaxed prose-a:text-(--color-primary-600) prose-strong:text-(--color-primary-950) prose-img:rounded-2xl">
                {!! str_replace('@', '&#64;', $post->content) !!}
            </div>

            {{-- Footer / Share --}}
            <section class="mt-20 pt-10 border-t border-gray-100">
                <div class="flex flex-col md:flex-row justify-between items-center gap-6">
                    <div>
                        <h4 class="text-sm font-bold text-(--color-primary-950) mb-2">Tertarik berdiskusi lebih lanjut?
                        </h4>
                        <p class="text-xs text-gray-500">Mari kembangkan ekosistem digital Bukittinggi bersama Faisal
                            Yusra.</p>
                    </div>
                    <a href="{{ route('contact.create') }}" class="button px-6 py-2.5 text-xs font-bold rounded-xl">
                        Hubungi Saya &rarr;
                    </a>
                </div>
            </section>
        </div>
    </article>
</x-app-layout>