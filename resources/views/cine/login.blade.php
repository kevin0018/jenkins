@extends('layouts.loginLa')
@section('title', 'Sign in')
@section('content')
<div class="container container-login">
    <!-- Contenido de tu contenedor -->
    <h1 class="text-dark mb-4 text-center" style="padding-top: 20px;"><strong>SIGN IN</strong></h1>
    <div class="row justify-content-center">
        <div class="col-md-6 form-container">
            <!-- Formulario de inicio de sesión -->
            <form action="{{ route('cine_login_p') }}" method="POST">
                @csrf
                <div class="form-outline mb-4">
                    <input type="email" id="loginName" style="background-color:#FFFACD" name="email" class="form-control" placeholder="Email">
                </div>
                <div class="form-outline mb-4">
                    <input type="password" id="loginPassword" style="background-color:#FFFACD" name="password" class="form-control" placeholder="Password">
                </div>
                <div class="form-outline mb-4 text-center">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <button type="submit" class="btn btn-dark text-warning"><strong>LOG IN</strong></button>
                </div>
            </form>
            <!-- Enlaces adicionales -->
            <div class="row mb-4">
                <div class="col-12 text-center">
                    <a href="/password/reset"><strong>Forget your password?</strong></a>
                    <p class="mb-0 text-dark"><strong>New to Jenkins?</strong> <a href="{{ route('cine_registro') }}"><strong>Sign up now!</strong></a></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
