@if(isset($model))
    {!! Form::model($model, ['method' => 'PUT', 'files' => true, 'route' => ['admin.energy_needs.update', $model->id]]) !!}
@else
    {!! Form::open(['files' => true, 'route' => 'admin.energy_needs.store']) !!}
@endif
<div class="row">
    <div class="col-sm-6">
        <div class="form-group">
            {!! Form::label('age', trans('admin.energy_need.age')) !!}
            {!! Form::text('age', null, ['class' => 'form-control']) !!}
            {!! $errors->first('age', '<div class="text-danger">:message</div>') !!}
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            {!! Form::label('calo', trans('admin.energy_need.calo')) !!}
            {!! Form::text('calo', null, ['class' => 'form-control']) !!}
            {!! $errors->first('calo', '<div class="text-danger">:message</div>') !!}
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            {!! Form::label('h2o', trans('admin.energy_need.h2o')) !!}
            {!! Form::text('h2o', null, ['class' => 'form-control']) !!}
            {!! $errors->first('h2o', '<div class="text-danger">:message</div>') !!}
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            {!! Form::label('protid', trans('admin.energy_need.protid')) !!}
            {!! Form::text('protid', null, ['class' => 'form-control']) !!}
            {!! $errors->first('protid', '<div class="text-danger">:message</div>') !!}
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            {!! Form::label('lipid', trans('admin.energy_need.lipid')) !!}
            {!! Form::text('lipid', null, ['class' => 'form-control']) !!}
            {!! $errors->first('lipid', '<div class="text-danger">:message</div>') !!}
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            {!! Form::label('glucid', trans('admin.energy_need.glucid')) !!}
            {!! Form::text('glucid', null, ['class' => 'form-control']) !!}
            {!! $errors->first('glucid', '<div class="text-danger">:message</div>') !!}
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            {!! Form::label('cellulose', trans('admin.energy_need.cellulose')) !!}
            {!! Form::text('cellulose', null, ['class' => 'form-control']) !!}
            {!! $errors->first('cellulose', '<div class="text-danger">:message</div>') !!}
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            {!! Form::label('cholesterol', trans('admin.energy_need.cholesterol')) !!}
            {!! Form::text('cholesterol', null, ['class' => 'form-control']) !!}
            {!! $errors->first('cholesterol', '<div class="text-danger">:message</div>') !!}
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            {!! Form::label('calci', trans('admin.energy_need.calci')) !!}
            {!! Form::text('calci', null, ['class' => 'form-control']) !!}
            {!! $errors->first('calci', '<div class="text-danger">:message</div>') !!}
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            {!! Form::label('photpho', trans('admin.energy_need.photpho')) !!}
            {!! Form::text('photpho', null, ['class' => 'form-control']) !!}
            {!! $errors->first('photpho', '<div class="text-danger">:message</div>') !!}
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            {!! Form::label('iron', trans('admin.energy_need.iron')) !!}
            {!! Form::text('iron', null, ['class' => 'form-control']) !!}
            {!! $errors->first('iron', '<div class="text-danger">:message</div>') !!}
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            {!! Form::label('vitamin_caroten', trans('admin.energy_need.vitamin_caroten')) !!}
            {!! Form::text('vitamin_caroten', null, ['class' => 'form-control']) !!}
            {!! $errors->first('vitamin_caroten', '<div class="text-danger">:message</div>') !!}
        </div>
    </div>

    <div class="col-sm-6">
        <div class="form-group">
            {!! Form::label('vitamina', trans('admin.energy_need.vitamina')) !!}
            {!! Form::text('vitamina', null, ['class' => 'form-control']) !!}
            {!! $errors->first('vitamina', '<div class="text-danger">:message</div>') !!}
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            {!! Form::label('vitaminb1', trans('admin.energy_need.vitaminb1')) !!}
            {!! Form::text('vitaminb1', null, ['class' => 'form-control']) !!}
            {!! $errors->first('vitaminb1', '<div class="text-danger">:message</div>') !!}
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            {!! Form::label('vitaminb2', trans('admin.energy_need.vitaminb2')) !!}
            {!! Form::text('vitaminb2', null, ['class' => 'form-control']) !!}
            {!! $errors->first('vitaminb2', '<div class="text-danger">:message</div>') !!}
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            {!! Form::label('vitaminpp', trans('admin.energy_need.vitaminpp')) !!}
            {!! Form::text('vitaminpp', null, ['class' => 'form-control']) !!}
            {!! $errors->first('vitaminpp', '<div class="text-danger">:message</div>') !!}
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            {!! Form::label('vitaminc', trans('admin.energy_need.vitaminc')) !!}
            {!! Form::text('vitaminc', null, ['class' => 'form-control']) !!}
            {!! $errors->first('vitaminc', '<div class="text-danger">:message</div>') !!}
        </div>
    </div>

</div>
<div class="row">
    <div class="col-sm-6">
        <div class="form-group">
            {!! Form::submit(isset($model) ? trans('admin.public.update') : trans('admin.public.save'), ['class' => 'btn btn-primary']) !!}
        </div>
    </div>
</div>
{!! Form::close() !!}