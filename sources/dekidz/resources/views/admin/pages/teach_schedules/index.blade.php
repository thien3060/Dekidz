@extends($layout)

@section('content-header')
    <h1>
        All Teach Schedule
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

    <div id="modal-schedule-update" class="modal text-left fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="form-group">
                        {!! Form::label('teacher', 'Teacher:') !!}
                        {!! Form::select('teacher', $teachers, null, ['class' => 'form-control']) !!}
                        {!! $errors->first('teacher', '<div class="text-danger">:message</div>') !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('lesson', 'Lesson:') !!}
                        {!! Form::select('lesson', $lessons, null, ['class' => 'form-control']) !!}
                        {!! $errors->first('lesson', '<div class="text-danger">:message</div>') !!}
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" onclick="updateSchedule()">Update</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>

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
