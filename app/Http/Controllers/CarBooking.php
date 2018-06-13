<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Html;
use App\Car;
class CarBooking extends Controller

{
    
    protected $id;
    protected $carName;
    protected $location;
    protected $time;
    protected $returned;
    protected $userID;

    /** creates the object*/
    public function __construct($carName, $location,  $time, $userID)
    {
        $this->carName = $carName;
        $this->time = $time;
        $this->location = $location;
        $this->returned=0;
        $this->userID=$userID;
    } 
    
    /** setters. For a new one do
    public static function setFieldName(string $tempVariableName {
        $fieldName=$tempVariableName;
        return;
    }
    where tempVariableName is replaced with your temporary variable's name etc
    */ 
     
    public static function setCarName(string $s) {
        $carName=$s;
        return;
    } 
    
    public static function setlocation(string $l) {
        $location=$l;
        return;
    } 
    
    public static function setTime(string $t) {
        $time=$t;
        return;
    } 
    
    public static function setReturned(int $i) {
        $returned=$i;
        return;
    }
    
    public function index() {
        //
    }
    
    /** getters. For a new one do
     public function getFieldName() {
         return "{$this->fieldName}";
     }
     where FieldName is the name of the field. MUST have the quotation marks
     and braces! */
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
    
    public function getReturned()
    {
        return $returned;
    } 
    
    public function getUserID()
    {
        return $UserID;
    } 
    
    public function save()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $carName=$request->input('carName');
        $location=$request->input('location');
        $time=$request->input('time');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
