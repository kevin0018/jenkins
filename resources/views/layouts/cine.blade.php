<html lang="es">
    <head>
        <title>
            @yield('title')
        </title>
        
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
<body class="font-sans antialiased bg-dark text-white">
    <menu class="navbar navbar-expand-lg navbar-light bg-light">
        <img class="navbar-brand" src="{{URL::asset('/img/Jenkins_logo.png')}}" alt="LogoCine" width="200px">
        
        <input type="text" placeholder="Search">
        <a href="">Log in</a>
    </menu>
    <main class="container mx-auto" style="width: 85%;">
        @yield('content')
    </main>
</body>
</html>