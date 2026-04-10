<x-app-layout>

    {{-- SEO --}}
    @section('title', 'Tentang Faisal Yusra | Web Developer & Konsultan Digital Bukittinggi')
    @section(
        'meta_description',
        'Pelajari profil Faisal Yusra, Web Developer spesialis Laravel dan Konsultan Digital di Bukittinggi. Berpengalaman dalam memberdayakan UMKM dan talent muda melalui solusi teknologi.'
    )
    @section('meta_keywords', 'tentang Faisal Yusra, web developer bukittinggi, programmer laravel bukittinggi, konsultan it bukittinggi, profil developer sumatera barat')
    @section('canonical', url()->current())
    <meta name="author" content="Muhammad Faisal Alyusra">
    <meta name="robots" content="index, follow">

    {{-- OPEN GRAPH --}}
    <meta property="og:type" content="website">
    @section('og_title', 'Tentang Faisal Yusra | Web Developer & Konsultan Digital Bukittinggi')
    @section(
        'og_description',
        'Profil profesional Faisal Yusra: Web Developer dan Konsultan Digital berpengalaman di Bukittinggi, Sumatera Barat.'
    )
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
    <section class="py-14 px-4 md:px-8">

        <div class="text-center max-w-xl mx-auto mb-12">
            <span class="text-xs font-bold uppercase tracking-widest text-(--color-primary-500) mb-2 block">Siapa
                Saya</span>
            <h1 class="text-3xl md:text-4xl font-bold text-(--color-primary-950) mb-3">About Me</h1>
            <p class="text-sm md:text-base text-(--color-primary-700)">
                Passionate about empowering businesses through technology.
            </p>
        </div>

        {{-- Journey + Skills --}}
        <div class="grid md:grid-cols-2 grid-cols-1 gap-6 max-w-5xl mx-auto items-start mb-10">

            {{-- My Journey --}}
            <div class="card h-full p-6 flex flex-col gap-4">
                <h2 class="text-xl font-bold text-(--color-primary-950) underline decoration-(--color-accent-500)">
                    My Journey
                </h2>
                <div class="space-y-3 text-sm text-(--color-primary-800) leading-relaxed">
                    <p>
                        Saya adalah seorang web developer yang berspesialisasi dalam Laravel, Livewire, dan Tailwind
                        CSS.
                        Dengan filosofi bahwa teknologi adalah cerminan dari ketekunan dan kejujuran, saya berkomitmen
                        untuk memberikan solusi digital terbaik.
                    </p>
                    <p>
                        Perjalanan saya ditempa oleh berbagai pengalaman yang menuntut ketahanan, strategi, dan disiplin
                        —
                        membentuk pola pikir visioner, daya juang, serta konsistensi nilai yang kini saya terapkan
                        dalam setiap proyek digital.
                    </p>
                    <p>
                        Saat ini saya fokus pada pengembangan website, dukungan IT, dan konsultasi digital untuk
                        membantu UMKM dan talent berkembang melalui teknologi.
                    </p>
                </div>

                {{-- CTA --}}
                <div class="flex flex-wrap gap-3 pt-2 mt-auto">
                    <a class="button text-sm px-5 py-2.5 rounded-xl font-semibold"
                    href="https://www.linkedin.com/posts/faisalyusra41_cv-muhammad-faishal-siap-untuk-peluang-activity-7270322339672666113-suBA?utm_source=share&utm_medium=member_desktop&rcm=ACoAAEuuADIBiIjPHgeHPI-tKNJ9KJeSmq8hDRQ"
                    target="_blank" rel="noopener noreferrer">
                        Download CV
                    </a>
                    <a class="px-5 py-2.5 text-sm font-semibold rounded-xl border-2 border-(--color-primary-300) text-(--color-primary-700) hover:bg-(--color-primary-100) transition-colors duration-200"
                        href="{{ route('portfolio') }}">
                        See My Work →
                    </a>
                </div>
            </div>

            {{-- Skills --}}
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

                <div class="card p-5 flex flex-col gap-3">
                    <div class="flex items-center gap-2">
                        <i class="skill-icon fi fi-rr-browser"></i>
                        <h3 class="text-sm font-semibold text-(--color-primary-700)">Frontend</h3>
                    </div>
                    <div class="flex flex-wrap flex-col gap-1.5">
                        <span class="skill-item">HTML5</span>
                        <span class="skill-item">CSS3</span>
                        <span class="skill-item">Bootstrap</span>
                        <span class="skill-item">Tailwind CSS</span>
                    </div>
                </div>

                <div class="card p-5 flex flex-col gap-3">
                    <div class="flex items-center gap-2">
                        <i class="skill-icon fi fi-rr-database-management"></i>
                        <h3 class="text-sm font-semibold text-(--color-primary-700)">Backend & DB</h3>
                    </div>
                    <div class="flex flex-wrap gap-1.5">
                        <span class="skill-item">PHP</span>
                        <span class="skill-item">MySQL</span>
                    </div>
                </div>

                <div class="card p-5 flex flex-col gap-3">
                    <div class="flex items-center gap-2">
                        <i class="skill-icon fi fi-rr-globe"></i>
                        <h3 class="text-sm font-semibold text-(--color-primary-700)">Framework</h3>
                    </div>
                    <div class="flex flex-wrap flex-col gap-1.5">
                        <span class="skill-item">Laravel</span>
                        <span class="skill-item">Livewire</span>
                        <span class="skill-item">Next.js</span>
                        <span class="skill-item">Nuxt.js</span>
                        <span class="skill-item">Angular</span>
                    </div>
                </div>

                <div class="card p-5 flex flex-col gap-3">
                    <div class="flex items-center gap-2">
                        <i class="skill-icon fi fi-rr-bolt"></i>
                        <h3 class="text-sm font-semibold text-(--color-primary-700)">Soft Skills</h3>
                    </div>
                    <div class="flex flex-wrap gap-1.5">
                        <span class="skill-item">Problem Solving</span>
                        <span class="skill-item">Team Leadership</span>
                        <span class="skill-item">Client Communication</span>
                        <span class="skill-item">Project Management</span>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- ===================== VALUES / FILOSOFI ===================== --}}
    <section class="bg-(--color-primary-400) py-14 px-4 md:px-8">
        <div class="text-center max-w-xl mx-auto mb-10">
            <span class="text-xs font-bold uppercase tracking-widest text-(--color-primary-200) mb-2 block">Prinsip
                Kerja</span>
            <h2 class="text-2xl md:text-3xl font-bold text-(--color-primary-100) mb-3">
                Nilai yang Saya Pegang
            </h2>
            <p class="text-(--color-primary-200) text-sm leading-relaxed">
                Bukan sekadar kode — tapi komitmen, kejujuran, dan dampak nyata.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 max-w-4xl mx-auto">
            <div class="card p-6 flex flex-col gap-3 text-center">
                <div class="text-2xl text-(--color-primary-600) mx-auto">🎯</div>
                <h3 class="font-bold text-(--color-primary-950)">Relevansi</h3>
                <p class="text-sm text-(--color-primary-800) leading-relaxed">
                    Setiap solusi yang saya bangun harus relevan dengan kebutuhan nyata bisnis — bukan sekadar keren di
                    atas kertas.
                </p>
            </div>
            <div class="card p-6 flex flex-col gap-3 text-center">
                <div class="text-2xl text-(--color-primary-600) mx-auto">🤝</div>
                <h3 class="font-bold text-(--color-primary-950)">Kejujuran</h3>
                <p class="text-sm text-(--color-primary-800) leading-relaxed">
                    Saya percaya hubungan kerja yang baik dimulai dari komunikasi yang jujur dan ekspektasi yang jelas
                    dari awal.
                </p>
            </div>
            <div class="card p-6 flex flex-col gap-3 text-center">
                <div class="text-2xl text-(--color-primary-600) mx-auto">📈</div>
                <h3 class="font-bold text-(--color-primary-950)">Keberlanjutan</h3>
                <p class="text-sm text-(--color-primary-800) leading-relaxed">
                    Solusi yang baik bukan yang selesai cepat, tapi yang bisa tumbuh dan berkembang bersama bisnis kamu.
                </p>
            </div>
        </div>
    </section>

    {{-- ===================== CTA ===================== --}}
    <section class="py-14 px-4 md:px-8 text-center">
        <div class="max-w-xl mx-auto">
            <h2 class="text-2xl md:text-3xl font-bold text-(--color-primary-950) mb-3">
                Siap Berkolaborasi?
            </h2>
            <p class="text-sm text-(--color-primary-700) mb-6 leading-relaxed">
                Kalau kamu punya proyek, ide, atau sekadar ingin diskusi — pintu selalu terbuka.
            </p>
            <a href="{{ route('contact.create') }}"
                class="inline-block button text-sm font-semibold px-8 py-3 rounded-xl">
                Hubungi Saya →
            </a>
        </div>
    </section>

</x-app-layout>
