@extends($layout)

@section('content-header')
    <h1>
        All Teach Schedule
        &middot;
        <small>{!! link_to_route('admin.teach_schedules.create', 'Add New') !!}</small>
    </h1>
@stop

@section('content')
    <div class="form-group row">
        <div class="col-sm-1">
            {!! Form::label('class_id', 'Class:') !!}
        </div>
        <div class="col-sm-3">
            {!! Form::select('class_id', $classes, null, ['class' => 'form-control']) !!}
            {!! $errors->first('class_id', '<div class="text-danger">:message</div>') !!}
        </div>
        <div class="col-sm-1">
            {!! Form::label('semester', 'Semester:') !!}
        </div>
        <div class="col-sm-3">
            {!! Form::select('semester', $semesters, null, ['class' => 'form-control']) !!}
            {!! $errors->first('semester', '<div class="text-danger">:message</div>') !!}
        </div>
    </div>
    @include('admin.pages.teach_schedules.time_table')

@stop

@section('style')
    <style>
        .schedule:hover{
            background-color: #e9e9e9 !important;
        }
    </style>
@endsection

@section('script')
    @include('admin.pages.teach_schedules.js')
@endsection
