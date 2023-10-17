@extends('layouts/app') <!-- Extiende el diseño de la aplicación -->

@section('content') <!-- Define una sección de contenido llamada "content" -->
    <div class="container"> <!-- Contenedor principal de la página -->
        <h2>Lista de Usuarios</h2> <!-- Encabezado de nivel 2 para la lista de usuarios -->

        <table class="table"> <!-- Tabla para mostrar la lista de usuarios -->
            <thead> <!-- Encabezado de la tabla -->
                <tr> <!-- Fila de encabezado de la tabla -->
                    <th>Nombre</th> <!-- Encabezado de columna para el nombre de usuario -->
                    <th>Correo Electrónico</th> <!-- Encabezado de columna para el correo electrónico del usuario -->
                    <!-- Agrega otros encabezados de columna según tus necesidades -->
                    <th>Acciones</th> <!-- Encabezado de columna para las acciones disponibles -->
                </tr>
            </thead>
            <tbody> <!-- Cuerpo de la tabla -->
                @foreach ($usuarios as $usuario) <!-- Itera a través de la lista de usuarios -->
                    <tr> <!-- Fila de datos para cada usuario -->
                        <td>{{ $usuario->nombre }}</td> <!-- Muestra el nombre del usuario -->
                        <td>{{ $usuario->correo_electronico }}</td> <!-- Muestra el correo electrónico del usuario -->
                        <!-- Muestra otros datos del usuario según tus necesidades -->

                        <td> <!-- Columna de acciones -->
                            
                            <a href="{{ route('usuarios.edit', $usuario->id) }}" class="btn btn-warning">Editar</a> <!-- Enlace para editar el usuario -->
                            <form action="{{ route('usuarios.destroy', $usuario->id) }}" method="POST" style="display: inline;"> <!-- Formulario para eliminar el usuario -->
                                @csrf <!-- Token de seguridad CSRF -->
                                @method('DELETE') <!-- Método HTTP DELETE para eliminar -->
                                <button type="submit" class="btn btn-danger">Eliminar</button> <!-- Botón para confirmar la eliminación del usuario -->
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <a href="{{ route('usuarios.create') }}" class="btn btn-success">Crear Usuario</a> <!-- Enlace para crear un nuevo usuario -->
    </div>
@endsection <!-- Fin de la sección de contenido -->
