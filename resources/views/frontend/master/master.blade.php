<!DOCTYPE html>
<html lang="en">
<head>
    @include('frontend.include.headerlink')
</head>
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

{{--header here --}}
@include('frontend.include.header')



<!--body content main part-->
@yield('content')


{{--footer here --}}
@include('frontend.include.footer')



<!-- loader -->
@include('frontend.include.footerscript')

</body>
</html>

