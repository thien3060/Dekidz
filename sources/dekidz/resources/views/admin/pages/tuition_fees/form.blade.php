@if(isset($model))
    {!! Form::model($model, ['method' => 'PUT', 'files' => true, 'route' => ['admin.tuition_fees.update', $model->id]]) !!}
@else
    {!! Form::open(['files' => true, 'route' => 'admin.tuition_fees.store']) !!}
@endif

<div class="row">
    <div class="col-sm-4">
        <div class="form-group">
            {!! Form::label('student_id', 'Student:') !!}
            <select class="form-control student-id" name="student_id">
                <option value="0">Select student</option>
                @foreach($students as $key => $student)
                    <option value="{{$key}}" @if($key == @$model->student_id) selected="selected" @endif>{{$student}}</option>
                @endforeach
            </select>
            {!! $errors->first('student_id', '<div class="text-danger">:message</div>') !!}
        </div>
    </div>

    <div class="col-sm-4">
        <div class="form-group">
            {!! Form::label('debt', 'Dept:') !!}
            {!! Form::text('debt', null, ['class' => 'form-control']) !!}
            {!! $errors->first('debt', '<div class="text-danger">:message</div>') !!}
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group">
            {!! Form::label('paid', 'Paid:') !!}
            {!! Form::text('paid', null, ['class' => 'form-control']) !!}
            {!! $errors->first('paid', '<div class="text-danger">:message</div>') !!}
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group">
            {!! Form::label('year', 'Year:') !!}
            {!! Form::text('year', null, ['class' => 'form-control']) !!}
            {!! $errors->first('year', '<div class="text-danger">:message</div>') !!}
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group">
            {!! Form::label('month', 'Month:') !!}
            {!! Form::text('month', null, ['class' => 'form-control']) !!}
            {!! $errors->first('month', '<div class="text-danger">:message</div>') !!}
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