@if(isset($model))
    {!! Form::model($model, ['method' => 'PUT', 'files' => true, 'route' => ['admin.students.update', $model->id]]) !!}
@else
    {!! Form::open(['files' => true, 'route' => 'admin.students.store']) !!}
@endif
<div class="row">
        <div class="col-sm-3">
            <div class="form-group">
                {!! Form::label('name', 'Name:') !!}
                {!! Form::text('name', null, ['class' => 'form-control']) !!}
                {!! $errors->first('name', '<div class="text-danger">:message</div>') !!}
            </div>
        </div>
        <div class="col-sm-3">
            <div class="form-group">
                {!! Form::label('email', 'Email:') !!}
                {!! Form::text('email', null, ['class' => 'form-control']) !!}
                {!! $errors->first('email', '<div class="text-danger">:message</div>') !!}
            </div>
        </div>
        <div class="col-sm-3">
            <div class="form-group">
                {!! Form::label('gender', 'Gender:') !!}
                <select class="form-control gender" name="gender">
                    <option value="0">Nữ</option>
                    <option value="1" @if (@$model->gender == 1) selected="selected" @endif>Nam</option>
                </select>
                {!! $errors->first('gender', '<div class="text-danger">:message</div>') !!}
            </div>
        </div>
        <div class="col-sm-3">
            <div class="form-group">
                {!! Form::label('dob', 'DOB:') !!}
                <div class="input-group date">
                    <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                    </div>
                    {!! Form::text('dob', null, ['class' => 'form-control date-picker']) !!}
                </div>
                {!! $errors->first('dob', '<div class="text-danger">:message</div>') !!}
            </div>
        </div>
        <div class="col-sm-3">
            <div class="form-group">
                {!! Form::label('address', 'Address:') !!}
                {!! Form::text('address', null, ['class' => 'form-control']) !!}
                {!! $errors->first('address', '<div class="text-danger">:message</div>') !!}
            </div>
        </div>
        <div class="col-sm-3">
            <div class="form-group">
                {!! Form::label('nation', 'Nation:') !!}
                {!! Form::text('nation', null, ['class' => 'form-control']) !!}
                {!! $errors->first('nation', '<div class="text-danger">:message</div>') !!}
            </div>
        </div>
        <div class="col-sm-3">
            <div class="form-group">
                {!! Form::label('religion', 'Religion:') !!}
                {!! Form::text('religion', null, ['class' => 'form-control']) !!}
                {!! $errors->first('religion', '<div class="text-danger">:message</div>') !!}
            </div>
        </div>
        <div class="col-sm-3">
            <div class="form-group">
                {!! Form::label('admission_date', 'Admission Date:') !!}
                <div class="input-group date">
                    <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                    </div>
                    {!! Form::text('admission_date', null, ['class' => 'form-control date-picker']) !!}
                </div>
                {!! $errors->first('admission_date', '<div class="text-danger">:message</div>') !!}
            </div>
        </div>
        <div class="col-sm-3">
            <div class="form-group">
                {!! Form::label('completion_date', 'Completion Date:') !!}
                <div class="input-group date">
                    <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                    </div>
                    {!! Form::text('completion_date', null, ['class' => 'form-control date-picker']) !!}
                </div>
                {!! $errors->first('completion_date', '<div class="text-danger">:message</div>') !!}
            </div>
        </div>
        <div class="col-sm-3">
            <div class="form-group">
                {!! Form::label('entry_card', 'Entry Card Number:') !!}
                {!! Form::text('entry_card', null, ['class' => 'form-control']) !!}
                {!! $errors->first('entry_card', '<div class="text-danger">:message</div>') !!}
            </div>
        </div>
        <div class="col-sm-3">
            <div class="form-group">
                {!! Form::label('father_name', 'Father`s Name:') !!}
                {!! Form::text('father_name', null, ['class' => 'form-control']) !!}
                {!! $errors->first('father_name', '<div class="text-danger">:message</div>') !!}
            </div>
        </div>
        <div class="col-sm-3">
        <div class="form-group">
                {!! Form::label('father_dob', 'Father`s DOB:') !!}
                <div class="input-group date">
                    <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                    </div>
                    {!! Form::text('father_dob', null, ['class' => 'form-control date-picker']) !!}
                </div>
                {!! $errors->first('father_dob', '<div class="text-danger">:message</div>') !!}
            </div>
        </div>
        <div class="col-sm-3">
            <div class="form-group">
                {!! Form::label('father_job', 'Father`s Job:') !!}
                {!! Form::text('father_job', null, ['class' => 'form-control']) !!}
                {!! $errors->first('father_job', '<div class="text-danger">:message</div>') !!}
            </div>
        </div>
        <div class="col-sm-3">
            <div class="form-group">
                {!! Form::label('father_phone', 'Father`s Phone:') !!}
                {!! Form::text('father_phone', null, ['class' => 'form-control']) !!}
                {!! $errors->first('father_phone', '<div class="text-danger">:message</div>') !!}
            </div>
        </div>
        <div class="col-sm-3">
            <div class="form-group">
                {!! Form::label('mother_name', 'Mother`s Name:') !!}
                {!! Form::text('mother_name', null, ['class' => 'form-control']) !!}
                {!! $errors->first('mother_name', '<div class="text-danger">:message</div>') !!}
            </div>
        </div>
        <div class="col-sm-3">
        <div class="form-group">
                {!! Form::label('mother_dob', 'Mother`s DOB:') !!}
                <div class="input-group date">
                    <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                    </div>
                    {!! Form::text('mother_dob', null, ['class' => 'form-control date-picker']) !!}
                </div>
                {!! $errors->first('mother_dob', '<div class="text-danger">:message</div>') !!}
            </div>
        </div>
        <div class="col-sm-3">
            <div class="form-group">
                {!! Form::label('mother_job', 'Mother`s Job:') !!}
                {!! Form::text('mother_job', null, ['class' => 'form-control']) !!}
                {!! $errors->first('mother_job', '<div class="text-danger">:message</div>') !!}
            </div>
        </div>
        <div class="col-sm-3">
            <div class="form-group">
                {!! Form::label('mother_phone', 'Mother`s Phone:') !!}
                {!! Form::text('mother_phone', null, ['class' => 'form-control']) !!}
                {!! $errors->first('mother_phone', '<div class="text-danger">:message</div>') !!}
            </div>
        </div>
    <div class="col-sm-12">
        <div class="form-group">
            {!! Form::label('note', 'Note:') !!}
            {!! Form::textarea('note', null, ['class' => 'form-control', 'id' => 'ckeditor']) !!}
            {!! $errors->first('note', '<div class="text-danger">:message</div>') !!}
        </div>
        <div class="form-group">
            {!! Form::label('picture', 'Picture:') !!}
            {!! Form::file('picture', ['class' => 'form-control']) !!}
            {!! $errors->first('picture', '<div class="text-danger">:message</div>') !!}
        </div>
        @if(isset($model))
            <div class="form-group">
                @if($model->picture)
                    <img class="img-responsive" src="{!! asset('images/students/' . $model->picture) !!}">
                @endif
            </div>
        @endif
        <div class="form-group">
            {!! Form::submit(isset($model) ? 'Update' : 'Save', ['class' => 'btn btn-primary']) !!}
        </div>
    </div>
</div>
{!! Form::close() !!}