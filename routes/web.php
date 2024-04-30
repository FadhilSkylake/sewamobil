<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegisController;

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

// Route untuk menampilkan form login
Route::get('/login', [AuthController::class, 'loginForm'])->name('login');

// Route untuk proses login
Route::post('/login', [AuthController::class, 'login']);

// Route untuk proses logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Route untuk menampilkan form Regis
Route::get('/regis', [RegisController::class, 'index']);

// Route untuk proses login
Route::post('/store', [RegisController::class, 'store'])->name('store');
