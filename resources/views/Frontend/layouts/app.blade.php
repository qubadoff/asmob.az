<!DOCTYPE html>
<html lang="az">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        @yield('title')
    </title>

    <!--Essential css files-->
    <link rel="stylesheet" href="{{ url('/assets') }}/css/all.css">
    <link rel="stylesheet" href="{{ url('/assets') }}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ url('/assets') }}/css/slick.css">
    <link rel="stylesheet" href="{{ url('/assets') }}/css/jquery-ui.css">
    <link rel="stylesheet" href="{{ url('/assets') }}/css/nice-select.css">
    <link rel="stylesheet" href="{{ url('/assets') }}/css/fancybox.css">
    <link rel="stylesheet" href="{{ url('/assets') }}/css/animate.css">
    <link rel="stylesheet" href="{{ url('/assets') }}/css/magnific-popup.css">
    <link rel="stylesheet" href="{{ url('/assets') }}/css/style.css">

    <!--favicon-->
    <link rel="icon" href="{{ url('/assets') }}/images/favicon.png">

</head>
<body>

<!--preloader start-->
<div class="preloader">
    <h1 class="display-1 fw-medium">ASMOB</h1>
    <div class="preload-progress">
        <span></span>
    </div>
</div>
<!--preloader end-->

@include('Frontend.layouts.includes.header')

@yield('content')

@include('Frontend.layouts.includes.footer')


<!--Esential Js Files-->
<script src="{{ url('/assets') }}/js/jquery.min.js"></script>
<script src="{{ url('/assets') }}/js/popper.min.js"></script>
<script src="{{ url('/assets') }}/js/bootstrap.min.js"></script>
<script src="{{ url('/assets') }}/js/slick.js"></script>
<script src="{{ url('/assets') }}/js/jquery-ui.js"></script>
<script src="{{ url('/assets') }}/js/nice-select.js"></script>
<script src="{{ url('/assets') }}/js/fancybox.js"></script>
<script src="{{ url('/assets') }}/js/countdown.min.js"></script>
<script src="{{ url('/assets') }}/js/wow.js"></script>
<script src="{{ url('/assets') }}/js/progress-bar.js"></script>
<script src="{{ url('/assets') }}/js/parallax.js"></script>
<script src="{{ url('/assets') }}/js/tilt-js.js"></script>
<script src="{{ url('/assets') }}/js/magnific-popup.js"></script>
<script src="{{ url('/assets') }}/js/waypoints.js"></script>
<script src="{{ url('/assets') }}/js/counterup.min.js"></script>
<script src="{{ url('/assets') }}/js/preloader.js"></script>
<script src="{{ url('/assets') }}/js/isotop.min.js"></script>
<script src="{{ url('/assets') }}/js/jquery.zoom.js"></script>
<script src="{{ url('/assets') }}/js/script.js"></script>

</body>
</html>
