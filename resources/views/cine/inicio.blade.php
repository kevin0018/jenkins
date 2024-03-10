@extends('layouts.cine')
@section('title', 'Lista peliculas')
@section('content')

    <h1 class="text-center with-line">Juan, hemos hecho una selección especial para ti</h1><br><br>

    <h2 class="with-line">TUS FAVORITOS</h2>
    <div class="content d-flex py-2 lista-pelis">
        <a href="">
            <img src="{{ URL::asset('/img/lista_pelis/padrino.jpeg')}}" alt="el_padrino">
            <p>El padrino</p>
        </a>
        <a href="">
            <img src="{{ URL::asset('/img/lista_pelis/padrino.jpeg')}}" alt="el_padrino">
            <p>El padrino</p>
        </a>
    </div>

    <h2 class="with-line">RELACIONADO CONTUS ULTIMAS</h2>
    <div class="content d-flex py-2 lista-pelis">
        <a href="">
            <img src="{{ URL::asset('/img/lista_pelis/padrino.jpeg')}}" alt="el_padrino">
            <p>El padrino</p>
        </a>
        <a href="">
            <img src="{{ URL::asset('/img/lista_pelis/padrino.jpeg')}}" alt="el_padrino">
            <p>El padrino</p>
        </a>
        <a href="">
            <img src="{{ URL::asset('/img/lista_pelis/padrino.jpeg')}}" alt="el_padrino">
            <p>El padrino</p>
        </a>
        <a href="">
            <img src="{{ URL::asset('/img/lista_pelis/padrino.jpeg')}}" alt="el_padrino">
            <p>El padrino</p>
        </a>
    </div>

    <h2 class="with-line">PORQUE HAS VISTO "El padrino"</h2>
    <div class="content d-flex py-2 lista-pelis">
        <a href="">
            <img src="{{ URL::asset('/img/lista_pelis/padrino.jpeg')}}" alt="el_padrino">
            <p>El padrino</p>
        </a>
        <a href="">
            <img src="{{ URL::asset('/img/lista_pelis/padrino.jpeg')}}" alt="el_padrino">
            <p>El padrino</p>
        </a>
        <a href="">
            <img src="{{ URL::asset('/img/lista_pelis/padrino.jpeg')}}" alt="el_padrino">
            <p>El padrino</p>
        </a>
        <a href="">
            <img src="{{ URL::asset('/img/lista_pelis/padrino.jpeg')}}" alt="el_padrino">
            <p>El padrino</p>
        </a>
    </div>

    <h2 class="with-line">QUIZÁS PODRIA GUSTARTE...</h2>
    <div class="content d-flex py-2 lista-pelis">
        <a href="">
            <img src="{{ URL::asset('/img/lista_pelis/padrino.jpeg')}}" alt="el_padrino">
            <p>El padrino</p>
        </a>
        <a href="">
            <img src="{{ URL::asset('/img/lista_pelis/padrino.jpeg')}}" alt="el_padrino">
            <p>El padrino</p>
        </a>
        <a href="">
            <img src="{{ URL::asset('/img/lista_pelis/padrino.jpeg')}}" alt="el_padrino">
            <p>El padrino</p>
        </a>
        <a href="">
            <img src="{{ URL::asset('/img/lista_pelis/padrino.jpeg')}}" alt="el_padrino">
            <p>El padrino</p>
        </a>
    </div>

@endsection