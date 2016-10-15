@extends($layout)

@section('content-header')
    <h1>
        Add New Supplier
        &middot;
        <small>{!! link_to_route('admin.suppliers.index', 'Back') !!}</small>
    </h1>
@stop

@section('content')

    <div>
        @include('admin.pages.suppliers.form')
    </div>

@stop
