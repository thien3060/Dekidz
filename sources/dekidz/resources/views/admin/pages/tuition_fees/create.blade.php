@extends($layout)

@section('content-header')
    <h1>
        {{ trans('admin.menus.tuition_fee.create') }}
        &middot;
        <small>{!! link_to_route('admin.tuition_fees.index', trans('admin.public.back')) !!}</small>
    </h1>
@stop

@section('content')

    <div>
        @include('admin.pages.tuition_fees.form')
    </div>

@stop
