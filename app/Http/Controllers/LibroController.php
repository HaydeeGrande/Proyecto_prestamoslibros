<?php

namespace App\Http\Controllers;

use App\Models\Libro;
use Illuminate\Http\Request;

class LibroController extends Controller
{
    /**
     * Muestra una lista de recursos (equipos).
     */
    public function index()
    {
        // Obtener todos los registros de libros desde la base de datos
        $libros = Libro::all(); // Recupera todos los registros de la tabla "usuarios".

        // Retornar la vista 'libros.index' y pasar los libros como variable usando compact
        return view('libros.index', compact('libros'));
    }

    /**
     * Muestra el formulario para crear un nuevo recurso (equipo).
     */
    public function create()
    {
        // Retornar la vista 'libros.create' para mostrar el formulario de creación de equipo
        return view('libros.create');
    }

    /**
     * Almacena un nuevo recurso (equipo) recién creado en el almacenamiento.
     */
    public function store(Request $request)
    {
        // Crear una nueva instancia de Equipo y asignar los valores del formulario
        $libro = new Libro([
            'nombre' => $request->input('nombre'),
            'descripcion' => $request->input('descripcion'),
            'fecha_adquisicion' => $request->input('fecha_adquisicion'),
            'estado' => $request->input('estado'),
        ]);

        // Guardar el nuevo libro en la base de datos
        $libro->save();

        // Redirigir a la página de 'libros' con un mensaje de éxito
        return redirect('/libros')->with('success', 'libro creado correctamente');
    }

    /**
     * Muestra el recurso (libros) especificado.
     */
    /**
     * Muestra el formulario para editar el recurso (libros) especificado.
     */
    public function edit($id)
    {
        // Encontrar un libros por su ID desde la base de datos
        $libros = Libro::find($id);

        // Retornar la vista 'libros.edit' y pasar el libros como variable usando compact
        return view('libros.edit', compact('libro'));
    }

    /**
     * Actualiza el recurso (libros) especificado en el almacenamiento.
     */
    public function update(Request $request, $id)
    {
        // Encontrar un libro por su ID desde la base de datos
        $libro = Libro::find($id);

        // Actualizar los valores del libro con los valores del formulario
        $libro->update($request->all());

        // Redirigir a la página de 'libros' con un mensaje de éxito
        return redirect('/libros')->with('success', 'Libro actualizado correctamente');
    }

    /**
     * Elimina el recurso (libro) especificado del almacenamiento.
     */
    public function destroy($id)
    {
        // Encontrar un libro por su ID desde la base de datos y eliminarlo
        $libro = Libro::find($id);
        $libro->delete();

        // Redirigir a la página de 'libros' con un mensaje de éxito
        return redirect('/libros')->with('success', 'libro eliminado correctamente');
    }
}
