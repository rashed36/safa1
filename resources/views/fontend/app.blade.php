<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') - {{ config('app.name') }}</title>
    {{-- <title>Paper Cones, Paper Cores, Paper Tubes, Edge Protectors, Composite Cans</title> --}}
    <!-- Place favicon.ico in the root directory -->
    <!--<link rel="shortcut icon" type="image/x-icon" href="https://safatradingenterprise.com:2083/cpsess3935978697/viewer/home%2fsafatra1%2fpublic_html%2ffontend%2fassets%2fimages%2ficon/favicon2.png">-->
    <link rel="stylesheet" href="{{ asset('fontend/assets/styles/css/vendors/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('fontend/assets/styles/css/vendors/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('fontend/assets/scripts/vendors/owl-carousel/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{ asset('fontend/assets/scripts/vendors/animate/animate.min.css')}}">
    <!--  main css-->
    <link rel="stylesheet" href="{{ asset('fontend/assets/styles/css/app.css')}}">
  </head>
  <body>
    <!-- page-loder -->
    <div id="preloader"></div>
    {{-- Navber Section --}}
    @include('fontend.partials.header')
    {{-- Content Section --}}
    @yield('content')
    {{-- footer section --}}
    @include('fontend.partials.footer')
    <!-- ===== JavaScript Libraries ====== -->
    <!-- <script src="assets/scripts/vendors/jquery-3.4.1.min.js"></script> -->
    <script src="{{ asset('fontend/assets/scripts/vendors/jquery.min.js')}}"></script>
    <script src="{{ asset('fontend/assets/scripts/vendors/bootstrap.min.js')}}"></script>
    <script src="{{ asset('fontend/assets/scripts/vendors/wow/wow.min.js')}}"></script>
    <script src="{{ asset('fontend/assets/scripts/vendors/owl-carousel/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('fontend/assets/scripts/vendors/waypoints/waypoints.min.js')}}"></script>
    <script src="{{ asset('fontend/assets/scripts/vendors/counterup/counterup.min.js')}}"></script>
    <!-- main-js -->
    <script src="{{ asset('fontend/assets/scripts/app.js')}}"></script>
    <script>
    $( document ).ready(function() {
    var myDiv = $('.text_limit');
    var text = myDiv.text().substring(0,608)+'..';
    myDiv.text(text);
    $('.carousel').carousel({
        interval: 3000,
        pause: false
    });
    
    });
    </script>
    <script>
    $( document ).ready(function() {
    var myDiv = $('.profile_text_limit');
    var text = myDiv.text().substring(0,219)+'..';
    myDiv.text(text);
    });
    </script>
  </body>
</html>