@extends($layout)

@section('content-header')
	@if( ! isOnPages())
	<h1>
		{{ trans('admin.article.all') }} ({!! $articles->count() !!})
		&middot;
		<small>{!! link_to_route('admin.articles.create', trans('admin.public.add')) !!}</small>
	</h1>
	@else
	<h1>
		All Pages ({!! $articles->count() !!})
		&middot;
		<small>{!! link_to_route('admin.pages.create', 'Add New') !!}</small>
	</h1>
	@endif
@stop

@section('content')

	<table class="table">
		<thead>
			<th>{{ trans('admin.article.no') }}</th>
			<th>{{ trans('admin.article.title') }}</th>
			<th>{{ trans('admin.article.author') }}</th>
			<th>{{ trans('admin.article.description') }}</th>
			@if( ! isOnPages())
			<th>{{ trans('admin.article.category') }}</th>
			@endif
			<th>{{ trans('admin.article.created_at') }}</th>
			<th class="text-center">{{ trans('admin.public.action') }}</th>
		</thead>
		<tbody>
			@foreach ($articles as $article)
			<tr>
				<td>{!! $no !!}</td>
				<td>{!! $article->title !!}</td>
				<td>{!! $article->user->name !!}</td>
				<td>{!! $article->description !!}</td>
				@if( ! isOnPages())
				<td>{!! $article->category ? $article->category->name : null !!}</td>
				@endif
				<td>{!! $article->created_at !!}</td>
				<td class="text-center">
					@if(isOnPages())
						<a href="{!! route('admin.pages.edit', $article->id) !!}">{{ trans('admin.public.edit') }}</a>
						&middot;
						@include('admin::partials.modal', ['data' => $article, 'name' => 'pages'])
					@else
						<a href="{!! route('admin.articles.edit', $article->id) !!}">{{ trans('admin.public.edit') }}</a>
						&middot;
						@include('admin::partials.modal', ['data' => $article, 'name' => 'articles'])
					@endif
				</td>
			</tr>
			<?php $no++ ;?>
			@endforeach
		</tbody>
	</table>

	<div class="text-center">
		{!! pagination_links($articles) !!}
	</div>
@stop
