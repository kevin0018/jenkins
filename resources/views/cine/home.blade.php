@extends('layouts.home_layout')
@section('title', 'Home')
@section('content')
    <div class="content d-flex py-2">
        <p class="p-main-r">
            <span><b>Kung Fu Panda 4</b></span> <br> <br>

            Animated movie for family audiences that is the fourth installment of the Kung Fu Panda franchise. It's time for
            Po to take the next step in his journey. After years of being the Dragon Warrior alongside Master Shifu, the
            martial arts expert panda will ascend to Spirit Leader of the Valley of Peace. To achieve this, he needs to find
            and train a new Dragon Warrior. <br>

            In this new adventure, he will meet Zhen, a clever and fast thief, whose skills will be of great help. Together,
            they will face an evil and powerful sorceress, The Chameleon, a reptile that can transform into any creature and
            who aims to summon all the villains Po has defeated in the past. In their endeavor to protect the Valley of
            Peace from the clutches of the shape-shifting sorceress, the duo of Po and Zhen will have to work as a team. In
            the process, Po will discover that heroes can be found in the most unexpected places.
        </p>
        <img src="{{ URL::asset('/img/movie_poster/images.jpeg') }}" alt="movie_img" class="rounded">
    </div>
    <div class="content d-flex py-4">
        <img src="{{ URL::asset('/img/movie_poster/images2.jpeg') }}" alt="movie2_img" class="rounded">
        <p class="p-main-l">
            <span>Migration. An upside-down journey<b></b></span> <br> <br>

            Illumination and Universal Pictures studios join forces again in Migration. An upside-down journey, an animated
            comedy that follows young duck siblings who convince their overprotective father to let them embark on the
            vacation of their lives, while trying to migrate from New England - through New York City - and finally to the
            Bahamas. The film is produced by the company's founder, Chris Meledandri, and directed by Oscar-nominated
            Benjamin Renner (Ernest & Celestine) with an original screenplay by Mike White (School of Rock).
        </p>
    </div>
    <div class="content d-flex py-2">
        <p class="p-main-r">
            <span><b>Wonka</b></span> <br> <br>

            Musical fantasy about Willy Wonka (Timothée Chalamet) before becoming the greatest chocolate and candy maker in
            the world. His story depicts the vivid and mythical beginnings of an imaginative young inventor, who will soon
            become the famous and delicious Mozart of chocolate. The young man embarks on a mission to spread joy through
            his inventions, which quickly become a phenomenon and catch the attention of the "Chocolate Cartel." Wonka's
            story will also be marked by his mother and his friendship with a young orphan.
        </p>
        <img src="{{ URL::asset('/img/movie_poster/images3.jpg') }}" alt="movie_img" class="rounded">
    </div>
    <div class="content d-flex py-4">
        <img src="{{ URL::asset('/img/movie_poster/images4.jpeg') }}" alt="movie2_img" class="rounded">
        <p class="p-main-l">
            <span>Avatar: The Last Airbender<b></b></span> <br> <br>

            The series focuses on the journey of 12-year-old Aang, the current Avatar and last survivor of his nation, the
            Air Nomads, along with his friends Sokka, Katara, and later Toph, as they strive to end the war of the Fire
            Nation against the other nations of the world. It also follows the story of Zuko, the exiled prince of the Fire
            Nation, who seeks to restore his lost honor by capturing Aang, accompanied by his wise uncle Iroh, and later,
            that of his ambitious sister Azula.
        </p>
    </div>
@endsection
