@extends($layout)

@section('content-header')
    <h1>
        Edit
        &middot;
        <small>{!! link_to_route('admin.suppliers.index', 'Back') !!}</small>
    </h1>
@stop

@section('content')

    <div>
        @include('admin.pages.suppliers.form', array('model' => $supplier))
    </div>

@stop

