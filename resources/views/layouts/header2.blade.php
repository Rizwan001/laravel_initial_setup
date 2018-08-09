<!-- Navbar Start -->

<nav class="navbar navbar-fixed-top navbar-bg ">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ route('DDKCoin') }}"><img src="/img/logo-dark.png" alt="logo"></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">

            <ul class="nav navbar-nav navbar-right m-t-10 navbar-text">
                {{--<li><a href="" >Home</a></li>--}}
                {{--<li><a href="" >Exchanges </a></li>--}}
                {{--<li><a href="" >Mining</a></li>--}}
                {{--<li><a href="" >Wallet</a></li>--}}
                {{--<li><a href="" >DDK</a></li>--}}
                {{--<li><a href="" >Forum</a></li>--}}
                <!-- <li class="">
                    <a class="login" data-toggle="modal" data-target="#loginModal" href="#">Login</a>
                </li>
                <li class="">
                    <a class="login disabled" href="">/</a>
                  </li>
                <li class="">
                    <a class="login" data-toggle="modal" data-target="#Forgot_Passowrd-tab" href="#">Register</a>
                  </li> -->


                <ul class="nav navbar-nav navbar-right m-t-10">

                    @if(!\Illuminate\Support\Facades\Auth::check())
                        <li class="">
                            <a class="login" href="#loginModal"  data-toggle="modal" data-target="#loginModal" >Login</a>
                        </li>
                        <li class="">
                            <a class="login disabled" href="">/</a>
                        </li>
                        <li class="">
                            <a class="login" href="#Register-modal" data-toggle="modal" >Register</a>
                        </li>
                    @else
{{--                        {!! dd() !!}--}}
                        <li class="dropdown">
                            <a class="dropdown-toggle profile-name" data-toggle="dropdown" href="#"><img class="profile-pic" alt="profile" src="/{!! \App\User::whereId(\Illuminate\Support\Facades\Auth::id())->first()->avatar !!}"> {{ Auth::user()->name }}
                                <span class="fa fa-angle-down"> </span>
                            </a>
                            <ul class="dropdown-menu dropdown-color">
                                <li><a class="dropdown-item" href="{{ route('DDKCoin') }}"><i class="fa fa-home fa-user-login" aria-hidden="true"></i>Home</a></li>
                                <li><a href="{{ route('logout') }}" class="dropdown-item"><i class="
fa fa-power-off fa-user-login" aria-hidden="true"></i>Logout</a></li>
                            </ul>
                        </li>
                        {{--@else--}}
                        {{--<div class="dropdown">--}}
                        {{--<a href="#" class="dropbtn" data-toggle="dropdown" role="button" aria-expanded="false" style="color:white;">--}}
                        {{--{{ Auth::user()->name }} <span class="caret"></span>--}}
                        {{--</a>--}}
                        {{--<div class="dropdown-content">--}}
                        {{--<a href="{{ route('logout') }}">--}}
                        {{--Logout--}}
                        {{--</a>--}}
                        {{--</div>--}}

                        {{--</div>--}}
                    @endif
                </ul>





            </ul>


        </div><!--/.nav-collapse -->
    </div>
</nav>

<!-- Navbar End -->