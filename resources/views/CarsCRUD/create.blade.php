@extends('layouts.app')
@section('title', 'Admin - Create Prestige')
@section('content')

<!-- Include the use of this Controller -->
<?php 
use App\Http\Controllers\AdminCarsCRUDController;
?>

<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="text-center">
                <br>
                <h2>Add New Prestige</h2>
            </div>
        </div>
    </div>
    
    <!-- Include Valiation of errors -->
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    <!-- Open Form -->
    <!-- Store the Creation of a record -->
    {!! Form::open(array('route' => 'CarsCRUD.store','method'=>'POST')) !!}
       <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <!-- Allow Admin to create a Car Name -->
            <strong>Car Name:</strong>
            {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <!-- Allow Admin to create a Location -->
            <strong>Location:</strong>
            {!! Form::text('location', null, array('placeholder' => 'Location','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <!-- Allow Admin to create a Latitude of a Car -->
            <strong>Latitude:</strong>
            {!! Form::text('lat', null, array('placeholder' => 'Latitude','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <!-- Allow Admin to create a Longitude of a Car -->
            <strong>Longitude:</strong>
            {!! Form::text('lng', null, array('placeholder' => 'Longitude','class' => 'form-control')) !!}
        </div>
    </div>
    
    <!-- Submit Button -->
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <a class="btn btn-secondary" href="{{ route('CarsCRUD.index') }}">Back</a>
        <button id="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
    {!! Form::close() !!}
</div>
@endsection