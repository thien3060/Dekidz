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
            {!!
            KandyButton::videoCall(array(
                "id"      => "kandyVideoAnswerButton",
                "class"   => "myButtonStyle",
                "options" => array(
                    "callOut"      => array(
                        "id"       => "callOut",
                        "label"    => "User to call",
                        "btnLabel" => "Call"
                    ),
                    "calling"      => array(
                        "id"       => "calling",
                        "label"    => "Calling...",
                        "btnLabel" => "End Call"
                    ),
                    "incomingCall" => array(
                        "id"       => "incomingCall",
                        "label"    => "Incoming Call",
                        "btnLabel" => "Answer"
                    ),
                    "onCall"       => array(
                        "id"       => "onCall",
                        "label"    => "You're connected!",
                        "btnLabel" => "End Call"
                    ),
                    "onScreenSharing"  => array(
                        "id"       => "onScreenSharing",
                        "label"    => "You're sharing screen!",
                        "btnLabel" => "End sharing screen"
                    ),
                )
            ))
            !!}

            {!!
                KandyVideo::show(
                    array(
                        "title"       => "Them",
                        "id"          => "theirVideo",
                        "class"       => "myVideoStyle",
                        "htmlOptions" => array( // Example how to use inline stylesheet
                            "style" => array(
                                "width" => "340px",
                                "height" => "250px",
                                "background-color" => "darkslategray"
                            )
                        )
                    )
                )
             !!}

            {!!
                KandyVideo::show(
                    array(
                        "title"       => "Me",
                        "id"          => "myVideo",
                        "class"       => "myStyle",
                        "htmlOptions" => array( // Example how to use inline stylesheet
                            "style" => array(
                                "width" => "340px",
                                "height" => "250px",
                                "background-color" => "darkslategray"
                            )
                        )
                    )
                )
             !!}
        </div>

    </section>
    <!--/#blog-->
@endsection

@section('inline-script')
    <script src="https://kandy-portal.s3.amazonaws.com/public/javascript/kandy/2.7.0/kandy.js"></script>
    <script>
        // Configure Kandy for calls.
        kandy.setup({
            // Designate HTML elements to be our stream containers.
            remoteVideoContainer: document.getElementById('remote-stream'),
            localVideoContainer: document.getElementById('local-stream'),

            // Register listeners to call events.
            listeners: {
                // Media support event.
                media: onMedia,
                // Call events.
                callinitiated: onCallInitiated,
                callinitiatefailed: onCallInitiateFail,
                callrejected: onCallRejected,
                callrejectfailed: onCallRejectFailed,
                callignored: onCallIgnored,
                callignorefailed: onCallIgnoreFailed,
                callincoming: onCallIncoming,
                callanswered: onCallAnswered,
                callansweredFailed: onCallAnsweredFailed,
                oncall: onCall,
                callended: onCallEnded,
                callendedfailed: onCallEndedFailed
            }
        });

        {!! KandyLaravel::init(2) !!}
    </script>
@endsection