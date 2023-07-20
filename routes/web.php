<?php

use App\Http\Controllers\ViewController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/offers', [ViewController::class, 'offers'])->name('offers');
Route::get('/news', [ViewController::class, 'news'])->name('news');
Route::get('/videos', [ViewController::class, 'videos'])->name('videos');
Route::get('/shows', [ViewController::class, 'shows'])->name('shows');
Route::get('/', [ViewController::class, 'home'])->name('home');


