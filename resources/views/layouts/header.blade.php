<!-- Navbar Start -->

<div class="navbar navbar-fixed-top navbar-bg show-pc">
    <div class="navbar-header">
        <a class="navbar-brand" href="{{ route('DDKCoin') }}"><img src="/img/logo.png" alt="logo"></a>
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
    </div>
    <div class="navbar-collapse collapse">

        <ul class="nav navbar-nav navbar-right m-t-10">

            @if(!\Illuminate\Support\Facades\Auth::check())
                <li class="">
                    <a class="login" href="#loginModal" data-toggle="modal" data-target="#loginModal">Login</a>
                </li>
                <li class="slash-hide">
                    <a class="login disabled" href="">/</a>
                </li>
                <li class="">
                    <a class="login" href="#Register-modal" data-toggle="modal">Register</a>
                </li>
            @else
                @if(auth()->user()->isAdmin())
                    <li class="dropdown">

                        @if(\App\User::whereId(\Illuminate\Support\Facades\Auth::id())->first()->avatar != null)

                            <a class="dropdown-toggle profile-name" data-toggle="dropdown" href="#"><img class="profile-pic" alt="profile" src="/{!! \App\User::whereId(\Illuminate\Support\Facades\Auth::id())->first()->avatar !!}"> {{ Auth::user()->name }}
                                <span class="fa fa-angle-down"> </span>
                            </a>

                            <ul class="dropdown-menu dropdown-color">
                                <li><a class="dropdown-item" href="{{ route('admin') }}"><i class="fa fa-user fa-user-login-1" aria-hidden="true"></i>Admin</a></li>

                                <li><a href="{{ route('logout') }}" class="dropdown-item"><i class="fa fa-sign-out fa-user-login-1" aria-hidden="true"></i>Logout</a></li>
                            </ul>

                        @else
                            <a class="dropdown-toggle profile-name" data-toggle="dropdown" href="#"><img class="profile-pic" alt="profile" src="/storage/avatar/default.jpg"> {{ Auth::user()->name }}
                                <span class="fa fa-angle-down"> </span>
                            </a>


                            <ul class="dropdown-menu dropdown-color">
                                <li><a class="dropdown-item" href="{{ route('admin') }}"><i class="fa fa-user fa-user-login-1" aria-hidden="true"></i>Admin</a></li>

                                <li><a href="{{ route('logout') }}" class="dropdown-item"><i class="fa fa-sign-out fa-user-login-1" aria-hidden="true"></i>Logout</a></li>
                            </ul>

                        @endif
                    </li>
                @else
                    <li class="dropdown">

                        @if(\App\User::whereId(\Illuminate\Support\Facades\Auth::id())->first()->avatar != null)

                            <a class="dropdown-toggle profile-name" data-toggle="dropdown" href="#"><img class="profile-pic" alt="profile" src="/{!! \App\User::whereId(\Illuminate\Support\Facades\Auth::id())->first()->avatar !!}"> {{ Auth::user()->name }}
                                <span class="fa fa-angle-down"> </span>
                            </a>

                            <ul class="dropdown-menu dropdown-color">
                                <li><a class="dropdown-item" href="{{ route('profile') }}"><i class="fa fa-user fa-user-login-1" aria-hidden="true"></i>Profile</a></li>

                                <li><a href="{{ route('logout') }}" class="dropdown-item"><i class="fa fa-sign-out fa-user-login-1" aria-hidden="true"></i>Logout</a></li>
                            </ul>

                        @else
                            <a class="dropdown-toggle profile-name" data-toggle="dropdown" href="#"><img class="profile-pic" alt="profile" src="/storage/avatar/default.jpg"> {{ Auth::user()->name }}
                                <span class="fa fa-angle-down"> </span>
                            </a>


                            <ul class="dropdown-menu dropdown-color">
                                <li><a class="dropdown-item" href="{{ route('profile') }}"><i class="fa fa-user fa-user-login-1" aria-hidden="true"></i>Profile</a></li>

                                <li><a href="{{ route('logout') }}" class="dropdown-item"><i class="fa fa-sign-out fa-user-login-1" aria-hidden="true"></i>Logout</a></li>
                            </ul>

                        @endif
                    </li>
                @endif

                @endif
        </ul>


    </div>
</div>

<!-- Navbar End -->


<!-- Navbar Mobile View -->

<nav class="navbar navbar-fixed-top navbar-bg hide-mobile">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-mobile" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><img src="/img/logo.png" alt="logo"></a>
        </div>
        <div id="navbar-mobile" class="navbar-collapse collapse">


            <ul class="nav navbar-nav navbar-right m-t-10">
                {{--<li class="">--}}
                {{--<div>--}}
                {{--<input type="search" class="mobile-search" id="mySearch" name="q">--}}
                {{--<button class="mobile-btn-search">Search</button>--}}
                {{--</div>--}}
                {{--</li>--}}
                @if(!\Illuminate\Support\Facades\Auth::check())
                    <li class="">
                        <a class="login" data-toggle="modal" data-target="#loginModal" href="#">Login</a>
                        <a class="login" data-toggle="modal" data-target="#Register-modal" href="#">Register</a>
                    </li>
                @else

                    <li class="dropdown">

                        @if(\App\User::whereId(\Illuminate\Support\Facades\Auth::id())->first()->avatar != null)

                            <a class="dropdown-toggle profile-name" data-toggle="dropdown" href="#"><img class="profile-pic" alt="profile" src="/{!! \App\User::whereId(\Illuminate\Support\Facades\Auth::id())->first()->avatar !!}"> {{ Auth::user()->name }}
                                <span class="fa fa-angle-down"> </span>
                            </a>

                            <ul class="dropdown-menu dropdown-color">
                                <li><a class="dropdown-item" href="{{ route('profile') }}"><i class="fa fa-user fa-user-login-1" aria-hidden="true"></i>Profile</a></li>

                                <li><a href="{{ route('logout') }}" class="dropdown-item"><i class="fa fa-sign-out fa-user-login-1" aria-hidden="true"></i>Logout</a></li>
                            </ul>

                        @else
                            <a class="dropdown-toggle profile-name" data-toggle="dropdown" href="#"><img class="profile-pic" alt="profile" src="/storage/avatar/default.jpg"> {{ Auth::user()->name }}
                                <span class="fa fa-angle-down"> </span>
                            </a>


                            <ul class="dropdown-menu dropdown-color">
                                <li><a class="dropdown-item" href="{{ route('profile') }}"><i class="fa fa-user fa-user-login-1" aria-hidden="true"></i>Profile</a></li>

                                <li><a href="{{ route('logout') }}" class="dropdown-item"><i class="fa fa-sign-out fa-user-login-1" aria-hidden="true"></i>Logout</a></li>
                            </ul>
                        @endif
                    </li>


                    {{--<li class="dropdown">--}}
                        {{--<a class="dropdown-toggle profile-name" data-toggle="dropdown" href="#"><img class="profile-pic" alt="profile" src="/img/profile.png"> {{ Auth::user()->name }}--}}
                            {{--<span class="fa fa-angle-down"></span></a>--}}
                        {{--<ul class="dropdown-menu dropdown-color">--}}
                            {{--<li><a class="dropdown-item" href="{{ route('profile') }}"><i class="fa fa-user fa-user-login" aria-hidden="true"></i>Profile</a></li>--}}

                            {{--<li><a href="{{ route('logout') }}" class="dropdown-item"><img class="m-r-10" src="/img/logout.png">Logout</a></li>--}}

                        {{--</ul>--}}
                    {{--</li>--}}
                @endif


            </ul>


        </div><!--/.nav-collapse -->
    </div>
</nav>


<!-- Navbar Mobile View End -->
