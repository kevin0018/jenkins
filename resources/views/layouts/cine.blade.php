<html lang="es">
    <head>
        <title>
            @yield('title')
        </title>
        
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <link rel="icon" type="image/png" href="{{"img/Jenkins_logo.png"}}">

        <style>

            .nav-link {
                color: black;
            }

            .nav-link:hover {
                color: white;
            }

            .fas {
                color: yellow;
            }

            main {
                background-color: rgb(12, 12, 12);
                box-shadow: 0px 5px 10px rgba(241, 206, 3, 0.8);
                margin: 0 10%;
                padding: 20px;
            }

            .with-line {
                position: relative;
            }

            .with-line::after {
                content: '';
                position: absolute;
                left: 0;
                bottom: -5px; 
                width: 100%;
                height: 2px; 
                background: linear-gradient(to right, rgba(255, 255, 255, 0), #fff, rgba(255, 255, 255, 0));
            }

            .lista-pelis a img {
                width: 200px;
            }

            .lista-pelis a {
                margin-top: 5px;
                margin-left: 5%;
                font-size: 14px;
                text-align: center;
                text-decoration: none;
                color: white;
            }

            .lista-pelis {
                margin-right: 20px;
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
<body class="font-sans antialiased bg-dark text-white">


    <!-- Menu -->
    <header class="bg-warning text-dark py-3">
        <div class=" d-flex justify-content-between align-items-center mx-auto" style="width: 85%;">
            <!-- Menú de navegación -->
            <nav class="mr-auto">
                <ul class="nav">
                    <li class="nav-item">
                        <a href="inicio" class="nav-link">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a href="lista" class="nav-link">Lista de Películas</a>
                    </li>
                </ul>
            </nav>
            
            <div class="d-flex align-items-center">
                <!-- Buscador -->
                <form class="input-group" action="busqueda" method="GET">
                    <input type="text" class="form-control" placeholder="Buscar películas..." name="query">
                    <div class="input-group-append">
                        <button class="btn btn-dark h-100" type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </form>                
                <!-- Icono de usuario -->
                <div class="input-group-prepend mx-2">
                    <button class="btn btn-dark h-100" type="button">
                        <a href="{{ route('cine_datos') }}"><i class="fas fa-user"></i></a>
                    </button>
                </div>
                <!-- Logo -->
                <img src="{{ URL::asset('/img/Jenkins_logo.png')}}" alt="LogoCine" class="navbar-brand mx-2" width="120px"
                    style="filter: drop-shadow(0 0 10px rgba(0, 0, 0, .8))">
            </div>
        </div>
    </header>

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