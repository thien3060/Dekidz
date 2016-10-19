@extends($layout)

@section('content-header')
    <h1>
        Add New Food Group
        &middot;
        <small>{!! link_to_route('admin.foodgroups.index', 'Back') !!}</small>
    </h1>
@stop

@section('content')

    <div>
        @include('admin.pages.foodgroups.form')
    </div>

@stop
