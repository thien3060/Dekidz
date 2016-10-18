@extends($layout)

@section('content-header')
    <h1>
        Add Food Set
        &middot;
        <small>{!! link_to_route('admin.foodsets.index', 'Back') !!}</small>
    </h1>
@stop

@section('content')

    <div>
        @include('admin.pages.foodsets.form')
    </div>

@stop

@section('style')
    <style>
        #asset-list td{
            text-align: left;
            padding: 1px;
            border-top: 1px solid #ddd;
        }
        #asset-list input{
            border: none;
            padding-left: 0;
        }
        .asset-select{
            padding:0;
            margin: 0;
            border: solid 1px #ddd;
            list-style-type: none;
            display: block;
            position: fixed;
            background-color: white;
            max-height: 200px;
            width: 280px;
            overflow: auto;
            z-index: 9999;
        }
        .asset-select li{
            padding: 5px;
        }
        .asset-select li:hover{
            background-color: #ddd;
        }
    </style>
@endsection

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

    @include('admin.pages.foodsets.js')
@endsection
