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
            <p>{{ $serie->sinopsis}}</p>
            <h2>Seasons</h2>
            <select id="temporadas" class="form-control">
                @foreach($temporadas as $temporada)
                    <option value="{{ $temporada->id }}">{{ $temporada->nombre }}</option>
                @endforeach
            </select>
            <h2>Capítulos</h2>
            <ul id="capitulos">
                @foreach ($capitulos as $capitulo)
                    <a href="{{ route('cine_reproductor_capitulo', ['capitulo-id' => $capitulo->id]) }}" class="a-capitulo">
                        <button class="btn btn-block btn-capitulo">{{ $capitulo->nombre_capitulo }}</button>
                    </a>
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

