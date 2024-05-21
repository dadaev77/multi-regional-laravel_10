<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CityController;
use App\Http\Controllers\PageController;

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

Route::get('/', [CityController::class, 'redirectToCity']);
Route::get('/select-city/{city}', [CityController::class, 'selectCity']);
Route::get('/{city}', [CityController::class, 'showCity'])->name('city.home');
Route::get('/{city}/about', [PageController::class, 'about'])->name('about');
Route::get('/{city}/news', [PageController::class, 'news'])->name('news');
