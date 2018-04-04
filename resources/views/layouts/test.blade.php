{{--<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">--}}
{{--<html lang="en" xmlns="http://www.w3.org/1999/xhtml">--}}
<html>
<head>
    <meta name="csrf-token" content="{{csrf_token()}}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>@yield('title')</title>
    {{--<link rel="icon" type="image/png" href="{{asset('images/iqraFavicon.png')}}" />--}}
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/theme.css')}}" rel="stylesheet" type="text/css" media="all">
    <link href="{{asset(('css/framework.css'))}}" rel="stylesheet">
    <link href="{{asset(('css/w3Css.css'))}}" rel="stylesheet">
    {{--<link href="{{asset(('css/iqraCss.css'))}}" rel="stylesheet">--}}
    <link href="{{asset(('css/article.css'))}}" rel="stylesheet">
    <link href="{{asset(('css/font-awesome.min.css'))}}" rel="stylesheet">
    <link href="{{asset('css/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('css/responsive.css')}}" rel="stylesheet">


</head>
<body>
{{--@include('includes.webTop')--}}
{{--@include('includes.header')--}}
{{--@include('includes.webNav')--}}


{{--@section('redBar')--}}
{{--<div class = "user_logo">--}}
{{--<div class="header_1 wrap_3 color_3 login-bar">Welcome to IQRA Online Quran Network</div>--}}
{{--</div>--}}
{{--@show--}}



<!--========================================================
                                      CONTENT
            =========================================================-->
@yield('content')


<!--========================================================
                                      FOOTER
            =========================================================-->
@include('includes.footer')
{{--<script>--}}
{{--var didScroll;--}}
{{--var lastScrollTop = 0;--}}
{{--var delta = 5;--}}
{{--var navbarHeight = $('header').outerHeight();--}}

{{--$(window).scroll(function(event){--}}
{{--didScroll = true;--}}
{{--});--}}

{{--setInterval(function() {--}}
{{--if (didScroll) {--}}
{{--hasScrolled();--}}
{{--didScroll = false;--}}
{{--}--}}
{{--}, 250);--}}

{{--function hasScrolled() {--}}
{{--var st = $(this).scrollTop();--}}

{{--// Make sure they scroll more than delta--}}
{{--if(Math.abs(lastScrollTop - st) <= delta)--}}
{{--return;--}}

{{--// If they scrolled down and are past the navbar, add class .nav-up.--}}
{{--// This is necessary so you never see what is "behind" the navbar.--}}
{{--if (st > lastScrollTop && st > navbarHeight){--}}
{{--// Scroll Down--}}
{{--$('header').removeClass('nav-down').addClass('nav-up');--}}
{{--} else {--}}

{{--$('header').removeClass('nav-up').addClass('nav-down');--}}
{{--}--}}

{{--lastScrollTop = st;--}}
{{--}--}}
{{--</script>--}}

{{--<script type="application/javascript">--}}
{{--$( document ).ajaxStart(function() {--}}
{{--$( "#loadingContent" ).show();--}}
{{--});--}}
{{--$( document ).ajaxStop(function () {--}}
{{--$( "#loadingContent" ).hide();--}}
{{--})--}}
{{--</script>--}}

{{--<div id="loadingContent" class=""><img src="{{asset('images/loading-pic.gif')}}" alt="loading........"/></div>--}}
{{--<div class="userSuccMSG dN"></div>--}}
</body>
</html>