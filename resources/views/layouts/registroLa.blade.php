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
            body{
                background-image: url('https://nintenduo.com/wp-content/uploads/2023/05/Posters-FNAF-Pelicula-01.webp');
                background-size:cover; /* Para ajustar la imagen al tamaño de la ventana */
                background-repeat: no-repeat; /* Para evitar que la imagen se repita */
                background-position: center; /* Centra la imagen de fondo */
            }
            main {
               
                width: 100% ;
                height:900px;
                padding:5%;
                    /* Agregar opacidad */
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
            header {
            background-color: rgba(255, 204, 0, 0.5); /* Color de fondo con transparencia */
            color: #050505;
            padding: 20px;
            text-align: center;
            width: 100%;
            top: 0; /* Fijar el encabezado en la parte superior */
            z-index: 1000; /* Asegurar que el encabezado esté sobre otros elementos */
        }

        </style>
    </head>
<body class="font-sans antialiased bg-dark text-white">

    <!-- Menu -->
    <header>
            <img src="{{ URL::asset('/img/Jenkins_logo.png')}}" alt="LogoCine" width="120px" style="filter: drop-shadow(0 0 10px rgba(0, 0, 0, .8))">
        </header>

    <main style="width: 100%;">
        @yield('content')
    </main>
    <footer class="bg-warning text-black py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h5>Frequently Asked Questions</h5>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('what_is_jenkins')}}">What is Jenkins?</a></li>
                        <li><a href="{{ route('compatible_devices')}}">Compatible Devices</a></li>
                        <li><a href="{{ route('cine_suscriptions')}}">Plans and Pricing</a></li>
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