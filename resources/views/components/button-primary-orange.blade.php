{{-- button-primary-orange.blade.php --}}
@props(['href' => null])

@if($href)
    <a href="{{ $href }}" {{ $attributes->merge(['class' => 'inline-flex items-center justify-center px-6 py-3 rounded-xl font-semibold transition-all duration-300 active:scale-95 focus:outline-none hover:bg-(--color-accent-600)! hover:cursor-pointer']) }}
        style="background-color: var(--color-accent-500); color: var(--color-accent-50); border: 1px solid var(--color-accent-500);">
        {{ $slot }}
    </a>
@else
    <button {{ $attributes->merge(['class' => 'inline-flex items-center justify-center px-6 py-3 rounded-xl font-semibold transition-all duration-300 active:scale-95 focus:outline-none hover:bg-(--color-accent-600)! hover:cursor-pointer']) }}
        style="background-color: var(--color-accent-500); color: var(--color-accent-50); border: 1px solid var(--color-accent-500);">
        {{ $slot }}
    </button>
@endif