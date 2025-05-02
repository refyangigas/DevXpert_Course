<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TrainingController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\WebDevelopmentController; // Import controller baru

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Home Routes
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/vision-mission', [HomeController::class, 'visionMission'])->name('vision-mission');
Route::get('/portfolio', [HomeController::class, 'portfolio'])->name('portfolio');

Route::get('/testimonials', [TestimonialController::class, 'index'])->name('testimonials');

// Web Development Route
Route::get('/web-development', [WebDevelopmentController::class, 'index'])->name('web-development');

// Contact Route
Route::get('/contact', [ContactController::class, 'index'])->name('contact'); // Tambahkan route untuk halaman contact
Route::post('/contact/submit', [ContactController::class, 'submit'])->name('contact.submit'); // Hanya satu route submit

// Training Routes
Route::prefix('training')->group(function () {
    Route::get('/it', [TrainingController::class, 'it'])->name('training.it');
    Route::get('/design', [TrainingController::class, 'design'])->name('training.design');
    Route::get('/web', [TrainingController::class, 'web'])->name('training.web');
    Route::get('/mobile', [TrainingController::class, 'mobile'])->name('training.mobile');
});

// Routes untuk artikel
Route::get('/articles', [ArticleController::class, 'index'])->name('articles.index');
Route::get('/articles/search', [ArticleController::class, 'search'])->name('articles.search');
Route::get('/articles/category/{slug}', [ArticleController::class, 'byCategory'])->name('articles.category');
Route::get('/articles/tag/{slug}', [ArticleController::class, 'byTag'])->name('articles.tag');
Route::get('/article/{slug}', [ArticleController::class, 'show'])->name('articles.show');

// Info Routes
Route::get('/info', function () {
    return view('info');
})->name('info');
