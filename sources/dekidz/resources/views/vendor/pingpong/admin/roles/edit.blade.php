@extends($layout)


@section('content-header')
	
	<h1>
		{{ trans('admin.role.edit') }}
		&middot;
		<small>{!! link_to_route('admin.roles.index', trans('admin.public.back')) !!}</small>
	</h1>
@stop

@section('content')
	
	<div>
		@include('admin::roles.form', array('model' => $role) + compact('permission_role'))
	</div>

@stop
