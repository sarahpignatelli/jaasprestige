@extends('layouts.app')
@section('title', 'JAAS Prestige | Return Confirmation')
@section('content')

<!-- Including the use of the BookReturn Controller -->
<?php
use App\Http\Controllers\BookReturnController;
?>

<!-- If the user is a guest, then direct them to Register -->
@guest
    <div class="text-center">
        <br><br>
        <img src="images/carside.svg">
        <h3>We know you're excited to drive a Prestige car, but you'll need to <a href="{{ route('register') }}">{{ __('register') }}</a> first!</h3>
    </div>
    
<!-- If the user is NOT a guest and has a boooking and the car is not available then return the car booking -->
@elseif(BookReturnController::userHasBooking()==1 && BookReturnController::getCarAvailable()==1)
    <!-- Get Booking Car ID -->
    {{ BookReturnController::returnCar(BookReturnController::getCurrentBookingCarId()) }}
    <div class ="container">
        <div class="text-center">
            <div class="row align-items-center justify-content-center">
                <div class="col">
                    <div class="text-center">
                        <br>
                        <h1>Success!</h1>
                        <br>
                        <img class="check-mark" src="images/check-mark.png">
                    </div>
                </div>
            </div>
            <br>
            <h3>Your Prestige car has been returned!</h3>
            <br>
            <p>Payment will automatically be billed to your chosen preference.</p>
        </div>
    </div> 

<!-- If the user is a guest, then direct then to Book -->
@else
    <br><br>
    <div class="text-center">
        <img src="images/carside.svg">
        <h3>We know you're excited to drive a Prestige car, but you'll need to <a href="{{ url('booking') }}">{{ __('book') }}</a> first!</h3>
    </div>
@endif            

@endsection