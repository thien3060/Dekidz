@extends($layout)

@section('content-header')
    <h1>
        Add New Food Set
        &middot;
        <small>{!! link_to_route('admin.foodsets.index', 'Back') !!}</small>
    </h1>
@stop

@section('content')

    <div>
        @include('admin.pages.foodsets.form')
    </div>

@stop
