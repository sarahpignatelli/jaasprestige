<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;

class AdminCarsCRUDController extends Controller
{
    /** validation of user credentials **/
    public function _contruct() 
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource. To change how many per page, just
     * change Car::orderBy('id','DESC')->paginate(6) to 
     * Car::orderBy('id','DESC')->paginate(number you want)
     * 
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $cars = Car::orderBy('id','DESC')->paginate(6);
        return view('CarsCRUD.index',compact('cars')) ->with('i', ($request->input('page', 1) - 1) * 6);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('CarsCRUD.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'location' => 'required',
            'lat' => 'required',
            'lng' => 'required'
            ]);
        Car::create($request->all());
        return redirect()->route('CarsCRUD.index') ->with('success', 'Car created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     
    public function show($id)
    {
        $cars = Car::find($id);
        return view ('CarsCRUD.show',compact('cars'));
    }
    */
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cars = Car::find($id);
        return view('CarsCRUD.edit',compact('cars'));
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
         $this->validate($request, [
            'name' => 'required',
            'location' => 'required',
        ]);
        Car::find($id)->update($request->all());
        return redirect()->route('CarsCRUD.index') ->with('success','Cars updated successfully!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Car::find($id)->delete();
        return redirect()->route('CarsCRUD.index') ->with('success','Cars deleted successfully!');
    }
}
