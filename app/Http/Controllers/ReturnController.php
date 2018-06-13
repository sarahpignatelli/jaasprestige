<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use DateTime;

class ReturnController extends Controller
{
    /** Calculates the cost for your booking and displays it . Used for returns
    * page */
    public static function calcCost($rate) {
        $id=Auth()->user()->id;
        $cost = "Your cost is $";
        $hours=ReturnController::date_diff_hours($id);
        if ($hours==-1) {
           $cost = $cost . (24*$rate) . " and you are over your booking time. ";
        }
        else {
            $cost = $cost . ($hours * $rate);
        }
        return $cost;
    }
    
    /**the actual logic behind the calcCost function above */
    public static function date_diff_hours($id) {
        $date = new DateTime();
        $format = 'Y-m-d H:i:s';
        $time=BookReturnController::getCurrentBookingTime();
        $date2=DateTime::createFromFormat($format,$time);
        $diff = $date->diff($date2); 
        
        //some calculating hours based on years, months, days, and hours!
        //first set up everything
        $format = 'Y-m-d H:i:s';
        $year = $diff->format("%Y");
        $month = $diff->format("%m");
        $day = $diff->format("%d");
        $hour = $diff->format("%H");
        $minute = $diff->format ("%i");
        $second = $diff->format("%s");
        
        if($second > 0 || $minute > 0) {
            $hour++;
        };
        $minute=0;
        $second=0;
        
        if(($day==1 && $hour>0) || $day > 1 || $month > 0 || $year > 0)  {
            $hour=-1; //-1 means do 24 hours and display overtime warning
        }
        return $hour;
        /**logic for finding exact time to the hour for any number of hours. Was
     * too slow to use in the site so is deprecated. 
        $tempH=$date2->format("%G");
        $tempD=$date2->format("%j");
        $tempM=$date2->format("%n");
        $tempY=$date2->format("%Y");
        
        //logic for time difference calculation here
        while ($tempH != $date->format("%G") || $tempD != $date->format("%j") || $tempM != $date->format("%n") || $tempY != $date->format("%n")) {
            $hour++;
            $tempH++;
            if($hour==24) {
                $tempD++;
                $hour=0;
            }
            if(TestController::isDayOverflow($tempY, $tempM, $tempD)) { 
                $tempM++;
                $tempD=1;
            }
            if($tempM=13) {
                $tempY++;
                $tempM=1;
            }
        }
        return $hour;
        */
    }
    
    /** logic for finding when days overflow for increasing the months in above
    deprecated code. Too slow to be usable. */
     
    public static function isDayOverflow($Y,$M, $D) {
        //feb in a leap year
        if($M==2&&IntlGregorianCalendar::isLeapYear($Y)&& $D==30) {
            return true;
        }
        //february in a non-leap year
        else if($M==2&&!IntlGregorianCalendar::isLeapYear($Y)&&$D==29) {
            return true;
        }
        //april, june, september and november
        else if(($M==4||$M==6||$M==9||$M==11)&&$D=31) {
            return true;
        }
        //january, march, may, july, august, october and december
        else if(($M==1||$M==3||$M==5||$M==7||$M==8||$M==10||$M==12)&&$D=32){
            return true;
        }
        //else no overflow so return false
        return false;
    }
}

