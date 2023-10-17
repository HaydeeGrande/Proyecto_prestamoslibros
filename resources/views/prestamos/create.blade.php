@extends('layouts/app') <!-- Extiende el diseño de la aplicación -->

@section('content') <!-- Define una sección de contenido llamada "content" -->
    <div class="container"> <!-- Contenedor principal de la página -->
        <h2>Crear Préstamo</h2> <!-- Encabezado de nivel 2 para indicar la creación de un préstamo -->

        <form method="POST" action="{{ route('prestamos.store') }}"> <!-- Formulario con método POST para enviar datos a la ruta "prestamos.store" -->
            @csrf <!-- Token de seguridad CSRF para proteger el formulario de ataques -->
            <div class="form-group"> <!-- Grupo de formulario -->
                <label for="fecha_prestamo">Fecha de Préstamo:</label> <!-- Etiqueta para el campo de fecha de préstamo -->
                <input type="date" name="fecha_prestamo" class="form-control" required> <!-- Campo de entrada de fecha con validación requerida -->
            </div>

            <div class="form-group"> <!-- Grupo de formulario -->
                <label for="fecha_devolucion">Fecha de Devolución:</label> <!-- Etiqueta para el campo de fecha de devolución -->
                <input type="date" name="fecha_devolucion" class="form-control"> <!-- Campo de entrada de fecha -->
            </div>

            <div class="form-group"> <!-- Grupo de formulario -->
                <label for="usuario_id">Usuario:</label> <!-- Etiqueta para el campo de selección de usuario -->
                <select name="usuario_id" class="form-control" required> <!-- Menú desplegable para seleccionar un usuario con validación requerida -->
                    @foreach ($usuarios as $usuario) <!-- Bucle que recorre la lista de usuarios disponibles -->
                        <option value="{{ $usuario->id }}">{{ $usuario->nombre }}</option> <!-- Opción para seleccionar un usuario por su ID y mostrar su nombre -->
                    @endforeach
                </select>
            </div>

            <div class="form-group"> <!-- Grupo de formulario -->
                <label for="libro_id">Libro:</label> <!-- Etiqueta para el campo de selección de libro -->
                <select name="libro_id" class="form-control" required> <!-- Menú desplegable para seleccionar un libro con validación requerida -->
                    @foreach ($libros as $libro) <!-- Bucle que recorre la lista de libros disponibles -->
                        <option value="{{ $libro->id }}">{{ $libro->nombre }}</option> <!-- Opción para seleccionar un libro por su ID y mostrar su nombre -->
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Guardar</button> <!-- Botón para enviar el formulario y guardar el préstamo -->
        </form>
    </div>
@endsection <!-- Fin de la sección de contenido -->
