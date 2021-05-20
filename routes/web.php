<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AcessoryController;
use App\Http\Controllers\ClothController;
use App\Http\Controllers\IceCreamController;
use App\Http\Controllers\WineController;

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

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::resource('product', ProductController::class);
    Route::resource('acessory', AcessoryController::class);
    Route::resource('icecream', IceCreamController::class);
    Route::resource('cloth', ClothController::class);
    Route::resource('wine', WineController::class);
});



require __DIR__ . '/auth.php';
