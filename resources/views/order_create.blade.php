@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Create order</h1>
        <div class="row">
            <div class="col-7">
                <div class="card">
                    <div class="card-body">
                        {{ Form::open(['action' => "OrderController@create", 'class' => 'form-horizontal', 'id' => 'order-form']) }}
                        {{ csrf_field() }}

                        <div class="form-row form-group align-items-center">
                            {{ Form::label('from', 'Rent from:', ['class' => 'col-2 control-label']) }}
                            <div class="col-10">
                                {{ Form::date('from', null, ['required', 'class' => 'form-control', 'min' => \Carbon\Carbon::tomorrow()->isoFormat('YYYY-MM-DD')]) }}
                            </div>
                        </div>

                        <div class="form-row form-group align-items-center">
                            {{ Form::label('to', 'Rent to:', ['class' => 'col-2 control-label']) }}
                            <div class="col-10">
                                {{ Form::date('to', null, ['required', 'class' => 'form-control', 'min' => \Carbon\Carbon::tomorrow()->isoFormat('YYYY-MM-DD')]) }}
                            </div>
                        </div>

                        <div class="form-row form-group align-items-center">
                            {{ Form::label('phone_number', 'Phone number:', ['class' => 'col-2 control-label']) }}
                            <div class="col-10">
                                {{ Form::text('phone_number', null, ['required', 'class' => 'form-control', 'pattern' => '\\d+', 'placeholder' => '123 45678965412']) }}
                            </div>
                        </div>

                        <div class="form-row form-group align-items-center">
                            {{ Form::label('pickup_address', 'Pickup address:', ['class' => 'col-2 control-label']) }}
                            <div class="col-10">
                                {{ Form::text('pickup_address', null, ['class' => 'form-control', 'placeholder' => 'Street no. 42']) }}
                            </div>
                        </div>

                        <div class="form-row form-group align-items-center">
                            {{ Form::label('first_name', 'First name:', ['class' => 'col-2 control-label']) }}
                            <div class="col-10">
                                {{ Form::text('first_name', null, ['required', 'class' => 'form-control', 'placeholder' => 'Joe']) }}
                            </div>
                        </div>

                        <div class="form-row form-group align-items-center">
                            {{ Form::label('last_name', 'Last name:', ['class' => 'col-2 control-label']) }}
                            <div class="col-10">
                                {{ Form::text('last_name', null, ['required', 'class' => 'form-control', 'placeholder' => 'Doe']) }}
                            </div>
                        </div>

                        <div class="form-row form-group align-items-center">
                            {{ Form::label('total_price', 'Total price:', ['class' => 'col-2 control-label']) }}
                            <div class="col-10">
                                {{ Form::text('total_price', null, ['disabled', 'class' => 'form-control']) }}
                            </div>
                        </div>

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <div class="text-right form-group">
                            {{ Form::submit('Submit order', ['class' => 'btn btn-primary btn-lg']) }}
                        </div>

                        {{ Form::close() }}
                    </div>
                </div>
            </div>
            <div class="col-5">
                <div class="card">
                    <h4 class="list-group-item list-group-item-primary">Car To Rent</h4>
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
                        @foreach ( $extras  as $selected )
                            <div class="list-group-item">
                                {{ $selected->name }} ({{ $selected->price_per_day }} EUR per day)
                            </div>
                        @endforeach
                    </div>
                    <div class="card-body d-flex justify-content-between">
                        <h6>Price per day</h6>
                        <strong>{{ $price_per_day }} EUR</strong>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script type="application/javascript">
        $(() => {
            (function ($, formSelector, pricePerDay) {
                const $form = $(formSelector);
                const $fromInput = $form.find('input[name=from]');
                const $toInput = $form.find('input[name=to]');
                const $totalPriceOutput = $form.find('input[name=total_price]');
                const MS_PER_DAY = 1000 * 60 * 60 * 24;
                const recompute = () => {
                    let fromDate, toDate;
                    try {
                        fromDate = new Date($fromInput.val());
                    } catch (e) {
                    }
                    try {
                        toDate = new Date($toInput.val());
                    } catch (e) {
                    }
                    if (isNaN(toDate) || isNaN(fromDate) || toDate < fromDate) {
                        $totalPriceOutput.val(`--- EUR`);
                        return;
                    }
                    const total = pricePerDay * (1 + ((toDate - fromDate) / MS_PER_DAY));
                    $totalPriceOutput.val(`${Number(total).toFixed(2)} EUR`);
                };
                const setLimits = () => {
                    $fromInput.val() && $toInput.attr('min', $fromInput.val());
                    $toInput.val() && $fromInput.attr('max', $toInput.val());
                };

                recompute();
                setLimits();
                $form.on('change', 'input[name=from], input[name=to]', recompute);
                $form.on('change', 'input[name=from], input[name=to]', setLimits);
            })(jQuery, '#order-form', {{ $price_per_day }});
        });
    </script>

@endsection
