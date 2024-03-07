<html lang="es">
    <head>
        <title>
            @yield('title')
        </title>
        
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
<body class="font-sans antialiased bg-dark text-white">


    <!-- Menu -->
    <header>
        <nav class="navbar navbar-default bg-warning">
            <div class="container">
                <!-- Logo -->
                <div class="navbar-header">
                    {{-- <button type="button" class="navbar-toggle collapsed" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only"></span>
                        <span class="icon-bar"></span>
                    </button> --}}
                    
                    <a href="/" class="navbar-brand">
                        <img src="{{URL::asset('/img/Jenkins_logo.png')}}" alt="LogoCine" width="200px">
                    </a>
                </div>
                <!-- Final Logo -->

                <!-- Botones de la derecha -->
                {{-- <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"> --}}
                <div class=" navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Peliculas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Log in</a>
                        </li>
                        <li class="nav-item">
                            <form class="form-inline">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="btn-search">
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-secondary" type="button" id="btn-search">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                            </form>
                        </li>
                    </ul>
                <!-- Final de los botones -->
            </div>
        </nav>
    </header>

    <main class="container mx-auto" style="width: 85%;">
        @yield('content')
    </main>

</body>
</html>