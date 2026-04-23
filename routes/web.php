<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\McpController;
use App\Http\Controllers\OtpController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TalentController;
use App\Models\User;
use Illuminate\Support\Facades\Route;


// Public routes
Route::view('/', 'pages.home')->name('home');
Route::view('/about', 'pages.about')->name('about');
Route::view('/service', 'pages.service')->name('service');
Route::view('/portfolio', 'pages.portfolio')->name('portfolio');

// SEO Local Aliases (Bukittinggi Target)
Route::view('/jasa-pembuatan-website-bukittinggi', 'pages.service');
Route::view('/web-developer-bukittinggi', 'pages.about');
Route::view('/portofolio-website-umkm', 'pages.portfolio');
Route::view('/konsultan-digital-bukittinggi', 'pages.service');

// portofolio
Route::view('/warungsiyas', 'portofolio.warungsiyas')->name('warungsiyas');
Route::view('/ankparfume', 'portofolio.ankparfume')->name('ankparfume');
Route::get('/portfolio/{project:slug}', [ProjectController::class, 'show'])->name('portfolio.show');

// Blog & Journal Routes
Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show');

// OTP Verification
Route::get('/verify-otp', [OtpController::class, 'show'])->name('otp.show');
Route::post('/verify-otp', [OtpController::class, 'verify'])->name('otp.verify');

// Contact
Route::middleware('throttle:5,1')->group(function () {
    Route::post('/contact', [CustomerController::class, 'store'])->name('contact.store');
    Route::post('/talent', [TalentController::class, 'store'])->name('talent.store');
});

// Talent
Route::get('/talent', [TalentController::class, 'create'])->name('talent.create');
Route::get('/contact', [CustomerController::class, 'create'])->name('contact.create');

// routes/api.php
Route::match(['get', 'post'], '/mcp', [McpController::class, 'handle']);

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

        // Admin Only Routes (Separate from Filament)
        Route::middleware(['role:super_admin'])->prefix('management')->name('admin.')->group(function () {
            Route::get('/customers', [CustomerController::class, 'index'])->name('customers.index');
            Route::delete('/customers/{customer}', [CustomerController::class, 'destroy'])->name('customers.destroy');

            Route::get('/talents', [TalentController::class, 'index'])->name('talents.index');
            Route::get('/talents/{talent}', [TalentController::class, 'show'])->name('talents.show');
            Route::get('/talents/{talent}/download', [TalentController::class, 'downloadCv'])->name('talents.download-cv');
            Route::delete('/talents/{talent}', [TalentController::class, 'destroy'])->name('talents.destroy');

            // Projects Management
            Route::resource('projects', ProjectController::class)->except(['show']);
        });
    });
});
