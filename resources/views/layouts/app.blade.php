<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
    <nav>
        <!-- Encabezado de navegación -->
        <div class="card text-center">
            <div class="card-header" style="background-color: rgba(176, 89, 216, 0.548)">
                <ul class="nav nav-tabs card-header-tabs">
                    <!-- Lista de pestañas de navegación -->
                    <li class="card nav-item">
                        <!-- Elemento de la lista de navegación -->
                        <a class="nav-link active" href="{{url('/')}}" style="background-color: rgb(198, 250, 252); color:rgb(7, 1, 20); text-shadow:0 0  4px black">Inicio</a>
                        <!-- Enlace a la página de inicio -->
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " aria-current="true" href="{{ route('libros.index') }}" style="color: rgb(198, 250, 252); text-shadow:0 0  4px black">Tabla de Libros</a>
                        <!-- Enlace a la tabla de equipos -->
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="{{ route('usuarios.index') }}" style="color: rgb(198, 250, 252); text-shadow:0 0  4px black">Tabla de Usuarios</a>
                        <!-- Enlace a la tabla de usuarios -->
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="{{ route('prestamos.index') }}" style="color: rgb(198, 250, 252); text-shadow:0 0  4px black">Tabla de Prestamos</a>
                        <!-- Enlace a la tabla de préstamos -->
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</head>

<body>
    <!-- Cuerpo de la página -->
    <title>@yield('title')</title>
    <!-- Título de la página obtenido del contenido -->
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <!-- Inclusión de Bootstrap CSS -->

    @yield('content')
    <!-- Contenido dinámico definido en las vistas -->


    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <!-- Inclusión de Popper.js para Bootstrap -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
    <!-- Inclusión de Bootstrap JavaScript -->
</body>
<footer>
  <!-- Pie de página -->
  <!-- place footer here -->
  <img src="https://i.pinimg.com/originals/2f/03/a5/2f03a5264a108edaf370f09d81517b78.png" width="150%" height="150%">
  <!-- Imagen de fondo del pie de página -->
</footer>
</html>
