<div class="relative overflow-hidden">
    <section class="relative min-h-screen px-1 md:px-6 pt-10">
        <div class="max-w-6xl mx-auto">
            {{-- Header --}}
            <div class="text-center mb-10 md:mb-20">
                <div
                    class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-(--color-primary-100) border border-(--color-primary-200) mb-6">
                    <span class="relative flex h-2 w-2">
                        <span
                            class="animate-ping absolute inline-flex h-full w-full rounded-full bg-(--color-primary-400) opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-2 w-2 bg-(--color-primary-600)"></span>
                    </span>
                    <span class="text-[10px] font-bold uppercase tracking-wider text-(--color-primary-700)">Insights &
                        News</span>
                </div>

                <h1 class="text-4xl md:text-6xl font-black text-(--color-primary-950) mb-6 tracking-tight">
                    Blog & <span
                        class="bg-clip-text text-transparent bg-linear-to-r from-(--color-primary-700) to-(--color-primary-900)">Wawasan
                        Digital</span>
                </h1>
                <p class="text-lg text-(--color-accent-500) max-w-2xl mx-auto leading-relaxed font-medium">
                    Berbagi pengalaman, tutorial, dan analisis tren teknologi untuk membantu UMKM tetap relevan di era
                    digital.
                </p>

                {{-- Search Bar --}}
                <div class="mt-12 max-w-xl mx-auto">
                    <div class="relative group">
                        <div class="absolute inset-y-0 left-0 pl-5 flex items-center pointer-events-none">
                            <i
                                class="fi fi-rr-search text-xl text-(--color-primary-400) group-focus-within:text-(--color-primary-600) transition-colors"></i>
                        </div>
                        <input type="text" wire:model.live.debounce.300ms="search"
                            placeholder="Cari artikel inovatif..."
                            class="block w-full pl-14 pr-12 py-5 bg-white/40 backdrop-blur-xl border-2 border-white/50 rounded-3xl text-(--color-primary-950) placeholder-(--color-primary-300) focus:outline-none focus:ring-4 focus:ring-(--color-primary-500)/10 focus:border-(--color-primary-500) transition-all shadow-xl shadow-purple-950/5 hover:bg-white/60">

                        <div class="absolute inset-y-0 right-0 pr-5 flex items-center gap-3">
                        <i wire:loading wire:target="search" class="fi fi-rr-spinner animate-spin text-lg text-(--color-primary-400)"></i>
                        @if ($search)
                            <button wire:click="clearSearch"
                                aria-label="Hapus pencarian"
                                class="text-(--color-primary-400) hover:text-red-500 transition-colors focus:outline-none focus-visible:ring-2 focus-visible:ring-red-500 rounded-full flex items-center">
                                <i class="fi fi-rr-cross-circle text-lg"></i>
                            </button>
                        @endif
                    </div>
                    </div>
                </div>
            </div>

            {{-- Filters: Mobile Horizontal Scroll, Desktop Centered --}}
            <div class="relative mb-4 md:mb-8">
                <div
                    class="flex items-center justify-start md:justify-center gap-3 overflow-x-auto pb-4 md:pb-0 no-scrollbar snap-x touch-pan-x">
                    <div class="flex flex-nowrap md:flex-wrap gap-2 md:gap-4 px-4 md:px-0">
                        <x-button-secondary-purple wire:click="setCategory('all')" :active="$activeCategory === 'all' && !$isJournal"
                            class="flex-none snap-start !px-5 !py-2.5 !rounded-full !text-sm">
                            Semua Artikel
                        </x-button-secondary-purple>

                        <x-button-secondary-purple wire:click="toggleJournal" :active="$isJournal"
                            class="flex-none snap-start !px-5 !py-2.5 !rounded-full !text-sm">
                            <i class="fi fi-rr-microscope mr-2"></i> Jurnal Ilmiah
                        </x-button-secondary-purple>

                        @foreach ($categories as $categoryName)
                            <x-button-secondary-purple wire:click="setCategory('{{ $categoryName }}')" :active="$activeCategory === $categoryName"
                                class="flex-none snap-start !px-5 !py-2.5 !rounded-full !text-sm">
                                {{ $categoryName }}
                            </x-button-secondary-purple>
                        @endforeach
                    </div>
                </div>
                {{-- Shadow gradients for mobile scroll indicators --}}
                <div
                    class="md:hidden absolute top-0 left-0 h-full w-8 bg-linear-to-r from-(--color-primary-50) to-transparent pointer-events-none">
                </div>
                <div
                    class="md:hidden absolute top-0 right-0 h-full w-8 bg-linear-to-l from-(--color-primary-50) to-transparent pointer-events-none">
                </div>
            </div>

            {{-- Skeleton Loading --}}
            <div wire:loading wire:target="search, setCategory, toggleJournal" class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-1 md:gap-6 mb-8">
                @for ($i = 0; $i < 8; $i++)
                    <div class="bg-white/50 backdrop-blur-xl rounded-3xl p-3 md:p-5 border border-white/50 shadow-xl shadow-purple-900/5 animate-pulse">
                        <div class="bg-gray-200/60 aspect-[16/10] rounded-2xl mb-4"></div>
                        <div class="h-4 bg-gray-200/60 rounded-full w-3/4 mb-3"></div>
                        <div class="h-3 bg-gray-200/60 rounded-full w-1/2 mb-6"></div>
                        <div class="flex items-center gap-2">
                            <div class="w-8 h-8 bg-gray-200/60 rounded-full"></div>
                            <div class="h-3 bg-gray-200/60 rounded-full w-20"></div>
                        </div>
                    </div>
                @endfor
            </div>

            {{-- Post Grid --}}
            <div wire:loading.remove wire:target="search, setCategory, toggleJournal"
                class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-1 md:gap-6 transition-all duration-500 ease-in-out">
                @forelse($posts as $post)
                    <div class="animate-in fade-in slide-in-from-bottom-4 duration-700 fill-mode-both"
                        style="animation-delay: {{ $loop->index * 50 }}ms">
                        <x-card-blog :post="$post" wire:key="post-{{ $post->id }}" />
                    </div>
                @empty
                    <div class="col-span-full py-20 text-center">
                        <div
                            class="w-20 h-20 bg-(--color-primary-100) rounded-full flex items-center justify-center mx-auto mb-4 border border-(--color-primary-200)">
                            <i class="fi fi-rr-box-open text-3xl text-(--color-primary-400)"></i>
                        </div>
                        <h3 class="text-xl font-bold text-(--color-primary-900)">Belum Ada Artikel</h3>
                        <p class="text-(--color-primary-600) max-w-sm mx-auto mt-2 text-sm">
                            @if ($search)
                            Tidak ada hasil untuk pencarian "{{ $search }}". Coba gunakan kata kunci lain.
                        @else
                            Maaf, sepertinya saat ini belum ada konten untuk kategori ini.
                            <div class="mt-6 flex justify-center">
                                <button wire:click="setCategory('all')" class="inline-flex items-center px-5 py-2.5 bg-(--color-primary-100) text-(--color-primary-700) hover:bg-(--color-primary-200) hover:text-(--color-primary-800) text-sm font-medium rounded-full transition-colors focus:outline-none focus-visible:ring-2 focus-visible:ring-offset-2 focus-visible:ring-(--color-primary-500)">
                                    <i class="fi fi-rr-apps mr-2"></i> Lihat Semua Artikel
                                </button>
                            </div>
                        @endif
                        </p>
                    </div>
                @endforelse
            </div>

            {{-- Pagination --}}
            <div class="mt-16 mb-2.5">
                {{ $posts->links() }}
            </div>
        </div>
    </section>
</div>
