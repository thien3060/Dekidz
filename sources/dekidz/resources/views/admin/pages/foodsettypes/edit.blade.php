@extends($layout)

@section('content-header')
    <h1>
        {{ trans('admin.food_set_type.edit') }}
        &middot;
        <small>{!! link_to_route('admin.foodsettypes.index', trans('admin.public.back')) !!}</small>
    </h1>
@stop

@section('content')

    <div>
        @include('admin.pages.foodsettypes.form', array('model' => $foodsettype))
    </div>

@stop

