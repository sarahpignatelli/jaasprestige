<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Html;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\BookReturnController;
use App\Bookings;
use App\Car;
use Carbon\Carbon;
class BookingController extends Controller
{
    

   /** return the booking view and all cars from DB for bookings page. */
    public function index()
    {
        $cars = Car::all();
        return view('booking', ['cars' => $cars ]);
    }
    
    /**getters for id, name and location
    ** get ID when given car, get car name when given car, location when
    * given car and ID when given location. Format: return $parameter->field;
    */
    public static function returnCarId($car) 
    {
     return $car->id;   
    }
    
    public static function returnCarName($car) 
    {
     return $car->name;   
    }
    
    public static function returnLocation($location) 
    {
     return $location->location;   
    }
    
    public static function returnId($location) 
    {
     return $location->id;   
    }
    
    /** Returns cars that match a specific location. Currently deprecated,
     * may be useful later, but can be safely deleted.
     */
    public static function getCars($curr) {
        /** if empty return a dummy array */
        if(!$curr){
            return array(
                "foo" => "",
            );
        }
        return DB::table('Cars')->where(function ($query) use ($curr) {
            $query->where('location', '=', $curr);
        })->get();
    }
    
    /** do not delete this! This stores the booking to the DB and updates the 
     * cars table to say a car is no longer available! Used when 
     * valid bookings form submitted (bookings.blade.php)
     */
    public function store(Request $request)                                                                                             
    {
        /**validation for the Booking form. Change as needed if new fields need
        * to be validated in the format 'field' => 'parameters' or
        * 'field' => array('paramater1','parameter2',....)
        */
        $this->validate($request, [
            'location' => 'required',
            'time' => array('required','regex:/^[0-9]{4}-((0[1-9])|(1[0-2]))-((0[1-9])|([1-2][0-9])|(3[0-1]))T[0-5][0-9]:[0-5][0-9]$/')
        ]);
        
        
        /**This gets all the data from the submitted form. Don't change this! */
        $allRequest = $request->all();
        /**And this makes saving the booking just a little easier.
         * For a new field in Car do 
         * $fieldname = Car::where('id',$allRequest['location'])->first()->fieldname;
         */
        $name=Car::where('id',$allRequest['location'] )->first()->name;
        $location=Car::where('id',$allRequest['location'] )->first()->location;
        $time=$allRequest['time'];
        $userID = Auth()->user()->id;
        $carID = $allRequest['location'];
        $car_booking = new CarBooking($name, $location, $time,$userID);
        $car_booking->save();
        /** Saving the booking into the database. If you
         * add a new field, don't forget the comma at the end!
        */
        $check = DB::table('CarBookings')->insertGetId(array(
                                                'name' => $name,
                                                'location' => $location,
                                                'time' => $time,
                                                'returned' => 0,
                                                'created_at' => Carbon::now(),
                                                'userID' => $userID,
                                                'carID' => $carID
                                                        ));
        $request->session()->put('car_booking', $car_booking);
        /**changes car availability. See bookCar in BookReturnController for info */
        BookReturnController::bookCar($carID);
        return redirect()->route('bookingConfirm');
    }
}
    