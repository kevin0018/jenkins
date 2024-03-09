<!-- home_layout.blade.php -->
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> @yield('title') </title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
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
    </style>
</head>

<body class="font-sans antialiased bg-dark">

    <!-- Encabezado personalizado para la página de inicio -->
    <header class="bg-warning text-white">
        <div class="mx-auto py-4 d-flex justify-content-between align-items-center" style="width: 80%">
            <div>
                <a href="/" class="navbar-brand">
                    <img src="{{ URL::asset('/img/Jenkins_logo.png') }}" alt="LogoCine" width="210px"
                        style="filter: drop-shadow(0 0 10px rgba(0, 0, 0, .8))">
                </a>
            </div>
            <div>
                <a href="#" class="btn btn-dark text-warning text-decoration-none text-decoration-none">Log in</a>
            </div>
        </div>
    </header>

    <!-- Contenido de la página de inicio -->
    <main class="mx-auto py-5 text-white" style="width: 80%;">
        @yield('content')
    </main>

</body>

</html>
