@extends('layouts.cine')
@section('title', 'Home')
@section('content')


    <!-- Modal -->
    <div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="successModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="successModalLabel">Success!</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              {{ session('success') }}
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>

    <h1 class="text-center with-line">{{ Auth::user()->name }}, we've made a special selection for you</h1><br><br>

    <h2 class="with-line">YOUR FAVORITES</h2>
    <div class="content py-2 movie-list">
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
    <div class="content py-2 movie-list">
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
    <div class="content py-2 movie-list">
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
    <div class="content py-2 movie-list">
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
    <script>
        // Verifica si hay un mensaje de éxito en la sesión y muestra el modal si es así
        @if (session('success'))
            $(window).on('load', function() {
                $('#successModal').modal('show');
            });
        @endif
    </script>

@endsection
