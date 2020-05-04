@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm">
            <div class="card">
                <h4 class="list-group-item list-group-item-primary">{{ $spec->make }} {{$spec->model}}</h4>
                @include('partials.spec_info')
                <div class="list-group-item list-group-item-secondary"><h5>Cars</h5></div>
                @each('partials.car_info', $spec->cars, 'car')
                <div class="list-group-item list-group-item-secondary">
                    <h5 class="card-title">
                        <a href="{{ action('CarController@create', ['spec_id' => $spec->id]) }}">Create a new car</a>
                    </h5>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection