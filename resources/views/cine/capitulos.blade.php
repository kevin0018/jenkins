@extends('layouts.cine')

@section('title', 'Chapters of '.$serie->nombre)

@section('content')
<div class="row">
    <div class="col-md-5">
        <h1>{{ $serie->nombre }}</h1>
        <img style="width: 350px;" src="{{ asset('storage/' . $serie->caratula) }}" alt="{{ $serie->nombre }}">
    </div>
    <div class="col-md-6">
        <h2>Synopsis</h2>
        <p>{{ $serie->sinopsis }}</p>
        <h2>Seasons</h2>
        <select id="temporadas" class="form-control">
            @foreach($temporadas as $temporada)
            <option value="{{ $temporada->id }}">{{ $temporada->nombre }}</option>
            @endforeach
        </select>
        <h2>Capítulos</h2>
        <div id="capitulos-container">
            @foreach ($capitulos as $capitulo)
            <a href="{{ route('cine_reproductor_capitulo', ['capitulo-id' => $capitulo->id]) }}" class="a-capitulo" data-temporada-id="{{ $capitulo->temporada_id }}">
                <button class="btn btn-block btn-capitulo">{{ $capitulo->nombre_capitulo }}</button>
            </a>
            @endforeach
        </div>
    </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var temporadasSelect = document.getElementById('temporadas');
        var botonesCapitulo = document.querySelectorAll('#capitulos-container .a-capitulo');

        function mostrarCapitulos() {
            var temporadaSeleccionada = temporadasSelect.value;

            botonesCapitulo.forEach(function(btn) {
                if (btn.dataset.temporadaId === temporadaSeleccionada || temporadaSeleccionada === 'todos') {
                    btn.style.display = 'block';
                } else {
                    btn.style.display = 'none';
                }
            });
        }

        mostrarCapitulos();

        temporadasSelect.addEventListener('change', mostrarCapitulos);
    });
</script>
@endsection
