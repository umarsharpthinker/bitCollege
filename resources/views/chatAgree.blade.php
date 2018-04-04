
@extends('layouts.master')

@section('title')
    Video Chat
@stop

@section('content')

    <!-- For iPhone -->
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/images/apple-touch-icon-114-precomposed.png">
    <!-- For iPhone 4 Retina display -->
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/images/apple-touch-icon-72-precomposed.png">
    <!-- For iPad -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/images/apple-touch-icon-144-precomposed.png">
    <!-- For iPad Retina display -->

    <!-- CORE CSS FRAMEWORK - START -->
    <link href="../assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/plugins/bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/fonts/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" />
    <link href="../assets/css/animate.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/plugins/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" type="text/css" />
    <!-- CORE CSS FRAMEWORK - END -->

    <!-- HEADER SCRIPTS INCLUDED ON THIS PAGE - START -->

    <!-- HEADER SCRIPTS INCLUDED ON THIS PAGE - END -->

    <!-- CORE CSS TEMPLATE - START -->
    <link href="../assets/css/style.css" rel="stylesheet" type="text/css" />
    <link href="../assets/css/responsive.css" rel="stylesheet" type="text/css" />
    <!-- CORE CSS TEMPLATE - END -->


<!-- END HEAD -->

<!-- BEGIN BODY -->

<body class=" chat-open">
<!-- START TOPBAR -->

<!-- END TOPBAR -->
<!-- START CONTAINER -->
<div class="page-container row-fluid container-fluid">
    <div class="page-sidebar fixedscroll collapseit">
    </div>
    <div class="page-chatapi  showit ">


        <div class="chat-wrapper">

            <h4 class="group-head">Favourites</h4>
            <ul class="contact-list">

                <div class="chat-wrapper"><ul>
                        <li class="user-row " id='chat_user_12' data-user-id='12'>
                            <div class="user-img">
                                <a href="#"><img src="../data/profile/avatar-2.png" alt=""></a>
                            </div>
                            <div class="user-info">
                                <h4><a href="#">Shakira Swedan</a></h4>
                                <span class="status idle" data-status="idle"> Idle</span>
                            </div>
                            <div class="user-status idle">
                                <i class="fa fa-circle"></i>
                            </div>
                        </li>

                    </ul>
                </div>
            </ul>
        </div>

    </div>
    <!--Chat Box  -->
    <div class="chatapi-windows  showit ">
        <div class="user-window" id="user-window1" data-user-id="1">
            <div class="controlbar"><img src="../data/profile/avatar-1.png" data-user-id="1" rel="tooltip" alt="" data-animate="animated fadeIn" data-toggle="tooltip" data-original-title="Joge Lucky" data-placement="top" data-color-class="primary"><span class="status available"><i class="fa fa-circle"></i></span><span class="name">Joge Lucky</span><span class="opts"><i class="fa fa-times closeit" data-user-id="1"></i><i class="fa fa-minus minimizeit" data-user-id="1"></i></span></div>
            <div class="chatarea">
                <div class="chatmsg msg_receive"><span class="name">Joge Lucky</span><span class="text">I am really interested in buying bitcoin and other Cryptocurrency</span><span class="ts">12:34</span></div>
                <div class="chatmsg msg_sent"><span class="name">You</span><span class="text">Yes! Thanks for contacting me</span><span class="ts">12:34</span></div>
            </div>
            <div class="typearea">
                <input type="text" data-user-id="1" placeholder="Type &amp; Enter" class="form-control">
            </div>
        </div>
    </div>
    <!--Chat Box End  -->

</div>
<!-- END CONTAINER -->
<!-- LOAD FILES AT PAGE END FOR FASTER LOADING -->



<!-- CORE JS FRAMEWORK - START -->
<script src="../assets/js/jquery-1.11.2.min.js"></script>
<script src="../assets/js/jquery.easing.min.js"></script>
<script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="../assets/plugins/pace/pace.min.js"></script>
<script src="../assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="../assets/plugins/viewport/viewportchecker.js"></script>
<script>
    window.jQuery || document.write('<script src="../assets/js/jquery-1.11.2.min.js"><\/script>');
</script>
<!-- CORE JS FRAMEWORK - END -->

<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START -->
<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->

<!-- CORE TEMPLATE JS - START -->
<script src="../assets/js/scripts.js"></script>
<!-- END CORE TEMPLATE JS - END -->
@endsection
