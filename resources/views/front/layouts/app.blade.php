<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="#" content="#">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

    <title>Booky library</title>
   <!-- Additional CSS Files -->
   <link rel="stylesheet" href="{{asset('front')}}/assets/css/fontawesome.css">
   <link rel="stylesheet" href="{{asset('front')}}/assets/css/templatemo-liberty-market.css">
   <link rel="stylesheet" href="{{asset('front')}}/assets/css/owl.css">
   <link rel="stylesheet" href="{{asset('front')}}/assets/css/animate.css">
   <link rel="stylesheet" href="{{asset('front')}}/assets/css/flex-slider.css">
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">
   <link rel="stylesheet" href="{{asset('front')}}/assets/css/all.min.css">
   <link rel="stylesheet" href="{{asset('front')}}/assets/css/all2.min.css">

   <!-- Custom for login and register pages-->
<!-- General CSS Files -->
{{-- <link rel="stylesheet" href="{{asset('front')}}/assets/css/bootstrap.min.css"> --}}
<link rel="stylesheet" href="{{asset('front')}}/assets/css/bootstrap2.min.css">
<link rel="stylesheet" href="{{asset('front')}}/assets/css/login.min.css">

<!-- CSS Libraries -->
<link rel="stylesheet" href="{{asset('front')}}/assets/css/bootstrap-social.css">
<link rel="stylesheet" href="{{asset('front')}}/assets/css/selectric.css">

<!-- Template CSS -->
<link rel="stylesheet" href="{{asset('front')}}/assets/css/style.min.css">
<link rel="stylesheet" href="{{asset('front')}}/assets/css/components.min.css">

    <!-- end Custom fonts for login and register pages-->


  </head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->


  <!-- ***** Header Area End ***** -->


  @yield('content')

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <p>Copyright © 2024 <a href="#">Booky library</a>
          &nbsp;&nbsp;
          Designed by MoSalem

        </div>
      </div>
    </div>
  </footer>


  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="{{asset('front')}}/assets/js/jquery.min.js"></script>
  <script src="{{asset('front')}}/assets/js/bootstrap.min.js"></script>
  <script src="{{asset('front')}}/assets/js/isotope.min.js"></script>
  <script src="{{asset('front')}}/assets/js/owl-carousel.js"></script>
  <script src="{{asset('front')}}/assets/js/isotope.js"></script>
  <script src="{{asset('front')}}/assets/js/tabs.js"></script>
  <script src="{{asset('front')}}/assets/js/popup.js"></script>
  <script src="{{asset('front')}}/assets/js/custom.js"></script>


          <!-- Custom for login and register pages-->

    <!-- General JS Scripts -->
    <script src="{{asset('front')}}/assets/js/lib.vendor.bundle.js"></script>
    <script src="{{asset('front')}}/assets/js/CodiePie.js"></script>

    <!-- Template JS File -->
    <script src="{{asset('front')}}/assets/js/loginscripts.js"></script>
    <script src="{{asset('front')}}/assets/js/logincustom.js"></script>

    <!-- Page Specific JS File -->
    <script src="{{asset('front')}}/assets/js/auth-register.js"></script>
   <script src="{{asset('front')}}/assets/js/jquery.pwstrength.min.js"></script>
   <script src="{{asset('front')}}/assets/js/jquery.selectric.min.js"></script>
         <!--end  Custom for login and register pages-->

<!-- Custom scripts for all pages-->
<script src="{{asset('front')}}/assets/js/sb-admin-2.min.js"></script>

  </body>

</html>


