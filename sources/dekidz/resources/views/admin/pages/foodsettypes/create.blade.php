@extends($layout)

@section('content-header')
    <h1>
        Add New Food Set Type
        &middot;
        <small>{!! link_to_route('admin.foodsettypes.index', 'Back') !!}</small>
    </h1>
@stop

@section('content')

    <div>
        @include('admin.pages.foodsettypes.form')
    </div>

@stop
