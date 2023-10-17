@extends('layouts.app') <!-- Extiende el diseño de la aplicación -->

@section('content') <!-- Define una sección de contenido llamada "content" -->
<div class="container"> <!-- Contenedor de la página -->
    <h2>Editar libro</h2> <!-- Encabezado de nivel 2 -->

    <form method="POST" action="{{ route('libros.update', $libro->id) }}"> <!-- Formulario con método POST y acción dinámica para actualizar un libro específico -->
        @csrf <!-- Token de seguridad CSRF -->
        @method('PUT') <!-- Método HTTP PUT para la actualización -->

        <div class="form-group"> <!-- Grupo de formulario -->
            <label for="nombre">Nombre:</label> <!-- Etiqueta del campo "nombre" -->
            <input type="text" name="nombre" class="form-control" value="{{ $libro->nombre }}" required> <!-- Campo de texto para "nombre" con valor predefinido y validación requerida -->
        </div>

        <div class="form-group"> <!-- Grupo de formulario -->
            <label for="descripcion">Descripción:</label> <!-- Etiqueta del campo "descripcion" -->
            <textarea name="descripcion" class="form-control" required>{{ $libro->descripcion }}</textarea> <!-- Área de texto para "descripcion" con valor predefinido y validación requerida -->
        </div>

        <div class="form-group"> <!-- Grupo de formulario -->
            <label for="fecha_adquisicion">Fecha de Adquisición:</label> <!-- Etiqueta del campo "fecha_adquisicion" -->
            <input type="date" name="fecha_adquisicion" class="form-control" value="{{ $libro->fecha_adquisicion }}" required> <!-- Campo de fecha para "fecha_adquisicion" con valor predefinido y validación requerida -->
        </div>

        <div class="form-group"> <!-- Grupo de formulario -->
            <label for="estado">Estado:</label> <!-- Etiqueta del campo "estado" -->
            <select name="estado" class="form-control" required> <!-- Menú desplegable para "estado" con validación requerida -->
                <option value="Disponible" {{ $libro->estado === 'Disponible' ? 'selected' : '' }}>Disponible</option> <!-- Opción "Disponible" con selección condicional basada en el estado actual -->
                <option value="Prestado" {{ $libro->estado === 'Prestado' ? 'selected' : '' }}>En Préstamo</option> <!-- Opción "En Préstamo" con selección condicional basada en el estado actual -->
                <option value="Mantenimiento" {{ $libro->estado === 'Mantenimiento' ? 'selected' : '' }}>En Mantenimiento</option> <!-- Opción "En Mantenimiento" con selección condicional basada en el estado actual -->
                <option value="No Disponible" {{ $libro->estado === 'No Disponible' ? 'selected' : '' }}>No Disponible</option> <!-- Opción "En Mantenimiento" con selección condicional basada en el estado actual -->
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Guardar Cambios</button> <!-- Botón de envío del formulario para guardar los cambios -->
    </form>
</div> <!-- Fin del contenedor -->
@endsection <!-- Fin de la sección de contenido -->
