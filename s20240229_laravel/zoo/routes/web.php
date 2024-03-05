<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DogController;
use App\Http\Controllers\CatController;
use App\Http\Controllers\DogrController;
use App\Http\Controllers\CatrController;

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
    // return view('welcome');
    return redirect('/dogr');
});

Route::get('/dog', [DogController::class, 'run']);
Route::get('/cat', [CatController::class, 'run']);



Route::resource('dogr', DogrController::class);
// Route::get('/dogeApple', [DogrController::class, 'excel'])->name('dogr.excel');
Route::get('/dogeTesla', [DogrController::class, 'excel'])->name('apple');

Route::resource('catr', CatrController::class);