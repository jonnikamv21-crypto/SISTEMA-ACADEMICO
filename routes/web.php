<?php

use App\Http\Controllers\InicioController;
use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\CursoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/inicio', [InicioController::class, 'index'])->name('inicio');

Route::get('/estudiante', [EstudianteController::class, 'index'])->name('estudiante.index');

Route::get('/estudiantes/{id}', [EstudianteController::class, 'show'])->name('estudiantes.show');

Route::get('/curso', [CursoController::class, 'curso'])->name('curso.curso');


Route::get('/curso/{id}', [CursoController::class, 'show'])->name('curso.show');

Route::get('/dashboard', [InicioController::class, 'dashboard'])->name('dashboard');