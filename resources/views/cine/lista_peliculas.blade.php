@extends('layouts.cine')
@section('title', 'Media List')
@section('content')
<style>
    .movie-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
    grid-gap: 20px;
}

.movie-item {
    text-align: center;
}

.movie-item img {
    max-width: 100%;
}

</style>
@foreach($mediasByCategory as $category => $media)
    <h2 class="with-line">{{ strtoupper($category) }}</h2>
    <div class="content py-2">
        <div class="movie-grid">
            @foreach($media as $medi)
                <div class="movie-item">
                    <a href="">
                        <img src="{{ $medi->caratula }}" alt="{{ $medi->titulo_medio }}">
                        <p>{{ $medi->titulo_medio }}</p>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
    <br> <!-- Agrega un salto de línea después de cada categoría -->
@endforeach

@endsection
