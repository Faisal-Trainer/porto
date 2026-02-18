@section('title', 'faisal yusra - hubungi kami')
@section('meta_description',
    'Lihat pilihan menu khas Nusantara dari Warung Siyas. Tersedia ayam cianjur,nasi goreng, bihun,
    dan lainnya dengan harga yang ramah di kantong.')

    <x-app-layout>
        <section class="py-14 px-4 md:px-8">

            {{-- Header --}}
            <div class="text-center max-w-xl mx-auto mb-10">
                <span class="text-xs font-bold uppercase tracking-widest text-(--color-primary-500) mb-2 block">Hubungi
                    Saya</span>
                <h1 class="text-3xl md:text-5xl font-extrabold text-(--color-primary-950) mb-3">
                    Get In Touch
                </h1>
                <p class="text-base md:text-lg text-(--color-primary-700) leading-relaxed">
                    Mari diskusikan proyek kamu dan bagaimana saya bisa membantu.
                </p>
            </div>

            {{-- Admin: show messages link --}}
            @auth
                <div class="flex justify-center mb-6">
                    <a href="{{ route('contact.show') }}"
                        class="inline-block border border-(--color-primary-300) text-(--color-primary-700) hover:bg-(--color-primary-100) text-sm font-semibold px-5 py-2 rounded-xl transition-colors duration-200">
                        📬 Lihat Pesan Masuk
                    </a>
                </div>
            @endauth

            {{-- Error global --}}
            @if ($errors->any())
                <div class="max-w-3xl mx-auto mb-6 p-4 text-red-700 bg-red-50 border border-red-200 rounded-xl">
                    <ul class="list-disc list-inside space-y-1 text-sm">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            {{-- Success --}}
            @if (session('success'))
                <div
                    class="max-w-3xl mx-auto mb-6 p-4 text-green-700 bg-green-50 border border-green-200 rounded-xl text-sm">
                    {{ session('success') }}
                </div>
            @endif

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 max-w-5xl mx-auto">

                {{-- Left: Info --}}
                <div class="card p-6 flex flex-col gap-6">
                    <div>
                        <h2 class="text-2xl md:text-3xl font-extrabold text-(--color-primary-950) mb-3">
                            Let's Work Together
                        </h2>
                        <p class="leading-relaxed text-(--color-primary-600) text-sm md:text-base">
                            Saya selalu terbuka untuk mendiskusikan proyek baru, ide kreatif, atau
                            kesempatan berkolaborasi. Hubungi saya jika kamu butuh bantuan dalam
                            pengembangan web, dukungan IT, atau konsultasi digital.
                        </p>
                    </div>

                    <div class="flex flex-col gap-3">

                        <a class="p-4 bg-(--color-primary-50) hover:bg-(--color-primary-100) flex items-center gap-4 rounded-xl transition-colors duration-200"
                            href="mailto:faisalyusra51@gmail.com">
                            <div class="text-xl text-(--color-primary-600) shrink-0">
                                <i class="fi fi-rr-envelope"></i>
                            </div>
                            <div>
                                <div class="text-sm font-semibold text-(--color-primary-700)">Email</div>
                                <div class="text-sm text-(--color-primary-600)">faisalyusra51@gmail.com</div>
                            </div>
                        </a>

                        <a class="p-4 bg-(--color-primary-50) hover:bg-(--color-primary-100) flex items-center gap-4 rounded-xl transition-colors duration-200"
                            href="https://linkedin.com/in/faisalyusra41" target="_blank" rel="noopener noreferrer">
                            <div class="text-xl text-(--color-primary-600) shrink-0">
                                <i class="fi fi-brands-linkedin"></i>
                            </div>
                            <div>
                                <div class="text-sm font-semibold text-(--color-primary-700)">LinkedIn</div>
                                <div class="text-sm text-(--color-primary-600)">linkedin.com/in/faisalyusra41</div>
                            </div>
                        </a>

                        <div class="p-4 bg-(--color-primary-50) flex items-center gap-4 rounded-xl">
                            <div class="text-xl text-(--color-primary-600) shrink-0">
                                <i class="fi fi-rr-marker"></i>
                            </div>
                            <div>
                                <div class="text-sm font-semibold text-(--color-primary-700)">Lokasi</div>
                                <div class="text-sm text-(--color-primary-600)">Bukittinggi, West Sumatra</div>
                            </div>
                        </div>

                    </div>

                    {{-- Response time note --}}
                    <p class="text-xs text-(--color-primary-400) mt-auto">
                        💬 Biasanya membalas dalam 1×24 jam di hari kerja.
                    </p>
                </div>

                {{-- Right: Form --}}
                <div class="card p-6">
                    <form action="{{ route('contact.store') }}" method="POST" class="space-y-5">
                        @csrf

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">

                            <div class="flex flex-col gap-1.5">
                                <label class="text-sm font-semibold text-(--color-primary-800)" for="username">
                                    Nama Lengkap <span class="text-red-500">*</span>
                                </label>
                                <input id="username"
                                    class="label text-sm p-3 w-full @error('username') border-red-400 @enderror"
                                    name="username" type="text" value="{{ old('username') }}" placeholder="Nama kamu">
                                @error('username')
                                    <span class="text-red-500 text-xs">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="flex flex-col gap-1.5">
                                <label class="text-sm font-semibold text-(--color-primary-800)" for="email">
                                    Email <span class="text-red-500">*</span>
                                </label>
                                <input id="email"
                                    class="label text-sm p-3 w-full @error('email') border-red-400 @enderror" name="email"
                                    type="email" value="{{ old('email') }}" placeholder="email@example.com">
                                @error('email')
                                    <span class="text-red-500 text-xs">{{ $message }}</span>
                                @enderror
                            </div>

                        </div>

                        <div class="flex flex-col gap-1.5">
                            <label class="text-sm font-semibold text-(--color-primary-800)" for="phone">
                                Nomor WhatsApp <span class="text-red-500">*</span>
                            </label>
                            <input id="phone" class="label text-sm p-3 w-full @error('phone') border-red-400 @enderror"
                                name="phone" type="text" value="{{ old('phone') }}" placeholder="08xxxxxxxxxx">
                            @error('phone')
                                <span class="text-red-500 text-xs">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="flex flex-col gap-1.5">
                            <label class="text-sm font-semibold text-(--color-primary-800)" for="kategori">
                                Layanan yang Dibutuhkan <span class="text-red-500">*</span>
                            </label>
                            <select id="kategori" name="kategori"
                                class="label text-sm p-3 w-full @error('kategori') border-red-400 @enderror">
                                <option value="" disabled selected>Pilih layanan...</option>
                                <option value="web_application"
                                    {{ old('kategori') == 'web_application' ? 'selected' : '' }}>Web Application</option>
                                <option value="it_support" {{ old('kategori') == 'it_support' ? 'selected' : '' }}>IT
                                    Support & Maintenance</option>
                                <option value="ui_ux" {{ old('kategori') == 'ui_ux' ? 'selected' : '' }}>UI/UX Design
                                </option>
                                <option value="digital_consulting"
                                    {{ old('kategori') == 'digital_consulting' ? 'selected' : '' }}>Digital Consulting
                                </option>
                                <option value="goes_to_school" {{ old('kategori') == 'goes_to_school' ? 'selected' : '' }}>
                                    Goes To School Program
                                </option>
                                <option value="social_media" {{ old('kategori') == 'social_media' ? 'selected' : '' }}>
                                    Social Media Handling</option>
                                <option value="other" {{ old('kategori') == 'other' ? 'selected' : '' }}>Lainnya</option>
                            </select>
                            @error('kategori')
                                <span class="text-red-500 text-xs">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="flex flex-col gap-1.5">
                            <label class="text-sm font-semibold text-(--color-primary-800)" for="message">
                                Pesan <span class="text-red-500">*</span>
                            </label>
                            <textarea id="message" class="label text-sm p-3 w-full min-h-32 @error('message') border-red-400 @enderror"
                                name="message" rows="5" placeholder="Ceritakan kebutuhan kamu, timeline, atau ide proyek...">{{ old('message') }}</textarea>
                            @error('message')
                                <span class="text-red-500 text-xs">{{ $message }}</span>
                            @enderror
                        </div>

                        <button type="submit" class="submit-btn w-full">
                            Kirim Pesan →
                        </button>

                    </form>
                </div>

            </div>
        </section>
    </x-app-layout>
