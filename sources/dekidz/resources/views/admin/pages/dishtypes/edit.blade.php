@extends($layout)

@section('content-header')
    <h1>
        {{trans('admin.public.edit')}}
        &middot;
        <small>{!! link_to_route('admin.dishtypes.index', trans('admin.public.back')) !!}</small>
    </h1>
@stop

@section('content')

    <div>
        @include('admin.pages.dishtypes.form', array('model' => $dishtype))
    </div>

@stop

