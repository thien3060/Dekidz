@extends($layout)

@section('content-header')
    <h1>
        {{ trans('admin.public.add') }}
        &middot;
        <small>{!! link_to_route('admin.assets.index', trans('admin.public.back')) !!}</small>
    </h1>
@stop

@section('content')

    <div>
        @include('admin.pages.assets.form')
    </div>

@stop
