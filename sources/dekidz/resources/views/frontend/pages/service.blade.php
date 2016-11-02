@extends('frontend.layouts.master')

@section('content')
    <section id="page-breadcrumb">
        <div class="vertical-center sun">
            <div class="container">
                <div class="row">
                    <div class="action">
                        <div class="col-sm-12">
                            <h1 class="title">Cơ sở vật chất</h1>
                            <p>Hệ thống cơ sở vật chất tiên tiến, hiện đại bất nhất.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/#page-breadcrumb-->

    <section id="company-information" class="choose">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="0ms">
                    <img src="images/services/4.png" class="img-responsive" alt="">
                </div>
                <div class="col-sm-6 padding-top wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="0ms">
                    <h2>TẠI SAO LẠI CHỌN CHÚNG TÔI?</h2>
                    <p>Trường mầm non DEKIDZ tự hào có cơ sở vật chất vượt trội, được thiết kế tối ưu và hiện đại.<br />Trường đảm bảo các điều kiện dạy và học, chăm sóc dinh dưỡng, y tế… khép kín, đồng bộ trên nền tảng chuỗi dịch vụ cao cấp cùng sự quản lý chặt chẽ của DEKIDZ</p>
                    <ul class="elements">
                        <li class="wow fadeInUp" data-wow-duration="900ms" data-wow-delay="100ms"><i class="fa fa-angle-right"></i> Hệ thống phòng học hiện đại</li>
                        <li class="wow fadeInUp" data-wow-duration="800ms" data-wow-delay="200ms"><i class="fa fa-angle-right"></i> Không gian tiện nghi hiện đại</li>
                        <li class="wow fadeInUp" data-wow-duration="700ms" data-wow-delay="300ms"><i class="fa fa-angle-right"></i> Khu thể thao và tập luyện thể chất tiêu chuẩn</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--/#company-information-->

    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <div class="single-service">
                        <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="300ms">
                            <img src="images/home/icon1.png" alt="">
                        </div>
                        <h2>Hệ thống phòng học hiện đại</h2>
                        <p>Hệ thống phòng học của DEKIDZ được thiết kế tiêu chuẩn, trang bị đầy đủ các phương tiện hỗ trợ dạy học hiện đại, phục vụ hiệu quả việc triển khai các phương pháp dạy học lấy học sinh làm trung tâm.</p>
                    </div>
                </div>
                <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="single-service">
                        <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="600ms">
                            <img src="images/home/icon2.png" alt="">
                        </div>
                        <h2>Không gian tiện nghi hiện đại</h2>
                        <p>Không gian bên ngoài các phòng học với hành lang rộng rãi, hệ thống chiếu sáng, điều hòa tiêu chuẩn, bình nước nóng lạnh luôn đảm bảo cho học sinh sinh hoạt, học tập trong điều kiện tiện nghi nhất. Bên ngoài mỗi lớp đều được trang bị tủ đựng đồ cá nhân với chìa khóa riêng của từng học sinh. Giữa các khối lớp là khoảng giếng trời rộng, cung cấp ánh sáng và là khoảng không gian thư giãn.</p>
                    </div>
                </div>
                <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="900ms">
                    <div class="single-service">
                        <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="900ms">
                            <img src="images/home/icon3.png" alt="">
                        </div>
                        <h2>Khu thể thao và tập luyện thể chất tiêu chuẩn</h2>
                        <p> Phát triển về thể chất là một trong những mục tiêu quan trọng trong chương trình giáo dục toàn diện. Nhà thi đấu đa năng, khu thể thao ngoài trời, sân bóng là chuỗi cơ sở vật chất nổi trội, khuyến khích học sinh DEKIDZ tích cực rèn luyện chăm chỉ và đúng phương pháp.</p>
                    </div>
                </div>

                {{--<div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">--}}
                    {{--<div class="single-service">--}}
                        {{--<div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="300ms">--}}
                            {{--<img src="images/services/1.png" alt="">--}}
                        {{--</div>--}}
                        {{--<h2>Incredibly Responsive</h2>--}}
                        {{--<p>Ground round tenderloin flank shank ribeye. Hamkevin meatball swine. Cow shankle beef sirloin chicken ground round.</p>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">--}}
                    {{--<div class="single-service">--}}
                        {{--<div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="600ms">--}}
                            {{--<img src="images/services/2.png" alt="">--}}
                        {{--</div>--}}
                        {{--<h2>Superior Typography</h2>--}}
                        {{--<p>Hamburger ribeye drumstick turkey, strip steak sausage ground round shank pastrami beef brisket pancetta venison.</p>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="900ms">--}}
                    {{--<div class="single-service">--}}
                        {{--<div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="900ms">--}}
                            {{--<img src="images/services/3.png" alt="">--}}
                        {{--</div>--}}
                        {{--<h2>Swift Page Builder</h2>--}}
                        {{--<p>Venison tongue, salami corned beef ball tip meatloaf bacon. Fatback pork belly bresaola tenderloin bone pork kevin shankle.</p>--}}
                    {{--</div>--}}
                {{--</div>--}}
            </div>
        </div>
    </section>
    <!--/#services-->

    {{--<section id="action" class="responsive">--}}
        {{--<div class="vertical-center">--}}
            {{--<div class="container">--}}
                {{--<div class="row">--}}
                    {{--<div class="action take-tour">--}}
                        {{--<div class="col-sm-7 wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">--}}
                            {{--<h1 class="title">Triangle Corporate Template</h1>--}}
                            {{--<p>A responsive, retina-ready &amp; wide multipurpose template.</p>--}}
                        {{--</div>--}}
                        {{--<div class="col-sm-5 text-center wow fadeInRight" data-wow-duration="500ms" data-wow-delay="300ms">--}}
                            {{--<div class="tour-button">--}}
                                {{--<a href="#" class="btn btn-common">TAKE THE TOUR</a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}
    <!--/#action-->

    {{--<section id="recent-projects" class="recent-projects">--}}
        {{--<div class="container">--}}
            {{--<div class="row">--}}
                {{--<h1 class="title text-center wow fadeInDown" data-wow-duration="500ms" data-wow-delay="300ms">Recent Projects</h1>--}}
                {{--<p class="text-center padding-bottom wow fadeInDown" data-wow-duration="400ms" data-wow-delay="400ms">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <br>--}}
                    {{--Ut enim ad minim veniam, quis nostrud </p>--}}
                {{--<div class="col-sm-3 col-xs-6 wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">--}}
                    {{--<div class="portfolio-wrapper">--}}
                        {{--<div class="portfolio-single">--}}
                            {{--<div class="portfolio-thumb">--}}
                                {{--<img src="images/portfolio/1.jpg" class="img-responsive" alt="">--}}
                            {{--</div>--}}
                            {{--<div class="portfolio-view">--}}
                                {{--<ul class="nav nav-pills">--}}
                                    {{--<li><a href="images/portfolio/1.jpg" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>--}}
                                {{--</ul>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="portfolio-info">--}}
                            {{--<h2>Sailing Vivamus</h2>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-sm-3 col-xs-6 wow fadeIn" data-wow-duration="1000ms" data-wow-delay="400ms">--}}
                    {{--<div class="portfolio-wrapper">--}}
                        {{--<div class="portfolio-single">--}}
                            {{--<div class="portfolio-thumb">--}}
                                {{--<img src="images/portfolio/2.jpg" class="img-responsive" alt="">--}}
                            {{--</div>--}}
                            {{--<div class="portfolio-view">--}}
                                {{--<ul class="nav nav-pills">--}}
                                    {{--<li><a href="images/portfolio/2.jpg" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>--}}
                                {{--</ul>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="portfolio-info">--}}
                            {{--<h2>Sailing Vivamus</h2>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-sm-3 col-xs-6 wow fadeIn" data-wow-duration="1000ms" data-wow-delay="500ms">--}}
                    {{--<div class="portfolio-wrapper">--}}
                        {{--<div class="portfolio-single">--}}
                            {{--<div class="portfolio-thumb">--}}
                                {{--<img src="images/portfolio/3.jpg" class="img-responsive" alt="">--}}
                            {{--</div>--}}
                            {{--<div class="portfolio-view">--}}
                                {{--<ul class="nav nav-pills">--}}
                                    {{--<li><a href="images/portfolio/3.jpg" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>--}}
                                {{--</ul>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="portfolio-info">--}}
                            {{--<h2>Sailing Vivamus</h2>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-sm-3 col-xs-6 wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">--}}
                    {{--<div class="portfolio-wrapper">--}}
                        {{--<div class="portfolio-single">--}}
                            {{--<div class="portfolio-thumb">--}}
                                {{--<img src="images/portfolio/4.jpg" class="img-responsive" alt="">--}}
                            {{--</div>--}}
                            {{--<div class="portfolio-view">--}}
                                {{--<ul class="nav nav-pills">--}}
                                    {{--<li><a href="images/portfolio/4.jpg" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>--}}
                                {{--</ul>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="portfolio-info">--}}
                            {{--<h2>Sailing Vivamus</h2>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-sm-3 col-xs-6 wow fadeIn" data-wow-duration="1000ms" data-wow-delay="700ms">--}}
                    {{--<div class="portfolio-wrapper">--}}
                        {{--<div class="portfolio-single">--}}
                            {{--<div class="portfolio-thumb">--}}
                                {{--<img src="images/portfolio/5.jpg" class="img-responsive" alt="">--}}
                            {{--</div>--}}
                            {{--<div class="portfolio-view">--}}
                                {{--<ul class="nav nav-pills">--}}
                                    {{--<li><a href="images/portfolio/5.jpg" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>--}}
                                {{--</ul>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="portfolio-info">--}}
                            {{--<h2>Sailing Vivamus</h2>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-sm-3 col-xs-6 wow fadeIn" data-wow-duration="1000ms" data-wow-delay="800ms">--}}
                    {{--<div class="portfolio-wrapper">--}}
                        {{--<div class="portfolio-single">--}}
                            {{--<div class="portfolio-thumb">--}}
                                {{--<img src="images/portfolio/6.jpg" class="img-responsive" alt="">--}}
                            {{--</div>--}}
                            {{--<div class="portfolio-view">--}}
                                {{--<ul class="nav nav-pills">--}}
                                    {{--<li><a href="images/portfolio/6.jpg" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>--}}
                                {{--</ul>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="portfolio-info">--}}
                            {{--<h2>Sailing Vivamus</h2>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-sm-3 col-xs-6 wow fadeIn" data-wow-duration="1000ms" data-wow-delay="900ms">--}}
                    {{--<div class="portfolio-wrapper">--}}
                        {{--<div class="portfolio-single">--}}
                            {{--<div class="portfolio-thumb">--}}
                                {{--<img src="images/portfolio/7.jpg" class="img-responsive" alt="">--}}
                            {{--</div>--}}
                            {{--<div class="portfolio-view">--}}
                                {{--<ul class="nav nav-pills">--}}
                                    {{--<li><a href="images/portfolio/7.jpg" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>--}}
                                {{--</ul>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="portfolio-info">--}}
                            {{--<h2>Sailing Vivamus</h2>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-sm-3 col-xs-6 wow fadeIn" data-wow-duration="1000ms" data-wow-delay="1000ms">--}}
                    {{--<div class="portfolio-wrapper">--}}
                        {{--<div class="portfolio-single">--}}
                            {{--<div class="portfolio-thumb">--}}
                                {{--<img src="images/portfolio/8.jpg" class="img-responsive" alt="">--}}
                            {{--</div>--}}
                            {{--<div class="portfolio-view">--}}
                                {{--<ul class="nav nav-pills">--}}
                                    {{--<li><a href="images/portfolio/8.jpg" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>--}}
                                {{--</ul>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="portfolio-info">--}}
                            {{--<h2>Sailing Vivamus</h2>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}
    {{--<!--/#recent-projects-->--}}

    <section id="clients">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="clients text-center wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms">
                        <p><img src="images/home/clients.png" class="img-responsive" alt=""></p>
                        <h1 class="title">NIỀM VUI CỦA TRẺ LÀ NIỀM HẠNH PHÚC CỦA CHÚNG TÔI</h1>
                        {{--<p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <br> Ut enim ad minim veniam, quis nostrud </p>--}}
                    </div>
                    <div class="clients-logo wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="col-xs-3 col-sm-2">
                            <a href="#"><img src="images/home/client1.png" class="img-responsive" alt=""></a>
                        </div>
                        <div class="col-xs-3 col-sm-2">
                            <a href="#"><img src="images/home/client2.png" class="img-responsive" alt=""></a>
                        </div>
                        <div class="col-xs-3 col-sm-2">
                            <a href="#"><img src="images/home/client3.png" class="img-responsive" alt=""></a>
                        </div>
                        <div class="col-xs-3 col-sm-2">
                            <a href="#"><img src="images/home/client4.png" class="img-responsive" alt=""></a>
                        </div>
                        <div class="col-xs-3 col-sm-2">
                            <a href="#"><img src="images/home/client5.png" class="img-responsive" alt=""></a>
                        </div>
                        <div class="col-xs-3 col-sm-2">
                            <a href="#"><img src="images/home/client6.png" class="img-responsive" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/#clients-->
@endsection