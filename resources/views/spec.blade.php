@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm">
            <div class="card">
                <h4 class="list-group-item list-group-item-primary">{{ $spec->make }} {{$spec->model}}</h4>
                <div class="card-body">
                <h5 class="card-text">Vehicle class: {{ $spec->vehicleClass->name}}</h5>
                <h5 class="card-text">Year: {{ $spec->year }}</h5>
                <h5 class="card-text">Transmission: @if ($spec->automatic) automatic @else manual @endif</h5>
                </div>
                <div class="list-group-item list-group-item-secondary"><h5>Cars</h5></div>
                @each('partials.car_info', $spec->cars, 'car')
            </div>
        </div>
    </div>
</div>
@endsection