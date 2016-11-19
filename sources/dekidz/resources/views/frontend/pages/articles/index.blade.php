@extends('frontend.layouts.master')

@section('content')
    <section id="page-breadcrumb">
        <div class="vertical-center sun">
            <div class="container">
                <div class="row">
                    <div class="action">
                        <div class="col-sm-12">
                            <h1 class="title">Thế giới của bé</h1>
                            <p>Tất cả các hoạt động của bé tại Dekidz đều được ghi lại. Từ những khoảng khắc nhỏ nhất cho đến những điều thú vị nhất. Nơi lưu dấu tuổi thơ của trẻ</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/#action-->

    <section id="blog">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-7">
                    <div class="row">
                        @foreach($articles as $article)
                            <div class="col-md-12">
                                <div class="single-blog row">
                                    <div class="post-thumb col-md-5">
                                        <a href="/article/{{ $article->id }}"><img src="images/articles/{{ $article->image }}" class="img-responsive" alt=""></a>
                                    </div>
                                    <div class="post-content overflow col-md-7">
                                        <h2 class="post-title bold"><a href="/article/{{ $article->id }}">{{ $article->title }}</a></h2>
                                        <h3 class="post-author"><a href="#">{{ $article->updated_at}}</a></h3>
                                        <p class="post-description">{{$article->description}}</p>
                                        {{--{!! $article->body !!}--}}
                                        <a href="/article/{{ $article->id }}" class="read-more">Xem thêm</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="blog-pagination">
                        {!! pagination_links($articles) !!}
                    </div>

                </div>
                <div class="col-md-3 col-sm-5">

                        <div class="sidebar-item popular">
                            <h3>BÀI VIẾT NỔI BẬT</h3>
                            <ul class="gallery">
                                @foreach($articles as $article)
                                    <li>
                                        <a href="#">
                                            <img src="images/articles/{{ $article->image }}" class="img-responsive" alt="">
                                            <h5>{{$article->title}}</h5>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                </div>
            </div>

        </div>

    </section>
    <!--/#blog-->
@endsection