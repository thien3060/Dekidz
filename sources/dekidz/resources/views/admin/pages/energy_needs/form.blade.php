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
            {!! Form::label('calo', 'Calo:') !!}
            {!! Form::text('calo', null, ['class' => 'form-control']) !!}
            {!! $errors->first('calo', '<div class="text-danger">:message</div>') !!}
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            {!! Form::label('h2o', 'H2O:') !!}
            {!! Form::text('h2o', null, ['class' => 'form-control']) !!}
            {!! $errors->first('h2o', '<div class="text-danger">:message</div>') !!}
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            {!! Form::label('protid', 'Protid:') !!}
            {!! Form::text('protid', null, ['class' => 'form-control']) !!}
            {!! $errors->first('protid', '<div class="text-danger">:message</div>') !!}
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            {!! Form::label('lipid', 'Lipid:') !!}
            {!! Form::text('lipid', null, ['class' => 'form-control']) !!}
            {!! $errors->first('lipid', '<div class="text-danger">:message</div>') !!}
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            {!! Form::label('glucid', 'Glucid:') !!}
            {!! Form::text('glucid', null, ['class' => 'form-control']) !!}
            {!! $errors->first('glucid', '<div class="text-danger">:message</div>') !!}
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            {!! Form::label('cellulose', 'Cellulose:') !!}
            {!! Form::text('cellulose', null, ['class' => 'form-control']) !!}
            {!! $errors->first('cellulose', '<div class="text-danger">:message</div>') !!}
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            {!! Form::label('cholesterol', 'Cholesterol:') !!}
            {!! Form::text('cholesterol', null, ['class' => 'form-control']) !!}
            {!! $errors->first('cholesterol', '<div class="text-danger">:message</div>') !!}
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            {!! Form::label('calci', 'Calci:') !!}
            {!! Form::text('calci', null, ['class' => 'form-control']) !!}
            {!! $errors->first('calci', '<div class="text-danger">:message</div>') !!}
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            {!! Form::label('photpho', 'Photpho:') !!}
            {!! Form::text('photpho', null, ['class' => 'form-control']) !!}
            {!! $errors->first('photpho', '<div class="text-danger">:message</div>') !!}
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            {!! Form::label('iron', 'Iron:') !!}
            {!! Form::text('iron', null, ['class' => 'form-control']) !!}
            {!! $errors->first('iron', '<div class="text-danger">:message</div>') !!}
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            {!! Form::label('vitamin_caroten', 'Vitamin Caroten:') !!}
            {!! Form::text('vitamin_caroten', null, ['class' => 'form-control']) !!}
            {!! $errors->first('vitamin_caroten', '<div class="text-danger">:message</div>') !!}
        </div>
    </div>

    <div class="col-sm-6">
        <div class="form-group">
            {!! Form::label('vitamina', 'Vitamin A:') !!}
            {!! Form::text('vitamina', null, ['class' => 'form-control']) !!}
            {!! $errors->first('vitamina', '<div class="text-danger">:message</div>') !!}
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            {!! Form::label('vitaminb1', 'Vitamin B1:') !!}
            {!! Form::text('vitaminb1', null, ['class' => 'form-control']) !!}
            {!! $errors->first('vitaminb1', '<div class="text-danger">:message</div>') !!}
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            {!! Form::label('vitaminb2', 'Vitamin B2:') !!}
            {!! Form::text('vitaminb2', null, ['class' => 'form-control']) !!}
            {!! $errors->first('vitaminb2', '<div class="text-danger">:message</div>') !!}
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            {!! Form::label('vitaminpp', 'Vitamin PP:') !!}
            {!! Form::text('vitaminpp', null, ['class' => 'form-control']) !!}
            {!! $errors->first('vitaminpp', '<div class="text-danger">:message</div>') !!}
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            {!! Form::label('vitaminc', 'Vitamin C:') !!}
            {!! Form::text('vitaminc', null, ['class' => 'form-control']) !!}
            {!! $errors->first('vitaminc', '<div class="text-danger">:message</div>') !!}
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