<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MascotaController;

Route::get('/', function () {
    return view('login');
});

Route::get('/login', [LoginController::class, 'create'])->name('login');
Route::post('/login', [LoginController::class, 'store'])->name('login.store');

Route::middleware(['auth'])->group(function () {
    Route::get('/mascotas', [MascotaController::class, 'index'])
        ->name('mascota.index');
    Route::get('/mascotas/create', [MascotaController::class, 'create'])
        ->name('mascota.create');
    Route::post('/mascotas', [MascotaController::class, 'store'])
        ->name('mascota.store');
    Route::get('/mascotas/{mascota}/edit', [MascotaController::class, 'edit'])
        ->name('mascota.edit');
    Route::put('/mascotas/{mascota}', [MascotaController::class, 'update'])
        ->name('mascota.update');

    Route::get('/logout', [LoginController::class, 'destroy'])->name('logout');
});
