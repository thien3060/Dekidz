@extends($layout)

@section('content-header')
    <h1>
        Add New Class
        &middot;
        <small>{!! link_to_route('admin.classes.index', 'Back') !!}</small>
    </h1>
@stop

@section('content')

    <div>
        @include('admin.pages.classes.form')
    </div>

@stop
