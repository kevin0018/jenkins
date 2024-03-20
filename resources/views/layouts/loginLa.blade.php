<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    
    <!-- Aquí van tus enlaces a los archivos CSS y JS -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Agrega el icono del sitio -->
    <link rel="icon" type="image/png" href="{{"img/Jenkins_logo.png"}}">

    <!-- Estilos personalizados -->
    <style>
        body {
            margin: 0;
            height: 100vh;
            font-family: Arial, sans-serif;
            background-image: url('https://i.pinimg.com/originals/10/b1/ba/10b1bad21f79df5f462c1c09f12db6ff.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            overflow-y: hidden;
        }

        header {
            background-color: rgba(255, 204, 0, 0.5); /* Color de fondo con transparencia */
            color: #050505;
            padding: 20px;
            text-align: center;
            width: 100%;
            position: fixed; /* Para fijar el encabezado en la parte superior */
            top: 0; /* Fijar el encabezado en la parte superior */
            z-index: 1000; /* Asegurar que el encabezado esté sobre otros elementos */
        }

        main {
            margin: 2%;
            padding: 5%;
            color: #fff; /* Color de texto blanco para mayor contraste */
            margin-top: 80px; /* Ajustar el espacio para evitar que el contenido se solape con el encabezado fijo */
        }

        .container-login {
            width: 30%;
            background-color: rgb(246, 167, 0, 0.9); 
            border: 5px groove blue; 
            border-radius: 30px; 
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.9);
        }


        footer {
            background-color: rgba(255, 204, 0, 0.5); /* Color de fondo con transparencia */
            color: #050505;
            text-align: center;
            padding: 10px;
            width: 100%;
            position: fixed; /* Para fijar el pie de página en la parte inferior */
            bottom: 0; /* Fijar el pie de página en la parte inferior */
            z-index: 1000; /* Asegurar que el pie de página esté sobre otros elementos */
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
        <!-- Encabezado -->
        <header>
            <img src="{{ URL::asset('/img/Jenkins_logo.png')}}" alt="LogoCine" width="120px" style="filter: drop-shadow(0 0 10px rgba(0, 0, 0, .8))">
        </header>
        
        <!-- Contenido principal -->
        <main>
            @yield('content')
        </main>

        <!-- Pie de página -->
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h5>Frequently Asked Questions</h5>
                        <ul class="list-unstyled">
                            <li><a href="#">What is Jenkins?</a></li>
                            <li><a href="#">Compatible Devices</a></li>
                            <li><a href="#">Plans and Pricing</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <h5>Help Center</h5>
                        <ul class="list-unstyled">
                            <li><a href="#">Account Issues</a></li>
                            <li><a href="#">Account Settings</a></li>
                            <li><a href="#">Profiles</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <h5>Contact Us</h5>
                        <ul class="list-unstyled">
                            <li><a href="#">info@jenkins.com</a></li>
                            <li><a href="#">+34 993302530</a></li>
                        </ul>
                    </div>
                </div>
                <hr>
                <div class="row">
                <div class="col-md-6">
                    <p class="mb-0"><a href="{{ route('cine_terms_of_use')}}">Terms of Use</a> | <a href="{{ route('cine_privacy_policy')}}">Privacy Policy</a></p>
                </div>
                <div class="col-md-6 text-md-right">
                    <p class="mb-0">© {{ date('Y') }} All rights reserved</p>
                </div>
                </div>
            </div>
        </footer>
</body>
</html>
