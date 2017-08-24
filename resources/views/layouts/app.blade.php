<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
    <title>De Aftermath Consults</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" href="{{ asset('css/app.css') }}" /> -->
    <!-- <link rel="stylesheet" href="bootstrap3/css/bootstrap.css"> -->
    <link rel="stylesheet" href="{{asset('bootstrap3/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">

    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <link href="bootstrap3/css/font-awesome.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Grand+Hotel|Bungee|Droid+Serif|Cabin|Sedgwick+Ave+Display|Hind|Fruktur|Raleway|Gloria+Hallelujah|Zilla+Slab+Highlight|Droid+Sans' rel='stylesheet' type='text/css'>
    
    <link rel="stylesheet" href="{{asset('owl/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('owl/owl.theme.min.css')}}">
    
    <link rel="shortcut icon" href="{{asset('assets/img/logo_icon.ico')}}" />
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
<!-- @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif -->
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="logo-header" href="/">
            <div class="logo-container">
                <div class="logo-d">
                    <img src="assets/img/logo_a.png" />
                </div>
          </div>
        </a>
    </div>


    @section('menuItem')
    @show

  </div>
</nav>

<div class="con-content">

    @yield('content')

</div>



<!-- Container (Contact Section) -->
<div id="contact" class="container-fluid bg-grey">
  <h2 class="text-center">CONTACT</h2>
  <div class="row">
    <div class="col-sm-5 slideanim">
        <p><i>Contact us and we'll get back to you within 24 hours.</i></p>
      <p><i class="fa fa-map-marker" aria-hidden="true"></i>ICAN Building, directly facing AKA 
        road, Plaza, Uyo, Akwa Ibom Stateff</p>
      <p><i class="fa fa-phone" aria-hidden="true"></i> 08060780695</p>
      <p><i class="fa fa-envelope" aria-hidden="true"></i> aftermathconsults@gmail.com</p>
    </div>
    <div class="col-sm-7 slideanim">
       
        {!! Form::open(['url'=> '/sendContact']) !!}
             <div class="row">
                <div class="col-sm-6 form-group">
                       {!! Form::text('name', $value = null, ['class'=> 'form-control', 'placeholder'=>'Name', 'required'=>'required']) !!}
                </div>
                <div class="col-sm-6 form-group">
                    {!! Form::email('email', $value = null, ['class'=> 'form-control', 'placeholder'=>'Email', 'type'=>'email','required'=>'required']) !!}
                </div>
            </div>
            {!! Form::textarea('comments', $value = null, ['class'=> 'form-control', 'placeholder'=>'Comment', 'rows'=>'5', 'required'=>'required']) !!}
            <div class="row">
              <div class="col-sm-12 form-group">
                 {!! Form::submit('Send', ['class' => 'btn btn-default pull-right'] ) !!}
              </div>
            </div>
        {!! Form::close() !!}
    </div>
  </div>
</div>

<!-- Add Google Maps -->
<div id="googleMap" style="height:400px;width:100%;"></div>
<script>
    function myMap() {
        var myCenter = new google.maps.LatLng(5.033558, 7.927327);
        var mapProp = {center:myCenter, zoom:12, scrollwheel:false, draggable:false, mapTypeId:google.maps.MapTypeId.ROADMAP};
        var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
        var marker = new google.maps.Marker({position:myCenter});
        marker.setMap(map);
    }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjHiim2ktJ-SnnOF5M6fV7-eIKNNhWb4c&callback=myMap"></script>
<!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->

<!--
<footer class="container-fluid text-center">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <p>Bootstrap Theme Made By <a href="https://www.w3schools.com" title="Visit w3schools">www.w3schools.com</a></p>
</footer>
-->
<footer id="myFooter">
<!--
    <div class="container">
        <ul>
            <li><a href="#">Company Information</a></li>
            <li><a href="#">Contact us</a></li>
            <li><a href="#">Reviews</a></li>
            <li><a href="#">Terms of service</a></li>
        </ul>
    <p class="footer-copyright">© 2016 Copyright Text</p>
    </div>
-->
    <div class="footer-social">
        <a href="http://www.facebook.com/deaftermathconsults" class="social-icons"><i class="fa fa-facebook"></i></a>
        <a href="https://plus.google.com/108781825388056995015" class="social-icons"><i class="fa fa-google-plus"></i></a>
        <a href="https://twitter.com/de_aftermathc" target="_blank" class="social-icons"><i class="fa fa-twitter"></i></a>
        <a href="https://www.instagram.com/aftermath_consults/" class="social-icons"><i class="fa fa-instagram"></i></a>
    </div>
    <div>
        <p class="footer-copyright">Copyright © 2017 De Aftermath. All Rights Reserved</p>
    </div>
</footer>

    <script src="{{asset('bootstrap3/js/jquery-1.10.2.js')}}"></script>
    <script src="{{asset('bootstrap3/js/bootstrap.js')}}"></script>
    
    <script src="{{asset('owl/owl.carousel.min_2.js')}}"></script>
    <script src="{{asset('assets/js/scrollreveal.js')}}"></script>
    <script src="{{asset('assets/js/script.js')}}"></script>
    
</body>
</html>
