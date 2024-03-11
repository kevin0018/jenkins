@extends('layouts.cine')
@section('title', 'Reproductor')
@section('content')
    <h1>Reproduciendo: {{ $pelicula }}</h1>
    <div id="player" style="width: 100%; height: 500px;"></div>

    <script>
    // Carga la API de YouTube
    var tag = document.createElement('script');
    tag.src = 'https://www.youtube.com/iframe_api';
    var firstScriptTag = document.getElementsByTagName('script')[0];
    firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

    var player;
    function onYouTubeIframeAPIReady() {
        player = new YT.Player('player', {
        videoId: 'iOyQx7MXaz0', // Inserta el ID del video de YouTube aquí
        events: {
            'onReady': onPlayerReady
        }
        });
    }

    function onPlayerReady(event) {
        event.target.playVideo();
    }
    </script>

@endsection