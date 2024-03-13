@extends('layouts.suscriptionsLa')
@section('title', 'Suscriptions')

@section('content')
<div class="container" style="min-width: 300px ">
    <!-- Contenido de tu contenedor -->
    <h1 class="text-warning mb-4 text-center" style="text-shadow: yellow 1px 0 10px;font-size:70px"><strong>SUSCRIPTIONS</strong></h1> 
    
    
        <!-- Tres campos con efecto neon -->
        <div class="neon-container">
            <div class=" text-center neon1">
                <h2 class="text-warning" style="text-shadow: yellow 1px 0 10px">SILVER PLAN</h2> <br>
            <p style="text-shadow: blue 1px 0 10px ; border-bottom: 3px dotted yellow;"><strong>Monthly price( EUR ): </strong> <br>5 $ </p> <br>
            <p style="text-shadow: blue 1px 0 10px ; border-bottom: 3px dotted yellow;"><strong>Video and sound quality </strong> <br>Good </p> <br>
            <p style="text-shadow: blue 1px 0 10px ; border-bottom: 3px dotted yellow;"><strong>Resolution </strong> <br>Full HD 1080p </p> <br>
            <p style="text-shadow: blue 1px 0 10px ; border-bottom: 3px dotted yellow;"><strong>Devices your household can watch at the same time
 </strong> <br>2 devices </p> <br>
 <p style="text-shadow: blue 1px 0 10px ; border-bottom: 3px dotted yellow;"><strong> Download devices

 </strong> <br>3 devices </p> <br>



            </div>
            <div class=" text-center neon2"><h2 class="text-warning" style="text-shadow: yellow 1px 0 10px">GOLD PLAN</h2> <br>
            <p style="text-shadow: blue 1px 0 10px ; border-bottom: 3px dotted yellow;"><strong>Monthly price( EUR ) </strong> <br>10 $ </p> <br>
            <p style="text-shadow: blue 1px 0 10px ; border-bottom: 3px dotted yellow;"><strong>Video and sound quality </strong><br>Good</p> <br>
            <p style="text-shadow: blue 1px 0 10px ; border-bottom: 3px dotted yellow;"><strong>Resolution </strong> <br>Full HD 1080p </p> <br>
            <p style="text-shadow: blue 1px 0 10px ; border-bottom: 3px dotted yellow;"><strong>Devices your household can watch at the same time
 </strong> <br>4 devices </p> <br>
 <p style="text-shadow: blue 1px 0 10px ; border-bottom: 3px dotted yellow;"><strong> Download devices

 </strong> <br>5 devices </p> <br>


        </div>
            <div class=" text-center neon3"><h2 class="text-warning" style="text-shadow: yellow 1px 0 10px">PLATINUM PLAN</h2> <br>
            <p style="text-shadow: blue 1px 0 10px ; border-bottom: 3px dotted yellow;"><strong>Monthly price( EUR ) </strong><br> 12 $ </p><br>
            <p style="text-shadow: blue 1px 0 10px ; border-bottom: 3px dotted yellow;"><strong>Video and sound quality </strong> <br>Best </p><br>
            <p style="text-shadow: blue 1px 0 10px ; border-bottom: 3px dotted yellow;"><strong>Resolution </strong> <br>4k Ultra HD 1080p </p> <br>
            <p style="text-shadow: blue 1px 0 10px ; border-bottom: 3px dotted yellow;"><strong>Devices your household can watch at the same time
 </strong> <br>6 </p> <br>
 <p style="text-shadow: blue 1px 0 10px ; border-bottom: 3px dotted yellow;"><strong> Download devices

 </strong> <br>7 devices </p> <br>

        </div>
        </div>
        <a href="{{route('cine_registro')}}"> <button class="bg-warning text-primary " style=" font-size:20px;margin-left:80%; border: 1px solid white; box-shadow 0 0 10px yellow; height:10%"><span >RETURN TO REGISTER PAGE</button></a>
</div>
@endsection
