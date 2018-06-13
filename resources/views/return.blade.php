@extends('layouts.app')
@section('title', 'JAAS Prestige | Return')
@section('content')

<!-- Include the use of multiple Controllers -->
<?php 
use App\Http\Controllers\ReturnController;
use App\Http\Controllers\BookReturnController;
use App\CarBooking;
?>

<!-- In-Page Styling -->
<style type="text/css">
    .h1 {
        font-size:30px;
        text-align: center;
        font-weight: bold;
    }
  
    .li {
        font-size:20px;
    }
</style>

<!-- If a user is a guest, then direct to Register -->
<div class="container">
    @guest
        <br><br>
        <div class="text-center">
            <img src="images/carside.svg">
            <h3>We know you're excited to drive a Prestige car, but you'll need to <a href="{{ url('register') }}">{{ __('register') }}</a> first!</h3>
        </div>
        
    <!-- If a user has a booking and the car is not available, then allow the user to return the car -->
    @elseif(BookReturnController::userHasBooking()==1 && BookReturnController::getCarAvailable()==1)
        <br><br>
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center">Return Prestige</h1>
            </div>
        </div>
        <br>
        <!-- Placing text and images in a grid format -->
        <div class="row justify-content-center align-items-start">
                <div class="col-md-4">
                    <div class="textholder text-center">
                        <h3>1. Park</h3>
                         <img src="/images/parking.svg" style="width:35%;" alt="JAAS Prestige"><br><br>
                         <p> Return the car to it's Prestige home! </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="textholder text-center">
                        <h3>2. Tap Off</h3>
                        <img src="/images/credit-card.svg" style="width:35%; padding-bottom: 25px;" alt="JAAS Prestige">
                        <br>
                        <p> Simply place keys in the lock box and tap off!</p>
                        <!--  <div>Icons made by <a href="http://www.freepik.com" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>
                        -->
                    </div>
                </div>
                    <div class="col-md-4">
                    <div class="textholder text-center">
                        <h3>3. Payment</h3>
                        <img src="/images/online-payment.svg" style="width:35%; padding-bottom: 25px;" alt="JAAS Prestige">
                        <br>
                        <p>You are automatically charged through your choice of payment!</p>
                        <!--  <div>Icons made by <a href="http://www.freepik.com" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>
                        -->
                    </div>
                </div>
        <div class="row">
            <!-- Display the cost of the booking -->
            <div class="col-md-12">
                 <h3 class="text-center">{{ ReturnController::calcCost('10') }}</h3>
                 <br><br>
            </div>
        </div>
    </div>
    
    <!-- Return Book that redirects to the returnConfirm page once pressed -->
    <div clas="row">
        <div class="col-md-12">
             <div class="return-button">
                <form action='returnConfirm'>
                <button id="submit" class="btn btn-return" onclick="window.location='{{ url('returnConfirm') }}'" type="submit">Return Prestige</button>
                </form>
            </div>
        </div>
    </div>
    
    <!-- If a user has not booked a car then will direct them to the Booking page -->
    @else
        <br><br>
        <div class="text-center">
            <img src="images/carside.svg">
            <h3>We know you're excited to drive a Prestige car, but you'll need to <a href="{{ url('booking') }}">{{ __('book') }}</a> first!</h3>
        </div>
    @endguest
</div>

@endsection