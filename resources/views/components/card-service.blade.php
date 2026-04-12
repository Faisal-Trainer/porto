@props([
    'icon' => null,
    'title' => null,
    'description' => null,
])

<div {{ $attributes->merge(['class' => 'group p-8 bg-(--color-primary-50) rounded-3xl border border-(--color-primary-100) transition-all duration-500 hover:bg-linear-to-br hover:from-(--color-primary-600) hover:to-(--color-primary-800) hover:shadow-xl hover:-translate-y-2 text-center']) }}>
    @if($icon)
        <div class="inline-flex items-center justify-center w-16 h-16 mb-6 rounded-2xl bg-white text-(--color-primary-600) text-3xl shadow-sm transition-all duration-500 group-hover:scale-110 group-hover:bg-white/20 group-hover:text-white">
            <i class="{{ $icon }}"></i>
        </div>
    @endif

    <h3 class="text-xl font-bold text-(--color-primary-950) mb-3 transition-colors duration-500 group-hover:text-white">
        {{ $title }}
    </h3>

    <p class="text-sm text-(--color-primary-600) leading-relaxed transition-colors duration-500 group-hover:text-(--color-primary-50)">
        {{ $description ?? $slot }}
    </p>

    {{-- Bottom Line Detail --}}
    <div class="mt-6 w-12 h-1 bg-(--color-primary-200) mx-auto rounded-full transition-all duration-500 group-hover:w-20 group-hover:bg-white/40"></div>
</div>
