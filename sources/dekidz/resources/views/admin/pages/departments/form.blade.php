@if(isset($model))
    {!! Form::model($model, ['method' => 'PUT', 'files' => true, 'route' => ['admin.departments.update', $model->id]]) !!}
@else
    {!! Form::open(['files' => true, 'route' => 'admin.departments.store']) !!}
@endif
<div class="row">
    <div class="col-sm-12">
        <div class="form-group">
            {!! Form::label('name', trans('admin.department.name')) !!}
            {!! Form::text('name', null, ['class' => 'form-control']) !!}
            {!! $errors->first('name', '<div class="text-danger">:message</div>') !!}
        </div>
        <div class="form-group">
            {!! Form::label('description', trans('admin.department.description')) !!}
            {!! Form::textarea('description', null, ['class' => 'form-control', 'id' => 'ckeditor']) !!}
            {!! $errors->first('description', '<div class="text-danger">:message</div>') !!}
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