<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Gvi Nigeria Limited</title>
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
   @guest
    @else
    @if(session('edit') == 1)
    
    <!-- Include Editor style. -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.5.1/css/froala_editor.pkgd.min.css" rel="stylesheet" type="text/css" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.5.1/css/froala_style.min.css" rel="stylesheet" type="text/css" />
<link href="{{ asset('css/image.min.css') }}" rel="stylesheet">
<style>a[href="https://www.froala.com/wysiwyg-editor?k=u"] {
  display: none !important;
  position: absolute;
  top: -99999999px;
}</style>
    @endif
    @endif
  <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
  <link href="{{ asset('lib/ionicons/css/ionicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
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
<h1><a @guest href="{{url('/')}}" @else href="{{url('/admin')}}" @endif style="border-left-width: 0px; border-left-style: ; border-left-color: ;"><span style="color:#009846; font-size:50px !important">G</span> <img src="{{ asset('img/foot-logo.png') }}" style="margin-top: -6% " width="17%" height="17%"> <span style="color:#7F0166; font-size:50px !important; margin-left: 1% ">I</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
       <!-- <a @guest href="{{url('/')}}" @else href="{{url('/admin')}}" @endif><img src="{{ asset('img/image3.png') }}" class="img-fluid" width="180px"/></a>-->
      </div>

      <nav id="nav-menu-container" >
        <ul class="nav-menu">
         <!--  <li class="menu-active"><img src="{{ asset('img/foot-logo.png') }}" width="20%" height="20%"/></li>-->
          <li @if(Request::path() == '/') class="menu-active" @endif ><a href="{{url('/')}}">Home</a></li>
          <li @if(Request::path() == 'about') class="menu-active" @endif ><a href="{{url('about')}}">About Us</a></li>
          <li @if(Request::path() == 'services/procurement-supply' || Request::path() == 'services/operation-installation-maintenance') class="menu-active menu-has-children" @else  class="menu-has-children" @endif ><a href="#">Services</a>
            <ul style="margin-left:-10px;">
              <li><a href="{{url('services/procurement-supply')}}">Procurement & Supply</a></li>
              <li><a href="{{url('services/operation-installation-maintenance')}}">Operation, Installation & Maintenance</a></li>
            </ul>
          </li>
          <li @if(Request::path() == 'contact') class="menu-active" @endif ><a href="{{url('contact')}}">Contact</a></li>
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
            <p>GVI Nigeria Limited and its Technical partner seek to provide the best process technology and services that meet your specific requirements.</p>
          </div>
 <div class="col-lg-1 col-md-2 footer-links"></div>
          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Quick Links</h4>
            <ul>
              <li><i class="ion-ios-arrow-right"></i> <a href="index">Home</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="about">About us</a></li>
<li><i class="ion-ios-arrow-right"></i> <a href="contact">Contact Us</a></li>
            </ul>
          </div>

 <div class="col-lg-1 col-md-2 footer-links"></div>
          <div class="col-lg-4 col-md-7 footer-contact">
            <h4>Contact Us</h4>
            <p>
              225b Ikorodu Crescent, Dolphin Estate Ikoyi Lagos. <br>
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
   @guest
    @else
    @if(session('edit') == 1)
  <!-- Include Editor JS files. -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.5.1//js/froala_editor.pkgd.min.js"></script>
<script src="{{ asset('js/image.min.js') }}"></script>
<!-- Initialize the editor. -->
<script>
  $(function() {
    $('#edit').froalaEditor({
        // Set the image upload parameter.
        imageUploadParam: 'content_image',
 
        // Set the image upload URL.
        imageUploadURL: '{{route("image.upload")}}',
 
        // Additional upload params.
        imageUploadParams: {_token: '{{ csrf_token() }}' },
 
        // Set request type.
        imageUploadMethod: 'POST',
 
        // Set max image size to 5MB.
        imageMaxSize: 5 * 1024 * 1024,
 
        // Allow to upload PNG and JPG.
        imageAllowedTypes: ['jpeg', 'jpg', 'png']
      })
      .on('froalaEditor.image.beforeUpload', function (e, editor, images) {
        // Return false if you want to stop the image upload.
      })
      .on('froalaEditor.image.uploaded', function (e, editor, response) {
        // Image was uploaded to the server
             })
      .on('froalaEditor.image.inserted', function (e, editor, $img, response) {
        // Image was inserted in the editor.
      })
      .on('froalaEditor.image.replaced', function (e, editor, $img, response) {
        // Image was replaced in the editor.
      })
      .on('froalaEditor.image.error', function (e, editor, error, response) {
        // Bad link.
        if (error.code == 1) {  }
 
        // No link in upload response.
        else if (error.code == 2) {  }
 
        // Error during image upload.
        else if (error.code == 3) {  }
 
        // Parsing response failed.
        else if (error.code == 4) {  }
 
        // Image too text-large.
        else if (error.code == 5) {  }
 
        // Invalid image type.
        else if (error.code == 6) {  }
 
        // Image can be uploaded only to same domain in IE 8 and IE 9.
        else if (error.code == 7) {  }
 
        // Response contains the original server response to the request if available.
      });
  });
</script>

    @endif
    @endif
  <script src="{{ asset('lib/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
  <script src="{{ asset('lib/superfish/hoverIntent.js') }}"></script>
  <script src="{{ asset('lib/superfish/superfish.min.js') }}"></script>
  <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
  <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
  <script src="{{ asset('lib/counterup/counterup.min.js') }}"></script>
  <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('lib/isotope/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('lib/lightbox/js/lightbox.min.js') }}"></script>
  <script src="{{ asset('lib/touchSwipe/jquery.touchSwipe.min.js') }}"></script>
  <!-- Contact Form JavaScript File -->
  <script src="{{ asset('js/contactform.js') }}"></script>

  <!-- Template Main Javascript File -->
  <script src="{{ asset('js/main.js') }}"></script>

</body>
</html>
