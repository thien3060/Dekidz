@extends($layout)

@section('content-header')
    <h1>
        Edit
        &middot;
        <small>{!! link_to_route('admin.menus.index', 'Back') !!}</small>
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