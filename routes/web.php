<?php

use App\Http\Controllers\CostumerController;
use App\Http\Controllers\TalentController;
use Illuminate\Support\Facades\Route;

// Public routes
Route::get('/', fn() => view('pages.home'))->name('home');
Route::get('/about', fn() => view('pages.about'))->name('about');
Route::get('/service', fn() => view('pages.service'))->name('service');
Route::get('/portfolio', fn() => view('pages.portfolio'))->name('portfolio');
Route::get('/join', fn() => view('pages.join'))->name('join');


// Contact
Route::get('/contact', fn() => view('pages.contact'))->name('contact');
Route::post('/contact', [CostumerController::class, 'store'])->name('contact.store');

// Talent
Route::get('/talent', fn() => view('pages.talent'))->name('talent');
Route::post('/talent', [TalentController::class, 'store'])->name('talent.store');


// Auth protected
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', fn() => view('dashboard'))->name('dashboard');
});
