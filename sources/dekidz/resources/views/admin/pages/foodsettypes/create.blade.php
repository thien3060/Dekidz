@extends($layout)

@section('content-header')
    <h1>
        {{ trans('admin.food_set_type.create') }}
        &middot;
        <small>{!! link_to_route('admin.foodsettypes.index', trans('admin.public.back')) !!}</small>
    </h1>
@stop

@section('content')

    <div>
        @include('admin.pages.foodsettypes.form')
    </div>

@stop
