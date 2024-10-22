<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComicController;

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

// Homepage
Route::get('/', function () {
    return view('welcome');
});

// Comics List Page
Route::get('/comics', [ComicController::class, 'index'])->name('comics.index');

Route::view('/about', 'pages.about')->name('about');
Route::view('/contact', 'pages.contact')->name('contact');