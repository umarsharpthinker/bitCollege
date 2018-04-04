<meta charset="utf-8">
<title>@yield('title')</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">

{{--Some Jquery Stuff which should be at the top of project--}}
{{--<script type="text/javascript" src="{{asset('assets/js/jquery.min.js')}}" defer="defer"></script>--}}
<script src="{{asset('assets/js/jquery-ui.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/jquery.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery-1.12.0.js')}}"></script>
{{--<script type="text/javascript" src="{{asset('assets/js/jquery.js')}}"></script>--}}
{{--<script src="{{asset('js/jquery-1.12.0.js')}}"></script>--}}
{{--Jquery Included Files Ends Here--}}
{{--costom CSS CHAT UI--}}
{{--<link rel="stylesheet" href="{{asset('css/chatStyle.css')}}">--}}
{{--<link rel="stylesheet" href="{{asset('assets/css/costomChatStyle.css')}}">--}}

{{--End here Chat--}}

<!-- Le styles -->
<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/loader-style.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/js/progress-bar/number-pb.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/media.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/social.css')}}">


{{--Table Css Stuff--}}
<link rel="stylesheet" href="{{asset('assets/js/timepicker/bootstrap-timepicker.css')}}">
<link rel="stylesheet" href="{{asset('assets/js/datepicker/datepicker.css')}}">
<link rel="stylesheet" href="{{asset('assets/js/datepicker/clockface.css')}}">
<link rel="stylesheet" href="{{asset('assets/js/datepicker/bootstrap-datetimepicker.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/js/tag/jquery.tagsinput.css')}}">
<link href="{{asset('assets/js/colorPicker/bootstrap-colorpicker.css')}}" rel="stylesheet">
<link href="{{asset('assets/js/colorPicker/bootstrap-colorpicker.css')}}" rel="stylesheet">
<link href="{{asset('assets/js/validate/validate.css')}}" rel="stylesheet">
<link href="{{asset('assets/js/idealform/css/jquery.idealforms.css')}}" rel="stylesheet">
{{---------------}}

{{--Dynamic Table Stuff--}}
<link href="{{asset('assets/css/dataTable/footable.core.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/css/dataTable/footable.standalone.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/css/dataTable/DT_bootstrap.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/css/dataTable/footable-demos.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/css/dataTable/datatables.responsive.css')}}" rel="stylesheet" type="text/css" />
{{----------------------}}

{{--WEB RTC--}}
<link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
<link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
<link rel="stylesheet" href="{{asset('css/video-chat.css')}}">
<title>Two Way Video Chat</title>
<script type="text/javascript" src="{{asset('js/flashphoner.js')}}"></script>
{{--<script type="text/javascript" src="{{asset('js/jquery-1.12.0.js')}}"></script>--}}
<script type="text/javascript" src="{{asset('js/utils.js')}}"></script>

<script type="text/javascript" src="{{asset('js/conference.js')}}"></script>
<!-- Bootstrap JS -->
<script type="text/javascript" src="{{asset('js/bootstrap.js')}}"></script>
<script>var _participants = 2</script>

{{--Web RTC End--}}

<style type="text/css">
    canvas#canvas4 {
        position: relative;
        top: 20px;
    }
</style>

<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<!-- Fav and touch icons -->
<link rel="shortcut icon" href="{{asset('ico/minus.png')}}">

{{--chat another--}}
<link href="{{asset('css/targetChat.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('css/perfect-scrollbar.css')}}" rel="stylesheet" type="text/css" />