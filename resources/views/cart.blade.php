@extends('layouts.app')
@section('content')
<script type="application/javascript">
$(document).ready(function () {
    $(".card-body").off('click', '.extra').on('click', '.extra', function (e) {
        var url = "{{ action('CartController@addOrRemoveFromCart') }}";
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        $.ajax({
            type: "POST",
            url: url,
            data: { extra_id: e.target.id, _token: CSRF_TOKEN },
            success: function (data) {
                $("#"+data["extra_id"]).toggleClass("btn-success btn-light");    
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });
    })
});
</script>
@isset($car)
<div class="container">
    <div class="row">
        <div class="col-sm-8">
            <div class="card">
                <h4 class="list-group-item list-group-item-primary">{{ __('messages.Select_extras') }}</h4>
                <div class="card-body">
                @foreach ( $allextras as $extra )
                    <div class="card-text">
                        <h5 id="{{ $extra->id }}" class="extra btn @if(in_array($extra->id, $selected)) btn-success @else btn-light @endif">{{ $extra->name }} ({{ $extra->price_per_day }} {{ __('messages.EUR_per_day') }})</h5>
                    </div>
                @endforeach                    
                </div>                
            </div>
        </div>
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
                </div>
            </div>
        </div>
    </div>
</div>
@endisset
@empty($car)
<div class="container">
    <div class="row">
        <div class="col-sm">
            <div class="card">
                <h4 class="list-group-item list-group-item-primary">{{ __('messages.no_cars') }}!</h4>
            </div>
        </div>
    </div>
</div>
@endempty
@endsection
