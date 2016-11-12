@extends('frontend.layouts.master')

@section('content')
    <section id="home-slider">
        <div class="container">
            <div class="row">
                <div class="main-slider">
                    <div class="slide-text">
                        <h1>Hệ thống nhà trẻ Dekidz</h1>
                        <p>Nơi bắt đầu cho một tương lai tương sáng</p>
                        <a href="https://docs.google.com/forms/d/1yQrY0q0IoohBWyne_FJXJPssLXKOsXfHD3PVSRvxTgg/edit?usp=sharing" class="btn btn-common">ĐĂNG KÝ</a>
                    </div>
                    <img src="{{ asset('images/home/slider/hill.png') }}" class="slider-hill" alt="slider image">
                    <img src="{{ asset('images/home/slider/house.png') }}" class="slider-house" alt="slider image">
                    <img src="{{ asset('images/home/slider/sun.png') }}" class="slider-sun" alt="slider image">
                    <img src="{{ asset('images/home/slider/birds1.png') }}" class="slider-birds1" alt="slider image">
                    <img src="{{ asset('images/home/slider/birds2.png') }}" class="slider-birds2" alt="slider image">
                </div>
            </div>
        </div>
        <div class="preloader"><i class="fa fa-sun-o fa-spin"></i></div>
    </section>
    <!--/#home-slider-->
    
    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <div class="single-service">
                        <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="300ms">
                            <img src="{{ asset('images/home/icon1a.png') }}" alt="">
                        </div>
                        <h2>Chương trình giáo dục 5 trong 1</h2>
                        <p>Điều đầu tiên tạo nên sự hấp dẫn của Dekidz là tinh thần tự tôn dân tộc, khát vọng về một ngôi trường Việt nam mang đẳng cấp quốc tế, với triết lý giáo dục “Ươm mầm tinh hoa” được hiện thực hóa bằng chương trình giáo dục toàn diện “5 trong 1”.
                            Học sinh học chương trình bán trú và được giáo dục toàn diện về Văn hóa - Tiếng Anh - Thể chất - Nghệ thuật - Kỹ năng sống… ngay trong giờ chính khóa.</p>
                    </div>
                </div>
                <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="single-service">
                        <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="600ms">
                            <img src="{{ asset('images/home/icon2a.png') }}" alt="">
                        </div>
                        <h2>Chất lượng giáo viên Tâm - Tầm - Tài</h2>
                        <p>Đội ngũ giáo viên tinh hoa, hội tụ về từ nhiều cơ sở giáo dục uy tín, là nòng cốt hiện thực hóa triết lý giáo dục toàn diện. Đó là những giáo viên giỏi chuyên môn, có tư duy cấp tiến và nhiều sáng tạo trong đổi mới phương pháp giảng dạy, cách tiếp cận học sinh. Tại Dekidz, đội ngũ giáo viên trao dồi và trao đổi kinh nghiệm với nhau để nâng cao chất lượng dạy và học trên mặt bằng chung toàn trường.</p>
                    </div>
                </div>
                <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="900ms">
                    <div class="single-service">
                        <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="900ms">
                            <img src="{{ asset('images/home/icon3a.png') }}" alt="">
                        </div>
                        <h2>Cơ sở vật chất hàng đầu Việt Nam</h2>
                        <p>Dekidz là một trong những ngôi trường có cơ sở vật chất hàng đầu Việt Nam hiện nay. Dekidz có hệ thống cơ sở vật chất hiện đại, khép kín và đồng bộ. Trường có hệ thống phòng học tiêu chuẩn tiên tiến, cùng hệ thống các phòng chức năng chuyên biệt và các khu vui chơi, thể thao hiện đại… trên quần thể rộng hơn 2 ha, quy mô lớn có khả năng đáp ứng nhu cầu học tập của hàng ngàn học sinh.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/#services-->
    
    <section id="action" class="responsive">
        <div class="vertical-center">
            <div class="container">
                <div class="row">
                    <div class="action take-tour">
                        <div class="col-sm-7 wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">
                            <h1 class="title">Hệ thống nhà trẻ Dekidz</h1>
                            <p>Nơi bắt đầu cho một tương lai tương sáng.</p>
                        </div>
                        <div class="col-sm-5 text-center wow fadeInRight" data-wow-duration="500ms" data-wow-delay="300ms">
                            <div class="tour-button">
                                <a href="https://docs.google.com/forms/d/1yQrY0q0IoohBWyne_FJXJPssLXKOsXfHD3PVSRvxTgg/edit?usp=sharing" class="btn btn-common">ĐĂNG KÝ</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/#action-->
    
    <section id="features">
        <div class="container">
            <div class="row">
                <div class="single-features">
                    <div class="col-sm-7 wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">
                        <img src="{{ asset('images/home/image1.png') }}" class="img-responsive" alt="">
                    </div>
                    <div class="col-sm-5 wow fadeInRight" data-wow-duration="500ms" data-wow-delay="300ms">
                        <h1>Khối lớp bột</h1>
                        <P>Độ tuổi từ 1-2</P>
                    </div>
                </div>
    
                <div class="single-features">
                    <div class="col-sm-7 wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">
                        <img src="{{ asset('images/home/image2.png') }}" class="img-responsive" alt="">
                    </div>
                    <div class="col-sm-5 wow fadeInRight" data-wow-duration="500ms" data-wow-delay="300ms">
                        <h1>Khối lớp cơm</h1>
                        <P>Độ tuổi từ 2-3</P>
                    </div>
                </div>
                <div class="single-features">
                    <div class="col-sm-7 wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">
                        <img src="{{ asset('images/home/image3.png') }}" class="img-responsive" alt="">
                    </div>
                    <div class="col-sm-5 wow fadeInRight" data-wow-duration="500ms" data-wow-delay="300ms">
                        <h1>Khối lớp mầm</h1>
                        <P>Độ tuổi từ 3-4</P>
                    </div>
                </div>
    
                <div class="single-features">
                    <div class="col-sm-7 wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">
                        <img src="{{ asset('images/home/image4.png') }}" class="img-responsive" alt="">
                    </div>
                    <div class="col-sm-5 wow fadeInRight" data-wow-duration="500ms" data-wow-delay="300ms">
                        <h1>Khối lớp chồi</h1>
                        <P>Độ tuổi từ 4-5</P>
                    </div>
                </div>
    
                <div class="single-features">
                    <div class="col-sm-7 wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">
                        <img src="{{ asset('images/home/image5.png') }}" class="img-responsive" alt="">
                    </div>
                    <div class="col-sm-5 wow fadeInRight" data-wow-duration="500ms" data-wow-delay="300ms">
                        <h1>Khối lớp lá</h1>
                        <P>Độ tuổi từ 5-6</P>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/#features-->
    
    <section id="clients">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="clients text-center wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms">
                        <p><img src="{{ asset('images/home/clients.png') }}" class="img-responsive" alt=""></p>
                        <h1 class="title">Hoạt động nổi bật</h1>
                    </div>
                    <div class="clients-logo wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
                        @foreach($articles as $article)
                        <div class="col-xs-3 col-sm-2">
                            <a href="#">
                                <img src="{{ asset('images/articles/'.$article->image) }}" class="img-responsive" alt="">
                                <h3><a href="/article/{{ $article->id }}">{{ $article->title }}</a></h3>
                            </a>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/#clients-->
@endsection