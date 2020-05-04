<?php

namespace App\Http\Controllers;

use App\Car;
use App\Specification;
use Illuminate\Http\Request;

class CarController extends Controller
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
        $rules = array(
            'reg_number' => 'required|alpha_num|min:2|max:20',
            'mileage' => 'nullable|integer|min:0',
            'color' => 'required|string|min:3|max:50',
            'specification_id' => 'required|exists:specifications,id',
            'price' => 'required|numeric|min:0',
        );        
        $this->validate($request, $rules); 
        
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
