@extends($layout)

@section('content-header')
    <h1>
        Add New Asset
        &middot;
        <small>{!! link_to_route('admin.assets.index', 'Back') !!}</small>
    </h1>
@stop

@section('content')

    <div>
        @include('admin.pages.assets.form')
    </div>

@stop
