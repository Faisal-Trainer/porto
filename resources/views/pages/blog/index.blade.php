<x-app-layout>
    @section('title', 'Blog & Wawasan Digital | Faisal Yusra Web Developer Bukittinggi')
    @section('meta_description', 'Temukan artikel menarik seputar pengembangan website, IT support, dan solusi digital untuk UMKM di Bukittinggi. Wawasan teraktual dari Faisal Yusra.')
    @section('meta_keywords', 'blog IT bukittinggi, wawasan digital umkm, artikel web developer, faisal yusra blog, jurnal digital bukittinggi')

    <section
        class="min-h-screen py-16 px-4 md:px-8 bg-linear-to-br from-(--color-primary-50) via-white to-(--color-primary-100)">
        <div class="max-w-6xl mx-auto">
            {{-- Header --}}
            <div class="text-center mb-16">
                <span class="text-xs font-bold uppercase tracking-widest text-(--color-primary-500) mb-2 block">Insights
                    & News</span>
                <h1 class="text-4xl md:text-5xl font-extrabold text-(--color-primary-950) mb-4">Blog & <span
                        class="text-(--color-primary-700)">Wawasan Digital</span></h1>
                <p class="text-base text-(--color-primary-600) max-w-2xl mx-auto leading-relaxed">
                    Berbagi pengalaman, tutorial, dan analisis tren teknologi untuk membantu UMKM dan talent di
                    Bukittinggi tetap relevan di era digital.
                </p>
            </div>

            {{-- Post Grid --}}
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
                @forelse($posts as $post)
                    <article
                        class="card overflow-hidden group hover:scale-[1.02] transition-transform duration-300 flex flex-col">
                        {{-- Image --}}
                        <div class="relative aspect-video overflow-hidden">
                            @if($post->image)
                                <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}"
                                    class="w-full h-full object-cover">
                            @else
                                <div class="w-full h-full bg-(--color-primary-200) flex items-center justify-center">
                                    <i class="fi fi-rr-picture text-4xl text-(--color-primary-400)"></i>
                                </div>
                            @endif

                            {{-- Journal Badge --}}
                            @if($post->is_journal)
                                <div
                                    class="absolute top-4 left-4 bg-blue-600 text-white text-[10px] font-bold px-2.5 py-1 rounded-full uppercase tracking-tighter">
                                    Scientific Journal
                                </div>
                            @endif

                            <div
                                class="absolute top-4 right-4 bg-white/90 backdrop-blur-md px-3 py-1 rounded-lg text-[10px] font-bold text-(--color-primary-800) shadow-sm uppercase">
                                {{ $post->category->name ?? 'Uncategorized' }}
                            </div>
                        </div>

                        {{-- Content --}}
                        <div class="p-6 flex-1 flex flex-col">
                            <div class="flex items-center gap-2 text-[10px] text-(--color-primary-500) font-semibold mb-3">
                                <span>{{ $post->published_at?->format('d M Y') }}</span>
                                <span>•</span>
                                <span>{{ $post->author->name }}</span>
                            </div>

                            <a href="{{ route('blog.show', $post->slug) }}"
                                class="group-hover:text-(--color-primary-700) transition-colors">
                                <h2 class="text-xl font-bold text-(--color-primary-950) line-clamp-2 mb-3 leading-tight">
                                    {{ $post->title }}
                                </h2>
                            </a>

                            <p class="text-sm text-(--color-primary-600) line-clamp-3 mb-6 flex-1">
                                {{ $post->excerpt }}
                            </p>

                            <a href="{{ route('blog.show', $post->slug) }}"
                                class="text-xs font-bold text-(--color-primary-700) flex items-center gap-1 group-hover:gap-2 transition-all">
                                Selengkapnya <i class="fi fi-rr-arrow-right mt-0.5"></i>
                            </a>
                        </div>
                    </article>
                @empty
                    <div class="col-span-full py-20 text-center">
                        <div
                            class="w-20 h-20 bg-(--color-primary-100) rounded-full flex items-center justify-center mx-auto mb-4 border border-(--color-primary-200)">
                            <i class="fi fi-rr-box-open text-3xl text-(--color-primary-400)"></i>
                        </div>
                        <h3 class="text-xl font-bold text-(--color-primary-900)">Belum Ada Artikel</h3>
                        <p class="text-(--color-primary-600) max-w-sm mx-auto mt-2 text-sm">
                            Maaf, sepertinya saat ini belum ada konten yang dipublikasikan. Silakan cek kembali nanti.
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
</x-app-layout>