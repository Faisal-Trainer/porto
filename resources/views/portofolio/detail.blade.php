<x-app-layout>
    {{-- SEO --}}
    @section('title', $project->judul . ' — Studi Evolusi Web 1.0, 2.0, 2.5 & 3.0 | Faisal Yusra')
    @section('meta_description', $project->deskripsi)
    @section('meta_keywords', $project->kategori . ', web developer, portfolio, faisal yusra')
    @section('canonical', url()->current())

    @section('og_title', $project->judul . ' — Studi Evolusi Web | Faisal Yusra')
    @section('og_description', $project->deskripsi)
    @section('og_image', asset('storage/' . $project->thumbnail))

    @section('twitter_title', $project->judul)
    @section('twitter_description', $project->deskripsi)
    @section('twitter_image', asset('storage/' . $project->thumbnail))

    {{-- HEADER SECTION --}}
    <header id="hero">
        <section class="p-2.5 md:p-5">

            {{-- Badge & Title --}}
            <div class="p-2.5 gap-2.5 reveal delay-5">
                <div
                    class="inline-flex items-center gap-2 bg-(--color-primary-100) border border-(--color-primary-200) text-(--color-primary-700) text-base md:text-xl font-bold px-4 md:px-5 py-1.5 md:py-2.5 rounded-full">
                    <span>✦</span>Portfolio Project
                </div>

                <h1 class="text-2xl md:text-4xl font-bold text-(--color-primary-950) mt-3">
                    {{ strtoupper($project->judul) }}
                </h1>
            </div>

            {{-- Deskripsi & Tujuan Studi --}}
            <div class="p-2.5 space-y-2 reveal delay-2">
                <p class="text-sm md:text-base text-(--color-primary-700)">
                    {{ $project->deskripsi }}
                </p>
                <p class="text-sm md:text-base text-(--color-primary-600)">
                    Project ini saya buat untuk mengeksplorasi bagaimana satu produk yang sama
                    bisa diimplementasikan dalam berbagai paradigma web. Tujuannya:
                </p>
                <ul class="list-none space-y-1 text-sm text-(--color-primary-600) pl-2">
                    <li>— Memahami perbedaan arsitektur</li>
                    <li>— Membandingkan performa & UX</li>
                    <li>— Melihat trade-off tiap pendekatan</li>
                </ul>
            </div>

            {{-- Tech Stack & Meta --}}
            <div class="p-2.5 reveal delay-3">
                @if ($project->technologies->isNotEmpty())
                    <div class="flex flex-wrap gap-2 mb-3">
                        @foreach ($project->technologies as $tech)
                            <span
                                class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-(--color-primary-100) border border-(--color-primary-200) text-(--color-primary-700) text-sm font-medium">
                                @if ($tech->icon)
                                    <img src="{{ asset('storage/' . $tech->icon) }}" alt="{{ $tech->name }}"
                                        class="w-4 h-4 object-contain">
                                @endif
                                {{ $tech->name }}
                            </span>
                        @endforeach
                    </div>
                @endif

                <div class="flex flex-wrap gap-3 items-center text-sm text-(--color-primary-500)">
                    @if ($project->tanggal_rilis)
                        <span>📅 Rilis: {{ $project->tanggal_rilis->format('d M Y') }}</span>
                    @endif
                    @if ($project->demo_url)
                        <a href="{{ $project->demo_url }}" target="_blank"
                            class="inline-flex items-center gap-1 text-(--color-primary-700) font-semibold hover:underline">
                            🌐 Lihat Demo →
                        </a>
                    @endif
                </div>
            </div>

            {{-- Tagline --}}
            <p class="text-sm md:text-base text-(--color-accent-500) reveal delay-2 p-2.5">
                Eksplorasi <strong>{{ $project->judul }}</strong> dalam empat pendekatan web: <br>
                Web 1.0, Web 2.0, Web 2.5, dan Web 3.0
            </p>

            {{-- Era Cards --}}
            <div class="relative z-10 w-full flex flex-col items-center">
                <p class="text-center mb-4 md:mb-10 font-['Syne'] text-2xl uppercase text-(--color-primary-600)">
                    Evolusi Web
                </p>

                <div class="grid grid-cols-1 md:grid-cols-4 gap-6 max-w-300 w-full">

                    {{-- Card Web 1.0 --}}
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
                        <h2 class="font-['Syne'] text-xl font-extrabold text-(--accent) mb-2">Web 1.0</h2>
                        <p class="text-base leading-[1.65] text-(--accent) font-light mb-5">
                            Website statis berbasis HTML murni dengan konten satu arah — baca saja, tak bisa
                            berinteraksi.
                        </p>
                        <div class="h-px bg-linear-to-r from-transparent via-white/10 to-transparent mb-4"></div>
                        <a href="#web10"
                            class="inline-flex items-center gap-1 text-[0.78rem] font-semibold font-['Syne'] text-(--accent) transition-all hover:gap-3">
                            Pelajari lebih lanjut
                            <span class="transition-transform group-hover:translate-x-1">→</span>
                        </a>
                    </div>

                    {{-- Card Web 2.0 --}}
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
                        <h2 class="font-['Syne'] text-xl font-extrabold text-(--accent) mb-2">Web 2.0</h2>
                        <p class="text-base leading-[1.65] text-(--accent) font-light mb-5">
                            Website interaktif. User bisa berkontribusi langsung. Konten tidak lagi satu arah.
                        </p>
                        <div class="h-px bg-linear-to-r from-transparent via-white/10 to-transparent mb-4"></div>
                        <a href="#web20"
                            class="inline-flex items-center gap-1 text-[0.78rem] font-semibold font-['Syne'] text-(--accent) transition-all hover:gap-3">
                            Pelajari lebih lanjut
                            <span class="transition-transform group-hover:translate-x-1">→</span>
                        </a>
                    </div>

                    {{-- Card Web 2.5 --}}
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
                        <h2 class="font-['Syne'] text-xl font-extrabold text-(--accent) mb-2">Web 2.5</h2>
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

                    {{-- Card Web 3.0 --}}
                    <div class="card-web p-2 md:p-5 rounded-2xl md:rounded-3xl"
                        style="--accent:#f59e0b; --shadow:#212121; opacity: 0.75">
                        <div
                            class="inline-flex items-center gap-1 text-sm font-bold uppercase px-2.5 py-1 rounded-full border border-white/10 bg-white/5 text-(--accent) mb-4 font-['Syne']">
                            <span class="w-1.5 h-1.5 rounded-full bg-(--accent)"></span>
                            Era Terdesentralisasi
                        </div>
                        <div
                            class="w-12 h-12 rounded-xl bg-white/5 border border-white/10 flex items-center justify-center text-2xl mb-4 shadow-(--shadow)">
                            🔭
                        </div>
                        <h2 class="font-['Syne'] text-xl font-extrabold text-(--accent) mb-2">Web 3.0</h2>
                        <p class="text-base leading-[1.65] text-(--accent) font-light mb-5">
                            Ekosistem digital terdesentralisasi — blockchain, AI semantik, dan kepemilikan data penuh
                            oleh
                            user.
                        </p>
                        <div class="h-px bg-linear-to-r from-transparent via-white/10 to-transparent mb-4"></div>
                        <a href="#web30"
                            class="inline-flex items-center gap-1 text-[0.78rem] font-semibold font-['Syne'] text-(--accent) transition-all hover:gap-3">
                            Pelajari lebih lanjut
                            <span class="transition-transform group-hover:translate-x-1">→</span>
                        </a>
                    </div>

                </div>
            </div>
        </section>
    </header>

    {{-- ═══════════════════════════════════════════
         WEB 1.0
    ═══════════════════════════════════════════ --}}
    <section id="web10" class="p-2.5 md:p-5 bg-(--color-primary-900)" aria-labelledby="web10-title">
        <div class="mt-25 md:mt-35">
            <h2 id="web10-title" class="text-(--color-accent-500) reveal delay-1 font-extrabold mb-2"
                style="font-size: clamp(2.5rem, 6vw, 4.5rem); letter-spacing: -0.03em;">
                Web <span class="text-gradient">1.0</span>
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                {{-- Left: Content --}}
                <div class="reveal delay-3">
                    {{-- Pengertian --}}
                    <div class="rounded-2xl border border-white/20 bg-white/10 backdrop-blur-md p-2.5 md:p-5 mb-6">
                        <article class="reveal delay-2" aria-labelledby="web10-def">
                            <div class="era-divider"></div>
                            <h3 id="web10-def" class="text-xl font-bold text-(--color-primary-100)">Pengertian</h3>
                            <p class="text-base/relaxed text-(--color-primary-100)">
                                Web 1.0 adalah fase awal perkembangan internet di mana
                                <strong class="text-(--color-accent-500)">website bersifat statis dan hanya
                                    menampilkan informasi.</strong> Pengunjung hanya dapat membaca konten tanpa
                                melakukan interaksi seperti login, komentar, atau upload data. Website pada era ini
                                umumnya dibuat menggunakan HTML sederhana dengan hyperlink dasar.
                            </p>
                        </article>
                    </div>

                    {{-- Keunggulan & Kelemahan --}}
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
                                    <span>Loading sangat cepat karena konten murni HTML statis tanpa logika
                                        server-side</span>
                                </li>
                                <li class="gap-3 py-2.5 text-(--color-primary-100) text-base/normal flex items-start">
                                    <span
                                        class="mt-0.5 w-5 h-5 min-w-5 rounded-full bg-(--color-primary-950) flex items-center justify-center text-(--color-primary-400) text-sm border-2 border-(--color-primary-600)"
                                        aria-hidden="true">✓</span>
                                    <span>Biaya hosting minimal, bisa dijalankan di server sederhana dengan resource
                                        rendah</span>
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

                        <div class="rounded-2xl border border-white/20 bg-white/10 backdrop-blur-md p-2.5 md:p-5 mb-6">
                            <h3 class="text-xl/normal font-bold mb-4 uppercase text-(--color-accent-400)">
                                ✗ Kelemahan
                            </h3>
                            <ul role="list" style="list-style: none">
                                <li class="gap-3 py-2.5 text-(--color-primary-100) text-base/normal flex items-start">
                                    <span
                                        class="mt-0.5 w-5 h-5 min-w-5 rounded-full bg-(--color-primary-950) flex items-center justify-center text-(--color-accent-500) text-sm border-2 border-(--color-accent-600)"
                                        aria-hidden="true">✗</span>
                                    <span>Tidak ada interaktivitas — pengguna tidak bisa berkontribusi, berkomentar,
                                        atau login</span>
                                </li>
                                <li class="gap-3 py-2.5 text-(--color-primary-100) text-base/normal flex items-start">
                                    <span
                                        class="mt-0.5 w-5 h-5 min-w-5 rounded-full bg-(--color-primary-950) flex items-center justify-center text-(--color-accent-500) text-sm border-2 border-(--color-accent-600)"
                                        aria-hidden="true">✗</span>
                                    <span>Update konten memerlukan edit manual file HTML dan re-upload via FTP</span>
                                </li>
                                <li class="gap-3 py-2.5 text-(--color-primary-100) text-base/normal flex items-start">
                                    <span
                                        class="mt-0.5 w-5 h-5 min-w-5 rounded-full bg-(--color-primary-950) flex items-center justify-center text-(--color-accent-500) text-sm border-2 border-(--color-accent-600)"
                                        aria-hidden="true">✗</span>
                                    <span>Desain sangat terbatas: tabel HTML, font dasar, tanpa CSS
                                        modern</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                {{-- Right: Preview --}}
                <div class="reveal delay-3">
                    <span class="text-xl/relaxed text-(--color-accent-500) font-semibold uppercase">
                        Preview Visual
                    </span> <br>
                    <span class="text-base/relaxed text-(--color-accent-500) font-semibold mb-3">
                        Klik preview di bawah untuk melihat demo Web 1.0 — website statis berbasis HTML murni.
                    </span>

                    @if ($project->demo_url)
                        <div class="preview-wrap">
                            <a href="{{ $project->demo_url }}" target="_blank"
                                class="block overflow-hidden rounded-2xl">
                                <img src="{{ asset('storage/' . $project->thumbnail) }}"
                                    alt="Preview Web 1.0 - {{ $project->judul }}"
                                    class="w-full h-74 object-cover hover:scale-105 transition-transform duration-300">
                            </a>
                        </div>
                    @else
                        <div class="preview-wrap">
                            <div
                                class="w-full h-74 rounded-2xl overflow-hidden bg-white/10 border border-white/20 flex items-center justify-center">
                                <img src="{{ asset('storage/' . $project->thumbnail) }}"
                                    alt="Thumbnail - {{ $project->judul }}" class="w-full h-full object-cover">
                            </div>
                        </div>
                    @endif

                    <p class="italic text-base/relaxed text-(--color-accent-400) mt-4">
                        Tampilan khas Web 1.0: HTML statis, hyperlink sederhana, tanpa database dan tanpa interaksi
                        pengguna.
                        Konten satu arah — dibuat oleh webmaster, dibaca oleh visitor.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- ═══════════════════════════════════════════
         WEB 2.0
    ═══════════════════════════════════════════ --}}
    <section id="web20" class="p-2.5 md:p-5 bg-(--color-accent-500)" aria-labelledby="web20-title">
        <div class="mt-25 md:mt-35">
            <h2 id="web20-title" class="text-(--color-primary-900) reveal delay-1 font-extrabold mb-2"
                style="font-size: clamp(2.5rem, 6vw, 4.5rem); letter-spacing: -0.03em;">
                Web <span class="text-gradient">2.0</span>
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                {{-- Left: Preview --}}
                <div class="reveal delay-3">
                    <span class="text-xl/relaxed text-(--color-primary-900) font-semibold uppercase">
                        Preview Visual
                    </span> <br>
                    <span class="text-base/relaxed text-(--color-primary-900) font-semibold mb-3">
                        Klik gambar di bawah untuk melihat demo Web 2.0 — platform interaktif dengan user-generated
                        content.
                    </span>

                    @if ($project->demo_url)
                        <div class="preview-wrap">
                            <a href="{{ $project->demo_url }}" target="_blank"
                                class="block overflow-hidden rounded-2xl">
                                <img src="{{ asset('storage/' . $project->thumbnail) }}"
                                    alt="Preview Web 2.0 - {{ $project->judul }}"
                                    class="w-full h-74 object-cover hover:scale-105 transition-transform duration-300">
                            </a>
                        </div>
                    @else
                        <div class="preview-wrap">
                            <div class="w-full h-74 rounded-2xl overflow-hidden">
                                <img src="{{ asset('storage/' . $project->thumbnail) }}"
                                    alt="Thumbnail - {{ $project->judul }}" class="w-full h-full object-cover">
                            </div>
                        </div>
                    @endif

                    <p class="italic text-base/relaxed text-(--color-primary-900) mt-4">
                        Era platform sosial: Facebook, YouTube, Wikipedia. Pengguna bisa membuat konten (UGC),
                        komentar real-time via AJAX, feed dinamis, dan ekosistem sharing yang masif.
                    </p>
                </div>

                {{-- Right: Content --}}
                <div class="reveal delay-3">
                    <div class="rounded-2xl border border-white/20 bg-white/10 backdrop-blur-md p-2.5 md:p-5 mb-6">
                        <article class="reveal delay-2" aria-labelledby="web20-def">
                            <div class="era-divider"></div>
                            <h3 id="web20-def" class="text-xl font-bold text-(--color-primary-100)">Pengertian</h3>
                            <p class="text-base/relaxed text-(--color-primary-100)">
                                Web 2.0 menandai era
                                <strong class="text-(--color-primary-900)">interaktif dan user-generated
                                    content</strong>,
                                di mana web bertransformasi menjadi platform dua arah. Teknologi AJAX memungkinkan
                                update halaman tanpa reload penuh, sementara platform seperti Facebook, YouTube, dan
                                Twitter mengubah pengguna dari konsumen pasif menjadi kreator aktif. Data mulai
                                terpusat di server perusahaan besar.
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
                                    <span>Interaktivitas tinggi: komentar, like, share, real-time notification,
                                        collaborative editing</span>
                                </li>
                                <li class="gap-3 py-2.5 text-(--color-primary-100) text-base/normal flex items-start">
                                    <span
                                        class="mt-0.5 w-5 h-5 min-w-5 rounded-full bg-(--color-primary-950) flex items-center justify-center text-(--color-primary-400) text-sm border-2 border-(--color-primary-600)"
                                        aria-hidden="true">✓</span>
                                    <span>UX lebih kaya dengan SPA, AJAX, WebSocket — pengalaman mendekati native
                                        desktop app</span>
                                </li>
                                <li class="gap-3 py-2.5 text-(--color-primary-100) text-base/normal flex items-start">
                                    <span
                                        class="mt-0.5 w-5 h-5 min-w-5 rounded-full bg-(--color-primary-950) flex items-center justify-center text-(--color-primary-400) text-sm border-2 border-(--color-primary-600)"
                                        aria-hidden="true">✓</span>
                                    <span>Ekosistem API terbuka memungkinkan integrasi lintas platform dan
                                        third-party app</span>
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
                                    <span>Sentralisasi data massif — privasi pengguna dieksploitasi oleh platform
                                        besar (surveillance capitalism)</span>
                                </li>
                                <li class="gap-3 py-2.5 text-(--color-primary-100) text-base/normal flex items-start">
                                    <span
                                        class="mt-0.5 w-5 h-5 min-w-5 rounded-full bg-(--color-primary-950) flex items-center justify-center text-(--color-accent-500) text-sm border-2 border-(--color-accent-600)"
                                        aria-hidden="true">✗</span>
                                    <span>Ketergantungan pada JavaScript berat meningkatkan kompleksitas dan potensi
                                        kerentanan</span>
                                </li>
                                <li class="gap-3 py-2.5 text-(--color-primary-100) text-base/normal flex items-start">
                                    <span
                                        class="mt-0.5 w-5 h-5 min-w-5 rounded-full bg-(--color-primary-950) flex items-center justify-center text-(--color-accent-500) text-sm border-2 border-(--color-accent-600)"
                                        aria-hidden="true">✗</span>
                                    <span>Data pengguna dikuasai platform — akun bisa dihapus, data hilang, tanpa
                                        kontrol pengguna</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ═══════════════════════════════════════════
         WEB 2.5
    ═══════════════════════════════════════════ --}}
    <section id="web25" class="p-2.5 md:p-5 bg-(--color-primary-900)" aria-labelledby="web25-title">
        <div class="mt-25 md:mt-35">
            <h2 id="web25-title" class="text-(--color-accent-500) reveal delay-1 font-extrabold mb-2"
                style="font-size: clamp(2.5rem, 6vw, 4.5rem); letter-spacing: -0.03em;">
                Web <span class="text-gradient">2.5</span>
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                {{-- Left: Content --}}
                <div class="reveal delay-3">
                    <div class="rounded-2xl border border-white/20 bg-white/10 backdrop-blur-md p-2.5 md:p-5 mb-6">
                        <article class="reveal delay-2" aria-labelledby="web25-def">
                            <div class="era-divider"></div>
                            <h3 id="web25-def" class="text-xl font-bold text-(--color-primary-100)">Pengertian</h3>
                            <p class="text-base/relaxed text-(--color-primary-100)">
                                Web 2.5 adalah fase
                                <strong class="text-(--color-primary-300)">transisi hybrid</strong>
                                yang menggabungkan kematangan ekosistem Web 2.0 dengan fondasi teknologi awal
                                desentralisasi. Era ini ditandai PWA (Progressive Web App), cloud-native architecture,
                                AI/ML terintegrasi di sisi server, dan eksperimen awal blockchain. Pengguna mulai
                                memiliki kontrol data terbatas melalui GDPR dan privacy-first tools.
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
                                    <span>PWA memberikan pengalaman app-like di browser: offline support, push
                                        notification, installable</span>
                                </li>
                                <li class="gap-3 py-2.5 text-(--color-primary-100) text-base/normal flex items-start">
                                    <span
                                        class="mt-0.5 w-5 h-5 min-w-5 rounded-full bg-(--color-primary-950) flex items-center justify-center text-(--color-primary-400) text-sm border-2 border-(--color-primary-600)"
                                        aria-hidden="true">✓</span>
                                    <span>AI/ML mulai terintegrasi langsung di web — rekomendasi personal, chatbot,
                                        image recognition</span>
                                </li>
                                <li class="gap-3 py-2.5 text-(--color-primary-100) text-base/normal flex items-start">
                                    <span
                                        class="mt-0.5 w-5 h-5 min-w-5 rounded-full bg-(--color-primary-950) flex items-center justify-center text-(--color-primary-400) text-sm border-2 border-(--color-primary-600)"
                                        aria-hidden="true">✓</span>
                                    <span>Regulasi privasi (GDPR) memberi pengguna hak lebih besar atas data mereka
                                        sendiri</span>
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
                                    <span>Kompleksitas teknis meledak: microservices, container orchestration, CDN
                                        edge — barrier masuk tinggi</span>
                                </li>
                                <li class="gap-3 py-2.5 text-(--color-primary-100) text-base/normal flex items-start">
                                    <span
                                        class="mt-0.5 w-5 h-5 min-w-5 rounded-full bg-(--color-primary-950) flex items-center justify-center text-(--color-accent-500) text-sm border-2 border-(--color-accent-600)"
                                        aria-hidden="true">✗</span>
                                    <span>Fragmentasi ekosistem: terlalu banyak framework, tooling, standard yang
                                        bersaing</span>
                                </li>
                                <li class="gap-3 py-2.5 text-(--color-primary-100) text-base/normal flex items-start">
                                    <span
                                        class="mt-0.5 w-5 h-5 min-w-5 rounded-full bg-(--color-primary-950) flex items-center justify-center text-(--color-accent-500) text-sm border-2 border-(--color-accent-600)"
                                        aria-hidden="true">✗</span>
                                    <span>Regulasi privasi masih inkonsisten antar negara — implementasi compliance
                                        sangat costly</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                {{-- Right: Preview --}}
                <div class="reveal delay-3">
                    <span class="text-xl/relaxed text-(--color-accent-500) font-semibold uppercase">
                        Preview Visual
                    </span> <br>
                    <span class="text-base/relaxed text-(--color-accent-500) font-semibold mb-3">
                        Klik preview di bawah untuk melihat demo Web 2.5 — arsitektur hybrid modern dengan TALL Stack.
                    </span>

                    @if ($project->demo_url)
                        <div class="preview-wrap">
                            <a href="{{ $project->demo_url }}" target="_blank"
                                class="block overflow-hidden rounded-2xl">
                                <img src="{{ asset('storage/' . $project->thumbnail) }}"
                                    alt="Preview Web 2.5 - {{ $project->judul }}"
                                    class="w-full h-74 object-cover hover:scale-105 transition-transform duration-300">
                            </a>
                        </div>
                    @else
                        <div class="preview-wrap">
                            <div class="w-full h-74 rounded-2xl overflow-hidden">
                                <img src="{{ asset('storage/' . $project->thumbnail) }}"
                                    alt="Thumbnail - {{ $project->judul }}" class="w-full h-full object-cover">
                            </div>
                        </div>
                    @endif

                    <p class="italic text-base/relaxed text-(--color-accent-400) mt-4">
                        Transisi ke arsitektur modern: dashboard cloud-native, AI-powered features, PWA installable,
                        dark mode by default, dan design system yang mature. Perpaduan kematangan Web 2.0 dengan benih
                        desentralisasi.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- ═══════════════════════════════════════════
         WEB 3.0
    ═══════════════════════════════════════════ --}}
    <section id="web30" class="p-2.5 md:p-5 bg-(--color-accent-500)" aria-labelledby="web30-title">
        <div class="mt-25 md:mt-35">
            <div class="era-number" aria-hidden="true" style="opacity: 0.06">3.0</div>

            <h2 id="web30-title" class="text-(--color-primary-900) reveal delay-1 font-extrabold mb-2"
                style="font-size: clamp(2.5rem, 6vw, 4.5rem); letter-spacing: -0.03em;">
                Web <span class="text-gradient">3.0</span>
            </h2>

            {{-- Coming Soon Banner --}}
            <div
                class="mb-8 inline-flex items-center gap-2 px-4 py-2 rounded-full bg-(--color-primary-900)/20 border border-(--color-primary-900)/30 text-(--color-primary-900) text-sm font-semibold">
                🔭 Sedang dalam pengembangan — segera hadir
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                {{-- Left: Preview --}}
                <div class="reveal delay-3">
                    <span class="text-xl/relaxed text-(--color-primary-900) font-semibold uppercase">
                        Preview Visual
                    </span> <br>
                    <span class="text-base/relaxed text-(--color-primary-900) font-semibold mb-3">
                        Versi Web 3.0 dari project ini sedang disiapkan. Stay tuned!
                    </span>

                    <div class="preview-wrap relative">
                        <div class="w-full h-74 rounded-2xl overflow-hidden relative">
                            <img src="{{ asset('storage/' . $project->thumbnail) }}"
                                alt="Preview Web 3.0 Coming Soon - {{ $project->judul }}"
                                class="w-full h-full object-cover opacity-40">
                            <div class="absolute inset-0 flex flex-col items-center justify-center">
                                <span class="text-4xl mb-3">🔭</span>
                                <span
                                    class="bg-(--color-primary-900)/80 text-white text-sm font-semibold px-5 py-2.5 rounded-full">
                                    Segera Hadir
                                </span>
                            </div>
                        </div>
                    </div>

                    <p class="italic text-base/relaxed text-(--color-primary-900) mt-4">
                        Web 3.0 untuk project ini masih dalam tahap eksplorasi. Hubungi saya jika tertarik
                        mendiskusikan potensinya untuk bisnis kamu.
                    </p>
                </div>

                {{-- Right: Content --}}
                <div class="reveal delay-3">
                    <div class="rounded-2xl border border-white/20 bg-white/10 backdrop-blur-md p-2.5 md:p-5 mb-6">
                        <article class="reveal delay-2" aria-labelledby="web30-def">
                            <div class="era-divider"></div>
                            <h3 id="web30-def" class="text-xl font-bold text-(--color-primary-100)">Pengertian</h3>
                            <p class="text-base/relaxed text-(--color-primary-100)">
                                Web 3.0 adalah visi internet yang
                                <strong class="text-(--color-primary-900)">terdesentralisasi dan semantik</strong>,
                                di mana data dimiliki pengguna bukan platform. Berbasis blockchain, smart contract,
                                dan AI semantik — mesin benar-benar memahami konteks dan intent pengguna. Identitas
                                digital, kepemilikan aset, dan transaksi terjadi secara trustless tanpa perantara.
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
                                    <span>True ownership — NFT, token, identitas digital benar-benar milik pengguna,
                                        tak bisa diambil platform</span>
                                </li>
                                <li class="gap-3 py-2.5 text-(--color-primary-100) text-base/normal flex items-start">
                                    <span
                                        class="mt-0.5 w-5 h-5 min-w-5 rounded-full bg-(--color-primary-950) flex items-center justify-center text-(--color-primary-400) text-sm border-2 border-(--color-primary-600)"
                                        aria-hidden="true">✓</span>
                                    <span>Trustless transaction via smart contract — tidak butuh intermediary bank atau
                                        notaris</span>
                                </li>
                                <li class="gap-3 py-2.5 text-(--color-primary-100) text-base/normal flex items-start">
                                    <span
                                        class="mt-0.5 w-5 h-5 min-w-5 rounded-full bg-(--color-primary-950) flex items-center justify-center text-(--color-primary-400) text-sm border-2 border-(--color-primary-600)"
                                        aria-hidden="true">✓</span>
                                    <span>AI semantic layer membuat mesin memahami intent — UX lebih natural, pencarian
                                        lebih cerdas</span>
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
                                    <span>UX sangat kompleks untuk pengguna awam: private key, seed phrase, gas fee,
                                        wallet setup</span>
                                </li>
                                <li class="gap-3 py-2.5 text-(--color-primary-100) text-base/normal flex items-start">
                                    <span
                                        class="mt-0.5 w-5 h-5 min-w-5 rounded-full bg-(--color-primary-950) flex items-center justify-center text-(--color-accent-500) text-sm border-2 border-(--color-accent-600)"
                                        aria-hidden="true">✗</span>
                                    <span>Skalabilitas blockchain masih terbatas — throughput rendah dan biaya transaksi
                                        tinggi saat network sibuk</span>
                                </li>
                                <li class="gap-3 py-2.5 text-(--color-primary-100) text-base/normal flex items-start">
                                    <span
                                        class="mt-0.5 w-5 h-5 min-w-5 rounded-full bg-(--color-primary-950) flex items-center justify-center text-(--color-accent-500) text-sm border-2 border-(--color-accent-600)"
                                        aria-hidden="true">✗</span>
                                    <span>Regulasi global masih abu-abu dan tidak konsisten, menciptakan risiko hukum
                                        bagi developer dan user</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ═══════════════════════════════════════════
         CTA SECTION
    ═══════════════════════════════════════════ --}}
    <section class="py-16 px-4 md:px-8 bg-(--color-primary-950) text-center">
        <p class="text-(--color-primary-400) text-sm mb-2 uppercase tracking-widest font-semibold">Tertarik?</p>
        <h2 class="text-2xl md:text-3xl font-bold text-white mb-4">
            Bangun solusi digital untuk bisnis kamu
        </h2>
        <p class="text-(--color-primary-300) text-base mb-8 max-w-lg mx-auto">
            Mulai dari landing page sederhana hingga web app kompleks — semuanya bisa disesuaikan dengan kebutuhan dan
            budget kamu.
        </p>
        <div class="flex flex-col sm:flex-row gap-3 justify-center">
            <a href="{{ route('contact.create') }}"
                class="inline-block bg-(--color-accent-500) hover:bg-(--color-accent-600) text-(--color-primary-900) font-bold px-8 py-3 rounded-xl transition-colors duration-200">
                Konsultasi Gratis →
            </a>
            <a href="{{ route('portfolio') }}"
                class="inline-block border border-white/20 hover:bg-white/10 text-white font-semibold px-8 py-3 rounded-xl transition-colors duration-200">
                ← Lihat Project Lain
            </a>
        </div>
    </section>

    {{-- Scroll reveal JS --}}
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

</x-app-layout>
