@if (session('status'))
    @if (session('status')=="success")
        <div class="alert alert-success">
            Congrats! Everything was fine
        </div>
    @else
        <div class="alert alert-error">
            Oops! Something went wrong
        </div>
    @endif
@endif

<!-- Modal -->
<div class="modal fade form-login login-modal shadow " id="loginModal" role="dialog">
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
                    <p class="fs-25 fw-500">
                        Login
                    </p>
                </div>
                <div class="text-center login-text-padding white-color-text">
                    <p class="login-p-margin">
                        If you are not registered please click on the signup below and register yourself
                    </p>
                </div>
                <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                    {{csrf_field()}}
                    <div class="form-group s-group">
                        <input type="email" class="form-control underlined" name="email"  placeholder="Your email address" required>
                        @if ($errors->has('email'))
                            <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group s-group">
                        <input type="password" class="form-control underlined" name="password"  placeholder="Your password" required>

                        @if ($errors->has('password'))
                            <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif
                    </div>
                    <div class="checkbox paddiing-bottom">
                        <label class="checbox-margin">
                            <input type="checkbox" value="">
                            <span class="cr"><i class="cr-icon fa fa-check color-pech"></i></span>
                            <span class="white-color-text">Remember Me</span>
                        </label>
                    </div>
                    <div class="form-group s-group m-top-20">
                        <button type="submit" class="btn btn-block btn-primary login-btn">Login</button>
                    </div>





                </form>
                <div class="forgot-pass text-center border-b">
                              <span class="white-color-text">Forgot your
                               <a href="" class="color-pech"  data-dismiss="modal"  data-toggle="modal" data-target="#Forgot_Passowrd-tab"  >Password</a></span>
                </div>
                <div class="forgot-pass text-center p-t-30 ">
                    <a href="" class="white-color-text account"  data-dismiss="modal"  data-toggle="modal"  data-target="#Register-modal">Don't have an account? <span class="color-pech"> Sign up </span></a>
                </div>
            </div>
            <!-- <div class="modal-footer">
            </div> -->
        </div>
    </div>
</div>


<!-- forget pass modal start-->

<div class="modal fade form-login login-modal shadow " id="Forgot_Passowrd-tab" role="dialog">
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
                        FORGOT PASSWORD
                    </p>
                </div>
                <div class="text-center login-text-padding white-color-text">
                    <p>
                        Provide your email address below and we will send your password within the next few minutes.
                    </p>
                </div>
                <form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
                    {{ csrf_field() }}

                    <div class="form-group s-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <input type="email" class="form-control underlined" name="email"  placeholder="Enter email address" required="">


                        @if ($errors->has('email'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                        @endif
                    </div>
                    <div class="form-group s-group">
                        <button type="submit" class="btn btn-block btn-primary login-btn">Send Email Verification</button>
                    </div>
                </form>
                <div class="forgot-pass text-center p-t-30 ">
                    <a class="white-color-text" role="presentation" data-toggle="modal" data-dismiss="modal"   data-target="#Register-modal"aria-controls="Register-modal" role="tab" data-toggle="tab">Don't have an account? <span class="color-pech"> Sign up </span></a>
                </div>
            </div>
            <!-- <div class="modal-footer">
            </div> -->
        </div>
    </div>
</div>

<!-- forget pass modal end-->

<!-- register modal start -->

<div class="modal fade form-login login-modal shadow " id="Register-modal" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <!-- <h4 class="modal-title">Modal Header</h4> -->
        <div class="modal-content loginModal modal-bg">
            <div class="btn-close">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body login-modal-padding">
                <div class="modal-img">
                    <img src="img/logo.png">
                </div>
                <div class="text-center login-heading-padding white-color-text">
                    <p class="font-size-25">
                        SIGN UP
                    </p>
                </div>
                <div class="text-center login-text-padding white-color-text">
                    <p>
                        By registering yourself on DDKKOIN, you have to agree upon the Terms and Conditions.
                    </p>
                </div>
                <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                    {{ csrf_field() }}

                    <div class="form-group s-group{{ $errors->has('name') ? ' has-error' : '' }}">

                        <input type="text" class="form-control underlined" name="name" placeholder="Enter name" required>
                            @if ($errors->has('name'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                            @endif

                    </div>
                    <div class="form-group s-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <input type="email" class="form-control underlined" name="email" placeholder="Email" required="">
                        @if ($errors->has('email'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                        @endif
                    </div>
                    <div class="form-group s-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <input type="password" class="form-control underlined" name="password"  placeholder="Password" required="">

                        @if ($errors->has('password'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif
                    </div>
                    <div class="form-group s-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                        <input type="password" class="form-control underlined" name="password_confirmation"  placeholder="Retype Password" required="">
                        @if ($errors->has('password_confirmation'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password_confirmation') }}</strong>
                            </span>
                        @endif

                    </div>
                    <div class="form-group s-group">
                        <button type="submit" class="btn btn-block btn-primary login-btn">Sign up</button>
                    </div>
                </form>
            </div>
            <!-- <div class="modal-footer">
            </div> -->
        </div>
    </div>
</div>
<!-- register modal end -->


