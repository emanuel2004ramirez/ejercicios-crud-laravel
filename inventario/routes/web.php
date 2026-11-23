<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductoController;

Route::get('/', function () {
    return view('login');
});

//Ruta de login
Route::get('/login', [LoginController::class, 'create'])->name('login');
Route::post('/login', [LoginController::class, 'store'])->name('login.store');

//Midelware
Route::middleware(['auth'])->group(function () {
    Route::get('/producto',   [ProductoController::class, 'index'] )
        ->name('producto.index');
   

    Route::get('/logout', [LoginController::class, 'destroy'])->name('logout');
});
