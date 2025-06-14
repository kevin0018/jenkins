<html lang="en">

<head>
    <title>
        @yield('title')
    </title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>


    <link rel="icon" type="image/png" href="{{ asset('img/Jenkins_logo.png') }}">

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

        .modal-content {
            color: #000000;
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

        .movie-list {
            margin-right: 20px;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
        }

        .movie-list a img {
            width: 200px;
        }

        .movie-list a {
            margin-top: 5px;
            margin-left: 5%;
            font-size: 14px;
            text-align: center;
            text-decoration: none;
            color: white;
        }
        
        .btn-capitulo {
            background-color: yellow;
            padding: 2%;
            margin: 2%;

        }

        .btn-capitulo:hover {
            background-color: rgb(194, 194, 37);
        }

        .a-capitulo:hover {
            color: black;
            text-decoration: none;
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
            <!-- Navigation Menu -->
            <nav class="mr-auto">
                <ul class="nav">
                    <li class="nav-item">
                        <a href="{{ route('cine_home_user') }}" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('cine_lista_peliculas') }}" class="nav-link">Films List</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('cine_lista_series') }}" class="nav-link">Series List</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('cine_search') }}" class="nav-link">Searcher</a>
                    </li>

                </ul>
            </nav>

            <div class="d-flex align-items-center">
                <!-- Search Form -->
                <form class="input-group" action="search" method="GET">
                    <input type="text" class="form-control" placeholder="Search movies..." name="query">
                    <div class="input-group-append">
                        <button class="btn btn-dark h-100" type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </form>
                <!-- User Icon -->
                <div class="dropdown">
                    <button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-user"></i>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="{{ route('cine_user_data') }}">Profile</a>
                        @if (Auth::user() && Auth::user()->isAdmin())
                            <a class="dropdown-item" href="{{ route('admin_movie_maker_form') }}">Add Media</a>
                        @endif
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="dropdown-item">Logout</button>
                        </form>
                    </div>
                </div>
                <!-- Logo -->
                <img src="{{ URL::asset('/img/Jenkins_logo.png') }}" alt="LogoCine" class="navbar-brand mx-2"
                    width="120px" style="filter: drop-shadow(0 0 10px rgba(0, 0, 0, .8))">
            </div>
        </div>
    </header>

    <main class="mx-auto py-5 text-white" style="width: 85%;">
        @yield('content')
    </main>

    <footer class="bg-warning text-black py-3 ">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h5>Frequently Asked Questions</h5>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('what_is_jenkins') }}">What is Jenkins?</a></li>
                        <li><a href="{{ route('compatible_devices') }}">Compatible Devices</a></li>
                        <li><a href="{{ route('cine_suscriptions') }}">Plans and Pricing</a></li>
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
                    <p class="mb-0"><a href="{{ route('cine_terms_of_use') }}">Terms of Use</a> | <a
                            href="{{ route('cine_privacy_policy') }}">Privacy Policy</a></p>
                </div>
                <div class="col-md-6 text-md-right">
                    <p class="mb-0">© {{ date('Y') }} All rights reserved</p>
                </div>
            </div>
        </div>
    </footer>

</body>

</html>
