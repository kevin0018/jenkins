<html lang="es">
    <head>
        <title>
            @yield('title')
        </title>
        
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <link rel="icon" type="image/png" href="{{"img/Jenkins_logo.png"}}">

        <style>
            .neon-container {
  display: flex;
  font-size:20px;
}

.neon1 {
    background-color:rgba(100,0,300,0.3);
    padding:5px;
    margin:10px;
    width: 100%;
  height: auto;
  border: 2px solid violet;
  border-radius: 10px;
  position: relative;
  box-shadow: 0 0 10px violet;
}

.neon2 {
    background-color:rgba(0,300,0,0.2);
    margin:10px;
    padding:5px;

    width: 100%;
    height: auto;
  border: 2px solid green;
  border-radius: 10px;
  position: relative;
  box-shadow: 0 0 10px green;
}
.neon3 {
    background-color:rgba(0,0,200,0.2);

    margin:10px;
    padding:5px;

  width: 100%;
  height: auto;
  border: 2px solid blue;
  border-radius: 10px;
  position: relative;
  box-shadow: 0 0 10px black;
}



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

                background-color:BLACK;    
            }
            main {
          
                width: 100% ;
                height:auto;
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

           
            footer a {
                text-decoration: none;
                color: black;
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

            footer li a {
                color: rgb(17, 17, 17);
            }
        </style>
    </head>
<body class="font-sans antialiased bg-dark text-white">


    <!-- Menu -->
    <header>
            <img src="{{ URL::asset('/img/Jenkins_logo.png')}}" alt="LogoCine" width="120px" style="filter: drop-shadow(0 0 10px rgba(0, 0, 0, .8))">
        </header>
        

    <main style=" margin:2%;width: 96%;">
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
                    <p class="mb-0"><a href="{{ route('cine_terms_of_use')}}">Terms of Use</a> | <a href="{{ route('cine_privacy_policy')}}">Privacy Policy</a></p>
                </div>
                <div class="col-md-6 text-md-right">
                    <p class="mb-0">© {{ date('Y') }} Todos los derechos reservados</p>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>