<?php

use App\Http\Controllers\CostumerController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::get('/about', function () {
    return view('pages.about');
})->name('about');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

Route::get('/portofolio', function () {
    return view('pages.portfolio');
})->name('portfolio');

Route::get('/service', function () {
    return view('pages.service');
})->name('service');

Route::get('/join', function () {
    return view('pages.join');
})->name('join');

Route::post('/contact', [CostumerController::class, 'store'])->name('contact.store');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/show/contact', [CostumerController::class, 'index'])->name('contact.show');
    Route::get('/show/contact/{contact}', [CostumerController::class, 'destroy'])->name('costumer.destroy');
});
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
