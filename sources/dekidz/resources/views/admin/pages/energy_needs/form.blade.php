@if(isset($model))
    {!! Form::model($model, ['method' => 'PUT', 'files' => true, 'route' => ['admin.energy_needs.update', $model->id]]) !!}
@else
    {!! Form::open(['files' => true, 'route' => 'admin.energy_needs.store']) !!}
@endif
<div class="row">
    <div class="col-sm-6">
        <div class="form-group">
            {!! Form::label('age', 'Age:') !!}
            {!! Form::text('age', null, ['class' => 'form-control']) !!}
            {!! $errors->first('age', '<div class="text-danger">:message</div>') !!}
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            {!! Form::label('daily_cal', 'Daily Calo:') !!}
            {!! Form::text('daily_cal', null, ['class' => 'form-control']) !!}
            {!! $errors->first('daily_cal', '<div class="text-danger">:message</div>') !!}
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            {!! Form::label('school_time_cal', 'School Time Calo:') !!}
            {!! Form::text('school_time_cal', null, ['class' => 'form-control']) !!}
            {!! $errors->first('school_time_cal', '<div class="text-danger">:message</div>') !!}
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            {!! Form::label('daily_protid', 'Daily Protid:') !!}
            {!! Form::text('daily_protid', null, ['class' => 'form-control']) !!}
            {!! $errors->first('daily_protid', '<div class="text-danger">:message</div>') !!}
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            {!! Form::label('school_time_protid', 'School Time Protid:') !!}
            {!! Form::text('school_time_protid', null, ['class' => 'form-control']) !!}
            {!! $errors->first('school_time_protid', '<div class="text-danger">:message</div>') !!}
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            {!! Form::label('daily_lipid', 'Daily Lipid:') !!}
            {!! Form::text('daily_lipid', null, ['class' => 'form-control']) !!}
            {!! $errors->first('daily_lipid', '<div class="text-danger">:message</div>') !!}
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            {!! Form::label('school_time_lipid', 'School Time Lipid:') !!}
            {!! Form::text('school_time_lipid', null, ['class' => 'form-control']) !!}
            {!! $errors->first('school_time_lipid', '<div class="text-danger">:message</div>') !!}
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            {!! Form::label('daily_glucid', 'Daily Glucid:') !!}
            {!! Form::text('daily_glucid', null, ['class' => 'form-control']) !!}
            {!! $errors->first('daily_glucid', '<div class="text-danger">:message</div>') !!}
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            {!! Form::label('school_time_glucid', 'School Time Glucid:') !!}
            {!! Form::text('school_time_glucid', null, ['class' => 'form-control']) !!}
            {!! $errors->first('school_time_glucid', '<div class="text-danger">:message</div>') !!}
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