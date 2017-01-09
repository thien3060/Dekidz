<div class="container">
    <div class="row">
        <div class="col-sm-12 overflow">
            <div class="social-icons pull-right">
                <ul class="nav nav-pills">
                    <li><a href=""><i class="fa fa-facebook"></i></a></li>
                    <li><a href=""><i class="fa fa-twitter"></i></a></li>
                    <li><a href=""><i class="fa fa-google-plus"></i></a></li>
                    <li><a href=""><i class="fa fa-dribbble"></i></a></li>
                    <li><a href=""><i class="fa fa-linkedin"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="navbar navbar-inverse navbar-fixed-top" role="banner">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a class="navbar-brand" href="/">
                <h1><img src="/images/logo.png" alt="logo"></h1>
            </a>

        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li {{ (Request::is('/') ? 'class=active' : '') }}>
                    <a href="/">Trang chủ</a>
                </li>
                <li {{ (Request::is('blogone') ? 'class=active' : '') }}>
                    <a href="/blogone">Thế giới của bé</a>
                </li>
                <li class="dropdown"><a href="#">Giới thiệu<i class="fa fa-angle-down"></i></a>
                    <ul role="menu" class="sub-menu">
                        <li {{ (Request::is('aboutus') ? 'class=active' : '') }}>
                            <a href="/aboutus">Giới thiệu về trường</a>
                        </li>
                        <li {{ (Request::is('aboutus2') ? 'class=active' : '') }}>
                            <a href="/aboutus2">Đội ngũ giáo viên</a>
                        </li>
                        <li {{ (Request::is('service') ? 'class=active' : '') }}>
                            <a href="/service">Cơ sở vật chất</a>
                        </li>
                        <li {{ (Request::is('pricing') ? 'class=active' : '') }}>
                            <a href="/pricing">Học phí</a>
                        </li>
                        <li>
                            <a href="/coming-soon">Tuyển dụng</a>
                        </li>
                    </ul>
                </li>

                <li class="dropdown"><a href="#">Góc phụ huynh<i class="fa fa-angle-down"></i></a>
                    <ul role="menu" class="sub-menu">
                        <li {{ (Request::is('aboutus') ? 'class=active' : '') }}>
                            <a href="/blog">Hoạt động của trường</a>
                        </li>
                        <li {{ (Request::is('aboutus2') ? 'class=active' : '') }}>
                            <a href="/meeting">Họp phụ huynh</a>
                        </li>
                        <li {{ (Request::is('aboutus2') ? 'class=active' : '') }}>
                            <a href="/stream_videos">Theo dõi video</a>
                        </li>
                        <li {{ (Request::is('aboutus2') ? 'class=active' : '') }}>
                            <a href="/teach_schedule">Xem thời khóa biểu</a>
                        </li>
                    </ul>
                </li>
                <li><a href="/coming-soon">Tuyển sinh</a></li>
                <li {{ (Request::is('contact') ? 'class=active' : '') }}>
                    <a href="/contact">Liên hệ</a>
                </li>
                @if(!Auth::check())
                    <li data-toggle="modal" data-target="#login-modal">
                        <a href="#">Đăng nhập</a>
                    </li>
                @else
                    <li>
                        <a href="{{ route("frontend.logout") }}">Đăng xuất</a>
                    </li>
                @endif
            </ul>
        </div>
        <div class="search">
            <form role="form">
                <i class="fa fa-search"></i>
                <div class="field-toggle">
                    <input type="text" class="search-form" autocomplete="off" placeholder="Search">
                </div>
            </form>
        </div>
    </div>
</div>
