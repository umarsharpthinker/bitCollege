
<div class="page-chatapi hideit">
{{--{{dd( $userProfileData )}}--}}




    <div class="chat-wrapper">
        
        <h4 class="group-head">Online</h4>
        <ul class="contact-list">
            @if(isset($userProfileData))
            @foreach($userProfileData as $userProfile)
                    @if($userProfile->status == "Active")
            <li class="user-row " id='{{$userProfile->id}}' data-user-id='{{$userProfile->id}}'>
                <button class="joinBtn" style="background: none; border: none;">
                <div class="user-img">
                    <a href="#"><img src="{{asset('assets/img/people-q-c-350-250-7.jpg')}}" alt=""></a>
                </div>
                <div class="user-info">
                    <h4><a href="#">
                            {{$userProfile->full_name}}
                        </a></h4>
                    <span class="status busy" data-status="busy">
                                {{$userProfile->status}}
                    </span>
                </div>
                <div class="user-status busy">
                    <i class="fa fa-circle"></i>
                </div>
                </button>
            </li>

                @endif
            @endforeach
            @endif
        </ul>

        <h4 class="group-head">Offline</h4>
        <ul class="contact-list">
            @if(isset($userProfileData))
                @foreach($userProfileData as $userProfile)
                    @if($userProfile->status == "Inactive")
                        <li class="user-row" id='{{$userProfile->id}}' data-user-id='{{$userProfile->id}}'>
                            <a class="joinBtn">
                        <div class="user-img">
                            <a href="#"><img src="{{asset('assets/img/people-q-c-350-250-7.jpg')}}" alt=""></a>
                        </div>
                        <div class="user-info">
                            <h4><a href="#">
                                    {{$userProfile->full_name}}
                                </a></h4>
                            <span class="status idle" data-status="idle">
                                {{$userProfile->status}}
                    </span>
                        </div>
                        <div class="user-status idle">
                            <i class="fa fa-circle"></i>
                        </div>
                                {{--<input type="hidden" class="form-control" value="ws://89.40.127.98:8080" id="url" />--}}
                                {{--<input type="hidden" value="{{$userProfile->username}}" class="form-control" id="login" />--}}
                            </a>
                    </li>
                    @endif
                @endforeach
            @endif
            <li class="user-row " id='chat_user_11' data-user-id='11'>
                <div class="user-img">
                    <a href="#"><img src="../data/profile/avatar-1.png" alt=""></a>
                </div>
                <div class="user-info">
                    <h4><a href="#">Tanisha Kimbro</a></h4>
                    <span class="status idle" data-status="idle"> Idle</span>
                </div>
                <div class="user-status idle">
                    <i class="fa fa-circle"></i>
                </div>
            </li>
            <li class="user-row " id='chat_user_12' data-user-id='12'>
                <div class="user-img">
                    <a href="#"><img src="../data/profile/avatar-2.png" alt=""></a>
                </div>
                <div class="user-info">
                    <h4><a href="#">Jovita Tisdale</a></h4>
                    <span class="status idle" data-status="idle"> Idle</span>
                </div>
                <div class="user-status idle">
                    <i class="fa fa-circle"></i>
                </div>
            </li>

        </ul>
    </div>

</div>

<div class="chatapi-windows ">

</div>

















{{--<div  id="placeholder" style="width:100%;height:200px; display: none;"></div>--}}
{{--<!-- RIGHT SLIDER CONTENT -->--}}
{{--<?php $data = []; ?>--}}
{{--<div class="sb-slidebar sb-right">--}}
    {{--<div class="right-wrapper">--}}
        {{--<div class="row">--}}

            {{--<h3>--}}
                {{--<span class="col-md-12"><i class="entypo-chat"></i>&nbsp;&nbsp;Live Chat</span>--}}
            {{--</h3>--}}
            {{--<div class="col-sm-12">--}}

                {{--<span class="label label-warning label-chat">Online</span>--}}
                {{--<ul class="chat" style="padding-left: 15px">--}}
                    {{--@foreach($data as $user)--}}
                        {{--@if($user->status == "Active")--}}
                    {{--<span  class="">--}}
                        {{--<li>--}}
                            {{--<a href="#">--}}
                                {{--<span>--}}
                                    {{--<img alt="" class="img-chat img-circle" src="http://api.randomuser.me/portraits/thumb/men/21.jpg">--}}
                                {{--</span><b>{{$user->full_name}}</b>--}}
                                {{--<br><i>{{$user->status}}</i>--}}
                            {{--</a>--}}
                        {{--</li>--}}
                    {{--</span>--}}
                        {{--@endif--}}
                    {{--@endforeach--}}
                {{--</ul>--}}


                {{--<span class="label label-chat">Offline</span>--}}
                {{--<ul class="chat" style="padding-left: 15px">--}}
                    {{--@foreach($data as $user)--}}
                        {{--@if($user->status == "Inactive")--}}
                            {{--<span  class="">--}}
                        {{--<li>--}}
                            {{--<a href="#">--}}
                                {{--<span>--}}
                                    {{--<img alt="" class="img-chat img-circle" src="http://api.randomuser.me/portraits/thumb/men/21.jpg">--}}
                                {{--</span><b>{{$user->full_name}}</b>--}}
                                {{--<br><i>{{$user->status}}</i>--}}
                            {{--</a>--}}
                        {{--</li>--}}
                    {{--</span>--}}
                        {{--@endif--}}
                    {{--@endforeach--}}
                {{--</ul>--}}
            {{--</div>--}}
        {{--</div>--}}
{{--</div>--}}
{{--</div>--}}