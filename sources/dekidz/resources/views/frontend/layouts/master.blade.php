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
    <header id="header">
        @include('frontend.partials.header')
    </header>

    <main id="main">
        <section id="content-header">
            @yield('content-header')
        </section>
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
