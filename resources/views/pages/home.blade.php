<x-app-layout>

    @section('title', 'Faisal Yusra | Web Developer & Digital Consultant Bukittinggi')
    @section('meta_description',
        'Jasa web development & digital consulting untuk UMKM. Membangun solusi digital yang
        relevan dan berkelanjutan. Konsultasi gratis!')
    @section('meta_keywords', 'web developer Bukittinggi,web app,digital consultant UMKM, jasa website, talent')
    @section('canonical', url()->current())
    <meta name="author" content="Muhammad Faisal Alyusra">
    <meta name="robots" content="index, follow">

    {{-- OPEN GRAPH --}}
    <meta property="og:type" content="website">
    @section('og_title', 'Faisal Yusra | Web Developer & Digital Consultant Bukittinggi')
    @section('og_description',
        'Jasa web development & digital consulting untuk UMKM. Membangun solusi digital yang
        relevan dan berkelanjutan. Konsultasi gratis')
    @section('og_image', asset('img/profile.webp'))
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:locale" content="id_ID">
    <meta property="og:site_name" content="Faisal Yusra">

    {{-- Twitter / X Card --}}
    <meta name="twitter:card" content="summary_large_image">
    @section('twitter_title', 'landing page — faisal yursa')
    @section('twitter_description', 'Landing Page')
    @section('twitter_image', asset('img/profile.webp'))

    {{-- ===================== HERO SECTION ===================== --}}
    <section class="relative min-h-screen flex items-center overflow-hidden px-4 md:px-8 py-16">

        {{-- Background subtle gradient --}}
        <div
            class="absolute inset-0 bg-linear-to-br from-(--color-primary-50) via-white to-(--color-primary-100) pointer-events-none">
        </div>

        {{-- Decorative blob kiri atas --}}
        <div
            class="absolute -top-24 -left-24 w-96 h-96 bg-(--color-primary-200) opacity-40 rounded-full blur-3xl pointer-events-none">
        </div>
        {{-- Decorative blob kanan bawah --}}
        <div
            class="absolute -bottom-24 -right-24 w-96 h-96 bg-(--color-primary-300) opacity-30 rounded-full blur-3xl pointer-events-none">
        </div>

        <div class="relative z-10 max-w-6xl mx-auto w-full grid lg:grid-cols-2 grid-cols-1 gap-12 items-center">

            {{-- Text --}}
            <div class="space-y-6 text-center lg:text-left">

                {{-- Badge --}}
                <div
                    class="inline-flex items-center gap-2 bg-(--color-primary-100) border border-(--color-primary-200) text-(--color-primary-700) text-xs font-semibold px-4 py-1.5 rounded-full">
                    <span class="w-2 h-2 bg-(--color-primary-500) rounded-full animate-pulse"></span>
                    Open for collaboration & new projects
                </div>

                <h1 class="text-4xl md:text-6xl font-extrabold text-(--color-primary-950) leading-tight">
                    Hi, I'm<br>
                    <span class="text-(--color-primary-700)">Faisal Yusra</span>
                </h1>

                <p class="text-lg md:text-xl font-medium text-(--color-primary-800)">
                    Web App Developer & Digital Consultant
                </p>

                <p class="text-base text-(--color-primary-600) leading-relaxed max-w-lg mx-auto lg:mx-0">
                    Membantu UMKM tumbuh lewat teknologi yang relevan, dan memberdayakan talent muda lewat pengalaman
                    proyek nyata.
                </p>

                {{-- CTA Buttons --}}
                <div class="flex flex-wrap gap-3 justify-center lg:justify-start pt-2">
                    <a href="{{ route('portfolio') }}" class="button px-6 py-2.5 text-sm font-semibold rounded-xl">
                        Lihat Portofolio →
                    </a>
                    <a href="{{ route('about') }}"
                        class="px-6 py-2.5 text-sm font-semibold rounded-xl border-2 border-(--color-primary-300) text-(--color-primary-700) hover:bg-(--color-primary-100) transition-colors duration-200">
                        Tentang Saya
                    </a>
                </div>

                {{-- Social Media --}}
                <div class="flex items-center gap-5 justify-center lg:justify-start pt-2">
                    <a href="https://instagram.com/faisalyusra51" target="_blank" rel="noopener noreferrer"
                        class="text-(--color-primary-400) hover:text-(--color-primary-700) transition-colors duration-200 text-3xl">
                        <i class="fi fi-brands-instagram"></i>
                    </a>
                    <a href="https://linkedin.com/in/faisalyusra41" target="_blank" rel="noopener noreferrer"
                        class="text-(--color-primary-400) hover:text-(--color-primary-700) transition-colors duration-200 text-3xl">
                        <i class="fi fi-brands-linkedin"></i>
                    </a>
                    <a href="https://github.com/Faisal-Trainer" target="_blank" rel="noopener noreferrer"
                        class="text-(--color-primary-400) hover:text-(--color-primary-700) transition-colors duration-200 text-3xl">
                        <i class="fi fi-brands-github"></i>
                    </a>
                </div>
            </div>

            {{-- Photo --}}
            <div class="flex justify-center lg:justify-end relative">
                {{-- Decorative ring --}}
                <div class="absolute inset-0 m-auto w-72 h-72 md:w-96 md:h-96 rounded-full border-2 border-(--color-primary-200) border-dashed opacity-60 animate-spin"
                    style="animation-duration: 20s;"></div>
                {{-- Card foto --}}
                <div
                    class="relative z-10 rounded-3xl overflow-hidden w-64 md:w-80 shadow-2xl ring-4 ring-(--color-primary-200)">
                    <img class="w-full aspect-4/5 object-cover object-center" src="{{ asset('img/profile.webp') }}"
                        alt="Faisal Yusra - Web Developer & Digital Consultant">
                    {{-- Overlay gradient bawah --}}
                    <div
                        class="absolute bottom-0 left-0 right-0 h-24 bg-linear-to-t from-(--color-primary-900)/60 to-transparent">
                    </div>
                    <div class="absolute bottom-4 left-4 right-4">
                        <p class="text-white text-sm font-semibold">Web App Developer</p>
                        <p class="text-(--color-primary-200) text-xs">Empowering SMEs & Talents</p>
                    </div>
                </div>
            </div>

        </div>
    </section>

    {{-- ===================== SERVICE SECTION ===================== --}}
    <section class="bg-(--color-primary-400) py-14 px-4 md:px-8">
        <div class="text-center max-w-xl mx-auto mb-10">
            <span class="text-xs font-bold uppercase tracking-widest text-(--color-primary-200) mb-2 block">Apa yang
                Saya Tawarkan</span>
            <h2 class="text-2xl md:text-4xl font-bold text-(--color-primary-100) mb-3">Layanan Kami</h2>
            <p class="text-(--color-primary-200) text-sm leading-relaxed">
                Solusi terintegrasi untuk membina talent digital dan mempercepat pertumbuhan UMKM secara berkelanjutan.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 max-w-6xl mx-auto">

            <div class="card p-5 flex flex-col gap-3">
                <div class="service-icon"><i class="fi fi-rr-code-simple"></i></div>
                <h3 class="text-lg md:text-xl text-(--color-primary-950) font-bold">Web Application</h3>
                <p class="text-sm text-(--color-primary-800) leading-relaxed flex-1">
                    Membangun web app yang dirancang untuk kebutuhan nyata UMKM dan sebagai media belajar praktik bagi
                    talent digital.
                </p>
            </div>

            <div class="card p-5 flex flex-col gap-3">
                <div class="service-icon"><i class="fi fi-rr-microchip"></i></div>
                <h3 class="text-lg md:text-xl text-(--color-primary-950) font-bold">IT Support & Maintenance</h3>
                <p class="text-sm text-(--color-primary-800) leading-relaxed flex-1">
                    Pendampingan teknis berkelanjutan agar sistem UMKM tetap stabil, aman, dan siap berkembang.
                </p>
            </div>

            <div class="card p-5 flex flex-col gap-3">
                <div class="service-icon"><i class="fi fi-rr-layout-fluid"></i></div>
                <h3 class="text-lg md:text-xl text-(--color-primary-950) font-bold">UI/UX Design</h3>
                <p class="text-sm text-(--color-primary-800) leading-relaxed flex-1">
                    Merancang pengalaman pengguna yang sederhana, fungsional, dan relevan dengan perilaku pasar lokal.
                </p>
            </div>

            <div class="card p-5 flex flex-col gap-3">
                <div class="service-icon"><i class="fi fi-rr-chart-line-up"></i></div>
                <h3 class="text-lg md:text-xl text-(--color-primary-950) font-bold">Digital Consulting</h3>
                <p class="text-sm text-(--color-primary-800) leading-relaxed flex-1">
                    Membantu UMKM menentukan strategi digital yang tepat, efisien, dan sesuai dengan tahap bisnis
                    mereka.
                </p>
            </div>

            <div class="card p-5 flex flex-col gap-3">
                <div class="service-icon"><i class="fi fi-rr-school"></i></div>
                <h3 class="text-lg md:text-xl text-(--color-primary-950) font-bold">Goes To School Program</h3>
                <p class="text-sm text-(--color-primary-800) leading-relaxed flex-1">
                    Program pembinaan talent muda melalui edukasi teknologi, mindset industri, dan praktik langsung.
                </p>
            </div>

            <div class="card p-5 flex flex-col gap-3">
                <div class="service-icon"><i class="fi fi-rr-share"></i></div>
                <h3 class="text-lg md:text-xl text-(--color-primary-950) font-bold">Social Media Handling</h3>
                <p class="text-sm text-(--color-primary-800) leading-relaxed flex-1">
                    Mengelola dan mengarahkan media sosial UMKM agar selaras dengan branding dan tujuan bisnis.
                </p>
            </div>

        </div>

        <div class="text-center mt-8">
            <a href="{{ route('service') }}"
                class="inline-block border-2 border-(--color-primary-100) text-(--color-primary-100) hover:bg-(--color-primary-500) text-sm font-semibold px-6 py-2.5 rounded-xl transition-colors duration-200">
                Lihat Detail & Harga →
            </a>
        </div>
    </section>

    {{-- ===================== HOW I WORK SECTION ===================== --}}
    <section
        class="relative min-h-screen py-16 px-4 md:px-8 overflow-hidden bg-linear-to-br from-(--color-primary-900) via-(--color-primary-800) to-(--color-primary-950)">

        <div class="text-center max-w-xl mx-auto mb-10">
            <span class="text-xs font-bold uppercase tracking-widest text-(--color-primary-300) mb-2 block">Proses
                Kerja</span>
            <h2 class="text-2xl md:text-4xl font-bold text-(--color-primary-50) mb-3">How I Work</h2>
            <p class="text-(--color-primary-100) text-sm leading-relaxed">
                Dari masalah bisnis hingga solusi digital yang siap digunakan — terstruktur, transparan, dan
                kolaboratif.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 max-w-6xl mx-auto">

            <div class="card p-5 bg-(--color-primary-50) flex flex-col gap-3">
                <div
                    class="bg-(--color-primary-200) text-(--color-primary-800) p-2 w-min border border-(--color-primary-300) rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" height="20"
                        width="20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            d="M12.18 10.1c-0.1732 -0.15388 -0.3131 -0.34155 -0.4111 -0.55146 -0.098 -0.20991 -0.1521 -0.43765 -0.1589 -0.66921 -0.0068 -0.23157 0.0338 -0.46209 0.1193 -0.67741 0.0855 -0.21531 0.2141 -0.41088 0.3779 -0.5747 0.1638 -0.16381 0.3594 -0.29242 0.5747 -0.37791 0.2153 -0.0855 0.4458 -0.12609 0.6774 -0.11927 0.2316 0.00682 0.4593 0.06089 0.6692 0.15891 0.2099 0.09801 0.3976 0.2379 0.5515 0.41107 0.1704 0.16676 0.3033 0.36788 0.39 0.59 0.0282 0.06711 0.0719 0.12658 0.1275 0.17351 0.0556 0.04694 0.1216 0.08001 0.1925 0.09649 0.069 0.01512 0.1407 0.013 0.2088 -0.00619 0.068 -0.01918 0.1302 -0.05484 0.1812 -0.10381l1.32 -1.33c0.0801 -0.07908 0.1437 -0.17327 0.1872 -0.27713 0.0434 -0.10386 0.0657 -0.21531 0.0657 -0.32788 0 -0.11256 -0.0223 -0.22401 -0.0657 -0.32787 -0.0435 -0.10386 -0.1071 -0.19805 -0.1872 -0.27712l-1.4 -1.39c0.2916 -0.07459 0.5577 -0.22662 0.77 -0.44001 0.159 -0.15881 0.2852 -0.34743 0.3713 -0.55505 0.0861 -0.20763 0.1304 -0.43018 0.1304 -0.65495 0 -0.22476 -0.0443 -0.44731 -0.1304 -0.65494 -0.0861 -0.20762 -0.2123 -0.39624 -0.3713 -0.55506 -0.1588 -0.15904 -0.3474 -0.28521 -0.5551 -0.37129 -0.2076 -0.08609 -0.4301 -0.1304 -0.6549 -0.1304 -0.2248 0 -0.4473 0.04431 -0.6549 0.1304 -0.2077 0.08608 -0.3963 0.21225 -0.5551 0.37129 -0.2134 0.21233 -0.3654 0.47837 -0.44 0.77001l-1.42 -1.43c-0.0791 -0.080128 -0.1733 -0.143746 -0.2771 -0.187168C11.709 0.76943 11.5976 0.74707 11.485 0.74707c-0.1126 0 -0.224 0.02236 -0.3279 0.065782 -0.1038 0.043422 -0.198 0.10704 -0.2771 0.187168l-1.23 1.22c-0.04604 0.04485 -0.08089 0.09989 -0.10173 0.16069 -0.02085 0.0608 -0.02711 0.12564 -0.01827 0.1893 0.00567 0.06417 0.0257 0.12624 0.05858 0.18162 0.03289 0.05539 0.0778 0.10268 0.13142 0.13839 0.10082 0.05893 0.19191 0.13315 0.27 0.21999 0.1732 0.1539 0.313 0.34157 0.4111 0.55148 0.098 0.20991 0.1521 0.43764 0.1589 0.66921 0.0068 0.23157 -0.0338 0.46209 -0.1193 0.67741 -0.0855 0.21531 -0.2141 0.41088 -0.3779 0.5747 -0.16383 0.16381 -0.3594 0.29242 -0.57471 0.37791 -0.21532 0.0855 -0.44584 0.12609 -0.67741 0.11927 -0.23156 -0.00682 -0.4593 -0.06089 -0.66921 -0.15891 -0.20991 -0.09801 -0.39758 -0.2379 -0.55147 -0.41106 -0.07927 -0.08501 -0.15276 -0.17521 -0.22 -0.27 -0.03516 -0.05413 -0.08231 -0.09943 -0.13781 -0.13238 -0.0555 -0.03295 -0.11784 -0.05267 -0.18219 -0.05762 -0.06215 -0.00884 -0.12551 -0.00255 -0.1847 0.01835 -0.0592 0.02089 -0.11247 0.05576 -0.1553 0.10165L5.48 6.40001c-0.08013 0.07908 -0.14375 0.17327 -0.18717 0.27713 -0.04342 0.10386 -0.06578 0.21531 -0.06578 0.32788 0 0.11256 0.02236 0.22401 0.06578 0.32787 0.04342 0.10386 0.10704 0.19805 0.18717 0.27712l4.9 4.89999c0.0791 0.0801 0.1733 0.1438 0.2771 0.1872 0.1039 0.0434 0.2153 0.0658 0.3279 0.0658 0.1126 0 0.224 -0.0224 0.3279 -0.0658 0.1038 -0.0434 0.198 -0.1071 0.2771 -0.1872l1.33 -1.32c0.049 -0.0524 0.0845 -0.116 0.1033 -0.1853 0.0188 -0.0692 0.0204 -0.142 0.0046 -0.212 -0.0157 -0.0701 -0.0484 -0.1351 -0.0951 -0.1896 -0.0467 -0.0545 -0.106 -0.0968 -0.1728 -0.1231 -0.2177 -0.0849 -0.4152 -0.2144 -0.58 -0.38Z"
                            stroke-width="1.5"></path>
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            d="m3.75 23.25 -2 -2.52c-0.63959 -0.7977 -0.991859 -1.7876 -1 -2.81v-5.17c0 -0.3978 0.158035 -0.7794 0.43934 -1.0607 0.2813 -0.2813 0.66284 -0.4393 1.06066 -0.4393 0.39782 0 0.77936 0.158 1.06066 0.4393 0.2813 0.2813 0.43934 0.6629 0.43934 1.0607v3.94"
                            stroke-width="1.5"></path>
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            d="M8.24999 23.2501v-3.14c0.00177 -0.8874 -0.263 -1.7549 -0.76 -2.49l-1.14 -1.72c-0.09879 -0.1643 -0.23002 -0.3067 -0.38567 -0.4185 -0.15566 -0.1118 -0.33248 -0.1907 -0.51966 -0.2319 -0.18718 -0.0412 -0.38079 -0.0437 -0.569 -0.0076 -0.18822 0.0362 -0.36708 0.1103 -0.52567 0.218 -0.28444 0.1886 -0.48953 0.4753 -0.57621 0.8054 -0.08667 0.3301 -0.04887 0.6805 0.10621 0.9846l1.37 2.25"
                            stroke-width="1.5"></path>
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            d="m20.25 23.25 2 -2.52c0.6431 -0.7958 0.9958 -1.7869 1 -2.81v-5.17c0 -0.3978 -0.158 -0.7794 -0.4393 -1.0607s-0.6629 -0.4393 -1.0607 -0.4393c-0.3978 0 -0.7794 0.158 -1.0607 0.4393s-0.4393 0.6629 -0.4393 1.0607v3.88"
                            stroke-width="1.5"></path>
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            d="M15.75 23.2499v-3.14c-0.0018 -0.8874 0.263 -1.7548 0.76 -2.49l1.14 -1.72c0.0978 -0.1653 0.2285 -0.3088 0.3841 -0.4214 0.1556 -0.1127 0.3327 -0.1921 0.5202 -0.2334 0.1876 -0.0413 0.3817 -0.0435 0.5702 -0.0065 0.1885 0.0369 0.3674 0.1123 0.5255 0.2213 0.2861 0.1871 0.4933 0.4731 0.5818 0.8034 0.0886 0.3302 0.0523 0.6815 -0.1018 0.9866l-1.38 2.25"
                            stroke-width="1.5"></path>
                    </svg>
                </div>
                <div>
                    <span class="text-xs font-bold text-(--color-primary-500) uppercase tracking-wider">Step 01</span>
                    <h3 class="text-base md:text-lg text-(--color-primary-950) font-bold mt-0.5">Identifikasi Masalah
                    </h3>
                </div>
                <p class="text-sm text-(--color-primary-700) leading-relaxed">
                    Menggali kebutuhan bisnis, pain point pengguna, dan tujuan jangka panjang agar solusi yang dibangun
                    benar-benar relevan.
                </p>
            </div>

            <div class="card p-5 bg-(--color-primary-50) flex flex-col gap-3">
                <div
                    class="bg-(--color-primary-200) text-(--color-primary-800) p-2 w-min border border-(--color-primary-300) rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" height="20"
                        width="20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            d="M10.546 2.43804c0.1835 0.20369 0.4077 0.36656 0.6582 0.47805 0.2505 0.11148 0.5216 0.16909 0.7958 0.16909 0.2741 0 0.5453 -0.05761 0.7957 -0.16909 0.2505 -0.11149 0.4748 -0.27436 0.6583 -0.47805l0.946 -1.038c0.2711 -0.30006 0.6284 -0.508863 1.023 -0.597745 0.3945 -0.088881 0.8068 -0.053489 1.1804 0.10132 0.3736 0.154805 0.6902 0.421445 0.9062 0.763315 0.216 0.34187 0.3209 0.74222 0.3004 1.14611l-0.071 1.39999c-0.0138 0.27311 0.0299 0.54607 0.128 0.80129 0.0982 0.25522 0.2488 0.48705 0.442 0.68055s0.4248 0.34438 0.6799 0.44293c0.2551 0.09854 0.528 0.14257 0.8011 0.12924l1.4 -0.071c0.4036 -0.0199 0.8035 0.08551 1.1449 0.30178 0.3413 0.21628 0.6075 0.53283 0.7619 0.90628 0.1544 0.37345 0.1895 0.78551 0.1006 1.17972 -0.0889 0.3942 -0.2976 0.75125 -0.5974 1.02222l-1.042 0.93996c-0.2035 0.1838 -0.3661 0.4082 -0.4774 0.6587 -0.1113 0.2506 -0.1688 0.5217 -0.1688 0.7958 0 0.2742 0.0575 0.5453 0.1688 0.7958 0.1113 0.2506 0.2739 0.475 0.4774 0.6587l1.042 0.94c0.3 0.2712 0.5088 0.6285 0.5977 1.023 0.0889 0.3945 0.0535 0.8069 -0.1013 1.1805 -0.1548 0.3736 -0.4214 0.6901 -0.7633 0.9061 -0.3419 0.2161 -0.7422 0.321 -1.1461 0.3004l-1.4 -0.071c-0.2737 -0.014 -0.5474 0.0295 -0.8032 0.1278 -0.2558 0.0984 -0.4881 0.2493 -0.6819 0.4431 -0.1938 0.1938 -0.3448 0.4262 -0.4431 0.682 -0.0984 0.2558 -0.1419 0.5294 -0.1278 0.8031l0.071 1.4c0.0179 0.4019 -0.0884 0.7995 -0.3043 1.1389 -0.2159 0.3394 -0.5311 0.604 -0.9027 0.758 -0.3716 0.1541 -0.7816 0.1899 -1.1743 0.1028 -0.3927 -0.0871 -0.7491 -0.293 -1.0207 -0.5897l-0.941 -1.041c-0.1837 -0.2034 -0.408 -0.366 -0.6585 -0.4773 -0.2504 -0.1113 -0.5214 -0.1688 -0.7955 -0.1688s-0.5451 0.0575 -0.7956 0.1688c-0.2504 0.1113 -0.4747 0.2739 -0.6584 0.4773L9.60598 22.6c-0.27119 0.2981 -0.62771 0.5053 -1.02095 0.5934 -0.39325 0.088 -0.80409 0.0527 -1.17651 -0.1013 -0.37242 -0.1539 -0.68829 -0.419 -0.90457 -0.759 -0.21628 -0.34 -0.32242 -0.7385 -0.30397 -1.1411l0.072 -1.4c0.01408 -0.2737 -0.02946 -0.5473 -0.1278 -0.8031 -0.09835 -0.2558 -0.2493 -0.4882 -0.4431 -0.682 -0.1938 -0.1938 -0.42613 -0.3447 -0.68195 -0.4431 -0.25582 -0.0983 -0.52944 -0.1418 -0.80315 -0.1278l-1.4 0.071c-0.40372 0.0211 -0.80406 -0.0833 -1.14606 -0.2989 -0.34201 -0.2155 -0.60891 -0.5316 -0.764058 -0.9049 -0.155152 -0.3734 -0.19095 -0.7855 -0.102478 -1.18 0.088471 -0.3945 0.296876 -0.7519 0.596596 -1.0232l1.041 -0.94c0.20345 -0.1837 0.36608 -0.4081 0.47739 -0.6587 0.11131 -0.2505 0.16883 -0.5216 0.16883 -0.7958 0 -0.2741 -0.05752 -0.5452 -0.16883 -0.7958 -0.11131 -0.2505 -0.27394 -0.4749 -0.47739 -0.6587l-1.041 -0.94496c-0.29875 -0.271 -0.506517 -0.62765 -0.594899 -1.0212 -0.088382 -0.39355 -0.053066 -0.80479 0.101121 -1.17751 0.154188 -0.37272 0.419718 -0.68872 0.760298 -0.90482 0.34058 -0.21609 0.73959 -0.32173 1.14248 -0.30247l1.4 0.071c0.27423 0.01441 0.54842 -0.02901 0.80478 -0.12747 0.25635 -0.09845 0.48913 -0.24972 0.68321 -0.44399 0.19408 -0.19427 0.34513 -0.4272 0.44333 -0.68364 0.0982 -0.25645 0.14136 -0.53069 0.12668 -0.8049l-0.067 -1.40101c-0.01889 -0.40273 0.08693 -0.80149 0.30304 -1.14185 0.21611 -0.34037 0.53198 -0.60577 0.9045 -0.759982 0.37252 -0.154214 0.78355 -0.189733 1.177 -0.10171 0.39345 0.088022 0.75016 0.295302 1.02146 0.593552l0.94002 1.038Z"
                            stroke-width="1.5"></path>
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            d="M7.5 12.001c0 1.1935 0.47411 2.338 1.31802 3.182 0.84391 0.8439 1.98848 1.318 3.18198 1.318 1.1935 0 2.3381 -0.4741 3.182 -1.318 0.8439 -0.844 1.318 -1.9885 1.318 -3.182s-0.4741 -2.33809 -1.318 -3.182c-0.8439 -0.84392 -1.9885 -1.31802 -3.182 -1.31802s-2.33807 0.4741 -3.18198 1.31802C7.97411 9.66291 7.5 10.8075 7.5 12.001Z"
                            stroke-width="1.5"></path>
                    </svg>
                </div>
                <div>
                    <span class="text-xs font-bold text-(--color-primary-500) uppercase tracking-wider">Step 02</span>
                    <h3 class="text-base md:text-lg text-(--color-primary-950) font-bold mt-0.5">Perencanaan</h3>
                </div>
                <p class="text-sm text-(--color-primary-700) leading-relaxed">
                    Menyusun alur, arsitektur, dan prioritas fitur untuk meminimalkan risiko dan mengoptimalkan waktu
                    pengembangan.
                </p>
            </div>

            <div class="card p-5 bg-(--color-primary-50) flex flex-col gap-3">
                <div
                    class="bg-(--color-primary-200) text-(--color-primary-800) p-2 w-min border border-(--color-primary-300) rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" height="20"
                        width="20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            d="M15 19.5c0 0.9946 -0.3951 1.9484 -1.0983 2.6517 -0.7033 0.7032 -1.6571 1.0983 -2.6517 1.0983 -0.9946 0 -1.94839 -0.3951 -2.65165 -1.0983C7.89509 21.4484 7.5 20.4946 7.5 19.5V0.75H15V19.5Z"
                            stroke-width="1.5"></path>
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            d="M17.25 0.75h-12" stroke-width="1.5"></path>
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="M15 5.25H7.5"
                            stroke-width="1.5"></path>
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="M1.5 12.75h3"
                            stroke-width="1.5"></path>
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="M3 11.25v3"
                            stroke-width="1.5"></path>
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            d="M21 6.75c0.8284 0 1.5 -0.67157 1.5 -1.5s-0.6716 -1.5 -1.5 -1.5 -1.5 0.67157 -1.5 1.5 0.6716 1.5 1.5 1.5Z"
                            stroke-width="1.5"></path>
                    </svg>
                </div>
                <div>
                    <span class="text-xs font-bold text-(--color-primary-500) uppercase tracking-wider">Step 03</span>
                    <h3 class="text-base md:text-lg text-(--color-primary-950) font-bold mt-0.5">Solusi Teknis</h3>
                </div>
                <p class="text-sm text-(--color-primary-700) leading-relaxed">
                    Menentukan solusi teknis yang realistis dan scalable, selaras dengan kebutuhan bisnis dan kapasitas
                    tim.
                </p>
            </div>

            <div class="card p-5 bg-(--color-primary-50) flex flex-col gap-3">
                <div
                    class="bg-(--color-primary-200) text-(--color-primary-800) p-2 w-min border border-(--color-primary-300) rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" height="20"
                        width="20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            d="m7.42 2.58008 -3.67 2.75 3.67 2.75" stroke-width="1.5"></path>
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            d="m16.58 2.58008 3.67 2.75 -3.67 2.75" stroke-width="1.5"></path>
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            d="m12.92 0.75 -1.84 9.17" stroke-width="1.5"></path>
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            d="m3.75 23.25 -2 -2.52c-0.64308 -0.7958 -0.9958 -1.7869 -1 -2.81v-5.17c0 -0.3978 0.158035 -0.7794 0.43934 -1.0607 0.2813 -0.2813 0.66284 -0.4393 1.06066 -0.4393 0.39782 0 0.77936 0.158 1.06066 0.4393 0.2813 0.2813 0.43934 0.6629 0.43934 1.0607v3.87"
                            stroke-width="1.5"></path>
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            d="M8.24999 23.2501v-3.14c0.00178 -0.8874 -0.26299 -1.7549 -0.76 -2.49l-1.14 -1.72c-0.09878 -0.1643 -0.23001 -0.3067 -0.38567 -0.4185 -0.15566 -0.1118 -0.33248 -0.1907 -0.51966 -0.2319 -0.18718 -0.0412 -0.38079 -0.0437 -0.569 -0.0076 -0.18821 0.0362 -0.36708 0.1103 -0.52567 0.218 -0.28272 0.19 -0.48643 0.4767 -0.57295 0.8062 -0.08652 0.3295 -0.04992 0.6793 0.10295 0.9838l1.37 2.25"
                            stroke-width="1.5"></path>
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            d="m20.25 23.25 2 -2.52c0.6431 -0.7958 0.9958 -1.7869 1 -2.81v-5.17c0 -0.3978 -0.158 -0.7794 -0.4393 -1.0607s-0.6629 -0.4393 -1.0607 -0.4393c-0.3978 0 -0.7794 0.158 -1.0607 0.4393s-0.4393 0.6629 -0.4393 1.0607v3.87"
                            stroke-width="1.5"></path>
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            d="M15.75 23.2501v-3.14c-0.0018 -0.8874 0.263 -1.7549 0.76 -2.49l1.14 -1.72c0.0988 -0.1643 0.23 -0.3067 0.3857 -0.4185 0.1556 -0.1118 0.3325 -0.1907 0.5196 -0.2319 0.1872 -0.0412 0.3808 -0.0437 0.569 -0.0076 0.1883 0.0362 0.3671 0.1103 0.5257 0.218 0.2827 0.19 0.4864 0.4767 0.573 0.8062 0.0865 0.3295 0.0499 0.6793 -0.103 0.9838l-1.37 2.25"
                            stroke-width="1.5"></path>
                    </svg>
                </div>
                <div>
                    <span class="text-xs font-bold text-(--color-primary-500) uppercase tracking-wider">Step 04</span>
                    <h3 class="text-base md:text-lg text-(--color-primary-950) font-bold mt-0.5">Pengembangan</h3>
                </div>
                <p class="text-sm text-(--color-primary-700) leading-relaxed">
                    Mengembangkan fitur menggunakan stack modern, clean code, dan best practice agar aplikasi mudah
                    dirawat.
                </p>
            </div>

            <div class="card p-5 bg-(--color-primary-50) flex flex-col gap-3">
                <div
                    class="bg-(--color-primary-200) text-(--color-primary-800) p-2 w-min border border-(--color-primary-300) rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" height="20"
                        width="20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            d="M8.52315 20.5269H2.30421c-0.17123 0.0001 -0.3408 -0.0335 -0.49903 -0.0989 -0.15823 -0.0654 -0.30201 -0.1614 -0.42313 -0.2824 -0.12112 -0.1211 -0.2172 -0.2648 -0.28275 -0.423C1.03374 19.5645 1 19.3949 1 19.2237V5.53635c0 -0.3459 0.13741 -0.67763 0.38199 -0.92221 0.24459 -0.24459 0.57632 -0.382 0.92222 -0.382h3.25954c0.0148 -0.85457 0.36467 -1.66915 0.97425 -2.26826 0.60958 -0.59912 1.43009 -0.93483 2.2848 -0.93483 0.85471 0 1.6752 0.33571 2.2848 0.93483 0.6096 0.59911 0.9594 1.41369 0.9743 2.26826h3.2585c0.1712 0 0.3408 0.03375 0.499 0.0993 0.1581 0.06555 0.3019 0.16164 0.4229 0.28276s0.217 0.2649 0.2824 0.42313c0.0655 0.15823 0.0991 0.3278 0.0989 0.49902v1.22208"
                            stroke-width="1.5"></path>
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            d="M18.8395 9.28369v6.04101l3.6232 3.8481c0.2852 0.3419 0.4658 0.7588 0.52 1.2007 0.0543 0.4419 -0.02 0.8901 -0.214 1.2908 -0.194 0.4008 -0.4994 0.7371 -0.8797 0.9687 -0.3802 0.2316 -0.8192 0.3486 -1.2643 0.337h-7.049c-0.4451 0.0118 -0.8843 -0.1051 -1.2647 -0.3366 -0.3804 -0.2315 -0.686 -0.5678 -0.8801 -0.9686 -0.1941 -0.4008 -0.2685 -0.8491 -0.2142 -1.2911 0.0542 -0.442 0.2348 -0.859 0.52 -1.2009l3.6262 -3.8481V9.28369h3.4766Z"
                            stroke-width="1.5"></path>
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            d="M11.7397 19.1729h10.726" stroke-width="1.5"></path>
                    </svg>
                </div>
                <div>
                    <span class="text-xs font-bold text-(--color-primary-500) uppercase tracking-wider">Step 05</span>
                    <h3 class="text-base md:text-lg text-(--color-primary-950) font-bold mt-0.5">Pengujian</h3>
                </div>
                <p class="text-sm text-(--color-primary-700) leading-relaxed">
                    Melakukan pengujian fungsional untuk memastikan aplikasi stabil, aman, dan siap digunakan oleh
                    pengguna.
                </p>
            </div>

            <div class="card p-5 bg-(--color-primary-50) flex flex-col gap-3">
                <div
                    class="bg-(--color-primary-200) text-(--color-primary-800) p-2 w-min border border-(--color-primary-300) rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" height="20"
                        width="20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            d="m8.25 20.25 0.75 -4.5" stroke-width="1.5"></path>
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="M6 20.25h2.25"
                            stroke-width="1.5"></path>
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="M0.75 11.75h9"
                            stroke-width="1.5"></path>
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            d="M9 15.75H3.75c-0.79565 0 -1.55871 -0.3161 -2.12132 -0.8787C1.06607 14.3087 0.75 13.5456 0.75 12.75v-9c0 -0.79565 0.31607 -1.55871 0.87868 -2.12132C2.19129 1.06607 2.95435 0.75 3.75 0.75h16.5c0.7956 0 1.5587 0.31607 2.1213 0.87868 0.5626 0.56261 0.8787 1.32567 0.8787 2.12132v4.5"
                            stroke-width="1.5"></path>
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            d="M22.6701 19.48c-0.3957 1.1621 -1.1642 2.1609 -2.186 2.8413 -1.0218 0.6803 -2.2398 1.004 -3.4646 0.9207 -1.2247 -0.0832 -2.3877 -0.5687 -3.3081 -1.3811 -0.9204 -0.8123 -1.5466 -1.906 -1.7813 -3.1109"
                            stroke-width="1.5"></path>
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            d="M19.5 15.75h3.75V12" stroke-width="1.5"></path>
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            d="M11.83 15c0.3956 -1.1621 1.1641 -2.161 2.1859 -2.8413 1.0218 -0.6803 2.2398 -1.004 3.4646 -0.9208 1.2247 0.0833 2.3877 0.5688 3.3081 1.3811 0.9204 0.8124 1.5466 1.906 1.7814 3.111"
                            stroke-width="1.5"></path>
                    </svg>
                </div>
                <div>
                    <span class="text-xs font-bold text-(--color-primary-500) uppercase tracking-wider">Step 06</span>
                    <h3 class="text-base md:text-lg text-(--color-primary-950) font-bold mt-0.5">Implementasi</h3>
                </div>
                <p class="text-sm text-(--color-primary-700) leading-relaxed">
                    Deployment ke lingkungan produksi agar aplikasi siap digunakan secara optimal dan stabil.
                </p>
            </div>

        </div>
    </section>

    {{-- ===================== ECOSYSTEM SECTION ===================== --}}
    <section class="bg-(--color-primary-400) py-14 px-4 md:px-8">
        <div class="text-center max-w-xl mx-auto mb-10">
            <span
                class="text-xs font-bold uppercase tracking-widest text-(--color-primary-200) mb-2 block">Ekosistem</span>
            <h2 class="text-2xl md:text-4xl font-bold text-(--color-primary-100) mb-3">About The Ecosystem</h2>
            <p class="text-(--color-primary-200) text-sm leading-relaxed">Menghubungkan UMKM dan talent untuk tumbuh
                bersama.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-5xl mx-auto items-start">

            <div class="text-(--color-primary-100) space-y-4 text-sm leading-relaxed">
                <p>
                    Banyak UMKM memiliki potensi besar namun terkendala teknologi, sementara banyak talent muda memiliki
                    kemampuan namun minim pengalaman nyata.
                </p>
                <p>
                    Ekosistem ini hadir untuk menjembatani keduanya — melalui pembinaan talent dan pendampingan UMKM
                    berbasis solusi digital yang relevan dan berkelanjutan.
                </p>
            </div>

            <div class="grid grid-cols-2 gap-3">
                <div class="card p-4 flex flex-col gap-2">
                    <h3 class="text-base font-bold text-(--color-primary-950)">Talent Development</h3>
                    <p class="text-xs text-(--color-primary-800) leading-relaxed">Membina talent melalui proyek nyata,
                        mentoring terarah, dan standar kerja industri.</p>
                </div>
                <div class="card p-4 flex flex-col gap-2">
                    <h3 class="text-base font-bold text-(--color-primary-950)">UMKM Empowerment</h3>
                    <p class="text-xs text-(--color-primary-800) leading-relaxed">Mendampingi UMKM dalam mengadopsi
                        teknologi yang tepat guna untuk pertumbuhan bisnis.</p>
                </div>
                <div class="card p-4 flex flex-col gap-2 col-span-2">
                    <h3 class="text-base font-bold text-(--color-primary-950)">Sustainable Impact</h3>
                    <p class="text-xs text-(--color-primary-800) leading-relaxed">Menciptakan solusi digital
                        berkelanjutan yang memberi dampak jangka panjang bagi UMKM sekaligus pengalaman nyata bagi
                        talent.</p>
                </div>
            </div>

        </div>
    </section>

    {{-- ===================== JOIN SECTION ===================== --}}
    <section class="py-14 px-4 md:px-8">
        <div class="text-center max-w-xl mx-auto mb-10">
            <span
                class="text-xs font-bold uppercase tracking-widest text-(--color-primary-500) mb-2 block">Bergabung</span>
            <h2 class="text-2xl md:text-4xl font-bold text-(--color-primary-950) mb-3">Become Part of the Ecosystem
            </h2>
            <p class="text-(--color-primary-700) text-sm leading-relaxed">
                Ekosistem ini terbuka bagi UMKM yang ingin berkembang melalui teknologi dan talent muda yang ingin
                bertumbuh melalui pengalaman nyata.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-5 max-w-3xl mx-auto">

            <div class="card p-6 flex flex-col gap-4">
                <h3 class="text-xl font-bold text-(--color-primary-950)">Join as Talent</h3>
                <ul class="space-y-2 text-sm text-(--color-primary-800)">
                    <li class="flex items-start gap-2"><span class="text-(--color-primary-500) mt-0.5">→</span> Proyek
                        nyata bersama UMKM</li>
                    <li class="flex items-start gap-2"><span class="text-(--color-primary-500) mt-0.5">→</span>
                        Mentoring & standar industri</li>
                    <li class="flex items-start gap-2"><span class="text-(--color-primary-500) mt-0.5">→</span>
                        Pengalaman membangun portofolio</li>
                </ul>
                <a href="{{ route('talent.create') }}"
                    class="button mt-auto inline-block text-center text-sm px-5 py-2.5 rounded-xl font-semibold">
                    Join as Talent →
                </a>
            </div>

            <div class="card p-6 flex flex-col gap-4">
                <h3 class="text-xl font-bold text-(--color-primary-950)">Join as UMKM</h3>
                <ul class="space-y-2 text-sm text-(--color-primary-800)">
                    <li class="flex items-start gap-2"><span class="text-(--color-primary-500) mt-0.5">→</span> Solusi
                        digital sesuai kebutuhan bisnis</li>
                    <li class="flex items-start gap-2"><span class="text-(--color-primary-500) mt-0.5">→</span>
                        Pendampingan teknologi terarah</li>
                    <li class="flex items-start gap-2"><span class="text-(--color-primary-500) mt-0.5">→</span>
                        Kolaborasi dengan talent terlatih</li>
                </ul>
                <a href="{{ route('contact.create') }}"
                    class="button mt-auto inline-block text-center text-sm px-5 py-2.5 rounded-xl font-semibold">
                    Join as UMKM →
                </a>
            </div>

        </div>
    </section>


</x-app-layout>
