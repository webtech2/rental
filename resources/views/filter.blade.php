@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h4 class="list-group-item list-group-item-primary">Select filters</h4>
                <div class="list-group-item">
                    {{ Form::open(['action' => 'CarController@postFilter', 'class' => 'form-horizontal']) }}

                    <div class="form-group row">
                    {{ Form::label('class_id', 'Vehicle class', ['class' => 'col-md-4 control-label text-md-right']) }}
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
                    {{ Form::label('make', 'Make', ['class' => 'col-md-4 control-label text-md-right']) }}
                    <div class="col-md-6">
                    {{ Form::select('make', $makes, '', ['placeholder' => 'Any make', 'class' => 'form-control '.($errors->has('class_id') ? ' is-invalid' : '')]) }}
                    @if ($errors->has('make'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('make') }}</strong>
                        </span>
                    @endif 
                    </div>
                    </div>
                    <div class="form-group row">
                    {{ Form::label('transmission', 'Transmission', ['class' => 'col-md-4 control-label text-md-right']) }}
                    <div class="col-md-6">
                    {{ Form::label('any', 'Any') }}
                    {{ Form::radio('automatic', '2', true, ['id' => 'any', 'class' => ($errors->has('automatic') ? ' is-invalid' : '')]) }}                  
                    {{ Form::label('auto', 'Automatic') }}
                    {{ Form::radio('automatic', '1', false, ['id' => 'auto', 'class' => ($errors->has('automatic') ? ' is-invalid' : '')]) }}                  
                    {{ Form::label('manual', 'Manual') }}
                    {{ Form::radio('automatic', '0', false, ['id' => 'manual', 'class' => ($errors->has('automatic') ? ' is-invalid' : '')]) }}                  
                    @if ($errors->has('automatic'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('automatic') }}</strong>
                        </span>
                    @endif 
                    </div>
                    </div>                    
                    <div class="form-group row">
                    {{ Form::label('price_from', 'Price from', ['class' => 'col-md-4 control-label text-md-right']) }}
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
                    {{ Form::label('price_to', 'to', ['class' => 'col-md-4 control-label text-md-right']) }}
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
                    {{ Form::submit('Apply', ['class' => 'btn btn-primary']) }}
                    </div>
                    </div>
                    {{ Form::close() }}
                </div>                
            </div>
        </div>
    </div>
</div>
@endsection