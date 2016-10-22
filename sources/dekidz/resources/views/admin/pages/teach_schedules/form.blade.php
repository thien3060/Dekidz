@if(isset($model))
    {!! Form::model($model, ['method' => 'PUT', 'files' => true, 'route' => ['admin.teach_schedules.update', $model->id]]) !!}
@else
    {!! Form::open(['files' => true, 'route' => 'admin.teach_schedules.store']) !!}
@endif
<div class="row">
    <div class="col-sm-6">
        <div class="form-group">
            {!! Form::label('day', 'Day:') !!}
            {!! Form::text('day', null, ['class' => 'form-control']) !!}
            {!! $errors->first('day', '<div class="text-danger">:message</div>') !!}
        </div>
        <div class="form-group">
            {!! Form::label('date', 'Date:') !!}
            <div class="input-group date">
                <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                </div>
                {!! Form::text('date', null, ['class' => 'form-control date-picker']) !!}
            </div>
            {!! $errors->first('date', '<div class="text-danger">:message</div>') !!}
        </div>
        <div class="form-group">
            {!! Form::label('class', 'Class:') !!}
            {!! Form::select('class', $classes, @$model->class_id, ['class' => 'form-control']) !!}
            {!! $errors->first('class', '<div class="text-danger">:message</div>') !!}
        </div>
        <div class="form-group">
            {!! Form::label('morning_lesson', 'Morning Lesson:') !!}
            {!! Form::select('morning_lesson', $subjects, @$model->morning_lesson_id, ['class' => 'form-control']) !!}
            {!! $errors->first('morning_lesson', '<div class="text-danger">:message</div>') !!}
        </div>
        <div class="form-group">
            {!! Form::label('morning_teacher', 'Morning Teacher:') !!}
            {!! Form::select('morning_teacher', $teachers, @$model->morning_teacher_id, ['class' => 'form-control']) !!}
            {!! $errors->first('morning_teacher', '<div class="text-danger">:message</div>') !!}
        </div>
        <div class="form-group">
            {!! Form::label('afternoon_lesson', 'Afternoon Lesson:') !!}
            {!! Form::select('afternoon_lesson', $subjects, @$model->afternoon_lesson_id, ['class' => 'form-control']) !!}
            {!! $errors->first('afternoon_lesson', '<div class="text-danger">:message</div>') !!}
        </div>
        <div class="form-group">
            {!! Form::label('afternoon_teacher', 'Afternoon Teacher:') !!}
            {!! Form::select('afternoon_teacher', $teachers, @$model->afternoon_teacher_id, ['class' => 'form-control']) !!}
            {!! $errors->first('afternoon_teacher', '<div class="text-danger">:message</div>') !!}
        </div>
        <div class="form-group">
            {!! Form::submit(isset($model) ? 'Update' : 'Save', ['class' => 'btn btn-primary']) !!}
        </div>
    </div>
</div>
{!! Form::close() !!}