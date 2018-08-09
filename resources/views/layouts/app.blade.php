<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="/favicon.png">
    <link rel="icon" type="image/x-icon" href="/favicon.ico">

    <title>{{ config('app.name', 'DDK Forum') }}</title>

    <!-- Styles -->
    {{--<link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}

    {{--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" />--}}

    {{--<link rel="stylesheet"--}}
    {{--href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.9.0/styles/atom-one-dark.min.css">--}}

    <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/styles.css" rel="stylesheet">
    <link href="/css/auth.css" rel="stylesheet">


    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
</head>

<body>

@include('layouts.header')


<div class="container overlay mobile-padding-none">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  mobile-padding-none">
            {{--@include('layouts.sideMenu')--}}


            @yield('content')


            {{--@include('layouts.footer')--}}
        </div>
    </div>
</div>


@include('layouts.loginRegister')


<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
{{--<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>--}}
{{--<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">--}}

{{--<script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.9.0/highlight.min.js"></script>--}}

<!-- Bootstrap core JavaScript -->
{{--<script src="/vendor/jquery/jquery.min.js"></script>--}}
{{--<script src="/vendor/bootstrap/js/bootstrap.min.js"></script>--}}

{{--<script src="https://code.jquery.com/jquery-2.2.0.min.js"></script>--}}
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
<!-- Login/Register Modals End -->

@yield('js')

<script>


    @if(Session::has('alert'))
    toastr.success("{{ Session::get('alert') }}");
    @endif


    @if(Session::has('meassage'))
    toastr.error("{{ Session::get('meassage') }}");
    @endif
    @if(Session::has('success'))
    toastr.success("{{ Session::get('success') }}");
    @endif


    @if(Session::has('warning'))
    toastr.error("{{ Session::get('warning') }}");
    @endif


    @if(Session::has('error'))
    toastr.error("{{ Session::get('error') }}");
    @endif

    @if(Session::has('error_2'))
    toastr.error("{{ Session::get('error_2') }}");
    @endif

    @if(Session::has('error_3'))
    toastr.error("{{ Session::get('error_3') }}");
    @endif

    {{--@if(Session::has('status'))--}}
    {{--toastr.error("{{ Session::get('error_3') }}");--}}
    {{--@endif--}}

    @if($errors->count() > 0)
    @foreach($errors->all() as $error)
    toastr.error("{!! $error !!}");
    @endforeach
    @endif


</script>
<script>

    var popupSize = {
        width: 780,
        height: 550
    };

    $(document).on('click', '.social-buttons > a', function (e) {

        var
            verticalPos = Math.floor(($(window).width() - popupSize.width) / 2),
            horisontalPos = Math.floor(($(window).height() - popupSize.height) / 2);

        var popup = window.open($(this).prop('href'), 'social',
            'width=' + popupSize.width + ',height=' + popupSize.height +
            ',left=' + verticalPos + ',top=' + horisontalPos +
            ',location=0,menubar=0,toolbar=0,status=0,scrollbars=1,resizable=1');

        if (popup) {
            popup.focus();
            e.preventDefault();
        }

    });

</script>
</body>
</html>
