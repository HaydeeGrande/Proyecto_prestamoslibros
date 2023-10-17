<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    /**
     * Muestra una lista de recursos (usuarios).
     */
    public function index()
    {
        // Obtener todos los registros de usuarios desde la base de datos
        $usuarios = Usuario::all();

        // Retornar la vista 'usuarios.index' y pasar los usuarios como variable usando compact
        return view('usuarios.index', compact('usuarios'));
    }

    /**
     * Muestra el formulario para crear un nuevo recurso (usuario).
     */
    public function create()
    {
        // Retornar la vista 'usuarios.create'
        return view('usuarios.create');
    }

    /**
     * Almacena un nuevo recurso (usuario) recién creado en el almacenamiento.
     */
    public function store(Request $request)
    {
        // Crear una nueva instancia de Usuario y asignar los valores del formulario
        $usuario = new Usuario([
            'nombre' => $request->input('nombre'),
            'correo_electronico' => $request->input('correo_electronico'),
            // Agregar otros campos aquí si es necesario
        ]);

        // Guardar el nuevo usuario en la base de datos
        $usuario->save();

        // Redirigir a la página de 'usuarios' con un mensaje de éxito
        return redirect('/usuarios')->with('success', 'Usuario creado correctamente');
    }

    /**
     * Muestra el recurso (usuario) especificado.
     */
   

    /**
     * Muestra el formulario para editar el recurso (usuario) especificado.
     */
    public function edit($id)
    {
        // Encontrar un usuario por su ID desde la base de datos
        $usuario = Usuario::find($id);

        // Retornar la vista 'usuarios.edit' y pasar el usuario como variable usando compact
        return view('usuarios.edit', compact('usuario'));
    }

    /**
     * Actualiza el recurso (usuario) especificado en el almacenamiento.
     */
    public function update(Request $request, $id)
    {
        // Encontrar un usuario por su ID desde la base de datos
        $usuario = Usuario::find($id);

        // Actualizar los valores del usuario con los valores del formulario
        $usuario->update($request->all());

        // Redirigir a la página de 'usuarios' con un mensaje de éxito
        return redirect('/usuarios')->with('success', 'Usuario actualizado correctamente');
    }

    /**
     * Elimina el recurso (usuario) especificado del almacenamiento.
     */
    public function destroy($id)
    {
        // Encontrar un usuario por su ID desde la base de datos y eliminarlo
        $usuario = Usuario::find($id);
        $usuario->delete();

        // Redirigir a la página de 'usuarios' con un mensaje de éxito
        return redirect('/usuarios')->with('success', 'Usuario eliminado correctamente');
    }
}
