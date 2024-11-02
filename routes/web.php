<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoutingController;
use App\Http\Controllers\AuthController;

// Ruta de login para mostrar la vista de login
Route::get('/login', [AuthController::class, 'Login'])->name('login');

// Ruta de login para procesar el formulario de login
Route::post('/login', [AuthController::class, 'LoginPost'])->name('login.post');

// Ruta de logout
Route::post('/logout', [AuthController::class, 'Logout'])->middleware('auth')->name('logout');

// Ruta de inicio o "home"
Route::get('/home', fn() => view('index'))->name('home');

// Rutas adicionales
Route::group(['prefix' => '/'], function () {
    Route::get('', [RoutingController::class, 'index'])->name('root');
    Route::get('{first}/{second}/{third}', [RoutingController::class, 'thirdLevel'])->name('third');
    Route::get('{first}/{second}', [RoutingController::class, 'secondLevel'])->name('second');
    Route::get('{any}', [RoutingController::class, 'root'])->name('any');
});


