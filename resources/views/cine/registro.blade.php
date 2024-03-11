@extends('layouts.registroLa')
@section('title', 'Sign up')
@section('content')
<div class="container" style=" min-width:300px;width: 50%; margin-top: 2%; padding-top: 2%; padding-bottom: 5%; background-color: rgb(246, 167, 0, 0.9); border: 5px groove blue; border-radius: 30px; box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.9);">
    <!-- Contenido de tu contenedor -->
    <h1 class="text-dark mb-4 text-center"><strong>SIGN UP</strong></h1>
    <div class="row justify-content-center">
        <!-- Cuatro campos en la izquierda -->
        <div class="col-md-6 form-container">
            <!-- Formulario de registro -->
            <form action="{{ route('cine_pasarelaPago') }}" method="POST">
                @csrf
                <!-- Nombre -->
                <div class="form-outline mb-2">
                    <label for="firstName" class="text-dark">First Name</label>
                    <input type="text" id="firstName" name="firstName" class="form-control" placeholder="First Name" style="background-color: #FFFACD">
                </div>
                <!-- Apellido -->
                <div class="form-outline mb-2">
                    <label for="lastName" class="text-dark">Last Name</label>
                    <input type="text" id="lastName" name="lastName" class="form-control" placeholder="Last Name" style="background-color: #FFFACD">
                </div>
                <!-- Contraseña -->
                <div class="form-outline mb-2">
                    <label for="password" class="text-dark">Password</label>
                    <input type="password" id="password" name="password" class="form-control" placeholder="Password" style="background-color: #FFFACD">
                </div>
                <!-- Fecha de cumpleaños -->
                <div class="form-outline mb-2">
                    <label for="birthday" class="text-dark">Birthday</label>
                    <input type="date" id="birthday" name="birthday" class="form-control" style="background-color: #FFFACD">
                </div>
            </div>
            <!-- Cuatro campos en la derecha -->
            <div class="col-md-6 form-container">
                <!-- Email -->
                <div class="form-outline mb-2">
                    <label for="email" class="text-dark">Email</label>
                    <input type="email" id="email" name="email" class="form-control" placeholder="Email" style="background-color: #FFFACD">
                </div>
                <!-- Repetir contraseña -->
                <div class="form-outline mb-2">
                    <label for="confirmPassword" class="text-dark" >Confirm Password</label>
                    <input type="password" id="confirmPassword" name="confirmPassword" class="form-control" placeholder="Confirm Password" style="background-color: #FFFACD"> 
                </div>
                <!-- Selección de tipo de suscripción -->
                <div class="form-outline mb-2">
                    <label for="subscriptionType" class="text-dark">Subscription Type</label>
                    <select class="form-control" id="subscriptionType" name="subscriptionType" style="background-color: #FFFACD;">
                        <option value="Silver">Silver (5 EUR)</option>
                        <option value="Gold">Gold (10 EUR)</option>
                        <option value="Platinum">Platinum (12 EUR)</option>
                    </select>
                </div>
                <!-- Selección de modalidad de pago -->
                <div class="form-outline mb-2">
                    <label for="paymentPlan" class="text-dark">Payment Plan</label>
                    <select class="form-control" id="paymentPlan" name="paymentPlan" style="background-color: #FFFACD;">
                        <option value="Monthly">Monthly</option>
                        <option value="Quarterly">Quarterly</option>
                        <option value="Annual">Annual</option>
                    </select>
                </div>
            </div>
            <!-- Botón de registro -->
            <div class="col-md-12 text-center">
                <button type="submit" class="btn btn-dark text-warning" style=" margin-top:10px;width: 200px;"><strong>CONTINUE WITH PAYMENT</strong></button>
            </div>
            </form>
            <!-- Enlace a más detalles de suscripciones -->
            <div class="col-md-12 text-center mt-3">
                <a href="{{ route('cine_suscriptions') }}"  class="text-dark">More Subscription Details</a>
            </div>
        </div>
    </div>
</div>
@endsection
