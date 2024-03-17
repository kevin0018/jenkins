@extends('layouts.cine')
@section('title', 'Home')
@section('content')

    <h1 class="text-center with-line">Juan, we've made a special selection for you</h1><br><br>

    <h2 class="with-line">YOUR FAVORITES</h2>
    <div class="content d-flex py-2 movie-list">
        <a href="">
            <img src="{{ URL::asset('/img/movie_poster/godfather.jpeg')}}" alt="the_godfather">
            <p>The Godfather</p>
        </a>
        <a href="">
            <img src="{{ URL::asset('/img/movie_poster/godfather.jpeg')}}" alt="the_godfather">
            <p>The Godfather</p>
        </a>
    </div>

    <h2 class="with-line">RELATED TO YOUR LATEST</h2>
    <div class="content d-flex py-2 movie-list">
        <a href="">
            <img src="{{ URL::asset('/img/movie_poster/godfather.jpeg')}}" alt="the_godfather">
            <p>The Godfather</p>
        </a>
        <a href="">
            <img src="{{ URL::asset('/img/movie_poster/godfather.jpeg')}}" alt="the_godfather">
            <p>The Godfather</p>
        </a>
        <a href="">
            <img src="{{ URL::asset('/img/movie_poster/godfather.jpeg')}}" alt="the_godfather">
            <p>The Godfather</p>
        </a>
        <a href="">
            <img src="{{ URL::asset('/img/movie_poster/godfather.jpeg')}}" alt="the_godfather">
            <p>The Godfather</p>
        </a>
    </div>

    <h2 class="with-line">BECAUSE YOU WATCHED "The Godfather"</h2>
    <div class="content d-flex py-2 movie-list">
        <a href="">
            <img src="{{ URL::asset('/img/movie_poster/godfather.jpeg')}}" alt="the_godfather">
            <p>The Godfather</p>
        </a>
        <a href="">
            <img src="{{ URL::asset('/img/movie_poster/godfather.jpeg')}}" alt="the_godfather">
            <p>The Godfather</p>
        </a>
        <a href="">
            <img src="{{ URL::asset('/img/movie_poster/godfather.jpeg')}}" alt="the_godfather">
            <p>The Godfather</p>
        </a>
        <a href="">
            <img src="{{ URL::asset('/img/movie_poster/godfather.jpeg')}}" alt="the_godfather">
            <p>The Godfather</p>
        </a>
    </div>

    <h2 class="with-line">YOU MIGHT ALSO LIKE...</h2>
    <div class="content d-flex py-2 movie-list">
        <a href="">
            <img src="{{ URL::asset('/img/movie_poster/godfather.jpeg')}}" alt="the_godfather">
            <p>The Godfather</p>
        </a>
        <a href="">
            <img src="{{ URL::asset('/img/movie_poster/godfather.jpeg')}}" alt="the_godfather">
            <p>The Godfather</p>
        </a>
        <a href="">
            <img src="{{ URL::asset('/img/movie_poster/godfather.jpeg')}}" alt="the_godfather">
            <p>The Godfather</p>
        </a>
        <a href="">
            <img src="{{ URL::asset('/img/movie_poster/godfather.jpeg')}}" alt="the_godfather">
            <p>The Godfather</p>
        </a>
    </div>

@endsection
