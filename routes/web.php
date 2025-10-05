<?php

use App\Http\Controllers\AboutTimController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\BuildWebsiteController;
use App\Http\Controllers\CompanyAboutController;
use App\Http\Controllers\CompanyStatisticController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\HeroSectionController;
use App\Http\Controllers\ItSolutionsController;
use App\Http\Controllers\NeedsSolutionController;
use App\Http\Controllers\OurPrincipleController;
use App\Http\Controllers\OurTeamController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectClientController;
use App\Http\Controllers\SupportMaintenanceController;
use App\Http\Controllers\TechnologySolutionController;
use App\Http\Controllers\TestimonialController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FrontController::class, 'index'])->name('front.index');
Route::get('/team', [FrontController::class, 'team'])->name('front.team');
Route::get('/about', [FrontController::class, 'about'])->name('front.about');
Route::get('/appointment', [FrontController::class, 'appointment'])->name('front.appointment');
Route::post('/appointment/store', [FrontController::class, 'appointment_store'])->name('front.appointment_store');
Route::get('/itsolutions', [FrontController::class, 'it_solutions'])->name('front.itsolutions');
Route::get('/supportmaintenance', [FrontController::class, 'support_maintenance'])->name('front.maintenance');
Route::get('buildwebsite', [FrontController::class, 'build_website'])->name('front.build_website');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::prefix('admin')->name('admin.')->group(function () {
        Route::middleware('can:manage statistics')->group(function () {
            Route::resource('statistics', CompanyStatisticController::class);
        });

        Route::middleware('can:manage products')->group(function () {
            Route::resource('products', ProductController::class);
        });

        Route::middleware('can:manage principles')->group(function () {
            Route::resource('principles', OurPrincipleController::class);
        });

        Route::middleware('can:manage testimonials')->group(function () {
            Route::resource('testimonials', TestimonialController::class);
        });

        Route::middleware('can:manage clients')->group(function () {
            Route::resource('clients', ProjectClientController::class);
        });

        Route::middleware('can:manage teams')->group(function () {
            Route::resource('teams', OurTeamController::class);
        });

        Route::middleware('can:manage abouts')->group(function () {
            Route::resource('abouts', CompanyAboutController::class);
        });

        Route::middleware('can:manage appointments')->group(function () {
            Route::resource('appointments', AppointmentController::class);
        });

        Route::middleware('can:manage hero section')->group(function () {
            Route::resource('hero_sections', HeroSectionController::class);
        });

        Route::middleware('can:manage about tim')->group(function () {
            Route::resource('about_tims', AboutTimController::class);
        });

        Route::middleware('can:manage needs solution')->group(function () {
            Route::resource('needs_solutions', NeedsSolutionController::class);
        });

        Route::middleware('can:manage technology solutions')->group(function () {
            Route::resource('technology_solutions', TechnologySolutionController::class);
        });

        Route::middleware('can:manage it solutions')->group(function () {
            Route::resource('it_solutions', ItSolutionsController::class);
        });

        Route::middleware('can:manage support maintenance')->group(function () {
            Route::resource('support_maintenance', SupportMaintenanceController::class);
        });

        Route::middleware('can:manate build website')->group(function () {
            Route::resource('build_website', BuildWebsiteController::class);
        });
    });
});

require __DIR__ . '/auth.php';




// Catatan 

/**
 * get pada Route digunakan untuk menampilkan data atau halaman yang kita kirim
 * jika kita ingin mambahakan atau menghapus kita bisa dapat menggunakan post atau delete
 * jika kita ingin mengupdate data baru tetapi 1 dari 10 data maka kita bisa gunakan patch
 * tetapi sebaliknya jika kita ingin mengupdate pada seluruh data kita bisa menggunakan put
 * ----------------------------------------------------------------------------------------
 * prefix() untuk menambahkan kata kunci dibelakang
 * 
 */
