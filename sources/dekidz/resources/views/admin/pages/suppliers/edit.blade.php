@extends($layout)

@section('content-header')
    <h1>
        {{ trans('admin.menus.repository.suppliers.edit') }}
        &middot;
        <small>{!! link_to_route('admin.suppliers.index', trans('admin.public.back')) !!}</small>
    </h1>
@stop

@section('content')

    <div>
        @include('admin.pages.suppliers.form', array('model' => $supplier))
    </div>

@stop

