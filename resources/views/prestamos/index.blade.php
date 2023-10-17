@extends('layouts/app') <!-- Extiende el diseño de la aplicación -->

@section('content') <!-- Define una sección de contenido llamada "content" -->
    <div class="container"> <!-- Contenedor principal de la página -->
        <h2>Lista de Préstamos</h2> <!-- Encabezado de nivel 2 para indicar la lista de préstamos -->

        <table class="table"> <!-- Tabla para mostrar la lista de préstamos -->
            <thead> <!-- Encabezado de la tabla -->
                <tr> <!-- Fila de encabezados de columna -->
                    <th>Fecha de Préstamo</th> <!-- Encabezado de columna para la fecha de préstamo -->
                    <th>Fecha de Devolución</th> <!-- Encabezado de columna para la fecha de devolución -->
                    <th>Usuario</th> <!-- Encabezado de columna para el usuario -->
                    <th>Libro</th> <!-- Encabezado de columna para el libro -->
                    <th>Acciones</th> <!-- Encabezado de columna para las acciones -->
                </tr>
            </thead>
            <tbody> <!-- Cuerpo de la tabla -->
                @foreach ($prestamos as $prestamo) <!-- Bucle que recorre la lista de préstamos -->
                    <tr> <!-- Fila de datos de préstamo -->
                        <td>{{ $prestamo->fecha_prestamo }}</td> <!-- Celda para mostrar la fecha de préstamo -->
                        <td>{{ $prestamo->fecha_devolucion }}</td> <!-- Celda para mostrar la fecha de devolución -->
                        <td>{{ $prestamo->usuario->nombre }}</td> <!-- Celda para mostrar el nombre del usuario asociado al préstamo -->
                        <td>{{ $prestamo->equipo->nombre }}</td> <!-- Celda para mostrar el nombre del equipo asociado al préstamo -->
                        <td>
                            
                            <a href="{{ route('prestamos.edit', $prestamo->id) }}" class="btn btn-warning">Editar</a> <!-- Enlace para editar el préstamo -->
                            <form action="{{ route('prestamos.destroy', $prestamo->id) }}" method="POST" style="display: inline;"> <!-- Formulario para eliminar el préstamo -->
                                @csrf <!-- Token de seguridad CSRF para proteger el formulario -->
                                @method('DELETE') <!-- Método HTTP DELETE para la eliminación del préstamo -->
                                <button type="submit" class="btn btn-danger">Eliminar</button> <!-- Botón para enviar el formulario de eliminación -->
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <a href="{{ route('prestamos.create') }}" class="btn btn-success">Crear Préstamo</a> <!-- Enlace para crear un nuevo préstamo -->
    </div>
@endsection <!-- Fin de la sección de contenido -->
