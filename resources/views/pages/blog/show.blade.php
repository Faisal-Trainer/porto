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
        <div class="max-w-5xl mx-auto flex flex-col lg:flex-row gap-8 xl:gap-12 relative">
            {{-- Main Content Column --}}
            <div class="flex-1 min-w-0 max-w-3xl">
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
                    <time class="text-gray-500 text-[10px] font-bold uppercase tracking-widest">
                        {{ $post->published_at->translatedFormat('d F Y') }}
                    </time>
                    <span class="text-gray-300 text-[10px]">•</span>
                    <span class="text-gray-500 text-[10px] font-bold uppercase tracking-widest flex items-center gap-1">
                        <i class="fi fi-rr-clock-three"></i> {{ $post->readingTime() }} Menit Baca
                    </span>
                </div>
                @if ($post->is_journal)
                    <span
                        class="bg-blue-600 text-white px-3 py-1 rounded-lg text-[10px] font-bold uppercase tracking-wider">
                        Scientific Journal
                    </span>
                @endif

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
            <div class="prose prose-purple dark:prose-invert max-w-none prose-img:rounded-3xl prose-headings:text-(--color-primary-950) dark:prose-headings:text-(--color-primary-100) prose-p:text-gray-600 dark:prose-p:text-gray-300 prose-strong:text-(--color-primary-900) dark:prose-strong:text-(--color-primary-400)">
                {!! str_replace('@', '&#64;', $post->content) !!}
            </div>

            {{-- Sticky Social Share --}}
            <div class="hidden lg:flex flex-col gap-3 fixed left-8 top-1/2 -translate-y-1/2 z-30">
                <a href="https://wa.me/?text={{ urlencode($post->title . ' ' . url()->current()) }}" target="_blank" class="w-12 h-12 flex items-center justify-center bg-green-500 text-white rounded-full shadow-lg hover:scale-110 hover:-rotate-12 transition-all duration-300" title="Share ke WhatsApp">
                    <i class="fi fi-brands-whatsapp text-xl"></i>
                </a>
                <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ url()->current() }}" target="_blank" class="w-12 h-12 flex items-center justify-center bg-[#0077b5] text-white rounded-full shadow-lg hover:scale-110 hover:rotate-12 transition-all duration-300" title="Share ke LinkedIn">
                    <i class="fi fi-brands-linkedin text-xl"></i>
                </a>
                <button @click="navigator.clipboard.writeText('{{ url()->current() }}'); $dispatch('notify', { message: 'Link berhasil disalin!' })" class="w-12 h-12 flex items-center justify-center bg-white dark:bg-white/10 text-(--color-primary-600) dark:text-(--color-primary-400) rounded-full shadow-lg hover:scale-110 transition-all duration-300 border border-gray-100 dark:border-white/10" title="Salin Link">
                    <i class="fi fi-rr-copy-alt text-xl"></i>
                </button>
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

            {{-- Related Posts --}}
            @php
                $relatedPosts = \App\Models\Post::where('category_id', $post->category_id)
                    ->where('id', '!=', $post->id)
                    ->where('is_published', true)
                    ->latest()
                    ->take(3)
                    ->get();
            @endphp

            @if ($relatedPosts->count() > 0)
                <section class="mt-20 pt-16 border-t border-gray-100">
                    <div class="flex items-center justify-between mb-10">
                        <div>
                            <h3 class="text-2xl font-bold text-(--color-primary-900)">Artikel Terkait</h3>
                            <p class="text-sm text-gray-500 mt-1">Mungkin Anda juga tertarik membaca ini.</p>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                        @foreach ($relatedPosts as $related)
                            <div class="group">
                                <x-card-blog :post="$related" />
                            </div>
                        @endforeach
                    </div>
                </section>
            @endif
            </div>

            {{-- Sidebar (TOC) --}}
            <aside class="hidden lg:block w-64 shrink-0">
                <div class="sticky top-32 bg-(--color-primary-50)/50 backdrop-blur-sm p-5 rounded-2xl border border-(--color-primary-100)">
                    <h3 class="text-xs font-bold uppercase tracking-widest text-(--color-primary-500) mb-4">Daftar Isi</h3>
                    <ul id="toc-list" class="space-y-3 border-l-2 border-gray-100 pl-4 text-sm">
                        {{-- JS will populate this --}}
                    </ul>
                </div>
            </aside>
        </div>
    </article>

    @push('modals')
        {{-- Reading Progress Bar --}}
        <div id="reading-progress-container" class="fixed top-0 left-0 w-full h-1.5 bg-transparent z-[100] pointer-events-none">
            <div id="reading-progress-bar" class="h-full bg-linear-to-r from-(--color-primary-400) to-(--color-primary-600) w-0 rounded-r-full shadow-[0_0_8px_rgba(147,51,234,0.8)] transition-all duration-150 ease-out"></div>
        </div>

        {{-- Image Lightbox Modal --}}
        <div x-data="{ open: false, src: '' }" 
             @open-lightbox.window="src = $event.detail.src; open = true"
             x-show="open" 
             x-cloak
             x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0"
             x-transition:enter-end="opacity-100"
             x-transition:leave="transition ease-in duration-200"
             x-transition:leave-start="opacity-100"
             x-transition:leave-end="opacity-0"
             class="fixed inset-0 z-[150] flex items-center justify-center bg-(--color-primary-950)/90 backdrop-blur-md p-4"
             @click="open = false">
            <div class="relative max-w-5xl w-full h-full flex items-center justify-center">
                <img :src="src" class="max-w-full max-h-full object-contain rounded-2xl shadow-2xl" @click.stop>
                <button @click="open = false" class="absolute top-4 right-4 w-12 h-12 flex items-center justify-center bg-white/10 hover:bg-white/20 text-white rounded-full transition-all">
                    <i class="fi fi-rr-cross"></i>
                </button>
            </div>
        </div>

        {{-- Script for Progress Bar, TOC, Copy Code, & Lightbox --}}
        <script>
            function initArticleFeatures() {
                // Generate TOC
                const contentDiv = document.querySelector('.prose');
                const tocContainer = document.getElementById('toc-list');
                
                if (contentDiv && tocContainer) {
                    // 1. TOC Generation
                    const headings = contentDiv.querySelectorAll('h2, h3');
                    tocContainer.innerHTML = ''; // Clear previous if any
                    
                    if (headings.length > 0) {
                        headings.forEach(heading => {
                            if(!heading.id) {
                                heading.id = heading.textContent.toLowerCase().replace(/[^a-z0-9]+/g, '-');
                            }
                            const li = document.createElement('li');
                            if(heading.tagName === 'H3') {
                                li.className = 'ml-4';
                            }
                            li.innerHTML = `<a href="#${heading.id}" class="block text-gray-500 dark:text-gray-400 hover:text-(--color-primary-600) dark:hover:text-(--color-primary-400) hover:translate-x-1 transition-all duration-300 line-clamp-2">${heading.textContent}</a>`;
                            tocContainer.appendChild(li);
                        });
                    } else {
                        tocContainer.innerHTML = '<li class="text-gray-400 text-xs italic">Tidak ada sub-judul.</li>';
                    }

                    // 2. Copy Code Button
                    const codeBlocks = contentDiv.querySelectorAll('pre');
                    codeBlocks.forEach(block => {
                        if (block.querySelector('.copy-btn')) return; // Avoid double buttons
                        block.className += ' relative group';
                        const copyBtn = document.createElement('button');
                        copyBtn.className = 'copy-btn absolute top-3 right-3 p-2 bg-white/10 hover:bg-white/20 text-white rounded-lg opacity-0 group-hover:opacity-100 transition-all duration-300 flex items-center gap-2 text-[10px] font-bold uppercase tracking-widest backdrop-blur-sm border border-white/10';
                        copyBtn.innerHTML = '<i class="fi fi-rr-copy"></i> Copy';
                        
                        copyBtn.addEventListener('click', () => {
                            const code = block.querySelector('code').innerText;
                            navigator.clipboard.writeText(code).then(() => {
                                copyBtn.innerHTML = '<i class="fi fi-rr-check"></i> Copied!';
                                copyBtn.classList.replace('bg-white/10', 'bg-green-500/20');
                                copyBtn.classList.add('text-green-400');
                                setTimeout(() => {
                                    copyBtn.innerHTML = '<i class="fi fi-rr-copy"></i> Copy';
                                    copyBtn.classList.replace('bg-green-500/20', 'bg-white/10');
                                    copyBtn.classList.remove('text-green-400');
                                }, 2000);
                            });
                        });
                        block.appendChild(copyBtn);
                    });

                    // 3. Lightbox trigger for images
                    const images = contentDiv.querySelectorAll('img');
                    images.forEach(img => {
                        img.classList.add('cursor-zoom-in', 'hover:opacity-90', 'transition-all');
                        img.addEventListener('click', () => {
                            window.dispatchEvent(new CustomEvent('open-lightbox', { detail: { src: img.src } }));
                        });
                    });
                }
            }

            // Initialization on load and navigation
            document.addEventListener('DOMContentLoaded', initArticleFeatures);
            document.addEventListener('livewire:navigated', initArticleFeatures);

            // Keyboard Navigation (Arrow Keys)
            document.addEventListener('keydown', (e) => {
                if (e.key === 'ArrowLeft') {
                    window.location.href = "{{ route('blog.index') }}";
                }
            });
        </script>
    @endpush
</x-app-layout>