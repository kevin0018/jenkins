    @extends('layouts.admin_layout')
    @section('title', 'Admin Maker')

    @section('content')
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
                            <label for="sinopsis" class="text-warning">Sinopsis:</label>
                            <textarea class="form-control" id="sinopsis" name="sinopsis"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="caratula" class="text-warning" >Cover Image:</label>
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
                    <label for="sinospsiSerie" class="text-warning">Name of Serie: </label> <br>
                    <input type="text" name="nombreSerie" id="nameSerie" placeholder="Name of Serie">
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
                    <label for="seasons" class="text-warning" style="margin-left:50px">How many seasons will have the serie?
                    </label>
                    <select name="seasons" id="seasons">
                        <option value="dummy" disabled selected>Choose number of seasons</option>
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="other">other</option>

                    </select>
                    <div id="customSeason" style="display:none">
                        <label for="custom" class="text-warning">Number of seasons: </label>
                        <input type="number" name="seasons" id="customSeasons">
                    </div>


                    <br>
                    <br>
                    <!--SINOPSIS -->

                    <label for="sinopsisSerie" class="text-warning" style="display: inline-block;">Sinopsis: </label>
                    <textarea name="sinopsisMedia" id="sinopsisSerie" style="height:auto; width:100%; vertical-align: top;"
                        placeholder="Sinopsis de la serie"></textarea>



                    <!--DURACIÓN TOTAL -->
                    <label for="duracionSerie" class="text-warning"> Total duration( in  minutes): </label>
                    <input type="string" name="duracionSerie" id="duracionSerie" placeholder="Total duration in minutes "> &nbsp;
                
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
    <input type="text" class="form-control" id="nombreCapitulo" name="nombreCapitulo" placeholder="Enter chapter name">
    <!-- Serie a la que pertenece -->
    <label for="serieCapitulo" class="text-warning">Series it belongs to:</label>
    <input type="number" class="form-control" id="serieCapitulo" name="serieCapitulo" placeholder="Enter series number">
    <!-- Número de temporada -->
    <label for="numeroTemporada" class="text-warning">Season number:</label>
    <input type="number" class="form-control" id="numeroTemporada" name="numeroTemporada" placeholder="Enter season number">
    
    <!-- Número de episodio -->
    <label for="numeroEpisodio" class="text-warning">Episode number:</label>
    <input type="number" class="form-control" id="numeroEpisodio" name="numeroEpisodio" placeholder="Enter episode number">
    
    <!-- Duración del capítulo -->
    <label for="duracionCapitulo" class="text-warning">Chapter duration (in minutes):</label>
    <input type="number" class="form-control" id="duracionCapitulo" name="duracionCapitulo" placeholder="Enter chapter duration">
    
    <!-- Cover Image -->
    <div class="form-group">
        <label for="caratulaCapitulo" class="text-warning">Cover Image:</label>
        <input type="file" class="form-control-file" id="caratulaCapitulo" name="caratulaCapitulo">
    </div>
    
    <!-- Link -->
    <div class="form-group">
        <label for="linkCapitulo" class="text-warning">Link:</label>
        <input type="text" class="form-control" id="linkCapitulo" name="linkCapitulo" placeholder="Enter link">
    </div>

    <!-- Botón de guardar -->
    <button type="submit" class="btn btn-primary">Save</button>
</div>

</form>

        

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
    var seasons = document.getElementById("seasons");
            var customSeasons = document.getElementById("customSeason");
            seasons.addEventListener("change", function() {
                if (seasons.value === 'other') {
                    customSeasons.style.display = 'block';
                } else {
                    customSeasons.style.display = 'none';
                }
            });
        </script>

    @endsection
