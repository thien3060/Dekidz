@extends($layout)

@section('content-header')
    <h1>
        {{ trans('admin.menus.physical_infos.create') }}
        &middot;
        <small>{!! link_to_route('admin.physical_infos.index', trans('admin.public.back')) !!}</small>
    </h1>
@stop

@section('content')

    <div>
        @include('admin.pages.physical_infos.form')
    </div>

@stop

@section('script')
    <script>
        $('.date-picker').datepicker({
            autoclose: true
        });
    </script>

    @include('admin.pages.physical_infos.script')
@endsection
