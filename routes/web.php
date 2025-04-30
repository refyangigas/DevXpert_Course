<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TrainingController;

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
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/portfolio', [HomeController::class, 'portfolio'])->name('portfolio');
Route::get('/testimonials', [HomeController::class, 'testimonials'])->name('testimonials');

// Training Routes
Route::prefix('training')->group(function () {
    Route::get('/it', [TrainingController::class, 'it'])->name('training.it');
    Route::get('/design', [TrainingController::class, 'design'])->name('training.design');
    Route::get('/web', [TrainingController::class, 'web'])->name('training.web');
    Route::get('/mobile', [TrainingController::class, 'mobile'])->name('training.mobile');
});

// Article Routes
Route::get('/articles', [HomeController::class, 'articles'])->name('articles');
Route::get('/articles/search', [HomeController::class, 'articlesSearch'])->name('articles.search');
Route::get('/article/{slug}', [HomeController::class, 'articleDetail'])->name('article.detail');

// Info Routes
Route::get('/info', function () {
    return view('info');
})->name('info');

// Contact Form Submission
Route::post('/contact/submit', [App\Http\Controllers\ContactController::class, 'submit'])->name('contact.submit');
