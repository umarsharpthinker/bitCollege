
@extends('layouts.master')

@section('title')
    Video Chat
@stop

@section('content')



    <div class="wrap-fluid" >
        <div class="container-fluid paper-wrap bevel tlbr">
            {{--Project View Area! code Goes Here!--}}


<div class="container" onload="init_page()">
    <div class="row">

        <h2 id="notifyFlash" class="text-danger"></h2>

        <div class="col-sm-7 text-center">
            <h2>Two Way Video Chat</h2>
        </div>
        <div class="col-sm-7">
            {{--<form class="form-horizontal" role="form" style="margin-top: 10px">--}}
                {{--<div id="connForm" class="form-group">--}}
                    {{--<label class="col-sm-2 control-label">WCS URL</label>--}}
                    {{--<div class="col-sm-4">--}}
                        {{--<input type="text" id="url" value="ws://89.40.127.98:8080" class="form-control url"  />--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="form-group" id="loginForm">--}}
                    {{--<label class="col-sm-2  control-label">Login</label>--}}
                    {{--<div class="col-sm-4">--}}
                        {{--<input type="text" id="login" value="{{\Illuminate\Support\Facades\Auth::user()->email}}" class="form-control login" >--}}
                    {{--</div>--}}
                    {{--<div class="col-sm-4 text-right">--}}
                        {{--<button type="button" class="btn btn-default joinBtn">Join</button>--}}
                        {{--<label id="status"></label>--}}
                    {{--</div>--}}
                    {{--<div class="col-sm-4 text-left text-danger">--}}
                        {{--<div id="failedInfo"></div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</form>--}}
        </div>
        <div class="col-sm-7">
            <div style="width: 642px; height: 482px;">
                <div class="fp-remoteVideo">
                    <div id="participant1Display" class="display"></div>
                </div>
                <div class="fp-localVideo">
                    <div id="localDisplay" class="display"></div>
                </div>
            </div>
            <div id="participant1Name" class="text-center text-muted">NONE</div>
            <div class="text-center" style="margin-top: 20px">
                <div id="participant1Status"></div>
            </div>
        </div>

        <div class="col-sm-7">
            <div class="col-sm-6">
                <button id="localAudioToggle" type="button" class="btn btn-default">Mute A</button>
                <button id="localVideoToggle" type="button" class="btn btn-default">Mute V</button>
            </div>
        </div>
        <div class="col-sm-7">
            <div class="col-sm-6" style="margin: 5px auto auto auto;">
                <button id="localStopBtn" type="button" class="btn btn-default">Publish</button>
                <label id="localStatus"></label>
            </div>
        </div>
        <div class="col-sm-7" style="margin-top: 20px">

            <div class="form-group">
                {{--<div id="chat" style="overflow-y: scroll; height: 100px;" class="text-left form-control"></div>--}}
                <div  style="overflow-y: scroll; height: 100px;" class="text-left form-control webChatArea"></div>
            </div>
        </div>
        <div class="col-sm-7">
            <div class="form-group">
                {{--<textarea id="message" class="form-control" rows="1" style="resize: none;"></textarea>--}}
                <textarea class="form-control webChatMessage" rows="1" style="resize: none;"></textarea>
            </div>
        </div>
        <div class="col-sm-7">
            <div class="pull-right">
                {{--<button id="sendMessageBtn" type="button" class="btn btn-default">Send</button>--}}

                <button type="button" class="btn btn-default">Send</button>
            </div>
        </div>

        <div class="col-sm-7" style="margin-top: 20px">
            <span class="text-muted text-left">Invite</span>
            <div id="inviteAddress" class="text-muted text-center" style="border: 1px solid">Not connected</div>
        </div>
    </div>
    <div class="row" style="margin-top: 70px;">
        <div class="col-sm-4">
        <a href="https://play.google.com/store/apps/details?id=com.flashphoner.wcsexample.video_chat"><img src="{{asset('images/check.jpg')}}" title="Google Play" alt="Google Play"></a>
        </div>

</div>
</div>
            {{--Project View Area Close! Code Should be write Between These Comments!--}}
        </div>
    </div>

    <script>
        $('.scrollHandler').scrollTop(100000000000000000);
    </script>
@endsection