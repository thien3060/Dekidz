@extends('frontend.layouts.master')

@section('content')
    <section id="page-breadcrumb">
        <div class="vertical-center sun">
            <div class="container">
                <div class="row">
                    <div class="action">
                        <div class="col-sm-12">
                            <h1 class="title">Đội ngũ giáo viên</h1>
                            <p>Chúng tôi tự hào về đội ngũ giáo viên TÂM - TẦM - TÀI của mình</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/#page-breadcrumb-->

    <section id="about-company" class="padding-top wow fadeInUp" data-wow-duration="400ms" data-wow-delay="400ms">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    {{--<img src="images/aboutus/5.png" class="margin-bottom" alt="">--}}
                    <h1 class="margin-bottom">ĐỘI NGŨ GIÁO VIÊN</h1>
                    <p>Hệ thống nhà trẻ Dekidz là đơn vị đào tạo trẻ mầm non hàng đầu Việt Nam với hàng triệu trẻ theo học<br /> Dekidz hiện quy tụ một lực lượng giáo viên giàu kinh nghiệm và tâm huyết với nghề lớn nhất Việt Nam, với hơn 85% là giáo viên giỏi.</p>
                </div>
            </div>
        </div>
    </section>


    <section id="action">
        <div class="vertical-center">
            <div class="container">
                <div class="row">
                    <div class="action count">
                        <div class="col-sm-3 text-center wow bounceIn" data-wow-duration="1000ms" data-wow-delay="300ms">
                            <h1 class="timer bold" data-to="7000" data-speed="3000" data-from="0"></h1>
                            <h3>YÊU TRẺ</h3>
                        </div>
                        <div class="col-sm-3 text-center wow bounceIn" data-wow-duration="1000ms" data-wow-delay="300ms">
                            <h1 class="timer bold" data-to="12" data-speed="3000" data-from="0"></h1>
                            <h3>TÀI NĂNG</h3>
                        </div>
                        <div class="col-sm-3 text-center wow bounceIn" data-wow-duration="1000ms" data-wow-delay="300ms">
                            <h1 class="timer bold" data-to="432" data-speed="3000" data-from="0"></h1>
                            <h3>KINH NGHIỆM</h3>
                        </div>
                        <div class="col-sm-3 text-center wow bounceIn" data-wow-duration="1000ms" data-wow-delay="300ms">
                            <h1 class="timer bold" data-to="145" data-speed="3000" data-from="0"></h1>
                            <h3>NHIỆT HUYẾT</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/#action-->

    {{--<section id="company-information" class="padding-top">--}}
        {{--<div class="container">--}}
            {{--<div class="row">--}}
                {{--<div class="about-us">--}}
                    {{--<div class="col-sm-7 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="300ms">--}}
                        {{--<h2 class="bold">About Triangle</h2>--}}
                        {{--<div class="row">--}}
                            {{--<div class="col-sm-5">--}}
                                {{--<img src="images/aboutus/6.png" class="img-responsive" alt="">--}}
                            {{--</div>--}}
                            {{--<div class="col-sm-7">--}}
                                {{--<h3 class="top-zero">Who we are</h3>--}}
                                {{--<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. <br> <br> Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="col-sm-5 wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="300ms">--}}
                        {{--<div class="our-skills">--}}
                            {{--<h2 class="bold">Our Skills</h2>--}}
                            {{--<div class="single-skill">--}}
                                {{--<h3>Design</h3>--}}
                                {{--<div class="progress">--}}
                                    {{--<div class="progress-bar progress-bar-primary six-sec-ease-in-out" role="progressbar"  data-transition="35">35%</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="single-skill">--}}
                                {{--<h3>HTML</h3>--}}
                                {{--<div class="progress">--}}
                                    {{--<div class="progress-bar progress-bar-primary six-sec-ease-in-out" role="progressbar"  data-transition="80">80%</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="single-skill">--}}
                                {{--<h3>PHP</h3>--}}
                                {{--<div class="progress">--}}
                                    {{--<div class="progress-bar progress-bar-primary six-sec-ease-in-out" role="progressbar"  data-transition="60">60%</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}
    {{--<!--/#company-information-->--}}

    <section id="team">
        <div class="container">
            <div class="row">
                {{--<h1 class="title text-center wow fadeInDown" data-wow-duration="500ms" data-wow-delay="300ms">GẶP GỠ GIÁO VIÊN</h1>--}}
                <div id="team-carousel" class="carousel slide wow fadeIn" data-ride="carousel" data-wow-duration="400ms" data-wow-delay="400ms">
                    <!-- Indicators -->
                    <ol class="carousel-indicators visible-xs">
                        <li data-target="#team-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#team-carousel" data-slide-to="1"></li>
                    </ol>
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="col-sm-3 col-xs-6">
                                <div class="team-single-wrapper">
                                    <div class="team-single">
                                        <div class="person-thumb">
                                            <img src="images/aboutus/1.jpg" class="img-responsive" alt="">
                                        </div>
                                        <div class="social-profile">
                                            <ul class="nav nav-pills">
                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="person-info">
                                        <h2>Nguyễn Thị Hoa</h2>
                                        <p>Hiệu trưởng &amp; Giáo viên</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <div class="team-single-wrapper">
                                    <div class="team-single">
                                        <div class="person-thumb">
                                            <img src="images/aboutus/2.jpg" class="img-responsive" alt="">
                                        </div>
                                        <div class="social-profile">
                                            <ul class="nav nav-pills">
                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="person-info">
                                        <h2>Lê Minh Trực</h2>
                                        <p>Phó hiệu trưởng &amp; Giáo viên</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <div class="team-single-wrapper">
                                    <div class="team-single">
                                        <div class="person-thumb">
                                            <img src="images/aboutus/3.jpg" class="img-responsive" alt="">
                                        </div>
                                        <div class="social-profile">
                                            <ul class="nav nav-pills">
                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="person-info">
                                        <h2>Đoàn Minh Tiến</h2>
                                        <p>Giáo viên</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <div class="team-single-wrapper">
                                    <div class="team-single">
                                        <div class="person-thumb">
                                            <img src="images/aboutus/5.jpg" class="img-responsive" alt="">
                                        </div>
                                        <div class="social-profile">
                                            <ul class="nav nav-pills">
                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="person-info">
                                        <h2>Trần Kiều Trang</h2>
                                        <p>Giáo viên</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-sm-3 col-xs-6">
                                <div class="team-single-wrapper">
                                    <div class="team-single">
                                        <div class="person-thumb">
                                            <img src="images/aboutus/6.jpg" class="img-responsive" alt="">
                                        </div>
                                        <div class="social-profile">
                                            <ul class="nav nav-pills">
                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="person-info">
                                        <h2>Lê Quang Như</h2>
                                        <p>Giáo viên</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <div class="team-single-wrapper">
                                    <div class="team-single">
                                        <div class="person-thumb">
                                            <img src="images/aboutus/7.jpg" class="img-responsive" alt="">
                                        </div>
                                        <div class="social-profile">
                                            <ul class="nav nav-pills">
                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="person-info">
                                        <h2>John Steve</h2>
                                        <p>Giáo viên</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <div class="team-single-wrapper">
                                    <div class="team-single">
                                        <div class="person-thumb">
                                            <img src="images/aboutus/8.jpg" class="img-responsive" alt="">
                                        </div>
                                        <div class="social-profile">
                                            <ul class="nav nav-pills">
                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="person-info">
                                        <h2>Trần Thị Nga</h2>
                                        <p>Giáo viên</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <div class="team-single-wrapper">
                                    <div class="team-single">
                                        <div class="person-thumb">
                                            <img src="images/aboutus/9.jpg" class="img-responsive" alt="">
                                        </div>
                                        <div class="social-profile">
                                            <ul class="nav nav-pills">
                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="person-info">
                                        <h2>Nguyễn Thị Phụng</h2>
                                        <p>Giáo viên</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Controls -->
                    <a class="left team-carousel-control hidden-xs" href="#team-carousel" data-slide="prev">left</a>
                    <a class="right team-carousel-control hidden-xs" href="#team-carousel" data-slide="next">right</a>
                </div>
            </div>
        </div>
    </section>
    <!--/#team-->
@endsection