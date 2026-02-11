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
                    <h2 class="text-xl font-bold text-(--color-primary-900)">Website - Warung Siyas</h2>
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
            <h2 class="text-xl md:text-3xl font-bold text-(--color-primary-100)">The Challenge</h2>
            <span class="text-xl text-(--color-primary-100)">
                Many SMEs struggle with digital adoption and structured growth.</span>
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
