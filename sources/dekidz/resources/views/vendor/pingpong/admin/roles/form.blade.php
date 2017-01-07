@if(isset($model))
{!! Form::model($model, ['method' => 'PUT', 'files' => true, 'route' => ['admin.roles.update', $model->id]]) !!}
@else
{!! Form::open(['files' => true, 'route' => 'admin.roles.store']) !!}
@endif
	<div class="form-group">
		{!! Form::label('name', trans('admin.role.name').':') !!}
		{!! Form::text('name', null, ['class' => 'form-control']) !!}
		{!! $errors->first('name', '<div class="text-danger">:message</div>') !!}
	</div>
	<div class="form-group">
		{!! Form::label('slug', trans('admin.role.alias').':') !!}
		{!! Form::text('slug', null, ['class' => 'form-control']) !!}
		{!! $errors->first('slug', '<div class="text-danger">:message</div>') !!}
	</div>
	<div class="form-group">
		{!! Form::label('description',trans('admin.role.description').':') !!}
		{!! Form::textarea('description', null, ['class' => 'form-control']) !!}
		{!! $errors->first('description', '<div class="text-danger">:message</div>') !!}
	</div>
	<div class="form-group">
		{!! Form::label('permissions', trans('admin.role.permission').':') !!}
		{!! Form::select('permissions[]', $permissions, isset($permission_role) ? $permission_role : null, ['multiple' => 'multiple', 'class' => 'form-control']) !!}
		{!! $errors->first('permissions', '<div class="text-danger">:message</div>') !!}
	</div>
	<div class="form-group">
		{!! Form::submit(isset($model) ? trans('admin.public.update') : trans('admin.public.save'), ['class' => 'btn btn-primary']) !!}
	</div>
{!! Form::close() !!}
