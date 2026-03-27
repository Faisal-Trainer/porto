<x-app-layout>

    {{-- SEO Meta Tags --}}
    @section('title', 'Join as Talent | Web Developer & Mentor bukittinggi')
    @section('meta_description',
        'Bergabung sebagai Talent untuk menambah pengalaman dalam bidang web development, IT support, UI/UX design,
        copy writing dan digital consulting.')
    @section('meta_keywords',
        'konsultasi, talenta muda, web developer Bukittinggi, mentoring trainer,
        developer Sumatera Barat, Mentoring dengan standar industri, hubungi Faisal Yusra')
    @section('canonical', url()->current())

    <!-- Open Graph -->
    @section('og_title', 'Join as Talent | Web Developer & Mentor bukittinggi')
    @section('og_description',
        'Bergabung sebagai Talent untuk menambah pengalaman dalam bidang web development, IT support, UI/UX design,
        copy writing dan digital consulting.')
    @section('og_image', asset('img/loggo.webp'))

    <!-- Twitter Cards -->
    @section('twitter_title', 'Talent Faisal Yusra - Web Developer & Mentor bukittinggi')
    @section('twitter_description',
        'Bergabung sebagai Talent untuk menambah pengalaman dalam bidang web development, IT support, UI/UX design,
        copy writing dan digital consulting.')
    @section('twitter_image', asset('img/loggo.webp'))


    {{-- ===================== HERO ===================== --}}
    <section
        class="relative min-h-screen py-16 px-4 md:px-8 overflow-hidden bg-linear-to-br from-(--color-primary-900) via-(--color-primary-800) to-(--color-primary-950) flex items-center">

        {{-- Background blobs --}}
        <div
            class="absolute top-0 left-0 w-96 h-96 bg-(--color-primary-500) opacity-20 rounded-full blur-3xl -translate-x-1/2 -translate-y-1/2 pointer-events-none">
        </div>
        <div
            class="absolute bottom-0 right-0 w-96 h-96 bg-(--color-primary-400) opacity-20 rounded-full blur-3xl translate-x-1/2 translate-y-1/2 pointer-events-none">
        </div>
        <div
            class="absolute top-1/2 left-1/2 w-64 h-64 bg-(--color-primary-600) opacity-10 rounded-full blur-2xl -translate-x-1/2 -translate-y-1/2 pointer-events-none">
        </div>

        <div class="relative z-10 max-w-5xl mx-auto w-full grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">

            {{-- Left: Info --}}
            <div class="flex flex-col gap-8">

                <div>
                    <span
                        class="text-xs font-bold uppercase tracking-widest text-(--color-primary-300) mb-3 block">Ekosistem
                        Talent</span>
                    <h1 class="text-3xl md:text-5xl font-extrabold text-white leading-tight mb-4">
                        Tumbuh Lewat<br>Proyek Nyata
                    </h1>
                    <p class="text-(--color-primary-200) text-sm md:text-base leading-relaxed">
                        Bukan sekadar belajar teori — kamu akan terlibat langsung dalam proyek nyata bersama UMKM,
                        dibimbing dengan standar industri, dan membangun portofolio yang bisa kamu banggakan.
                    </p>
                </div>

                {{-- What you get --}}
                <div class="flex flex-col gap-3">
                    <p class="text-xs font-bold uppercase tracking-widest text-(--color-primary-400)">Yang kamu dapat
                    </p>

                    <div class="flex items-start gap-3">
                        <span class="text-green-400 mt-0.5 shrink-0">✓</span>
                        <div>
                            <p class="text-sm font-semibold text-white">Proyek Nyata Bersama UMKM</p>
                            <p class="text-xs text-(--color-primary-300) leading-relaxed">Bukan dummy project — kamu
                                terlibat langsung dalam solusi yang dipakai bisnis sungguhan.</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-3">
                        <span class="text-green-400 mt-0.5 shrink-0">✓</span>
                        <div>
                            <p class="text-sm font-semibold text-white">Mentoring & Standar Industri</p>
                            <p class="text-xs text-(--color-primary-300) leading-relaxed">Dibimbing langsung dengan
                                workflow, code review, dan ekspektasi kerja yang sesuai industri.</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-3">
                        <span class="text-green-400 mt-0.5 shrink-0">✓</span>
                        <div>
                            <p class="text-sm font-semibold text-white">Portofolio yang Bisa Dibuktikan</p>
                            <p class="text-xs text-(--color-primary-300) leading-relaxed">Setiap proyek yang kamu
                                kerjakan bisa jadi bukti nyata kemampuanmu ke calon employer.</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-3">
                        <span class="text-green-400 mt-0.5 shrink-0">✓</span>
                        <div>
                            <p class="text-sm font-semibold text-white">Network & Kolaborasi</p>
                            <p class="text-xs text-(--color-primary-300) leading-relaxed">Terhubung dengan sesama talent
                                dan klien UMKM yang bisa membuka pintu peluang berikutnya.</p>
                        </div>
                    </div>
                </div>

                {{-- Who is this for --}}
                <div class="rounded-2xl border border-white/10 bg-white/5 backdrop-blur-md p-5">
                    <p class="text-xs font-bold uppercase tracking-widest text-(--color-primary-400) mb-3">Cocok untuk
                        kamu yang...</p>
                    <ul class="space-y-1.5 text-sm text-(--color-primary-200)">
                        <li class="flex items-center gap-2"><span class="text-(--color-primary-400)">→</span> Fresh
                            graduate atau masih kuliah di bidang IT</li>
                        <li class="flex items-center gap-2"><span class="text-(--color-primary-400)">→</span> Punya
                            skill dasar web tapi minim pengalaman nyata</li>
                        <li class="flex items-center gap-2"><span class="text-(--color-primary-400)">→</span> Ingin
                            belajar sambil berkontribusi pada bisnis lokal</li>
                        <li class="flex items-center gap-2"><span class="text-(--color-primary-400)">→</span> Siap
                            berkomitmen dan terbuka untuk feedback</li>
                    </ul>
                </div>

            </div>

            {{-- Right: Form --}}
            <div class="rounded-2xl border border-white/20 bg-white/10 backdrop-blur-md p-6 md:p-8 shadow-2xl">

                <h2 class="text-xl font-bold text-white mb-1">Daftar Sekarang</h2>
                <p class="text-(--color-primary-300) text-xs mb-6">Gratis. Tanpa komitmen awal. Kita diskusi dulu.</p>

                {{-- Errors --}}
                @if ($errors->any())
                    <div class="mb-5 p-4 bg-red-500/20 border border-red-400/30 rounded-xl text-red-200 text-xs">
                        <ul class="space-y-1 list-disc list-inside">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                {{-- Success --}}
                @if (session('success'))
                    <div class="mb-5 p-4 bg-green-500/20 border border-green-400/30 rounded-xl text-green-200 text-sm">
                        {{ session('success') }}
                    </div>
                @endif

                <form action="#" method="POST" enctype="multipart/form-data" class="space-y-4">
                    @csrf

                    {{-- Nama & WA --}}
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div class="flex flex-col gap-1.5">
                            <label class="text-xs font-semibold text-(--color-primary-300)" for="name">
                                Nama Lengkap <span class="text-red-400">*</span>
                            </label>
                            <input id="name" name="name" type="text" value="{{ old('name') }}"
                                placeholder="Nama kamu"
                                class="w-full bg-white/10 border border-white/20 text-white placeholder-white/30 text-sm rounded-xl px-4 py-2.5 focus:outline-none focus:ring-2 focus:ring-(--color-primary-400) transition @error('name') @enderror">
                            @error('name')
                                <span class="text-red-400 text-xs">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="flex flex-col gap-1.5">
                            <label class="text-xs font-semibold text-(--color-primary-300)" for="phone">
                                Nomor WhatsApp <span class="text-red-400">*</span>
                            </label>
                            <input id="phone" name="phone" type="text" value="{{ old('phone') }}"
                                placeholder="08xxxxxxxxxx"
                                class="w-full bg-white/10 border border-white/20 text-white placeholder-white/30 text-sm rounded-xl px-4 py-2.5 focus:outline-none focus:ring-2 focus:ring-(--color-primary-400) transitio">
                            @error('phone')
                                <span class="text-red-400 text-xs">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    {{-- Email --}}
                    <div class="flex flex-col gap-1.5">
                        <label class="text-xs font-semibold text-(--color-primary-300)" for="email">
                            Email <span class="text-red-400">*</span>
                        </label>
                        <input id="email" name="email" type="email" value="{{ old('email') }}"
                            placeholder="email@example.com"
                            class="w-full bg-white/10 border border-white/20 text-white placeholder-white/30 text-sm rounded-xl px-4 py-2.5 focus:outline-none focus:ring-2 focus:ring-(--color-primary-400) transition">
                        @error('email')
                            <span class="text-red-400 text-xs">{{ $message }}</span>
                        @enderror
                    </div>

                    {{-- Skill utama --}}
                    <div class="flex flex-col gap-1.5">
                        <label class="text-xs font-semibold text-(--color-primary-300)" for="skill">
                            Skill Utama <span class="text-red-400">*</span>
                        </label>
                        <select id="skill" name="skill"
                            class="w-full bg-white/10 border border-white/20 text-white text-sm rounded-xl px-4 py-2.5 focus:outline-none focus:ring-2 focus:ring-(--color-primary-400) transition ">
                            <option value="" disabled selected class="text-gray-800">Pilih skill utama kamu...
                            </option>
                            <option value="uiux" class="text-gray-800" {{ old('skill') == 'uiux' ? 'selected' : '' }}>
                                UI/UX Design</option>
                            <option value="social_media" class="text-gray-800"
                                {{ old('skill') == 'social_media' ? 'selected' : '' }}>Social Media & Content</option>
                            <option value="copywriting" class="text-gray-800"
                                {{ old('skill') == 'copywriting' ? 'selected' : '' }}>Copy Writing</option>
                            <option value="other" class="text-gray-800"
                                {{ old('skill') == 'other' ? 'selected' : '' }}>Lainnya</option>
                        </select>
                        @error('skill')
                            <span class="text-red-400 text-xs">{{ $message }}</span>
                        @enderror
                    </div>

                    {{-- Pengalaman --}}
                    <div class="flex flex-col gap-1.5">
                        <label class="text-xs font-semibold text-(--color-primary-300)" for="experience">
                            Level Pengalaman <span class="text-red-400">*</span>
                        </label>
                        <select id="experience" name="experience"
                            class="w-full bg-white/10 border border-white/20 text-white text-sm rounded-xl px-4 py-2.5 focus:outline-none focus:ring-2 focus:ring-(--color-primary-400) transition ">
                            <option value="" disabled selected class="text-gray-800">Pilih level kamu...
                            </option>
                            <option value="beginner" class="text-gray-800"
                                {{ old('experience') == 'beginner' ? 'selected' : '' }}>Pemula — baru belajar, belum
                                ada proyek</option>
                            <option value="junior" class="text-gray-800"
                                {{ old('experience') == 'junior' ? 'selected' : '' }}>Junior — ada 1–2 proyek kecil
                            </option>
                            <option value="intermediate" class="text-gray-800"
                                {{ old('experience') == 'intermediate' ? 'selected' : '' }}>Intermediate — pernah kerja
                                tim / freelance</option>
                        </select>
                        @error('experience')
                            <span class="text-red-400 text-xs">{{ $message }}</span>
                        @enderror
                    </div>

                    {{-- Ketersediaan --}}
                    <div class="flex flex-col gap-1.5">
                        <label class="text-xs font-semibold text-(--color-primary-300)" for="availability">
                            Ketersediaan Waktu <span class="text-red-400">*</span>
                        </label>
                        <select id="availability" name="availability"
                            class="w-full bg-white/10 border border-white/20 text-white text-sm rounded-xl px-4 py-2.5 focus:outline-none focus:ring-2 focus:ring-(--color-primary-400) transition ">
                            <option value="" disabled selected class="text-gray-800">Berapa jam per minggu kamu
                                bisa?</option>
                            <option value="lt10" class="text-gray-800"
                                {{ old('availability') == 'lt10' ? 'selected' : '' }}>Kurang dari 10 jam/minggu
                            </option>
                            <option value="10-20" class="text-gray-800"
                                {{ old('availability') == '10-20' ? 'selected' : '' }}>10–20 jam/minggu</option>
                            <option value="20-40" class="text-gray-800"
                                {{ old('availability') == '20-40' ? 'selected' : '' }}>20–40 jam/minggu</option>
                            <option value="fulltime" class="text-gray-800"
                                {{ old('availability') == 'fulltime' ? 'selected' : '' }}>Full-time — siap penuh
                            </option>
                        </select>
                        @error('availability')
                            <span class="text-red-400 text-xs">{{ $message }}</span>
                        @enderror
                    </div>

                    {{-- Tentang diri --}}
                    <div class="flex flex-col gap-1.5">
                        <label class="text-xs font-semibold text-(--color-primary-300)" for="bio">
                            Ceritakan Sedikit Tentang Dirimu <span class="text-red-400">*</span>
                        </label>
                        <textarea id="bio" name="bio" rows="3"
                            placeholder="Skill apa yang kamu kuasai, apa yang ingin kamu pelajari, dan kenapa tertarik bergabung..."
                            class="w-full bg-white/10 border border-white/20 text-white placeholder-white/30 text-sm rounded-xl px-4 py-2.5 focus:outline-none focus:ring-2 focus:ring-(--color-primary-400) transition resize-none">{{ old('bio') }}</textarea>
                        @error('bio')
                            <span class="text-red-400 text-xs">{{ $message }}</span>
                        @enderror
                    </div>

                    {{-- Upload CV --}}
                    <div class="flex flex-col gap-1.5">
                        <label class="text-xs font-semibold text-(--color-primary-300)" for="cv">
                            Upload CV / Portofolio <span
                                class="text-xs text-(--color-primary-400) font-normal">(opsional, PDF/JPG/PNG max
                                5MB)</span>
                        </label>
                        <input id="cv" name="cv" type="file" accept=".pdf,.jpg,.jpeg,.png"
                            class="w-full bg-white/10 border border-white/20 text-white/70 text-sm rounded-xl px-4 py-2.5 focus:outline-none focus:ring-2 focus:ring-(--color-primary-400) transition file:mr-3 file:py-1 file:px-3 file:rounded-lg file:border-0 file:text-xs file:font-semibold file:bg-white/20 file:text-white hover:file:bg-white/30">
                        @error('cv')
                            <span class="text-red-400 text-xs">{{ $message }}</span>
                        @enderror
                    </div>

                    {{-- Submit --}}
                    <button type="submit"
                        class="w-full bg-white text-(--color-primary-900) hover:bg-(--color-primary-100) font-bold text-sm py-3 rounded-xl transition-colors duration-200 shadow-lg mt-2">
                        Daftar Sekarang →
                    </button>

                    <p class="text-center text-(--color-primary-400) text-xs">
                        Dengan mendaftar, kamu menyetujui <a href="{{ route('terms.show') }}"
                            class="underline hover:text-white">Terms of Service</a> dan <a
                            href="{{ route('policy.show') }}" class="underline hover:text-white">Privacy Policy</a>
                        kami.
                    </p>

                </form>
            </div>

        </div>
    </section>

</x-app-layout>
