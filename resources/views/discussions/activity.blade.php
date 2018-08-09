@extends('layouts.profile')
@section('content')
    {{--<div class="col-md-3 col-lg-3 col-xs-12 col-sm-6">--}}


        {{--<div class="text-center container-image margin-top-30">--}}


            {{--@if( \Illuminate\Support\Facades\Auth::id() != null && \App\User::whereId(\Illuminate\Support\Facades\Auth::id())->get() != null )--}}
                {{--<a href="{!! \App\User::whereId(\Illuminate\Support\Facades\Auth::id())->first()->avatar !!}" target="_blank">--}}
                    {{--@if(\App\User::whereId(\Illuminate\Support\Facades\Auth::id())->first()->avatar != null)--}}
                        {{--<img class="img-border" alt="profile-pic" src="{!! \App\User::whereId(\Illuminate\Support\Facades\Auth::id())->first()->avatar !!}">--}}
                    {{--@else--}}
                        {{--<img class="img-border" alt="profile-pic" src="/storage/avatar/default.jpg">--}}
                    {{--@endif--}}
                {{--</a>--}}

            {{--@else--}}
                {{--<a href="/" target="_blank">--}}
                    {{--<img class="img-border" alt="profile-pic" src="/storage/avatar/default.jpg">--}}
                {{--</a>--}}
            {{--@endif--}}


            {{--<div class="overlay-image">--}}
                {{--<div class="image-upload">--}}
                    {{--<label class="upload-img" for="file-input">--}}
                        {{--<i class="fa fa-upload fa-upload-style"></i>--}}
                        {{--<br>--}}
                        {{--Upload Profile Image--}}
                    {{--</label>--}}

                    {{--<input id="file-input" name="avatar" type="file"/>--}}
                {{--</div>--}}
            {{--</div>--}}


            {{--@if(\Illuminate\Support\Facades\Auth::id() != null)--}}

                {{--@if(\App\User::whereId(\Illuminate\Support\Facades\Auth::id())->first()->created_at != null)--}}
                    {{--<p class="date-profile">{!! \App\User::whereId(\Illuminate\Support\Facades\Auth::id())->first()->created_at->formatLocalized('%A %d %B %Y') !!}</p>--}}
                {{--@else--}}
                    {{--<p class="date-profile"></p>--}}
                {{--@endif--}}
            {{--@endif--}}
        {{--</div>--}}


    {{--</div>--}}
    {{--<div class="col-md-9 col-lg-9 col-sm-6 col-xs-12">--}}
        {{--<div class="header-data m-t-55">--}}
            {{--<h1 class="howdy-color">--}}

                {{--@if(\Illuminate\Support\Facades\Auth::id() != null)--}}
                    {{--@if(\App\User::whereId(\Illuminate\Support\Facades\Auth::id())->first()->name != null)--}}
                        {{--<span class=" howdy">--}}
                            {{--{!! ucfirst(\App\User::whereId(\Illuminate\Support\Facades\Auth::id())->first()->name) !!}--}}
                        {{--</span>--}}
                    {{--@else--}}
                        {{--<span class=" howdy">--}}
                        {{--</span>--}}
                    {{--@endif--}}
                {{--@endif--}}
            {{--</h1>--}}
            {{--<p class="profile-p-color">--}}
                {{--Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ac sapien ante. Maecenas quis est ullamcorper, luctus magna sed, vulputate ante. Phasellus et molestie mauris. Aliquam a maximus mi, in eleifend erat. Vestibulum ex tortor, cursus eu mauris sit amet, maximus tempus quam. Donec nibh turpis, tempor ultricies pretium non,--}}
            {{--</p>--}}
        {{--</div>--}}
        {{--<div class="row margin-top-30">--}}
            {{--<div class="col-md-12 col-lg-12 col-xs-12 col-sm-12 padding-left-0">--}}
                {{--<div class="col-md-3 col-lg-3 col-xs-6 col-sm-6 width-20 m-r-10 padding-none">--}}
                    {{--<div class="box">--}}
                        {{--<p class="text-center howdy-color para-box">Followers--}}
                            {{--<br><span class="zero-font">0</span>--}}
                        {{--</p>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-md-3 col-lg-3 col-xs-6 col-sm-6 padding-none width-20">--}}
                    {{--<div class="box">--}}
                        {{--<p class="text-center howdy-color para-box">Post--}}
                            {{--<br><span class="zero-font">--}}
                                {{--@if(\App\Models\Disscusion::whereUserId(\Illuminate\Support\Facades\Auth::id())->count() > 0)--}}
                                    {{--{!! \App\Models\Disscusion::whereUserId(\Illuminate\Support\Facades\Auth::id())->count() !!}--}}
                                {{--@else--}}
                                    {{--0--}}
                                {{--@endif--}}
                            {{--</span>--}}
                        {{--</p>--}}
                    {{--</div>--}}
                {{--</div>--}}

                {{--<div class="col-md-6">--}}

                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
@endsection