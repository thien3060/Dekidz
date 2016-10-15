@extends($layout)

@section('content-header')
    <h1>
        Add New Staff
        &middot;
        <small>{!! link_to_route('admin.staffs.index', 'Back') !!}</small>
    </h1>
@stop

@section('content')

    <div>
        @include('admin.pages.staffs.form')
    </div>

@stop

@section('script')
    <script>
        $('.date-picker').datepicker({
            autoclose: true
        });
    </script>
@endsection
