<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Gvi Group of Companies</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="{{ asset('img/favicon.png') }}" rel="icon">
  <link href="{{ asset('img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">
    
  <!-- Bootstrap CSS File -->
  <link href="{{ asset('lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="{{ asset('lib/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">

  <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
  <link href="{{ asset('lib/ionicons/css/ionicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('/dist/assets/owl.carousel.min.css') }}" rel="stylesheet">
  <link href="{{ asset('lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">

@yield('style')
</head>

<body>
  <div id="preloader"></div>

  <!--==========================
    Header
  ============================-->
  <header id="header" >
    <div class="container-fluid">

      <div id="logo" class="pull-left" style="margin-top: -1% ">
<h1><a @guest href="{{url('/#')}}" @else href="{{url('/admin')}}" @endif style="border-left-width: 0px; border-left-style: ; border-left-color: ;"><span style="color:#009846; font-size:50px !important">G</span> <img src="{{ asset('img/foot-logo.png') }}" style="margin-top: -6% " width="17%" height="17%"> <span style="color:#7F0166; font-size:50px !important; margin-left: 1% ">I</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
       <!-- <a @guest href="{{url('/')}}" @else href="{{url('/admin')}}" @endif><img src="{{ asset('img/image3.png') }}" class="img-fluid" width="180px"/></a>-->
      </div>

      <nav id="nav-menu-container" >
        <ul class="nav-menu">
         <!--  <li class="menu-active"><img src="{{ asset('img/foot-logo.png') }}" width="20%" height="20%"/></li>-->
          <li ><a href="{{url('/#intro')}}">Home</a></li>
          <li ><a href="{{url('/#about')}}">About Us</a></li>
          <li  class="menu-has-children"><a href="{{url('/#businesses')}}">Businesses</a>
            <ul style="margin-left:-10px;">
              <li><a href="http://ngl.gvi-group.com">GVI Nigeria Limited</a></li>
              <li><a href="http://energy.gvi-group.com">GVI Integrated Energy Solutions</a></li>
               <li><a href="http://construction.gvi-group.com">GVI Constructions Company</a></li>
               <li><a href="http://power.gvi-group.com">GVI Power Solution</a></li>
               <li><a href="http://investmnts.gvi-group.com">GVI Trades & INvestments </a></li>
            </ul>
          </li>
          <li ><a href="{{url('/#contact')}}">Contact</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->  
    </div>
  </header><!-- #header -->


@yield('content')

    <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
            <h3><span style="color:#009846;">G</span> <img src="{{ asset('img/foot-logo.png') }}" width="20%" height="20%"> <span style="color:#7F0166;">I</span></h3>
            <p>GVI-Group and its Technical partner seek to provide the best process technology and services that meet your specific requirements.</p>
          </div>
 <div class="col-lg-1 col-md-2 footer-links"></div>
          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Quick Links</h4>
            <ul>
              <li><i class="ion-ios-arrow-right"></i> <a href="{{url('/#intro')}}" class="scrollto">Home</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="{{url('/#about')}}" class="scrollto">About us</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="{{url('/#businesses')}}" class="scrollto">Businesses</a></li>
<li><i class="ion-ios-arrow-right"></i> <a href="{{url('/#contact')}}" class="scrollto">Contact Us</a></li>
            </ul>
          </div>

 <div class="col-lg-1 col-md-2 footer-links"></div>
          <div class="col-lg-4 col-md-7 footer-contact">
            <h4>Contact Us</h4>
            <p>
              3rd Floor, Africa Re Building Plot 1679 Karimu Kotun Street
Victoria Island.
 <br>
              <strong>Phone:</strong> +234-8182799239 | +234-8023002845<br>
              <strong>Email:</strong> info@gvi-group.com<br>
            </p>

            <div class="social-links">
              <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
              <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div>

          </div>

         <!-- <div class="col-lg-3 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna veniam enim veniam illum dolore legam minim quorum culpa amet magna export quem marada parida nodela caramase seza.</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit"  value="Subscribe">
            </form>
          </div>-->

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>GVI-Group</strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=BizPage
        -->
        Nova.inc
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="{{ asset('lib/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('lib/jquery/jquery-migrate.min.js') }}"></script>
  <script src="{{ asset('lib/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
  <script src="{{ asset('lib/superfish/hoverIntent.js') }}"></script>
  <script src="{{ asset('lib/superfish/superfish.min.js') }}"></script>
  <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
  <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
  <script src="{{ asset('lib/counterup/counterup.min.js') }}"></script>
 
  <script src="{{ asset('dist/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('lib/isotope/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('lib/lightbox/js/lightbox.min.js') }}"></script>
  <script src="{{ asset('lib/touchSwipe/jquery.touchSwipe.min.js') }}"></script>
  <!-- Contact Form JavaScript File -->
  <script src="{{ asset('js/contactform.js') }}"></script>

  <!-- Template Main Javascript File -->
  <script src="{{ asset('js/main.js') }}"></script>
@yield('js')
</body>
</html>
