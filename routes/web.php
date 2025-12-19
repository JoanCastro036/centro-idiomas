<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstudianteController;

// Redirige la entrada principal al listado de estudiantes
Route::get('/', function () {
    return redirect()->route('estudiantes.index');
});

// Crea todas las rutas para el sistema (index, create, store, edit, update)
Route::resource('estudiantes', EstudianteController::class);
