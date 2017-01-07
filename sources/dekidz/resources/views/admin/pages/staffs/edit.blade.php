@extends($layout)

@section('content-header')
    <h1>
        {{ trans('admin.staff.edit') }}
        &middot;
        <small>{!! link_to_route('admin.staffs.index', trans('admin.public.back')) !!}</small>
    </h1>
@stop

@section('content')

    <div>
        @include('admin.pages.staffs.form', array('model' => $staff))
    </div>

@stop

@section('script')
    <script>
        $('.date-picker').datepicker({
            autoclose: true
        });
    </script>
@endsection