<?php

use App\Http\Controllers\CostumerController;
use App\Http\Controllers\TalentController;
use Illuminate\Support\Facades\Route;

// Public routes
Route::get('/', fn() => view('pages.home'))->name('home');
Route::get('/about', fn() => view('pages.about'))->name('about');
Route::get('/service', fn() => view('pages.service'))->name('service');
Route::get('/portfolio', fn() => view('pages.portfolio'))->name('portfolio');

// portofolio
Route::get('/warungsiyas', fn() => view('portofolio.warungsiyas'))->name('warungsiyas');
Route::get('/ankparfume', fn() => view('portofolio.ankparfume'))->name('ankparfume');

// Contact
Route::post('/contact', [CostumerController::class, 'store'])->name('contact.store');
Route::get('/contact', [CostumerController::class, 'create'])->name('contact.create');

// Talent
Route::post('/talent', [TalentController::class, 'store'])->name('talent.store');
Route::get('/talent', [TalentController::class, 'create'])->name('talent.create');


// Auth protected
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', fn() => view('dashboard'))->name('dashboard');
});
