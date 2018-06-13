<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Car;

class BookReturnController extends Controller
{
    /** returns id of last booking of logged in user. Used for getters for
    * info from current booking and booking function in BookReturnController */
    public static function getCurrentBooking() {
        $userID=Auth()->user()->id;
        $carID = DB::table('CarBookings')->where(function ($query) use ($userID) {
            $query->where('userID', '=', $userID);
        })->get()->last();
        return $carID;
    }
    
    /** gets id of current booking. Used in returnCar function. */
    public static function getCurrentBookingId() {
        $carTime = BookReturnController::getCurrentBooking()->id;
        return $carTime;
    }
    
    /** gets time of current booking. Used in date_diff_hours function in
    * ReturnController */
    public static function getCurrentBookingTime() {
        $carTime = BookReturnController::getCurrentBooking()->time;
        return $carTime;
    }
    
    /** gets the ID of the car for current user's current booking. Used in
    * returnConfirm page to give car ID to returnCar function */
    public static function getCurrentBookingCarId() {
        $carID = BookReturnController::getCurrentBooking()->carID;
        return $carID;
    }
    
    /** returns a car to Jaas! Used in returnConfirm page. */
    public static function returnCar($id) {
        $car = Car::where('id', $id)->firstOrFail();
        //get user ID for current user
        $userID=Auth()->user()->id;
        $car->available = 0;
        $car->save();
        $car->update();
    }   
    
    /** change availability of a car so it is not available (available=1);
     * used when a user submits a valid booking form from bookings page */
    public static function bookCar($id) {
        $car = Car::where('id', $id)->firstOrFail();
        $booking = BookReturnController::getCurrentBooking();
        $car->available = 1;
        $car->save();
        $car->update();
    } 
    /**
    /** Checks if a car is already booked. Used as part ofvalidation in
    * in the return and returnConfirm pages*/
    public static function getCarAvailable() {
        if(Auth()->guest())
        {
            return 0;
        }
        if(BookReturnController::userHasBooking()==0) {
            return 0;
        } 
        //get user ID for current user
        $userID=Auth()->user()->id;
        //get the id of the car from the most recent booking of current user
        $carID = DB::table('CarBookings')->where(function ($query) use ($userID) {
            $query->where('userID', '=', $userID);
        })->get()->last()->carID;
        //get availability from car in most recent booking
        $carAvail=DB::table('cars')->where(function ($query) use ($carID) {
            $query->where('id', '=', $carID);
        })->get()->last()->Available;
        return $carAvail;
    }
    
    /** Checks if user has a current booking. Used to check if user already
     * has a current booking for bookings page. */
    public static function userHasCurrentBooking() {
            if(Auth()->guest())
            {
                return 0;
            }
         //get user ID for current user
        $userID=Auth()->user()->id;
        //get the id of the car from the most recent booking of current user
        $bookings = DB::table('CarBookings')->where(function ($query) use ($userID) {
            $query->where('userID', '=', $userID);
        })->get();
        if($bookings->isEmpty()) { 
            return 0;
        }
        $carID=$bookings->last()->carID;
        $lastBookingUser=$bookings->last();
        $lastBookingWithCar=DB::table('CarBookings')->where(function ($query) use ($carID) {
            $query->where('carID', '=', $carID);
        })->get()->last();
        if($lastBookingUser->id!=$lastBookingWithCar->id) {
            return 0;
        }
        $ret =DB::table('cars')->where(function ($query) use ($carID) {
            $query->where('id', '=', $carID);
        })->get()->last()->Available;
        return $ret;
    }
    
    /** checks if user has previous bookings. Used in return and returnconfirm
     * pages */
    public static function userHasBooking() {
        if(Auth()->guest())
            {
                return 0;
            }
         //get user ID for current user
        $userID=Auth()->user()->id;
        //get the id of the car from the most recent booking of current user
        $car = DB::table('CarBookings')->where(function ($query) use ($userID) {
            $query->where('userID', '=', $userID);
        })->get();
        if($car->isEmpty()) {
            $car = '';
        }
        if(empty($car)) { //if car is an empty array
            return 0;
        }
        else {
            return 1;
        }
    }
    
    /** returns the 'return' view for return page. */
    public static function index() {
        return view('return');
    }
}
