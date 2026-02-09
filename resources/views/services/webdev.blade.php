@extends('layouts.app')

@section('title', 'webdev')

@section('content')
    <section class="md:p-5">
        <div class="header text-center py-5">
            <h1 class="text-4xl md:text-5xl font-extrabold text-(--color-primary-950)">
                Web Development
            </h1>
            <p class="mt-3 text-sm md:text-base text-(--color-primary-900)">
                Solusi digital untuk UMKM & talenta — dari pembangunan website hingga mentoring.
            </p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 p-5 overflow-hidden">
            <div class="rounded-2xl shadow-sm p-3 md:p-6 text-center">
                <div class="text-4xl mb-3">💻</div>
                <h3 class="text-xl font-bold mb-2">Web Development</h3>
                <p class="text-sm">Saya membangun website modern dengan performa tinggi, aman, dan mudah di-maintain.</p>
            </div>

            <div class="service-card rounded-2xl shadow-lg p-3 md:p-6 text-center">
                <div class="text-4xl mb-3">📱</div>
                <h3 class="text-xl font-bold mb-2">Mobile-Friendly & Responsive Apps</h3>
                <p class="text-sm">Aplikasi ringan & responsif, siap dipakai di semua perangkat.</p>
            </div>
        </div>
    </section>
@endsection
