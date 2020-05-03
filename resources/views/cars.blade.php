@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm">
            <div class="list-group">
                <div class="list-group-item list-group-item-primary"><h4>All Cars</h4></div>
                @each('partials.car_info', $cars, 'car')
            </div>
        </div>
    </div>
</div>
@endsection