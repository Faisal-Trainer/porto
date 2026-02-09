<x-app-layout>
    @section('title', 'Tentang Saya')
    {{-- ABOUT --}}
    <section>
        <div class="header text-center mb-6">
            <h1 class="text-3xl md:text-4xl font-bold text-(--color-primary-700)">
                About Me
            </h1>
            <p class="mt-3 text-sm md:text-base text-(--color-primary-900)">
                Passionate about empowering businesses through technology.
            </p>
        </div>
        <div class="grid md:grid-cols-2 grid-cols-1 gap-2.5 md:gap-10 items-center mb-6">
            <div class="card h-full p-6">
                <h2 class="text-2xl text-(--color-primary-950) font-bold mb-4 underline decoration-(--color-accent-500)">
                    My Journey</h2>
                <div class="space-y-4 text-(--color-primary-950) leading-relaxed">
                    <p>Saya adalah seorang web developer yang berspesialisasi dalam Laravel, Livewire, dan Tailwind CSS.
                        Dengan filosofi bahwa teknologi adalah cerminan dari ketekunan dan kejujuran, saya berkomitmen
                        untuk
                        memberikan solusi digital terbaik.</p>
                    <p>Perjalanan saya ditempa oleh berbagai pengalaman yang menuntut ketahanan, strategi, dan disiplin.
                        Hal
                        tersebut membentuk pola pikir visioner, daya juang, serta konsistensi nilai yang kini saya
                        terapkan
                        dalam setiap proyek digital yang saya kerjakan.</p>
                    <p>Saat ini, saya fokus pada pengembangan website, dukungan IT, dan konsultasi digital untuk
                        membantu
                        UKM dan talenta berkembang melalui teknologi.</p>
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                <div class="card p-6">
                    <div class="flex flex-row items-center">
                        <i class="skill-icon fi fi-rr-api"></i>
                        <h3 class="text-(--color-primary-600) text-semibold">
                            Frontend Development
                        </h3>
                    </div>
                    <div class="skill-item">CSS3</div>
                    <div class="skill-item">Bootstrap</div>
                    <div class="skill-item">Tailwind CSS</div>
                    <div class="skill-item">HTML5</div>
                </div>
                <div class="card p-6">
                    <div class="flex flex-row items-center">
                        <i class="skill-icon fi fi-rr-database-management"></i>
                        <h3 class="text-(--color-primary-600) text-semibold">
                            Backend & Database
                        </h3>
                    </div>
                    <div class="skill-item">PHP</div>
                    <div class="skill-item">MySQL</div>
                </div>
                <div class="card p-6">
                    <div class="flex flex-row items-center">
                        <i class="skill-icon fi fi-rr-globe"></i>
                        <h3 class="text-(--color-primary-600) text-semibold">
                            Tools & Framework
                        </h3>
                    </div>
                    <div class="skill-item">Laravel</div>
                    <div class="skill-item">Next.js</div>
                    <div class="skill-item">Nuxt.js</div>
                    <div class="skill-item">Angular</div>
                </div>
                <div class="card p-6">
                    <div class="flex flex-row items-center">
                        <i class="skill-icon fi fi-rr-bolt"></i>
                        <h3 class="text-(--color-primary-600) text-semibold">
                            Soft Skill
                        </h3>
                    </div>
                    <div class="skill-item">Problem Solving</div>
                    <div class="skill-item">Team Leadership</div>
                    <div class="skill-item">Client Communication</div>
                    <div class="skill-item">Project Management</div>
                </div>
                {{-- CV --}}
            </div>
        </div>
        <div class="flex md:gap-10 gap-6 pt-4 justify-center">
            <a class="button" href="#">Download CV</a>
            <a class="button" href="{{ route('portfolio') }}">See My Work</a>
        </div>
    </section>
</x-app-layout>
