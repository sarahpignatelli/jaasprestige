@extends('layouts.app')
@section('title', 'Admin - Edit Prestige')
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
                <h2>Edit Prestige Details</h2>
            </div>
        </div>
    </div>
    
    <!-- Include Validation for errors -->
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
    
    <!-- Updates any changes made -->
    {!! Form::model($cars, ['method' => 'PATCH','route' => ['CarsCRUD.update', $cars->id]]) !!}
        <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <!-- Allows the Admin to edit the Car Name  -->
            <strong>Car Name:</strong>
            {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <!-- Allows Admin to edit the Location -->
            <strong>Location:</strong>
            {!! Form::text('location', null, array('placeholder' => 'Location','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <!-- Allows Admin to edit the Latitude of the Car -->
            <strong>Latitude:</strong>
            {!! Form::text('lat', null, array('placeholder' => 'Latitude','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <!-- Allows Admin to edit the Longitude of the Car -->
            <strong>Longitude:</strong>
            {!! Form::text('lng', null, array('placeholder' => 'Longitude','class' => 'form-control')) !!}
        </div>
    </div>
    <!-- Submit button -->
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <a class="btn btn-secondary" href="{{ route('CarsCRUD.index') }}"> Back</a>
        <button id="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
    {!! Form::close() !!}
</div>
@endsection