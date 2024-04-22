@extends('layouts.cine')
@section('title', 'Reproductor')
@section('content')
<a href="{{ URL::previous() }}"> <button class="bg-danger text-warning " style=" font-size:20px;margin-left:2%; border: 1px solid white; box-shadow 0 0 10px  black; height:5%"><span >BACK</button></a>

    <h1>Playing: {{ $capitulo->nombre_capitulo }}</h1>
    
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
        videoId: '{{ $capitulo->link }}', // Inserta el ID del video de YouTube aquí
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
