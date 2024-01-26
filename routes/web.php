<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
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

Route::get('/', [HomeController::class, 'index']);
Route::get('/apotek', [HomeController::class, 'apotek']);
Route::get('/detail', [HomeController::class, 'detail']);
Route::get('/contact-us', [HomeController::class, 'contact_us']);
Route::get('/login', [LoginController::class, 'index']);

