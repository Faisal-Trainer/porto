<button
    {{ $attributes->merge(['type' => 'submit', 'class' => ' inline-flex items-center px-3 py-2 md:py-2.5 md:px-5 bg-(--color-primary-700) border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-(--color-primary-900) focus:bg-(--color-primary-900) active:bg-(--color-primary-950) focus:outline-hidden focus:ring-2 focus:ring-(--color-accent-500) focus:ring-offset-2 disabled:opacity-50 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
