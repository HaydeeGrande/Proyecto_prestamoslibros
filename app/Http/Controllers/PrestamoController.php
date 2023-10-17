<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use App\Models\Libro;
use App\Models\Prestamo;
use Illuminate\Http\Request;

class PrestamoController extends Controller
{
    /**
     * Muestra una lista de recursos (préstamos).
     */
    public function index()
    {
        // Obtener todos los registros de préstamos desde la base de datos
        $prestamos = Prestamo::all();

        // Retornar la vista 'prestamos.index' y pasar los préstamos como variable usando compact
        return view('prestamos.index', compact('prestamos'));
    }

    /**
     * Muestra el formulario para crear un nuevo recurso (préstamo).
     */
    public function create()
    {
        // Obtener todos los usuarios desde tu modelo Usuario
        $usuarios = Usuario::all();

        // Obtener todos los libros desde tu modelo Equipo
        $libros = Libro::all();

        // Retornar la vista 'prestamos.create' y pasar los usuarios y libros como variables usando compact
        return view('prestamos.create', compact('usuarios', 'libros'));
    }

    /**
     * Almacena un nuevo recurso (préstamo) recién creado en el almacenamiento.
     */
    public function store(Request $request)
    {
        // Crear una nueva instancia de Prestamo y asignar los valores del formulario
        $prestamo = new Prestamo([
            'fecha_prestamo' => $request->input('fecha_prestamo'),
            'fecha_devolucion' => $request->input('fecha_devolucion'),
            'usuario_id' => $request->input('usuario_id'),
            'libro_id' => $request->input('libro_id'),
        ]);

        // Guardar el nuevo préstamo en la base de datos
        $prestamo->save();

        // Puedes agregar aquí lógica para actualizar el estado del libro a "prestamo" u otras acciones relevantes

        // Redirigir a la página de 'prestamos' con un mensaje de éxito
        return redirect('/prestamos')->with('success', 'Préstamo creado correctamente');
    }

    /**
     * Muestra el recurso (préstamo) especificado.
     */
   

    /**
     * Muestra el formulario para editar el recurso (préstamo) especificado.
     */
    public function edit($id)
    {
        // Encontrar un préstamo por su ID desde la base de datos
        $prestamo = Prestamo::find($id);

        // Obtener todos los usuarios desde tu modelo Usuario
        $usuarios = Usuario::all();

        // Obtener todos los libros desde tu modelo Equipo
        $libros = Libro::all();

        // Retornar la vista 'prestamos.edit' y pasar el préstamo, usuarios y libros como variables usando compact
        return view('prestamos.edit', compact('prestamo', 'usuarios', 'libros'));
    }

    /**
     * Actualiza el recurso (préstamo) especificado en el almacenamiento.
     */
    public function update(Request $request, $id)
    {
        // Encontrar un préstamo por su ID desde la base de datos
        $prestamo = Prestamo::find($id);

        // Actualizar los valores del préstamo con los valores del formulario
        $prestamo->update($request->all());

        // Redirigir a la página de 'prestamos' con un mensaje de éxito
        return redirect('/prestamos')->with('success', 'Préstamo actualizado correctamente');
    }

    /**
     * Elimina el recurso (préstamo) especificado del almacenamiento.
     */
    public function destroy($id)
    {
        // Encontrar un préstamo por su ID desde la base de datos y eliminarlo
        $prestamo = Prestamo::find($id);
        $prestamo->delete();

        // Puedes agregar aquí lógica para actualizar el estado del equipo u otras acciones relevantes

        // Redirigir a la página de 'prestamos' con un mensaje de éxito
        return redirect('/prestamos')->with('success', 'Préstamo eliminado correctamente');
    }
}
