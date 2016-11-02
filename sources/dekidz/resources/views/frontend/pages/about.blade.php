@extends('frontend.layouts.master')

@section('content')
    <section id="page-breadcrumb">
        <div class="vertical-center sun">
            <div class="container">
                <div class="row">
                    <div class="action">
                        <div class="col-sm-12">
                            <h1 class="title">Giới thiệu về Dekidz</h1>
                            <p>Thông điệp từ DEKIDZ gửi đến tất cả phụ huynh và các bé</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/#page-breadcrumb-->

    <section id="company-information" class="padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <img src="images/aboutus/1.png" class="img-responsive" alt="">
                </div>
                <div class="col-sm-6 padding-top">
                    <p>Triết lý hoạt động của Dekidz là ươm mầm lên một thế hệ trẻ Việt Nam khỏa mạnh về cả thể chất và tinh thần.</p>
                    <p>Với chương trình giảng dạy được nghiên cứu từ các nước tiên tiến hàng đầu thế giờ, cùng kinh nghiệm và lòng yêu thương trẻ của nhà trường đã tạo nên những nhân tốt tốt, góp phần thúc đẩy phát triển thế hệ tương lai của đất nước.</p>
                    <p>-- Hiệu trưởng DEKIDZ --</p>
                </div>
            </div>
        </div>
    </section>

    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <div class="single-service">
                        <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="300ms">
                            <img src="images/home/icon1.png" alt="">
                        </div>
                        <h2>Chương trình giáo dục 5 trong 1</h2>
                        <p>Điều đầu tiên tạo nên sự hấp dẫn của Dekidz là tinh thần tự tôn dân tộc, khát vọng về một ngôi trường Việt nam mang đẳng cấp quốc tế, với triết lý giáo dục “Ươm mầm tinh hoa” được hiện thực hóa bằng chương trình giáo dục toàn diện “5 trong 1”. Học sinh học chương trình bán trú và được giáo dục toàn diện về Văn hóa - Tiếng Anh - Thể chất - Nghệ thuật - Kỹ năng sống… ngay trong giờ chính khóa.</p>
                    </div>
                </div>
                <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="single-service">
                        <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="600ms">
                            <img src="images/home/icon2.png" alt="">
                        </div>
                        <h2>Chất lượng giáo viên Tâm - Tầm - Tài</h2>
                        <p>Đội ngũ giáo viên tinh hoa, hội tụ về từ nhiều cơ sở giáo dục uy tín, là nòng cốt hiện thực hóa triết lý giáo dục toàn diện. Đó là những giáo viên giỏi chuyên môn, có tư duy cấp tiến và nhiều sáng tạo trong đổi mới phương pháp giảng dạy, cách tiếp cận học sinh. Tại Dekidz, đội ngũ giáo viên trao dồi và trao đổi kinh nghiệm với nhau để nâng cao chất lượng dạy và học trên mặt bằng chung toàn trường.</p>
                    </div>
                </div>
                <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="900ms">
                    <div class="single-service">
                        <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="900ms">
                            <img src="images/home/icon3.png" alt="">
                        </div>
                        <h2>Cơ sở vật chất hàng đầu Việt Nam</h2>
                        <p>Dekidz là một trong những ngôi trường có cơ sở vật chất hàng đầu Việt Nam hiện nay. Dekidz có hệ thống cơ sở vật chất hiện đại, khép kín và đồng bộ. Trường có hệ thống phòng học tiêu chuẩn tiên tiến, cùng hệ thống các phòng chức năng chuyên biệt và các khu vui chơi, thể thao hiện đại… trên quần thể rộng hơn 2 ha, quy mô lớn có khả năng đáp ứng nhu cầu học tập của hàng ngàn học sinh.</p
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
                            <h1 class="title">Hệ thống nhà trẻ thông minh DEKIDZ</h1>
                            <p>Hiện đại, tân tiến &amp; tâm huyết.</p>
                        </div>
                        <div class="col-sm-5 text-center wow fadeInRight" data-wow-duration="500ms" data-wow-delay="300ms">
                            <div class="tour-button">
                                <a href="#" class="btn btn-common">CÙNG KHÁM PHÁ</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/#action-->


@endsection