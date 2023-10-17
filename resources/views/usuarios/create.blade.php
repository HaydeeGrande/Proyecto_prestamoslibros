@extends('layouts/app') <!-- Extiende el diseño de la aplicación -->

@section('content') <!-- Define una sección de contenido llamada "content" -->
    <div class="container"> <!-- Contenedor principal de la página -->
        <h2>Crear Usuario</h2> <!-- Encabezado de nivel 2 para crear un usuario -->

        <form method="POST" action="{{ route('usuarios.store') }}"> <!-- Formulario con método POST y acción dinámica para crear un usuario -->
            @csrf <!-- Token de seguridad CSRF para proteger el formulario -->

            <div class="form-group"> <!-- Grupo de formulario -->
                <label for="nombre">Nombre:</label> <!-- Etiqueta del campo "nombre" -->
                <input type="text" name="nombre" class="form-control" required> <!-- Campo de texto para "nombre" con validación requerida -->
            </div>

            <div class="form-group"> <!-- Grupo de formulario -->
                <label for="correo_electronico">Correo Electrónico:</label> <!-- Etiqueta del campo "correo_electronico" -->
                <input type="email" name="correo_electronico" class="form-control" required> <!-- Campo de texto para "correo_electronico" con validación requerida y tipo de email -->
            </div>

            <!-- Puedes agregar otros campos de usuario según tus necesidades aquí -->

            <button type="submit" class="btn btn-primary">Guardar</button> <!-- Botón de envío del formulario para guardar el usuario -->
        </form>
    </div>
@endsection <!-- Fin de la sección de contenido -->
