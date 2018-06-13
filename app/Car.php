<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = [
        'id', 'name', 'model', 'location', 'lat', 'lng'
    ];
    
    public function post()
    {
        return $this->belongsTo('App\Location', 'locationName', 'location');
    }
}
