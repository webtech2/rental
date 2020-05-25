@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm">
            <div class="card">
                <h4 class="list-group-item list-group-item-primary">{{ $spec->make }} {{$spec->model}}</h4>
                @include('partials.spec_info')
                <div class="list-group-item list-group-item-secondary"><h5>{{ __('messages.Cars') }}</h5></div>
                @each('partials.car_info', $spec->cars, 'car')
                @if ( !Auth::guest() && Auth::user()->isAdmin() )
                <div class="list-group-item list-group-item-secondary">
                    <h5 class="card-title">
                        <a href="{{ action('CarController@create', ['spec_id' => $spec->id]) }}">{{ __('messages.Create_car') }}</a>
                    </h5>
                </div>
                @endif 
            </div>
        </div>
    </div>
</div>
@endsection