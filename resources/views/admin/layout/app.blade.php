<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title '){{config('app.name')}}</title>

    <link href="{!! asset('css/bootstrap.min.css') !!}" rel="stylesheet">
    <link href="{!! asset('css/font-awesome.min.css') !!}" rel="stylesheet" type="text/css">
    <link href="{!! asset('css/sb-admin.css') !!}" rel="stylesheet">
    @yield('css')

</head>
<body class="fixed-nav sticky-footer bg-dark" id="page-top">

@include('admin.sections.header')

<div class="content-wrapper">

    <div class="container-fluid">
        @yield('content')
    </div>

    @include('admin.sections.footer')

    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fa fa-angle-up"></i>
    </a>

    @include('admin.sections.model')

</div>


<script src="{!! asset('js/jquery.min.js') !!}"></script>
<script src="{!! asset('js/bootstrap.bundle.min.js') !!}"></script>
<script src="{!! asset('js/jquery.easing.min.js') !!}"></script>
<script src="{!! asset('js/sb-admin.min.js') !!}"></script>
@yield('js')
</body>
</html>