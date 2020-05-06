@extends('layouts.app')

@section('content')
<script type="application/javascript">
$(document).ready(function () {
    $("#search").keyup(function () {
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        $.post("/specs/search", { search: $('#search').val(), _token: CSRF_TOKEN }, function(data) {
            $('.spec').html('');
            $.each(data, function(i, spec) {
                var c = '<div class="list-group-item">\n\
                             <div class="col-md-8">\n\
                               <h4><a href="/spec/'+spec.id+'">'+spec.make+' '+spec.model+'</a></h4>\n\
                             <div>'+spec.year+'</div>\n\
                           </div>';
                 $('.spec').append(c);
            });
        });
    })
});
</script>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h4 class="card-title">Search</h4></div>
                <div class="card-body">
                    <input type="text" id="search">
                    <div class="card-text spec"></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection