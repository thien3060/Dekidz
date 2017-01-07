@extends($layout)

@section('content-header')
	
	<h1>
		{{ trans('admin.permission.edit') }}
		&middot;
		<small>{!! link_to_route('admin.permissions.index', trans('admin.public.back')) !!}</small>
	</h1>
	
@stop

@section('content')
	
	<div>
		@include('admin::permissions.form', array('model' => $permission))
	</div>

@stop
