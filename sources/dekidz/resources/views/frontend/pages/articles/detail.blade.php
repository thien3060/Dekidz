@extends('frontend.layouts.master')
@section('content')

    <section id="page-breadcrumb">
        <div class="vertical-center sun">
            <div class="container">
                <div class="row">
                    <div class="action">
                        <div class="col-sm-12">
                            <h1 class="title">{{ $article->title }}</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/#page-breadcrumb-->

    <section id="blog-details">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-7">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="single-blog blog-details two-column">
                                <div class="post-content overflow">
                                    {{--<h2 class="post-title bold"><a href="#">{{ $article->title }}</a></h2>--}}
                                    <h3 class="post-author"><a href="#">{{ $article->updated_at }}</a></h3>
                                    <div>
                                        {!! $article->body !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-5">

                    <div class="sidebar-item popular">
                        <h3>Tin mới nhất</h3>
                        <ul class="gallery">
                            @foreach($new_articles as $article)
                                <li>
                                    <a href="/article/{{ $article->id }}">
                                        <img src="{{ asset('images/articles/'.$article->image) }}" class="img-responsive" alt="">
                                        <h5>{{ $article->title }}</h5>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>


            </div>
        </div>
    </section>
@endsection