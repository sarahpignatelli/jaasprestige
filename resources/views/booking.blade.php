@extends('layouts.app')
@section('title', 'JAAS Prestige | Book')
@section('content')

<!-- Use code from certain controllers -->
<?php 
use App\Http\Controllers\BookingController;
use App\Http\Controllers\BookReturnController;
?>
 
<!-- If user is a guest then they need to register, otherwise they can book a car --> 
@guest
    <div class="text-center">
        <br><br>
        <img src="images/carside.svg">
        <h3>We know you're excited to drive a Prestige car, but you'll need to <a href="{{ route('register') }}">{{ __('register') }}</a> first!</h3>
    </div>

@else
<!-- If a user does not have a booking, then open a booking form -->
@if(BookReturnController::userHasCurrentBooking()==0)
  
    {!! Form::open(['action' => 'BookingController@store']) !!}
    <div class="booking-background">
        <div class="container-booking">
            <div class="col-lg-12 margin-tb">
                <div class="text-center">
                    <h2 style="font-size:60px; margin-top:50px; color: #FFFFFF;">Book Presitige </h2>
                </div>
            </div>
        </div>   
        
        <!-- If there is an error, spit out message -->
        <div class="error-message">   
              @if (count($errors) > 0)
        <div class="alert alert-danger">
            <div class="text-center"> 
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        </div>
        
        <!-- Alert the user that the car has been successfully booked -->
        @if($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
        @endif
    </div> 
        <!-- List and display the Locations in a dropdown menu -->
        <div class="booking-center">
            <div class="form-group">
                <!--Location Input--> 
                <div class="heading-book">
                {!! Form::label('location', 'Location') !!}
                </div>
                <select class="form-control" style=" width:500px;" name="location" id="location" onchange="displayCar()">
                    @foreach($cars as $location)
                    <option value="{{BookingController::returnId($location)}}">{{BookingController::returnLocation($location)}}</option>
                    @endforeach
                </select>
            </div>
            
            <!-- List and display the Cars according to which Location is selected -->
            <!--Car Input--> 
            <div class="form-group">
                <div class="heading-book">
                {!! Form::Label('car', 'Car') !!}
                </div>
                <select class="form-control" id="car" style=" width:500px; " name="carName" /disabled>
                    @foreach($cars as $car)
                    <option value="{{BookingController::returnCarId($car)}}">{{BookingController::returnCarName($car)}}</option>
                    @endforeach
                </select>
            </div>
            
            <!-- Allow users to select the date and time they wish to book the car -->
            <!--Time Input--> 
            <div class="time-input">
                <div class="form-group">
                    {!! Form::label('time', 'Time') !!}
                    <input id="datetime" type="datetime-local" name="time">
                </div>
            </div>
            
            <!-- Book button -->
            <div class="book-button">
                <!--BTN--> 
                <br> 
                <button id="submit" class="btn btn-book" color="" type="submit">Get Prestige</button>
            </div>
       
        </div>
        
        
   
    <!-- Displaying the Car accoring to the Location -->
    <script>
        function displayCar() {
            document.getElementById('car').value = document.getElementById('location').value;
        }
    </script>
    <!-- Close the form -->
    {!! Form::close() !!}

<!-- If user has already booked, then display validation text -->
@else 
<div class="text-center">
        <br><br>
        <img src="images/carside.svg">
        <h3>You already have a current booking!</h3>
    </div>
    
@endif
@endguest

@endsection
 </div>