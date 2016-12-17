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
            @foreach(config('custom.embedded_videos') as $video)
                <h3>{{ $video["title"] }}</h3>
                <div class="video-container">
                    <iframe  src="{{ $video["url"] }}" class="video">
                    </iframe>
                </div>
            @endforeach
        </div>
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

@endsection