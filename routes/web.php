<?php

use Illuminate\Support\Facades\Route;

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
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('/chi-siamo', [PageController::class, 'about'])->name('about');
Route::get('/contatti', [PageController::class, 'contacts'])->name('contacts');
Route::get('/movie-list', [PageController::class, 'movieList'])->name('movieList');
Route::get('/movie-vintage-list', [PageController::class, 'oldMovieList'])->name('oldMovieList');
Route::get('/movie-detail/{id}', [PageController::class, 'movieDetail'])->name('movieDetail');
