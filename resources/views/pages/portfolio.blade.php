<x-app-layout>

    {{-- SEO --}}
    @section('title', 'Portofolio Proyek | Faisal Yusra Web Developer')
    @section('meta_description',
        'Lihat koleksi proyek web development untuk UMKM. Website app, landing page, dan solusi
        digital yang telah saya bangun.')
    @section('meta_keywords', 'portofolio web developer,portofolio website Bukittinggi, hasil kerja web developer')
    @section('canonical', url()->current())
    <meta name="author" content="Muhammad Faisal Alyusra">
    <meta name="robots" content="index, follow">

    {{-- OPEN GRAPH --}}
    <meta property="og:type" content="website">
    @section('og_title', 'Portofolio Proyek | Faisal Yusra Web Developer')
    @section('og_description',
        'Lihat koleksi proyek web development untuk UMKM. Website app, landing page, dan solusi
        digital yang telah saya bangun.')
    @section('og_image', asset('img/profile.webp'))
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:locale" content="id_ID">
    <meta property="og:site_name" content="Faisal Yusra">

    {{-- Twitter / X Card --}}
    <meta name="twitter:card" content="summary_large_image">
    @section('twitter_title', 'Portofolio — faisal yursa')
    @section('twitter_description', 'Portofolio')
    @section('twitter_image', asset('img/profile.webp'))

    {{-- PORTOFOLIO SECTION --}}
    <section class="p-2.5 md:p-5">
        <div class="text-center mb-10">
            <h1 class="text-2xl md:text-4xl font-extrabold text-(--color-primary-950) tracking-wide">
                My Work
            </h1>
            <p class="text-(--color-primary-700) mt-2 text-lg">
                Saya tidak hanya membangun website — saya membangun solusi yang bisa tumbuh bersama bisnis kamu
            </p>
        </div>
        <div class="mb-5 flex flex-wrap justify-center gap-3">
            <button class="btn px-3 text-sm md:text-base rounded-xl md:rounded-2xl md:px-5 py-1.5 md:py-2.5">All
                Project</button>
            <button class="btn px-3 text-sm md:text-base rounded-xl md:rounded-2xl md:px-5 py-1.5 md:py-2.5">Web
                App</button>
            <button
                class="btn px-3 text-sm md:text-base rounded-xl md:rounded-2xl md:px-5 py-1.5 md:py-2.5">Education</button>
            <button class="btn px-3 text-sm md:text-base rounded-xl md:rounded-2xl md:px-5 py-1.5 md:py-2.5">Social
                Media</button>
            <button class="btn px-3 text-sm md:text-base rounded-xl md:rounded-2xl md:px-5 py-1.5 md:py-2.5">IT
                Support</button>
            <button
                class="btn px-3 text-sm md:text-base rounded-xl md:rounded-2xl md:px-5 py-1.5 md:py-2.5">Dashboard</button>
        </div>

        <div class="grid lg:grid-cols-4 grid-cols-1 gap-5 items-center mb-5">
            <div class="porto-card" data-category="Web-Development">
                <img class="rounded-t-2xl object-cover w-full h-48" src="{{ asset('img/bg-menu.jpg') }}" alt="Project">
                <div class="p-1.5 lg:p-3 text-center space-y-2.5">
                    <h2 class="text-xl font-bold text-(--color-primary-900)">Website App - Warung Siyas</h2>
                    <p class="text-sm text-(--color-primary-700)">
                        Dibangun sepenuhnya dari awal — mulai dari desain UI, struktur database,
                        hingga fitur interaktif berbasis Laravel.
                    </p>
                    <div class="tag-tech">
                        <span class="tech">laravel</span>
                        <span class="tech">tailwindcss</span>
                        <span class="tech">livewire</span>
                    </div>
                    <a href="{{ route('warungsiyas') }}"
                        class="website-btn w-full rounded-xl inline-block text-center py-2 px-4">
                        📂 Detail Project
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- Section: Evolution Showcase - Edukasi Web Tier untuk klien UMKM --}}
    <section class="bg-(--color-primary-400) py-10 px-4 md:px-8">

        {{-- Header --}}
        <div class="text-center max-w-2xl mx-auto mb-10">
            <h2 class="text-2xl md:text-4xl font-bold text-(--color-primary-100) mb-3">
                Pilih Solusi Digital yang Tepat
            </h2>
            <p class="text-(--color-primary-200) text-base md:text-lg leading-relaxed">
                Setiap bisnis punya kebutuhan yang berbeda. Mulai dari yang paling simpel
                hingga yang paling powerful — semua bisa dimulai dari mana pun kamu berada sekarang.
            </p>
        </div>

        {{-- Tier Cards --}}
        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-5 max-w-7xl mx-auto">

            {{-- Web 1.0 - Landing Page --}}
            <div class="bg-white rounded-2xl overflow-hidden shadow-md flex flex-col">
                {{-- Badge --}}
                <div class="bg-(--color-primary-100) px-4 py-2 flex items-center justify-between">
                    <span class="text-xs font-bold uppercase tracking-widest text-(--color-primary-700)">Web 1.0</span>
                    <span
                        class="text-xs bg-(--color-primary-300) text-(--color-primary-900) px-2 py-0.5 rounded-full font-medium">Landing
                        Page</span>
                </div>

                {{-- Preview --}}
                <a href="https://webporto-1-0.vercel.app" target="_blank" class="block overflow-hidden">
                    <img src="{{ asset('img/porto1.png') }}" alt="Preview Landing Page"
                        class="w-full h-44 object-cover hover:scale-105 transition-transform duration-300">
                </a>

                {{-- Content --}}
                <div class="p-5 flex flex-col flex-1">
                    <h4 class="text-lg font-bold text-(--color-primary-950) mb-1">Landing Page</h4>
                    <p class="text-sm text-(--color-primary-700) mb-4 leading-relaxed">
                        Cocok untuk bisnis yang baru mulai online dan butuh kehadiran digital yang cepat, ringkas, dan
                        profesional.
                    </p>

                    {{-- Cocok untuk --}}
                    <p class="text-xs font-semibold text-(--color-primary-500) uppercase tracking-wider mb-1">Cocok
                        untuk</p>
                    <p class="text-sm text-(--color-primary-800) mb-4">UMKM baru, toko offline yang mau go online,
                        personal brand.</p>

                    {{-- Fitur --}}
                    <p class="text-xs font-semibold text-(--color-primary-500) uppercase tracking-wider mb-2">Fitur
                        Utama</p>
                    <ul class="text-sm text-(--color-primary-800) space-y-1 mb-5">
                        <li class="flex items-start gap-2"><span class="text-green-500 mt-0.5">✓</span> 1 halaman
                            informatif</li>
                        <li class="flex items-start gap-2"><span class="text-green-500 mt-0.5">✓</span> Mobile friendly
                        </li>
                        <li class="flex items-start gap-2"><span class="text-green-500 mt-0.5">✓</span> SEO dasar</li>
                        <li class="flex items-start gap-2"><span class="text-green-500 mt-0.5">✓</span> Integrasi tombol
                            WhatsApp</li>
                        <li class="flex items-start gap-2"><span class="text-green-500 mt-0.5">✓</span> Tanpa biaya
                            hosting server</li>
                    </ul>

                    {{-- Estimasi --}}
                    <div class="bg-(--color-primary-50) rounded-xl px-4 py-3 mb-5 text-sm">
                        <div class="flex justify-between mb-1">
                            <span class="text-(--color-primary-600)">Estimasi waktu</span>
                            <span class="font-semibold text-(--color-primary-900)">3–7 hari</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-(--color-primary-600)">Mulai dari</span>
                            <span class="font-semibold text-(--color-primary-900)">Rp 500K</span>
                        </div>
                    </div>

                    <a href="{{ route('contact') }}"
                        class="mt-auto block text-center bg-(--color-primary-700) hover:bg-(--color-primary-800) text-white text-sm font-semibold py-2.5 rounded-xl transition-colors duration-200">
                        Mulai dari sini →
                    </a>
                </div>
            </div>

            {{-- Web 2.0 - Web App --}}
            <div class="bg-white rounded-2xl overflow-hidden shadow-md flex flex-col">
                <div class="bg-(--color-primary-100) px-4 py-2 flex items-center justify-between">
                    <span class="text-xs font-bold uppercase tracking-widest text-(--color-primary-700)">Web 2.0</span>
                    <span
                        class="text-xs bg-(--color-primary-300) text-(--color-primary-900) px-2 py-0.5 rounded-full font-medium">Web
                        App</span>
                </div>

                <a href="#" class="block overflow-hidden">
                    <img src="#" alt="Preview Web App"
                        class="w-full h-44 object-cover hover:scale-105 transition-transform duration-300">
                </a>

                <div class="p-5 flex flex-col flex-1">
                    <h4 class="text-lg font-bold text-(--color-primary-950) mb-1">Web Application</h4>
                    <p class="text-sm text-(--color-primary-700) mb-4 leading-relaxed">
                        Untuk bisnis yang sudah berjalan dan butuh sistem — kelola produk, pelanggan, atau transaksi
                        secara digital.
                    </p>

                    <p class="text-xs font-semibold text-(--color-primary-500) uppercase tracking-wider mb-1">Cocok
                        untuk</p>
                    <p class="text-sm text-(--color-primary-800) mb-4">UMKM aktif, toko online, bisnis dengan tim
                        kecil.
                    </p>

                    <p class="text-xs font-semibold text-(--color-primary-500) uppercase tracking-wider mb-2">Fitur
                        Utama</p>
                    <ul class="text-sm text-(--color-primary-800) space-y-1 mb-5">
                        <li class="flex items-start gap-2"><span class="text-green-500 mt-0.5">✓</span> Login &
                            manajemen user</li>
                        <li class="flex items-start gap-2"><span class="text-green-500 mt-0.5">✓</span> Dashboard &
                            laporan</li>
                        <li class="flex items-start gap-2"><span class="text-green-500 mt-0.5">✓</span> Kelola produk
                            / layanan</li>
                        <li class="flex items-start gap-2"><span class="text-green-500 mt-0.5">✓</span> Notifikasi &
                            interaksi user</li>
                        <li class="flex items-start gap-2"><span class="text-green-500 mt-0.5">✓</span> Database
                            terstruktur</li>
                    </ul>

                    <div class="bg-(--color-primary-50) rounded-xl px-4 py-3 mb-5 text-sm">
                        <div class="flex justify-between mb-1">
                            <span class="text-(--color-primary-600)">Estimasi waktu</span>
                            <span class="font-semibold text-(--color-primary-900)">2–6 minggu</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-(--color-primary-600)">Mulai dari</span>
                            <span class="font-semibold text-(--color-primary-900)">Rp 3.000K</span>
                        </div>
                    </div>

                    <a href="{{ route('contact') }}"
                        class="mt-auto block text-center bg-(--color-primary-700) hover:bg-(--color-primary-800) text-white text-sm font-semibold py-2.5 rounded-xl transition-colors duration-200">
                        Konsultasi gratis →
                    </a>
                </div>
            </div>

            {{-- Web 2.5 - Advanced App --}}
            <div
                class="bg-white rounded-2xl overflow-hidden shadow-lg flex flex-col ring-2 ring-(--color-primary-700) relative">
                {{-- Most Popular Badge --}}
                {{-- <div class="absolute top-0 left-1/2 -translate-x-1/2 -translate-y-1/2 z-10">
                    <span class="bg-(--color-primary-700) text-white text-xs font-bold px-3 py-1 rounded-full shadow">⭐
                        Paling Banyak Dipilih</span>
                </div> --}}

                <div class="bg-(--color-primary-700) px-4 py-2 flex items-center justify-between">
                    <span class="text-xs font-bold uppercase tracking-widest text-(--color-primary-100)">Web 2.5</span>
                    <span class="bg-(--color-primary-700) text-white text-xs font-bold px-3 py-1 rounded-full shadow">⭐
                        Paling Banyak Dipilih</span>
                    <span
                        class="text-xs bg-(--color-primary-500) text-white px-2 py-0.5 rounded-full font-medium">Advanced
                        App</span>
                </div>

                <a href="#" class="block overflow-hidden">
                    <img src="#" alt="Preview Advanced App"
                        class="w-full h-44 object-cover hover:scale-105 transition-transform duration-300">
                </a>

                <div class="p-5 flex flex-col flex-1">
                    <h4 class="text-lg font-bold text-(--color-primary-950) mb-1">Advanced Web App</h4>
                    <p class="text-sm text-(--color-primary-700) mb-4 leading-relaxed">
                        Bisnis yang tumbuh butuh sistem yang ikut tumbuh. Lebih dari sekadar website — ini adalah
                        platform operasional bisnis kamu.
                    </p>

                    <p class="text-xs font-semibold text-(--color-primary-500) uppercase tracking-wider mb-1">Cocok
                        untuk</p>
                    <p class="text-sm text-(--color-primary-800) mb-4">UMKM yang sedang scale up, multi-cabang, atau
                        butuh integrasi sistem.</p>

                    <p class="text-xs font-semibold text-(--color-primary-500) uppercase tracking-wider mb-2">Fitur
                        Utama</p>
                    <ul class="text-sm text-(--color-primary-800) space-y-1 mb-5">
                        <li class="flex items-start gap-2"><span class="text-green-500 mt-0.5">✓</span> Semua fitur
                            Web 2.0</li>
                        <li class="flex items-start gap-2"><span class="text-green-500 mt-0.5">✓</span> API &
                            integrasi pihak ketiga</li>
                        <li class="flex items-start gap-2"><span class="text-green-500 mt-0.5">✓</span> Role &
                            permission kompleks</li>
                        <li class="flex items-start gap-2"><span class="text-green-500 mt-0.5">✓</span> Analitik &
                            reporting lanjutan</li>
                        <li class="flex items-start gap-2"><span class="text-green-500 mt-0.5">✓</span> Performa &
                            keamanan optimal</li>
                    </ul>

                    <div class="bg-(--color-primary-50) rounded-xl px-4 py-3 mb-5 text-sm">
                        <div class="flex justify-between mb-1">
                            <span class="text-(--color-primary-600)">Estimasi waktu</span>
                            <span class="font-semibold text-(--color-primary-900)">1–3 bulan</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-(--color-primary-600)">Mulai dari</span>
                            <span class="font-semibold text-(--color-primary-900)">Rp 8.000K</span>
                        </div>
                    </div>

                    <a href="{{ route('contact') }}"
                        class="mt-auto block text-center bg-(--color-primary-700) hover:bg-(--color-primary-800) text-white text-sm font-semibold py-2.5 rounded-xl transition-colors duration-200">
                        Konsultasi gratis →
                    </a>
                </div>
            </div>

            {{-- Web 3.0 - Ecosystem --}}
            <div class="bg-white rounded-2xl overflow-hidden shadow-md flex flex-col opacity-90">
                <div class="bg-(--color-primary-200) px-4 py-2 flex items-center justify-between">
                    <span class="text-xs font-bold uppercase tracking-widest text-(--color-primary-600)">Web 3.0</span>
                    <span
                        class="text-xs bg-(--color-primary-100) text-(--color-primary-700) px-2 py-0.5 rounded-full font-medium">🔭
                        Coming Soon</span>
                </div>

                <div class="block overflow-hidden relative">
                    <img src="#" alt="Preview Web 3.0" class="w-full h-44 object-cover opacity-60">
                    <div class="absolute inset-0 flex items-center justify-center">
                        <span
                            class="bg-white/80 text-(--color-primary-700) text-sm font-semibold px-4 py-2 rounded-full">Segera
                            Hadir</span>
                    </div>
                </div>

                <div class="p-5 flex flex-col flex-1">
                    <h4 class="text-lg font-bold text-(--color-primary-950) mb-1">Digital Ecosystem</h4>
                    <p class="text-sm text-(--color-primary-700) mb-4 leading-relaxed">
                        Masa depan bisnis digital — terdesentralisasi, terhubung, dan otonom. Dibangun untuk yang ingin
                        jadi pemain jangka panjang.
                    </p>

                    <p class="text-xs font-semibold text-(--color-primary-500) uppercase tracking-wider mb-1">Cocok
                        untuk</p>
                    <p class="text-sm text-(--color-primary-800) mb-4">Bisnis yang siap bertransisi ke ekosistem
                        digital penuh.</p>

                    <p class="text-xs font-semibold text-(--color-primary-500) uppercase tracking-wider mb-2">Fitur
                        Utama</p>
                    <ul class="text-sm text-(--color-primary-800) space-y-1 mb-5">
                        <li class="flex items-start gap-2"><span class="text-blue-400 mt-0.5">◌</span> Ekosistem
                            multi-platform</li>
                        <li class="flex items-start gap-2"><span class="text-blue-400 mt-0.5">◌</span> Otomatisasi
                            proses bisnis</li>
                        <li class="flex items-start gap-2"><span class="text-blue-400 mt-0.5">◌</span> AI &
                            data-driven decision</li>
                        <li class="flex items-start gap-2"><span class="text-blue-400 mt-0.5">◌</span> Integrasi penuh
                            end-to-end</li>
                        <li class="flex items-start gap-2"><span class="text-blue-400 mt-0.5">◌</span> Skalabilitas
                            tanpa batas</li>
                    </ul>

                    <div
                        class="bg-(--color-primary-50) rounded-xl px-4 py-3 mb-5 text-sm text-(--color-primary-400) italic">
                        Estimasi harga & waktu menyesuaikan kebutuhan
                    </div>

                    <a href="{{ route('contact') }}"
                        class="mt-auto block text-center border-2 border-(--color-primary-400) text-(--color-primary-700) hover:bg-(--color-primary-100) text-sm font-semibold py-2.5 rounded-xl transition-colors duration-200">
                        Diskusi kebutuhan →
                    </a>
                </div>
            </div>

        </div>

        {{-- Bottom note --}}
        <p class="text-center text-(--color-primary-200) text-sm mt-8">
            Tidak yakin butuh yang mana? <a href="{{ route('contact') }}"
                class="underline font-medium text-(--color-primary-100) hover:text-white">Konsultasi gratis</a> dan
            kita tentukan bersama.
        </p>

    </section>

    {{-- Section: Keuntungan & Kekurangan Tier Website - Story Card Glassmorphism --}}
    <section
        class="relative py-16 px-4 md:px-8 overflow-hidden bg-linear-to-br from-(--color-primary-900) via-(--color-primary-800) to-(--color-primary-950)">

        {{-- Background blur blobs --}}
        <div
            class="absolute top-0 left-0 w-96 h-96 bg-(--color-primary-500) opacity-20 rounded-full blur-3xl -translate-x-1/2 -translate-y-1/2 pointer-events-none">
        </div>
        <div
            class="absolute bottom-0 right-0 w-96 h-96 bg-(--color-primary-400) opacity-20 rounded-full blur-3xl translate-x-1/2 translate-y-1/2 pointer-events-none">
        </div>
        <div
            class="absolute top-1/2 left-1/2 w-64 h-64 bg-(--color-primary-600) opacity-10 rounded-full blur-2xl -translate-x-1/2 -translate-y-1/2 pointer-events-none">
        </div>

        {{-- Header --}}
        <div class="text-center max-w-2xl mx-auto mb-12 relative z-10">
            <span class="text-xs font-bold uppercase tracking-widest text-(--color-primary-300) mb-3 block">Biar Nggak
                Salah Pilih</span>
            <h2 class="text-2xl md:text-4xl font-bold text-white mb-4">
                Jujur soal Keuntungan<br>& Keterbatasannya
            </h2>
            <p class="text-(--color-primary-200) text-base leading-relaxed">
                Setiap solusi punya trade-off. Baca ini dulu sebelum memutuskan — supaya ekspektasi kamu dan hasilnya
                nyambung.
            </p>
        </div>

        {{-- Story Cards --}}
        <div class="relative z-10 max-w-5xl mx-auto space-y-6">

            {{-- Web 1.0 --}}
            <div class="rounded-2xl border border-white/20 bg-white/10 backdrop-blur-md p-6 md:p-8 shadow-xl">
                <div class="flex flex-col md:flex-row md:items-start gap-6">

                    {{-- Left: Label --}}
                    <div class="md:w-48 shrink-0">
                        <span
                            class="inline-block text-xs font-bold uppercase tracking-widest bg-white/20 text-white px-3 py-1 rounded-full mb-2">Web
                            1.0</span>
                        <h3 class="text-xl font-bold text-white">Landing Page</h3>
                        <p class="text-(--color-primary-300) text-sm mt-1">Mulai dari sini.</p>
                    </div>

                    {{-- Divider --}}
                    <div class="hidden md:block w-px bg-white/20 self-stretch"></div>

                    {{-- Right: Story --}}
                    <div class="flex-1 space-y-5">

                        {{-- Story intro --}}
                        <p class="text-(--color-primary-100) text-sm leading-relaxed">
                            Bayangkan kamu punya warung makan. Orang-orang yang lewat belum tau nama warungmu, menu kamu
                            apa, dan jam bukamu kapan.
                            Landing page itu ibarat <span class="text-white font-semibold">papan nama besar di depan
                                warung</span> — simpel, tapi bikin orang tau kamu ada.
                        </p>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            {{-- Keuntungan --}}
                            <div class="bg-green-500/10 border border-green-400/30 rounded-xl p-4">
                                <p class="text-green-300 text-xs font-bold uppercase tracking-wider mb-3">Yang kamu
                                    dapat</p>
                                <ul class="space-y-2 text-sm text-green-100">
                                    <li class="flex items-start gap-2"><span class="mt-0.5">✓</span> Cepat jadi — bisa
                                        live dalam seminggu</li>
                                    <li class="flex items-start gap-2"><span class="mt-0.5">✓</span> Biaya murah,
                                        cocok untuk modal awal</li>
                                    <li class="flex items-start gap-2"><span class="mt-0.5">✓</span> Mudah ditemukan
                                        di Google (SEO)</li>
                                    <li class="flex items-start gap-2"><span class="mt-0.5">✓</span> Pelanggan bisa
                                        langsung WhatsApp</li>
                                    <li class="flex items-start gap-2"><span class="mt-0.5">✓</span> Tanpa perlu
                                        server mahal</li>
                                </ul>
                            </div>

                            {{-- Kekurangan --}}
                            <div class="bg-orange-500/10 border border-orange-400/30 rounded-xl p-4">
                                <p class="text-orange-300 text-xs font-bold uppercase tracking-wider mb-3">Yang perlu
                                    kamu tau</p>
                                <ul class="space-y-2 text-sm text-orange-100">
                                    <li class="flex items-start gap-2"><span class="mt-0.5">⚠</span> Tidak bisa terima
                                        order otomatis</li>
                                    <li class="flex items-start gap-2"><span class="mt-0.5">⚠</span> Tidak ada data
                                        pelanggan</li>
                                    <li class="flex items-start gap-2"><span class="mt-0.5">⚠</span> Tidak ada login
                                        atau dashboard</li>
                                    <li class="flex items-start gap-2"><span class="mt-0.5">⚠</span> Konten statis —
                                        update harus manual</li>
                                </ul>
                            </div>
                        </div>

                        <p class="text-(--color-primary-300) text-xs italic">
                            💡 Pas banget kalau kamu baru mulai dan yang penting dulu ada di internet.
                        </p>
                    </div>
                </div>
            </div>

            {{-- Connector --}}
            <div class="flex items-center justify-center gap-3 text-(--color-primary-400) text-sm">
                <div class="h-px flex-1 bg-white/10"></div>
                <span>bisnis makin ramai, butuh lebih</span>
                <div class="h-px flex-1 bg-white/10"></div>
            </div>

            {{-- Web 2.0 --}}
            <div class="rounded-2xl border border-white/20 bg-white/10 backdrop-blur-md p-6 md:p-8 shadow-xl">
                <div class="flex flex-col md:flex-row md:items-start gap-6">

                    <div class="md:w-48 shrink-0">
                        <span
                            class="inline-block text-xs font-bold uppercase tracking-widest bg-white/20 text-white px-3 py-1 rounded-full mb-2">Web
                            2.0</span>
                        <h3 class="text-xl font-bold text-white">Web App</h3>
                        <p class="text-(--color-primary-300) text-sm mt-1">Sistem mulai bekerja.</p>
                    </div>

                    <div class="hidden md:block w-px bg-white/20 self-stretch"></div>

                    <div class="flex-1 space-y-5">
                        <p class="text-(--color-primary-100) text-sm leading-relaxed">
                            Warungmu sekarang rame. Tapi kamu kewalahan ngitung stok manual, balas WhatsApp satu-satu,
                            dan nggak tau produk mana yang paling laku.
                            Web app hadir sebagai <span class="text-white font-semibold">asisten digital yang kerja 24
                                jam</span> — mencatat, mengelola, dan melapor otomatis.
                        </p>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div class="bg-green-500/10 border border-green-400/30 rounded-xl p-4">
                                <p class="text-green-300 text-xs font-bold uppercase tracking-wider mb-3">Yang kamu
                                    dapat</p>
                                <ul class="space-y-2 text-sm text-green-100">
                                    <li class="flex items-start gap-2"><span class="mt-0.5">✓</span> Order & transaksi
                                        tercatat otomatis</li>
                                    <li class="flex items-start gap-2"><span class="mt-0.5">✓</span> Data pelanggan
                                        tersimpan rapi</li>
                                    <li class="flex items-start gap-2"><span class="mt-0.5">✓</span> Dashboard laporan
                                        real-time</li>
                                    <li class="flex items-start gap-2"><span class="mt-0.5">✓</span> Bisa diakses tim
                                        kamu juga</li>
                                    <li class="flex items-start gap-2"><span class="mt-0.5">✓</span> Update konten
                                        sendiri tanpa coding</li>
                                </ul>
                            </div>

                            <div class="bg-orange-500/10 border border-orange-400/30 rounded-xl p-4">
                                <p class="text-orange-300 text-xs font-bold uppercase tracking-wider mb-3">Yang perlu
                                    kamu tau</p>
                                <ul class="space-y-2 text-sm text-orange-100">
                                    <li class="flex items-start gap-2"><span class="mt-0.5">⚠</span> Butuh server &
                                        biaya hosting bulanan</li>
                                    <li class="flex items-start gap-2"><span class="mt-0.5">⚠</span> Waktu
                                        pengembangan lebih lama</li>
                                    <li class="flex items-start gap-2"><span class="mt-0.5">⚠</span> Investasi awal
                                        lebih besar</li>
                                    <li class="flex items-start gap-2"><span class="mt-0.5">⚠</span> Perlu maintenance
                                        berkala</li>
                                </ul>
                            </div>
                        </div>

                        <p class="text-(--color-primary-300) text-xs italic">
                            💡 Ideal kalau kamu udah punya pelanggan tetap dan mau mulai kelola bisnis lebih
                            profesional.
                        </p>
                    </div>
                </div>
            </div>

            {{-- Connector --}}
            <div class="flex items-center justify-center gap-3 text-(--color-primary-400) text-sm">
                <div class="h-px flex-1 bg-white/10"></div>
                <span>bisnis berkembang, butuh sistem yang ikut scale</span>
                <div class="h-px flex-1 bg-white/10"></div>
            </div>

            {{-- Web 2.5 --}}
            <div
                class="rounded-2xl border border-(--color-primary-400)/50 bg-white/15 backdrop-blur-md p-6 md:p-8 shadow-xl ring-1 ring-(--color-primary-400)/30">
                {{-- Most popular tag --}}
                <div class="mb-4">
                    <span
                        class="text-xs bg-(--color-primary-500)/40 text-(--color-primary-100) border border-(--color-primary-400)/40 px-3 py-1 rounded-full font-semibold">⭐
                        Yang paling banyak dipilih klien saya</span>
                </div>

                <div class="flex flex-col md:flex-row md:items-start gap-6">

                    <div class="md:w-48 shrink-0">
                        <span
                            class="inline-block text-xs font-bold uppercase tracking-widest bg-white/20 text-white px-3 py-1 rounded-full mb-2">Web
                            2.5</span>
                        <h3 class="text-xl font-bold text-white">Advanced App</h3>
                        <p class="text-(--color-primary-300) text-sm mt-1">Bisnis yang serius.</p>
                    </div>

                    <div class="hidden md:block w-px bg-white/20 self-stretch"></div>

                    <div class="flex-1 space-y-5">
                        <p class="text-(--color-primary-100) text-sm leading-relaxed">
                            Kamu punya beberapa karyawan, mungkin lebih dari satu cabang, dan sistem yang ada mulai
                            terasa sempit.
                            Di sinilah bisnis butuh <span class="text-white font-semibold">platform yang bisa tumbuh
                                bareng</span> — bukan cuma website, tapi mesin operasional bisnis kamu.
                        </p>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div class="bg-green-500/10 border border-green-400/30 rounded-xl p-4">
                                <p class="text-green-300 text-xs font-bold uppercase tracking-wider mb-3">Yang kamu
                                    dapat</p>
                                <ul class="space-y-2 text-sm text-green-100">
                                    <li class="flex items-start gap-2"><span class="mt-0.5">✓</span> Semua fitur Web
                                        2.0</li>
                                    <li class="flex items-start gap-2"><span class="mt-0.5">✓</span> Integrasi payment
                                        gateway</li>
                                    <li class="flex items-start gap-2"><span class="mt-0.5">✓</span> Multi-role & hak
                                        akses tim</li>
                                    <li class="flex items-start gap-2"><span class="mt-0.5">✓</span> Laporan &
                                        analitik mendalam</li>
                                    <li class="flex items-start gap-2"><span class="mt-0.5">✓</span> Siap integrasi
                                        API eksternal</li>
                                    <li class="flex items-start gap-2"><span class="mt-0.5">✓</span> Arsitektur
                                        scalable jangka panjang</li>
                                </ul>
                            </div>

                            <div class="bg-orange-500/10 border border-orange-400/30 rounded-xl p-4">
                                <p class="text-orange-300 text-xs font-bold uppercase tracking-wider mb-3">Yang perlu
                                    kamu tau</p>
                                <ul class="space-y-2 text-sm text-orange-100">
                                    <li class="flex items-start gap-2"><span class="mt-0.5">⚠</span> Butuh waktu lebih
                                        panjang</li>
                                    <li class="flex items-start gap-2"><span class="mt-0.5">⚠</span> Investasi
                                        terbesar di antara tier lain</li>
                                    <li class="flex items-start gap-2"><span class="mt-0.5">⚠</span> Perlu diskusi
                                        kebutuhan lebih detail</li>
                                    <li class="flex items-start gap-2"><span class="mt-0.5">⚠</span> Kamu harus siap
                                        komitmen proses</li>
                                </ul>
                            </div>
                        </div>

                        <p class="text-(--color-primary-300) text-xs italic">
                            💡 Kalau bisnis kamu sudah punya tim dan transaksi harian yang konsisten — ini investasi
                            yang worth it.
                        </p>
                    </div>
                </div>
            </div>

            {{-- Connector --}}
            <div class="flex items-center justify-center gap-3 text-(--color-primary-400) text-sm">
                <div class="h-px flex-1 bg-white/10"></div>
                <span>dan masa depannya...</span>
                <div class="h-px flex-1 bg-white/10"></div>
            </div>

            {{-- Web 3.0 --}}
            <div
                class="rounded-2xl border border-white/10 bg-white/5 backdrop-blur-md p-6 md:p-8 shadow-xl opacity-80">
                <div class="flex flex-col md:flex-row md:items-start gap-6">

                    <div class="md:w-48 shrink-0">
                        <span
                            class="inline-block text-xs font-bold uppercase tracking-widest bg-white/10 text-(--color-primary-300) px-3 py-1 rounded-full mb-2">Web
                            3.0</span>
                        <h3 class="text-xl font-bold text-(--color-primary-200)">Ekosistem Digital</h3>
                        <p class="text-(--color-primary-400) text-sm mt-1">🔭 Sedang disiapkan.</p>
                    </div>

                    <div class="hidden md:block w-px bg-white/10 self-stretch"></div>

                    <div class="flex-1 space-y-5">
                        <p class="text-(--color-primary-300) text-sm leading-relaxed">
                            Ini bukan sekadar website lagi. Di Web 3.0, bisnis kamu bisa berjalan hampir otomatis —
                            <span class="text-(--color-primary-100) font-semibold">AI yang bantu keputusan, sistem yang
                                saling terhubung, dan data yang bekerja untuk kamu</span>.
                            Masih dalam pengembangan, tapi arahnya sudah jelas.
                        </p>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div class="bg-blue-500/10 border border-blue-400/20 rounded-xl p-4">
                                <p class="text-blue-300 text-xs font-bold uppercase tracking-wider mb-3">Yang akan kamu
                                    dapat</p>
                                <ul class="space-y-2 text-sm text-blue-100">
                                    <li class="flex items-start gap-2"><span class="mt-0.5">◌</span> Otomatisasi
                                        proses bisnis penuh</li>
                                    <li class="flex items-start gap-2"><span class="mt-0.5">◌</span> AI untuk analitik
                                        & rekomendasi</li>
                                    <li class="flex items-start gap-2"><span class="mt-0.5">◌</span> Ekosistem
                                        multi-platform</li>
                                    <li class="flex items-start gap-2"><span class="mt-0.5">◌</span> Data bisnis yang
                                        bekerja sendiri</li>
                                </ul>
                            </div>

                            <div class="bg-orange-500/10 border border-orange-400/20 rounded-xl p-4">
                                <p class="text-orange-300 text-xs font-bold uppercase tracking-wider mb-3">Yang perlu
                                    dipertimbangkan</p>
                                <ul class="space-y-2 text-sm text-orange-100">
                                    <li class="flex items-start gap-2"><span class="mt-0.5">⚠</span> Butuh fondasi Web
                                        2.5 yang kuat dulu</li>
                                    <li class="flex items-start gap-2"><span class="mt-0.5">⚠</span> Kompleksitas
                                        tinggi, proses panjang</li>
                                    <li class="flex items-start gap-2"><span class="mt-0.5">⚠</span> Investasi
                                        terbesar — butuh komitmen penuh</li>
                                </ul>
                            </div>
                        </div>

                        <p class="text-(--color-primary-400) text-xs italic">
                            🔭 Tertarik jadi yang pertama? <a href="{{ route('contact') }}"
                                class="text-(--color-primary-200) underline">Hubungi saya</a> dan kita diskusi arahnya.
                        </p>
                    </div>
                </div>
            </div>

        </div>

        {{-- Bottom CTA --}}
        <div class="text-center mt-12 relative z-10">
            <p class="text-(--color-primary-300) text-sm mb-4">Masih bingung pilih yang mana?</p>
            <a href="{{ route('contact') }}"
                class="inline-block bg-white text-(--color-primary-900) hover:bg-(--color-primary-100) font-semibold text-sm px-8 py-3 rounded-xl transition-colors duration-200 shadow-lg">
                Konsultasi gratis — 30 menit, no pressure
            </a>
        </div>
    </section>

    <script>
        const buttons = document.querySelectorAll('.btn');
        const cards = document.querySelectorAll('.porto-card');

        buttons.forEach(button => {
            button.addEventListener('click', () => {
                // aktifkan tombol
                buttons.forEach(btn => btn.classList.remove('active'));
                button.classList.add('active');

                const category = button.textContent.trim().toLowerCase().replace(/\s+/g, '-');

                cards.forEach(card => {
                    if (category === 'all-project' || card.dataset.category === category) {
                        card.style.display = 'block';
                    } else {
                        card.style.display = 'none';
                    }
                });
            });
        });
    </script>

</x-app-layout>
