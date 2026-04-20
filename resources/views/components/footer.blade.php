<footer class="bg-(--color-primary-400) pt-10 pb-6 px-4 md:px-8">
    <div class="max-w-6xl mx-auto">

        {{-- Main grid --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-8">

            {{-- Brand --}}
            <div class="lg:col-span-2 flex flex-col gap-4">
                <div>
                    <h2 class="font-bold text-xl text-(--color-primary-950)">Faisal Yusra</h2>
                    <p class="text-(--color-primary-100) text-sm mt-1.5 leading-relaxed">
                        IT Support Spesialis · Web Developer & Digital Consultant<br>
                        Empowering SMEs & Talents Through Technology
                    </p>
                </div>

                {{-- Social icons --}}
                <div class="flex items-center gap-3">
                    <a href="https://linkedin.com/in/faisalyusra41" target="_blank" rel="noopener noreferrer"
                        title="LinkedIn"
                        class="social pt-2.5 pb-1.5 px-3 rounded-full text-2xl hover:scale-110 transition-transform duration-200">
                        <i class="fi fi-brands-linkedin"></i>
                    </a>
                    <a href="mailto:faisalyusra51@gmail.com" title="Email"
                        class="social pt-2.5 pb-1.5 px-3 rounded-full text-2xl hover:scale-110 transition-transform duration-200">
                        <i class="fi fi-rr-envelope"></i>
                    </a>
                    <a href="https://github.com/Faisal-Trainer" target="_blank" rel="noopener noreferrer" title="GitHub"
                        class="social pt-2.5 pb-1.5 px-3 rounded-full text-2xl hover:scale-110 transition-transform duration-200">
                        <i class="fi fi-brands-github"></i>
                    </a>
                    <a href="https://instagram.com/faisalyusra51" target="_blank" rel="noopener noreferrer"
                        title="Instagram"
                        class="social pt-2.5 pb-1.5 px-3 rounded-full text-2xl hover:scale-110 transition-transform duration-200">
                        <i class="fi fi-brands-instagram"></i>
                    </a>
                </div>
            </div>

            {{-- Service list --}}
            <div class="flex flex-col gap-3">
                <h2 class="font-bold text-base text-(--color-primary-950)">Layanan</h2>
                <ul class="flex flex-col gap-1.5 text-sm">
                    <li><a href="{{ route('service') }}"
                            class="text-(--color-primary-900) hover:text-(--color-primary-100) transition-colors duration-150">Web
                            Development</a></li>
                    <li><a href="{{ route('service') }}"
                            class="text-(--color-primary-900) hover:text-(--color-primary-100) transition-colors duration-150">IT
                            Support</a></li>
                    <li><a href="{{ route('service') }}"
                            class="text-(--color-primary-900) hover:text-(--color-primary-100) transition-colors duration-150">UI/UX
                            Design</a></li>
                    <li><a href="{{ route('service') }}"
                            class="text-(--color-primary-900) hover:text-(--color-primary-100) transition-colors duration-150">Digital
                            Consulting</a></li>
                    <li><a href="{{ route('service') }}"
                            class="text-(--color-primary-900) hover:text-(--color-primary-100) transition-colors duration-150">Goes
                            to School Program</a></li>
                    <li><a href="{{ route('service') }}"
                            class="text-(--color-primary-900) hover:text-(--color-primary-100) transition-colors duration-150">Social
                            Media Handling</a></li>
                </ul>
            </div>

            {{-- Quick links --}}
            <div class="flex flex-col gap-3">
                <h2 class="font-bold text-base text-(--color-primary-950)">Quick Link</h2>
                <ul class="flex flex-col gap-1.5 text-sm">
                    <li><a href="{{ route('home') }}"
                            class="text-(--color-primary-900) hover:text-(--color-primary-100) transition-colors duration-150">Home</a>
                    </li>
                    <li><a href="{{ route('about') }}"
                            class="text-(--color-primary-900) hover:text-(--color-primary-100) transition-colors duration-150">About</a>
                    </li>
                    <li><a href="{{ route('portfolio') }}"
                            class="text-(--color-primary-900) hover:text-(--color-primary-100) transition-colors duration-150">Portofolio</a>
                    </li>
                    <li><a href="{{ route('service') }}"
                            class="text-(--color-primary-900) hover:text-(--color-primary-100) transition-colors duration-150">Service</a>
                    </li>
                    <li><a href="{{ route('contact.create') }}"
                            class="text-(--color-primary-900) hover:text-(--color-primary-100) transition-colors duration-150">Contact</a>
                    </li>
                </ul>
            </div>

        </div>

        {{-- Divider --}}
        <div class="line w-full rounded-full my-4"></div>

        {{-- Bottom bar --}}
        <div class="flex flex-col md:flex-row justify-between items-center gap-3 text-xs text-(--color-primary-100)">
            <span>&copy; {{ date('Y') }} Faisal Yusra. All rights reserved.</span>
            <div class="flex items-center gap-4">
                <a href="{{ route('policy.show') }}" class="hover:text-white transition-colors duration-150">Privacy
                    Policy</a>
                <a href="{{ route('terms.show') }}" class="hover:text-white transition-colors duration-150">Terms
                    of Service</a>
                <a href="{{ route('contact.create') }}"
                    class="hover:text-white transition-colors duration-150">Contact</a>
            </div>
        </div>

    </div>
</footer>
