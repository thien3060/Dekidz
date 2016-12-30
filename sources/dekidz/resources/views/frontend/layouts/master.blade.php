<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Dekidz | @yield('title', 'Home')</title>

    @include('frontend.partials.style')
    @yield('inline-style')
</head><!--/head-->

<body>
    <div id="login-modal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <form action="frontend/login" method="POST">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Đăng nhập hệ thống</h4>
                    </div>
                    <div class="modal-body">
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="fa fa-user"></i> Tên đăng nhập:
                            </span>
                            <input type="email" name="email" class="form-control" />
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="fa fa-lock"></i> Mật khẩu:
                            </span>
                            <input type="password" name="password" class="form-control" />
                        </div>
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">Đăng nhập</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Thoát</button>
                    </div>
                </div>
            </form>

        </div>
    </div>

    <header id="header">
        @include('frontend.partials.header')
    </header>

    <main id="main">
        <section id="content-header">
            @yield('content-header')
        </section>
        <div class="container">
            @if (Session::has('flash_message'))
                <div class="alert alert-{{ Session::get('flash_type') }}">{{ Session::get('flash_message') }}</div>
            @endif
        </div>
        @yield('content')
        <section id="content-footer">
            @yield('content-footer')
        </section>
    </main>

    <footer id="footer">
        @include('frontend.partials.footer')
    </footer>

    @include('frontend.partials.script')
    @yield('inline-script')
</body>
</html>
