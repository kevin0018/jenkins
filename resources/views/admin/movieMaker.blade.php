@extends('layouts.suscriptionsLa')
@section('title', 'Admin Maker')

@section('content')
<h1 class="jumbotron text-center text-warning" >MAKE A FILM OR SERIE TO JENKINS</h1>


<div class="container" style="min-width: 300px;background-color:black">
<form action="{{ route('cine_lista_peliculas') }}" method="POST">
                @csrf
                <p class="text-warning"> <strong>Choose a type of media</strong></p>
                <div class="form-check mb-2">
                    <input class="form-check-input" type="radio" name="paymentMethod" id="typeMedia1" value="Serie">
                    <label class="form-check-label text-warning" for="typeMedia1">
                        Serie
                    </label>
                </div>
                <div class="form-check mb-2">
                    <input class="form-check-input" type="radio" name="paymentMethod" id="typeMedia2" value="Film">
                    <label class="form-check-label text-warning" for="typeMedia2">
                        Film
                    </label>
                </div>
               
              
            </div>

@endsection
