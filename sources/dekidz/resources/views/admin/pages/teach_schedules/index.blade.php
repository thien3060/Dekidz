@extends($layout)

@section('content-header')
    <h1>
        {{ trans('admin.teach_schedule.all') }}
    </h1>
@stop

@section('content')
    <div class="form-group row">
        <div class="col-sm-1">
            {!! Form::label('class_id', trans('admin.teach_schedule.class_id').':') !!}
        </div>
        <div class="col-sm-3">
            {!! Form::select('class_id', $classes, null, ['class' => 'form-control']) !!}
            {!! $errors->first('class_id', '<div class="text-danger">:message</div>') !!}
        </div>
        <div class="col-sm-1">
            {!! Form::label('semester', trans('admin.teach_schedule.semester').':') !!}
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
                        {!! Form::label('teacher', trans('admin.teach_schedule.teacher').':') !!}
                        {!! Form::select('teacher', $teachers, null, ['class' => 'form-control']) !!}
                        {!! $errors->first('teacher', '<div class="text-danger">:message</div>') !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('lesson', trans('admin.teach_schedule.lesson').':') !!}
                        {!! Form::select('lesson', $lessons, null, ['class' => 'form-control']) !!}
                        {!! $errors->first('lesson', '<div class="text-danger">:message</div>') !!}
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" onclick="updateSchedule()">{{trans('admin.public.update')}}</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">{{trans('admin.public.cancel')}}</button>
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
