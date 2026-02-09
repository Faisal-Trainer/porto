@props(['value'])

<label {{ $attributes->merge(['class' => 'text-base text-(--color-primary-600) font-bold']) }}>
    {{ $value ?? $slot }}
</label>
