@props([
    'post',
])

@php
    $image = $post->is_journal ? asset('banners/journal.webp') : asset('banners/article.webp');
    $category = $post->category->name ?? 'Uncategorized';
    $date = $post->published_at?->format('d M Y');
    $author = $post->author->name;
    $title = $post->title;
    $url = route('blog.show', $post->slug);
    $excerpt = $post->excerpt;
    $isJournal = $post->is_journal;
@endphp

<article {{ $attributes->merge(['class' => 'group bg-white rounded-3xl overflow-hidden border border-(--color-primary-100) transition-all duration-500 hover:scale-[1.02] hover:shadow-(--shadow-purple) flex flex-col h-full']) }}>
    {{-- Header/Image Section --}}
    <div class="relative aspect-video overflow-hidden">
        <img src="{{ $image }}" alt="{{ $title }}" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">

        {{-- Badges --}}
        @if($isJournal)
            <div class="absolute top-4 left-4 bg-blue-600 text-white text-[10px] font-bold px-2.5 py-1 rounded-full uppercase tracking-tighter shadow-sm z-10">
                Scientific Journal
            </div>
        @endif

        <div class="absolute top-4 right-4 bg-white/90 backdrop-blur-md px-3 py-1 rounded-lg text-[10px] font-bold text-(--color-primary-800) shadow-sm uppercase z-10">
            {{ $category }}
        </div>
    </div>

    {{-- Content Section --}}
    <div class="p-1.5 md:p-6 flex-1 flex flex-col">
        <div class="flex items-center gap-2 text-[10px] text-(--color-primary-500) font-semibold mb-1.5 md:mb-3">
            <span>{{ $date }}</span>
            <span>•</span>
            <span>{{ $author }}</span>
        </div>

        <a href="{{ $url }}" class="hover:text-(--color-primary-700) transition-colors">
            <h2 class="text-xl font-bold text-(--color-primary-950) line-clamp-2 mb-1.5 md:mb-3 leading-tight">
                {{ $title }}
            </h2>
        </a>

        <p class="text-sm text-(--color-primary-600) line-clamp-3 mb-3 md:mb-6 flex-1">
            {{ $excerpt }}
        </p>

        <a href="{{ $url }}" class="text-xs font-bold text-(--color-primary-700) flex items-center gap-1 group-hover:gap-2 transition-all">
            Selengkapnya <i class="fi fi-rr-arrow-right mt-0.5 animate-pulse group-hover:animate-none"></i>
        </a>
    </div>
</article>
