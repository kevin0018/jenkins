@extends('layouts.cine')
@section('title', 'Resultado de la búsqueda')
@section('content')

    @if($resultados->isEmpty())
        <h1 class="with-line">Resultados de la búsqueda</h1>
        <div style="margin-bottom: 30%; margin-top: 20px;">
            <p>No se encontraron resultados para tu búsqueda "{{ $query['query'] ?? 'tu búsqueda' }}".</p>
        </div>
    @else
        <h2 class="with-line">Resultados de {{ $query['query'] ?? 'tu búsqueda' }}:</h2>
        <div class="content d-flex py-2 movie-list">
            @foreach($resultados as $media)
                <a href="{{ route('cine_reproductor', ['pelicula-title' => $media->titulo_medio, 'pelicula-link' => $media->link]) }}">
                    <img src="{{ asset('storage/' . $media->caratula) }}" alt="{{ $media->titulo_medio }}">
                    <p>{{ $media->titulo_medio }}</p>
                </a>
            @endforeach
        </div>
    @endif
@endsection
