@extends($layout)

@section('content-header')
    <h1>
        {{trans('admin.menu.edit')}}
        &middot;
        <small>{!! link_to_route('admin.menus.index', trans('admin.public.back')) !!}</small>
    </h1>
@stop

@section('content')

    <div>
        @include('admin.pages.menus.form', array('model' => $menu))
    </div>

@stop

@section('script')
    <script>
        $('.date-picker').datepicker({
            autoclose: true
        });
    </script>

    @include('admin.pages.menus.js')
@endsection