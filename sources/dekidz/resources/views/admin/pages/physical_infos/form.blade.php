@if(isset($model))
    {!! Form::model($model, ['method' => 'PUT', 'files' => true, 'route' => ['admin.physical_infos.update', $model->id]]) !!}
@else
    {!! Form::open(['files' => true, 'route' => 'admin.physical_infos.store']) !!}
@endif
<div class="row">
    <div class="col-sm-12">
        <div class="form-group">
            {!! Form::label('student_id', 'Student ID:') !!}
            {!! Form::text('student_id', null, ['class' => 'form-control']) !!}
            {!! $errors->first('student_id', '<div class="text-danger">:message</div>') !!}
        </div>
        <div class="form-group">
            {!! Form::label('gender', 'Gender:') !!}
            {!! Form::text('gender', null, ['class' => 'form-control']) !!}
            {!! $errors->first('gender', '<div class="text-danger">:message</div>') !!}
        </div>
        <div class="form-group">
            {!! Form::label('age', 'Age:') !!}
            {!! Form::text('age', null, ['class' => 'form-control']) !!}
            {!! $errors->first('age', '<div class="text-danger">:message</div>') !!}
        </div>
        <div class="form-group">
            {!! Form::label('height', 'Height:') !!}
            {!! Form::text('height', null, ['class' => 'form-control']) !!}
            {!! $errors->first('height', '<div class="text-danger">:message</div>') !!}
        </div>
        <div class="form-group">
            {!! Form::label('weight', 'Weight:') !!}
            {!! Form::text('weight', null, ['class' => 'form-control']) !!}
            {!! $errors->first('weight', '<div class="text-danger">:message</div>') !!}
        </div>
        <div class="form-group">
            {!! Form::label('BMI', 'BMI:') !!}
            {!! Form::text('BMI', null, ['class' => 'form-control']) !!}
            {!! $errors->first('BMI', '<div class="text-danger">:message</div>') !!}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-12">
        <div class="form-group">
            {!! Form::submit(isset($model) ? 'Update' : 'Save', ['class' => 'btn btn-primary']) !!}
        </div>
    </div>
</div>
{!! Form::close() !!}