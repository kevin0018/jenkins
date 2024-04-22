@extends('layouts.cine')

@section('title', 'Chapters of '.$serie->nombre)

@section('content')
    <div class="row">
        <div class="col-md-5">
            <h1>{{ $serie->nombre }}</h1>
            <img style="width: 350px;" src="{{ asset('storage/' . $serie->caratula) }}" alt="{{ $serie->nombre }}">
        </div>
        <div class="col-md-6">
            <h2>Seasons</h2>
            <select id="temporadas" class="form-control">
                @foreach($temporadas as $temporada)
                    <option value="{{ $temporada->id }}">{{ $temporada->nombre }}</option>
                @endforeach
            </select>
            <h2>Capítulos</h2>
            <ul id="capitulos">
                @foreach($capitulos as $capitulo)
                    <li class="temporada_{{ $capitulo->temporada_id }}" style="display: none;">{{ $capitulo->titulo }}</li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function () {
            $('#temporadas').change(function () {
                var temporadaId = $(this).val();
                $('#capitulos li').hide();
                $('.temporada_' + temporadaId).show();
            });
        });
    </script>
@endpush

