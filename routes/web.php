<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class, 'index']);

Route::get('/first', [HomeController::class, 'first']);

Route::get('/basic', [HomeController::class, 'basic']);

/*
|
| Course home work practice route
|
*/

Route::get('/homework/first', [HomeController::class, 'homework1']);


/*
|
| Some custom test route
|
*/

Route::get('/input/test', [HomeController::class, 'inputTest']);
