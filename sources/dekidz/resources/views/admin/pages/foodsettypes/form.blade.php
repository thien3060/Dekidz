@if(isset($model))
    {!! Form::model($model, ['method' => 'PUT', 'files' => true, 'route' => ['admin.foodsettypes.update', $model->id]]) !!}
@else
    {!! Form::open(['files' => true, 'route' => 'admin.foodsettypes.store']) !!}
@endif
<div class="row">
    <div class="col-sm-6">
        <div class="form-group">
            {!! Form::label('name', trans('admin.food_set_type.name').':') !!}
            {!! Form::text('name', null, ['class' => 'form-control']) !!}
            {!! $errors->first('name', '<div class="text-danger">:message</div>') !!}
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