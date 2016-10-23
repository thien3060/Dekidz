@extends($layout)

@section('content-header')
    <h1>
        Edit
        &middot;
        <small>{!! link_to_route('admin.lessons.index', 'Back') !!}</small>
    </h1>
@stop

@section('content')

    <div>
        @include('admin.pages.lessons.form', array('model' => $lesson))
    </div>

@stop

@section('script')
    {!! script('vendor/ckeditor/ckeditor.js') !!}
    {!! script('vendor/ckfinder/ckfinder.js') !!}

    <script>
        $('.date-picker').datepicker({
            autoclose: true
        });

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
@endsection