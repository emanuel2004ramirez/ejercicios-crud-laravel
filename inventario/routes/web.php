<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return view('login');
});

//Ruta de login
Route::get('/login', [LoginController::class, 'create'])->name('login');
Route::post('/login', [LoginController::class, 'store'])->name('login.store');

//Midelware
Route::middleware(['auth'])->group(function () {
    Route::get('/productos', function () { return view('producto.index'); })
        ->name('producto.index');
    Route::get('/logout', [LoginController::class, 'destroy'])->name('logout');
});
