<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use App\CarBooking;
use App\User;
use Auth;

class ReportController extends Controller
{
    /** gets all bookings of current user and returns report page view with
     * said list, or if no reports are found just returns the reports page view
     */
    public function index()
    {   
        if(!Auth()->guest()) {
        $userId = Auth::user()->id;
        $bookings = DB::table('CarBookings')->where(function ($query) use ($userId) {
            $query->where('userID', '=', $userId);
        })->get();
        return view('report', ['bookings' => $bookings ]);
        } 
        else {
            return view('report');
        }
        
    }
}
                     