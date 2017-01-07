@extends($layout)

@section('content-header')
	<h1>
		{{ trans('admin.role.all') }} ({!! $roles->count() !!})
		&middot;
		<small>{!! link_to_route('admin.roles.create', trans('admin.public.add')) !!}</small>
	</h1>
@stop

@section('content')

	<table class="table">
		<thead>
			<th>{{ trans('admin.role.no') }}</th>
			<th>{{ trans('admin.role.name') }}</th>
			<th>{{ trans('admin.role.alias') }}</th>
			<th>{{ trans('admin.role.description') }}</th>
			<th>{{ trans('admin.role.permission') }}</th>
			<th>{{ trans('admin.role.created_at') }}</th>
			<th class="text-center">{{ trans('admin.public.action') }}</th>
		</thead>
		<tbody>
			@foreach ($roles as $role)
			<tr>
				<td>{!! $no !!}</td>
				<td>{!! $role->name !!}</td>
				<td>{!! $role->slug !!}</td>
				<td>{!! $role->description !!}</td>
				<td>
					@foreach($role->permissions as $permission)
						&bullet; {!! $permission->name !!}<br>
					@endforeach
				</td>
				<td>{!! $role->created_at !!}</td>
				<td class="text-center">
					<a href="{!! route('admin.roles.edit', $role->id) !!}">{{ trans('admin.public.edit') }}</a>
					&middot;
					@include('admin::partials.modal', ['data' => $role, 'name' => 'roles'])
				</td>
			</tr>
			<?php $no++ ;?>
			@endforeach
		</tbody>
	</table>

	<div class="text-center">
		{!! pagination_links($roles) !!}
	</div>
@stop
