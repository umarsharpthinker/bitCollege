@extends('layouts.master')

@section('title')
    Apricot v 1.3
@stop

@section('content')

    <!--  PAPER WRAP -->
    <div class="wrap-fluid">
        <div class="container-fluid paper-wrap bevel tlbr">





            <!-- CONTENT -->
            <!--TITLE -->
            <div class="row">
                <div id="paper-top">
                    <div class="col-sm-3">
                        <h2 class="tittle-content-header">
                            <i class="icon-map"></i> 
                            <span>Advance Form
                            </span>
                        </h2>

                    </div>

                    <div class="col-sm-7">
                        <div class="devider-vertical visible-lg"></div>
                        <div class="tittle-middle-header">

                            <div class="alert">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                <span class="tittle-alert entypo-info-circled"></span>
                                Welcome back,&nbsp;
                                <strong>Dave mattew!</strong>&nbsp;&nbsp;Your last sig in at Yesterday, 16:54 PM
                            </div>


                        </div>

                    </div>
                    <div class="col-sm-2">
                        <div class="devider-vertical visible-lg"></div>
                        <div class="btn-group btn-wigdet pull-right visible-lg">
                            <div class="btn">
                                Widget</div>
                            <button data-toggle="dropdown" class="btn dropdown-toggle" type="button">
                                <span class="caret"></span>
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <ul role="menu" class="dropdown-menu">
                                <li>
                                    <a href="#">
                                        <span class="entypo-plus-circled margin-iconic"></span>Add New</a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="entypo-heart margin-iconic"></span>Favorite</a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="entypo-cog margin-iconic"></span>Setting</a>
                                </li>
                            </ul>
                        </div>


                    </div>
                </div>
            </div>
            <!--/ TITLE -->

            <!-- BREADCRUMB -->
            <ul id="breadcrumb">
                <li>
                    <span class="entypo-home"></span>
                </li>
                <li><i class="fa fa-lg fa-angle-right"></i>
                </li>
                <li><a href="#" title="Sample page 1">Form</a>
                </li>
                <li><i class="fa fa-lg fa-angle-right"></i>
                </li>
                <li><a href="#" title="Sample page 1">Advance Form</a>
                </li>
                <li class="pull-right">
                    <div class="input-group input-widget">

                        <input style="border-radius:15px" type="text" placeholder="Search..." class="form-control">
                    </div>
                </li>
            </ul>

            <!-- END OF BREADCRUMB -->



            <div class="content-wrap">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="nest" id="validationClose">
                            <div class="title-alt">
                                <h6>
                                    Form Validation</h6>
                                <div class="titleClose">
                                    <a class="gone" href="#validationClose">
                                        <span class="entypo-cancel"></span>
                                    </a>
                                </div>
                                <div class="titleToggle">
                                    <a class="nav-toggle-alt" href="#validation">
                                        <span class="entypo-up-open"></span>
                                    </a>
                                </div>

                            </div>



                            <div class="body-nest" id="validation">
                                <div class="form_center">

                                    <form action="contact" id="contact-form" class="form-horizontal">
                                        <fieldset>


                                            <div class="control-group">
                                                <label class="control-label" for="name">Your Name</label>
                                                <div class="controls">
                                                    <input type="text" class="form-control" name="name" id="name">
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label class="control-label" for="email">Email Address</label>
                                                <div class="controls">
                                                    <input type="text" class="form-control" name="email" id="email">
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label class="control-label" for="subject">Subject</label>
                                                <div class="controls">
                                                    <input type="text" class="form-control" name="subject" id="subject">
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label class="control-label" for="message">Your Message</label>
                                                <div class="controls">
                                                    <textarea class="form-control" name="message" id="message" rows="3"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-actions" style="margin:20px 0 0 0;">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                                <button type="reset" class="btn">Cancel</button>
                                            </div>
                                        </fieldset>
                                    </form>

                                </div>
                            </div>



                        </div>
                    </div>
                </div>
            </div>




            <div class="content-wrap">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="nest" id="maskedClose">
                            <div class="title-alt">
                                <h6>
                                    Masked Input</h6>
                                <div class="titleClose">
                                    <a class="gone" href="#maskedClose">
                                        <span class="entypo-cancel"></span>
                                    </a>
                                </div>
                                <div class="titleToggle">
                                    <a class="nav-toggle-alt" href="#masked">
                                        <span class="entypo-up-open"></span>
                                    </a>
                                </div>

                            </div>



                            <div class="body-nest" id="masked">
                                <div class="form_center">
                                    <div class="well">
                                        <div class="input-group ">
                                            <span class="input-group-addon btn-success"><i class="fa fa-calendar"></i>
                                            </span>
                                            <input type="text" class="form-control" id="date">
                                            <span class="input-group-addon ">99/99/9999</span>
                                        </div>
                                    </div>

                                    <div class="well">
                                        <div class="input-group ">
                                            <span class="input-group-addon btn-success"><i class="fa fa-phone-square"></i>
                                            </span>
                                            <input type="text" class="form-control" id="phone">
                                            <span class="input-group-addon ">eg.(021) 751-2789</span>
                                        </div>
                                    </div>

                                    <div class="well">
                                        <div class="input-group ">
                                            <span class="input-group-addon btn-success"><i class="fa fa-money"></i>
                                            </span>
                                            <input type="text" class="form-control" id="money">
                                            <span class="input-group-addon ">eg.20.000.000</span>
                                        </div>
                                    </div>
                                    <div class="well">
                                        <div class="input-group ">
                                            <span class="input-group-addon btn-success"><i class="fa fa-phone-square"></i>
                                            </span>
                                            <input type="text" class="form-control" id="ssn">
                                            <span class="input-group-addon ">eg.99-AAA-9999</span>
                                        </div>
                                    </div>




                                </div>
                            </div>



                        </div>
                    </div>
                </div>
            </div>


            <div class="content-wrap">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="nest" id="labelClose">
                            <div class="title-alt">
                                <h6>
                                    Date Picker</h6>
                                <div class="titleClose">
                                    <a class="gone" href="#dateClose">
                                        <span class="entypo-cancel"></span>
                                    </a>
                                </div>
                                <div class="titleToggle">
                                    <a class="nav-toggle-alt" href="#date_1">
                                        <span class="entypo-up-open"></span>
                                    </a>
                                </div>

                            </div>



                            <div class="body-nest" id="date_1">
                                <div class="form_center">
                                    <p>Attached to a field with the format specified via options.</p>

                                    <div class="well">
                                        <input type="text" class="form-control" id="dp1" value="02-16-2012">
                                    </div>
                                    <p>Start with years viewMode.</p>


                                    <div class="well">
                                        <div data-date-viewmode="years" data-date-format="dd-mm-yyyy" data-date="12-02-2012" id="dpYears" class="input-group date">

                                            <input type="text" value="12-02-2012" class="form-control" id="ssn2">
                                            <span class="input-group-addon add-on entypo-calendar "></span>
                                        </div>

                                    </div>
                                    <p>Default behavior in pt-BR, picks date/time with fast masked input typing (need only to type the numbers, the static part of the mask is inserted automatically if missing) or via the popup widget, which supports year, month, day, hour and minute views:</p>

                                    <div class="well">
                                        <div id="datetimepicker1" class="input-group date">
                                            <input class="form-control" data-format="dd/MM/yyyy hh:mm:ss" type="text">

                                            <span class="input-group-addon add-on">
                                                <i style="font-style:normal;" data-time-icon="entypo-clock" data-date-icon="entypo-calendar">
      </i>
                                            </span>
                                        </div>
                                    </div>


                                </div>
                            </div>



                        </div>
                    </div>
                </div>
            </div>

            <div class="content-wrap">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="nest" id="timeClose">
                            <div class="title-alt">
                                <h6>
                                    Time picker</h6>
                                <div class="titleClose">
                                    <a class="gone" href="#timeClose">
                                        <span class="entypo-cancel"></span>
                                    </a>
                                </div>
                                <div class="titleToggle">
                                    <a class="nav-toggle-alt" href="#time">
                                        <span class="entypo-up-open"></span>
                                    </a>
                                </div>

                            </div>



                            <div class="body-nest" id="time">
                                <div class="form_center">



                                    <div class="well">
                                        <div class="input-group bootstrap-timepicker">

                                            <input id="timepicker1" type="text" class="form-control">
                                            <span class="input-group-addon add-on entypo-clock"></span>
                                        </div>

                                    </div>



                                    <div class="well">
                                        <input id="t1" value="2:30 PM" data-format="hh:mm A" class="form-control" type="text">
                                    </div>




                                    <div class="well">
                                        <div class="input-group">
                                            <input id="t2" value="14:30" class="form-control" readonly="" type="text">
                                            <span style="cursor:pointer;" id="toggle-btn" class="input-group-addon add-on entypo-calendar "></span>
                                        </div>

                                    </div>



                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="content-wrap">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="nest" id="colorClose">
                            <div class="title-alt">
                                <h6>
                                    Color picker</h6>
                                <div class="titleClose">
                                    <a class="gone" href="#colorClose">
                                        <span class="entypo-cancel"></span>
                                    </a>
                                </div>
                                <div class="titleToggle">
                                    <a class="nav-toggle-alt" href="#color">
                                        <span class="entypo-up-open"></span>
                                    </a>
                                </div>

                            </div>



                            <div class="body-nest" id="color">
                                <div class="form_center">

                                    <div class="well">
                                        <input type="text" class="form-control" value="#8fff00" id="cp1">
                                    </div>

                                    <div class="well">
                                        <input type="text" class="form-control" value="rgb(0,194,255,0.78)" id="cp2" data-color-format="rgba">
                                    </div>

                                    <div class="well">
                                        <div class="input-group colorpicker-component bscp" data-color="rgb(255, 146, 180)" data-color-format="rgb" id="cp3">
                                            <input type="text" value="" readonly class="form-control" />
                                            <span class="input-group-addon"><i style="background-color: rgb(255, 146, 180)"></i>
                                            </span>
                                        </div>
                                    </div>

                                    <div class="well">
                                        <a href="#" class="btn btn-info" id="cp4" data-color-format="hex" data-color="rgb(255, 255, 255)">Change background color</a>

                                    </div>
                                    <hr>

                                </div>


                            </div>



                        </div>
                    </div>
                </div>
            </div>



            <div class="content-wrap">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="nest" id="tagInputClose">
                            <div class="title-alt">
                                <h6>
                                    Tag Input</h6>
                                <div class="titleClose">
                                    <a class="gone" href="#tagInputClose">
                                        <span class="entypo-cancel"></span>
                                    </a>
                                </div>
                                <div class="titleToggle">
                                    <a class="nav-toggle-alt" href="#tagInput">
                                        <span class="entypo-up-open"></span>
                                    </a>
                                </div>

                            </div>



                            <div class="body-nest" id="tagInput">
                                <div class="form_center">

                                    <div class="well">

                                        <label>Defaults:</label>
                                        <input id="tags_1" type="text" class="form-control tags" value="foo,bar,baz,roffle" />
                                    </div>

                                    <div class="well">
                                        <label>Technologies: (Programming languages in yellow)</label>
                                        <input id="tags_2" type="text" class="tags" value="php,ios,javascript,ruby,android,kindle" />

                                    </div>



                                </div>


                            </div>



                        </div>
                    </div>
                </div>
            </div>
            <!-- /END OF CONTENT -->



            <!-- FOOTER -->
            <div class="footer-space"></div>
            <div id="footer">
                <div class="devider-footer-left"></div>
                <div class="time">
                    <p id="spanDate"></p>
                    <p id="clock"></p>
                </div>
                <div class="copyright">Make with Love
                    <span class="entypo-heart"></span>2014 <a href="http://gamatechno.com">Thesmile</a> All Rights Reserved</div>
                <div class="devider-footer"></div>

            </div>
            <!-- / END OF FOOTER -->


        </div>
    </div>
    <!--  END OF PAPER WRAP -->
    <!-- RIGHT SLIDER CONTENT -->
    <div class="sb-slidebar sb-right">
        <div class="right-wrapper">
            <div class="row">
                <h3>
                    <span><i class="entypo-gauge"></i>&nbsp;&nbsp;MAIN WIDGET</span>
                </h3>
                <div class="col-sm-12">

                    <div class="widget-knob">
                        <span class="chart" style="position:relative" data-percent="86">
                            <span class="percent"></span>
                        </span>
                    </div>
                    <div class="widget-def">
                        <b>Distance traveled</b>
                        <br>
                        <i>86% to the check point</i>
                    </div>

                    <div class="widget-knob">
                        <span class="speed-car" style="position:relative" data-percent="60">
                            <span class="percent2"></span>
                        </span>
                    </div>
                    <div class="widget-def">
                        <b>The average speed</b>
                        <br>
                        <i>30KM/h avarage speed</i>
                    </div>


                    <div class="widget-knob">
                        <span class="overall" style="position:relative" data-percent="25">
                            <span class="percent3"></span>
                        </span>
                    </div>
                    <div class="widget-def">
                        <b>Overall result</b>
                        <br>
                        <i>30KM/h avarage Result</i>
                    </div>
                </div>
            </div>
        </div>

        <div style="margin-top:0;" class="right-wrapper">
            <div class="row">
                <h3>
                    <span><i class="entypo-chat"></i>&nbsp;&nbsp;CHAT</span>
                </h3>
                <div class="col-sm-12">
                    <span class="label label-warning label-chat">Online</span>
                    <ul class="chat">
                        <li>
                            <a href="#">
                                <span>
                                    <img alt="" class="img-chat img-circle" src="http://api.randomuser.me/portraits/thumb/men/20.jpg">
                                </span><b>Dave Junior</b>
                                <br><i>Last seen : 08:00 PM</i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span>
                                    <img alt="" class="img-chat img-circle" src="http://api.randomuser.me/portraits/thumb/men/21.jpg">
                                </span><b>Kenneth Lucas</b>
                                <br><i>Last seen : 07:21 PM</i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span>
                                    <img alt="" class="img-chat img-circle" src="http://api.randomuser.me/portraits/thumb/men/22.jpg">
                                </span><b>Heidi Perez</b>
                                <br><i>Last seen : 05:43 PM</i>
                            </a>
                        </li>


                    </ul>

                    <span class="label label-chat">Offline</span>
                    <ul class="chat">
                        <li>
                            <a href="#">
                                <span>
                                    <img alt="" class="img-chat img-offline img-circle" src="http://api.randomuser.me/portraits/thumb/men/23.jpg">
                                </span><b>Dave Junior</b>
                                <br><i>Last seen : 08:00 PM</i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span>
                                    <img alt="" class="img-chat img-offline img-circle" src="http://api.randomuser.me/portraits/thumb/women/24.jpg">
                                </span><b>Kenneth Lucas</b>
                                <br><i>Last seen : 07:21 PM</i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span>
                                    <img alt="" class="img-chat img-offline img-circle" src="http://api.randomuser.me/portraits/thumb/men/25.jpg">
                                </span><b>Heidi Perez</b>
                                <br><i>Last seen : 05:43 PM</i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span>
                                    <img alt="" class="img-chat img-offline img-circle" src="http://api.randomuser.me/portraits/thumb/women/25.jpg">
                                </span><b>Kenneth Lucas</b>
                                <br><i>Last seen : 07:21 PM</i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span>
                                    <img alt="" class="img-chat img-offline img-circle" src="http://api.randomuser.me/portraits/thumb/men/26.jpg">
                                </span><b>Heidi Perez</b>
                                <br><i>Last seen : 05:43 PM</i>
                            </a>
                        </li>


                    </ul>
                </div>
            </div>
        </div>
    </div>


    <script type="text/javascript" src="{{asset('assets/js/tableScript/advanceTable.js')}}"></script>


@endsection