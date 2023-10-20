<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\JasaPerusahaanController;
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
    return view('organizer.dashboard');
})->middleware('auth');

Route::get('/login', [AuthController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'loginProcess']);
Route::get('/logout', [AuthController::class, 'logout']);

Route::resource('/admin', AdminController::class)->except(['show', 'edit', 'update'])->middleware('auth');

Route::resource('/jasaperusahaan', JasaPerusahaanController::class)->middleware('auth');
