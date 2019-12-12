<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css">
  <!-- font-chu -->
  <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700&display=swap" rel="stylesheet">

  <!-- slider-bar -->
  <link rel="stylesheet" href="{{asset('public/frontend/css/owl.carousel.min.css')}}">
  <link rel="stylesheet" href="{{asset('public/frontend/css/owl.theme.default.css')}}">
  <!-- style -->
  <link href="{{asset('public/frontend/css/flaticon.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('public/frontend/scss/header.css')}}">
  <link rel="stylesheet" href="{{asset('public/frontend/scss/trangchu.css')}}">
  <link rel="stylesheet" href="{{asset('public/frontend/scss/footer.css')}}">
  <link rel="stylesheet" href="{{asset('public/frontend/css/reset.css')}}">
  <link rel="stylesheet" href="{{asset('public/frontend/css/xaydung.css')}}">
  <link rel="stylesheet" href="{{asset('public/frontend/css/chitiet.css')}}">
  <link rel="stylesheet" href="{{asset('public/frontend/css/right.css')}}">
  <link rel="stylesheet" href="{{asset('public/frontend/css/jquery.fancybox.css')}}">


  <title>Bản tin điện tử họ Lưu Việt Nam</title>
</head>
<body>
  @include('layouts.header')
  <!--HeaderLine End-->
  @yield('content')
  @include('layouts.footer')
  <!--Footer-Last End-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js"></script>
  <!-- style-js -->
  
  <script src="{{asset('public/frontend/js/owl.carousel.min.js')}}"></script>
  
  <script src="{{asset('public/frontend/js/cycle.all.js')}}"></script>
  <script src="{{asset('public/frontend/js/jquery.fancybox.js')}}"></script>

  <script src="{{asset('public/frontend/js/slider.js')}}"></script>
  <script src="{{asset('public/frontend/js/tab-hover.js')}}"></script>
  <script src="{{asset('public/frontend/js/back-to-top.js')}}"></script>
  <script src="{{asset('public/frontend/js/chitiet.js')}}"></script>
  
  
  </body>
  
  </html>
  