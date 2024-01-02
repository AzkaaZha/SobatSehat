<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DaftarEventController;

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


Route::get('/dashboard', [DashboardController::class, 'index']);


// Daftar Event
Route::get('/event',
[DaftarEventController::class, 'index']);

Route::get('/event/CreateEvent',
[DaftarEventController::class, 'create']);

Route::post('/event/store',
[DaftarEventController::class, 'store']);

Route::get('/event/EditEvent/{id}',
[DaftarEventController::class, 'edit']);

Route::put('/event/update/{id}',
[DaftarEventController::class, 'update']);

Route::delete('/event/destroy/{id}',
[DaftarEventController::class, 'destroy']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
