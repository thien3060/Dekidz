@extends($layout)

@section('content-header')
	
	
	<h1>
		{{ trans('admin.user.create') }}
		&middot;
		<small>{!! link_to_route('admin.users.index', trans('admin.public.back')) !!}</small>
	</h1>

@stop

@section('content')
	<div>
		@include('admin::users.form')
	</div>

@stop
