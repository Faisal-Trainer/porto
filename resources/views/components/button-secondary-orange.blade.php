@props(['href' => null, 'filter' => null])

@php
    $baseClass = 'inline-flex items-center justify-center px-6 py-3 rounded-xl font-semibold transition-all duration-300 active:scale-95 focus:outline-none cursor-pointer border hover:bg-(--color-accent-500)! hover:text-white!';
    $defaultStyle = 'background-color: transparent; color: var(--color-accent-500); border-color: var(--color-accent-500);';
@endphp

@if ($href)
    <a href="{{ $href }}" {{ $attributes->merge(['class' => $baseClass]) }} style="{{ $defaultStyle }}">
        {{ $slot }}
    </a>
@elseif($filter)
    <button {{ $attributes->merge(['class' => $baseClass]) }} :class="active === '{{ $filter }}' ? 'text-white' : ''" :style="active === '{{ $filter }}' 
                ? 'background-color: var(--color-accent-500); border-color: var(--color-accent-500);' 
                : '{{ $defaultStyle }}'" @click="active = '{{ $filter }}'">
        {{ $slot }}
    </button>
@else
    <button {{ $attributes->merge(['class' => $baseClass]) }} style="{{ $defaultStyle }}">
        {{ $slot }}
    </button>
@endif

