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
@yield('content')

@include('frontend.partials.script')
@yield('inline-script')
</body>
</html>
