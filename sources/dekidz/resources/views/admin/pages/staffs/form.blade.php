@if(isset($model))
    {!! Form::model($model, ['method' => 'PUT', 'files' => true, 'route' => ['admin.staffs.update', $model->id]]) !!}
@else
    {!! Form::open(['files' => true, 'route' => 'admin.staffs.store']) !!}
@endif
<div class="row">
    <div class="col-sm-6">
        <div class="form-group">
            {!! Form::label('name', 'Name:') !!}
            {!! Form::text('name', null, ['class' => 'form-control']) !!}
            {!! $errors->first('name', '<div class="text-danger">:message</div>') !!}
        </div>
        <div class="form-group">
            {!! Form::label('code', 'Number:') !!}
            {!! Form::text('code', null, ['class' => 'form-control']) !!}
            {!! $errors->first('code', '<div class="text-danger">:message</div>') !!}
        </div>
        <div class="form-group">
            {!! Form::label('gender', 'Gender:') !!}
            {!! Form::text('gender', null, ['class' => 'form-control']) !!}
            {!! $errors->first('gender', '<div class="text-danger">:message</div>') !!}
        </div>
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
        <div class="form-group">
            {!! Form::label('identity_card', 'Identity Number:') !!}
            {!! Form::text('identity_card', null, ['class' => 'form-control']) !!}
            {!! $errors->first('identity_card', '<div class="text-danger">:message</div>') !!}
        </div>
        <div class="form-group">
            {!! Form::label('religion', 'Religion:') !!}
            {!! Form::text('religion', null, ['class' => 'form-control']) !!}
            {!! $errors->first('religion', '<div class="text-danger">:message</div>') !!}
        </div>
        <div class="form-group">
            {!! Form::label('address', 'Address:') !!}
            {!! Form::text('address', null, ['class' => 'form-control']) !!}
            {!! $errors->first('address', '<div class="text-danger">:message</div>') !!}
        </div>
        <div class="form-group">
            {!! Form::label('department_id', 'Department:') !!}
            {!! Form::text('department_id', null, ['class' => 'form-control']) !!}
            {!! $errors->first('department_id', '<div class="text-danger">:message</div>') !!}
        </div>
        <div class="form-group">
            {!! Form::label('issued_by', 'Issued By:') !!}
            {!! Form::text('issued_by', null, ['class' => 'form-control']) !!}
            {!! $errors->first('issued_by', '<div class="text-danger">:message</div>') !!}
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            {!! Form::label('phone', 'Phone:') !!}
            {!! Form::text('phone', null, ['class' => 'form-control']) !!}
            {!! $errors->first('phone', '<div class="text-danger">:message</div>') !!}
        </div>
        <div class="form-group">
            {!! Form::label('email', 'Email:') !!}
            {!! Form::text('email', null, ['class' => 'form-control']) !!}
            {!! $errors->first('email', '<div class="text-danger">:message</div>') !!}
        </div>
        <div class="form-group">
            {!! Form::label('position', 'Position:') !!}
            {!! Form::text('position', null, ['class' => 'form-control']) !!}
            {!! $errors->first('position', '<div class="text-danger">:message</div>') !!}
        </div>
        <div class="form-group">
            {!! Form::label('degree', 'Degree:') !!}
            {!! Form::text('degree', null, ['class' => 'form-control']) !!}
            {!! $errors->first('degree', '<div class="text-danger">:message</div>') !!}
        </div>
        <div class="form-group">
            {!! Form::label('is_leaguer', 'Is leaguer:') !!}
            {!! Form::text('is_leaguer', null, ['class' => 'form-control']) !!}
            {!! $errors->first('is_leaguer', '<div class="text-danger">:message</div>') !!}
        </div>
        <div class="form-group">
            {!! Form::label('working_status', 'Working Status:') !!}
            {!! Form::text('working_status', null, ['class' => 'form-control']) !!}
            {!! $errors->first('working_status', '<div class="text-danger">:message</div>') !!}
        </div>
        <div class="form-group">
            {!! Form::label('start_day', 'Start date:') !!}
            <div class="input-group date">
                <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                </div>
                {!! Form::text('start_day', null, ['class' => 'form-control date-picker']) !!}
            </div>
            {!! $errors->first('start_day', '<div class="text-danger">:message</div>') !!}
        </div>
        <div class="form-group">
            {!! Form::label('type_of_contract', 'Type of contract:') !!}
            {!! Form::text('type_of_contract', null, ['class' => 'form-control']) !!}
            {!! $errors->first('type_of_contract', '<div class="text-danger">:message</div>') !!}
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