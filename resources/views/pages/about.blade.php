<x-app-layout>

    {{-- SEO --}}
    @section('title', 'Tentang Faisal Yusra | Web Developer & Konsultan Digital Bukittinggi')
    @section('meta_description',
        'Pelajari profil Faisal Yusra, Web Developer spesialis Laravel dan Konsultan Digital di
        Bukittinggi. Berpengalaman dalam memberdayakan UMKM dan talent muda melalui solusi teknologi.')
    @section('meta_keywords',
        'tentang Faisal Yusra, web developer bukittinggi, programmer laravel bukittinggi,
        konsultan it bukittinggi, profil developer sumatera barat')
    @section('canonical', url()->current())
    <meta name="author" content="Muhammad Faisal Alyusra">
    <meta name="robots" content="index, follow">

    {{-- OPEN GRAPH --}}
    <meta property="og:type" content="website">
    @section('og_title', 'Tentang Faisal Yusra | Web Developer & Konsultan Digital Bukittinggi')
    @section('og_description',
        'Profil profesional Faisal Yusra: Web Developer dan Konsultan Digital berpengalaman di
        Bukittinggi, Sumatera Barat.')
    @section('og_image', asset('img/profile.webp'))
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:locale" content="id_ID">
    <meta property="og:site_name" content="Faisal Yusra">

    {{-- Twitter / X Card --}}
    <meta name="twitter:card" content="summary_large_image">
    @section('twitter_title', 'Tentang Faisal Yusra | Web Developer Bukittinggi')
    @section('twitter_description', 'Profil Web Developer dan Konsultan Digital spesialis UMKM di Bukittinggi.')
    @section('twitter_image', asset('img/profile.webp'))

    {{-- ===================== ABOUT HERO ===================== --}}
    <header class="py-16 md:py-24 px-5">
        <div class="max-w-6xl mx-auto flex flex-col md:flex-row items-center gap-12">
            {{-- Foto Profil --}}
            <div class="w-48 h-48 md:w-64 md:h-64 shrink-0 reveal-left delay-2">
                <div class="relative group">
                    {{-- Decorative frame --}}
                    <div class="absolute -inset-2 bg-linear-to-br from-(--color-primary-500) to-(--color-accent-500) rounded-3xl blur opacity-30 group-hover:opacity-60 transition duration-500"></div>
                    <div class="relative w-full h-full rounded-2xl overflow-hidden border-4 border-white dark:border-gray-800 shadow-2xl">
                        <img src="{{ asset('img/profile.webp') }}" alt="Faisal Yusra" class="w-full h-full object-cover">
                    </div>
                    {{-- Badge --}}
                    <div class="absolute -bottom-4 -right-4 bg-white dark:bg-gray-800 p-3 rounded-xl shadow-lg border border-gray-100 dark:border-gray-700 reveal delay-5">
                        <span class="text-2xl">⚡</span>
                    </div>
                </div>
            </div>

            {{-- Intro Text --}}
            <div class="flex-1 text-center md:text-left">
                <span class="text-xs font-bold uppercase tracking-widest text-(--color-primary-600) mb-3 block reveal">PROFIL PROFESIONAL</span>
                <h1 class="text-4xl md:text-6xl font-black text-(--color-primary-950) mb-6 reveal delay-1">
                    Faisal <span class="text-gradient">Yusra</span>
                </h1>
                <p class="text-lg md:text-xl text-(--color-primary-700) leading-relaxed mb-8 reveal delay-2 italic">
                    "Web Developer yang berdedikasi membangun solusi digital untuk UMKM dan talenta masa depan."
                </p>
                <div class="flex flex-wrap gap-4 justify-center md:justify-start reveal delay-3">
                    <x-button-primary-purple
                        href="https://www.linkedin.com/posts/faisalyusra41_cv-muhammad-faishal-siap-untuk-peluang-activity-7270322339672666113-suBA?utm_source=share&utm_medium=member_desktop&rcm=ACoAAEuuADIBiIjPHgeHPI-tKNJ9KJeSmq8hDRQ"
                        target="_blank" rel="noopener noreferrer">
                        Download CV
                    </x-button-primary-purple>
                    <x-button-secondary-purple href="{{ route('portfolio') }}">
                        Lihat Portofolio →
                    </x-button-secondary-purple>
                </div>
            </div>
        </div>
    </header>

    {{-- ===================== MY JOURNEY (TIMELINE) ===================== --}}
    <section class="py-20 px-5 bg-white border-y border-gray-100 overflow-hidden">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-16 underline decoration-(--color-accent-500) reveal">
                My Journey
            </h2>

            <div class="relative">
                {{-- Vertical Line --}}
                <div class="absolute left-0 md:left-1/2 md:-translate-x-px top-0 bottom-0 w-1 bg-gray-100 rounded-full"></div>

                {{-- Timeline Items --}}
                <div class="space-y-12">
                    {{-- Item 1 --}}
                    <div class="relative flex flex-col md:flex-row items-center gap-8 reveal">
                        <div class="md:w-1/2 md:text-right">
                            <h3 class="text-xl font-bold text-(--color-primary-900)">Awal Perjalanan</h3>
                            <p class="text-sm text-gray-600 mt-2 leading-relaxed">
                                Dimulai dari ketertarikan pada bagaimana teknologi dapat menyederhanakan proses bisnis yang kompleks. Saya mengawali dengan mempelajari dasar-dasar pengembangan web.
                            </p>
                        </div>
                        <div class="absolute left-0 md:left-1/2 -translate-x-1/2 w-4 h-4 rounded-full bg-(--color-primary-600) border-4 border-white shadow-md z-10"></div>
                        <div class="md:w-1/2"></div>
                    </div>

                    {{-- Item 2 --}}
                    <div class="relative flex flex-col md:flex-row-reverse items-center gap-8 reveal delay-2">
                        <div class="md:w-1/2">
                            <h3 class="text-xl font-bold text-(--color-primary-900)">Eksplorasi & Strategi</h3>
                            <p class="text-sm text-gray-600 mt-2 leading-relaxed">
                                Membentuk pola pikir visioner melalui berbagai proyek yang menuntut daya juang dan konsistensi. Saya mulai fokus pada Laravel sebagai framework utama.
                            </p>
                        </div>
                        <div class="absolute left-0 md:left-1/2 -translate-x-1/2 w-4 h-4 rounded-full bg-(--color-accent-500) border-4 border-white shadow-md z-10"></div>
                        <div class="md:w-1/2"></div>
                    </div>

                    {{-- Item 3 --}}
                    <div class="relative flex flex-col md:flex-row items-center gap-8 reveal delay-4">
                        <div class="md:w-1/2 md:text-right">
                            <h3 class="text-xl font-bold text-(--color-primary-900)">Pemberdayaan Digital</h3>
                            <p class="text-sm text-gray-600 mt-2 leading-relaxed">
                                Saat ini saya berfokus pada dukungan IT dan konsultasi untuk UMKM. Berkomitmen memberikan dampak nyata melalui baris kode yang saya tulis.
                            </p>
                        </div>
                        <div class="absolute left-0 md:left-1/2 -translate-x-1/2 w-4 h-4 rounded-full bg-(--color-primary-600) border-4 border-white shadow-md z-10"></div>
                        <div class="md:w-1/2"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- ===================== VALUES ===================== --}}
    <section class="relative py-20 px-5 bg-(--color-primary-950) overflow-hidden">
        {{-- Decorative Orbs --}}
        <div class="absolute top-0 left-0 w-full h-full opacity-30 pointer-events-none">
            <div class="absolute top-0 left-0 w-[500px] h-[500px] bg-(--orb-purple)"></div>
            <div class="absolute bottom-0 right-0 w-[500px] h-[500px] bg-(--orb-gold)"></div>
        </div>

        <div class="max-w-4xl mx-auto relative z-10 text-center">
            <span class="text-xs font-bold uppercase tracking-widest text-white/40 block mb-4 reveal">FILOSOFI KERJA</span>
            <h2 class="text-3xl md:text-5xl font-black text-white mb-12 reveal delay-1">
                Nilai yang Saya <span class="text-gradient">Pegang</span>
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-left">
                <div class="p-8 rounded-3xl bg-white/5 border border-white/10 hover:bg-white/10 transition-colors reveal delay-2">
                    <div class="text-3xl mb-4">🎯</div>
                    <h3 class="font-bold text-white mb-3 underline decoration-(--color-accent-500) decoration-2">Relevansi</h3>
                    <p class="text-white/60 text-sm leading-relaxed">
                        Membangun solusi yang benar-benar dibutuhkan, bukan sekadar mengikuti tren tanpa tujuan bisnis yang jelas.
                    </p>
                </div>

                <div class="p-8 rounded-3xl bg-white/5 border border-white/10 hover:bg-white/10 transition-colors reveal delay-3">
                    <div class="text-3xl mb-4">🤝</div>
                    <h3 class="font-bold text-white mb-3 underline decoration-(--color-accent-500) decoration-2">Kejujuran</h3>
                    <p class="text-white/60 text-sm leading-relaxed">
                        Transparansi adalah fondasi. Saya lebih memilih diskusi terbuka daripada janji manis yang tidak realistis.
                    </p>
                </div>

                <div class="p-8 rounded-3xl bg-white/5 border border-white/10 hover:bg-white/10 transition-colors reveal delay-4">
                    <div class="text-3xl mb-4">📈</div>
                    <h3 class="font-bold text-white mb-3 underline decoration-(--color-accent-500) decoration-2">Keberlanjutan</h3>
                    <p class="text-white/60 text-sm leading-relaxed">
                        Kode yang saya tulis harus mudah dikelola dan dapat tumbuh seiring dengan perkembangan skala bisnis Anda.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- ===================== CTA ===================== --}}
    <section class="py-24 px-5 text-center bg-gray-50">
        <div class="max-w-3xl mx-auto reveal">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-950 mb-6 italic">
                "Digital Transformation starts with a simple conversation."
            </h2>
            <p class="text-lg text-gray-600 mb-10 leading-relaxed">
                Punya ide menarik atau sedang menghadapi tantangan teknologi? <br class="hidden md:block">
                Mari berdiskusi bagaimana saya bisa membantu perjalanan digital Anda.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <x-button-primary-purple href="{{ route('contact.create') }}">
                    Mulai Berdiskusi Sekarang
                </x-button-primary-purple>
            </div>
        </div>
    </section>

    {{-- Scroll Reveal JS --}}
    <script>
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(e => {
                if (e.isIntersecting) e.target.classList.add('visible');
            });
        }, { threshold: 0.1 });
        document.querySelectorAll('.reveal, .reveal-left, .reveal-right').forEach(el => observer.observe(el));
    </script>

</x-app-layout>
