<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return view('login');
});

Route::get('/login', [LoginController::class, 'create'])->name('login');
Route::post('/login', [LoginController::class, 'store'])->name('login.store');

Route::middleware(['auth'])->group(function () {
    Route::get('/mascotas', function () {
        return 'Registro de mascotas';
    })->name('mascota.index');

    Route::get('/logout', [LoginController::class, 'destroy'])->name('logout');
});
