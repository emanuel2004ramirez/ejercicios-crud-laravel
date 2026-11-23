<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TareaController;

Route::get('/', function () {
    return view('login');
});

//Ruta login
Route::get('/login', [LoginController::class, 'index'])
    ->name('login');    
Route::post('/login', [LoginController::class, 'store']);
//Middleware para proteger rutas
Route::middleware(['auth'])->group(function () {
    // Rutas protegidas aquí
    Route::get('/tarea', [TareaController::class, 'index' ]
    )->name('tarea.index');

    
    Route::post('/logout', [LoginController::class, 'destroy']);
});