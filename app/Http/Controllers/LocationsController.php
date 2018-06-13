<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LocationsController extends Controller
{
    /** returns the view for the locations page, with a list of cars. */
    public function index()
    {
        $cars = Car::all();
        
        return view('locations', ['cars' => $cars ]);
    }
    
    /** returns a list of cars. Deprecated  */
    public static function getCarList() {
         $cars = DB::table('cars')->get();
         return $cars;
    }
    
    /** returns a list of some car information as an array, used in locations page */
    public static function getCarListAsArray() {
        $cars = DB::table('cars')->get();
        $i=0;
        $carList[0][0]=""; //make sure $carList exists;
        foreach ($cars as $current) {
            $carList[$i][0]=$current->name;
            $carList[$i][1]=$current->location;
            $carList[$i][2]=$current->lat;
            $carList[$i][3]=$current->lng;
            $i=$i+1;
        }
        return $carList;
    }
    
    /** another attempt at making markers. Deprecated */
    public static function getMarkerList() {
        $cars = DB::table('cars')->get();
        $i=0;
        $Markers[0][0]=""; //make sure $carList exists;
        foreach ($cars as $current) {
            $carList[$i][0]="<div class=\"text-center\"><h2>" . $current->name . "</h2>" . $current->location . "<br><br>@guest<a class=\"join-now text-center\" href=\"{{ url('register') }}\">{{ __('GET PRESTIGE') }}</a>@else<a class=\"join-now\" href=\"{{ url('booking') }}\">{{ __('GET PRESTIGE') }}</a>@endguest</div>";
            $carList[$i][1]=$current->lat;
            $carList[$i][2]=$current->lng;
            $i=$i+1;
        }
        return $carList;
    }
    
    
    /** getters. */
     
    public static function returnACar($car)
    {
        return $car->car;
    }


    public static function returnLocation($location) 
    {
        return $location->location; 
    }
    

    public static function returnId($location) 
    {
     return $location->id;   
    }
    
    public static function returnLat($lat) 
    {
     return $lat->lat;   
    }

    public static function returnLng($lng) 
    {
     return $lng->lng;   
    }
    
    public static function returnCarName($car) 
    {
     return $car->name;   
    }
    
    /** getters for car info. Used in getMarkers function in LocationsController */
    
    public static function fetchLat($id)
    {
        $latitude = DB::table('cars')->where(function ($query) use ($id) {
        $query->where('id', '=', $id);
        })->get()->first()->lat;
        return $latitude;
    }
    
    public static function fetchLng($id)
    {
        $longtitude = DB::table('cars')->where(function ($query) use ($id) {
        $query->where('id', '=', $id);
        })->get()->first()->lng;
        return $longtitude;
    }
    
    public static function fetchCarName($id)
    {
        $longtitude = DB::table('cars')->where(function ($query) use ($id) {
        $query->where('id', '=', $id);
        })->get()->first()->name;
        return $longtitude;
    }
    
    public static function fetchLoc($id)
    {
        $longtitude = DB::table('cars')->where(function ($query) use ($id) {
        $query->where('id', '=', $id);
        })->get()->first()->location;
        return $longtitude;
    }
    
    public static function getIDList() {
        return DB::table('cars')->pluck('id');
    }
    
    /** creates markers for all locations. Deprecated */
    
    public static function getMarkers() {
        $i=0;
        $ids = LocationsController::getIDList();
        foreach($ids as $id) {
            $markers[$i] = '{
                    coordinates:{lat:' . LocationsController::fetchLat($id) . ', lng:' . LocationsController::fetchLng($id) . '},
                    content:"<div class=\"text-center\"><h2>"' . LocationsController::fetchLoc($id) . '"</h2>"' . LocationsController::fetchCarName($id) . '"<br><br>@guest<a class=\"join-now text-center\" href=\"{{ url(\'register\') }}\">{{ __(\'GET PRESTIGE\') }}</a>@else<a class=\"join-now\" href=\"{{ url(\'booking\') }}\">{{ __(\'GET PRESTIGE\') }}</a>@endguest</div>\"
                }';
            $i=$i+1;
        }
        return $markers;
    }
}
