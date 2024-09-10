<?php

use App\Http\Controllers\PeliculaController;
use Illuminate\Support\Facades\Route;

// Ruta principal que retorna la vista 'welcome'.
Route::get('/', function () {
    return view('welcome');
});

// Ruta para listar las películas.
Route::get('/pelicula-index', [PeliculaController::class, 'index'])->name('pelicula-index');

// Ruta para mostrar una película específica.
Route::get('/pelicula/{pelicula}', [PeliculaController::class, 'show'])->name('pelicula.show');

// Ruta para mostrar la vista de creación de una nueva película.
Route::get('/pelicula-create', [PeliculaController::class, 'create'])->name('pelicula.create');

// Ruta para almacenar una nueva película en la base de datos.
Route::post('/pelicula-store', [PeliculaController::class, 'store'])->name('pelicula.store');

// Ruta para mostrar la vista de actualización de una película.
Route::get('/pelicula-update/{pelicula}', [PeliculaController::class, 'updateView'])->name('pelicula.update');

// Ruta para actualizar una película en la base de datos.
Route::put('/pelicula-update/{id}', [PeliculaController::class, 'update'])->name('pelicula.put');

// Ruta para eliminar una película específica.
Route::delete('/pelicula-delete/{pelicula}', [PeliculaController::class, 'delete'])->name('pelicula.delete');

// Ruta para generar el reporte en PDF de las películas.
Route::get('/pelicula-reporte', [PeliculaController::class, 'getReport'])->name('pelicula.reporte');
