@extends('layouts.home_layout')
@section('title', 'Home')
@section('content')
    <div class="content d-flex py-2">
        <p class="p-main-r">
            <span><b>Kung Fu Panda 4</b></span> <br> <br>

            Película de animación para el público familiar que supone la cuarta entrega de la franquicia Kung Fu Panda. Es
            el momento de que Po dé el siguiente paso en su viaje.
            Tras años siendo Guerrero del Dragón junto al Maestro Shifu, el panda experto en artes marciales ascenderá a
            Líder Espiritual del Valle de la Paz. Para conseguirlo,
            necesita encontrar y entrenar a un nuevo Guerrero Dragón.

            En esta nueva aventura conocerá a Zhen, una astuta y rápida ladrona, cuyas habilidades resultarán de gran ayuda.
            Juntos, se enfrentarán a una malvada y poderosa hechicera, La Camaleona, una reptil que puede transformarse en
            cualquier criatura y que pretende convocar a todos los villanos a quienes Po ha vencido en el pasado. En su
            empeño por proteger el Valle de la Paz de las garras de hechicera cambiaformas, el dúo formado por Po y Zhen
            tendrá que trabajar en equipo. En el proceso, Po descubrirá que los héroes pueden encontrarse en los lugares más
            inesperados.
        </p>
        <img src="{{ URL::asset('/img/home/images.jpeg') }}" alt="peli_img" class="rounded">
    </div>
    <div class="content d-flex py-4">
        <img src="{{ URL::asset('/img/home/images2.jpeg') }}" alt="peli2_img" class="rounded">
        <p class="p-main-l">
            <span>Migración. Un viaje patas arriba<b></b></span> <br> <br>

            Los estudios Illumination y Universal Pictures vuelven a unir sus fuerzas en Migración. Un viaje patas arriba,
            una comedia de animación que sigue a unos jóvenes patos hermanos que convencen a su sobreprotector padre para
            que les deje emprender las vacaciones de su vida, mientras intentan emigrar desde Nueva Inglaterra -a través de
            la ciudad de Nueva York- y finalmente hasta las Bahamas. La película está producida por el fundador de la
            compañía, Chris Meledandri, y dirigida por el nominado al Oscar Benjamin Renner (Ernest y Célestine) con un
            guión original de Mike White (Escuela de rock).
        </p>
    </div>
    <div class="content d-flex py-2">
        <p class="p-main-r">
            <span><b>Wonka</b></span> <br> <br>

            Fantasía musical sobre Willy Wonka (Timothée Chalamet) antes de convertirse en el mayor fabricante de chocolate
            y caramelos de todo el mundo. Su historia plasma los comienzos vívidos y míticos de un imaginativo joven
            inventor, que no tardará en convertirse en el famoso y delicioso Mozart del chocolate. El joven se embarca en
            una misión para difundir alegría a través de sus invenciones, que rápidamente se convierten en un fenómeno y
            llamarán la atención del "Cartel del Chocolate". La historia de Wonka estará también marcada por su madre y por
            su amistad con un joven huérfano.
        </p>
        <img src="{{ URL::asset('/img/home/images3.jpg') }}" alt="peli_img" class="rounded">
    </div>
    <div class="content d-flex py-4">
        <img src="{{ URL::asset('/img/home/images4.jpeg') }}" alt="peli2_img" class="rounded">
        <p class="p-main-l">
            <span>Avatar la leyenda de Aang<b></b></span> <br> <br>

            La serie se centra en el viaje de Aang, de 12 años, el Avatar actual y último superviviente de su nación, los
            Nómadas del Aire, junto con sus amigos Sokka, Katara y más tarde Toph, mientras se esfuerzan por poner fin a la
            guerra de la Nación del Fuego contra las otras naciones del mundo. También sigue la historia de Zuko, el
            príncipe exiliado de la Nación del Fuego, que busca restaurar su honor perdido capturando a Aang, acompañado por
            su sabio tío Iroh, y más tarde, la de su ambiciosa hermana Azula.
        </p>
    </div>
@endsection
