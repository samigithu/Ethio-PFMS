<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>{{trans('messages.title') }}</title>
  <!-- Favicon -->
<link rel="shortcut icon" href="adminlite/dist/img/AdminLTELogo.png" type="image/x-icon">
<link rel="apple-touch-icon" href="adminlite/dist/img/AdminLTELogo.png">

  <link rel="stylesheet" href="../assets/css/maicons.css">
 <!-- flag-icon-css -->
  <link rel="stylesheet" href="adminlite/plugins/flag-icon-css/css/flag-icon.min.css">
  <link rel="stylesheet" href="../assets/css/bootstrap.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- pop Style -->
  <link rel="stylesheet" href="adminlite/dist/css/popup_style.css">
    <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="adminlite/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="adminlite/plugins/icheck-bootstrap/icheck-bootstrap.min.css">

  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../assets/css/theme.css">
</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header>
   

    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="#"><span class="text-primary">{{trans('messages.title') }}</span>-MS</a>


        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
@php $locale=session()->get('applocale'); @endphp
        <div class="collapse navbar-collapse" id="navbarSupport">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="/">{{trans('messages.home') }}</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#products">{{trans('messages.products') }}</a>
            </li>
              
            <li class="nav-item">
              <a class="nav-link" href="#workers">{{trans('messages.workers') }}</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">{{trans('messages.contactus') }}</a>
            </li>
          
            @if(Route::has('login'))
            @auth
         <x-app-layout>
            <!-- logeed user information -->
         </x-app-layout>

            @else
           <!--  <li class="nav-item dropdown">
              <a class="nav-item animate" href="lang/en">
               <i class="fa fa-link"></i><span> <i class="flag-icon flag-icon-us mr-2"></i></span> English</a>
                <div class="dropdown-divider"></div>
              <a class="nav-item animate" href="lang/am">
               <i class="fa fa-link"></i><span> <i class="flag-icon flag-icon-et mr-2"></i></span> አማርኛ</a>
            </li> -->
             <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="flag-icon flag-icon-us"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right p-0">
          <a href="lang/en" class="dropdown-item active">
            <i class="flag-icon flag-icon-us mr-2"></i> English
          </a>
          <a href="lang/am" class="dropdown-item">
            <i class="flag-icon flag-icon-et mr-2"></i> አማርኛ
          </a>
        </div>
      </li>
            <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" href="{{route('login')}}">{{trans('messages.login') }}</a>
            </li>
             <li class="nav-item">
         <a class="btn btn-primary ml-lg-3" href="{{route('register')}}">{{trans('messages.register') }}</a>
            </li>
            @endauth
            @endif
          </ul>
        </div> <!-- .navbar-collapse -->
      </div> <!-- .container -->
    </nav>
  </header>

  <div class="page-hero bg-image overlay-dark" style="background-image: url(../assets/img/bg_image_1.jpg);">
    <div class="hero-section">
      <div class="container text-center wow zoomIn">
        <span class="subhead">{{trans('messages.poultry') }}</span>
        <h1 class="display-4">{{trans('messages.fresh') }}</h1>
        <a href="{{route('login')}}" class="btn btn-primary">{{trans('messages.orderus') }}</a>
      </div>
    </div>
  </div>


  <div class="bg-light">
    <div class="page-section py-3 mt-md-n5 custom-index">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-secondary text-white">
                <span class="mai-chatbubbles-outline"></span>
              </div>
              <p><span>{{trans('messages.orderproducts') }}</p>
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-primary text-white">
                <span class="mai-shield-checkmark"></span>
              </div>
              <p><span>{{trans('messages.saftyproduction') }}</p>
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-accent text-white">
                <span class="mai-basket"></span>
              </div>
              <p><span>{{trans('messages.safeprice') }}</p>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- .page-section -->

    <div class="page-section pb-0">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 py-3 wow fadeInUp">
            <h1>{{trans('messages.welcome') }}</h1>

            <p class="text-grey mb-4">{{trans('messages.about') }} </p>
          </div>
          <div class="col-lg-6 wow fadeInRight" data-wow-delay="400ms">
            <div class="img-place custom-img-1">
              <img src="../assets/img/bgchicken.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
    </div> <!-- .bg-light -->
  </div> <!-- .bg-light -->
 @include('product')  
@include('workers')
 @include('order') 
  <footer class="page-footer" id="contact">
    <div class="container">
      <div class="row px-md-3">
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>{{trans('messages.company') }}</h5>
          <ul class="footer-menu">
            <li><a href="#">About Us</a></li>
            <li><a href="#">Career</a></li>
            <li><a href="#">Editorial Team</a></li>
            <li><a href="#">Protection</a></li>
          </ul>
        </div>
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>{{trans('messages.more') }}</h5>
          <ul class="footer-menu">
            <li><a href="#">Terms & Condition</a></li>
            <li><a href="#">Privacy</a></li>
            <li><a href="#">Advertise</a></li>
            <li><a href="#">Join as co-worker</a></li>
          </ul>
        </div>
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>{{trans('messages.parteners') }}</h5>
          <ul class="footer-menu">
            <li><a href="#">Enat Chicken Farm</a></li>
            <li><a href="#">Arba Minch sattalite chick rearing center, AGP</a></li>
            <li><a href="#">Andinet Poultry</a></li>
          </ul>
        </div>
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>{{trans('messages.address') }}</h5>
          <p class="footer-link mt-2">123 Aribaminch 01, yetneberish, 9876 NA</p>
          <a href="#" class="footer-link">+251-912-34567</a>
          <a href="#" class="footer-link">ethiochickens@temporary.net</a>

          <h5 class="mt-3">{{trans('messages.socialmidia') }}</h5>
          <div class="footer-sosmed mt-3">
            <a href="#" target="_blank"><span class="mai-logo-facebook-f"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-twitter"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-google-plus-g"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-instagram"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-linkedin"></span></a>
          </div>
        </div>
      </div>

      <hr>

      <p id="copyright"> <strong>{{trans('messages.copyright') }} &copy; {{trans('messages.title') }}  &copy;
                    <script>
                        document.write(new Date().getFullYear())
                    </script><a href="https://ethio-chickens.org">ethio-chickens.org</a>.</strong>
  {{trans('messages.allrigts') }}
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.0.0
    </div></p>
    </div>
  </footer>

<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>
  
</body>
</html>