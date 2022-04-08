<?php

use App\Http\Controllers\AtiController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/home', function () {
//     return view('home');
// });

Route::get('/', [AtiController::class,'index'])->name('home.view');

Route::get('/about', [AtiController::class,'about'])->name('about.view');

Route::get('/service', [AtiController::class,'service'])->name('service.view');

Route::get('/service-details', [AtiController::class,'serviceDetails'])->name('service-details.view');

Route::get('/portfolio', [AtiController::class,'portfolio'])->name('portfolio.view');

Route::get('/portfolio-details', [AtiController::class,'portfolioDetails'])->name('portfolio-details.view');

Route::get('/team', [AtiController::class,'team'])->name('team.view');

Route::get('/blog', [AtiController::class,'blog'])->name('blog.view');

Route::get('/blog-details', [AtiController::class,'blogDetails'])->name('blog-details.view');

Route::get('/contact', [AtiController::class,'contact'])->name('contact.view');
