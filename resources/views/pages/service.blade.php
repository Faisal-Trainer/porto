<x-app-layout>

    {{-- SEO --}}
    @section('title', 'Jasa Pembuatan Website Bukittinggi | Layanan & Harga | Faisal Yusra')
    @section(
        'meta_description',
        'Solusi pembuatan website, IT Support, UI/UX Design dan konsultasi digital untuk UMKM & Bisnis di Bukittinggi. Harga transparan mulai dari Rp500rb. Konsultasi gratis sekarang!'
    )
    @section('meta_keywords', 'jasa website bukittinggi, buat website bukittinggi, it support bukittinggi, jasa ui ux bukittinggi, harga pembuatan website bukittinggi, konsultan digital umkm')
    @section('canonical', url()->current())
    <meta name="author" content="Muhammad Faisal Alyusra">
    <meta name="robots" content="index, follow">

    {{-- OPEN GRAPH --}}
    <meta property="og:type" content="website">
    @section('og_title', 'Jasa Pembuatan Website Bukittinggi | Layanan & Harga')
    @section(
        'og_description',
        'Layanan pembuatan website dan solusi digital profesional untuk UMKM di Bukittinggi. Cek paket harga dan layanan kami di sini.'
    )
    @section('og_image', asset('img/profile.webp'))
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:locale" content="id_ID">
    <meta property="og:site_name" content="Faisal Yusra">

    {{-- Twitter / X Card --}}
    <meta name="twitter:card" content="summary_large_image">
    @section('twitter_title', 'Layanan & Harga Pembuatan Website Bukittinggi | Faisal Yusra')
    @section('twitter_description', 'Solusi digital terjangkau dan profesional untuk bisnis Anda di Bukittinggi.')
    @section('twitter_image', asset('img/profile.webp'))

    @push('schemas')
        @php
            $serviceSchema = [
                '@context' => 'https://schema.org',
                '@type' => 'OfferCatalog',
                'name' => 'Layanan Digital Faisal Yusra',
                'url' => route('service'),
                'description' => 'Layanan web development, IT support, UI/UX design, dan konsultasi digital untuk UMKM di Bukittinggi.',
                'provider' => [
                    '@type' => 'Person',
                    '@id' => 'https://faisalyusra.my.id/#person',
                    'name' => 'Faisal Yusra',
                ],
                'areaServed' => [
                    '@type' => 'Place',
                    'name' => 'Bukittinggi, Sumatera Barat, Indonesia',
                ],
                'itemListElement' => [
                    [
                        '@type' => 'Offer',
                        'name' => 'Web Application',
                        'description' => 'Membangun web app modern yang cepat, aman, dan relevan — dari landing page sederhana sampai sistem yang kompleks.',
                        'priceCurrency' => 'IDR',
                        'price' => '500000',
                    ],
                    [
                        '@type' => 'Offer',
                        'name' => 'IT Support & Maintenance',
                        'description' => 'Dukungan teknis menyeluruh agar sistem bisnis berjalan stabil, aman, dan tidak tiba-tiba down.',
                    ],
                    [
                        '@type' => 'Offer',
                        'name' => 'UI/UX Design',
                        'description' => 'Desain antarmuka yang intuitif, fungsional, dan relevan dengan perilaku pasar lokal.',
                    ],
                    [
                        '@type' => 'Offer',
                        'name' => 'Digital Consulting for UMKM',
                        'description' => 'Membantu UMKM menentukan strategi digital yang realistis dan sesuai kondisi bisnis.',
                    ],
                    [
                        '@type' => 'Offer',
                        'name' => 'Goes To School Program',
                        'description' => 'Program edukasi yang membekali talenta muda dengan skill nyata, mindset industri, dan pengalaman proyek langsung.',
                    ],
                    [
                        '@type' => 'Offer',
                        'name' => 'Social Media Handling',
                        'description' => 'Kelola media sosial bisnis secara konsisten dan terarah untuk branding yang kuat.',
                    ],
                ],
            ];

            echo '<script type="application/ld+json">' . json_encode($serviceSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) . '</script>';
        @endphp

        <x-seo-breadcrumb :items="[
            ['name' => 'Home', 'url' => route('home')],
            ['name' => 'Layanan & Harga'],
        ]" />
    @endpush


    {{-- ===================== SERVICE SECTION ===================== --}}
    <section class="py-14 px-4 md:px-8">

        {{-- Header --}}
        <div class="text-center max-w-2xl mx-auto mb-12">
            <span class="text-xs font-bold uppercase tracking-widest text-(--color-primary-500) mb-3 block">Apa yang
                Saya Kerjakan</span>
            <h1 class="text-3xl md:text-5xl font-extrabold text-(--color-primary-950) mb-4">
                Layanan untuk UMKM<br>& Sektor Pendidikan
            </h1>
            <p class="text-sm md:text-base text-(--color-primary-700) leading-relaxed">
                Bukan sekadar jasa — tapi solusi digital yang dirancang sesuai kebutuhan nyata bisnis kamu.
            </p>
        </div>

        {{-- Service Grid --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 max-w-6xl mx-auto">

            <div class="service-card rounded-2xl p-6 flex flex-col">
                <div class="service-icon mb-4"><i class="fi fi-rr-code-simple"></i></div>
                <h2 class="text-xl font-bold text-(--color-primary-950) mb-2">Web Application</h2>
                <p class="text-sm text-(--color-primary-700) mb-4 leading-relaxed flex-1">
                    Bangun website modern yang cepat, aman, dan relevan — dari landing page sederhana sampai sistem
                    yang kompleks.
                </p>
                <ul class="space-y-1.5 text-sm font-semibold text-(--color-primary-900)">
                    <li class="flex items-center gap-2"><span class="text-(--color-primary-500)">→</span> Responsive
                        Design</li>
                    <li class="flex items-center gap-2"><span class="text-(--color-primary-500)">→</span> SEO
                        Optimized</li>
                    <li class="flex items-center gap-2"><span class="text-(--color-primary-500)">→</span> Admin
                        Panel & Dashboard</li>
                </ul>
            </div>

            <div class="service-card rounded-2xl p-6 flex flex-col">
                <div class="service-icon mb-4"><i class="fi fi-rr-microchip"></i></div>
                <h2 class="text-xl font-bold text-(--color-primary-950) mb-2">IT Support & Maintenance</h2>
                <p class="text-sm text-(--color-primary-700) mb-4 leading-relaxed flex-1">
                    Dukungan teknis menyeluruh supaya sistem bisnis kamu berjalan stabil, aman, dan nggak tiba-tiba
                    down.
                </p>
                <ul class="space-y-1.5 text-sm font-semibold text-(--color-primary-900)">
                    <li class="flex items-center gap-2"><span class="text-(--color-primary-500)">→</span> System
                        Maintenance</li>
                    <li class="flex items-center gap-2"><span class="text-(--color-primary-500)">→</span> Hardware &
                        Software Setup</li>
                    <li class="flex items-center gap-2"><span class="text-(--color-primary-500)">→</span> 24/7
                        Support</li>
                </ul>
            </div>

            <div class="service-card rounded-2xl p-6 flex flex-col">
                <div class="service-icon mb-4"><i class="fi fi-rr-layout-fluid"></i></div>
                <h2 class="text-xl font-bold text-(--color-primary-950) mb-2">UI/UX Design</h2>
                <p class="text-sm text-(--color-primary-700) mb-4 leading-relaxed flex-1">
                    Desain antarmuka yang intuitif, enak dilihat, dan bikin pengguna betah — bukan cuma cantik, tapi
                    fungsional.
                </p>
                <ul class="space-y-1.5 text-sm font-semibold text-(--color-primary-900)">
                    <li class="flex items-center gap-2"><span class="text-(--color-primary-500)">→</span> Minimalist
                        Design</li>
                    <li class="flex items-center gap-2"><span class="text-(--color-primary-500)">→</span>
                        Glassmorphism & Clay Style</li>
                    <li class="flex items-center gap-2"><span class="text-(--color-primary-500)">→</span>
                        User-Centered Approach</li>
                </ul>
            </div>

            <div class="service-card rounded-2xl p-6 flex flex-col">
                <div class="service-icon mb-4"><i class="fi fi-rr-chart-line-up"></i></div>
                <h2 class="text-xl font-bold text-(--color-primary-950) mb-2">Digital Consulting for UMKM</h2>
                <p class="text-sm text-(--color-primary-700) mb-4 leading-relaxed flex-1">
                    Bantu UMKM nentuin strategi digital yang realistis — bukan yang kelihatan keren tapi nggak cocok
                    sama kondisi bisnis.
                </p>
                <ul class="space-y-1.5 text-sm font-semibold text-(--color-primary-900)">
                    <li class="flex items-center gap-2"><span class="text-(--color-primary-500)">→</span> Business
                        Analysis</li>
                    <li class="flex items-center gap-2"><span class="text-(--color-primary-500)">→</span> Digital
                        Marketing Roadmap</li>
                    <li class="flex items-center gap-2"><span class="text-(--color-primary-500)">→</span>
                        Technology Integration</li>
                </ul>
            </div>

            <div class="service-card rounded-2xl p-6 flex flex-col">
                <div class="service-icon mb-4"><i class="fi fi-rr-school"></i></div>
                <h2 class="text-xl font-bold text-(--color-primary-950) mb-2">Goes To School Program</h2>
                <p class="text-sm text-(--color-primary-700) mb-4 leading-relaxed flex-1">
                    Program edukasi yang membekali talenta muda dengan skill nyata, mindset industri, dan pengalaman
                    proyek langsung.
                </p>
                <ul class="space-y-1.5 text-sm font-semibold text-(--color-primary-900)">
                    <li class="flex items-center gap-2"><span class="text-(--color-primary-500)">→</span> Workshop
                        & Mentorship</li>
                    <li class="flex items-center gap-2"><span class="text-(--color-primary-500)">→</span> Real
                        Project Experience</li>
                    <li class="flex items-center gap-2"><span class="text-(--color-primary-500)">→</span> Career
                        Guidance</li>
                </ul>
            </div>

            <div class="service-card rounded-2xl p-6 flex flex-col">
                <div class="service-icon mb-4"><i class="fi fi-rr-share"></i></div>
                <h2 class="text-xl font-bold text-(--color-primary-950) mb-2">Social Media Handling</h2>
                <p class="text-sm text-(--color-primary-700) mb-4 leading-relaxed flex-1">
                    Kelola media sosial bisnis kamu secara konsisten dan terarah — biar branding kuat dan audiens
                    terus tumbuh.
                </p>
                <ul class="space-y-1.5 text-sm font-semibold text-(--color-primary-900)">
                    <li class="flex items-center gap-2"><span class="text-(--color-primary-500)">→</span> Content
                        Planning</li>
                    <li class="flex items-center gap-2"><span class="text-(--color-primary-500)">→</span>
                        Analytics & Growth Strategy</li>
                    <li class="flex items-center gap-2"><span class="text-(--color-primary-500)">→</span> Branding
                        Consistency</li>
                </ul>
            </div>

        </div>
    </section>

    {{-- ===================== PRICE SECTION ===================== --}}
    <section
        class="relative py-16 px-4 md:px-8 overflow-hidden bg-linear-to-br from-(--color-primary-900) via-(--color-primary-800) to-(--color-primary-950)">

        {{-- Background blobs --}}
        <div
            class="absolute top-0 right-0 w-80 h-80 bg-(--color-primary-500) opacity-20 rounded-full blur-3xl translate-x-1/2 -translate-y-1/2 pointer-events-none">
        </div>
        <div
            class="absolute bottom-0 left-0 w-80 h-80 bg-(--color-primary-400) opacity-20 rounded-full blur-3xl -translate-x-1/2 translate-y-1/2 pointer-events-none">
        </div>

        {{-- Header --}}
        <div class="text-center max-w-xl mx-auto mb-12 relative z-10">
            <span
                class="text-xs font-bold uppercase tracking-widest text-(--color-primary-300) mb-3 block">Investasi</span>
            <h2 class="text-2xl md:text-4xl font-bold text-white mb-3">
                Mulai dari yang Kamu Butuhkan
            </h2>
            <p class="text-(--color-primary-200) text-sm leading-relaxed">
                Setiap bisnis punya titik mulai yang berbeda. Pilih tier yang sesuai — atau konsultasi dulu kalau
                belum yakin.
            </p>
        </div>

        {{-- Pricing Cards --}}
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-5xl mx-auto relative z-10">

            {{-- Web 1.0 --}}
            <div class="rounded-2xl border border-white/20 bg-white/10 backdrop-blur-md p-6 flex flex-col shadow-xl">
                <div class="mb-5">
                    <span
                        class="text-xs font-bold uppercase tracking-widest bg-white/20 text-white px-3 py-1 rounded-full">Web
                        1.0</span>
                    <h3 class="text-xl font-bold text-white mt-3 mb-1">Landing Page</h3>
                    <p class="text-(--color-primary-300) text-sm">Mulai online dengan cepat dan murah.</p>
                </div>
                <div class="border-t border-white/10 pt-5 mb-5">
                    <p class="text-2xl font-extrabold text-white mb-1">Rp 500K <span
                            class="text-sm font-normal text-(--color-primary-300)">/ mulai dari</span></p>
                    <p class="text-xs text-(--color-primary-400)">Estimasi 3–7 hari kerja</p>
                </div>
                <ul class="space-y-2 text-sm text-(--color-primary-100) mb-6 flex-1">
                    <li class="flex items-start gap-2"><span class="text-green-400 mt-0.5">✓</span> 1 Custom
                        Landing Page</li>
                    <li class="flex items-start gap-2"><span class="text-green-400 mt-0.5">✓</span>
                        Mobile-Responsive Design</li>
                    <li class="flex items-start gap-2"><span class="text-green-400 mt-0.5">✓</span> Basic SEO
                        Optimization</li>
                    <li class="flex items-start gap-2"><span class="text-green-400 mt-0.5">✓</span> Integrasi
                        tombol WhatsApp</li>
                    <li class="flex items-start gap-2"><span class="text-green-400 mt-0.5">✓</span> Tanpa biaya
                        hosting server</li>
                </ul>
                <x-button-secondary-orange href="{{ route('contact.create') }}">
                    Mulai dari sini →</x-button-secondary-orange>
            </div>

            {{-- Web 2.0 --}}
            <div class="rounded-2xl border border-white/20 bg-white/10 backdrop-blur-md p-6 flex flex-col shadow-xl">
                <div class="mb-5">
                    <span
                        class="text-xs font-bold uppercase tracking-widest bg-white/20 text-white px-3 py-1 rounded-full">Web
                        2.0</span>
                    <h3 class="text-xl font-bold text-white mt-3 mb-1">Web Application</h3>
                    <p class="text-(--color-primary-300) text-sm">Sistem digital yang kerja buat bisnis kamu.</p>
                </div>
                <div class="border-t border-white/10 pt-5 mb-5">
                    <p class="text-2xl font-extrabold text-white mb-1">Rp 3.000K <span
                            class="text-sm font-normal text-(--color-primary-300)">/ mulai dari</span></p>
                    <p class="text-xs text-(--color-primary-400)">Estimasi 2–6 minggu</p>
                </div>
                <ul class="space-y-2 text-sm text-(--color-primary-100) mb-6 flex-1">
                    <li class="flex items-start gap-2"><span class="text-green-400 mt-0.5">✓</span> Multi-page
                        Business Website</li>
                    <li class="flex items-start gap-2"><span class="text-green-400 mt-0.5">✓</span> Login &
                        manajemen user</li>
                    <li class="flex items-start gap-2"><span class="text-green-400 mt-0.5">✓</span> Admin
                        Dashboard</li>
                    <li class="flex items-start gap-2"><span class="text-green-400 mt-0.5">✓</span> SEO Strategy
                        Implementation</li>
                    <li class="flex items-start gap-2"><span class="text-green-400 mt-0.5">✓</span> Performance
                        Optimization</li>
                </ul>
                <x-button-secondary-orange href="{{ route('contact.create') }}">
                    Konsultasi Gratis →</x-button-secondary-orange>
            </div>

            {{-- Web 2.5 --}}
            <div
                class="rounded-2xl border border-(--color-primary-400)/50 bg-white/15 backdrop-blur-md p-6 flex flex-col shadow-xl ring-1 ring-(--color-primary-400)/30 relative">
                {{-- Popular badge --}}
                <div class="absolute -top-3.5 left-1/2 -translate-x-1/2">
                    <span
                        class="bg-(--color-primary-500) text-white text-xs font-bold px-3 py-1 rounded-full shadow whitespace-nowrap">⭐
                        Paling Banyak Dipilih</span>
                </div>
                <div class="mb-5 mt-2">
                    <span
                        class="text-xs font-bold uppercase tracking-widest bg-white/20 text-white px-3 py-1 rounded-full">Web
                        2.5</span>
                    <h3 class="text-xl font-bold text-white mt-3 mb-1">Advanced Web App</h3>
                    <p class="text-(--color-primary-300) text-sm">Platform operasional bisnis yang scalable.</p>
                </div>
                <div class="border-t border-white/10 pt-5 mb-5">
                    <p class="text-2xl font-extrabold text-white mb-1">Rp 8.000K <span
                            class="text-sm font-normal text-(--color-primary-300)">/ mulai dari</span></p>
                    <p class="text-xs text-(--color-primary-400)">Estimasi 1–3 bulan</p>
                </div>
                <ul class="space-y-2 text-sm text-(--color-primary-100) mb-6 flex-1">
                    <li class="flex items-start gap-2"><span class="text-green-400 mt-0.5">✓</span> Semua fitur
                        Web 2.0</li>
                    <li class="flex items-start gap-2"><span class="text-green-400 mt-0.5">✓</span> Business
                        Process Analysis</li>
                    <li class="flex items-start gap-2"><span class="text-green-400 mt-0.5">✓</span> Integrasi API
                        & payment gateway</li>
                    <li class="flex items-start gap-2"><span class="text-green-400 mt-0.5">✓</span> Multi-role &
                        hak akses tim</li>
                    <li class="flex items-start gap-2"><span class="text-green-400 mt-0.5">✓</span> Ongoing
                        Strategic Consultation</li>
                </ul>
                <x-button-primary-orange href="{{ route('contact.create') }}">
                    Apply for Partnership →</x-button-primary-orange>
            </div>

        </div>

        {{-- Note --}}
        <p class="text-center text-(--color-primary-400) text-xs mt-8 relative z-10">
            Harga di atas adalah estimasi awal. Detail final ditentukan setelah diskusi kebutuhan. <a
                href="{{ route('contact.create') }}" class="text-(--color-primary-200) underline">Konsultasi
                gratis</a>
            dulu.
        </p>

    </section>

    {{-- ===================== TESTIMONIAL SECTION ===================== --}}
    <section class="py-14 px-4 md:px-8">

        <div class="text-center max-w-xl mx-auto mb-12">
            <span class="text-xs font-bold uppercase tracking-widest text-(--color-primary-500) mb-3 block">Kata
                Mereka</span>
            <h2 class="text-2xl md:text-3xl font-bold text-(--color-primary-950) mb-3">
                Dipercaya oleh Bisnis yang Tumbuh
            </h2>
            <p class="text-sm text-(--color-primary-700)">
                Bukan sekadar proyek selesai — tapi dampak yang terasa.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-5xl mx-auto">

            {{-- Placeholder testimonial 1 --}}
            <div class="service-card rounded-2xl p-6 flex flex-col gap-4">
                <p class="text-sm text-(--color-primary-700) leading-relaxed flex-1 italic">
                    "Sebelumnya orderan masih dicatat manual di buku. Sekarang semua masuk sistem, laporan langsung
                    kelihatan. Beda banget operasionalnya."
                </p>
                <div class="flex items-center gap-3 border-t border-(--color-primary-100) pt-4">
                    <div
                        class="w-10 h-10 rounded-full bg-(--color-primary-200) flex items-center justify-center text-(--color-primary-600) font-bold text-sm shrink-0">
                        A
                    </div>
                    <div>
                        <p class="text-sm font-bold text-(--color-primary-950)">Nama Klien</p>
                        <p class="text-xs text-(--color-primary-500)">Pemilik UMKM, Kota</p>
                    </div>
                </div>
            </div>

            {{-- Placeholder testimonial 2 --}}
            <div class="service-card rounded-2xl p-6 flex flex-col gap-4">
                <p class="text-sm text-(--color-primary-700) leading-relaxed flex-1 italic">
                    "Website-nya simpel tapi kelihatan profesional. Pelanggan jadi lebih percaya dan langsung bisa
                    hubungi lewat WhatsApp."
                </p>
                <div class="flex items-center gap-3 border-t border-(--color-primary-100) pt-4">
                    <div
                        class="w-10 h-10 rounded-full bg-(--color-primary-200) flex items-center justify-center text-(--color-primary-600) font-bold text-sm shrink-0">
                        B
                    </div>
                    <div>
                        <p class="text-sm font-bold text-(--color-primary-950)">Nama Klien</p>
                        <p class="text-xs text-(--color-primary-500)">Pemilik UMKM, Kota</p>
                    </div>
                </div>
            </div>

            {{-- Placeholder testimonial 3 --}}
            <div class="service-card rounded-2xl p-6 flex flex-col gap-4">
                <p class="text-sm text-(--color-primary-700) leading-relaxed flex-1 italic">
                    "Prosesnya jelas dari awal, nggak pake ribet. Dikasih tau step by step-nya dan hasilnya sesuai
                    sama yang dibahas."
                </p>
                <div class="flex items-center gap-3 border-t border-(--color-primary-100) pt-4">
                    <div
                        class="w-10 h-10 rounded-full bg-(--color-primary-200) flex items-center justify-center text-(--color-primary-600) font-bold text-sm shrink-0">
                        C
                    </div>
                    <div>
                        <p class="text-sm font-bold text-(--color-primary-950)">Nama Klien</p>
                        <p class="text-xs text-(--color-primary-500)">Pemilik UMKM, Kota</p>
                    </div>
                </div>
            </div>

        </div>

    </section>

</x-app-layout>
