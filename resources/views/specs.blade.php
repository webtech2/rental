@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm">
            <div class="list-group">
                <div class="list-group-item list-group-item-primary">
                    <h4>Car Specifications for Vehicle Class: {{ $class->name ?? 'All classes' }}</h4>
                </div>
                @foreach ( $specs as $spec )
                <div class="list-group-item">
                    <h5 class="card-title">
                        <a href="{{ url('spec', $spec->id) }}">{{ $spec->make }} {{ $spec->model }}</a>
                    </h5>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection