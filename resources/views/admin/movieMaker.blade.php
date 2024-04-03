@extends('layouts.suscriptionsLa')
@section('title', 'Admin Maker')

@section('content')
    <h1 class="jumbotron text-center text-warning">MAKE A FILM OR SERIE TO JENKINS</h1>

        <!--SELECCIÓN SERIE/PELI-->
    <div class="container" style="min-width: 300px;background-color:black">
            <p class="text-warning"> <strong>Choose a type of media</strong></p>
            <div class="form-check mb-2">
                <input class="form-check-input" type="radio" name="typeMedia" id="typeMedia1" value="Serie">
                <label class="form-check-label text-warning" for="typeMedia1">
                    Serie
                </label>

            </div>
            
<!--PELI-->
            <div class="form-check mb-2">
                <input class="form-check-input" type="radio" name="typeMedia" id="typeMedia2" value="Film">
                <label class="form-check-label text-warning" for="typeMedia2">
                    Film
                </label>
            </div>



            <div id= "atribFilm" style="display:none">
                <form action="{{ route('guardar_pelicula') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="titulo_medio">Title:</label>
                        <input type="text" class="form-control" id="titulo_medio" name="titulo_medio">
                    </div>
                    <div class="form-group">
                        <label for="sinopsis">Synopsis:</label>
                        <textarea class="form-control" id="sinopsis" name="sinopsis"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="caratula">Cover Image:</label>
                        <input type="file" class="form-control-file" id="caratula" name="caratula">
                    </div>
                    <div class="form-group">
                        <label for="genero">Genre:</label>
                        <input type="text" class="form-control" id="genero" name="genero">
                    </div>
                    <div class="form-group">
                        <label for="duracion_total">Total Duration:</label>
                        <input type="text" class="form-control" id="duracion_total" name="duracion_total">
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>

            </div>

            <!--SERIE-->
            <div id= "atribSerie" style="display:none">
                <!-- cosas de serie-->
                <h2 class="jumbotron text-center text-danger">FILL DATA OF NEW SERIE</h2>
                <!--Name -->
                <label for="sinospsiSerie" class="text-warning">Name of Serie: </label> <br>
                <input type="text" name="nameMedia" id="nameSerie" placeholder="Name of Serie">
                <!--Genre-->
                <label for="generoSerie" class="text-warning" style="margin-left:50px">Genre: </label>
                <select name="generoMedia" id="generoSerie">
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
                <label for="sinospsiSerie" class="text-warning">Sinopsis: </label>
                <input type="textarea" name="sinopsisMedia" id="sinopsisSerie" placeholder="Sinopsis of Serie"> &nbsp;
                <!--TEMPORADAS-->
                <label for="sinospsiSerie" class="text-warning">Sinopsis: </label>
                <input type="textarea" name="sinopsisMedia" id="sinopsisSerie" placeholder="Sinopsis of Serie"> &nbsp;

            </div>

    </div>
    <script>
        // SCRIPT PARA seleccionar pelicula o serie y  mostrar unas opciones u otras
        document.querySelectorAll('input[name="typeMedia"]').forEach(function(radio) {
            radio.addEventListener('change', function() {
                var peliAtt = document.getElementById('atribFilm');
                var serieAtt = document.getElementById('atribSerie');

                if (this.value === 'Film') {
                    peliAtt.style.display = 'block';
                    serieAtt.style.display = 'none';
                } else {
                    peliAtt.style.display = 'none';
                    serieAtt.style.display = 'block';
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
