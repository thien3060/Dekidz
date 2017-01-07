@extends($layout)

@section('content-header')
	<h1>
		{!! $title or trans('admin.user.all') !!} ({!! $users->count() !!})
		&middot;
		<small>{!! link_to_route('admin.users.create', trans('admin.public.add')) !!}</small>
	</h1>
@stop

@section('content')

	@if(isset($search))
		@include('admin::users.search-form')
	@endif

	<table class="table">
		<thead>
			<th>{{ trans('admin.user.no') }}</th>
			<th>{{ trans('admin.user.name') }}</th>
			<th>{{ trans('admin.user.email') }}</th>
			<th>{{ trans('admin.user.created_at') }}</th>
			<th class="text-center">{{ trans('admin.public.action') }}</th>
		</thead>
		<tbody>
			@foreach ($users as $user)
			<tr>
				<td>{!! $no !!}</td>
				<td>{!! $user->name !!}</td>
				<td>{!! $user->email !!}</td>
				<td>{!! $user->created_at !!}</td>
				<td class="text-center">
					<a href="{!! route('admin.users.edit', $user->id) !!}">{{ trans('admin.public.edit') }}</a>
					&middot;
					@include('admin::partials.modal', ['data' => $user, 'name' => 'users'])
				</td>
			</tr>
			<?php $no++ ;?>
			@endforeach
		</tbody>
	</table>

	<div class="text-center">
		{!! pagination_links($users) !!}
	</div>
@stop
