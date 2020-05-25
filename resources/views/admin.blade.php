@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">{{ __('messages.Admin') }}</h4>
                    <div class="card-text">
                    @if(session()->has('message'))
                        {{ session()->get('message') }}
                    @endif     
                    </div>
                    <ul class="list-group">
                       <li class="list-group-item"><a href="{{ url('class/create') }}">{{ __('messages.Create_vehicle_class') }}</a></li>
                       <li class="list-group-item"><a href="{{ url('spec/create') }}">{{ __('messages.Create_specification') }}</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection