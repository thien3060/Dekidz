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
                                    <h2 class="post-title bold"><a href="#">{{ $article->title }}</a></h2>
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
                            <!-- Foreach here -->
                            <li>
                                <a href="#">
                                    <img src="/images/articles/eea7d8f123dc3588020e8cad7dba9e8db5eda316.png" class="img-responsive" alt="">
                                    <h5>sdfghjkldfghjkl</h5>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>


            </div>
        </div>
    </section>
@endsection