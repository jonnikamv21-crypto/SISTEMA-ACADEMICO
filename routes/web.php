<?php

use App\Http\Controllers\InicioController;
use App\Http\Controllers\EstudianteController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/inicio', [InicioController::class, 'index'])->name('inicio');

Route::get('/estudiante', [EstudianteController::class, 'index'])->name('estudiante');

Route::get('/dashboard', [InicioController::class, 'dashboard'])->name('dashboard');