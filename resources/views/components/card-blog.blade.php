@props([
    'image' => null,
    'category' => null,
    'date' => null,
    'author' => null,
    'title' => null,
    'url' => '#',
    'excerpt' => null,
    'isJournal' => false,
])

<article {{ $attributes->merge(['class' => 'group bg-white rounded-3xl overflow-hidden border border-(--color-primary-100) transition-all duration-500 hover:scale-[1.02] hover:shadow-(--shadow-purple) flex flex-col h-full']) }}>
    {{-- Header/Image Section --}}
    <div class="relative aspect-video overflow-hidden">
        @if($image)
            <img src="{{ $image }}" alt="{{ $title }}" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
        @else
            <div class="w-full h-full bg-(--color-primary-50) flex items-center justify-center">
                <i class="fi fi-rr-picture text-4xl text-(--color-primary-200)"></i>
            </div>
        @endif

        {{-- Badges --}}
        @if($isJournal)
            <div class="absolute top-4 left-4 bg-blue-600 text-white text-[10px] font-bold px-2.5 py-1 rounded-full uppercase tracking-tighter shadow-sm">
                Scientific Journal
            </div>
        @endif

        @if($category)
            <div class="absolute top-4 right-4 bg-white/90 backdrop-blur-md px-3 py-1 rounded-lg text-[10px] font-bold text-(--color-primary-800) shadow-sm uppercase">
                {{ $category }}
            </div>
        @endif
    </div>

    {{-- Content Section --}}
    <div class="p-6 flex-1 flex flex-col">
        <div class="flex items-center gap-2 text-[10px] text-(--color-primary-500) font-semibold mb-3">
            @if($date)
                <span>{{ $date }}</span>
            @endif
            @if($date && $author)
                <span>•</span>
            @endif
            @if($author)
                <span>{{ $author }}</span>
            @endif
        </div>

        <a href="{{ $url }}" class="hover:text-(--color-primary-700) transition-colors">
            <h2 class="text-xl font-bold text-(--color-primary-950) line-clamp-2 mb-3 leading-tight">
                {{ $title }}
            </h2>
        </a>

        @if($excerpt)
            <p class="text-sm text-(--color-primary-600) line-clamp-3 mb-6 flex-1 scale-x-105 origin-left transition-transform duration-300 group-hover:scale-x-100">
                {{ $excerpt }}
            </p>
        @endif

        <a href="{{ $url }}" class="text-xs font-bold text-(--color-primary-700) flex items-center gap-1 group-hover:gap-2 transition-all">
            Selengkapnya <i class="fi fi-rr-arrow-right mt-0.5 animate-pulse group-hover:animate-none"></i>
        </a>
    </div>
</article>
