@extends('layouts.app')
@section('title', 'JAAS Prestige | Cars')
@section('content')

<!-- In-Page Styling Code  -->
    <style>
        .textholder
        {
            margin: 0 auto; 
            max-width: 250px;
        }
        
        .jumbotron {
            position: absolute;
            top: 50%;
            left:50%;
            transform: translate(-50%,-50%);
        }
        
    </style>
    
    <!-- Putting text on an image -->
    <div class="my-container">
        <img src="/images/cars.jpg" style="width:100%;" alt="JAAS Prestige">
        <div class="my-centered">
            <h1 style="font-size: 40px; font-weight: 600;">THE Prestige cars</h1>
        </div>
    </div>
    
    <!-- Placing text and images in a grid format -->
    <div class="container">
        <br>
        <br>
        <div class="row">
            <div class="col-md-3">
                <div class="text-center">
                    <img style="height: 150px;"src="/images/mercedescg3.png">
                </div>
            </div>
            <div class="col-md-6">
                <div class="textholder h3 text-center">
                    Mercedes AMG CG3
                </div>
                <div class="text-left">
                    <ul>
                       <li>
                           0-100km/hr in 4.5 seconds    
                       </li>
                       <li>
                            AMG 4.0-Liter V8 Biturbo engine
                       </li>
                       <li>
                            AMG ride control Sports Suspension.
                       </li>
                    </ul>
                </div>
            </div>
            
            <!-- 'Get Prestige' button: If the user is a guest, then direct them to register, otherwise direct them to the Booking page -->
            <div class="col-md-3">
                <div class="textholder text-center font-weight-bold">
                    @guest
                        <a class="join-now" href="{{ route('register') }}">{{ __('GET PRESTIGE') }}</a>
                    @else
                        <a class="join-now" href="{{ url('booking') }}">{{ __('GET PRESTIGE') }}</a> 
                    @endguest
                    <br>
                </div>
            </div>
        </div>
        <hr>
        
        <!-- Placing text and images in a grid format -->
        <div class="row">
            <div class="col-md-3">
                <div class="text-center">
                    <img src="/images/bmwx2.png">
                </div>
            </div>
            <div class="col-md-6">
                <div class="textholder h3 text-center">
                    BMW X2
                </div>
                <div class="text-left">
                      <ul>
                       <li>
                           0-100km/hr in 7.7 seconds    
                       </li>
                       <li>
                             Driving Assistant Plus – adaptive cruise control with stop&go
                       </li>
                       <li>
                           2.0-litre four-cylinder turbo petrol.    
                           
                       </li>
                    </ul> 
                </div>
            </div>
            
            <!-- 'Get Prestige' button: If the user is a guest, then direct them to register, otherwise direct them to the Booking page -->
            <div class="col-md-3">
                <div class="textholder text-center font-weight-bold">
                    @guest
                        <a class="join-now" href="{{ route('register') }}">{{ __('GET PRESTIGE') }}</a>
                    @else
                        <a class="join-now" href="{{ url('booking') }}">{{ __('GET PRESTIGE') }}</a>  
                    @endguest
                    <br>
                </div>
            </div>
        </div>
        <hr>
        
        <!-- Placing text and images in a grid format -->
        <div class="row">
            <div class="col-md-3">
                <div class="text-center">
                    <img style="height:140px;"src="/images/audia5.png">
                </div>
            </div>
            <div class="col-md-6">
                <div class="textholder h3 text-center">
                    Audi A5 Sportsback
                </div>
                <div class="text-left">
                     <ul>
                       <li>
                           0-100km/hr in 6.6 seconds    
                       </li>
                       <li>
                           Autonomous Emergency Braking (AEB) with pedestrian detection.
                       </li>
                       <li>
                            Virtual cockpit is a 12.3-inch digital instrument cluster that replaces traditional dials.
                       </li>
                       <li>
                          Quattro all-wheel drive delivers superior traction and control to all four wheels.    
                           
                       </li>
                    </ul> 
                </div>
            </div>
            
            <!-- 'Get Prestige' button: If the user is a guest, then direct them to register, otherwise direct them to the Booking page -->
            <div class="col-md-3">
                <div class="textholder text-center font-weight-bold">
                    @guest
                        <a class="join-now" href="{{ route('register') }}">{{ __('GET PRESTIGE') }}</a>
                    @else
                        <a class="join-now" href="{{ url('booking') }}">{{ __('GET PRESTIGE') }}</a> 
                    @endguest
                    <br>
                </div>
            </div>
        </div>
        @include('layouts.footer')
    </div>
@endsection