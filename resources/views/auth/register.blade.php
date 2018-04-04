<!DOCTYPE html>
<html lang="en">

<head>
    @include('includes.pfaCssHeader')
    <link rel="stylesheet" href="{{asset('assets/css/signin.css')}}">
</head>

<body class="loginBody">

<div id="preloader">
    <div id="status">&nbsp;</div>
</div>
<div class="container-fluid layer">



    <div class="" id="login-wrapper">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div id="logo-login">
                        <h5 style="text-align: center; font-size: 30px">Sign Up</h5>
                </div>
            </div>

        </div>

        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="account-box">

                    <form role="form" action="{{route('doSignUp')}}" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="inputUsernameEmail">First Name</label>
                            <input name="fname" type="text" {{ old('fname') }} id="inputUsernameEmail" class="costom-control form-control">
                            @if ($errors->has('fname'))
                                <span class="invalid-feedback" style="float: right; color: red">
                            <strong>{{ $errors->first('fname') }}</strong>
                            </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="inputUsernameEmail">Last Name</label>
                            <input name="lname" type="text" {{ old('lname') }} id="inputUsernameEmail" class="costom-control form-control">
                            @if ($errors->has('lname'))
                                <span class="invalid-feedback" style="float: right; color: red">
                            <strong>{{ $errors->first('lname') }}</strong>
                            </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="inputUsernameEmail">Email</label>
                            <input name="email" type="text" {{ old('email') }} id="inputUsernameEmail" class="costom-control form-control">
                            @if ($errors->has('email'))
                                <span class="invalid-feedback" style="float: right; color: red">
                            <strong>{{ $errors->first('email') }}</strong>
                            </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="inputUsernameEmail">Username</label>
                            <input name="username" type="text" {{ old('email') }} id="inputUsernameEmail" class="costom-control form-control">
                            @if ($errors->has('username'))
                                <span class="invalid-feedback" style="float: right; color: red">
                            <strong>{{ $errors->first('username') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group">

                            <label for="inputPassword">New Password</label>
                            <input name="password" type="password" id="inputPassword" class="costom-control form-control">
                            @if ($errors->has('password'))
                                <span class="invalid-feedback" style="float: right; color: red">
                            <strong>{{ $errors->first('password') }}</strong>
                            </span><br>
                            @endif

                        </div>

                        <div class="form-group">

                            <label for="inputPassword">Confirm Password</label>
                            <input name="password_confirmation" type="password" id="inputPassword" class="costom-control form-control">
                            @if ($errors->has('password_confirmation'))
                                <span class="invalid-feedback" style="float: right; color: red">
                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                            </span><br>
                            @endif
                        </div>

                        <div class="form-group ">
                            <div class="row">
<br>
                                    <input type="submit"  class="btn btn-primary btn-block" value="Register" />

                            </div>
                        </div>


                    </form>


                </div>
            </div>
        </div>
    </div>





    <div style="text-align:center;margin:0 auto;">
        <h6 style="color:#fff;">© Copyright BitCollege</h6>
    </div>

</div>
<div id="test1" class="gmap3"></div>



<!--  END OF PAPER WRAP -->





@include('includes.footerScript')
<script type="text/javascript">
    $(function() {

        $("#test1").gmap3({
            marker: {
                latLng: [-7.782893, 110.402645],
                options: {
                    draggable: true
                },
                events: {
                    dragend: function(marker) {
                        $(this).gmap3({
                            getaddress: {
                                latLng: marker.getPosition(),
                                callback: function(results) {
                                    var map = $(this).gmap3("get"),
                                        infowindow = $(this).gmap3({
                                            get: "infowindow"
                                        }),
                                        content = results && results[1] ? results && results[1].formatted_address : "no address";
                                    if (infowindow) {
                                        infowindow.open(map, marker);
                                        infowindow.setContent(content);
                                    } else {
                                        $(this).gmap3({
                                            infowindow: {
                                                anchor: marker,
                                                options: {
                                                    content: content
                                                }
                                            }
                                        });
                                    }
                                }
                            }
                        });
                    }
                }
            },
            map: {
                options: {
                    zoom: 15
                }
            }
        });

    });
</script>

</body>
</html>

















{{--@extends('layouts.app')--}}

{{--@section('content')--}}
{{--<div class="container">--}}
    {{--<div class="row justify-content-center">--}}
        {{--<div class="col-md-8">--}}
            {{--<div class="card">--}}
                {{--<div class="card-header">{{ __('Register') }}</div>--}}

                {{--<div class="card-body">--}}
                    {{--<form method="POST" action="{{ route('register') }}">--}}
                        {{--@csrf--}}

                        {{--<div class="form-group row">--}}
                            {{--<label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="name" type="text" class="costom-control form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>--}}

                                {{--@if ($errors->has('name'))--}}
                                    {{--<span class="invalid-feedback">--}}
                                        {{--<strong>{{ $errors->first('name') }}</strong>--}}
                                    {{--</span>--}}
                                {{--@endif--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group row">--}}
                            {{--<label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="email" type="email" class="costom-control form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>--}}

                                {{--@if ($errors->has('email'))--}}
                                    {{--<span class="invalid-feedback">--}}
                                        {{--<strong>{{ $errors->first('email') }}</strong>--}}
                                    {{--</span>--}}
                                {{--@endif--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group row">--}}
                            {{--<label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="password" type="password" class="costom-control form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>--}}

                                {{--@if ($errors->has('password'))--}}
                                    {{--<span class="invalid-feedback">--}}
                                        {{--<strong>{{ $errors->first('password') }}</strong>--}}
                                    {{--</span>--}}
                                {{--@endif--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group row">--}}
                            {{--<label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="password-confirm" type="password" class="costom-control form-control" name="password_confirmation" required>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group row mb-0">--}}
                            {{--<div class="col-md-6 offset-md-4">--}}
                                {{--<button type="submit" class="btn btn-primary">--}}
                                    {{--{{ __('Register') }}--}}
                                {{--</button>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</form>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}
{{--@endsection--}}
