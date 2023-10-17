@extends('layouts/app') <!-- Extiende el diseño de la aplicación -->

@section('content') <!-- Inicio de la sección de contenido -->

<div class="container"> <!-- Contenedor principal -->
    <h2>Lista de Libros</h2> <!-- Encabezado de nivel 2 -->

    <table class="table"> <!-- Tabla para mostrar la lista de libros -->
        <thead> <!-- Cabecera de la tabla -->
            <tr> <!-- Fila de encabezado -->
                <th>Nombre</th> <!-- Columna para el nombre -->
                <th>Descripción</th> <!-- Columna para la descripción -->
                <th>Fecha de Adquisición</th> <!-- Columna para la fecha de adquisición -->
                <th>Estado</th> <!-- Columna para el estado -->
                <th></th>
                <th>Acciones</th> <!-- Columna para las acciones -->
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody> <!-- Cuerpo de la tabla -->
            @foreach ($libros as $libro) <!-- Bucle para iterar a través de los libros -->
                <tr> <!-- Fila de datos -->
                    <td>{{ $libro->nombre }}</td> <!-- Celda con el nombre del libro -->
                    <td>{{ $libro->descripcion }}</td> <!-- Celda con la descripción del libro -->
                    <td>{{ $libro->fecha_adquisicion }}</td> <!-- Celda con la fecha de adquisición del libro -->
                    <td>{{ $libro->estado }}</td> <!-- Celda con el estado del libro -->
                    
                    <td> <!-- Celda con botones de acciones -->
                        
                    </td>

                    <td>
                        <a href="{{ route('libros.edit', $libro->id) }}" class="btn btn-warning">Editar</a> <!-- Botón para editar el libro -->
                    </td>

                    <td>
                        <form action="{{ route('libros.destroy', $libro->id) }}" method="POST" style="display: inline;"> <!-- Formulario para eliminar el libro -->
                        @csrf <!-- Token de seguridad CSRF -->
                        @method('DELETE') <!-- Método HTTP DELETE para la eliminación -->
                        <button type="submit" class="btn btn-danger">Eliminar</button> <!-- Botón para eliminar el libro -->
                        </form>
                    </td>
                    <td></td>
                </tr>
            @endforeach <!-- Fin del bucle de libros -->
        </tbody>
    </table>

    <a href="{{ route('libros.create') }}" class="btn btn-success">Crear libro</a> <!-- Botón para crear un nuevo libro -->
</div> <!-- Fin del contenedor principal -->

@endsection <!-- Fin de la sección de contenido -->
