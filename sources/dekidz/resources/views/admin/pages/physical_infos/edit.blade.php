@extends($layout)

@section('content-header')
    <h1>
        Edit
        &middot;
        <small>{!! link_to_route('admin.physical_infos.index', 'Back') !!}</small>
    </h1>
@stop

@section('content')

    <div>
        @include('admin.pages.physical_infos.form', array('model' => $physical_info))
    </div>

@stop

@section('script')
    <script>
        $('.date-picker').datepicker({
            autoclose: true
        });
    </script>
@endsection