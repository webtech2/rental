<?php

namespace App\Http\Controllers;

use App\Car;
use App\Specification;
use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('cars', array('cars' => Car::orderBy('price')->get()));
    }

    /**
     * Show the form for creating a new car for a specification.
     *
     * @param  int  $spec_id
     * @return \Illuminate\Http\Response
     */
    public function create($spec_id)
    {
        return view('car_create', array('spec' => Specification::findOrFail($spec_id)));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $car = new Car();
        $car->reg_number = $request['reg_number'];
        $car->mileage = $request['mileage'];
        $car->color = $request['color'];
        $car->condition = $request['condition'];
        $car->price = $request['price'];
        $car->specification()->associate(Specification::findOrFail($request['specification_id']));
        $car->save();        
        return redirect()->route('spec.show', $request['specification_id']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('car', array('car' => Car::findOrFail($id)));
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
