<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CarBooking extends Model
{
    
    /** list of fillable fields for CarBooking objects */
    protected $fillable = [
        'id','carName','location','time','returned'  
    ];
    
    /** getters */
    
    public function getLocation()
    {
        return "{$this->location}";
    }
    
    public function getCarName()
    {
        return "{$this->carName}";
    }
    
    public function getTime()
    {
        return "{$this->time}";
    }
    
    public function  getReturned()
    {
        return "{$this->returned}";
    }
    
    public function  getUserID()
    {
        return "{$this->$UserID}";
    }
    
    
}
