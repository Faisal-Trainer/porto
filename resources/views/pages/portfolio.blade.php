<x-app-layout>

    {{-- PORTOFOLIO SECTION --}}
    <section class="p-2.5 md:p-5">
        <div class="text-center mb-10">
            <h1 class="text-2xl md:text-4xl font-extrabold text-(--color-primary-950) tracking-wide">
                Selected Projects & Business Solutions
            </h1>
            <p class="text-(--color-primary-700) mt-2 text-lg">
                Projects built to solve real SME & Talent growth challenges
            </p>
        </div>
        <div class="mb-5 flex flex-wrap justify-center gap-3">
            <button class="btn px-3 text-sm md:text-base rounded-xl md:rounded-2xl md:px-5 py-1.5 md:py-2.5">All
                Project</button>
            <button class="btn px-3 text-sm md:text-base rounded-xl md:rounded-2xl md:px-5 py-1.5 md:py-2.5">Web
                App</button>
            <button
                class="btn px-3 text-sm md:text-base rounded-xl md:rounded-2xl md:px-5 py-1.5 md:py-2.5">Education</button>
            <button class="btn px-3 text-sm md:text-base rounded-xl md:rounded-2xl md:px-5 py-1.5 md:py-2.5">Social
                Media</button>
            <button class="btn px-3 text-sm md:text-base rounded-xl md:rounded-2xl md:px-5 py-1.5 md:py-2.5">IT
                Support</button>
            <button
                class="btn px-3 text-sm md:text-base rounded-xl md:rounded-2xl md:px-5 py-1.5 md:py-2.5">Dashboard</button>
        </div>

        <div class="grid lg:grid-cols-4 grid-cols-1 gap-5 items-center mb-5">
            <div class="porto-card" data-category="Web-Development">
                <img class="rounded-t-2xl object-cover w-full h-48" src="{{ asset('img/img1.webp') }}" alt="Project">
                <div class="p-1.5 lg:p-3 text-center space-y-2.5">
                    <h2 class="text-xl font-bold text-(--color-primary-900)">Website App - Warung Siyas</h2>
                    <p class="text-sm text-(--color-primary-700)">
                        Dibangun sepenuhnya dari awal — mulai dari desain UI, struktur database,
                        hingga fitur interaktif berbasis Laravel.
                    </p>
                    <div class="tag-tech">
                        <span class="tech">laravel</span>
                        <span class="tech">tailwindcss</span>
                        <span class="tech">livewire</span>
                    </div>
                    <a href="#" class="website-btn w-full rounded-xl inline-block text-center py-2 px-4">
                        📂 Detail Project
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- WHY SECTION --}}
    <section class="bg-(--color-primary-400) p-2.5 md:p-5">
        <div class="flex flex-col items-center justify-center leading-relaxed">
            <h2 class="text-xl md:text-3xl font-bold text-(--color-primary-100)">My Digital Growth Framework</h2>
            <span class="text-xl text-(--color-primary-100)">
                Most SMEs don’t fail because of lack of effort — they fail because of unstructured digital
                systems.</span>
        </div>
        <div class="py-4 gap-2">
            <h3 class="text-xl md:text-2xl font-bold text-(--color-primary-100)">breakdown the problem</h3>
            <button
                class="text-xl px-2.5 py-1.5 rounded-xl text-(--color-primary-950) border-2 border-(--color-primary-950) hover:text-(--color-primary-50) hover:bg-(--color-primary-950) transition-all duration-500 active:bg-(--color-primary-950) active:text-(--color-primary-50)">
                nama porto
            </button>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div class="flex card p-1.5 md:p-3">
                <h4 class="text-2xl text-(--color-primary950) font-semibold">Audit & Business Mapping</h4>
            </div>
            <div class="flex card p-1.5 md:p-3">
                <h4 class="text-2xl text-(--color-primary950) font-semibold">System Architecture Planning</h4>
            </div>
            <div class="card p-2.5 md:p-5">
                <h4 class="text-2xl text-(--color-primary950) font-semibold">Development & Iteration</h4>
            </div>
            <div class="card p-2.5 md:p-5">
                <h4 class="text-2xl text-(--color-primary950) font-semibold">Optimization & Monitoring</h4>
            </div>
        </div>
    </section>

    {{-- JOURNAL SECTION --}}
    <section class="p-2.5 md:p-5">
        <div class="flex flex-col items-center justify-center leading-relaxed">
            <h2 class="text-2xl md:text-4xl font-extrabold text-(--color-primary-950) tracking-wide">
                Case study breakdown
            </h2>
            <span class="text-xl text-(--color-primary-600)">
                Showcase of problem projects and solve the probelm.
            </span>
        </div>
    </section>

    {{-- 3 TIPE pengembangan bisnis --}}
    <section class="p-2.5 md:p-5">
        <div class="flex flex-col items-center justify-center leading-relaxed">
            <h2 class="text-2xl md:text-4xl font-extrabold text-(--color-primary-950) tracking-wide">
                HOW THIS PROJECT COULD BE BUILT AT DIFFERENT LEVELS
            </h2>
            <span class="text-xl text-(--color-primary-600)">
                Every business can start small — or build for scale from day one.
            </span>
    </section>


    <script>
        const buttons = document.querySelectorAll('.btn');
        const cards = document.querySelectorAll('.porto-card');

        buttons.forEach(button => {
            button.addEventListener('click', () => {
                // aktifkan tombol
                buttons.forEach(btn => btn.classList.remove('active'));
                button.classList.add('active');

                const category = button.textContent.trim().toLowerCase().replace(/\s+/g, '-');

                cards.forEach(card => {
                    if (category === 'all-project' || card.dataset.category === category) {
                        card.style.display = 'block';
                    } else {
                        card.style.display = 'none';
                    }
                });
            });
        });
    </script>

</x-app-layout>
