<!DOCTYPE html>
<html lang="en">
<head>
    <style>
       .bg{
           background-color: #374F7F;
       }
        .tc{
            color: white;
        }
       .checkmark {
           position: absolute;
           top: 0;
           left: 0;
           height: 25px;
           width: 25px;
           background-color: lightblue;
       }

       /* On mouse-over, add a grey background color */
       .webCheckBox:hover input ~ .checkmark {
           background-color: #ccc;
       }

       /* When the checkbox is checked, add a blue background */
       .webCheckBox input:checked ~ .checkmark {
           background-color:  green;
       }

       /* Create the checkmark/indicator (hidden when not checked) */
       .checkmark:after {
           content: "";
           position: absolute;
           display: none;
       }

       /* Show the checkmark when checked */
       .webCheckBox input:checked ~ .checkmark:after {
           display: block;
       }

       /* Style the checkmark/indicator */
       .webCheckBox .checkmark:after {
           left: 9px;
           top: 5px;
           width: 5px;
           height: 10px;
           border: solid white;
           border-width: 0 3px 3px 0;
           -webkit-transform: rotate(45deg);
           -ms-transform: rotate(45deg);
           transform: rotate(45deg);
       }
       .webCheckBox input {
           position: absolute;
           opacity: 0;
       }
    </style>
    {{--Project Css Files Goes Here IN This Included Files--}}
    @include('includes.pfaCssHeader')
</head>
    <body class="themeBody">

<input type="hidden" id="webRtcUrl" value="{{\App\Globals\GlobalsConst::WEB_RTC_URL}}" />
<input type="hidden" id="webRtcLogin" value="@if(\Illuminate\Support\Facades\Auth::check()) {{\Illuminate\Support\Facades\Auth::user()->email}}  @endif" />

                <!--========================================================
                                          Top Nav
                =========================================================-->
                            @include('includes.topNav')

                <!--========================================================
                                        Side Menu
                =========================================================-->
                            @include('includes.sideMenu')

                <!--========================================================
                                          CONTENT
                =========================================================-->
                             @yield('content')

                <!--========================================================
                                          Right Side Menu
                =========================================================-->
                             @include('includes.rightSideMenu')
                                @include('includes.chatRoom')

                <!--========================================================
                                          FOOTER
                =========================================================-->
                            @include('includes.footer')

                <!--========================================================
                                          Scripts
                =========================================================-->
                            @include('includes.footerScript')

                <!--========================================================
                                          Scripts
                =========================================================-->



    </body>
</html>