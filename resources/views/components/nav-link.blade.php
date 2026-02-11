@props(['active'])

<a {{ $attributes->merge([
    'class' =>
        'px-4 py-2.5 rounded-xl transition-all duration-500 ease-in-out text-(--color-primary-950) hover:text-(--color-primary-50) hover:bg-(--color-primary-950)',
]) }}
    @class([
        'bg-(--color-primary-700) text-(--color-primary-50) => $active',
    ])>
    {{ $slot }}
</a>
