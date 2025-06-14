@extends('layouts.cine')
@section('title', 'Media List')
@section('content')
    @foreach($mediasByCategory as $category => $media)
        <h1 class="with-line">{{ strtoupper($category) }}</h1>
        <div class="content py-2 movie-list">
            @foreach($media as $medi)
                <a href="{{ route('cine_reproductor', ['pelicula-title' => $medi->titulo_medio, 'pelicula-link' => $medi->link]) }}">
                    <img src="{{ asset('storage/' . $medi->caratula) }}" alt="{{ $medi->titulo_medio }}">
                    <p>{{ $medi->titulo_medio }}</p>
                </a>
            @endforeach
        </div>
        <br>
@endforeach

@endsection
