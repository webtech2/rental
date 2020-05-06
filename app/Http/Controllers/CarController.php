<?php

namespace App\Http\Controllers;

use App\Car;
use App\Specification;
use App\VehicleClass;
use Illuminate\Http\Request;
use function view;

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
    
    public function getFilter() {
        $classes = VehicleClass::all()->sortBy('name')->pluck('name','id');
        $makes = Specification::select('make')->distinct()->pluck('make', 'make');
        return view('filter', compact('classes','makes') /*compact makes an array('classes' => $classes, 'makes' => $makes)*/);
    }     
    
    public function postFilter(Request $request) {
        $rules = array(
            'class_id' => 'nullable|exists:classes,id',
            'make' => 'nullable|exists:specifications,make',
            'price_from' => 'nullable|numeric|min:0',
            'price_from' => 'nullable|numeric|min:0',
            'automatic' => 'in:0,1,2',
        );        
        $this->validate($request, $rules); 
        
        $query = Car::join('specifications', 'specifications.id', '=', 'cars.specification_id');
        if ($request->class_id != null) {
            $query = $query->where('specifications.class_id',$request->class_id);
        } 
        
        if ($request->make != null) {
            $query = $query->where('specifications.make',$request->make);
        }

        if ($request->automatic < 2) {
            $query = $query->where('specifications.automatic',$request->automatic);
        }
        
        if ($request->price_from != null) {
            $query = $query->where('cars.price','>=',$request->price_from);
        }

        if ($request->price_to != null) {
            $query = $query->where('cars.price','<=',$request->price_to);
        }

        $query = $query->select('cars.*');
        
        return view('cars', array('cars' => $query->orderBy('price')->get()));
    }      
}
