@extends('frontend.layouts.master')

@section('content')
    <section id="page-breadcrumb">
        <div class="vertical-center sun">
            <div class="container">
                <div class="row">
                    <div class="action">
                        <div class="col-sm-12">
                            <h1 class="title">Theo dõi video</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/#action-->

    <section id="blog">
        <div class="container">
            @if(Auth::check())
                <div class="row">
                    <div class="col-sm-5">
                        <label for="cameras">Select Camera:</label>
                        {!! Form::select('camera', $cameras, null, ['id' => 'cameras', 'class' => "form-control"]) !!}
                    </div>
                </div>
                <div class="row" id="camera-container">
                    <div class="col-sm-12">
                        <h3 id="camera-name"></h3>
                        <div class="video-container">
                            <iframe id="camera-frame" src="" class="video">
                            </iframe>
                        </div>
                    </div>
                </div>
            @else
                <h3>Xin vui lòng đăng nhập</h3>
            @endif
        </div>
        <br>
        <br>
    </section>
    <!--/#blog-->
@endsection

@section('inline-style')
    <style>
        .video-container {
            position: relative;
            width: 100%;
            height: 0;
            padding-bottom: 56.25%;
        }
        .video {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
    </style>
@endsection

@section('inline-script')
    <script>
        $('#camera-container').hide();

        $('#cameras').change(function () {
            if($(this).val() != 0){
                var data = {
                    _token: '{{ csrf_token() }}',
                    id: $(this).val()
                };
                $.post( "/get_camera", data, function( result ) {
                    set_camera(result.name, result.url);
                });
            }
            else {
                $('#camera-container').hide();
                set_camera('', '');
            }
        });

        function set_camera(name, url) {
            $('#camera-container').show();
            $('#camera-name').html(name);
            $('#camera-frame').attr('src', url);
        }
    </script>
@endsection