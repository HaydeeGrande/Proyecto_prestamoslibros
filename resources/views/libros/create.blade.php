@extends('layouts/app') <!-- Extiende el diseño de la aplicación -->

@section('content') <!-- Sección de contenido -->
    <div class="container"> <!-- Contenedor de la página -->
        <h2>Crear libro</h2> <!-- Encabezado de nivel 2 -->

        <form method="POST" action="{{ route('libros.store') }}"> <!-- Formulario con método POST y acción dinámica -->
            @csrf <!-- Token de seguridad CSRF -->

            <div class="form-group"> <!-- Grupo de formulario -->
                <label for="nombre">Nombre:</label> <!-- Etiqueta del campo "nombre" -->
                <input type="text" name="nombre" class="form-control" required> <!-- Campo de texto para "nombre" con validación requerida -->
            </div>

            <div class="form-group"> <!-- Grupo de formulario -->
                <label for="descripcion">Descripción:</label> <!-- Etiqueta del campo "descripcion" -->
                <textarea name="descripcion" class="form-control" required></textarea> <!-- Área de texto para "descripcion" con validación requerida -->
            </div>

            <div class="form-group"> <!-- Grupo de formulario -->
                <label for="fecha_adquisicion">Fecha de Adquisición:</label> <!-- Etiqueta del campo "fecha_adquisicion" -->
                <input type="date" name="fecha_adquisicion" class="form-control" required> <!-- Campo de fecha para "fecha_adquisicion" con validación requerida -->
            </div>

            <div class="form-group"> <!-- Grupo de formulario -->
                <label for="estado">Estado:</label> <!-- Etiqueta del campo "estado" -->
                <select name="estado" class="form-control" required> <!-- Menú desplegable para "estado" con validación requerida -->
                    <option value="Disponible">Disponible</option> <!-- Opción "Disponible" -->
                    <option value="Prestado">En Préstamo</option> <!-- Opción "En Préstamo" -->
                    <option value="Mantenimiento">En Mantenimiento</option> <!-- Opción "En Mantenimiento" -->
                    <option value="No Disponible">No Disponible</option> 
                    
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Guardar</button> <!-- Botón de envío del formulario -->
        </form>
    </div> <!-- Fin del contenedor -->
@endsection <!-- Fin de la sección de contenido -->
