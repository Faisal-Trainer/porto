{{-- button-primary-purple.blade.php --}}
@props (['href' => null])

@if ($href)
    <a
        href="{{ $href }}"
        {{ $attributes->merge(['class' => 'inline-flex items-center justify-center px-6 py-3 rounded-xl font-semibold transition-all duration-300 active:scale-95 focus:outline-none hover:brightness-200 hover:cursor-pointer']) }}
        style="
            background-color: var(--color-primary-900);
            color: var(--color-primary-50);
            border: 1px solid var(--color-primary-900);
        "
    >
        {{ $slot }}
    </a>
@else
    <button
        {{ $attributes->merge(['class' => 'inline-flex items-center justify-center px-6 py-3 rounded-xl font-semibold transition-all duration-300 active:scale-95 focus:outline-none hover:brightness-200 hover:cursor-pointer']) }}
        style="
            background-color: var(--color-primary-900);
            color: var(--color-primary-50);
            border: 1px solid var(--color-primary-900);
        "
    >
        {{ $slot }}
    </button>
@endif
