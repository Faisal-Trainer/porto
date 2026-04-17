@if ($paginator->hasPages())
    <nav role="navigation" aria-label="{{ __('Pagination Navigation') }}" class="flex items-center justify-between">
        <div class="flex justify-between flex-1 sm:hidden">
            @if ($paginator->onFirstPage())
                <x-button-secondary-orange disabled class="cursor-not-allowed !px-3 !py-2 md:!px-6 md:!py-3">
                    {!! __('pagination.previous') !!}
                </x-button-secondary-orange>
            @else
                <x-button-secondary-orange wire:click="previousPage" wire:loading.attr="disabled" class="!px-3 !py-2 md:!px-6 md:!py-3">
                    {!! __('pagination.previous') !!}
                </x-button-secondary-orange>
            @endif

            @if ($paginator->hasMorePages())
                <x-button-secondary-orange wire:click="nextPage" wire:loading.attr="disabled" class="!px-3 !py-2 md:!px-6 md:!py-3">
                    {!! __('pagination.next') !!}
                </x-button-secondary-orange>
            @else
                <x-button-secondary-orange disabled class="cursor-not-allowed !px-3 !py-2 md:!px-6 md:!py-3">
                    {!! __('pagination.next') !!}
                </x-button-secondary-orange>
            @endif
        </div>

        <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
            <div>
                <p class="text-sm text-(--color-primary-600) leading-5">
                    {!! __('Showing') !!}
                    @if ($paginator->firstItem())
                        <span class="font-bold text-(--color-primary-950)">{{ $paginator->firstItem() }}</span>
                        {!! __('to') !!}
                        <span class="font-bold text-(--color-primary-950)">{{ $paginator->lastItem() }}</span>
                    @else
                        {{ $paginator->count() }}
                    @endif
                    {!! __('of') !!}
                    <span class="font-bold text-(--color-primary-950)">{{ $paginator->total() }}</span>
                    {!! __('results') !!}
                </p>
            </div>

            <div>
                <span class="relative z-0 inline-flex shadow-sm rounded-md gap-2">
                    {{-- Previous Page Link --}}
                    @if ($paginator->onFirstPage())
                        <span aria-disabled="true" aria-label="{{ __('pagination.previous') }}">
                            <span class="relative inline-flex items-center px-3 py-2 text-sm font-medium text-(--color-primary-300) bg-white border border-(--color-primary-200) cursor-not-allowed leading-5 rounded-xl" aria-hidden="true">
                                <i class="fi fi-rr-angle-small-left text-lg"></i>
                            </span>
                        </span>
                    @else
                        <button wire:click="previousPage" rel="prev" class="relative inline-flex items-center px-3 py-2 text-sm font-medium text-(--color-primary-600) bg-white border border-(--color-primary-200) rounded-xl leading-5 hover:text-(--color-primary-500) focus:z-10 focus:outline-none focus:ring ring-(--color-primary-300) transition ease-in-out duration-150" aria-label="{{ __('pagination.previous') }}">
                            <i class="fi fi-rr-angle-small-left text-lg"></i>
                        </button>
                    @endif

                    {{-- Pagination Elements --}}
                    @foreach ($elements as $element)
                        {{-- "Three Dots" Separator --}}
                        @if (is_string($element))
                            <span aria-disabled="true">
                                <span class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-(--color-primary-400) bg-white border border-(--color-primary-200) rounded-xl cursor-default leading-5">{{ $element }}</span>
                            </span>
                        @endif

                        {{-- Array Of Links --}}
                        @if (is_array($element))
                            @foreach ($element as $page => $url)
                                @if ($page == $paginator->currentPage())
                                    <span aria-current="page">
                                        <span class="relative inline-flex items-center px-4 py-2 text-sm font-bold text-white bg-(--color-primary-600) border border-(--color-primary-600) rounded-xl leading-5 shadow-(--shadow-purple)">{{ $page }}</span>
                                    </span>
                                @else
                                    <x-button-secondary-primary wire:click="gotoPage({{ $page }})" class="!px-4 !py-2 !text-sm" aria-label="{{ __('Go to page :page', ['page' => $page]) }}">
                                        {{ $page }}
                                    </x-button-secondary-primary>
                                @endif
                            @endforeach
                        @endif
                    @endforeach

                    {{-- Next Page Link --}}
                    @if ($paginator->hasMorePages())
                        <button wire:click="nextPage" rel="next" class="relative inline-flex items-center px-3 py-2 text-sm font-medium text-(--color-primary-600) bg-white border border-(--color-primary-200) rounded-xl leading-5 hover:text-(--color-primary-500) focus:z-10 focus:outline-none focus:ring ring-(--color-primary-300) transition ease-in-out duration-150" aria-label="{{ __('pagination.next') }}">
                            <i class="fi fi-rr-angle-small-right text-lg"></i>
                        </button>
                    @else
                        <span aria-disabled="true" aria-label="{{ __('pagination.next') }}">
                            <span class="relative inline-flex items-center px-3 py-2 text-sm font-medium text-(--color-primary-300) bg-white border border-(--color-primary-200) cursor-not-allowed leading-5 rounded-xl" aria-hidden="true">
                                <i class="fi fi-rr-angle-small-right text-lg"></i>
                            </span>
                        </span>
                    @endif
                </span>
            </div>
        </div>
    </nav>
@endif
