@if(isset($model))
    {!! Form::model($model, ['method' => 'PUT', 'files' => true, 'route' => ['admin.suppliers.update', $model->id]]) !!}
@else
    {!! Form::open(['files' => true, 'route' => 'admin.suppliers.store']) !!}
@endif
<div class="row">
    <div class="col-sm-6">
        <div class="form-group">
            {!! Form::label('name', 'Name:') !!}
            {!! Form::text('name', null, ['class' => 'form-control']) !!}
            {!! $errors->first('name', '<div class="text-danger">:message</div>') !!}
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            {!! Form::label('type', 'Type:') !!}
            {!! Form::text('type', null, ['class' => 'form-control']) !!}
            {!! $errors->first('type', '<div class="text-danger">:message</div>') !!}
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            {!! Form::label('product_type', 'Product type:') !!}
            {!! Form::text('product_type', null, ['class' => 'form-control']) !!}
            {!! $errors->first('product_type', '<div class="text-danger">:message</div>') !!}
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