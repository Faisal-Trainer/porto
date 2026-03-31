<x-app-layout>
    <!-- SEO Meta Tags -->
    @section('title', 'ANK Parfume - Studi Evolusi Web 1.0, 2.0, 2.5 & 3.0 | Faisal Yusra')
    @section('meta_description',
        'Portfolio project ANK Parfume oleh Faisal Yusra yang mengeksplorasi implementasi Web
        1.0, Web 2.0, Web 2.5, dan Web 3.0 dalam satu studi komparatif.')
    @section('meta_keywords', 'web app, web 1.0, web 2.0, web 3.0, evolusi web')
    @section('canonical', url()->current())

    <!-- Open Graph -->
    @section('og_title', 'ANK Parfume - Studi Evolusi Web 1.0, 2.0, 2.5 & 3.0b')
    @section('og_description', 'Detail Project ANK Parfumes — Jelajahi evolusi lengkap dari website ANK Parfume')
    @section('og_image', asset('img/logo/ankprfume.webp'))

    <!-- Twitter Cards -->
    @section('twitter_title', 'WEB APP — ANK Parfume')
    @section('twitter_description', 'Detail Project')
    @section('twitter_image', asset('img/logo/ankprfume.webp'))

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
                <h1 class="text-2xl md:text-4xl font-bold text-(--color-primary-950)">
                    <span>ANK Parfume</span>
                </h1>
            </div>


            <!-- Tagline -->
            <p class="text-sm md:text-base text-(--color-accent-500) reveal delay-2 p-2.5">
                Eksplorasi ANK Parfume dalam tiga pendekatan web: <br>
                Web 1.0, Web 2.0, dan Web 2.5
            </p>

            <div class="relative z-10 w-full flex flex-col items-center ">

                <p class="text-center mb-4 md:mb-10 font-['Syne'] text-2xl uppercase text-(--color-primary-600)">
                    Evolusi Web
                </p>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-225 w-full">

                    <!-- Card 1 -->
                    <div class="card-web p-2 md:p-5 rounded-2xl md:rounded-3xl"
                        style="--accent:#f59e0b; --shadow:#212121">
                        <div
                            class="inline-flex items-center gap-1 text-sm font-bold uppercase px-2.5 py-1 rounded-full border border-white/10 bg-white/5 text-(--accent) mb-4 font-['Syne']">
                            <span class="w-1.5 h-1.5 rounded-full bg-(--accent)"></span>
                            Era Pertama
                        </div>

                        <div
                            class="w-12 h-12 rounded-xl bg-white/5 border border-white/10 flex items-center justify-center text-2xl mb-4 shadow-(--shadow)">
                            🌐
                        </div>

                        <h2 class="font-['Syne'] text-xl font-extrabold text-(--accent) mb-2">
                            Web 1.0
                        </h2>

                        <p class="text-base leading-[1.65] text-(--accent) font-light mb-5">
                            Website statis berbasis HTML murni dengan konten satu arah baca saja, tak bisa
                            berinteraksi.
                        </p>

                        <div class="h-px bg-linear-to-r from-transparent via-white/10 to-transparent mb-4"></div>

                        <a href="#web10"
                            class="inline-flex items-center gap-1 text-[0.78rem] font-semibold font-['Syne'] text-(--accent) transition-all hover:gap-3">
                            Pelajari lebih lanjut
                            <span class="transition-transform group-hover:translate-x-1">→</span>
                        </a>
                    </div>

                    <!-- Card 2 -->
                    <div class="card-web p-2 md:p-5 rounded-2xl md:rounded-3xl"
                        style="--accent:#f59e0b; --shadow:#212121">

                        <div
                            class="inline-flex items-center gap-1 text-sm font-bold uppercase px-2.5 py-1 rounded-full border border-white/10 bg-white/5 text-(--accent) mb-4 font-['Syne']">
                            <span class="w-1.5 h-1.5 rounded-full bg-(--accent)"></span>
                            Era Sosial
                        </div>

                        <div
                            class="w-12 h-12 rounded-xl bg-white/5 border border-white/10 flex items-center justify-center text-2xl mb-4 shadow-(--shadow)">
                            ⚡
                        </div>

                        <h2 class="font-['Syne'] text-xl font-extrabold text-(--accent) mb-2">
                            Web 2.0
                        </h2>

                        <p class="text-base leading-[1.65] text-(--accent) font-light mb-5">
                            Website interaktif dengan user-generated content, dynamic UI, dan ekosistem platform
                            terbuka.
                        </p>

                        <div class="h-px bg-linear-to-r from-transparent via-white/10 to-transparent mb-4"></div>

                        <a href="#web20"
                            class="inline-flex items-center gap-1 text-[0.78rem] font-semibold font-['Syne'] text-(--accent) transition-all hover:gap-3">
                            Pelajari lebih lanjut
                            <span class="transition-transform group-hover:translate-x-1">→</span>
                        </a>

                    </div>

                    <!-- Card 3 -->
                    <div class="card-web p-2 md:p-5 rounded-2xl md:rounded-3xl"
                        style="--accent:#f59e0b; --shadow:#212121">

                        <div
                            class="inline-flex items-center gap-1 text-sm font-bold uppercase px-2.5 py-1 rounded-full border border-white/10 bg-white/5 text-(--accent) mb-4 font-['Syne']">
                            <span class="w-1.5 h-1.5 rounded-full bg-(--accent)"></span>
                            Era Hybrid
                        </div>

                        <div
                            class="w-12 h-12 rounded-xl bg-white/5 border border-white/10 flex items-center justify-center text-2xl mb-4 shadow-(--shadow)">
                            🚀
                        </div>

                        <h2 class="font-['Syne'] text-xl font-extrabold text-(--accent) mb-2">
                            Web 2.5
                        </h2>

                        <p class="text-base leading-[1.65] text-(--accent) font-light mb-5">
                            Pendekatan hybrid modern dengan Laravel, Livewire, dan reactive UI — terbaik dari dua dunia.
                        </p>

                        <div class="h-px bg-linear-to-r from-transparent via-white/10 to-transparent mb-4"></div>

                        <a href="#web25"
                            class="inline-flex items-center gap-1 text-[0.78rem] font-semibold font-['Syne'] text-(--accent) transition-all hover:gap-3">
                            Pelajari lebih lanjut
                            <span class="transition-transform group-hover:translate-x-1">→</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </header>

    {{-- WEB 1.0 --}}
    <section id="web10" class="p-2.5 md:p-5 bg-(--color-primary-900)" aria-labelledby="web10-title">
        <div class=" mt-25 md:mt-35">
            <h2 id="web10-title" class="text-(--color-accent-500) reveal delay-1 font-extrabold mb-2"
                style="font-size: clamp(2.5rem, 6vw, 4.5rem); letter-spacing: -0.03em; ">
                Web <span class="text-gradient">1.0</span>
            </h2>

            <!-- Two Column Layout -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                <!-- Left: Content -->
                <div class="reveal delay-3">
                    <!-- Pengertian -->
                    <div class="rounded-2xl border border-white/20 bg-white/10 backdrop-blur-md p-2.5 md:p-5 mb-6">
                        <article class="reveal delay-2" aria-labelledby="web10-def">
                            <div class="era-divider"></div>
                            <h3 id="web10-def" class="text-xl font-bold text-(--color-primary-100)">
                                Pengertian
                            </h3>
                            <p class="text-base/relaxed text-(--color-primary-100)">
                                Web 1.0 adalah fase awal perkembangan internet di mana
                                <strong class="text-(--color-accent-500)">website bersifat statis dan hanya
                                    menampilkan informasi.</strong> Pengunjung hanya dapat membaca konten tanpa
                                melakukan interaksi seperti login, komentar, atau upload data. Website pada era ini
                                umumnya dibuat menggunakan HTML sederhana dengan hyperlink dasar.
                            </p>
                        </article>
                    </div>

                    <!-- Grid: Keunggulan & Kelemahan -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                        <!-- Keunggulan -->
                        <div class="rounded-2xl border border-white/20 bg-white/10 backdrop-blur-md p-2.5 md:p-5 mb-6">
                            <h3 class="text-xl/normal font-bold mb-4 uppercase text-(--color-primary-400)">
                                ✓ Keunggulan
                            </h3>
                            <ul role="list" style="list-style: none">
                                <li class="gap-3 py-2.5 text-(--color-primary-100) text-base/normal flex items-start">
                                    <span
                                        class="mt-0.5 w-5 h-5 min-w-5 rounded-full bg-(--color-primary-950) flex items-center justify-center text-(--color-primary-400) text-sm border-2 border-(--color-primary-600)"
                                        aria-hidden="true">✓</span>
                                    <span>Loading sangat cepat karena konten murni HTML statis
                                        tanpa logika server-side</span>
                                </li>
                                <li class="gap-3 py-2.5 text-(--color-primary-100) text-base/normal flex items-start">
                                    <span
                                        class="mt-0.5 w-5 h-5 min-w-5 rounded-full bg-(--color-primary-950) flex items-center justify-center text-(--color-primary-400) text-sm border-2 border-(--color-primary-600)"
                                        aria-hidden="true">✓</span>
                                    <span>Biaya hosting minimal, bisa dijalankan di server
                                        sederhana dengan resource rendah</span>
                                </li>
                                <li class="gap-3 py-2.5 text-(--color-primary-100) text-base/normal flex items-start">
                                    <span
                                        class="mt-0.5 w-5 h-5 min-w-5 rounded-full bg-(--color-primary-950) flex items-center justify-center text-(--color-primary-400) text-sm border-2 border-(--color-primary-600)"
                                        aria-hidden="true">✓</span>
                                    <span>Aman dari serangan injeksi karena tidak ada input pengguna atau
                                        database</span>
                                </li>
                            </ul>
                        </div>

                        <!-- Kelemahan -->
                        <div class="rounded-2xl border border-white/20 bg-white/10 backdrop-blur-md p-2.5 md:p-5 mb-6">
                            <h3 class="text-xl/normal font-bold mb-4 uppercase text-(--color-accent-400)">
                                ✗ Kelemahan
                            </h3>
                            <ul role="list" style="list-style: none">
                                <li class="gap-3 py-2.5 text-(--color-primary-100) text-base/normal flex items-start">
                                    <span
                                        class="mt-0.5 w-5 h-5 min-w-5 rounded-full bg-(--color-primary-950) flex items-center justify-center text-(--color-accent-500) text-sm border-2 border-(--color-accent-600)"
                                        aria-hidden="true">✗</span>
                                    <span>Tidak ada interaktivitas pengguna tidak bisa
                                        berkontribusi, berkomentar, atau login</span>
                                </li>
                                <li class="gap-3 py-2.5 text-(--color-primary-100) text-base/normal flex items-start">
                                    <span
                                        class="mt-0.5 w-5 h-5 min-w-5 rounded-full bg-(--color-primary-950) flex items-center justify-center text-(--color-accent-500) text-sm border-2 border-(--color-accent-600)"
                                        aria-hidden="true">✗</span>
                                    <span>Update konten memerlukan edit manual file HTML dan
                                        re-upload via FTP</span>
                                </li>
                                <li class="gap-3 py-2.5 text-(--color-primary-100) text-base/normal flex items-start">
                                    <span
                                        class="mt-0.5 w-5 h-5 min-w-5 rounded-full bg-(--color-primary-950) flex items-center justify-center text-(--color-accent-500) text-sm border-2 border-(--color-accent-600)"
                                        aria-hidden="true">✗</span>
                                    <span>Desain sangat terbatas: tabel HTML, font dasar, tidak ada</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Right: Preview -->
                <div class="reveal delay-3">

                    <span class="text-xl/relaxed text-(--color-accent-500) font-semibold uppercase">
                        Preview Visual
                    </span> <br>
                    <span class="text-base/relaxed text-(--color-accent-500) font-semibold mb-3">
                        Klik preview di atas untuk membuka simulasi Web 1.0. Demo ini menampilkan bagaimana website yang
                        dibangun menggunakan HTML & CSS modern.
                    </span>
                    <div class="preview-wrap">
                        <a href="https://webporto-1-0.vercel.app" target="_blank"
                            class="block overflow-hidden rounded-2xl">
                            <img src="{{ asset('img/ank-parfume.webp') }}"
                                alt="Preview Landing Page ank parfume  bukittinggi"
                                class="w-full h-74 object-cover hover:scale-105 transition-transform duration-300">
                        </a>
                    </div>
                    <p class="italic text-base/relaxed text-(--color-accent-400) mt-4">
                        Tampilan khas Web 1.0: tabel HTML untuk layout, hyperlink biru
                        underline, background abu-abu, tanpa CSS modern. Konten satu arah
                        — dibuat oleh webmaster, dibaca oleh visitor.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- WEB 2.0 --}}
    <section id="web20" class="p-2.5 md:p-5 bg-(--color-accent-500)" aria-labelledby="web20-title">
        <div class=" mt-25 md:mt-35">

            <h2 id="web20-title" class="text-(--color-primary-900) reveal delay-1 font-extrabold mb-2"
                style="font-size: clamp(2.5rem, 6vw, 4.5rem); letter-spacing: -0.03em; ">
                Web <span class="text-gradient">2.0</span>
            </h2>

            <!-- Preview First on Mobile -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                <!-- Left: Preview -->
                <div class="reveal delay-3">
                    <span class="text-xl/relaxed text-(--color-primary-900) font-semibold uppercase">
                        Preview Visual
                    </span> <br>
                    <span class="text-base/relaxed text-(--color-primary-900) font-semibold mb-3">
                        Klik gambar di bawah untuk membuka simulasi Web 2.0. Demo ini menampilkan bagaimana website yang
                        dibangun menggunakan framework.
                    </span>
                    <div class="preview-wrap">
                        <a href="https://webporto-1-0.vercel.app" target="_blank"
                            class="block overflow-hidden rounded-2xl">
                            <img src="{{ asset('img/ank-parfume.webp') }}"
                                alt="Preview Dinamis Page ANK Parfume  bukittinggi"
                                class="w-full h-74 object-cover hover:scale-105 transition-transform duration-300">
                        </a>
                    </div>
                    <p class="italic text-base/relaxed text-(--color-primary-900) mt-4">
                        Era platform sosial: Facebook, YouTube, Wikipedia. Pengguna bisa
                        membuat konten (UGC), komentar real-time via AJAX, feed dinamis,
                        dan ekosistem sharing yang masif.
                    </p>
                </div>

                <!-- Right: Content -->
                <div class="reveal delay-3">
                    <!-- Pengertian -->
                    <div class="rounded-2xl border border-white/20 bg-white/10 backdrop-blur-md p-2.5 md:p-5 mb-6">
                        <article class="reveal delay-2" aria-labelledby="web20-def">
                            <div class="era-divider"></div>
                            <h3 id="web20-def" class="text-xl font-bold text-(--color-primary-100)">
                                Pengertian
                            </h3>
                            <p class="text-base/relaxed text-(--color-primary-100)">
                                Web 2.0 menandai era
                                <strong class="text-(--color-primary-900)">interaktif dan user-generated
                                    content</strong>, di mana web bertransformasi menjadi platform dua arah.
                                Teknologi AJAX memungkinkan update halaman tanpa reload penuh,
                                sementara platform seperti Facebook, YouTube, dan Twitter
                                mengubah pengguna dari konsumen pasif menjadi kreator aktif.
                                Data mulai terpusat di server perusahaan besar.
                            </p>
                        </article>
                    </div>
                    <!-- Keunggulan & Kelemahan -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                        <div class="rounded-2xl border border-white/20 bg-white/10 backdrop-blur-md p-2.5 md:p-5 mb-6">
                            <h3 class="text-xl/normal font-bold mb-4 uppercase text-(--color-primary-400)">
                                ✓ Keunggulan
                            </h3>
                            <ul role="list" style="list-style: none">
                                <li class="gap-3 py-2.5 text-(--color-primary-100) text-base/normal flex items-start">
                                    <span
                                        class="mt-0.5 w-5 h-5 min-w-5 rounded-full bg-(--color-primary-950) flex items-center justify-center text-(--color-primary-400) text-sm border-2 border-(--color-primary-600)"
                                        aria-hidden="true">✓</span>
                                    <span>Interaktivitas tinggi: komentar, like, share, real-time
                                        notification, collaborative editing</span>
                                </li>
                                <li class="gap-3 py-2.5 text-(--color-primary-100) text-base/normal flex items-start">
                                    <span
                                        class="mt-0.5 w-5 h-5 min-w-5 rounded-full bg-(--color-primary-950) flex items-center justify-center text-(--color-primary-400) text-sm border-2 border-(--color-primary-600)"
                                        aria-hidden="true">✓</span>
                                    <span>UX lebih kaya dengan SPA, AJAX, WebSocket — pengalaman
                                        mendekati native desktop app</span>
                                </li>
                                <li class="gap-3 py-2.5 text-(--color-primary-100) text-base/normal flex items-start">
                                    <span
                                        class="mt-0.5 w-5 h-5 min-w-5 rounded-full bg-(--color-primary-950) flex items-center justify-center text-(--color-primary-400) text-sm border-2 border-(--color-primary-600)"
                                        aria-hidden="true">✓</span>
                                    <span>Ekosistem API terbuka memungkinkan integrasi lintas
                                        platform dan third-party app</span>
                                </li>
                            </ul>
                        </div>

                        <div class="rounded-2xl border border-white/20 bg-white/10 backdrop-blur-md p-2.5 md:p-5 mb-6">
                            <h3 class="text-xl/normal font-bold mb-4 uppercase text-(--color-primary-400)">
                                ✗ Kelemahan
                            </h3>
                            <ul role="list" style="list-style: none">
                                <li class="gap-3 py-2.5 text-(--color-primary-100) text-base/normal flex items-start">
                                    <span
                                        class="mt-0.5 w-5 h-5 min-w-5 rounded-full bg-(--color-primary-950) flex items-center justify-center text-(--color-accent-500) text-sm border-2 border-(--color-accent-600)"
                                        aria-hidden="true">✗</span>
                                    <span>Sentralisasi data massif — privasi pengguna dieksploitasi
                                        oleh platform besar (surveillance capitalism)</span>
                                </li>
                                <li class="gap-3 py-2.5 text-(--color-primary-100) text-base/normal flex items-start">
                                    <span
                                        class="mt-0.5 w-5 h-5 min-w-5 rounded-full bg-(--color-primary-950) flex items-center justify-center text-(--color-accent-500) text-sm border-2 border-(--color-accent-600)"
                                        aria-hidden="true">✗</span>
                                    <span>Ketergantungan pada JavaScript berat meningkatkan
                                        kompleksitas dan potensi kerentanan</span>
                                </li>
                                <li class="gap-3 py-2.5 text-(--color-primary-100) text-base/normal flex items-start">
                                    <span
                                        class="mt-0.5 w-5 h-5 min-w-5 rounded-full bg-(--color-primary-950) flex items-center justify-center text-(--color-accent-500) text-sm border-2 border-(--color-accent-600)"
                                        aria-hidden="true">✗</span>
                                    <span>Data pengguna dikuasai platform — akun bisa dihapus, data
                                        hilang, tanpa kontrol pengguna</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    {{-- WEB 2.5 --}}
    <section id="web25" class="p-2.5 md:p-5 bg-(--color-primary-900)" aria-labelledby="web25-title">
        <div class=" mt-25 md:mt-35">
            <h2 id="web25-title" class="text-(--color-accent-500) reveal delay-1 font-extrabold mb-2"
                style="font-size: clamp(2.5rem, 6vw, 4.5rem); letter-spacing: -0.03em; ">
                Web <span class="text-gradient">2.5</span>
            </h2>
            <!-- Two Column Layout -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                <!-- Left: Content -->
                <div class="reveal delay-3">
                    <div class="rounded-2xl border border-white/20 bg-white/10 backdrop-blur-md p-2.5 md:p-5 mb-6">
                        <article class="reveal delay-2" aria-labelledby="web10-def">
                            <div class="era-divider"></div>
                            <h3 id="web25-def" class="text-xl font-bold text-(--color-primary-100)">
                                Pengertian
                            </h3>
                            <p
                                style="
                        font-size: 0.92rem;
                        color: rgba(240, 230, 255, 0.65);
                        line-height: 1.75;
                        ">
                                Web 2.5 adalah fase
                                <strong style="color: var(--color-primary-300)">transisi hybrid</strong>
                                yang menggabungkan kematangan ekosistem Web 2.0 dengan fondasi
                                teknologi awal desentralisasi. Era ini ditandai PWA (Progressive
                                Web App), cloud-native architecture, AI/ML terintegrasi di sisi
                                server, dan eksperimen awal blockchain. Pengguna mulai memiliki
                                kontrol data terbatas melalui GDPR dan privacy-first tools.
                            </p>
                        </article>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                        <div class="rounded-2xl border border-white/20 bg-white/10 backdrop-blur-md p-2.5 md:p-5 mb-6">
                            <h3 class="text-xl/normal font-bold mb-4 uppercase text-(--color-primary-400)">
                                ✓ Keunggulan
                            </h3>
                            <ul role="list" style="list-style: none">
                                <li class="gap-3 py-2.5 text-(--color-primary-100) text-base/normal flex items-start">
                                    <span
                                        class="mt-0.5 w-5 h-5 min-w-5 rounded-full bg-(--color-primary-950) flex items-center justify-center text-(--color-primary-400) text-sm border-2 border-(--color-primary-600)"
                                        aria-hidden="true">✓</span>
                                    <span>PWA memberikan pengalaman app-like di browser: offline
                                        support, push notification, installable</span>
                                </li>
                                <li class="gap-3 py-2.5 text-(--color-primary-100) text-base/normal flex items-start">
                                    <span
                                        class="mt-0.5 w-5 h-5 min-w-5 rounded-full bg-(--color-primary-950) flex items-center justify-center text-(--color-primary-400) text-sm border-2 border-(--color-primary-600)"
                                        aria-hidden="true">✓</span>
                                    <span>AI/ML mulai terintegrasi langsung di web — rekomendasi
                                        personal, chatbot, image recognition</span>
                                </li>
                                <li class="gap-3 py-2.5 text-(--color-primary-100) text-base/normal flex items-start">
                                    <span
                                        class="mt-0.5 w-5 h-5 min-w-5 rounded-full bg-(--color-primary-950) flex items-center justify-center text-(--color-primary-400) text-sm border-2 border-(--color-primary-600)"
                                        aria-hidden="true">✓</span>
                                    <span>Regulasi privasi (GDPR) memberi pengguna hak lebih besar
                                        atas data mereka sendiri</span>
                                </li>
                            </ul>
                        </div>
                        <div class="rounded-2xl border border-white/20 bg-white/10 backdrop-blur-md p-2.5 md:p-5 mb-6">
                            <h3 class="text-xl/normal font-bold mb-4 uppercase text-(--color-accent-400)">
                                ✗ Kelemahan
                            </h3>
                            <ul role="list" style="list-style: none">
                                <li class="gap-3 py-2.5 text-(--color-primary-100) text-base/normal flex items-start">
                                    <span
                                        class="mt-0.5 w-5 h-5 min-w-5 rounded-full bg-(--color-primary-950) flex items-center justify-center text-(--color-accent-500) text-sm border-2 border-(--color-accent-600)"
                                        aria-hidden="true">✗</span>
                                    <span>Kompleksitas teknis meledak: microservices, container
                                        orchestration, CDN edge — barrier masuk tinggi</span>
                                </li>
                                <li class="gap-3 py-2.5 text-(--color-primary-100) text-base/normal flex items-start">
                                    <span
                                        class="mt-0.5 w-5 h-5 min-w-5 rounded-full bg-(--color-primary-950) flex items-center justify-center text-(--color-accent-500) text-sm border-2 border-(--color-accent-600)"
                                        aria-hidden="true">✗</span>
                                    <span>Fragmentasi ekosistem: terlalu banyak framework, tooling,
                                        standard yang bersaing</span>
                                </li>
                                <li class="gap-3 py-2.5 text-(--color-primary-100) text-base/normal flex items-start">
                                    <span
                                        class="mt-0.5 w-5 h-5 min-w-5 rounded-full bg-(--color-primary-950) flex items-center justify-center text-(--color-accent-500) text-sm border-2 border-(--color-accent-600)"
                                        aria-hidden="true">✗</span>
                                    <span>Regulasi privasi masih inkonsisten antar negara —
                                        implementasi compliance sangat costly</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>

                <!-- Preview -->
                <div class="reveal delay-3">
                    <span class="text-xl/relaxed text-(--color-accent-500) font-semibold uppercase">
                        Preview Visual
                    </span> <br>
                    <span class="text-base/relaxed text-(--color-accent-500) font-semibold mb-3">
                        Klik preview di atas untuk membuka simulasi Web 1.0. <br>
                        Demo ini menampilkan bagaimana website yang <br>
                        dibangun menggunakan HTML & CSS modern.
                    </span>
                    <div class="preview-wrap">
                        <a href="https://webporto-1-0.vercel.app" target="_blank"
                            class="block overflow-hidden rounded-2xl">
                            <img src="{{ asset('img/ank-parfume.webp') }}"
                                alt="Preview WEB APP ank parfume bukittinggi"
                                class="w-full h-74 object-cover hover:scale-105 transition-transform duration-300">
                        </a>
                    </div>
                    <p class="italic text-base/relaxed text-(--color-accent-400) mt-4">
                        Transisi ke arsitektur modern: dashboard cloud-native, AI-powered
                        features, PWA installable, dark mode by default, dan design system
                        yang mature. Perpaduan kematangan Web 2.0 dengan benih
                        desentralisasi.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- WEB 3.0 --}}
    <section id="web30" class="p-2.5 md:p-5 bg-(--color-accent-500)" aria-labelledby="web30-title">
        <div class=" mt-25 md:mt-35">
            <div class="era-number" aria-hidden="true" style="opacity: 0.06">
                3.0
            </div>

            <h2 id="web30-title" class="text-(--color-primary-900) reveal delay-1 font-extrabold mb-2"
                style="font-size: clamp(2.5rem, 6vw, 4.5rem); letter-spacing: -0.03em; ">
                Web <span class="text-gradient">3.0</span>
            </h2>
            <!-- Preview First -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                <!-- Left: Preview -->
                <div class="reveal delay-3">
                    <span class="text-xl/relaxed text-(--color-primary-900) font-semibold uppercase">
                        Preview Visual
                    </span> <br>
                    <span class="text-base/relaxed text-(--color-primary-900) font-semibold mb-3">
                        Klik gambar di bawah untuk membuka simulasi Web 2.0. Demo ini menampilkan bagaimana website yang
                        dibangun menggunakan framework.
                    </span>
                    <div class="preview-wrap">
                        <a href="https://webporto-1-0.vercel.app" target="_blank"
                            class="block overflow-hidden rounded-2xl">
                            <img src="{{ asset('img/ank-parfume.webp') }}"
                                alt="Preview desentralisasi ank parfume bukittinggi"
                                class="w-full h-74 object-cover hover:scale-105 transition-transform duration-300">
                        </a>
                    </div>
                    <p class="italic text-base/relaxed text-(--color-primary-900) mt-4">
                        Era platform sosial: Facebook, YouTube, Wikipedia. Pengguna bisa
                        membuat konten (UGC), komentar real-time via AJAX, feed dinamis,
                        dan ekosistem sharing yang masif.
                    </p>
                </div>

                <!-- Right: Content -->
                <div class="reveal delay-3">
                    <!-- Pengertian -->
                    <div class="rounded-2xl border border-white/20 bg-white/10 backdrop-blur-md p-2.5 md:p-5 mb-6">
                        <article class="reveal delay-2" aria-labelledby="web20-def">
                            <div class="era-divider"></div>
                            <h3 id="web20-def" class="text-xl font-bold text-(--color-primary-100)">
                                Pengertian
                            </h3>
                            <p class="text-base/relaxed text-(--color-primary-100)">
                                Web 2.0 menandai era
                                <strong class="text-(--color-primary-900)">interaktif dan user-generated
                                    content</strong>, di mana web bertransformasi menjadi platform dua arah.
                                Teknologi AJAX memungkinkan update halaman tanpa reload penuh,
                                sementara platform seperti Facebook, YouTube, dan Twitter
                                mengubah pengguna dari konsumen pasif menjadi kreator aktif.
                                Data mulai terpusat di server perusahaan besar.
                            </p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                        <div class="rounded-2xl border border-white/20 bg-white/10 backdrop-blur-md p-2.5 md:p-5 mb-6">
                            <h3 class="text-xl/normal font-bold mb-4 uppercase text-(--color-primary-400)">
                                ✓ Keunggulan
                            </h3>
                            <ul role="list" style="list-style: none">
                                <li class="gap-3 py-2.5 text-(--color-primary-100) text-base/normal flex items-start">
                                    <span
                                        class="mt-0.5 w-5 h-5 min-w-5 rounded-full bg-(--color-primary-950) flex items-center justify-center text-(--color-primary-400) text-sm border-2 border-(--color-primary-600)"
                                        aria-hidden="true">✓</span>
                                    <span>True ownership — NFT, token, identitas digital
                                        benar-benar milik pengguna, tak bisa diambil
                                        platform</span>
                                </li>
                                <li class="gap-3 py-2.5 text-(--color-primary-100) text-base/normal flex items-start">
                                    <span
                                        class="mt-0.5 w-5 h-5 min-w-5 rounded-full bg-(--color-primary-950) flex items-center justify-center text-(--color-primary-400) text-sm border-2 border-(--color-primary-600)"
                                        aria-hidden="true">✓</span>
                                    <span>Trustless transaction via smart contract — tidak butuh
                                        intermediary bank atau notaris</span>
                                </li>
                                <li class="gap-3 py-2.5 text-(--color-primary-100) text-base/normal flex items-start">
                                    <span
                                        class="mt-0.5 w-5 h-5 min-w-5 rounded-full bg-(--color-primary-950) flex items-center justify-center text-(--color-primary-400) text-sm border-2 border-(--color-primary-600)"
                                        aria-hidden="true">✓</span>
                                    <span>AI semantic layer membuat mesin memahami intent — UX
                                        lebih natural, pencarian lebih cerdas</span>
                                </li>
                            </ul>
                        </div>

                        <div class="rounded-2xl border border-white/20 bg-white/10 backdrop-blur-md p-2.5 md:p-5 mb-6">
                            <h3 class="text-xl/normal font-bold mb-4 uppercase text-(--color-primary-400)">
                                ✗ Kelemahan
                            </h3>
                            <ul role="list" style="list-style: none">
                                <li class="gap-3 py-2.5 text-(--color-primary-100) text-base/normal flex items-start">
                                    <span
                                        class="mt-0.5 w-5 h-5 min-w-5 rounded-full bg-(--color-primary-950) flex items-center justify-center text-(--color-accent-500) text-sm border-2 border-(--color-accent-600)"
                                        aria-hidden="true">✗</span>
                                    <span>UX sangat kompleks untuk pengguna awam: private key, seed
                                        phrase, gas fee, wallet setup</span>
                                </li>
                                <li class="gap-3 py-2.5 text-(--color-primary-100) text-base/normal flex items-start">
                                    <span
                                        class="mt-0.5 w-5 h-5 min-w-5 rounded-full bg-(--color-primary-950) flex items-center justify-center text-(--color-accent-500) text-sm border-2 border-(--color-accent-600)"
                                        aria-hidden="true">✗</span>
                                    <span>Skalabilitas blockchain masih terbatas — throughput
                                        rendah dan biaya transaksi tinggi saat network sibuk</span>
                                </li>
                                <li class="gap-3 py-2.5 text-(--color-primary-100) text-base/normal flex items-start">
                                    <span
                                        class="mt-0.5 w-5 h-5 min-w-5 rounded-full bg-(--color-primary-950) flex items-center justify-center text-(--color-accent-500) text-sm border-2 border-(--color-accent-600)"
                                        aria-hidden="true">✗</span>
                                    <span>Regulasi global masih abu-abu dan tidak konsisten,
                                        menciptakan risiko hukum bagi developer dan user</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Scroll reveal JS -->
    <script>
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(e => {
                if (e.isIntersecting) e.target.classList.add('visible');
            });
        }, {
            threshold: 0.12
        });

        document.querySelectorAll('.reveal').forEach(el => observer.observe(el));
    </script>

    </html>
</x-app-layout>
