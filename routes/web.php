<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\OtpController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TalentController;
use App\Models\Post;
use App\Models\Project;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;
use App\Http\Controllers\McpController;

Route::get('/sitemap.xml', function () {
    $sitemap = Sitemap::create()
        ->add(Url::create(url('/'))->setPriority(1.0)->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY))
        ->add(Url::create(url('/about'))->setPriority(0.8)->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY))
        ->add(Url::create(url('/service'))->setPriority(0.9)->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY))
        ->add(Url::create(url('/portfolio'))->setPriority(0.9)->setChangeFrequency(Url::CHANGE_FREQUENCY_DAILY))
        ->add(Url::create(url('/talent'))->setPriority(0.7)->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY))
        ->add(Url::create(url('/contact'))->setPriority(0.7)->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY))
        ->add(Url::create(url('/jasa-pembuatan-website-bukittinggi'))->setPriority(0.9))
        ->add(Url::create(url('/web-developer-bukittinggi'))->setPriority(0.8))
        ->add(Url::create(url('/portofolio-website-umkm'))->setPriority(0.8))
        ->add(Url::create(url('/konsultan-digital-bukittinggi'))->setPriority(0.8))
        ->add(Url::create(url('/warungsiyas'))->setPriority(0.8))
        ->add(Url::create(url('/ankparfume'))->setPriority(0.8))
        ->add(Url::create(url('/blog'))->setPriority(0.9)->setChangeFrequency(Url::CHANGE_FREQUENCY_DAILY));

    // dynamic projects
    Project::all()->each(function (Project $project) use ($sitemap) {
        $sitemap->add(
            Url::create(route('portfolio.show', $project))
                ->setLastModificationDate($project->updated_at)
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY)
                ->setPriority(0.8)
        );
    });

    // dynamic posts
    Post::where('is_published', true)->get()->each(function (Post $post) use ($sitemap) {
        $sitemap->add(
            Url::create(route('blog.show', $post->slug))
                ->setLastModificationDate($post->updated_at)
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY)
                ->setPriority(0.8)
        );
    });

    return $sitemap->toResponse(request());
});
// Public routes
Route::get('/', fn () => view('pages.home'))->name('home');
Route::get('/about', fn () => view('pages.about'))->name('about');
Route::get('/service', fn () => view('pages.service'))->name('service');
Route::get('/portfolio', fn () => view('pages.portfolio'))->name('portfolio');

// SEO Local Aliases (Bukittinggi Target)
Route::get('/jasa-pembuatan-website-bukittinggi', fn () => view('pages.service'));
Route::get('/web-developer-bukittinggi', fn () => view('pages.about'));
Route::get('/portofolio-website-umkm', fn () => view('pages.portfolio'));
Route::get('/konsultan-digital-bukittinggi', fn () => view('pages.service'));

// portofolio
Route::get('/warungsiyas', fn () => view('portofolio.warungsiyas'))->name('warungsiyas');
Route::get('/ankparfume', fn () => view('portofolio.ankparfume'))->name('ankparfume');
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
