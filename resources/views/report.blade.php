@extends('layouts.app')
@section('title', 'JAAS Prestige | History')
@section('content')

<!-- If a user is a guest then direct to Register -->
@guest
    <div class="text-center">
        <br><br>
        <img src="images/carside.svg">
        <h3>We know you're excited to drive a Prestige car, but you'll need to <a href="{{ route('register') }}">{{ __('register') }}</a> first!</h3>
    </div>
    
<!-- If a user is NOT a guest then display the user's previous History -->
@else
<div class ="container">
    <div class="row align-items-center justify-content-center">
        <div class="col">
            <div class="text-center">
                <br>
                <h2>Prestige History</h2>
                <br>
            </div>
        </div>
    </div>
    <div class="row align-items-center justify-content-center">
        <div class ="col">
            <table class="table table-bordered">
                <thead class="thead-light">
                    <tr>
                        <th>Prestige Car</th>
                        <th>Location</th>
                        <th>Date & Time</th>
                    </tr>
                </thead>
                <!-- For each booking, display Car Name, Location and Time in a table -->
                @foreach($bookings as $data)
                    <tr>
                        <td>{{$data->name}}</td>
                        <td>{{$data->location}}</td>
                        <td>{{$data->time}}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endguest
@endsection