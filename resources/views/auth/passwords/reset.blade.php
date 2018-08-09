@extends('layouts.app')

@section('content')

    {{--<div class="col-md-9 col-lg-9 col-sm-8 col-xs-12 comments-padding" style="    margin-bottom: 140px;">--}}
    {{--<div class="row">--}}

    {{--<div class="panel panel-default">--}}
    {{--<div class="panel-heading">Reset Password</div>--}}

    {{--<div class="panel-body">--}}
    {{--<form class="form-horizontal" method="POST" action="{{ route('password.request') }}">--}}
    {{--{{ csrf_field() }}--}}

    {{--<input type="hidden" name="token" value="{{ $token }}">--}}

    {{--<div class="form-group s-group{{ $errors->has('email') ? ' has-error' : '' }}" style="width: 100%">--}}
    {{--<label for="email" class="col-md-4 control-label">E-Mail Address</label>--}}

    {{--<div class="col-md-6">--}}
    {{--<input id="email" type="email" class="form-control" name="email" value="{{ $email or old('email') }}" required autofocus>--}}

    {{--@if ($errors->has('email'))--}}
    {{--<span class="help-block">--}}
    {{--<strong>{{ $errors->first('email') }}</strong>--}}
    {{--</span>--}}
    {{--@endif--}}
    {{--</div>--}}
    {{--</div>--}}

    {{--<div class="form-group s-group{{ $errors->has('password') ? ' has-error' : '' }}" style="width: 100%">--}}
    {{--<label for="password" class="col-md-4 control-label">Password</label>--}}

    {{--<div class="col-md-6">--}}
    {{--<input id="password" type="password" class="form-control" name="password" required>--}}

    {{--@if ($errors->has('password'))--}}
    {{--<span class="help-block">--}}
    {{--<strong>{{ $errors->first('password') }}</strong>--}}
    {{--</span>--}}
    {{--@endif--}}
    {{--</div>--}}
    {{--</div>--}}

    {{--<div class="form-group s-group{{$errors->has('password_confirmation') ? ' has-error' : '' }}" style="width: 100%">--}}
    {{--<label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>--}}
    {{--<div class="col-md-6">--}}
    {{--<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>--}}

    {{--@if ($errors->has('password_confirmation'))--}}
    {{--<span class="help-block">--}}
    {{--<strong>{{ $errors->first('password_confirmation') }}</strong>--}}
    {{--</span>--}}
    {{--@endif--}}
    {{--</div>--}}
    {{--</div>--}}

    {{--<div class="form-group s-group" style="width: 100%">--}}
    {{--<div class="col-md-6 col-md-offset-4">--}}
    {{--<button type="submit" class="btn btn-primary">--}}
    {{--Reset Password--}}
    {{--</button>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</form>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}




    {{--<!-- reset password modal start -->--}}

    <div class="modal fade form-login login-modal shadow " id="reset-password" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <!-- <h4 class="modal-title">Modal Header</h4> -->
            <div class="modal-content loginModal modal-bg">
                <div class="btn-close">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body login-modal-padding">
                    <div class="modal-img">
                        <img src="/img/logo.png">
                    </div>
                    <div class="text-center login-heading-padding white-color-text">
                        <p class="font-size-25">
                            Reset Password
                        </p>
                    </div>
                    <div class="text-center login-text-padding white-color-text">
                        <p>
                            You can reset your password here
                        </p>
                    </div>
                    <form class="form-horizontal" method="POST" action="{{ route('password.request') }}">
                        {{ csrf_field() }}

                        <input type="hidden" name="token" value="{{ $token }}">


                        <div class="form-group s-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <input type="email" class="form-control underlined" name="email" placeholder="Email" required="">
                            @if ($errors->has('email'))
                                <span class="help-block">
    <strong>{{ $errors->first('email') }}</strong>
    </span>
                            @endif
                        </div>
                        <div class="form-group s-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <input type="password" class="form-control underlined" name="password" placeholder="Password" required="">

                            @if ($errors->has('password'))
                                <span class="help-block">
    <strong>{{ $errors->first('password') }}</strong>
    </span>
                            @endif
                        </div>
                        <div class="form-group s-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <input type="password" class="form-control underlined" name="password_confirmation" placeholder="Retype Password" required="">
                            @if ($errors->has('password_confirmation'))
                                <span class="help-block">
    <strong>{{ $errors->first('password_confirmation') }}</strong>
    </span>
                            @endif

                        </div>
                        <div class="form-group s-group">
                            <button type="submit" class="btn btn-block btn-primary login-btn">Reset Password</button>
                        </div>
                    </form>
                </div>
                <!-- <div class="modal-footer">
                </div> -->
            </div>
        </div>
    </div>
    {{--<!-- reset password modal end -->--}}


@endsection


@section('js')
    <script>
        $(document).ready(function () {
            $('#reset-password').modal('show');
        });
    </script>
@endsection

