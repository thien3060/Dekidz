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

            <fieldset>
                <legend>Call Management</legend>

                <!-- User input: Callee field. -->
                Callee: <input type="text" id="callee"/>

                <!-- User input: Handle call buttons. -->
                <input type="button" value="Make Call" id="make-call" onclick="startCall();"/>

                <input type="button" value="Mute/Unmute Call" id="mute-call" onclick="toggleMute();" disabled/>

                <input type="button" value="Hold/Unhold Call" id="hold-call" onclick="toggleHold();" disabled/>

                <input type="button" value="Show/Hide Video" id="show-video" onclick="toggleVideo();"/>

                <input type="button" value="End Call" id="end-call" onclick="endCall();" disabled/>

                <input type="button" value="Accept Call" id="accept-call" onclick="acceptCall();" disabled/>

                <input type="button" value="Decline Call" id="decline-call" onclick="declineCall();" disabled/>
            </fieldset>

            <fieldset>
                <legend>Messages</legend>

                <!-- Message output container. -->
                <div id="messages"> </div>
            </fieldset>

            <!-- Media containers. -->
            Remote video: <div id="remote-container"></div>

            Local video: <div id="local-container"></div>

        </div>

    </section>
    <!--/#blog-->
@endsection

@section('inline-script')
    {!! KandyLaravel::init(1) !!}

    <script>
        // Setup Kandy to make and receive calls.
        kandy.setup({
            // Designate HTML elements to be our stream containers.
            remoteVideoContainer: document.getElementById("remote-container"),
            localVideoContainer: document.getElementById("local-container"),

            // Register listeners to call events.
            listeners: {
                callinitiated: onCallInitiated,
                callincoming: onCallIncoming,
                callestablished: onCallEstablished,
                callended: onCallEnded
            }
        });

        // What to do on a successful login.
        function kandy_login_success_callback() {
            log("Login was successful.");
        }

        // What to do on a failed login.
        function kandy_login_failed_callback() {
            log("Login failed. Make sure you input the user's credentials!");
        }

        // Utility function for appending messages to the message div.
        function log(message) {
            document.getElementById("messages").innerHTML += "<div>" + message + "</div>";
        }

        // Variable to keep track of video display status.
        var showVideo = true;

        // Get user input and make a call to the callee.
        function startCall() {
            var callee = document.getElementById("callee").value;

            // Tell Kandy to make a call to callee.
            kandy.call.makeCall(callee, showVideo);
        }

        // Variable to keep track of the call.
        var callId;

        // What to do when a call is initiated.
        function onCallInitiated(call, callee) {
            log("Call initiated with " + callee + ". Ringing...");

            // Store the call id, so the caller has access to it.
            callId = call.getId();

            // Handle UI changes. A call is in progress.
            document.getElementById("make-call").disabled = true;
            document.getElementById("end-call").disabled = false;
        }

        // What to do for an incoming call.
        function onCallIncoming(call) {
            log("Incoming call from " + call.callerNumber);

            // Store the call id, so the callee has access to it.
            callId = call.getId();

            // Handle UI changes. A call is incoming.
            document.getElementById("accept-call").disabled = false;
            document.getElementById("decline-call").disabled = false;
        }

        // Accept an incoming call.
        function acceptCall() {
            // Tell Kandy to answer the call.
            kandy.call.answerCall(callId, showVideo);
            // Second parameter is false because we are only doing voice calls, no video.

            log("Call answered.");
            // Handle UI changes. Call no longer incoming.
            document.getElementById("accept-call").disabled = true;
            document.getElementById("decline-call").disabled = true;
        }

        // Reject an incoming call.
        function declineCall() {
            // Tell Kandy to reject the call.
            kandy.call.rejectCall(callId);

            log("Call rejected.");
            // Handle UI changes. Call no longer incoming.
            document.getElementById("accept-call").disabled = true;
            document.getElementById("decline-call").disabled = true;
        }

        // What to do when call is established.
        function onCallEstablished(call) {
            log("Call established.");

            // Handle UI changes. Call in progress.
            document.getElementById("make-call").disabled = true;
            document.getElementById("mute-call").disabled = false;
            document.getElementById("hold-call").disabled = false;
            document.getElementById("end-call").disabled = false;
        }

        // End a call.
        function endCall() {
            // Tell Kandy to end the call.
            kandy.call.endCall(callId);
        }

        // Variable to keep track of mute status.
        var isMuted = false;

        // Mute or unmute the call, depending on current status.
        function toggleMute() {
            if(isMuted) {
                kandy.call.unMuteCall(callId);
                log("Unmuting call.");
                isMuted = false;
            } else {
                kandy.call.muteCall(callId);
                log("Muting call.");
                isMuted = true;
            }
        }

        // Variable to keep track of hold status.
        var isHeld = false;

        // Hold or unhold the call, depending on current status.
        function toggleHold() {
            if(isHeld) {
                kandy.call.unHoldCall(callId);
                log("Unholding call.");
                isHeld = false;
            } else {
                kandy.call.holdCall(callId);
                log("Holding call.");
                isHeld = true;
            }
        }

        // What to do when a call is ended.
        function onCallEnded(call) {
            log("Call ended.");

            // Handle UI changes. No current call.
            document.getElementById("make-call").disabled = false;
            document.getElementById("mute-call").disabled = true;
            document.getElementById("hold-call").disabled = true;
            document.getElementById("end-call").disabled = true;

            // Call no longer active, reset mute and hold statuses.
            isMuted = false;
            isHeld = false;
        }

        // Show or hide video, depending on current status.
        function toggleVideo() {
            if(showVideo) {
                kandy.call.stopCallVideo(callId);
                log("Stopping send of video.");
                showVideo = false;
            } else {
                kandy.call.startCallVideo(callId);
                log("Starting send of video.");
                showVideo = true;
            }
        }
    </script>
@endsection