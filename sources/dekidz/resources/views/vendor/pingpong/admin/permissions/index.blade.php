@extends($layout)

@section('content-header')
	
	<h1>
		{{ trans('admin.permission.all') }} ({!! $permissions->count() !!})
		&middot;
		<small>{!! link_to_route('admin.permissions.create', trans('admin.public.add')) !!}</small>
	</h1>
	
@stop

@section('content')

	<table class="table">
		<thead>
			<th>{{ trans('admin.permission.no') }}</th>
			<th>{{ trans('admin.permission.name') }}</th>
			<th>{{ trans('admin.permission.alias') }}</th>
			<th>{{ trans('admin.permission.description') }}</th>
			<th>{{ trans('admin.permission.created_at') }}</th>
			<th class="text-center">{{ trans('admin.public.action') }}</th>
		</thead>
		<tbody>
			@foreach ($permissions as $permission)
			<tr>
				<td>{!! $no !!}</td>
				<td>{!! $permission->name !!}</td>
				<td>{!! $permission->slug !!}</td>
				<td>{!! $permission->description !!}</td>
				<td>{!! $permission->created_at !!}</td>
				<td class="text-center">
					<a href="{!! route('admin.permissions.edit', $permission->id) !!}">{{ trans('admin.public.edit') }}</a>
					&middot;
					@include('admin::partials.modal', ['data' => $permission, 'name' => 'permissions'])
				</td>
			</tr>
			<?php $no++ ;?>
			@endforeach
		</tbody>
	</table>

	<div class="text-center">
		{!! pagination_links($permissions) !!}
	</div>
@stop
