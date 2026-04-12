@props([
    'padding' => 'p-8',
])

<div {{ $attributes->merge(['class' => 'relative group overflow-hidden rounded-3xl bg-white/10 backdrop-blur-2xl border border-white/20 shadow-2xl transition-all duration-500 hover:bg-white/20 hover:border-white/40 hover:-translate-y-2 ' . $padding]) }}>
    {{-- Glossy Highlight --}}
    <div class="absolute -top-24 -left-24 w-48 h-48 bg-white/10 rounded-full blur-3xl transition-all duration-700 group-hover:scale-150 group-hover:bg-white/20"></div>
    
    <div class="relative z-10">
        {{ $slot }}
    </div>

    {{-- Bottom Glow (TW 4.1 shadow vars) --}}
    <div class="absolute inset-0 rounded-3xl opacity-0 group-hover:opacity-100 transition-opacity duration-500 shadow-(--shadow-glow) -z-10"></div>
</div>
