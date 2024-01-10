<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DaftarEventController;
use App\Http\Controllers\DaftarLokasiController;
use App\Http\Controllers\DaftarBeritaController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EventController;


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
Route::get('/home', [HomeController::class, 'index']);

Route::get('/event', [EventController::class, 'index']);

Route::middleware (['guest'])->group(function(){
    Route::get('/register', [AuthController::class, 'register']);
    Route::post('/register', [AuthController::class, 'register_action']);
    Route::get('/login', [AuthController::class, 'index'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
});

Route::middleware(['auth'])->group(function(){
    Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('UserAuth:kontributor,admin');
    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::get('/logout', [AuthController::class, 'logout']);
    
    // Daftar Event
    Route::get('/event', [DaftarEventController::class, 'index']);
    Route::get('/event/CreateEvent', [DaftarEventController::class, 'create']);
    Route::post('/event/store', [DaftarEventController::class, 'store']);
    Route::get('/event/EditEvent/{id}', [DaftarEventController::class, 'edit']);
    Route::put('/event/update/{id}', [DaftarEventController::class, 'update']);
    Route::delete('/event/destroy/{id}', [DaftarEventController::class, 'destroy']);

    // Daftar Lokasi
    Route::get('/location', [DaftarLokasiController::class, 'index']);
    Route::get('/location/CreateLokasi', [DaftarLokasiController::class, 'create']);
    Route::post('/location/store', [DaftarLokasiController::class, 'store']);
    Route::get('/location/EditLokasi/{id}', [DaftarLokasiController::class, 'edit']);
    Route::put('/location/update/{id}', [DaftarLokasiController::class, 'update']);
    Route::delete('/location/destroy/{id}', [DaftarLokasiController::class, 'destroy']);

    // Daftar Berita
    Route::get('/news', [DaftarBeritaController::class, 'index']);
    Route::get('/news/CreateBerita', [DaftarBeritaController::class, 'create']);
    Route::post('/news/store', [DaftarBeritaController::class, 'store']);
    Route::get('/news/EditBerita/{id}', [DaftarBeritaController::class, 'edit']);
    Route::put('/news/update/{id}', [DaftarBeritaController::class, 'update']);
    Route::delete('/news/destroy/{id}', [DaftarBeritaController::class, 'destroy']);
});







// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



