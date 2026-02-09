<x-app-layout>
    <section>
        <div class="grid lg:grid-cols-2 grid-cols-1 gap-6 items-center">
            {{-- Text Section --}}
            <div class="space-y-5 text-center lg:text-left text-(--color-primary-950)">
                <h1 class="text-5xl font-extrabold leading-tight">
                    Hi, I'm <span class="text-(--color-primary-700)">Faisal Yusra</span>
                </h1>
                <p class="text-xl font-medium">
                    Web Developer & Digital Consultant
                    <span class="block text-(--color-primary-600) text-lg font-normal">
                        Empowering SMEs & Talents through modern technology.
                    </span>
                </p>
                <p class="text-gray-600">
                    With resilience, strategy, and discipline — I craft meaningful digital solutions that help
                    businesses
                    grow and empower young talents to shine.
                </p>

                <div class="flex gap-4 pt-4 justify-center lg:justify-start">
                    <a href="{{ route('portfolio') }}" class="button">
                        See My Work
                    </a>
                    <a href="{{ route('about') }}" class="button">
                        About Me
                    </a>
                </div>
                <div class="grid grid-cols-3">
                    <!-- From Uiverse.io by htwarriors108 -->
                    <button class="social-media flex items-center justify-center">
                        <a href="https://instagram.com/faisalyusra51" target="_blank" title="instagram"
                            rel="noopener noreferrer" class="text-5xl">
                            <i id="instagram" class="fi fi-brands-instagram"></i>
                        </a>
                    </button>
                    <button class="social-media flex items-center justify-center">
                        <a href="https://linkedin.com/in/faisalyusra41" target="_blank" title="linkedin"
                            rel="noopener noreferrer" class="text-5xl">
                            <i class="fi fi-brands-linkedin"></i>
                        </a>
                    </button>
                    <button class="social-media flex items-center justify-center">
                        <a href="https://github.com/Faisal-Trainer" target="_blank" title="github"
                            rel="noopener noreferrer" class="text-5xl">
                            <i class="fi fi-brands-github"></i>
                        </a>
                    </button>
                </div>
            </div>

            <!-- Foto / Carousel -->
            <div class="text-center">
                <div class="rounded-3xl w-full max-w-sm mx-auto">
                    <img class="aspect-4/5 object-cover object-center card" src="{{ asset('img/profile.webp') }}"
                        alt="Faisal Yusra - Web Developer & Digital Consultant">
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
