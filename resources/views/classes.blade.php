@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm">
            <div class="list-group">
                <div class="list-group-item list-group-item-primary"><h4>{{$title}}</h4></div>
                @foreach ( $classes as $class )
                    <div class="list-group-item">
                        <h5>
                            <a href="{{ url('class', $class['id']) }}">{{ $class->name }}</a>
                        </h5>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection