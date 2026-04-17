<div class="relative overflow-hidden">
    {{-- Decorative Background Orbs --}}
    <div class="absolute top-0 left-0 w-[500px] h-[500px] bg-(--orb-purple) opacity-30 blur-[100px] -translate-x-1/2 -translate-y-1/2 pointer-events-none"></div>
    <div class="absolute bottom-0 right-0 w-[600px] h-[600px] bg-(--orb-gold) opacity-20 blur-[120px] translate-x-1/3 translate-y-1/3 pointer-events-none"></div>

    <section class="relative min-h-screen py-8 md:py-24 px-4 md:px-6">
        <div class="max-w-6xl mx-auto">
            {{-- Header --}}
            <div class="text-center mb-10 md:mb-20">
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-(--color-primary-100) border border-(--color-primary-200) mb-6">
                    <span class="relative flex h-2 w-2">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-(--color-primary-400) opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-2 w-2 bg-(--color-primary-600)"></span>
                    </span>
                    <span class="text-[10px] font-bold uppercase tracking-wider text-(--color-primary-700)">Insights & News</span>
                </div>
                
                <h1 class="text-4xl md:text-6xl font-black text-(--color-primary-950) mb-6 tracking-tight">
                    Blog & <span class="bg-clip-text text-transparent bg-linear-to-r from-(--color-primary-700) to-(--color-primary-900)">Wawasan Digital</span>
                </h1>
                <p class="text-lg text-(--color-primary-600)/80 max-w-2xl mx-auto leading-relaxed font-medium">
                    Berbagi pengalaman, tutorial, dan analisis tren teknologi untuk membantu UMKM tetap relevan di era digital.
                </p>

                {{-- Search Bar --}}
                <div class="mt-12 max-w-xl mx-auto">
                    <div class="relative group">
                        <div class="absolute inset-y-0 left-0 pl-5 flex items-center pointer-events-none">
                            <i class="fi fi-rr-search text-xl text-(--color-primary-400) group-focus-within:text-(--color-primary-600) transition-colors"></i>
                        </div>
                        <input type="text" 
                               wire:model.live.debounce.300ms="search"
                               placeholder="Cari artikel inovatif..." 
                               class="block w-full pl-14 pr-12 py-5 bg-white/40 backdrop-blur-xl border-2 border-white/50 rounded-3xl text-(--color-primary-950) placeholder-(--color-primary-300) focus:outline-none focus:ring-4 focus:ring-(--color-primary-500)/10 focus:border-(--color-primary-500) transition-all shadow-xl shadow-purple-950/5 hover:bg-white/60">
                        
                        @if($search)
                            <button wire:click="clearSearch" class="absolute inset-y-0 right-0 pr-5 flex items-center text-(--color-primary-400) hover:text-red-500 transition-colors">
                                <i class="fi fi-rr-cross-circle text-lg"></i>
                            </button>
                        @endif
                    </div>
                </div>
            </div>

            {{-- Filters: Mobile Horizontal Scroll, Desktop Centered --}}
            <div class="relative mb-12">
                <div class="flex items-center justify-start md:justify-center gap-3 overflow-x-auto pb-4 md:pb-0 no-scrollbar snap-x touch-pan-x">
                    <div class="flex flex-nowrap md:flex-wrap gap-2 md:gap-4 px-4 md:px-0">
                        <x-button-secondary-purple wire:click="setCategory('all')" 
                                                 :active="$activeCategory === 'all' && !$isJournal" 
                                                 class="flex-none snap-start !px-5 !py-2.5 !rounded-full !text-sm">
                            Semua Artikel
                        </x-button-secondary-purple>

                        <x-button-secondary-purple wire:click="toggleJournal" 
                                                 :active="$isJournal"
                                                 class="flex-none snap-start !px-5 !py-2.5 !rounded-full !text-sm">
                            <i class="fi fi-rr-microscope mr-2"></i> Jurnal Ilmiah
                        </x-button-secondary-purple>

                        @foreach ($categories as $categoryName)
                            <x-button-secondary-purple wire:click="setCategory('{{ $categoryName }}')" 
                                                     :active="$activeCategory === $categoryName"
                                                     class="flex-none snap-start !px-5 !py-2.5 !rounded-full !text-sm">
                                {{ $categoryName }}
                            </x-button-secondary-purple>
                        @endforeach
                    </div>
                </div>
                {{-- Shadow gradients for mobile scroll indicators --}}
                <div class="md:hidden absolute top-0 left-0 h-full w-8 bg-linear-to-r from-(--color-primary-50) to-transparent pointer-events-none"></div>
                <div class="md:hidden absolute top-0 right-0 h-full w-8 bg-linear-to-l from-(--color-primary-50) to-transparent pointer-events-none"></div>
            </div>

            {{-- Post Grid --}}
            <div wire:loading.class="opacity-40 blur-sm scale-[0.98] pointer-events-none" 
                 class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-3 md:gap-8 transition-all duration-500 ease-in-out">
                @forelse($posts as $post)
                    <div class="animate-in fade-in slide-in-from-bottom-4 duration-700 fill-mode-both" style="animation-delay: {{ $loop->index * 50 }}ms">
                        <x-card-blog :post="$post" wire:key="post-{{ $post->id }}" />
                    </div>
                @empty
                    <div class="col-span-full py-20 text-center">
                        <div class="w-20 h-20 bg-(--color-primary-100) rounded-full flex items-center justify-center mx-auto mb-4 border border-(--color-primary-200)">
                            <i class="fi fi-rr-box-open text-3xl text-(--color-primary-400)"></i>
                        </div>
                        <h3 class="text-xl font-bold text-(--color-primary-900)">Belum Ada Artikel</h3>
                        <p class="text-(--color-primary-600) max-w-sm mx-auto mt-2 text-sm">
                            @if($search)
                                Tidak ada hasil untuk pencarian "{{ $search }}". Coba gunakan kata kunci lain.
                            @else
                                Maaf, sepertinya saat ini belum ada konten untuk kategori ini.
                            @endif
                        </p>
                    </div>
                @endforelse
            </div>

            {{-- Pagination --}}
            <div class="mt-16">
                {{ $posts->links() }}
            </div>
        </div>
    </section>
</div>
