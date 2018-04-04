<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Cryptonia : Bitcoin & Cryptocurrency trading Dashboard</title>
    <meta content="" name="description" />
    <meta content="" name="author" />


    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" type="text/css" />

    <link href="{{asset('assets/css/font-awesome.css')}}" rel="stylesheet" type="text/css" />

    <link href="{{asset('css/perfect-scrollbar.css')}}" rel="stylesheet" type="text/css" />

    {{--<link href="../assets/plugins/jquery-ui/smoothness/jquery-ui.min.css" rel="stylesheet" type="text/css" media="screen" />--}}

    <link href="{{asset('css/targetChat.css')}}" rel="stylesheet" type="text/css" />
    <script src="{{asset('js/jquery-1.12.0.js')}}"></script>

</head>
<body>
<!--========================================================
                          Top Nav
=========================================================-->
{{--@include('includes.topNav')--}}

<!--========================================================
                                        Side Menu
                =========================================================-->


<!--========================================================
                                          CONTENT
                =========================================================-->
@yield('content')
@include('includes.chatRight')
<!--========================================================
                                          Right Side Menu
                =========================================================-->


<!--========================================================
                                          FOOTER
                =========================================================-->


<!--========================================================
                                          Scripts
                =========================================================-->


<!--========================================================
                                          Scripts
                =========================================================-->
{{--<script src="{{asset('js/jquery-1.12.0.js')}}"></script>--}}

<script src="{{asset('js/bootstrap.js')}}"></script>

<script src="{{asset('assets/js/perfect-scrollbar.min.js')}}"></script>

<script src="{{asset('js/targetChat.js')}}"></script>


</body>
</html>