<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('frontendAssets')}}/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('frontendAssets')}}/css/animate.css">

    <link rel="stylesheet" href="{{asset('frontendAssets')}}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{asset('frontendAssets')}}/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{asset('frontendAssets')}}/css/magnific-popup.css">

    <link rel="stylesheet" href="{{asset('frontendAssets')}}/css/aos.css">

    <link rel="stylesheet" href="{{asset('frontendAssets')}}/css/ionicons.min.css">

    <link rel="stylesheet" href="{{asset('frontendAssets')}}/css/flaticon.css">
    <link rel="stylesheet" href="{{asset('frontendAssets')}}/css/icomoon.css">
    <link rel="stylesheet" href="{{asset('frontendAssets')}}/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

{{--header here --}}
@include('frontend.include.header')



<!--body content main part-->
@yield('content')


{{--footer here --}}
@include('frontend.include.footer')



<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


<script src="{{asset('frontendAssets')}}/js/jquery.min.js"></script>
<script src="{{asset('frontendAssets')}}/js/jquery-migrate-3.0.1.min.js"></script>
<script src="{{asset('frontendAssets')}}/js/popper.min.js"></script>
<script src="{{asset('frontendAssets')}}/js/bootstrap.min.js"></script>
<script src="{{asset('frontendAssets')}}/js/jquery.easing.1.3.js"></script>
<script src="{{asset('frontendAssets')}}/js/jquery.waypoints.min.js"></script>
<script src="{{asset('frontendAssets')}}/js/jquery.stellar.min.js"></script>
<script src="{{asset('frontendAssets')}}/js/owl.carousel.min.js"></script>
<script src="{{asset('frontendAssets')}}/js/jquery.magnific-popup.min.js"></script>
<script src="{{asset('frontendAssets')}}/js/aos.js"></script>
<script src="{{asset('frontendAssets')}}/js/jquery.animateNumber.min.js"></script>
<script src="{{asset('frontendAssets')}}/js/scrollax.min.js"></script>

<script src="{{asset('frontendAssets')}}/js/main.js"></script>


</body>
</html>

