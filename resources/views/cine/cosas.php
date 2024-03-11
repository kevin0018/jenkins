<!--
<div class="container" style="width: 50%; margin-top: 2%; padding-top: 2%; padding-bottom: 5%; background-color: rgb(246, 167, 0, 0.9); border: 5px groove blue; border-radius: 30px; box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.9);">
 
    <h1 class="text-dark mb-4 text-center"><strong>Datos Usuario</strong></h1>
    <div class="row justify-content-center">

         Información del usuario 

        <div class="col-md-6 form-container">
            <h3 class="text-dark mb-3"><strong>Información Personal</strong></h3>
            <p>Nombre: {{ $usuario->nombre }}</p>
            <p>Apellidos: {{ $usuario->apellidos }}</p>
            <p>Dirección: {{ $usuario->direccion }}</p>
            <p>Método de Pago: {{ $usuario->metodo_pago }}</p>

            Campo de número de tarjeta oculto

            <p style="display: none;">Número de Tarjeta: {{ $usuario->numero_tarjeta }}</p>
          Campo de contraseña oculta 
            <p style="display: none;">Contraseña: {{ $usuario->contraseña }}</p>
            <p>Tipo de Suscripción: {{ $usuario->tipo_suscripcion }}</p>
            <p>Desde: {{ $usuario->fecha_suscripcion }}</p>
        </div>
    </div>
-->