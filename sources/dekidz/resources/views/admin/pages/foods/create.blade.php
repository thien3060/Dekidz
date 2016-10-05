@extends($layout)

@section('content-header')
    <h1>
        Add New Food
        &middot;
        <small>{!! link_to_route('admin.foods.index', 'Back') !!}</small>
    </h1>
@stop

@section('content')

    <div>
        @include('admin.pages.foods.form')
    </div>

@stop
