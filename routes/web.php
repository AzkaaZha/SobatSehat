<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DaftarEventController;
use App\Http\Controllers\AuthController;

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
Route::middleware (['guest'])->group(function(){
    Route::get('/login', [AuthController::class, 'index'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
});

Route::middleware(['auth'])->group(function(){
    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::get('/dashboard/kontributor', [DashboardController::class, 'kontributor'])->middleware('UserAuth:kontributor');
    Route::get('/dashboard/admin', [DashboardController::class, 'admin'])->middleware('UserAuth:admin');
    Route::get('/dashboard/user', [DashboardController::class, 'user'])->middleware('UserAuth:user');
    Route::get('/logout', [AuthController::class, 'logout']);

    Route::get('/dashboard', [DashboardController::class, 'index']);

    // Daftar Event
    Route::get('/event', [DaftarEventController::class, 'index']);

    Route::get('/event/CreateEvent', [DaftarEventController::class, 'create']);

    Route::post('/event/store', [DaftarEventController::class, 'store']);

    Route::get('/event/EditEvent/{id}', [DaftarEventController::class, 'edit']);

    Route::put('/event/update/{id}', [DaftarEventController::class, 'update']);

    Route::delete('/event/destroy/{id}', [DaftarEventController::class, 'destroy']);
});

Route::get('/home', function () { return redirect('/dashboard');
});





// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



