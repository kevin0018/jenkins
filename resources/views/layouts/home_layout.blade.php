<!-- home_layout.blade.php -->
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> @yield('title') </title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="icon" type="image/png" href="{{"img/Jenkins_logo.png"}}">
    <style>
        header {
            box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.3);
        }

        main {
            background-color: rgb(12, 12, 12);
            box-shadow: 0px 5px 10px rgba(241, 206, 3, 0.8);
            margin: 0 10%;
            padding: 20px;
        }

        span {
            font-size: 27px;
        }

        .p-main-r {
            text-align: justify; 
            margin-right: 20px;
        }

        .p-main-l {
            text-align: justify; 
            margin-left: 20px;
        }

        .content img {
            width: 200px;
        }

        footer a {
            text-decoration: none;
            color: black;
        }

        footer li a {
            color: rgb(17, 17, 17);
        }

    </style>
</head>

<body class="font-sans antialiased bg-dark">

    <!-- Encabezado personalizado para la página de inicio -->
    <header class="bg-warning text-white">
        <div class="mx-auto py-4 d-flex justify-content-between align-items-center" style="width: 85%">
            <div>
                <a href="/" class="navbar-brand">
                    <img src="{{ URL::asset('/img/Jenkins_logo.png') }}" alt="LogoCine" width="210px"
                        style="filter: drop-shadow(0 0 10px rgba(0, 0, 0, .8))">
                </a>
            </div>
            <div>
                <a href="#" class="btn btn-dark text-warning text-decoration-none">Log in</a>
            </div>
        </div>
    </header>

    <!-- Contenido de la página de inicio -->
    <main class="mx-auto py-5 text-white" style="width: 85%;">
        @yield('content')
    </main>

    <footer class="bg-warning text-black py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h5>Preguntas frecuentes</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">¿Qué es JenKins?</a></li>
                        <li><a href="#">Dispositivos compatibles</a></li>
                        <li><a href="#">Planes y precios</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h5>Centro de ayuda</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">Problemas con la cuenta</a></li>
                        <li><a href="#">Configuración de la  cuenta</a></li>
                        <li><a href="#">Perfiles</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h5>Contáctanos</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">info@jenkins.com</a></li>
                        <li><a href="#">+34 993302530</a></li>
                    </ul>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-6">
                    <p class="mb-0"><a href="#">Términos de uso</a> | <a href="#">Privacidad</a></p>
                </div>
                <div class="col-md-6 text-md-right">
                    <p class="mb-0">© {{ date('Y') }} Todos los derechos reservados</p>
                </div>
            </div>
        </div>
    </footer>
    

</body>

</html>
