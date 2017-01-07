@if(isOnPages())
	@if(isset($model))
	{!! Form::model($model, ['method' => 'PUT', 'files' => true, 'route' => ['admin.pages.update', $model->id]]) !!}
	@else
	{!! Form::open(['files' => true, 'route' => 'admin.pages.store']) !!}
	@endif
@else
	@if(isset($model))
	{!! Form::model($model, ['method' => 'PUT', 'files' => true, 'route' => ['admin.articles.update', $model->id]]) !!}
	@else
	{!! Form::open(['files' => true, 'route' => 'admin.articles.store']) !!}
	@endif
@endif
	<div class="form-group">
		{!! Form::label('title', trans('admin.article.title').':') !!}
		{!! Form::text('title', null, ['class' => 'form-control']) !!}
		{!! $errors->first('title', '<div class="text-danger">:message</div>') !!}
	</div>
	<div class="form-group">
		{!! Form::label('slug', trans('admin.article.slug').':') !!}
		{!! Form::text('slug', null, ['class' => 'form-control']) !!}
		{!! $errors->first('slug', '<div class="text-danger">:message</div>') !!}
	</div>
	@if(! isOnPages())
	<div class="form-group">
		{!! Form::label('category_id', trans('admin.article.category').':') !!}
		{!! Form::select('category_id', $categories, null, ['class' => 'form-control']) !!}
		{!! $errors->first('category_id', '<div class="text-danger">:message</div>') !!}
	</div>
	@else
	{!! Form::hidden('type', 'page') !!}
	@endif
	<div class="form-group">
		{!! Form::label('description', trans('admin.article.description').':') !!}
		{!! Form::textarea('description', null, ['class' => 'form-control']) !!}
		{!! $errors->first('description', '<div class="text-danger">:message</div>') !!}
	</div>
	<div class="form-group">
		{!! Form::label('body', trans('admin.article.body').':') !!}
		{!! Form::textarea('body', null, ['class' => 'form-control', 'id' => 'ckeditor']) !!}
		{!! $errors->first('body', '<div class="text-danger">:message</div>') !!}
	</div>
	<div class="form-group">
		{!! Form::label('image', trans('admin.article.image').':') !!}
		{!! Form::file('image', ['class' => 'form-control']) !!}
		{!! $errors->first('image', '<div class="text-danger">:message</div>') !!}
	</div>
	@if(isset($model))
	<div class="form-group">
		@if($model->image)
		<img class="img-responsive" src="{!! asset('images/articles/' . $model->image) !!}">
		@endif
	</div>
	@endif
	<div class="form-group">
		{!! Form::submit(isset($model) ? trans('admin.public.update') : trans('admin.public.save'), ['class' => 'btn btn-primary']) !!}
	</div>
{!! Form::close() !!}

@section('script')
	
	{!! script('vendor/ckeditor/ckeditor.js') !!}
	{!! script('vendor/ckfinder/ckfinder.js') !!}
	
	<script type="text/javascript">
		var prefix = '{!! asset(option("ckfinder.prefix")) !!}';
		CKEDITOR.editorConfig = function( config ) {
		   config.filebrowserBrowseUrl = prefix + '/vendor/ckfinder/ckfinder.html';
		   config.filebrowserImageBrowseUrl = prefix + '/vendor/ckfinder/ckfinder.html?type=Images';
		   config.filebrowserFlashBrowseUrl = prefix + '/vendor/ckfinder/ckfinder.html?type=Flash';
		   config.filebrowserUploadUrl = prefix + '/vendor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files';
		   config.filebrowserImageUploadUrl = prefix + '/vendor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images';
		   config.filebrowserFlashUploadUrl = prefix + '/vendor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash';
		};

		var editor = CKEDITOR.replace( 'ckeditor' );
		CKFinder.setupCKEditor( editor, prefix + '/vendor/ckfinder/') ;
	</script>
@stop
