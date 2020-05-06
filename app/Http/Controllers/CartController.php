<?php

namespace App\Http\Controllers;

use App\Car;
use App\Extra;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function showCart($id = null) 
    {
        if ($id != null && !(session()->has('car_id') && session()->get('car_id') == $id)) {
            session()->put('car_id', $id);
            session()->forget('extras');
        }
        
        if (session()->has('car_id'))
            return view('cart', ['car' => Car::findOrFail(session()->get('car_id')), 
                                   'allextras' => Extra::all(), 
                                   'selected' => session()->has('extras') ? session()->get('extras') : []]);
        else
            return view('cart');            
    }
    
    public function addOrRemoveFromCart(Request $request) 
    {
        if (session()->has('extras') && in_array($request->extra_id, session()->get('extras'))) { // remove extra from cart
            $extras = session()->pull('extras');
            unset($extras[array_search($request->extra_id, $extras)]);
            session()->put('extras', $extras);
        }        
        else // add extra to cart
            session()->push('extras', $request->extra_id);

        return response()->json(['extra_id' => $request->extra_id], 200);
    }
    
}
