<!-- home_layout.blade.php -->
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> @yield('title') </title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <link rel="icon" type="image/png" href="{{ asset('img/Jenkins_logo.png') }}">    
    <style>
        header {
            box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.3);
        }

        main {
            background-color: rgb(12, 12, 12);
            box-shadow: 2px 5px 10px rgba(241, 206, 3, 0.8);
            margin: 5% 10%;
            padding: 20px;
            border-radius: 20px;
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
                <a href="{{ route('cine_home_user')}}" class="navbar-brand">
                    <img src="{{ URL::asset('/img/Jenkins_logo.png') }}" alt="LogoCine" width="210px"
                        style="filter: drop-shadow(0 0 10px rgba(0, 0, 0, .8))">
                </a>
            </div>
           
            <div class="dropdown">
                <button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-user"></i>
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="{{ route('cine_user_data') }}">Profile</a>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="dropdown-item">Logout</button>
                    </form>                    
                </div>
            </div>
            
            
        </div>
    </header>
    <!-- Contenido de la página de inicio -->
    <main class="mx-auto py-5 text-white" style="width: 85%;">
        @yield('content')
    </main>

    <footer class="bg-warning text-black py-3 fixed-bottom">
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

</body>

</html>
