@extends($layout)

@section('content-header')
    <h1>
        Edit
        &middot;
        <small>{!! link_to_route('admin.foodgroups.index', 'Back') !!}</small>
    </h1>
@stop

@section('content')

    <div>
        @include('admin.pages.foodgroups.form', array('model' => $foodgroup))
    </div>

@stop

