@extends('layouts.suscriptionsLa')
@section('title', 'Thank You')

@section('content')
<div class="container" style="min-width: 300px ">
    <!-- Contenido de tu contenedor -->
    <h1 class="text-warning mb-4 text-center" style="text-shadow: yellow 1px 0 10px;font-size:70px"><strong>THANK YOU PAGE</strong></h1> 
    
    <div class="neon-container">
        <div class=" text-center neon1">
            <p class="text-ligth"><strong>Your subscription has been successful!</strong></p>
            <p class="text-ligth">Thank you for choosing our service.</p>
            <p class="text-ligth">You will receive a confirmation email shortly.</p>
        </div>
    </div>
    
    <a href="{{ route('cine_registro') }}">
        <button class="bg-primary text-warning" style="font-size:20px; margin-left:80%; border: 1px solid white; box-shadow: 0 0 10px yellow; height:4%;">
            <span>LOG IN</span>
        </button>
    </a>
</div>
@endsection
