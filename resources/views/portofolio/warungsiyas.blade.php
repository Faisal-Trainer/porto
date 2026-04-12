<x-app-layout>
    <!-- SEO Meta Tags -->
    @section('title', 'Warung Siyas - Studi Evolusi Web 1.0, 2.0, 2.5 & 3.0 | Faisal Yusra')
    @section('meta_description',
        'Portfolio project Warung Siyas oleh Faisal Yusra yang mengeksplorasi implementasi Web
        1.0, Web 2.0, Web 2.5, dan Web 3.0 dalam satu studi komparatif.')
    @section('meta_keywords', 'web app, web 1.0, web 2.0, web 3.0, evolusi web')
    @section('canonical', url()->current())

    <!-- Open Graph -->
    @section('og_title', 'Warung Siyas - Studi Evolusi Web 1.0, 2.0, 2.5 & 3.0b')
    @section('og_description', 'Detail Project Warung Siyass — Jelajahi evolusi lengkap dari website warung siyas')
    @section('og_image', asset('img/logo/warungsiyas.webp'))

    <!-- Twitter Cards -->
    @section('twitter_title', 'WEB APP — Warung Siyas')
    @section('twitter_description', 'Detail Project')
    @section('twitter_image', asset('img/logo/warungsiyas.webp'))

    {{-- HEADER SECTION --}}
    <header id="hero">
        <section class="p-2.5 md:p-5">
            {{-- Badge --}}
            <div class="p-2.5 gap-2.5 reveal delay-5">
                <div
                    class="inline-flex items-center gap-2 bg-(--color-primary-100) border border-(--color-primary-200) text-(--color-primary-700) text-base md:text-xl font-bold px-4 md:px-5 py-1.5 md:py-2.5 rounded-full">
                    <span>✦</span>Portfolio Project
                </div>
                <!-- Main Title -->
                <h1 class="text-2xl md:text-4xl font-bold text-(--color-primary-950) mt-3 leading-tight">
                    WARUNG SIYAS
                </h1>
            </div>

            <div class="p-2.5 space-y-4 max-w-3xl">
                <p class="text-base md:text-lg text-(--color-primary-700) leading-relaxed">
                    Project ini saya buat untuk mengeksplorasi bagaimana satu produk yang sama
                    bisa diimplementasikan dalam berbagai paradigma web.
                </p>
                <div class="space-y-2">
                    <p class="font-bold text-(--color-primary-900) uppercase tracking-wider text-sm">Tujuan Studi:</p>
                    <ul class="space-y-1.5 text-(--color-primary-600)">
                        <li class="flex items-center gap-2">
                            <span class="w-1.5 h-1.5 rounded-full bg-(--color-accent-500)"></span>
                            Memahami perbedaan arsitektur mendasar
                        </li>
                        <li class="flex items-center gap-2">
                            <span class="w-1.5 h-1.5 rounded-full bg-(--color-accent-500)"></span>
                            Membandingkan performa & pengalaman pengguna (UX)
                        </li>
                        <li class="flex items-center gap-2">
                            <span class="w-1.5 h-1.5 rounded-full bg-(--color-accent-500)"></span>
                            Menganalisis trade-off tiap pendekatan teknologi
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Tagline -->
            <p class="text-sm md:text-base text-(--color-accent-600) font-semibold reveal delay-2 p-2.5 mt-4">
                Eksplorasi Warung Siyas dalam empat pendekatan web: <br class="hidden md:block">
                Web 1.0, Web 2.0, Web 2.5, dan Web 3.0
            </p>

            <div class="relative z-10 w-full flex flex-col items-center mt-10">
                <p class="text-center mb-6 md:mb-10 font-['Syne'] text-2xl uppercase tracking-widest text-(--color-primary-400)">
                    Pilih Era Evolusi
                </p>

                <div class="grid grid-cols-1 md:grid-cols-4 gap-6 max-w-6xl w-full">
                    {{-- Web 1.0 --}}
                    <div class="card-web p-6 rounded-3xl" style="--accent:#f59e0b; --shadow:#212121">
                        <div class="inline-flex items-center gap-1 text-xs font-bold uppercase px-3 py-1 rounded-full border border-white/10 bg-white/5 text-(--accent) mb-4">
                            Phase 1
                        </div>
                        <h2 class="font-['Syne'] text-2xl font-extrabold text-(--accent) mb-2">Web 1.0</h2>
                        <p class="text-sm leading-relaxed text-(--accent) opacity-80 mb-6">Statis & Informatif. Era di mana webmaster adalah satu-satunya sumber konten.</p>
                        <a href="#web10" class="text-sm font-bold text-(--accent) hover:underline">Pelajari →</a>
                    </div>

                    {{-- Web 2.0 --}}
                    <div class="card-web p-6 rounded-3xl" style="--accent:#f59e0b; --shadow:#212121">
                        <div class="inline-flex items-center gap-1 text-xs font-bold uppercase px-3 py-1 rounded-full border border-white/10 bg-white/5 text-(--accent) mb-4">
                            Phase 2
                        </div>
                        <h2 class="font-['Syne'] text-2xl font-extrabold text-(--accent) mb-2">Web 2.0</h2>
                        <p class="text-sm leading-relaxed text-(--accent) opacity-80 mb-6">Interaktif & Sosial. User-generated content menjadi penggerak utama internet.</p>
                        <a href="#web20" class="text-sm font-bold text-(--accent) hover:underline">Pelajari →</a>
                    </div>

                    {{-- Web 2.5 --}}
                    <div class="card-web p-6 rounded-3xl" style="--accent:#f59e0b; --shadow:#212121">
                        <div class="inline-flex items-center gap-1 text-xs font-bold uppercase px-3 py-1 rounded-full border border-white/10 bg-white/5 text-(--accent) mb-4">
                            Phase 3
                        </div>
                        <h2 class="font-['Syne'] text-2xl font-extrabold text-(--accent) mb-2">Web 2.5</h2>
                        <p class="text-sm leading-relaxed text-(--accent) opacity-80 mb-6">PWA & Cloud. Transisi cerdas dengan performa tinggi dan UX yang mulus.</p>
                        <a href="#web25" class="text-sm font-bold text-(--accent) hover:underline">Pelajari →</a>
                    </div>

                    {{-- Web 3.0 --}}
                    <div class="card-web p-6 rounded-3xl" style="--accent:#f59e0b; --shadow:#212121; opacity: 0.6">
                        <div class="inline-flex items-center gap-1 text-xs font-bold uppercase px-3 py-1 rounded-full border border-white/10 bg-white/5 text-(--accent) mb-4">
                            Phase 4
                        </div>
                        <h2 class="font-['Syne'] text-2xl font-extrabold text-(--accent) mb-2">Web 3.0</h2>
                        <p class="text-sm leading-relaxed text-(--accent) opacity-80 mb-6">Desentralisasi. Masa depan data yang dimiliki sepenuhnya oleh pengguna.</p>
                        <a href="#web30" class="text-sm font-bold text-(--accent) hover:underline">Visi Masa Depan →</a>
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
                 class="sticky top-12 md:top-20 z-40 py-4 bg-(--color-bg-light)/80 backdrop-blur-md border-b border-(--color-primary-200) -mx-2.5 md:-mx-5 px-5">
                <div class="flex justify-center gap-2 md:gap-4 overflow-x-auto no-scrollbar">
                    <template x-for="(era, index) in [
                        { id: 'web10', label: '1.0', icon: '🌐' },
                        { id: 'web20', label: '2.0', icon: '⚡' },
                        { id: 'web25', label: '2.5', icon: '🚀' },
                        { id: 'web30', label: '3.0', icon: '🔭' }
                    ]" :key="index">
                        <a :href="'#' + era.id" 
                           class="flex items-center gap-1.5 px-4 py-1.5 rounded-full text-sm font-bold transition-all duration-300 whitespace-nowrap"
                           :class="activeEra === era.id 
                                ? 'bg-(--color-primary-600) text-white shadow-md transform scale-105' 
                                : 'bg-(--color-primary-100) text-(--color-primary-700) hover:bg-(--color-primary-200)'">
                            <span x-text="era.icon"></span>
                            <span x-text="era.label"></span>
                        </a>
                    </template>
                </div>
            </div>
        </section>
    </header>

    {{-- WEB 1.0 SECTION --}}
    <section id="web10" class="p-5 md:p-20 bg-(--color-primary-900)">
        <div class="max-w-6xl mx-auto">
            <h2 class="text-(--color-accent-500) font-extrabold mb-10 text-5xl md:text-7xl">
                Web <span class="text-gradient">1.0</span>
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <div>
                    <div class="rounded-2xl bg-white/5 border border-white/10 p-8">
                        <h3 class="text-2xl font-bold text-white mb-4">Fokus: Akses Informasi</h3>
                        <p class="text-white/70 leading-relaxed mb-6">
                            Pada studi kasus Warung Siyas Web 1.0, website berfungsi sebagai menu digital statis. Pelanggan hanya bisa melihat daftar harga dan foto makanan tanpa fitur pemesanan atau interaksi lainnya.
                        </p>
                        <div class="space-y-4">
                            <div class="flex gap-4">
                                <div class="w-10 h-10 rounded-full bg-blue-500/20 flex items-center justify-center shrink-0">✓</div>
                                <p class="text-white/80 text-sm">Keunggulan: Sangat ringan & Cepat diakses di koneksi lambat.</p>
                            </div>
                            <div class="flex gap-4">
                                <div class="w-10 h-10 rounded-full bg-red-500/20 flex items-center justify-center shrink-0">✗</div>
                                <p class="text-white/80 text-sm">Kelemahan: Tidak bisa update data tanpa coding ulang.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="relative group">
                    <div class="absolute -inset-1 bg-linear-to-r from-amber-500 to-orange-500 rounded-2xl blur opacity-25 group-hover:opacity-50 transition duration-1000"></div>
                    <img src="{{ asset('img/porto1.png') }}" alt="Warung Siyas Web 1.0" class="relative rounded-2xl w-full h-auto object-cover border border-white/10 shadow-2xl">
                    <div class="mt-4 flex justify-between items-center px-2">
                        <span class="text-amber-500 font-bold uppercase text-xs tracking-widest">Preview Statis</span>
                        <a href="https://webporto-1-0.vercel.app" target="_blank" class="text-white/60 hover:text-white text-sm">Lihat Demo Live →</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- WEB 2.0 SECTION --}}
    <section id="web20" class="p-5 md:p-20 bg-(--color-accent-500)">
        <div class="max-w-6xl mx-auto">
            <h2 class="text-(--color-primary-900) font-extrabold mb-10 text-5xl md:text-7xl">
                Web <span class="text-gradient">2.0</span>
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <div class="order-2 md:order-1 relative group">
                    <div class="absolute -inset-1 bg-white rounded-2xl blur opacity-25 group-hover:opacity-50 transition duration-1000"></div>
                    <img src="{{ asset('img/porto1.png') }}" alt="Warung Siyas Web 2.0" class="relative rounded-2xl w-full h-auto object-cover border border-black/10 shadow-2xl">
                    <div class="mt-4 flex justify-between items-center px-2">
                        <span class="text-(--color-primary-900) font-bold uppercase text-xs tracking-widest">Preview Interaktif</span>
                        <span class="text-(--color-primary-800) text-sm italic">User Generated Content</span>
                    </div>
                </div>
                <div class="order-1 md:order-2">
                    <div class="rounded-2xl bg-(--color-primary-900)/10 border border-(--color-primary-900)/20 p-8 text-(--color-primary-950)">
                        <h3 class="text-2xl font-bold mb-4 uppercase tracking-tighter">Fokus: Interaksi & Sosial</h3>
                        <p class="opacity-80 leading-relaxed mb-6">
                            Di era 2.0, Warung Siyas menjadi platform di mana pelanggan bisa login, memberikan rating, serta menulis testimoni. Pengelola bisa mengupdate menu lewat dashboard admin (CMS).
                        </p>
                        <div class="grid grid-cols-2 gap-4">
                            <div class="p-4 rounded-xl bg-white/40 border border-white/60">
                                <span class="block text-xl mb-1">💬</span>
                                <span class="text-xs font-bold uppercase">Comments</span>
                            </div>
                            <div class="p-4 rounded-xl bg-white/40 border border-white/60">
                                <span class="block text-xl mb-1">🔐</span>
                                <span class="text-xs font-bold uppercase">User Accounts</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- WEB 2.5 SECTION --}}
    <section id="web25" class="p-5 md:p-20 bg-(--color-primary-900)">
        <div class="max-w-6xl mx-auto">
            <h2 class="text-(--color-accent-500) font-extrabold mb-10 text-5xl md:text-7xl text-center">
                Web <span class="text-gradient">2.5</span>
            </h2>
            <div class="bg-white/5 border border-white/10 rounded-3xl p-8 md:p-12 mb-10 text-center max-w-4xl mx-auto">
                <p class="text-xl text-white/90 leading-relaxed italic mb-8">
                    "Web 2.5 adalah puncak dari pengalaman pengguna modern sebelum benar-benar masuk ke dunia desentralisasi."
                </p>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 text-left">
                    <div class="p-6 rounded-2xl bg-white/10 border border-white/10 hover:bg-white/20 transition duration-300">
                        <h4 class="text-amber-500 font-bold mb-2">⚡ PWA Ready</h4>
                        <p class="text-white/60 text-sm">Bisa diinstall di HP seperti aplikasi native dengan performa instan.</p>
                    </div>
                    <div class="p-6 rounded-2xl bg-white/10 border border-white/10 hover:bg-white/20 transition duration-300">
                        <h4 class="text-amber-500 font-bold mb-2">🤖 Smart Logic</h4>
                        <p class="text-white/60 text-sm">Rekomendasi menu berbasis preferensi dan promo otomatis.</p>
                    </div>
                    <div class="p-6 rounded-2xl bg-white/10 border border-white/10 hover:bg-white/20 transition duration-300">
                        <h4 class="text-amber-500 font-bold mb-2">☁️ Serverless</h4>
                        <p class="text-white/60 text-sm">Infrastruktur cloud yang menjamin website tidak pernah down.</p>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <a href="{{ route('contact.create') }}" class="inline-block bg-(--color-accent-500) text-(--color-primary-900) font-bold px-12 py-4 rounded-full hover:scale-105 transition duration-300">
                    Diskusi Solusi Hybrid →
                </a>
            </div>
        </div>
    </section>

    {{-- WEB 3.0 SECTION --}}
    <section id="web30" class="p-5 md:p-20 bg-black overflow-hidden relative">
        <div class="absolute top-0 left-0 w-full h-full opacity-20 pointer-events-none">
            <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[800px] bg-amber-500/20 rounded-full blur-[120px]"></div>
        </div>
        <div class="max-w-6xl mx-auto relative z-10 text-center">
            <h2 class="text-white font-extrabold mb-6 text-5xl md:text-8xl opacity-40">WEB 3.0</h2>
            <div class="inline-flex items-center gap-2 px-6 py-3 rounded-full bg-white/5 border border-white/10 text-amber-500 font-bold mb-10">
                🔭 THE FUTURE OF WARUNG SIYAS
            </div>
            <p class="text-white/60 text-xl max-w-2xl mx-auto mb-12">
                Bayangkan sistem loyalty berbasis Token/NFT, pembayaran kripto tanpa biaya admin, dan tata kelola stok yang transparan di blockchain.
            </p>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 opacity-50 grayscale hover:grayscale-0 transition duration-700">
                <div class="p-4 border border-white/10 rounded-xl">Solana Pay</div>
                <div class="p-4 border border-white/10 rounded-xl">IPFS Assets</div>
                <div class="p-4 border border-white/10 rounded-xl">Smart Contracts</div>
                <div class="p-4 border border-white/10 rounded-xl">DAO Voting</div>
            </div>
        </div>
    </section>

    {{-- ═══════════════════════════════════════════
         PROJECT NAVIGATION FOOTER (STATIC)
    ═══════════════════════════════════════════ --}}
    <section class="py-12 px-5 md:px-20 bg-white border-t border-(--color-primary-100)">
        <div class="max-w-6xl mx-auto">
            <h3 class="text-xl font-bold text-(--color-primary-950) mb-8 text-center uppercase tracking-wider">
                Lanjut Jelajah Project
            </h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                {{-- Previous Project: Index --}}
                <a href="{{ route('portfolio') }}" class="group block p-6 rounded-2xl bg-(--color-primary-50) border border-(--color-primary-100) hover:border-(--color-primary-300) transition-all duration-300">
                    <div class="flex items-center gap-4">
                        <div class="w-16 h-16 rounded-xl bg-(--color-primary-100) flex items-center justify-center shrink-0">
                            <i class="fi fi-sr-apps text-2xl text-(--color-primary-600)"></i>
                        </div>
                        <div>
                            <span class="text-xs font-bold text-(--color-primary-400) uppercase tracking-widest">Navigation</span>
                            <h4 class="text-lg font-bold text-(--color-primary-900) group-hover:text-(--color-primary-600)">Semua Portofolio</h4>
                        </div>
                    </div>
                </a>

                {{-- Next Project: ANK Parfume --}}
                <a href="{{ route('ankparfume') }}" class="group block p-6 rounded-2xl bg-(--color-primary-50) border border-(--color-primary-100) hover:border-(--color-primary-300) transition-all duration-300 md:text-right">
                    <div class="flex items-center md:flex-row-reverse gap-4">
                        <div class="w-20 h-20 rounded-xl overflow-hidden shrink-0 border border-(--color-primary-200)">
                            <img src="{{ asset('img/ank-parfume.webp') }}" alt="ANK Parfume" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        </div>
                        <div>
                            <span class="text-xs font-bold text-(--color-primary-400) uppercase tracking-widest">Berikutnya</span>
                            <h4 class="text-lg font-bold text-(--color-primary-900) group-hover:text-(--color-primary-600)">ANK Parfume</h4>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>

    {{-- CTA SECTION --}}
    <section class="py-20 px-5 md:px-20 bg-(--color-primary-950) text-center relative overflow-hidden">
        <div class="max-w-4xl mx-auto relative z-10">
            <h2 class="text-3xl md:text-5xl font-bold text-white mb-6">Mulai Evolusi Digital Bisnis Anda</h2>
            <p class="text-white/60 text-lg mb-10 max-w-2xl mx-auto italic">
                Apakah bisnis Anda masih di fase 1.0 yang pasif? Mari bertransformasi menjadi platform interaktif yang cerdas.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('contact.create') }}" class="bg-amber-500 text-primary-900 font-bold px-10 py-4 rounded-xl hover:bg-amber-600 transition duration-300 shadow-lg shadow-amber-500/20">
                    Konsultasi Gratis Sekarang →
                </a>
                <a href="{{ route('portfolio') }}" class="border border-white/20 text-white font-bold px-10 py-4 rounded-xl hover:bg-white/10 transition duration-300">
                    Lihat Project Lain
                </a>
            </div>
        </div>
    </section>

    {{-- Scroll reveal JS --}}
    <script>
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(e => {
                if (e.isIntersecting) e.target.classList.add('visible');
            });
        }, { threshold: 0.1 });
        document.querySelectorAll('.reveal').forEach(el => observer.observe(el));
    </script>
</x-app-layout>
