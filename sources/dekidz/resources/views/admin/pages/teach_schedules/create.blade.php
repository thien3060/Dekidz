@extends($layout)

@section('content-header')
    <h1>
        Add Teach Schedule
        &middot;
        <small>{!! link_to_route('admin.teach_schedules.index', 'Back') !!}</small>
    </h1>
@stop

@section('content')

    <div>
        @include('admin.pages.teach_schedules.form')
    </div>

@stop

@section('script')
    <script>
        $('.date-picker').datepicker({
            autoclose: true
        });
    </script>
@endsection
