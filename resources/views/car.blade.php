@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm">
            <div class="card">
                <h4 class="list-group-item list-group-item-primary">{{ $car->specification->make }} {{$car->specification->model}}</h4>
                <div class="card-body">
                <h5 class="card-text">Vehicle class: {{ $car->specification->vehicleClass->name}}</h5>
                <h5 class="card-text">Year: {{ $car->specification->year }}</h5>
                <h5 class="card-text">Transmission: @if ($car->specification->automatic) automatic @else manual @endif</h5>
                <h5 class="card-text">Color: {{ $car->color }}</h5>
                <h5 class="card-text">Mileage: {{ $car->mileage }}</h5>
                <h5 class="card-text">Price: {{ $car->price }}</h5>
                <h5 class="card-text">{{ $car->condition }}</h5>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection