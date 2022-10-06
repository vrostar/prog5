<?php

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

Route::get('/', [\App\Http\Controllers\GriddyController::class, 'show'])->name('home');
Route::get('/about', [\App\Http\Controllers\AboutController::class, 'show'])->name('about');

Auth::routes();

Route::get('/art', [App\Http\Controllers\ArtController::class, 'index'])->name('art');
