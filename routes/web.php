<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TalentController;
use App\Models\User;
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
Route::middleware('throttle:5,1')->group(function () {
    Route::post('/contact', [CustomerController::class, 'store'])->name('contact.store');
    Route::post('/talent', [TalentController::class, 'store'])->name('talent.store');
});

// Talent
Route::get('/talent', [TalentController::class, 'create'])->name('talent.create');
Route::get('/contact', [CustomerController::class, 'create'])->name('contact.create');

// Auth protected (Email Verified)
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    // Approval notice route
    Route::get('/approval', function () {
        /** @var User $user */
        $user = request()->user();
        if ($user && $user->is_active) {
            return redirect()->route('dashboard');
        }

        return view('auth.approval');
    })->name('approval.notice');

    // Only approved users can access these routes
    Route::middleware(['approved'])->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    });
});

