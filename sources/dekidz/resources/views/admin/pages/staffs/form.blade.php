@if(isset($model))
    {!! Form::model($model, ['method' => 'PUT', 'files' => true, 'route' => ['admin.staffs.update', $model->id]]) !!}
@else
    {!! Form::open(['files' => true, 'route' => 'admin.staffs.store']) !!}
@endif
<div class="row">
    <div class="col-sm-3">
        <div class="form-group">
            {!! Form::label('name', trans('admin.staff.name').':') !!}
            {!! Form::text('name', null, ['class' => 'form-control']) !!}
            {!! $errors->first('name', '<div class="text-danger">:message</div>') !!}
        </div>
    </div>
    <div class="col-sm-3">
        <div class="form-group">
            {!! Form::label('code', trans('admin.staff.code').':') !!}
            {!! Form::text('code', null, ['class' => 'form-control']) !!}
            {!! $errors->first('code', '<div class="text-danger">:message</div>') !!}
        </div>
    </div>
    <div class="col-sm-3">
        <div class="form-group">
            {!! Form::label('gender', trans('admin.staff.gender').':') !!}
            <select class="form-control gender" name="gender">
                <option value="0">Nữ</option>
                <option value="1" @if (@$model->gender == 1) selected="selected" @endif>Nam</option>
            </select>
            {!! $errors->first('gender', '<div class="text-danger">:message</div>') !!}
        </div>
    </div>
    <div class="col-sm-3">
        <div class="form-group">
            {!! Form::label('dob', trans('admin.staff.dob').':') !!}
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
            {!! Form::label('identity_card', trans('admin.staff.identity_card').':') !!}
            {!! Form::text('identity_card', null, ['class' => 'form-control']) !!}
            {!! $errors->first('identity_card', '<div class="text-danger">:message</div>') !!}
        </div>
    </div>
    <div class="col-sm-3">
        <div class="form-group">
            {!! Form::label('religion', trans('admin.staff.religion').':') !!}
            {!! Form::text('religion', null, ['class' => 'form-control']) !!}
            {!! $errors->first('religion', '<div class="text-danger">:message</div>') !!}
        </div>
    </div>
    <div class="col-sm-3">
        <div class="form-group">
            {!! Form::label('address', trans('admin.staff.address').':') !!}
            {!! Form::text('address', null, ['class' => 'form-control']) !!}
            {!! $errors->first('address', '<div class="text-danger">:message</div>') !!}
        </div>
    </div>
    <div class="col-sm-3">
        <div class="form-group">
            {!! Form::label('department_id', trans('admin.staff.department_id').':') !!}
            <select class="form-control department-id" name="department_id">
                <option value="0">{{ trans('admin.staff.select_department') }}</option>
                @foreach($departments as $key => $group)
                    <option value="{{$key}}" @if($key == @$model->department_id) selected="selected" @endif>{{$group}}</option>
                @endforeach
            </select>
            {!! $errors->first('department_id', '<div class="text-danger">:message</div>') !!}
        </div>
    </div>
    <div class="col-sm-3">
        <div class="form-group">
            {!! Form::label('position', trans('admin.staff.position').':') !!}
            <select class="form-control" name="position">
                <option value="0">{{ trans('admin.staff.select_position') }}</option>
                @foreach($positions as $key => $position)
                    <option value="{{$key}}" @if($key == @$model->position) selected="selected" @endif>{{$position}}</option>
                @endforeach
            </select>
            {!! $errors->first('department_id', '<div class="text-danger">:message</div>') !!}
        </div>
    </div>
    <div class="col-sm-3">
        <div class="form-group">
            {!! Form::label('issued_by', trans('admin.staff.issued_by').':') !!}
            {!! Form::text('issued_by', null, ['class' => 'form-control']) !!}
            {!! $errors->first('issued_by', '<div class="text-danger">:message</div>') !!}
        </div>
    </div>
    <div class="col-sm-3">
        <div class="form-group">
            {!! Form::label('phone', trans('admin.staff.phone').':') !!}
            {!! Form::text('phone', null, ['class' => 'form-control']) !!}
            {!! $errors->first('phone', '<div class="text-danger">:message</div>') !!}
        </div>
    </div>
    <div class="col-sm-3">
        <div class="form-group">
            {!! Form::label('email', trans('admin.staff.email').':') !!}
            {!! Form::text('email', null, ['class' => 'form-control']) !!}
            {!! $errors->first('email', '<div class="text-danger">:message</div>') !!}
        </div>
    </div>
    <div class="col-sm-3">
        <div class="form-group">
            {!! Form::label('degree', trans('admin.staff.degree').':') !!}
            {!! Form::text('degree', null, ['class' => 'form-control']) !!}
            {!! $errors->first('degree', '<div class="text-danger">:message</div>') !!}
        </div>
    </div>

    <div class="col-sm-3">
        <div class="form-group">
            {!! Form::label('is_leaguer', trans('admin.staff.is_leaguer').':') !!}
            <select class="form-control is-leaguer" name="is_leaguer">
                <option value="0">{{trans('admin.public.no')}}</option>
                <option value="1" @if (@$model->is_leaguer == 1) selected="selected" @endif>{{trans('admin.public.yes')}}</option>
            </select>
            {!! $errors->first('is_leaguer', '<div class="text-danger">:message</div>') !!}
        </div>
    </div>
    <div class="col-sm-3">
        <div class="form-group">
            {!! Form::label('working_status', trans('admin.staff.working_status').':') !!}
            {!! Form::text('working_status', null, ['class' => 'form-control']) !!}
            {!! $errors->first('working_status', '<div class="text-danger">:message</div>') !!}
        </div>
    </div>
    <div class="col-sm-3">
        <div class="form-group">
            {!! Form::label('start_day', trans('admin.staff.start_day').':') !!}
            <div class="input-group date">
                <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                </div>
                {!! Form::text('start_day', null, ['class' => 'form-control date-picker']) !!}
            </div>
            {!! $errors->first('start_day', '<div class="text-danger">:message</div>') !!}
        </div>
    </div>
    <div class="col-sm-3">
        <div class="form-group">
            {!! Form::label('type_of_contract', trans('admin.staff.type_of_contract').':') !!}
            {!! Form::text('type_of_contract', null, ['class' => 'form-control']) !!}
            {!! $errors->first('type_of_contract', '<div class="text-danger">:message</div>') !!}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-12">
        <div class="form-group">
            {!! Form::submit(isset($model) ? trans('admin.public.update') : trans('admin.public.save'), ['class' => 'btn btn-primary']) !!}
        </div>
    </div>
</div>
{!! Form::close() !!}