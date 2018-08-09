<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'DDK Forum') }}</title>

    <!-- Styles -->
    {{--<link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}

    {{--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" />--}}

    {{--<link rel="stylesheet"--}}
          {{--href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.9.0/styles/atom-one-dark.min.css">--}}

    <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/activity.css" rel="stylesheet">
    <link href="/css/auth.css" rel="stylesheet">



    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">

</head>
<body>
@include('layouts.header2')

{{--<div class="container-fluid">--}}
    {{--<div class="jumbo-pic overlay">--}}
        {{--<div class="all-padding">--}}
            {{--<div class="row">--}}
                {{--<div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">--}}
            {{--@include('layouts.sideMenu')--}}


                {{--@yield('content')--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}
{{--@include('discussions.post-activities')--}}
            {{--@include('layouts.footer')--}}



@include('layouts.loginRegister')


    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.9.0/highlight.min.js"></script>

    <!-- Bootstrap core JavaScript -->
    <script src="/vendor/jquery/jquery.min.js"></script>
    {{--<script src="/vendor/bootstrap/js/bootstrap.min.js"></script>--}}

<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>



</body>
</html>
