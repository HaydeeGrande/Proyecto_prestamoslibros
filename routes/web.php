<?php
use App\Http\Controllers\PrestamoController; // Importa el controlador PrestamoController
use App\Http\Controllers\UsuarioController; // Importa el controlador UsuarioController
use App\Http\Controllers\LibroController; // Importa el controlador EquipoController
use Illuminate\Support\Facades\Route; // Importa la clase Route de Laravel

use Illuminate\Support\Facades\DB;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Aquí es donde puedes registrar las rutas web para tu aplicación. Estas
| rutas son cargadas por el RouteServiceProvider y todas serán asignadas al
| grupo de middleware "web". ¡Haz algo genial!
|
*/

// Ruta principal que muestra la vista 'welcome' cuando se accede al sitio web
Route::get('/', function () {
    return view('welcome');
});

// Rutas para el recurso 'equipos' gestionado por el controlador EquipoController
Route::resource('libros', LibroController::class);

// Rutas para el recurso 'usuarios' gestionado por el controlador UsuarioController
Route::resource('usuarios', UsuarioController::class);

// Rutas para el recurso 'prestamos' gestionado por el controlador PrestamoController
Route::resource('prestamos', PrestamoController::class);







