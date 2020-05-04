<?php

namespace App\Http\Controllers;

use App\VehicleClass;
use Illuminate\Http\Request;

class VehicleClassController extends Controller
{
    public function __construct() {
        // only Admins have access to the following methods
        $this->middleware('admin')->only(['create', 'store']);
    }    
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('classes', array('title' => 'Vehicle Classes', 'classes' => VehicleClass::all()));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('class_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = $rules = array(
            'name' => 'required|min:3|max:100|unique:classes',
        );

        $this->validate($request, $rules);

        $class = new VehicleClass();
        $class->name = $request->name;
        $class->save();
        return redirect('admin')->with('message','Vehicle class '.$class->name.' added!');        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $class = VehicleClass::findOrFail($id);
        return view('specs', array('class' => $class, 'specs' => $class->specifications));
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
