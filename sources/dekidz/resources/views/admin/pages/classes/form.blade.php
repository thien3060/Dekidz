@if(isset($model))
    {!! Form::model($model, ['method' => 'PUT', 'files' => true, 'route' => ['admin.classes.update', $model->id]]) !!}
@else
    {!! Form::open(['files' => true, 'route' => 'admin.classes.store']) !!}
@endif
<div class="row">
    <div class="col-sm-4">
        <div class="form-group">
            {!! Form::label('name', 'Name:') !!}
            {!! Form::text('name', null, ['class' => 'form-control']) !!}
            {!! $errors->first('name', '<div class="text-danger">:message</div>') !!}
        </div>
    </div>

    <div class="col-sm-4">
        <div class="form-group">
            {!! Form::label('school_year', 'School year:') !!}
            {!! Form::text('school_year', null, ['class' => 'form-control']) !!}
            {!! $errors->first('school_year', '<div class="text-danger">:message</div>') !!}
        </div>
    </div>

    <div class="col-sm-4">
        <div class="form-group">
            {!! Form::label('room_number', 'Room number:') !!}
            {!! Form::text('room_number', null, ['class' => 'form-control']) !!}
            {!! $errors->first('room_number', '<div class="text-danger">:message</div>') !!}
        </div>
    </div>

    <div class="col-sm-4">
        <div class="form-group">
            {!! Form::label('teacher_id', 'Teacher:') !!}
            <select class="form-control teacher-id" name="teacher_id">
                <option value="0">Select teacher</option>
                @foreach($staffs as $key => $name)
                    <option value="{{$key}}" @if($key == @$model->teacher_id) selected="selected" @endif>{{$name}}</option>
                @endforeach
            </select>
            {!! $errors->first('teacher_id', '<div class="text-danger">:message</div>') !!}
        </div>
    </div>


    <div class="col-sm-4">
        <div class="form-group">
            {!! Form::label('grade_id', 'Grade:') !!}
            <select class="form-control grade-id" name="grade_id">
                <option value="0">Select grade</option>
                @foreach($grades as $key => $name)
                    <option value="{{$key}}" @if($key == @$model->grade_id) selected="selected" @endif>{{$name}}</option>
                @endforeach
            </select>
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