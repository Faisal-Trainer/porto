@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge([
    'class' => 'focus:border-(--color-accent-500) focus:ring-(--color-accent-500) rounded-md shadow-xs',
]) !!}>
