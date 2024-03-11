@extends('layouts.registroLa')
@section('title', 'User Data')
@section('content')
<div class="container" style=" min-width:300px;width: 50%; margin-top: 2%; padding-top: 2%; padding-bottom: 5%; background-color: rgb(246, 167, 0, 0.9); border: 5px groove blue; border-radius: 30px; box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.9);">
    <!-- Content of your container -->
    <h1 class="text-dark mb-4 text-center"><strong>User Data</strong></h1>
    <div class="row justify-content-center">
        <!-- User information -->
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title text-center">Personal Information</h3>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><strong>Name:</strong> John</li>
                        <li class="list-group-item"><strong>Last Name:</strong> Doe</li>
                        <li class="list-group-item"><strong>Address:</strong> 123 Fake Street</li>
                        <li class="list-group-item"><strong>Payment Method:</strong> Credit Card</li>
                        <!-- Card number and password would be hidden -->
                        <li class="list-group-item" style="display: none;"><strong>Card Number:</strong> **** **** **** 1234</li>
                        <li class="list-group-item" style="display: none;"><strong>Password:</strong> ********</li>
                        <li class="list-group-item"><strong>Subscription Type:</strong> Platinum</li>
                        <li class="list-group-item"><strong>Since:</strong> 2023-01-15</li>
                    </ul>
                    <!-- Links to cancel subscription and go back -->
                    <div class="text-center mt-4">
                        <a href="/cancelSuscription" class="btn btn-danger mr-3">Cancel Subscription</a>
                        <a href="/cine/lista_peliculas" class="btn btn-primary">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
