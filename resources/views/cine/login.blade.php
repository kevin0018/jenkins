@extends('layouts.loginLa ')
@section('title', 'Sign in')
@section('content')
<div class="container" style="width: 30%; margin-top: 2%; padding-top: 2%; padding-bottom: 5%; background-color: rgb(246, 167, 0, 0.9); border: 5px groove blue; border-radius: 30px; box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.9);">
    <!-- Contenido de tu contenedor -->
    <h1 class="text-dark mb-4 text-center"><strong>SIGN IN</strong></h1>
    <div class="row justify-content-center">
        <div class="col-md-6 form-container">
            <!-- Email input -->
            <form action="{{ route('cine_inicio_p') }}" method="POST">
                @csrf
                <div class="form-outline mb-4">
                    <input type="email" id="loginName" style="background-color:#FFFACD" name="loginName" class="form-control" placeholder="Username or email">
                </div>
                <!-- Password input -->
                <div class="form-outline mb-4">
                    <input type="password" id="loginPassword" style="background-color:#FFFACD" name="loginPassword" class="form-control" placeholder="Password">
                </div>
                <div class="form-outline mb-4 text-center">
                    <button type="submit" class="btn btn-dark text-warning"><strong>LOG IN</strong></button>
                </div>
            </form>
            <!-- 2 column grid layout -->
            <div class="row mb-4">
                <div class="col-12 text-center">
                    <!-- Checkbox -->
                    <!-- Simple link -->
                    <a href="/Check"><strong>Forget your password?</strong></a>
                    <p class="mb-0 text-dark"><strong>New to Jenkins?</strong> <a href="{{ route('cine_registro') }}"><strong>Sign up now!</strong></a></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
