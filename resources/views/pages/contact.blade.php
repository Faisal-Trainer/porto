@section('title', 'faisal yusra - hubungi kami')
@section('meta_description',
    'Lihat pilihan menu khas Nusantara dari Warung Siyas. Tersedia ayam cianjur,nasi goreng, bihun,
    dan lainnya dengan harga yang ramah di kantong.')


    <x-app-layout>
        <section class="p-2.5 md:p-5">
            <div class="header text-center py-2.5">
                <h1 class="text-4xl md:text-5xl font-extrabold text-(--color-primary-950)">
                    Get In Touch
                </h1>
                <p class="mt-3 text-xl md:text-2xl text-(--color-primary-900)">
                    Mari diskusikan proyek Anda dan bagaimana saya bisa membantu
                </p>
            </div>
            @auth
                <div class="navbar-action flex items-center ">
                    <a href="{{ route('contact.show') }}"
                        class="contact-btn rounded-2xl text-2xl py-2 px-3 md:py-2.5 md:px-5">show
                        message</a>
                </div>
            @endauth
            @if ($errors->any())
                <div class="p-4 mb-4 text-red-700 bg-red-100 rounded-sm">
                    <ul class="list-disc list-inside space-y-1">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 p-2.5 lg:p-5">
                <div class="card p-2.5 md:p-6">
                    <h2 class="text-2xl md:text-4xl font-extrabold text-(--color-primary-950) mb-6">
                        Let's Work Together
                    </h2>
                    <span class="mb-8 leading-relaxed text-(--color-primary-600) text-xl md:text-2xl">
                        Saya selalu terbuka untuk mendiskusikan proyek baru, ide kreatif, atau
                        kesempatan untuk berkolaborasi.
                        Jangan ragu untuk menghubungi saya jika Anda membutuhkan bantuan dalam pengembangan web, dukungan
                        IT,
                        atau konsultasi digital.
                    </span>
                    <div class="flex flex-col gap-6 my-6">
                        <a class="p-3 bg-(--color-primary-50) flex rounded-xl" href="#">
                            <div class="text-2xl contact-icon"><i class="fi fi-rr-envelope"></i></div>
                            <div class="text-xl">
                                <div class="font-semibold text-(--color-primary-600)">Email</div>
                                <div class="text-(--color-primary-600)">faisalyusra51@gmail.com</div>
                            </div>
                        </a>
                        <a class="p-3 bg-(--color-primary-50) flex rounded-xl" href="#">
                            <div class="text-2xl contact-icon"><i class="fi fi-rr-marker"></i></div>
                            <div class="text-xl">
                                <div class="font-semibold text-(--color-primary-600)">Location</div>
                                <div class="text-(--color-primary-600)">Bukittinggi, West Sumatra</div>
                            </div>
                        </a>
                        <a class="p-3 bg-(--color-primary-50) flex rounded-xl" href="#">
                            <div class="text-2xl contact-icon"><i class="fi fi-rr-marker"></i></div>
                            <div class="text-xl">
                                <div class="font-semibold text-(--color-primary-600)">Linkedin</div>
                                <div class="text-(--color-primary-600)">faisalyusra41</div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="file">
                    <div class="form p-1.5 lg:p-6 space-y-6">
                        <form action="{{ route('contact.store') }}" method="POST">
                            @csrf
                            <div class="grid lg:grid-cols-2 grid-cols-1">
                                <div class="input p-1.5 lg:p-6">
                                    <span class="text-base md:text-xl font-semibold">Nama Lengkap *</span>
                                    <input class="label text-base md:text-xl p-3" name="username" type="text"
                                        placeholder="Masukkan nama anda">
                                    @error('username')
                                        <span class="text-red-600 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="input p-1.5 lg:p-6">
                                    <span class="text-base md:text-xl font-semibold">Email *</span>
                                    <input class="label text-base md:text-xl p-3" name="email" type="email"
                                        placeholder="email@example.com">
                                    @error('email')
                                        <span class="text-red-600 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="input p-1.5 lg:p-6 lg:col-span-2">
                                    <span class="text-base md:text-xl font-semibold">Nomor WA *</span>
                                    <input class="label text-base md:text-xl p-3" name="phone" type="text"
                                        placeholder="masukkan nomor what's app anda">
                                    @error('phone')
                                        <span class="text-red-600 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="input p-1.5 lg:p-6">
                                <span class="text-base md:text-xl font-semibold">Subject *</span>
                                <input class="label text-base md:text-xl p-3" name="subject" type="text"
                                    placeholder="Topik atau Layanan yang Anda butuhkan">
                                @error('subject')
                                    <span class="text-red-600 text-sm">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="input p-1.5 lg:p-6">
                                <span class="text-base md:text-xl font-semibold">Message *</span>
                                <textarea class="label text-base md:text-xl p-3" name="message" type="text"
                                    placeholder="Ceritakan kebutuhan Anda, timeline, atau ide proyek Anda..."></textarea>
                                @error('message')
                                    <span class="text-red-600 text-sm">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="p-6">
                                <button type="submit" class="submit-btn">
                                    Send Message
                                </button>
                            </div>
                            @if (session('success'))
                                <div class="p-4 mb-4 text-green-700 bg-green-100 rounded-sm">
                                    {{ session('success') }}
                                </div>
                            @endif
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </x-app-layout>
