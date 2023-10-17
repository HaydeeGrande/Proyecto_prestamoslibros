@extends('layouts/app') <!-- Extiende el diseño de la aplicación -->

@section('content') <!-- Define una sección de contenido llamada "content" -->
    <div class="container"> <!-- Contenedor principal de la página -->
        <h2>Editar Usuario</h2> <!-- Encabezado de nivel 2 para editar un usuario -->

        <form method="POST" action="{{ route('usuarios.update', $usuario->id) }}"> <!-- Formulario con método POST y acción dinámica para editar un usuario específico -->
            @csrf <!-- Token de seguridad CSRF para proteger el formulario -->
            @method('PUT') <!-- Método HTTP PUT para la actualización -->

            <div class="form-group"> <!-- Grupo de formulario -->
                <label for="nombre">Nombre:</label> <!-- Etiqueta del campo "nombre" -->
                <input type="text" name="nombre" class="form-control" value="{{ $usuario->nombre }}" required> <!-- Campo de texto para "nombre" con valor predefinido y validación requerida -->
            </div>

            <div class="form-group"> <!-- Grupo de formulario -->
                <label for="correo_electronico">Correo Electrónico:</label> <!-- Etiqueta del campo "correo_electronico" -->
                <input type="email" name="correo_electronico" class="form-control" value="{{ $usuario->correo_electronico }}" required> <!-- Campo de texto para "correo_electronico" con valor predefinido y validación requerida, y tipo de email -->
            </div>

            <!-- Puedes agregar otros campos del usuario que desees editar aquí -->

            <button type="submit" class="btn btn-primary">Guardar Cambios</button> <!-- Botón de envío del formulario para guardar los cambios en el usuario -->
        </form>
    </div>
@endsection <!-- Fin de la sección de contenido -->
