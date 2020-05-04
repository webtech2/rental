<?php

namespace App\Http\Controllers;

use App\Specification;
use App\VehicleClass;
use Illuminate\Http\Request;

class SpecificationController extends Controller
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
        return view('specs', array('specs' => Specification::orderBy('make')->get()));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('spec_create', array('classes' => VehicleClass::all()->sortBy('name')->pluck('name','id')));
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
            'make' => 'required|string|min:2|max:50',
            'model' => 'required|string|max:50',
            'year' => 'required|digits:4|integer|min:1970|max:'.(date('Y')),
            'automatic' => 'required|integer|min:0|max:1',
            'class_id' => 'required|exists:classes,id',
        );        
        $this->validate($request, $rules);  
        
        $spec = new Specification();
        $spec->fill($request->all());
        $spec->save();
        return redirect()->action('SpecificationController@show', array($spec->id))->withMessage('Successfully added a new specification!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('spec', array('spec' => Specification::findOrFail($id)));
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
    
    // AJAX view
    public function getSearch() {
        return view('search');
    }
    // AJAX search
    public function postSearch(Request $request) {
        return Specification::where('make', 'LIKE', '%'.$request->get('search').'%')
                ->orWhere('model', 'LIKE', '%'.$request->get('search').'%')->get();
    }    
    
}
