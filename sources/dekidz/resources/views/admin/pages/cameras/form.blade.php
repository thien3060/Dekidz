@if(isset($model))
    {!! Form::model($model, ['route' => ['admin.cameras.update', $model->id]]) !!}
@else
    {!! Form::open(['route' => 'admin.cameras.store']) !!}
@endif
<div class="row">
    <div class="col-sm-5">
        <div class="form-group">
            {!! Form::label('name', trans('admin.camera.name')) !!}
            {!! Form::text('name', null, ['class' => 'form-control']) !!}
            {!! $errors->first('name', '<div class="text-danger">:message</div>') !!}
        </div>
    </div>
    <div class="col-sm-5">
        <div class="form-group">
            {!! Form::label('url', trans('admin.camera.url')) !!}
            {!! Form::text('url', null, ['class' => 'form-control']) !!}
            {!! $errors->first('url', '<div class="text-danger">:message</div>') !!}
        </div>
    </div>
    <div class="col-sm-12">
        <div class="form-group">
            {!! Form::label('description', trans('admin.camera.description')) !!}
            {!! Form::textarea('description', null, ['class' => 'form-control', 'id' => 'ckeditor']) !!}
            {!! $errors->first('description', '<div class="text-danger">:message</div>') !!}
        </div>
    </div>
    <div class="col-sm-12">
        <div class="form-group">
            {!! Form::submit(isset($model) ? trans('admin.public.update') : trans('admin.public.save'), ['class' => 'btn btn-primary']) !!}
        </div>
    </div>
</div>
{!! Form::close() !!}