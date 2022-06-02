<!DOCTYPE html>
<html dir="rtl" lang="ar">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" type="image/x-icon" href="{{ asset('site/images/favicon.ico') }}">

    @yield('meta-tags')


    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Poppins:300,400,500,600,700|PT+Serif:400,400i&amp;display=swap" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset('site/css/bootstrap-rtl.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('site/css/style.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('site/css/style-rtl.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('site/css/swiper.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('site/css/dark.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('site/css/font-icons.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('site/css/animate.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('site/css/magnific-popup.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('site/css/custom.css') }}" type="text/css" />
    @yield('header-css')


    <title>@yield('title')</title>
</head>
<body class="stretched rtl">

<div id="wrapper" class="clearfix">

    @include('web.site.includes.header')

    @include('web.site.includes.slider')

    @yield('content')

    @include('web.site.includes.footer')

</div>

<div id="gotoTop" class="icon-angle-up"></div>


<script src="{{ asset('site/js/jquery.js') }}"></script>
<script src="{{ asset('site/js/plugins.min.js') }}"></script>

<script src="{{ asset('site/js/functions.js') }}"></script>
@yield('footer-js')

</body>

</html>
