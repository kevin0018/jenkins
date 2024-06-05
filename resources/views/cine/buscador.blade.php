@extends('layouts.cine')
@section('title', 'Buscador')
@section('content')

<form action="{{ route('cine_searcher') }}" method="GET">
    <div>
        <label for="type">Tipo:</label>
        <select name="type" id="type">
            <option value="">Seleccione tipo</option>
            <option value="movie">Película</option>
            <option value="series">Serie</option>
        </select>
    </div>

    <div>
        <p>--Ni pelicula ni serie tienen el campo de producción--</p>
        <label for="year_start">Año de producción (inicio):</label>
        <input type="number" name="year_start" id="year_start" min="1900" max="{{ date('Y') }}">
    </div>

    <div>
        <label for="year_end">Año de producción (fin):</label>
        <input type="number" name="year_end" id="year_end" min="1900" max="{{ date('Y') }}">
    </div>

    <div>
        <label>Categorías:</label>
        @foreach($categories as $category)
            <div>
                <input type="checkbox" name="categories[]" value="{{ $category }}"> {{ $category }}
            </div>
        @endforeach
    </div>

    <div id="duracion_input" style="display: none;">
        <br><label>Duración:</label>
        <div>
            <input type="radio" name="duration" value="less_than_1h"> Menos de 1h
        </div>
        <div>
            <input type="radio" name="duration" value="between_1h_and_2h"> Entre 1h y 2h
        </div>
        <div>
            <input type="radio" name="duration" value="more_than_2h"> Más de 2h
        </div>
    </div>

    <button type="submit">Buscar</button>
</form>

<script>
    document.getElementById('type').addEventListener('change', function() {
        var tipo = this.value;
        if (tipo === 'movie') {
            document.getElementById('duracion_input').style.display = 'block';
        } else {
            document.getElementById('duracion_input').style.display = 'none';
        }
    });
</script>

@endsection
