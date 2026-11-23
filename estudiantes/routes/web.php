<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\EstudianteController;

Route::get('/', function () {
    return view('login');
});

Route::get('/login', [LoginController::class, 'create'])->name('login');
Route::post('/login', [LoginController::class, 'store'])->name('login.store');

Route::middleware(['auth'])->group(function () {
    Route::get('/estudiantes', [EstudianteController::class, 'index'])
        ->name('estudiante.index');
    Route::get('/estudiantes/create', [EstudianteController::class, 'create'])
        ->name('estudiante.create');
    Route::post('/estudiantes', [EstudianteController::class, 'store'])
        ->name('estudiante.store');
    Route::get('/estudiantes/{estudiante}/edit', [EstudianteController::class, 'edit'])
        ->name('estudiante.edit');
    Route::put('/estudiantes/{estudiante}', [EstudianteController::class, 'update'])
        ->name('estudiante.update');
    Route::delete('/estudiantes/{estudiante}', [EstudianteController::class, 'destroy'])
        ->name('estudiante.destroy');

    Route::get('/logout', [LoginController::class, 'destroy'])->name('logout');
});
