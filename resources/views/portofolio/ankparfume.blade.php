<x-app-layout>
    <!-- SEO Meta Tags -->
    @section('title', 'ANK Parfume - Studi Evolusi Web 1.0, 2.0, 2.5 & 3.0 | Faisal Yusra')
    @section('meta_description', 'Detail studi kasus ANK Parfume yang mengeksplorasi transisi dari model bisnis tradisional ke platform digital modern.')
    @section('meta_keywords', 'parfume, web evolution, digital transformation, bukittinggi')
    @section('canonical', url()->current())

    <!-- Open Graph -->
    @section('og_title', 'ANK Parfume - Evolusi Digital Brand Lokal')
    @section('og_description', 'Bagaimana ANK Parfume bertransformasi lewat paradigma Web 1.0 hingga 3.0.')
    @section('og_image', asset('img/logo/ankprfume.webp'))

    {{-- HEADER SECTION --}}
    <header id="hero">
        <section class="p-2.5 md:p-5">
            {{-- Badge --}}
            <div class="p-2.5 gap-2.5 reveal delay-5">
                <div class="inline-flex items-center gap-2 bg-(--color-primary-100) border border-(--color-primary-200) text-(--color-primary-700) text-base md:text-xl font-bold px-4 md:px-5 py-1.5 md:py-2.5 rounded-full">
                    <span>✦</span>Portfolio Project
                </div>
                <!-- Main Title -->
                <h1 class="text-3xl md:text-5xl font-bold text-(--color-primary-950) mt-3">
                    ANK PARFUME
                </h1>
            </div>

            <div class="p-2.5 max-w-2xl text-(--color-primary-700) space-y-4">
                <p class="text-base md:text-lg leading-relaxed">
                    Studi ini mengamati bagaimana sebuah brand retail lokal seperti <strong>ANK Parfume</strong> dapat memanfaatkan teknologi web untuk memperluas jangkauan pasar dan meningkatkan efisiensi operasional.
                </p>
            </div>

            <!-- Tagline -->
            <p class="text-sm md:text-base text-(--color-accent-600) font-bold reveal delay-2 p-2.5">
                Eksplorasi Strategi ANK Parfume dalam: <br>
                Web 1.0 (Digital Menu), Web 2.0 (Social commerce), dan Web 2.5 (PWA)
            </p>

            <div class="relative z-10 w-full flex flex-col items-center mt-8">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-5xl w-full px-5">
                    {{-- Web 1.0 --}}
                    <div class="card-web p-6 rounded-3xl" style="--accent:#f59e0b; --shadow:#2d2d2d">
                        <div class="w-10 h-10 rounded-xl bg-white/5 border border-white/10 flex items-center justify-center text-xl mb-4">🌐</div>
                        <h2 class="font-['Syne'] text-xl font-black text-(--accent) mb-2">Web 1.0</h2>
                        <p class="text-xs text-(--accent) opacity-70 mb-4">Katalog wangi statis yang fokus pada kejelasan informasi aroma.</p>
                        <a href="#web10" class="text-xs font-bold text-(--accent) group">Selengkapnya <span class="group-hover:pl-2 transition-all">→</span></a>
                    </div>

                    {{-- Web 2.0 --}}
                    <div class="card-web p-6 rounded-3xl" style="--accent:#f59e0b; --shadow:#2d2d2d">
                        <div class="w-10 h-10 rounded-xl bg-white/5 border border-white/10 flex items-center justify-center text-xl mb-4">⚡</div>
                        <h2 class="font-['Syne'] text-xl font-black text-(--accent) mb-2">Web 2.0</h2>
                        <p class="text-xs text-(--accent) opacity-70 mb-4">Sistem pemesanan online dengan fitur review dan profil pelanggan.</p>
                        <a href="#web20" class="text-xs font-bold text-(--accent) group">Selengkapnya <span class="group-hover:pl-2 transition-all">→</span></a>
                    </div>

                    {{-- Web 2.5 --}}
                    <div class="card-web p-6 rounded-3xl" style="--accent:#f59e0b; --shadow:#2d2d2d">
                        <div class="w-10 h-10 rounded-xl bg-white/5 border border-white/10 flex items-center justify-center text-xl mb-4">🚀</div>
                        <h2 class="font-['Syne'] text-xl font-black text-(--accent) mb-2">Web 2.5</h2>
                        <p class="text-xs text-(--accent) opacity-70 mb-4">Pengalaman belanja secepat aplikasi mobile lewat browser (PWA).</p>
                        <a href="#web25" class="text-xs font-bold text-(--accent) group">Selengkapnya <span class="group-hover:pl-2 transition-all">→</span></a>
                    </div>
                </div>
            </div>

            {{-- Sticky Sub-navigation for Eras --}}
            <div x-data="{ 
                     activeEra: 'web10',
                     init() {
                         window.addEventListener('scroll', () => {
                             const eras = ['web10', 'web20', 'web25', 'web30'];
                             for (const era of eras) {
                                 const el = document.getElementById(era);
                                 if (el) {
                                     const rect = el.getBoundingClientRect();
                                     if (rect.top <= 120 && rect.bottom >= 120) {
                                         this.activeEra = era;
                                     }
                                 }
                             }
                         });
                     }
                 }" 
                 class="sticky top-12 md:top-20 z-40 py-4 bg-(--color-bg-light)/90 backdrop-blur-md border-b border-(--color-primary-200) -mx-2.5 md:-mx-5 px-5">
                <div class="flex justify-center gap-2 md:gap-4 overflow-x-auto no-scrollbar">
                    <template x-for="(era, index) in [
                        { id: 'web10', label: '1.0', icon: '🌐' },
                        { id: 'web20', label: '2.0', icon: '⚡' },
                        { id: 'web25', label: '2.5', icon: '🚀' },
                        { id: 'web30', label: '3.0', icon: '🔭' }
                    ]" :key="index">
                        <a :href="'#' + era.id" 
                           class="flex items-center gap-1.5 px-4 py-1.5 rounded-full text-sm font-bold transition-all duration-300 transform active:scale-95"
                           :class="activeEra === era.id 
                                ? 'bg-(--color-primary-600) text-white shadow-lg' 
                                : 'bg-(--color-primary-100) text-(--color-primary-700) hover:bg-(--color-primary-200)'">
                            <span x-text="era.icon"></span>
                            <span x-text="era.label"></span>
                        </a>
                    </template>
                </div>
            </div>
        </section>
    </header>

    {{-- ERA SECTIONS (CLEANER IMPLEMENTATION) --}}
    <section id="web10" class="py-20 px-5 bg-(--color-primary-900) text-white">
        <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-16 items-center">
            <div class="reveal">
                <h2 class="text-6xl md:text-8xl font-black text-amber-500/20 absolute -mt-12 select-none">1.0</h2>
                <h3 class="text-4xl font-bold mb-6 text-amber-500">Traditional Digital Catalog</h3>
                <p class="text-xl text-white/70 mb-8 leading-relaxed">
                    Menampilkan daftar ketersediaan wangi parfume secara statis. Mirip seperti papan pengumuman digital yang tidak bisa dipesan langsung.
                </p>
                <div class="p-6 rounded-2xl bg-white/5 border border-white/10">
                    <h4 class="font-bold text-amber-500 mb-2 uppercase text-xs tracking-widest">Stack Teknologi</h4>
                    <p class="text-white/40 text-sm">HTML4, Tables for layout, Static Images</p>
                </div>
            </div>
            <div class="reveal delay-2 translate-y-8">
                <div class="rounded-3xl overflow-hidden border border-white/20 shadow-2xl">
                    <img src="{{ asset('img/ank-parfume.webp') }}" alt="ANK Parfume Web 1.0" class="w-full h-auto">
                </div>
            </div>
        </div>
    </section>

    <section id="web20" class="py-20 px-5 bg-amber-500 text-primary-950">
        <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-16 items-center">
            <div class="order-2 md:order-1 reveal translate-y-8">
                <div class="rounded-3xl overflow-hidden border border-black/10 shadow-2xl scale-105">
                    <img src="{{ asset('img/ank-parfume.webp') }}" alt="ANK Parfume Web 2.0" class="w-full h-auto">
                </div>
            </div>
            <div class="order-1 md:order-2 reveal">
                <h2 class="text-6xl md:text-8xl font-black text-black/10 absolute -mt-12 select-none">2.0</h2>
                <h3 class="text-4xl font-bold mb-6">Interactive Shopping</h3>
                <p class="text-xl text-black/70 mb-8 leading-relaxed">
                    Implementasi keranjang belanja, integrasi WhatsApp, dan sistem login untuk melihat riwayat pembelian pelanggan setia ANK Parfume.
                </p>
                <div class="flex gap-4">
                    <div class="px-5 py-3 rounded-xl bg-black/5 border border-black/10 font-bold">🛒 Cart System</div>
                    <div class="px-5 py-3 rounded-xl bg-black/5 border border-black/10 font-bold">💬 WA Integration</div>
                </div>
            </div>
        </div>
    </section>

    <section id="web25" class="py-24 px-5 bg-(--color-primary-950) text-white text-center">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-amber-500 font-bold uppercase tracking-[0.3em] mb-4">Phase 2.5</h2>
            <h3 class="text-4xl md:text-6xl font-black mb-10">Modern Performance</h3>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="p-8 rounded-3xl bg-white/5 border border-white/10 reveal">
                    <span class="text-4xl block mb-4">📱</span>
                    <h4 class="font-bold text-lg mb-2">Native Feel</h4>
                    <p class="text-white/50 text-sm">PWA yang bisa diakses langsung dari home screen tanpa download App Store.</p>
                </div>
                <div class="p-8 rounded-3xl bg-white/5 border border-white/10 reveal delay-2">
                    <span class="text-4xl block mb-4">🚀</span>
                    <h4 class="font-bold text-lg mb-2">Zero Latency</h4>
                    <p class="text-white/50 text-sm">Optimasi aset gambar parfume dengan format WebP untuk loading < 1 detik.</p>
                </div>
                <div class="p-8 rounded-3xl bg-white/5 border border-white/10 reveal delay-3">
                    <span class="text-4xl block mb-4">🔒</span>
                    <h4 class="font-bold text-lg mb-2">Privacy Focus</h4>
                    <p class="text-white/50 text-sm">Keamanan data pelanggan yang terenkripsi dan sesuai standar modern.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- WEB 3.0 --}}
    <section id="web30" class="py-24 px-5 bg-white text-center border-b border-gray-100">
        <div class="max-w-2xl mx-auto reveal">
            <span class="text-5xl mb-6 block">🔭</span>
            <h3 class="text-3xl font-black mb-4">ANK Parfume 3.0 Visi</h3>
            <p class="text-gray-500 leading-relaxed mb-10">
                Membangun ekosistem loyalitas berbasis NFT: "Scent Token" yang bisa dikumpulkan oleh pelanggan untuk ditukar dengan parfume fisik eksklusif.
            </p>
            <div class="h-1 w-20 bg-amber-500 mx-auto"></div>
        </div>
    </section>

    {{-- ═══════════════════════════════════════════
         PROJECT NAVIGATION FOOTER (STATIC)
    ═══════════════════════════════════════════ --}}
    <section class="py-12 px-5 md:px-20 bg-gray-50">
        <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-8">
            <a href="{{ route('warungsiyas') }}" class="group p-8 rounded-2xl bg-white border border-gray-200 hover:border-amber-500 transition-all shadow-sm flex items-center gap-6">
                <div class="w-16 h-16 rounded-xl overflow-hidden shrink-0 grayscale group-hover:grayscale-0 transition duration-500">
                    <img src="{{ asset('img/logo/warungsiyas.webp') }}" class="w-full h-full object-cover">
                </div>
                <div>
                    <span class="text-xs font-bold text-gray-400 uppercase tracking-widest">Sebelumnya</span>
                    <h4 class="text-lg font-bold text-gray-900">Warung Siyas</h4>
                </div>
            </a>
            <a href="{{ route('portfolio') }}" class="group p-8 rounded-2xl bg-white border border-gray-200 hover:border-amber-500 transition-all shadow-sm flex md:flex-row-reverse items-center gap-6 md:text-right">
                <div class="w-16 h-16 rounded-xl bg-gray-100 flex items-center justify-center shrink-0">
                    <i class="fi fi-sr-apps text-2xl text-gray-400 group-hover:text-amber-500 transition-colors"></i>
                </div>
                <div>
                    <span class="text-xs font-bold text-gray-400 uppercase tracking-widest">Aksi</span>
                    <h4 class="text-lg font-bold text-gray-900">Kembali ke Portfolio</h4>
                </div>
            </a>
        </div>
    </section>

    {{-- CTA --}}
    <section class="py-20 px-5 bg-(--color-primary-950) text-center relative">
        <div class="relative z-10">
            <h2 class="text-3xl md:text-5xl font-black text-white mb-4">Siap untuk Transformasi Digital?</h2>
            <p class="text-white/50 text-lg mb-10">Bangun sistem yang tepat untuk bisnis Anda, sekarang.</p>
            <a href="{{ route('contact.create') }}" class="inline-block bg-amber-500 text-primary-900 font-black px-12 py-5 rounded-2xl hover:bg-amber-600 transition shadow-xl shadow-amber-500/10">
                Konsultasikan Project Anda →
            </a>
        </div>
    </section>

    <script>
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(e => {
                if (e.isIntersecting) e.target.classList.add('visible');
            });
        }, { threshold: 0.1 });
        document.querySelectorAll('.reveal').forEach(el => observer.observe(el));
    </script>
</x-app-layout>
