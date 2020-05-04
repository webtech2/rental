@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="list-group-item list-group-item-primary"><h4>Add a new car for {{ $spec->make }} {{$spec->model}}</h4></div>
                @include('partials.spec_info')
                <div class="list-group-item">
                    {{ Form::open(['action' => 'CarController@store', 'class' => 'form-horizontal']) }}
                    {{ Form::hidden('specification_id', $spec->id) }}
                    <div class="form-group row">
                    {{ Form::label('reg_number', 'Registration number', ['class' => 'col-md-4 control-label text-md-right']) }}
                    <div class="col-md-6">
                    {{ Form::text('reg_number', '', ['class' => 'form-control']) }}
                    </div>
                    </div>
                    <div class="form-group row">
                    {{ Form::label('mileage', 'Mileage', ['class' => 'col-md-4 control-label text-md-right']) }}
                    <div class="col-md-6">
                    {{ Form::number('mileage', '', ['class' => 'form-control']) }}
                    </div>
                    </div>
                    <div class="form-group row">
                    {{ Form::label('color', 'Color', ['class' => 'col-md-4 control-label text-md-right']) }}
                    <div class="col-md-6">
                    {{ Form::text('color', '', ['class' => 'form-control']) }}   
                    </div>
                    </div>
                    <div class="form-group row">
                    {{ Form::label('condition', 'Condition', ['class' => 'col-md-4 control-label text-md-right']) }}
                    <div class="col-md-6">
                    {{ Form::textArea('condition', '', ['class' => 'form-control']) }}
                    </div>
                    </div>                   
                    <div class="form-group row">
                    {{ Form::label('price', 'Price', ['class' => 'col-md-4 control-label text-md-right']) }}
                    <div class="col-md-6">
                    {{ Form::text('price', '', ['class' => 'form-control']) }}
                    </div>
                    </div> 
                    <div class="form-group row">
                    <div class="col-md-6 offset-md-4">
                    {{ Form::submit('Create', ['class' => 'btn btn-primary']) }}
                    </div>
                    </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 