@extends($layout)

@section('content-header')
    <h1>
        Add New Dish Type
        &middot;
        <small>{!! link_to_route('admin.dishtypes.index', 'Back') !!}</small>
    </h1>
@stop

@section('content')

    <div>
        @include('admin.pages.dishtypes.form')
    </div>

@stop
