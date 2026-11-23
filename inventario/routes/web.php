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
    Route::get('/producto/create', [ProductoController::class, 'create'])
        ->name('producto.create');
    Route::post('/producto', [ProductoController::class, 'store'])
        ->name('producto.store');

    Route::get('/producto/{producto}/edit', [ProductoController::class, 'edit'])
        ->name('producto.edit');
    Route::put('/producto/{producto}', [ProductoController::class, 'update'])
        ->name('producto.update');
    Route::delete('/producto/{producto}', [ProductoController::class, 'destroy'])
        ->name('producto.destroy');

    Route::get('/logout', [LoginController::class, 'destroy'])->name('logout');
});
