@if(isset($model))
    {!! Form::model($model, ['method' => 'PUT', 'files' => true, 'route' => ['admin.classes.update', $model->id]]) !!}
@else
    {!! Form::open(['files' => true, 'route' => 'admin.classes.store']) !!}
@endif
<div class="row">
    <div class="col-sm-6">
        <div class="form-group">
            {!! Form::label('name', 'Name:') !!}
            {!! Form::text('name', null, ['class' => 'form-control']) !!}
            {!! $errors->first('name', '<div class="text-danger">:message</div>') !!}
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            {!! Form::label('teacher_id', 'Teacher:') !!}
            {!! Form::text('teacher_id', null, ['class' => 'form-control']) !!}
            {!! $errors->first('teacher_id', '<div class="text-danger">:message</div>') !!}
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            {!! Form::label('room_number', 'Room number:') !!}
            {!! Form::text('room_number', null, ['class' => 'form-control']) !!}
            {!! $errors->first('room_number', '<div class="text-danger">:message</div>') !!}
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            {!! Form::label('grade', 'Grade:') !!}
            {!! Form::text('grade_id', null, ['class' => 'form-control']) !!}
            {!! $errors->first('grade_id', '<div class="text-danger">:message</div>') !!}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-6">
        <div class="form-group">
            {!! Form::submit(isset($model) ? 'Update' : 'Save', ['class' => 'btn btn-primary']) !!}
        </div>
    </div>
</div>
{!! Form::close() !!}