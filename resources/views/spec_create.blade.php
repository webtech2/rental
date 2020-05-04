@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="list-group-item list-group-item-primary"><h4>Add a new specification</h4></div>
                <div class="list-group-item">
                    {{ Form::open(['action' => 'SpecificationController@store', 'class' => 'form-horizontal']) }}

                    <div class="form-group row">
                    {{ Form::label('class_id', 'Vehicle class', ['class' => 'col-md-4 control-label text-md-right']) }}
                    <div class="col-md-6">
                    {{ Form::select('class_id', $classes, '', ['class' => 'form-control']) }}
                    </div>
                    </div>
                    <div class="form-group row">
                    {{ Form::label('make', 'Make', ['class' => 'col-md-4 control-label text-md-right']) }}
                    <div class="col-md-6">
                    {{ Form::text('make', '', ['class' => 'form-control']) }}   
                    </div>
                    </div>
                    <div class="form-group row">
                    {{ Form::label('model', 'Model', ['class' => 'col-md-4 control-label text-md-right']) }}
                    <div class="col-md-6">
                    {{ Form::text('model', '', ['class' => 'form-control']) }}   
                    </div>
                    </div>
                    <div class="form-group row">
                    {{ Form::label('year', 'Year', ['class' => 'col-md-4 control-label text-md-right']) }}
                    <div class="col-md-6">
                    {{ Form::number('year', '', ['class' => 'form-control']) }}
                    </div>
                    </div>
                    <div class="form-group row">
                    {{ Form::label('transmission', 'Transmission', ['class' => 'col-md-4 control-label text-md-right']) }}
                    <div class="col-md-6">
                    {{ Form::label('auto', 'Automatic') }}
                    {{ Form::radio('automatic', '1', false, ['id' => 'auto']) }}                  
                    {{ Form::label('manual', 'Manual') }}
                    {{ Form::radio('automatic', '0', false, ['id' => 'manual']) }}                  
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