<?php

namespace App\Http\Controllers;

use App\Car;
use App\Extra;
use App\ExtraOrder;
use App\Http\Requests\CreateOrder;
use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Response;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        if (!session()->has(['car_id', 'extras'])) return view('cart');

        /** @var Car $car */
        $car = Car::findOrFail(session()->get('car_id'));
        $extras = Extra::query()->whereIn('id', session()->get('extras'));

        return view('order_create', [
            'car' => $car,
            'extras' => $extras->get(),
            'price_per_day' => $car->price + $extras->sum('price_per_day'),
            'order' => new Order(),
        ]);
    }


    public function store(CreateOrder $request)
    {
        if (!session()->has(['car_id', 'extras']))
            return view('cart');

        $order = NULL;
        DB::transaction(function () use ($request, &$order) {
            /** @var Car $car */
            $car = Car::findOrFail(session()->get('car_id'));
            $extras = Extra::query()->whereIn('id', session()->get('extras'))->get();

            $data = $request->validated();
            $data['car_id'] = $car->id;
            $data['user_id'] = Auth::user()->id;
            $order = new Order($data);

            $order->save();

            foreach ($extras as $extra) {
                $eo = new ExtraOrder([
                    'order_id' => $order->id,
                    'extras_id' => $extra->id
                ]);
                $eo->save();
            }
        });

        return redirect(
            action('OrderController@show', ['id' => $order->id]),
            Response::HTTP_CREATED
        );
    }

    public function show(Request $request, $id)
    {
        $order = Order::findOrFail($id);
        return view('order_show', [
            'order' => $order,
            'car' => $order->car,
        ]);
    }
}
