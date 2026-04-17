@props(['href' => null, 'filter' => null, 'active' => false])

@php
    $baseClass = 'inline-flex items-center justify-center px-6 py-3 rounded-xl font-semibold transition-all duration-300 active:scale-95 focus:outline-none cursor-pointer border hover:bg-(--color-primary-900)! hover:text-white!';
    $defaultStyle = 'background-color: transparent; color: var(--color-primary-900); border-color: var(--color-primary-900);';
    $activeStyle = 'background-color: var(--color-primary-900); color: white; border-color: var(--color-primary-900);';
@endphp

@if ($href)
    <a href="{{ $href }}" 
        {{ $attributes->class([$baseClass]) }} 
        style="{{ $active ? $activeStyle : $defaultStyle }}">
        {{ $slot }}
    </a>
@elseif($filter)
    <button {{ $attributes->class([$baseClass]) }} 
            :class="active === '{{ $filter }}' ? 'text-white' : ''" 
            :style="active === '{{ $filter }}' 
                ? 'background-color: var(--color-primary-900); border-color: var(--color-primary-900);' 
                : '{{ $active ? $activeStyle : $defaultStyle }}'" 
            @click="active = '{{ $filter }}'">
        {{ $slot }}
    </button>
@else
    <button {{ $attributes->class([$baseClass]) }} style="{{ $active ? $activeStyle : $defaultStyle }}">
        {{ $slot }}
    </button>
@endif