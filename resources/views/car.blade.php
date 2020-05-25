@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm">
            <div class="card">
                <h4 class="list-group-item list-group-item-primary">{{ $car->specification->make }} {{$car->specification->model}}</h4>
                <div class="card-body">
                <h5 class="card-text">{{ __('messages.vehicle_class') }}: {{ $car->specification->vehicleClass->name}}</h5>
                <h5 class="card-text">{{ __('messages.Year') }}: {{ $car->specification->year }}</h5>
                <h5 class="card-text">{{ __('messages.Transmission') }}: @if ($car->specification->automatic) {{ __('messages.automatic') }} @else {{ __('messages.manual') }} @endif</h5>
                <h5 class="card-text">{{ __('messages.Color') }}: {{ $car->color }}</h5>
                <h5 class="card-text">{{ __('messages.Mileage') }}: {{ $car->mileage }}</h5>
                <h5 class="card-text">{{ __('messages.Price') }}: {{ $car->price }}</h5>
                <h5 class="card-text">{{ $car->condition }}</h5>
                <a class="btn btn-primary float-right" href="{{ action('CartController@showCart', $car->id) }}">{{ __('messages.Book') }}</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection