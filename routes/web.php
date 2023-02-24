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

// Route::get('/', function () {
//     return view('home');
// });

use App\Http\Controllers\testController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\TestYearMiddleware;
use GuzzleHttp\Middleware;

Route::get('testing/{year?}', [testController::class, 'index'])
    ->middleware(TestYearMiddleware::class);
Route::get('/', [HomeController::class, 'index'])->name('home');
