@extends($layout)

@section('content-header')
	<h1>
		{{ trans('admin.article.create') }}
		&middot;
		@if(isOnPages())
		<small>{!! link_to_route('admin.pages.index', trans('admin.public.back')) !!}</small>
		@else
		<small>{!! link_to_route('admin.articles.index', trans('admin.public.back')) !!}</small>
		@endif
	</h1>
@stop

@section('content')

	<div>
		@include('admin::articles.form')
	</div>

@stop
