@extends('layouts/app') <!-- Extiende el diseño de la aplicación -->

@section('content') <!-- Define una sección de contenido llamada "content" -->
    <div class="container"> <!-- Contenedor principal de la página -->
        <h2>Editar Préstamo</h2> <!-- Encabezado de nivel 2 para indicar la edición de un préstamo -->

        <form method="POST" action="{{ route('prestamos.update', $prestamo->id) }}"> <!-- Formulario con método POST para enviar datos a la ruta "prestamos.update" y actualizar un préstamo específico -->
            @csrf <!-- Token de seguridad CSRF para proteger el formulario de ataques -->
            @method('PUT') <!-- Método HTTP PUT para la actualización del préstamo -->

            <div class="form-group"> <!-- Grupo de formulario -->
                <label for="fecha_prestamo">Fecha de Préstamo:</label> <!-- Etiqueta para el campo de fecha de préstamo -->
                <input type="date" name="fecha_prestamo" class="form-control" value="{{ $prestamo->fecha_prestamo }}" required> <!-- Campo de entrada de fecha con valor predefinido y validación requerida -->
            </div>

            <div class="form-group"> <!-- Grupo de formulario -->
                <label for="fecha_devolucion">Fecha de Devolución:</label> <!-- Etiqueta para el campo de fecha de devolución -->
                <input type="date" name="fecha_devolucion" class="form-control" value="{{ $prestamo->fecha_devolucion }}"> <!-- Campo de entrada de fecha con valor predefinido -->
            </div>

            <div class="form-group"> <!-- Grupo de formulario -->
                <label for="usuario_id">Usuario:</label> <!-- Etiqueta para el campo de selección de usuario -->
                <select name="usuario_id" class="form-control" required> <!-- Menú desplegable para seleccionar un usuario con validación requerida -->
                    @foreach ($usuarios as $usuario) <!-- Bucle que recorre la lista de usuarios disponibles -->
                        <option value="{{ $usuario->id }}" {{ $usuario->id === $prestamo->usuario_id ? 'selected' : '' }}>{{ $usuario->nombre }}</option> <!-- Opción para seleccionar un usuario por su ID, con selección condicional basada en el usuario actual -->
                    @endforeach
                </select>
            </div>

            <div class="form-group"> <!-- Grupo de formulario -->
                <label for="libro_id">Libro:</label> <!-- Etiqueta para el campo de selección de equipo -->
                <select name="libro_id" class="form-control" required> <!-- Menú desplegable para seleccionar un equipo con validación requerida -->
                    @foreach ($libros as $libro) <!-- Bucle que recorre la lista de equipos disponibles -->
                        <option value="{{ $libro->id }}" {{ $libro->id === $prestamo->libro_id ? 'selected' : '' }}>{{ $equipo->nombre }}</option> <!-- Opción para seleccionar un equipo por su ID, con selección condicional basada en el equipo actual -->
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Guardar Cambios</button> <!-- Botón para enviar el formulario y guardar los cambios en el préstamo -->
        </form>
    </div>
@endsection <!-- Fin de la sección de contenido -->
