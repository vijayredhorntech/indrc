<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <title>{{config('app.name')}}</title>
    <link rel="shortcut icon" href="{{config('app.logo')}}" type="image/x-icon">
    <link rel="icon" href="{{config('app.logo')}}" type="image/x-icon">

    <!-- Stylesheets -->
    <link href="{{asset('assets/front/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/front/plugins/revolution/css/settings.css')}}" rel="stylesheet" type="text/css"><!-- REVOLUTION SETTINGS STYLES -->
    <link href="{{asset('assets/front/plugins/revolution/css/layers.css')}}" rel="stylesheet" type="text/css"><!-- REVOLUTION LAYERS STYLES -->
    <link href="{{asset('assets/front/plugins/revolution/css/navigation.css')}}" rel="stylesheet" type="text/css"><!-- REVOLUTION NAVIGATION STYLES -->
    <link href="{{asset('assets/front/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('assets/front/css/responsive.css')}}" rel="stylesheet">
    <link href="{{asset('assets/front/css/color-switcher-design.css')}}" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <script src="js/respond.js"></script>


    <script src="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/js/swiffy-slider.min.js" crossorigin="anonymous" defer></script>
    <link href="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/css/swiffy-slider.min.css" rel="stylesheet" crossorigin="anonymous">

    <style>
        .MainBannerImages
        {
            height: 500px;
            width: auto;
            /*object-fit: cover;*/
        }
        .aboutIiserImages
        {
            height: 300px;
            width: auto;
        }


        @media only screen and (max-width: 992px){
            .MainBannerImages
            {
                height: 400px;
            }
        }
        @media only screen and (max-width: 768px){
            .MainBannerImages
            {
                height: 350px;
            }
        }
        @media only screen and (max-width: 500px){
            .MainBannerImages
            {
                height: 300px;
            }
        }
    </style>




</head>
<body>
<div class="page-wrapper">
    <!-- Preloader -->
{{--    <div class="preloader"></div>--}}
    <!-- Main Header-->
    @include('frontend.layouts.header')
    <!--End Main Header -->
    @yield('content')
    <!-- Main Footer -->
    @include('frontend.layouts.footer')
    <!-- End Footer -->
</div>
<!-- End Page Wrapper -->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>
<script src="{{asset('assets/front/js/jquery.js')}}"></script>
<script src="{{asset('assets/front/js/popper.min.js')}}"></script>
<script src="{{asset('assets/front/plugins/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
<script src="{{asset('assets/front/plugins/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{asset('assets/front/plugins/revolution/js/extensions/revolution.extension.actions.min.js')}}"></script>
<script src="{{asset('assets/front/plugins/revolution/js/extensions/revolution.extension.carousel.min.js')}}"></script>
<script src="{{asset('assets/front/plugins/revolution/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
<script src="{{asset('assets/front/plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
<script src="{{asset('assets/front/plugins/revolution/js/extensions/revolution.extension.migration.min.js')}}"></script>
<script src="{{asset('assets/front/plugins/revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>
<script src="{{asset('assets/front/plugins/revolution/js/extensions/revolution.extension.parallax.min.js')}}"></script>
<script src="{{asset('assets/front/plugins/revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
<script src="{{asset('assets/front/plugins/revolution/js/extensions/revolution.extension.video.min.js')}}"></script>
<script src="{{asset('assets/front/js/main-slider-script.js')}}"></script>
<script src="{{asset('assets/front/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/front/js/jquery.fancybox.js')}}"></script>
<script src="{{asset('assets/front/js/jquery.countdown.js')}}"></script>
<script src="{{asset('assets/front/js/appear.js')}}"></script>
<script src="{{asset('assets/front/js/owl.js')}}"></script>
<script src="{{asset('assets/front/js/wow.js')}}"></script>
<script src="{{asset('assets/front/js/script.js')}}"></script>
<script src="{{asset('assets/front/js/color-settings.js')}}"></script>

</body>

</html>
