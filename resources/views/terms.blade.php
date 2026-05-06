@section('title', 'Terms of Service | Faisal Yusra')
@section('meta_description', 'Syarat dan ketentuan penggunaan website dan layanan Faisal Yusra.')
@section('canonical', url('/terms-of-service'))
@section('og_title', 'Terms of Service | Faisal Yusra')
@section('og_description', 'Syarat dan ketentuan penggunaan website dan layanan Faisal Yusra.')

@push('schemas')
    @php
        echo '<script type="application/ld+json">' . json_encode([
        '@context' => 'https://schema.org',
        '@type' => 'WebPage',
        '@id' => 'https://faisalyusra.my.id/terms-of-service#webpage',
        'url' => 'https://faisalyusra.my.id/terms-of-service',
        'name' => 'Terms of Service | Faisal Yusra',
        'description' => 'Syarat dan ketentuan penggunaan website dan layanan Faisal Yusra.',
        'inLanguage' => 'id-ID',
        'datePublished' => '2026-02-18',
        'author' => ['@id' => 'https://faisalyusra.my.id/#person'],
        'publisher' => ['@id' => 'https://faisalyusra.my.id/#service'],
    ], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) . '</script>';
    @endphp
@endpush

<x-guest-layout>
    <div class="pt-4 bg-gray-100">
        <div class="min-h-screen flex flex-col items-center pt-6 sm:pt-0">
            <div>
                <x-authentication-card-logo />
            </div>

            <div class="w-full sm:max-w-2xl mt-6 p-6 bg-white shadow-md overflow-hidden sm:rounded-lg prose">
                {!! $terms !!}
            </div>
        </div>
    </div>
</x-guest-layout>
