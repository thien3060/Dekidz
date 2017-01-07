@extends($layout)

@section('content-header')
    <h1>
        {{ trans('admin.menus.repository.suppliers.create') }}
        &middot;
        <small>{!! link_to_route('admin.suppliers.index', trans('admin.public.back')) !!}</small>
    </h1>
@stop

@section('content')

    <div>
        @include('admin.pages.suppliers.form')
    </div>

@stop
