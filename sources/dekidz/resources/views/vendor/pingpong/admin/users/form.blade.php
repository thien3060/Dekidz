@if(isset($model))
{!! Form::model($model, ['method' => 'PUT', 'files' => true, 'route' => ['admin.users.update', $model->id]]) !!}
@else
{!! Form::open(['files' => true, 'route' => 'admin.users.store']) !!}
@endif
	<div class="form-group">
		{!! Form::label('name', trans('admin.user.name').':') !!}
		{!! Form::text('name', null, ['class' => 'form-control']) !!}
		{!! $errors->first('name', '<div class="text-danger">:message</div>') !!}
	</div>
	<div class="form-group">
		{!! Form::label('email', trans('admin.user.email').':') !!}
		{!! Form::email('email', null, ['class' => 'form-control']) !!}
		{!! $errors->first('email', '<div class="text-danger">:message</div>') !!}
	</div>
	<div class="form-group">
		{!! Form::label('password', trans('admin.user.password').':') !!}
		{!! Form::password('password', ['class' => 'form-control']) !!}
		{!! $errors->first('password', '<div class="text-danger">:message</div>') !!}
	</div>
	<div class="form-group">
		{!! Form::label('role', trans('admin.user.role').':') !!}
		{!! Form::select('role', $roles, isset($role) ? $role : null, ['class' => 'form-control']) !!}
		{!! $errors->first('role', '<div class="text-danger">:message</div>') !!}
	</div>
	<div class="form-group">
		{!! Form::submit(isset($model) ? trans('admin.public.update') : trans('admin.public.save'), ['class' => 'btn btn-primary']) !!}
	</div>
{!! Form::close() !!}
