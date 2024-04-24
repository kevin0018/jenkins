@extends('layouts.admin_layout')
@section('title', 'Admin Maker')

@section('content')
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <h1 class="jumbotron text-center text-warning">MAKE A FILM OR SERIE TO JENKINS</h1>


    <div class="container" style="min-width: 300px;background-color:black">
        <p class="text-warning"> <strong>Choose a type of media</strong></p>
        <div class="form-check mb-2">
            <input class="form-check-input" type="radio" name="typeMedia" id="typeMedia1" value="Serie">
            <label class="form-check-label text-warning" for="typeMedia1">
                Serie
            </label>

        </div>

        <div class="form-check mb-2">
            <input class="form-check-input" type="radio" name="typeMedia" id="typeMedia2" value="Film">
            <label class="form-check-label text-warning" for="typeMedia2">
                Film
            </label>

        </div>
        <div class="form-check mb-2">
            <input class="form-check-input" type="radio" name="typeMedia" id="typeMedia3" value="Capitulo">
            <label class="form-check-label text-warning" for="typeMedia3">
                Chapter
            </label>
        </div>
        <div id= "atribFilm" style="display:none">
            <form action="{{ route('guardar_pelicula') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <!-- cosas de pelis-->
                <h2 class="jumbotron text-center text-danger">FILL DATA OF NEW FILM</h2>
                <div class="form-group">
                    <label for="titulo_medio" class="text-warning">Title:</label>
                    <input type="text" class="form-control" id="titulo_medio" name="titulo_medio">
                </div>
                <div class="form-group">
                    <label for="sinopsis" class="text-warning">Synopsis:</label>
                    <textarea class="form-control" id="sinopsis" name="sinopsis"></textarea>
                </div>
                <div class="form-group">
                    <label for="caratula" class="text-warning">Cover Image:</label>
                    <input type="file" class="form-control-file" id="caratula" name="caratula">
                </div>
                <label for="generoSerie" class="text-warning">Genre: </label>
                <div class="form-group">
                    <select name="genero" id="genero">
                        <option value="dummy" disabled selected>Choose a genre</option>
                        <option value="Action">Action</option>
                        <option value="Comedy">Comedy</option>
                        <option value="Drama">Drama</option>
                        <option value="Sci-fi">Sci-fi</option>
                        <option value="Fantasy">Fantasy</option>

                    </select>
                </div>
                <div class="form-group">
                    <label for="duracion_total" class="text-warning">Total Duration:</label>
                    <input type="text" class="form-control" id="duracion_total" name="duracion_total">
                </div>
                <div class="form-group">
                    <label for="link" class="text-warning">Link:</label>
                    <input type="text" class="form-control" id="link" name="link">
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
            </form>

        </div>

        <div id="atribSerie" style="display:none">
            <form action="{{ route('guardar_serie') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <!-- Campos de la serie -->
                <h2 class="jumbotron text-center text-danger">FILL DATA OF NEW SERIE</h2>
                <!--Name -->
                <label for="nombreSerie" class="text-warning">Name of Serie: </label> <br>
                <input type="text" name="nombreSerie" id="nombreSerie" placeholder="Name of Serie">
                <!--Genre-->
                <label for="generoSerie" class="text-warning" style="margin-left:50px">Genre: </label>
                <select name="generoSerie" id="generoSerie">
                    <option value="dummy" disabled selected>Choose a genre</option>
                    <option value="Action">Action</option>
                    <option value="Comedy">Comedy</option>
                    <option value="Drama">Drama</option>
                    <option value="Sci-fi">Sci-fi</option>
                    <option value="Fantasy">Fantasy</option>

                </select>
                <!--Seasons-->
                <label for="seasons" class="text-warning">Number of seasons: </label>
                <input type="number" name="seasons" id="seasons">
                <br>
                <br>
                <!--SINOPSIS -->
                
                <label for="sinopsisSerie" class="text-warning" style="display: inline-block;">Synopsis: </label>
                <textarea name="sinopsisSerie" id="sinopsisSerie" style="height:auto; width:100%; vertical-align: top;"
                    placeholder="Sinopsis of the serie"></textarea>

                <!-- Cover Image -->
                <div class="form-group">
                    <label for="caratulaSerie" class="text-warning">Cover Image:</label>
                    <input type="file" class="form-control-file" id="caratulaSerie" name="caratulaSerie">
                </div>

                <!-- Link -->
                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
        <form action="{{ route('guardar_capitulo') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <!-- Campos del formulario -->
            <div id="atribCapitulo" style="display:none">
                <!-- Atributos del capítulo -->
                <h2 class="jumbotron text-center text-danger">FILL DATA OF NEW CHAPTER</h2>
                <!-- Nombre del capítulo -->
                <label for="nombreCapitulo" class="text-warning">Chapter name:</label>
                <input type="text" class="form-control" id="nombreCapitulo" name="nombreCapitulo"
                    placeholder="Enter chapter name">
                <!-- Serie a la que pertenece -->
                <label for="serieCapitulo" class="text-warning">Serie it belongs to:</label>
                <select name="serieCapitulo" id="serieCapitulo" class="form-control">
                    <option value="" disabled selected>Choose a serie</option>
                    @foreach ($series as $serie)
                        <option value="{{ $serie->id }}">{{ $serie->nombre }}</option>
                    @endforeach
                </select>
                
                <!-- Número de temporada -->
                <label for="numeroTemporada" class="text-warning">Season number:</label>
                <select class="form-control" id="numeroTemporada" name="numeroTemporada">
                    <option value="" disabled selected>Choose a season</option>
                </select>

                <!-- Número de episodio -->
                <label for="numeroEpisodio" class="text-warning">Episode number:</label>
                <input type="number" class="form-control" id="numeroEpisodio" name="numeroEpisodio"
                    placeholder="Enter episode number">

                <!-- Duración del capítulo -->
                <label for="duracionCapitulo" class="text-warning">Chapter duration (in minutes):</label>
                <input type="number" class="form-control" id="duracionCapitulo" name="duracionCapitulo"
                    placeholder="Enter chapter duration">

                <!-- Link -->
                <div class="form-group">
                    <label for="linkCapitulo" class="text-warning">Link:</label>
                    <input type="text" class="form-control" id="linkCapitulo" name="linkCapitulo"
                        placeholder="Enter link">
                </div>

                <!-- Botón de guardar -->
                <button type="submit" class="btn btn-primary">Save</button>
            </div>

        </form>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
            document.querySelectorAll('input[name="typeMedia"]').forEach(function(radio) {
                radio.addEventListener('change', function() {
                    var peliAtt = document.getElementById('atribFilm');
                    var serieAtt = document.getElementById('atribSerie');
                    var capituloAtt = document.getElementById('atribCapitulo');

                    if (this.value === 'Film') {
                        peliAtt.style.display = 'block';
                        serieAtt.style.display = 'none';
                        capituloAtt.style.display = 'none';
                    } else if (this.value === 'Serie') {
                        peliAtt.style.display = 'none';
                        serieAtt.style.display = 'block';
                        capituloAtt.style.display = 'none';
                    } else {
                        peliAtt.style.display = 'none';
                        serieAtt.style.display = 'none';
                        capituloAtt.style.display = 'block';
                    }
                });
            });
            $(document).ready(function() {
                $('#serieCapitulo').on( "change" , (function() {
                    var serieId = $(this).val();
                    $.ajax({
                        url: '/series/' + serieId + '/temporadas',
                        type: 'GET',
                        success: function(response) {
                            $('#numeroTemporada').empty();
                            $.each(response, function(index, temporada) {
                                $('#numeroTemporada').append($('<option>', {
                                    value: temporada.numero_temporada,
                                    text: temporada.numero_temporada
                                }));
                            });
                            
                        },
                        error: function(xhr, status, error) {
                            console.error(error);
                        }
                    });
                }));
            });
        </script>
@endsection