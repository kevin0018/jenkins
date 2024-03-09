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
                    
                    <a href="/" class="navbar-brand">
                        <img src="{{URL::asset('/img/Jenkins_logo.png')}}" alt="LogoCine" width="200px">
                    </a>
                </div>
                <!-- Final Logo -->

                <!-- Botones de la derecha -->
                {{-- <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"> --}}
                <div class=" navbar-collapse" id="navbarNav">
                    
                </div>
                <!-- Final de los botones -->
            </div>
        </nav>
    </header>

    <main class="container mx-auto" style="width: 85%;">
        @yield('content')
    </main>

</body>
</html>