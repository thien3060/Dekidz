@extends($layout)

@section('content-header')
    <h1>
        Add New Energy Need
        &middot;
        <small>{!! link_to_route('admin.energy_needs.index', 'Back') !!}</small>
    </h1>
@stop

@section('content')

    <div>
        @include('admin.pages.energy_needs.form')
    </div>

@stop
