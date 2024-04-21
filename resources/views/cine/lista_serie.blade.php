@extends('layouts.cine')

@section('title', 'Series List')

@section('content')
    <h1 class="with-line">SERIES LIST</h1>
    <div class="content py-2 movie-list">
        @foreach($series as $serie)
            <a href="{{ route('serie_capitulos', $serie->id) }}">
                <img src="{{ asset('storage/' . $serie->caratula) }}" alt="{{ $serie->nombre }}">
                <p>{{ $serie->nombre }}</p>
            </a>
        @endforeach
    </div>