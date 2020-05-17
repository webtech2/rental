@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Order detail</h1>
        <div class="row">
            <div class="col-7">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-striped">
                            <tbody>
                                <tr>
                                    <td>Rent from</td>
                                    <td>{{ $order->from->format('d.m.Y') }}</td>
                                </tr>
                                <tr>
                                    <td>Rent to</td>
                                    <td>{{ $order->to->format('d.m.Y') }}</td>
                                </tr>
                                <tr>
                                    <td>Contact</td>
                                    <td>{{ $order->first_name }} {{ $order->last_name }} (<a href="tel:{{ $order->phone_number }}">{{ $order->phone_number }}</a>)</td>
                                </tr>
                                <tr>
                                    <td>Pickup address</td>
                                    <td>{{ $order->pickup_address }}</td>
                                </tr>
                                <tr>
                                    <td>Total price</td>
                                    <td>{{ $order->totalPrice() }} EUR</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-5">
                <div class="card">
                    <div class="card-body">
                        <h6>Vehicle class: {{ $car->specification->vehicleClass->name}}</h6>
                        <h6>Year: {{ $car->specification->year }}</h6>
                        <h6>Transmission: @if ($car->specification->automatic) automatic @else manual @endif</h6>
                        <h6>Color: {{ $car->color }}</h6>
                        <h6>Mileage: {{ $car->mileage }}</h6>
                        <h6>Price: {{ $car->price }}</h6>
                        <h6>{{ $car->condition }}</h6>
                    </div>
                    <div class="list-group">
                        <div class="list-group-item">
                            <h5>Selected extras: </h5>
                        </div>
                        @foreach ( $order->extraOrders()->get()  as $selected )
                            <div class="list-group-item">
                                {{ $selected->extras->name }}
                            </div>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>

    </div>
@endsection
