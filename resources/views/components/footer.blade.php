    <footer class="text-center py-4 bg-(--color-primary-400) p-6">
        <div class="mx-auto px-4">
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="lg:col-span-2">
                    <span class="font-bold text-2xl text-(--color-primary-950)">Faisal Yusra</span>
                    <p class="text-(--color-primary-100) my-2.5">
                        IT support spesialis | Web Developer & Digital Consultant
                        <br>
                        Empowering SMEs & Talents Through Technology
                    </p>
                    <div class="contact">
                        <div>
                            <!-- From Uiverse.io by pruthivithejan -->
                            <div class="flex justify-center items-center gap-12">
                                <div class="grid grid-cols-3 gap-2.5">
                                    <button class="social pt-2.5 pb-1.5 px-3 rounded-full">
                                        <a class="font-semibold text-3xl" target="_blank" title="linkedin"
                                            rel="noopener noreferrer" href="https://linkedin.com/in/faisalyusra41">
                                            <i class="fi fi-brands-linkedin"></i></a>
                                    </button>
                                    <button class="social pt-2.5 pb-1.5 px-3 rounded-full">
                                        <a class="font-semibold text-3xl" target="_blank" title="email"
                                            rel="noopener noreferrer" href="https://linkedin.com/in/faisalyusra41">
                                            <i class="fi fi-rr-envelope"></i></a>
                                    </button>
                                    <button class="social pt-2.5 pb-1.5 px-3 rounded-full">
                                        <a class="font-semibold text-3xl" target="_blank" title="github"
                                            rel="noopener noreferrer" href="https://github.com/Faisal-Trainer">
                                            <i class="fi fi-brands-github"></i></a>
                                    </button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div>
                    <h4 class="font-bold text-2xl text-(--color-primary-950)">Service</h4>
                    <ul class="grid gap-1 text-base">
                        <li class="text-(--color-primary-900) hover:text-(--color-primary-100) transition delay-100">Web
                            Development</li>
                        <li class="text-(--color-primary-900) hover:text-(--color-primary-100) transition delay-100">IT
                            Support</li>
                        <li class="text-(--color-primary-900) hover:text-(--color-primary-100) transition delay-100">
                            UI/UX Design</li>
                        <li class="text-(--color-primary-900) hover:text-(--color-primary-100) transition delay-100">
                            Digital Consulting for
                            UMKM</li>
                        <li class="text-(--color-primary-900) hover:text-(--color-primary-100) transition delay-100">
                            Goes to School Program
                        </li>
                        <li class="text-(--color-primary-900) hover:text-(--color-primary-100) transition delay-100">
                            Social Media Handling
                        </li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-bold text-2xl text-(--color-primary-950)">Quick Link</h4>
                    <ul class="grid gap-2.5 text-xl">
                        <a class="text-(--color-primary-900) hover:text-(--color-primary-100) transition delay-100"
                            href="{{ route('home') }}">Home</a>
                        <a class="text-(--color-primary-900) hover:text-(--color-primary-100) transition delay-100"
                            href="{{ route('about') }}">About</a>
                        <a class="text-(--color-primary-900) hover:text-(--color-primary-100) transition delay-100"
                            href="{{ route('portfolio') }}">Portofolio</a>
                        <a class="text-(--color-primary-900) hover:text-(--color-primary-100) transition delay-100"
                            href="{{ route('service') }}">Service</a>
                    </ul>
                </div>
            </div>
        </div>
        <div class="line w-full rounded-full my-4"></div>
        <section class="text-(--color-primary-50) flex flex-col md:flex-row justify-between">
            <div>
                &copy; {{ date('Y') }} Faisal Yusra. All rights reserved.
            </div>
            <div class="grid grid-cols-3 gap-auto">
                <a class="text-(--color-primary-100) hover:text-(--color-primary-950) transition delay-100"
                    href="{{ route('policy.show') }}">privacy policy</a>
                <a class="text-(--color-primary-100) hover:text-(--color-primary-950) transition delay-100"
                    href="{{ route('terms.show') }}">term of service</a>
                <a class="text-(--color-primary-100) hover:text-(--color-primary-950) transition delay-100"
                    href="{{ route('contact') }}">contact</a>
            </div>
        </section>
    </footer>
