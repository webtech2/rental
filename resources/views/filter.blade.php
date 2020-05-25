@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h4 class="list-group-item list-group-item-primary">{{ __('messages.Select_filters') }}</h4>
                <div class="list-group-item">
                    {{ Form::open(['action' => 'CarController@postFilter', 'class' => 'form-horizontal']) }}

                    <div class="form-group row">
                    {{ Form::label('class_id', __('messages.vehicle_class'), ['class' => 'col-md-4 control-label text-md-right']) }}
                    <div class="col-md-6">
                    {{ Form::select('class_id', $classes, '', ['placeholder' => 'Any class', 'class' => 'form-control '.($errors->has('class_id') ? ' is-invalid' : '')]) }}
                    @if ($errors->has('class_id'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('class_id') }}</strong>
                        </span>
                    @endif 
                    </div>
                    </div>
                    <div class="form-group row">
                    {{ Form::label('make', __('messages.Make'), ['class' => 'col-md-4 control-label text-md-right']) }}
                    <div class="col-md-6">
                    {{ Form::select('make', $makes, '', ['placeholder' => __('messages.Any_make'), 'class' => 'form-control '.($errors->has('class_id') ? ' is-invalid' : '')]) }}
                    @if ($errors->has('make'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('make') }}</strong>
                        </span>
                    @endif 
                    </div>
                    </div>
                    <div class="form-group row">
                    {{ Form::label('transmission', __('messages.Transmission'), ['class' => 'col-md-4 control-label text-md-right']) }}
                    <div class="col-md-6">
                    {{ Form::label('any', __('messages.Any')) }}
                    {{ Form::radio('automatic', '2', true, ['id' => 'any', 'class' => ($errors->has('automatic') ? ' is-invalid' : '')]) }}                  
                    {{ Form::label('auto', __('messages.Automatic')) }}
                    {{ Form::radio('automatic', '1', false, ['id' => 'auto', 'class' => ($errors->has('automatic') ? ' is-invalid' : '')]) }}                  
                    {{ Form::label('manual', __('messages.Manual')) }}
                    {{ Form::radio('automatic', '0', false, ['id' => 'manual', 'class' => ($errors->has('automatic') ? ' is-invalid' : '')]) }}                  
                    @if ($errors->has('automatic'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('automatic') }}</strong>
                        </span>
                    @endif 
                    </div>
                    </div>                    
                    <div class="form-group row">
                    {{ Form::label('price_from', __('messages.Price_from'), ['class' => 'col-md-4 control-label text-md-right']) }}
                    <div class="col-md-6">
                    {{ Form::text('price_from', '', ['class' => 'form-control'.($errors->has('price_from') ? ' is-invalid' : '')]) }}
                    @if ($errors->has('price_from'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('price_from') }}</strong>
                        </span>
                    @endif 
                    </div>
                    </div>                    
                    <div class="form-group row">
                    {{ Form::label('price_to', __('messages.to'), ['class' => 'col-md-4 control-label text-md-right']) }}
                    <div class="col-md-6">
                    {{ Form::text('price_to', '', ['class' => 'form-control'.($errors->has('price_to') ? ' is-invalid' : '')]) }}
                    @if ($errors->has('price_to'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('price_to') }}</strong>
                        </span>
                    @endif                     
                    </div>
                    </div> 
 
                    <div class="form-group row">
                    <div class="col-md-6 offset-md-4">
                    {{ Form::submit(__('messages.Apply'), ['class' => 'btn btn-primary']) }}
                    </div>
                    </div>
                    {{ Form::close() }}
                </div>                
            </div>
        </div>
    </div>
</div>
@endsection