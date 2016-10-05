@extends($layout)

@section('content-header')
    <h1>
        Add New Dish
        &middot;
        <small>{!! link_to_route('admin.dishes.index', 'Back') !!}</small>
    </h1>
@stop

@section('content')

    <div>
        @include('admin.pages.dishes.form')
    </div>

@stop
