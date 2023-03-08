<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title')</title>
    <!-- HTML5 Shim and Respond.js IE11 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 11]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />
    <meta name="keywords" content="">
    <meta name="author" content="Phoenixcoded" />
    <!-- Favicon icon -->
    <link rel="icon" href="{{asset('adminAssets')}}/assets/images/favicon.png" type="image/x-icon" >

    <!-- vendor css -->
    <link rel="stylesheet" href="{{asset('adminAssets')}}/assets/css/style.css">


</head>
<body class="">
<!-- [ Pre-loader ] start -->
<div class="loader-bg">
    <div class="loader-track">
        <div class="loader-fill"></div>
    </div>
</div>
<!-- [ Pre-loader ] End -->
<!-- [ navigation menu ] start -->
@include('admin.include.leftside_nav')
<!-- [ navigation menu ] end -->
<!-- [ Header ] start -->
@include('admin.include.header')
<!-- [ Header ] end -->



@yield('content')

<!-- Required Js -->
<script src="{{asset('adminAssets')}}/assets/js/vendor-all.min.js"></script>
<script src="{{asset('adminAssets')}}/assets/js/plugins/bootstrap.min.js"></script>
<script src="{{asset('adminAssets')}}/assets/js/pcoded.min.js"></script>

<!-- Apex Chart -->
<script src="{{asset('adminAssets')}}/assets/js/plugins/apexcharts.min.js"></script>


<!-- custom-chart js -->
<script src="{{asset('adminAssets')}}/assets/js/pages/dashboard-main.js"></script>

</body>
</html>
