@props(['padding' => 'p-3 md:p-6'])

<div {{ $attributes->merge(['class' => "$padding bg-(--color-primary-50) rounded-3xl border border-(--color-primary-900) hover:border-(--color-accent-500)! overflow-hidden transition-all duration-300"]) }}>
    {{ $slot }}
</div>