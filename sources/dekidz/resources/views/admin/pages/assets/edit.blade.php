@extends($layout)

@section('content-header')
    <h1>
        {{trans('admin.public.edit')}}
        &middot;
        <small>{!! link_to_route('admin.assets.index', trans('admin.public.back')) !!}</small>
    </h1>
@stop

@section('content')

    <div>
        @include('admin.pages.assets.form', array('model' => $asset))
    </div>

@stop

