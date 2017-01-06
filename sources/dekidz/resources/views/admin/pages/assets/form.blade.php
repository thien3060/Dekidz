@if(isset($model))
    {!! Form::model($model, ['method' => 'PUT', 'files' => true, 'route' => ['admin.assets.update', $model->id]]) !!}
@else
    {!! Form::open(['files' => true, 'route' => 'admin.assets.store']) !!}
@endif
<div class="row">
    <div class="col-sm-6">
        <div class="form-group">
            {!! Form::label('name', trans('admin.asset.name')) !!}
            {!! Form::text('name', null, ['class' => 'form-control']) !!}
            {!! $errors->first('name', '<div class="text-danger">:message</div>') !!}
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            {!! Form::label('quantity', trans('admin.asset.quantity')) !!}
            {!! Form::text('quantity', null, ['class' => 'form-control']) !!}
            {!! $errors->first('quantity', '<div class="text-danger">:message</div>') !!}
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            {!! Form::label('maintenance_mode', trans('admin.asset.maintenance_mode')) !!}
            {!! Form::text('maintenance_mode', null, ['class' => 'form-control']) !!}
            {!! $errors->first('maintenance_mode', '<div class="text-danger">:message</div>') !!}
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            {!! Form::label('unit', trans('admin.asset.unit')) !!}
            {!! Form::text('unit', null, ['class' => 'form-control']) !!}
            {!! $errors->first('unit', '<div class="text-danger">:message</div>') !!}
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