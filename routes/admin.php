<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\AsignaturaController;
use App\Http\Controllers\DocenteController;
use App\Http\Controllers\EstudianteController;

Route::get('', [HomeController::class, 'index']);

    /* Route::resource('asignatura', [AsignaturaController::class])->names('admin.asignatura');

Route::resource('docente', [DocenteController::class])->names('admin.docente');

Route::resource('estudiante', [EstudianteController::class])->names('admin.estudiante') */;
