<!DOCTYPE html>
<html>
<head>
<title>NewsFeed</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="{{asset('front/assets/css/bootstrap.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('front/assets/css/font-awesome.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('front/assets/css/animate.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('front/assets/css/font.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('front/assets/css/li-scroller.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('front/assets/css/slick.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('front/assets/css/jquery.fancybox.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('front/assets/css/theme.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('front/assets/css/style.css')}}">
<!--[if lt IE 9]>
<script src="assets/js/html5shiv.min.js"></script>
<script src="assets/js/respond.min.js"></script>
<![endif]-->
</head>
<body>
<div id="preloader">
  <div id="status">&nbsp;</div>
</div>
<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
<div class="container">
  @include('front.layout.includes.header')

  @include('front.layout.includes.navbar')

  @include('front.layout.includes.newssec')

  @include('front.layout.includes.slider')

  @yield('content')
  
  @include('front.layout.includes.footer')
</div>
<script src="{{asset('front/assets/js/jquery.min.js')}}"></script> 
<script src="{{asset('front/assets/js/wow.min.js')}}"></script> 
<script src="{{asset('front/assets/js/bootstrap.min.js')}}"></script> 
<script src="{{asset('front/assets/js/slick.min.js')}}"></script> 
<script src="{{asset('front/assets/js/jquery.li-scroller.1.0.js')}}"></script> 
<script src="{{asset('front/assets/js/jquery.newsTicker.min.js')}}"></script> 
<script src="{{asset('front/assets/js/jquery.fancybox.pack.js')}}"></script> 
<script src="{{asset('front/assets/js/custom.js')}}"></script>
</body>
</html>