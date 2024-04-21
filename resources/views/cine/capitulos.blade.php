@extends('layouts.app')

@section('title', 'Capítulos de '.$serie->nombre)

@section('content')
    <h1>{{ $serie->nombre }}</h1>
    <h3>id: {{ $serie->id }}</h3>


    <h2>Capítulos</h2>
    <ul>
        @foreach($capitulos as $capitulo)
            <li>{{ $capitulo->titulo }}</li>
        @endforeach
    </ul>
@endsection
