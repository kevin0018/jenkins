@extends('layouts.registroLa')
@section('title', 'Sign up')
@section('content')
<div class="container" style=" min-width:300px;width: 30%; margin-top: 2%; padding-top: 2%; padding-bottom: 5%; background-color: rgb(246, 167, 0, 0.9); border: 5px groove blue; border-radius: 30px; box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.9);">
    <!-- Contenido de tu contenedor -->
    
    <h1 class="text-dark mb-4 text-center"><strong>PAYMENT</strong></h1>
    <div class="row justify-content-center">
        <!-- Tres campos en la izquierda -->
        <div class="col-md-6 form-container">
            <!-- Formulario de registro -->
            <form action="{{ route('thankyou_page') }}" method="POST">
                @csrf
                <div class="form-check mb-2">
                    <input class="form-check-input" type="radio" name="paymentMethod" id="paymentMethod1" value="Paypal">
                    <label class="form-check-label text-dark" for="paymentMethod1">
                        Pay with Paypal
                    </label>
                </div>
                <div class="form-check mb-2">
                    <input class="form-check-input" type="radio" name="paymentMethod" id="paymentMethod2" value="Credit/Debit Card">
                    <label class="form-check-label text-dark" for="paymentMethod2">
                        Pay with Credit/Debit Card
                    </label>
                </div>
              
                
            </div>
            <!-- Tres campos en la derecha -->
            <div class="col-md-6 form-container">
                <!-- Fecha de cumpleaños -->
                
                <!-- Campos para tarjeta de crédito/débito (ocultos inicialmente) -->
                <div id="creditCardFields" style="display: none;">
                    <div class="form-outline mb-2">
                        <label for="cardHolder" class="text-dark">Cardholder Name</label>
                        <input type="text" id="cardHolder" name="cardHolder" class="form-control" placeholder="Cardholder Name" style="background-color: #FFFACD">
                    </div>
                    <div class="form-outline mb-2">
                        <label for="cardNumber" class="text-dark">Card Number</label>
                        <input type="text" id="cardNumber" name="cardNumber" class="form-control" placeholder="Card Number" style="background-color: #FFFACD">
                    </div>
                    <div class="form-outline mb-2">
                        <label for="expiryDate" class="text-dark">Expiry Date</label>
                        <input type="text" id="expiryDate" name="expiryDate" class="form-control" placeholder="MM/YY" style="background-color: #FFFACD">
                    </div>
                    <div class="form-outline mb-2">
                        <label for="cvc" class="text-dark">CVC</label>
                        <input type="text" id="cvc" name="cvc" class="form-control" placeholder="CVC" style="background-color: #FFFACD">
                    </div>
                </div>
            </div>
            <!-- Botón de registro -->
            <div class="col-md-12 text-center">
                
                <button type="submit" class="btn btn-dark text-warning" style=" margin-top:10px;width: 200px;"><strong>CONTINUE</strong></button>
            </div>
           
           
            </form>
            <a href="{{ URL::previous() }}" class="btn btn-primary text-warning" style="display: inline-block; width: 200px; text-align: center; text-decoration: none; padding: .5rem 1rem; border-radius: .25rem;"><strong>BACK</strong></a>

           
        </div>
    </div>
</div>

<script>
    // Función para mostrar los campos de tarjeta de crédito/débito al seleccionar esa opción
    document.querySelectorAll('input[name="paymentMethod"]').forEach(function(radio) {
        radio.addEventListener('change', function() {
            var creditCardFields = document.getElementById('creditCardFields');
            if (this.value === 'Credit/Debit Card') {
                creditCardFields.style.display = 'block';
            } else {
                creditCardFields.style.display = 'none';
            }
        });
    });
</script>
@endsection
