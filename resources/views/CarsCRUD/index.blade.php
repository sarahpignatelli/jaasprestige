@extends('layouts.app')
@section('title', 'Prestige Admin')
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
                <h2>Prestige Cars</h2>
            </div>
            
        </div>
    </div>
    <!-- Alert success if successful -->
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    
    <!-- Place all details in a table -->
    <table class="table table-bordered">
        <tr>
            <th>No.</th>
            <th>Name</th>
            <th>Location</th>
            <th>Latitude</th>
            <th>Longitude</th>
            <th width="280px">Action</th>
        </tr>
        
        <!-- For each car in the databse, display its name, location, lat and lng in a table -->
        @foreach ($cars as $car)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $car->name}}</td>
                <td>{{ $car->location}}</td>
                <td>{{ $car->lat}}</td>
                <td>{{ $car->lng}}</td>
                <td>
                    <!-- Display an Edit button -->
                    <a id='edit' class="btn btn-primary" href="{{ route('CarsCRUD.edit',$car->id) }}">Edit</a>
                    <!-- Open Form -->
                    <!-- Allow Admin to Delete a car record -->
                    {!! Form::open(['method' => 'DELETE','route' => ['CarsCRUD.destroy', $car->id],'style'=>'display:inline']) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger','name' => 'delete']) !!}
                    <!-- Close Form -->
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        
    </table>
    
    <!-- Allow Admin to Add a Car record -->
    <div class="text-center">
        <a id="add-car" class="add-car" href="{{ route('CarsCRUD.create') }}">Add New Car</a>
    </div>
    {!! $cars->render() !!}
</div>
@endsection