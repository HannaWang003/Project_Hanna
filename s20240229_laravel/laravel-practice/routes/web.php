<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BabyController;
use App\Http\Controllers\MenController;

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
Route::get('/baby', [BabyController::class, 'baby']);
Route::resource('mens', MenController::class);