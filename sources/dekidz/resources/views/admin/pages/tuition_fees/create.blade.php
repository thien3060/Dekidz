@extends($layout)

@section('content-header')
    <h1>
        Add New Tuition Fee
        &middot;
        <small>{!! link_to_route('admin.tuition_fees.index', 'Back') !!}</small>
    </h1>
@stop

@section('content')

    <div>
        @include('admin.pages.tuition_fees.form')
    </div>

@stop
