@if(isset($model))
    {!! Form::model($model, ['method' => 'PUT', 'files' => true, 'route' => ['admin.suppliers.update', $model->id]]) !!}
@else
    {!! Form::open(['files' => true, 'route' => 'admin.suppliers.store']) !!}
@endif
<div class="row">
    <div class="col-sm-6">
        <div class="form-group">
            {!! Form::label('name', trans('admin.supplier.name').':') !!}
            {!! Form::text('name', null, ['class' => 'form-control']) !!}
            {!! $errors->first('name', '<div class="text-danger">:message</div>') !!}
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            {!! Form::label('type', trans('admin.supplier.type').':') !!}
            {!! Form::text('type', null, ['class' => 'form-control']) !!}
            {!! $errors->first('type', '<div class="text-danger">:message</div>') !!}
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            {!! Form::label('email', trans('admin.supplier.email').':') !!}
            {!! Form::text('email', null, ['class' => 'form-control']) !!}
            {!! $errors->first('email', '<div class="text-danger">:message</div>') !!}
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            {!! Form::label('phone', trans('admin.supplier.phone').':') !!}
            {!! Form::text('phone', null, ['class' => 'form-control']) !!}
            {!! $errors->first('phone', '<div class="text-danger">:message</div>') !!}
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            {!! Form::label('product_type', trans('admin.supplier.product_type').':') !!}
            {!! Form::text('product_type', null, ['class' => 'form-control']) !!}
            {!! $errors->first('product_type', '<div class="text-danger">:message</div>') !!}
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