@extends('layouts.cine')
@section('title', 'Resultado de la busqueda')
@section('content')

    @if($resultados == "")
        <h1 class="with-line">Resultados de la búsqueda</h1>
        <div style="margin-bottom: 30%; margin-top: 20px;">
            <p>No se encontraron resultados para tu búsqueda.</p>
        </div>
        
    @else
            <h2 class="with-line">Resultados de {{$resultados}}:</h2>
                <div class="content d-flex py-2 movie-list">
                    <a href="{{ route('cine_reproductor', ['data-pelicula' => 'Godfather']) }}" data-pelicula="Godfather">
                        <img src="{{ asset('/img/movie_poster/godfather.jpeg')}}" alt="Godfather">
                        <p>Godfather</p>
                    </a>
                </div>
                
            
                <h2 class="with-line">Similares: </h2>
                <div class="content d-flex py-2 movie-list">
                    <a href="">
                        <img src="{{ URL::asset('/img/movie_poster/godfather.jpeg')}}" alt="Godfather">
                        <p>Godfather</p>
                    </a>
                    <a href="">
                        <img src="{{ URL::asset('/img/movie_poster/godfather.jpeg')}}" alt="Godfather">
                        <p>Godfather</p>
                    </a>
                    <a href="">
                        <img src="{{ URL::asset('/img/movie_poster/godfather.jpeg')}}" alt="Godfather">
                        <p>Godfather</p>
                    </a>
                    <a href="">
                        <img src="{{ URL::asset('/img/movie_poster/godfather.jpeg')}}" alt="Godfather">
                        <p>Godfather</p>
                    </a>
                </div>
    @endif
@endsection