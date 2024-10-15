<?php

use Illuminate\Support\Facades\Route;

// Rutas para Empresas
use App\Http\Controllers\EmpresasController;

Route::get('/empresas/tabla', [EmpresasController::class, 'index'])->name('empresa.index');
Route::get('/empresas/nuevo', [EmpresasController::class, 'nuevo'])->name('empresa.nuevo');
Route::post('/empresas/guardar', [EmpresasController::class, 'guardar_nuevo'])->name('guardar_nuevo');
Route::get('/empresas/editar/{id}', [EmpresasController::class, 'editar'])->name('empresa.editar');
Route::post('/empresas/actualizar/{id}', [EmpresasController::class, 'guardar_editar'])->name('empresa.actualizar');
Route::get('/empresas/borrar/{id}', [EmpresasController::class, 'borrar'])->name('empresas.borrar');

// Rutas para Estudiantes
use App\Http\Controllers\EstudiantesController;

Route::get('/estudiantes/tabla', [EstudiantesController::class, 'index'])->name('estudiante.index');
Route::get('/estudiantes/nuevo', [EstudiantesController::class, 'nuevo'])->name('estudiante.nuevo');
Route::post('/estudiantes/guardar', [EstudiantesController::class, 'guardar_nuevo'])->name('estudiante.guardar');
Route::get('/estudiantes/editar/{id}', [EstudiantesController::class, 'editar'])->name('estudiante.editar');
Route::post('/estudiantes/actualizar/{id}', [EstudiantesController::class, 'guardar_editar'])->name('estudiante.actualizar');
Route::get('/estudiantes/borrar/{id}', [EstudiantesController::class, 'borrar'])->name('estudiante.borrar');

// Rutas para Tutores Académicos
use App\Http\Controllers\TutoresAcademicosController;

Route::get('/tutores/tabla', [TutoresAcademicosController::class, 'index'])->name('tutor.index');
Route::get('/tutores/nuevo', [TutoresAcademicosController::class, 'nuevo'])->name('tutor.nuevo');
Route::post('/tutores/guardar', [TutoresAcademicosController::class, 'guardar_nuevo'])->name('tutor.guardar');
Route::get('/tutores/editar/{id}', [TutoresAcademicosController::class, 'editar'])->name('tutor.editar');
Route::post('/tutores/actualizar/{id}', [TutoresAcademicosController::class, 'guardar_editar'])->name('tutor.actualizar');
Route::get('/tutores/borrar/{id}', [TutoresAcademicosController::class, 'borrar'])->name('tutor.borrar');
