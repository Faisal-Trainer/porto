    <x-app-layout>

        {{-- SEO Meta Tags --}}
        @section('title', 'Hubungi Saya | Faisal Yusra - Web Developer & Digital Consultant')
        @section('meta_description',
            'Hubungi Faisal Yusra untuk konsultasi web development, IT support, UI/UX design,
            dan digital consulting untuk UMKM. Konsultasi pertama gratis.')
        @section('meta_keywords',
            'konsultasi, landing page, web developer Bukittinggi, digital consultant UMKM,
            developer Sumatera Barat, IT support, hubungi Faisal Yusra')
        @section('canonical', url()->current())

        <!-- Open Graph -->
        @section('og_title', 'Diskusi Faisal Yusra | Web Developer & Digital Consultant')
        @section('og_description',
            'Diskusikan proyek kamu bersama Faisal Yusra. Spesialis web app, IT support, dan
            konsultasi digital untuk UMKM.')
        @section('og_image', asset('img/profile.webp'))

        <!-- Twitter Cards -->
        @section('twitter_title', 'Hubungi Faisal Yusra - Web Developer & Digital Consultant')
        @section('twitter_description',
            'Diskusikan proyek kamu bersama Faisal Yusra. Spesialis web app, IT support, dan
            konsultasi digital untuk UMKM.')
        @section('twitter_image', asset('img/profile.webp'))


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

                {{-- Left: Value proposition --}}
                <div class="flex flex-col gap-8">

                    <div>
                        <span
                            class="text-xs font-bold uppercase tracking-widest text-(--color-primary-300) mb-3 block">Mulai
                            dari sini</span>
                        <h1 class="text-3xl md:text-5xl font-extrabold text-white leading-tight mb-4">
                            Let's Work<br>Together
                        </h1>
                        <p class="text-(--color-primary-200) text-sm md:text-base leading-relaxed">
                            Punya proyek, ide, atau sekadar ingin tahu solusi yang tepat untuk bisnis kamu? Saya selalu
                            terbuka untuk diskusi — tanpa tekanan, tanpa komitmen awal.
                        </p>
                    </div>

                    {{-- Apa yang bisa dibantu --}}
                    <div class="flex flex-col gap-3">
                        <p class="text-xs font-bold uppercase tracking-widest text-(--color-primary-400)">Saya bisa
                            bantu
                            dengan</p>
                        <div class="flex items-start gap-3">
                            <span class="text-green-400 mt-0.5 shrink-0">✓</span>
                            <div>
                                <p class="text-sm font-semibold text-white">Web Application & Landing Page</p>
                                <p class="text-xs text-(--color-primary-300) leading-relaxed">Dari landing page
                                    sederhana
                                    sampai sistem web yang kompleks untuk UMKM.</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <span class="text-green-400 mt-0.5 shrink-0">✓</span>
                            <div>
                                <p class="text-sm font-semibold text-white">Konsultasi Digital UMKM</p>
                                <p class="text-xs text-(--color-primary-300) leading-relaxed">Bantu nentuin strategi dan
                                    solusi digital yang realistis sesuai kondisi bisnis.</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <span class="text-green-400 mt-0.5 shrink-0">✓</span>
                            <div>
                                <p class="text-sm font-semibold text-white">IT Support & Maintenance</p>
                                <p class="text-xs text-(--color-primary-300) leading-relaxed">Pendampingan teknis supaya
                                    sistem bisnis kamu tetap stabil dan aman.</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <span class="text-green-400 mt-0.5 shrink-0">✓</span>
                            <div>
                                <p class="text-sm font-semibold text-white">UI/UX Design & Social Media</p>
                                <p class="text-xs text-(--color-primary-300) leading-relaxed">Desain yang fungsional dan
                                    konten yang selaras dengan branding bisnis kamu.</p>
                            </div>
                        </div>
                    </div>

                    {{-- Kontak info --}}
                    <div class="flex flex-col gap-3">
                        <a href="mailto:faisalyusra51@gmail.com"
                            class="p-4 rounded-2xl border border-white/20 bg-white/10 backdrop-blur-md flex items-center gap-4 hover:bg-white/20 transition-colors duration-200">
                            <div class="text-xl text-(--color-primary-300) shrink-0"><i class="fi fi-rr-envelope"></i>
                            </div>
                            <div>
                                <p class="text-xs font-semibold text-(--color-primary-300)">Email</p>
                                <p class="text-sm text-white">faisalyusra51@gmail.com</p>
                            </div>
                        </a>
                        <a href="https://linkedin.com/in/faisalyusra41" target="_blank" rel="noopener noreferrer"
                            class="p-4 rounded-2xl border border-white/20 bg-white/10 backdrop-blur-md flex items-center gap-4 hover:bg-white/20 transition-colors duration-200">
                            <div class="text-xl text-(--color-primary-300) shrink-0"><i
                                    class="fi fi-brands-linkedin"></i>
                            </div>
                            <div>
                                <p class="text-xs font-semibold text-(--color-primary-300)">LinkedIn</p>
                                <p class="text-sm text-white">linkedin.com/in/faisalyusra41</p>
                            </div>
                        </a>
                        <div
                            class="p-4 rounded-2xl border border-white/20 bg-white/10 backdrop-blur-md flex items-center gap-4">
                            <div class="text-xl text-(--color-primary-300) shrink-0"><i class="fi fi-rr-marker"></i>
                            </div>
                            <div>
                                <p class="text-xs font-semibold text-(--color-primary-300)">Lokasi</p>
                                <p class="text-sm text-white">Bukittinggi, West Sumatra</p>
                            </div>
                        </div>
                    </div>

                    {{-- Mini FAQ --}}
                    <div class="rounded-2xl border border-white/10 bg-white/5 backdrop-blur-md p-5">
                        <p class="text-xs font-bold uppercase tracking-widest text-(--color-primary-400) mb-3">FAQ
                            Singkat
                        </p>
                        <ul class="space-y-2.5 text-sm">
                            <li>
                                <p class="text-white font-semibold">Apakah konsultasi pertama gratis?</p>
                                <p class="text-(--color-primary-300) text-xs">Ya, diskusi awal sepenuhnya gratis dan
                                    tanpa
                                    komitmen.</p>
                            </li>
                            <li>
                                <p class="text-white font-semibold">Berapa lama respons biasanya?</p>
                                <p class="text-(--color-primary-300) text-xs">1×24 jam di hari kerja. Urgent? Hubungi
                                    lewat
                                    WhatsApp langsung.</p>
                            </li>
                            <li>
                                <p class="text-white font-semibold">Apakah bisa kerja remote?</p>
                                <p class="text-(--color-primary-300) text-xs">Ya, sebagian besar proyek dikerjakan
                                    remote.
                                    Untuk klien lokal Bukittinggi bisa tatap muka.</p>
                            </li>
                        </ul>
                    </div>

                </div>

                {{-- Right: Form --}}
                <div class="rounded-2xl border border-white/20 bg-white/10 backdrop-blur-md p-6 md:p-8 shadow-2xl">

                    <h2 class="text-xl font-bold text-white mb-1">Kirim Pesan</h2>
                    <p class="text-(--color-primary-300) text-xs mb-6">Isi form di bawah, saya akan segera menghubungi
                        kamu.
                    </p>

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

                    @if (session('success'))
                        <div
                            class="mb-5 p-4 bg-green-500/20 border border-green-400/30 rounded-xl text-green-200 text-sm">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form action="{{ route('contact.store') }}" method="POST" class="space-y-4">
                        @csrf

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div class="flex flex-col gap-1.5">
                                <label class="text-xs font-semibold text-(--color-primary-300)" for="username">
                                    Nama Lengkap <span class="text-red-400">*</span>
                                </label>
                                <input id="username" name="username" type="text" value="{{ old('username') }}"
                                    placeholder="Nama kamu"
                                    class="w-full bg-white/10 border border-white/20 text-white placeholder-white/30 text-sm rounded-xl px-4 py-2.5 focus:outline-none focus:ring-2 focus:ring-(--color-primary-400) transition">
                                @error('username')
                                    <span class="text-red-400 text-xs">{{ $message }}</span>
                                @enderror
                            </div>

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
                        </div>

                        <div class="flex flex-col gap-1.5">
                            <label class="text-xs font-semibold text-(--color-primary-300)" for="phone">
                                Nomor WhatsApp <span class="text-red-400">*</span>
                            </label>
                            <input id="phone" name="phone" type="text" value="{{ old('phone') }}"
                                placeholder="08xxxxxxxxxx"
                                class="w-full bg-white/10 border border-white/20 text-white placeholder-white/30 text-sm rounded-xl px-4 py-2.5 focus:outline-none focus:ring-2 focus:ring-(--color-primary-400) transition">
                            @error('phone')
                                <span class="text-red-400 text-xs">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="flex flex-col gap-1.5">
                            <label class="text-xs font-semibold text-(--color-primary-300)" for="kategori">
                                Layanan yang Dibutuhkan <span class="text-red-400">*</span>
                            </label>
                            <select id="category" name="category"
                                class="w-full bg-white/10 border border-white/20 text-white text-sm rounded-xl px-4 py-2.5 focus:outline-none focus:ring-2 focus:ring-(--color-primary-400) transition">
                                <option value="" disabled selected class="text-gray-800">Pilih layanan...
                                </option>
                                <option value="web_application" class="text-gray-800"
                                    {{ old('category') == 'web_application' ? 'selected' : '' }}>Web Application
                                </option>
                                <option value="it_support" class="text-gray-800"
                                    {{ old('category') == 'it_support' ? 'selected' : '' }}>IT Support & Maintenance
                                </option>
                                <option value="ui_ux" class="text-gray-800"
                                    {{ old('category') == 'ui_ux' ? 'selected' : '' }}>UI/UX Design</option>
                                <option value="digital_consulting" class="text-gray-800"
                                    {{ old('category') == 'digital_consulting' ? 'selected' : '' }}>Digital Consulting
                                </option>
                                <option value="goes_to_school" class="text-gray-800"
                                    {{ old('category') == 'goes_to_school' ? 'selected' : '' }}>Goes To School Program
                                </option>
                                <option value="social_media" class="text-gray-800"
                                    {{ old('category') == 'social_media' ? 'selected' : '' }}>Social Media Handling
                                </option>
                                <option value="other" class="text-gray-800"
                                    {{ old('category') == 'other' ? 'selected' : '' }}>Lainnya</option>
                            </select>
                            @error('category')
                                <span class="text-red-400 text-xs">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="flex flex-col gap-1.5">
                            <label class="text-xs font-semibold text-(--color-primary-300)" for="message">
                                Pesan <span class="text-red-400">*</span>
                            </label>
                            <textarea id="message" name="message" rows="4"
                                placeholder="Ceritakan kebutuhan kamu, timeline, atau ide proyek..."
                                class="w-full bg-white/10 border border-white/20 text-white placeholder-white/30 text-sm rounded-xl px-4 py-2.5 focus:outline-none focus:ring-2 focus:ring-(--color-primary-400) transition resize-none ">{{ old('message') }}</textarea>
                            @error('message')
                                <span class="text-red-400 text-xs">{{ $message }}</span>
                            @enderror
                        </div>

                        <button type="submit"
                            class="w-full bg-white text-(--color-primary-900) hover:bg-(--color-primary-100) font-bold text-sm py-3 rounded-xl transition-colors duration-200 shadow-lg">
                            Kirim Pesan →
                        </button>

                        <p class="text-center text-(--color-primary-400) text-xs">
                            Dengan mengirim pesan, kamu menyetujui <a href="{{ route('policy.show') }}"
                                class="underline hover:text-white">Privacy Policy</a> kami.
                        </p>

                    </form>
                </div>

            </div>
        </section>

    </x-app-layout>
