<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LibroController;

//Ruta vacia
Route::get('/', function () {
    return redirect()->route('login');

});


//Todas las rutas

//Ruta ver login para el sistemas de biblioteca
Route::get('/login', [LoginController::class, 'create'])
    ->name('login');

//Ruta funcion login
Route::post('/login', [LoginController::class, 'store'])
    ->middleware('throttle:6,1')->name('login.store');

Route::middleware('auth')->group(function (){
    Route::view('/inicio', 'inicio')->name('inicio');
    Route::get('index', [LibroController::class, 'index'])
        ->name('libros.index');

    Route::post('/logout', [LoginController::class, 'destroy'])
        ->name('logout');
});

