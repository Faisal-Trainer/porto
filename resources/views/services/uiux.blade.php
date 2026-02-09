@extends('layouts.app')

@section('title', 'Service')

@section('content')
    <section class="md:p-5">
        <div class="header text-center py-5">
            <h1 class="text-4xl md:text-5xl font-extrabold text-(--color-primary-950)">
                My Service
            </h1>
            <p class="mt-3 text-sm md:text-base text-(--color-primary-900)">
                Solusi digital untuk UMKM & talenta — dari pembangunan website sampai mentoring.
            </p>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-3 gap-6 p-5 bg-(--color-primary-500) overflow-hidden">
            <div class="service-card rounded-2xl shadow-sm p-3 md:p-6 text-center">
                <div class="text-4xl mb-3">💻</div>
                <h3 class="text-xl font-bold mb-2">Web Development</h3>
                <p class="text-sm">Membangun website modern dengan performa tinggi & UI elegan.</p>
            </div>

            <div class="service-card rounded-2xl shadow-lg p-3 md:p-6 text-center">
                <div class="text-4xl mb-3">📱</div>
                <h3 class="text-xl font-bold mb-2">Mobile-Friendly & Responsive Apps</h3>
                <p class="text-sm">Aplikasi ringan & responsif, siap dipakai di semua perangkat.</p>
            </div>

            <div class="service-card rounded-2xl shadow-lg p-3 md:p-6 text-center">
                <div class="text-4xl mb-3">🎨</div>
                <h3 class="text-xl font-bold mb-2">UI/UX Design</h3>
                <p class="text-sm">Mendesain antarmuka yang intuitif dan pengalaman pengguna yang menyenangkan.</p>
            </div>
            <div class="service-card rounded-2xl shadow-lg p-3 md:p-6 text-center">
                <div class="text-4xl mb-3">📊</div>
                <h3 class="text-xl font-semibold mb-3">Digital Consulting for UMKM</h3>
                <p>Strategi digital cerdas untuk mengembangkan bisnismu.</p>
            </div>
            <div class="service-card rounded-2xl shadow-lg p-3 md:p-6 text-center">
                <div class="text-4xl mb-3">👨‍🏫</div>
                <h3 class="text-xl font-semibold mb-3">Training & Mentorship</h3>
                <p>Memberdayakan talenta digital agar siap bersaing.</p>
            </div>
            <div class="service-card rounded-2xl shadow-lg p-3 md:p-6 text-center">
                <div class="text-4xl mb-3">🐳</div>
                <h3 class="text-xl font-semibold mb-3">Cloud & Deployment with Docker</h3>
                <p>Deploy lebih cepat & stabil dengan workflow modern.</p>
            </div>
        </div>
    </section>

    <!-- Services (glassmorphism style) -->
    <section class="md:p-8 p-4">
        <div class="text-center mb-8">
            <h1
                class="text-4xl md:text-5xl font-extrabold text-(--color-primary-950)">
                My Service
            </h1>
            <p class="mt-3 text-sm md:text-base text-gray-600">
                Solusi digital untuk UMKM & talenta — dari pembangunan website sampai mentoring.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8">
            <!-- Web Development -->
            <article
                class="service-card bg-white/10 backdrop-blur-md border border-white/20 rounded-2xl p-6 text-center shadow-md hover:shadow-2xl hover:scale-[1.03] transition-transform duration-300"
                aria-labelledby="svc-webdev">
                <div class="text-4xl mb-4" aria-hidden="true">💻</div>
                <h3 id="svc-webdev" class="text-xl font-semibold text-(--color-primary-700) mb-2">
                    Web Development
                </h3>
                <p class="text-sm text-gray-600">
                    Website modern, cepat, dan elegan sesuai kebutuhan bisnismu.
                </p>
                <a href="#"
                    class="inline-block mt-5 px-4 py-2 rounded-full text-sm font-medium
          border border-transparent bg-(--color-primary-600) text-white hover:bg-(--color-primary-700) transition">
                    Learn more
                </a>
            </article>

            <!-- Responsive Apps -->
            <article
                class="service-card bg-white/10 backdrop-blur-md border border-white/20 rounded-2xl p-6 text-center shadow-md hover:shadow-2xl hover:scale-[1.03] transition-transform duration-300"
                aria-labelledby="svc-responsive">
                <div class="text-4xl mb-4" aria-hidden="true">📱</div>
                <h3 id="svc-responsive" class="text-xl font-semibold text-(--color-primary-700) mb-2">
                    Responsive Apps
                </h3>
                <p class="text-sm text-gray-600">
                    Aplikasi ringan & responsif, siap dipakai di semua perangkat.
                </p>
                <a href="#"
                    class="inline-block mt-5 px-4 py-2 rounded-full text-sm font-medium
          border border-transparent bg-(--color-primary-600) text-white hover:bg-(--color-primary-700) transition">
                    Learn more
                </a>
            </article>

            <!-- UI/UX Design -->
            <article
                class="service-card bg-white/10 backdrop-blur-md border border-white/20 rounded-2xl p-6 text-center shadow-md hover:shadow-2xl hover:scale-[1.03] transition-transform duration-300"
                aria-labelledby="svc-uiux">
                <div class="text-4xl mb-4" aria-hidden="true">🎨</div>
                <h3 id="svc-uiux" class="text-xl font-semibold text-(--color-primary-700) mb-2">
                    UI/UX Design
                </h3>
                <p class="text-sm text-gray-600">
                    Desain intuitif, pengalaman pengguna yang memikat.
                </p>
                <a href="#"
                    class="inline-block mt-5 px-4 py-2 rounded-full text-sm font-medium
          border border-transparent bg-(--color-primary-600) text-white hover:bg-(--color-primary-700) transition">
                    Learn more
                </a>
            </article>

            <!-- Digital Consulting for UMKM -->
            <article
                class="service-card bg-white/10 backdrop-blur-md border border-white/20 rounded-2xl p-6 text-center shadow-md hover:shadow-2xl hover:scale-[1.03] transition-transform duration-300"
                aria-labelledby="svc-consulting">
                <div class="text-4xl mb-4" aria-hidden="true">📊</div>
                <h3 id="svc-consulting" class="text-xl font-semibold text-(--color-primary-700) mb-2">
                    Digital Consulting (UMKM)
                </h3>
                <p class="text-sm text-gray-600">
                    Strategi digital cerdas untuk mengembangkan bisnismu.
                </p>
                <a href="#"
                    class="inline-block mt-5 px-4 py-2 rounded-full text-sm font-medium
          border border-transparent bg-(--color-primary-600) text-white hover:bg-(--color-primary-700) transition">
                    Learn more
                </a>
            </article>

            <!-- Training & Mentorship -->
            <article
                class="service-card bg-white/10 backdrop-blur-md border border-white/20 rounded-2xl p-6 text-center shadow-md hover:shadow-2xl hover:scale-[1.03] transition-transform duration-300"
                aria-labelledby="svc-mentorship">
                <div class="text-4xl mb-4" aria-hidden="true">👨‍🏫</div>
                <h3 id="svc-mentorship" class="text-xl font-semibold text-(--color-primary-700) mb-2">
                    Training & Mentorship
                </h3>
                <p class="text-sm text-gray-600">
                    Memberdayakan talenta digital agar siap bersaing.
                </p>
                <a href="#"
                    class="inline-block mt-5 px-4 py-2 rounded-full text-sm font-medium
          border border-transparent bg-(--color-primary-600) text-white hover:bg-(--color-primary-700) transition">
                    Learn more
                </a>
            </article>

            <!-- Cloud & Deployment (Docker) -->
            <article
                class="service-card bg-white/10 backdrop-blur-md border border-white/20 rounded-2xl p-6 text-center shadow-md hover:shadow-2xl hover:scale-[1.03] transition-transform duration-300"
                aria-labelledby="svc-deploy">
                <div class="text-4xl mb-4" aria-hidden="true">🐳</div>
                <h3 id="svc-deploy" class="text-xl font-semibold text-(--color-primary-700) mb-2">
                    Cloud & Deployment
                </h3>
                <p class="text-sm text-gray-600">
                    Deploy lebih cepat & stabil dengan workflow modern.
                </p>
                <a href="#"
                    class="inline-block mt-5 px-4 py-2 rounded-full text-sm font-medium
          border border-transparent bg-(--color-primary-600) text-white hover:bg-(--color-primary-700) transition">
                    Learn more
                </a>
            </article>
        </div>
    </section>

@endsection
