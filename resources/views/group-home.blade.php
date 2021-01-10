@extends('layouts.guest-app-group')

@section('style')
<link href="https://fonts.googleapis.com/css?family=Lato:300,500" rel="stylesheet" />
<style type="text/css">
 @import url(https://fonts.googleapis.com/css?family=Raleway:200);

.cover {
 
  width: 100%;
  height: 40vh;
  background: #eee;
  box-shadow: 0 19px 38px rgba(0, 0, 0, 0.16), 0 15px 12px rgba(0, 0, 0, 0.23);
  overflow: hidden;
}

@media (max-width:900px) {
  .cover{
    height: 44vh;
  }
}

.slide-fade-leave-active {
      transition: all .8s cubic-bezier(1.0, 0.5, 0.8, 1.0);
  }

  .slide-fade-enter, .slide-fade-leave-to
      /* .slide-fade-leave-active below version 2.1.8 */
  {
      transform: translateX(10px);
      opacity: 0;
  }

.cover h2 {
  font-size: 1.7vw;
  text-align: left;
  margin: 3vw;
  font-weight: thin;
  margin-top: 10%;
  margin-bottom: 20%;
  line-height: 2vw;
}

.cover h2{
color:#fff;
}
#icon {
  width: 50%;
  border-radius: 50%;
  margin: 20%;
  overflow: hidden;
  text-align: center;
}

#box1 #icon {
  background: #7100DB;
}

#box2 #icon {
  background: #6700FF;
}

#box3 #icon {
  background: #FF5A6D;
}

#icon img {
  position: relative;
  width: 80%;
  margin-top: 10%;
}

#box2 img {
  transform: translateY(3px);
}


#section07 a {
  padding-top: 80px;
}
#section07 a span {
  position: absolute;
  top: 0;
  left: 50%;
  width: 24px;
  height: 24px;
  margin-left: -12px;
  border-left: 1px solid #fff;
  border-bottom: 1px solid #fff;
  -webkit-transform: rotate(-45deg);
  transform: rotate(-45deg);
  -webkit-animation: sdb07 2s infinite;
  animation: sdb07 2s infinite;
  opacity: 0;
  box-sizing: border-box;
}
#section07 a span:nth-of-type(1) {
  -webkit-animation-delay: 0s;
  animation-delay: 0s;
}
#section07 a span:nth-of-type(2) {
  top: 16px;
  -webkit-animation-delay: .15s;
  animation-delay: .15s;
}
#section07 a span:nth-of-type(3) {
  top: 32px;
  -webkit-animation-delay: .3s;
  animation-delay: .3s;
}
@-webkit-keyframes sdb07 {
  0% {
    opacity: 0;
  }
  50% {
    opacity: 1;
  }
  100% {
    opacity: 0;
  }
}
@keyframes  sdb07 {
  0% {
    opacity: 0;
  }
  50% {
    opacity: 1;
  }
  100% {
    opacity: 0;
  }
}

.carousel-indicators li{
  display:none;
}


  
.container-fluid {
  
  width: 100%;
}
.media {
  background-position: center;
  background-size: cover;
  height: 100%;
  position: absolute;
  -webkit-transition: all 0.3s ease;
  transition: all 0.3s ease;
  width: 100%;
}
figure {
  height: 370px;
  overflow: hidden;
  position: relative;
  margin: 0 0 0rem !important;
}
figure a {
  font-family: "Lato";
  height: 100%;
  left: 0;
  position: absolute;
  top: 0;
  width: 100%;
  z-index: 3;
}
figure:hover .media {
  -webkit-transform: scale(1.25);
          transform: scale(1.25);
}
figcaption {
  
  height: calc(100% - 60px);
  margin: 15px;
  left: 0;
  position: absolute;
  top: 0;
  width: 230px;
}
.body {
  font-family: "Lato";
  background-color: white;
  bottom: 0;
  padding: 15px;
  position: absolute;
  width: 100%;
}
svg {
  height: inherit;
  width: 100%;
}
svg text {
  text-anchor: start;
}
svg #alpha {
  fill: aqua;
}
svg .title {
  
  font-size: 16.5px;
  font-family: "Montserrat";
  font-weight: 700;
  letter-spacing: 3px;
}
svg #base1 {
  fill: white;
  -webkit-mask: url(#mask1);
  mask: url(#mask1);
}

svg #base2 {
  fill: white;
  -webkit-mask: url(#mask2);
  mask: url(#mask2);
}

svg #base3 {
  fill: white;
  -webkit-mask: url(#mask3);
  mask: url(#mask3);
}


svg #base4 {
  fill: white;
  -webkit-mask: url(#mask4);
  mask: url(#mask4);
}


svg #base5 {
  fill: white;
  -webkit-mask: url(#mask5);
  mask: url(#mask5);
}

 </style>
@endsection

@section('content')
 
  <!--==========================
    Intro Section
  ============================-->
  <section id="intro">
    <div class="intro-container">
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

         <!-- <div class="carousel-item active">
            <div class="carousel-background"><img src="img/intro-carousel/oil_and_gas1.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Providing
Exceptional Support Services <br>To The Oil and Gas Industry </h2>
                <p></p>
                <a href="#featured-services" class="btn-get-started scrollto">Learn More</a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="img/intro-carousel/cost.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>We deliver both
technically astute <br>  & <br> cost effective solutions.</h2>
                <p></p>
                <a href="#featured-services" class="btn-get-started scrollto">Learn More</a>
              </div>
            </div>
          </div>-->

          <div class="carousel-item active">
            <div class="carousel-background"><img src="img/group-banner.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>GVI GROUP</h2>
                <h3 style="color:white">Providing
Exceptional Support Services <br>To The Oil and Gas Industry </h3>
                
              </div>
            </div>
          </div>

       <!--   <div class="carousel-item">
            <div class="carousel-background"><img src="img/intro-carousel/valve2.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Nam libero tempore</h2>
                <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum.</p>
                <a href="#featured-services" class="btn-get-started scrollto">Learn More</a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="img/intro-carousel/valve.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Magnam aliquam quaerat</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <a href="#featured-services" class="btn-get-started scrollto">Learn More</a>
              </div>
            </div>
          </div>-->

        </div>

       <!-- <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>-->
<section id="section07" class="demo">
  <a href="#about" class="scrollto"><span style="top: 80%"></span><span style="top: 82%"></span><span style="top: 84%"></span></a>
</section>
      </div>
    </div>
  </section><!-- #intro -->

  <main id="main">

   <!--==========================
      About Us Section
    ============================-->
    <section id="about" style="background:url() !important;color: #000;">
      <div class="container text-center">

        <header class="section-header">
        <h2>Who We Are</h2>
        <p class="title">GVI Group is a broad based Company with interests in Power, Construction, Facility Maintenance as well as in Upstream and Midstream value chain of the Oil and Gas Industry.... </p>
        <a class="btn btn-success" href="{{url('about')}}">Read More</a>
        </header>

       <br> 

      </div>
    </section><!-- #about -->
  
<div class="" id="businesses">
<div class=" owl-carousel">

<div class="item " style="padding-left: 0px; padding-right: 0px;">
    <figure>
      <div class="media" style="background-image:url(/img/ngl.png)"></div>
      <figcaption>
        <svg viewBox="0 0 200 200" version="1.1" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
          <defs>
            <mask id="mask1" x="0" y="0" width="100%" height="100%">
              <rect id="alpha" x="0" y="0" width="100%" height="100%"></rect>
              <text class="title" dx="5%" dy="2.5em">GVI</text>
              <text class="title" dx="5%" dy="3.5em">NIGERIA</text>
              <text class="title" dx="5%" dy="4.5em">LIMITED</text>
            </mask>
          </defs>
          <rect id="base1" x="0" y="0" width="100%" height="100%"></rect>
        </svg>
        <div class="body">
          <p>Providing both cost effective procurement support from OEMs as well as onsite maintenance and installation services to Oil and Gas Facilities.</p>
        </div>
      </figcaption><a href="https://ngl.gvi-group.com"></a>
    </figure>
  </div>
  <div class="item " style="padding-left: 0px; padding-right: 0px;">
    <figure>
      <div class="media" style="background-image:url(/img/energy.jpg)"></div>
      <figcaption>
        <svg viewBox="0 0 200 200" version="1.1" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
          <defs>
            <mask id="mask2" x="0" y="0" width="100%" height="100%">
              <rect id="alpha" x="0" y="0" width="100%" height="100%"></rect>
              <text class="title" dx="5%" dy="2.5em">GVI</text>
              <text class="title" dx="5%" dy="3.5em">INTEGRATED</text>
              <text class="title" dx="5%" dy="4.5em">ENERGY</text>

              <text class="title" dx="5%" dy="5.5em">SOLUTIONS</text>
            </mask>
          </defs>
          <rect id="base2" x="0" y="0" width="100%" height="100%"></rect>
        </svg>
        <div class="body">
          <p>Providing fully integrated Contractor financed Engineering solutions to multinational and Independent Companies.</p>
          
        </div>
      </figcaption><a href="https://energy.gvi-group.com"></a>
    </figure>
  </div>
  <div class="item " style="padding-left: 0px; padding-right: 0px;">
    <figure>
      <div class="media" style="background-image: linear-gradient( 0deg, rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4 )),url(/img/construction.jpg)"></div>
      <figcaption>
        <svg viewBox="0 0 200 200" version="1.1" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
          <defs>
            <mask id="mask3" x="0" y="0" width="100%" height="100%">
              <rect id="alpha" x="0" y="0" width="100%" height="100%"></rect>
              <text class="title" dx="5%" dy="2.5em">GVI</text>
              <text class="title" dx="5%" dy="3.5em">CONSTRUCTIONS</text>
              <text class="title" dx="5%" dy="4.5em">COMPANY</text>
            </mask>
          </defs>
          <rect id="base3" x="0" y="0" width="100%" height="100%"></rect>
        </svg>
        <div class="body">
          <p>Providing it’s Clients with best possible Civil and Facility Engineering solutions that span roads, pipelines oil and platforms construction etc.</p>
          
        </div>
      </figcaption><a href="https://construction.gvi-group.com"></a>
    </figure>
  </div>

  <div class="item " style="padding-left: 0px; padding-right: 0px;">
    <figure>
      <div class="media" style="background-image:url(/img/power.jpg)"></div>
      <figcaption>
        <svg viewBox="0 0 200 200" version="1.1" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
          <defs>
            <mask id="mask4" x="0" y="0" width="100%" height="100%">
              <rect id="alpha" x="0" y="0" width="100%" height="100%"></rect>
              <text class="title" dx="5%" dy="2.5em">GVI</text>
              <text class="title" dx="5%" dy="3.5em">POWER</text>
              <text class="title" dx="5%" dy="4.5em">SOLUTIONS</text>
            </mask>
          </defs>
          <rect id="base4" x="0" y="0" width="100%" height="100%"></rect>
        </svg>
        <div class="body">
          <p>Off grid power solution provider with cost effective and green energy for solutions for industrial and residential purposes</p>
          
        </div>
      </figcaption><a href="https://power.gvi-group.com"></a>
    </figure>
  </div>

 <div class="item " style="padding-left: 0px; padding-right: 0px;">
    <figure>
      <div class="media" style="background-image:url(/img/trade.jpg)"></div>
      <figcaption>
        <svg viewBox="0 0 200 200" version="1.1" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
          <defs>
            <mask id="mask5" x="0" y="0" width="100%" height="100%">
              <rect id="alpha" x="0" y="0" width="100%" height="100%"></rect>
              <text class="title" dx="5%" dy="2.5em">GVI</text>
              <text class="title" dx="5%" dy="3.5em">TRADES AND</text>
              <text class="title" dx="5%" dy="4.5em">INVESTMENTS</text>
            </mask>
          </defs>
          <rect id="base5" x="0" y="0" width="100%" height="100%"></rect>
        </svg>
        <div class="body">
          <p>Provides effective trade route for Oil and Gas resources from the well head to refineries and ultimately to end users</p>
          
        </div>
      </figcaption><a href="https://investments.gvi-group.com"></a>
    </figure>
  </div>

  

</div>
</div>
 <section id="contact" class="section-bg wow fadeInUp">
      <div class="container text-center">
         <header class="section-header">
        <h2>CONTACT US</h2>
         </header>
<input type="hidden" id="submiturl" value="{{route('contactform.submit')}}">
     <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
              <i class="ion-ios-location-outline"></i>
              <h3>Address</h3>
              LAGOS OFFICE<address>3rd Floor, Africa Re Building Plot 1679 Karimu Kotun Street
Victoria Island.</address>
PORT HARCOURT OFFICE<address>Plot 71 Trans Amadi
layout.</address>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i class="ion-ios-telephone-outline"></i>
              <h3>Phone Number</h3>
              <p><a href="tel:+234-8182799239">+234-8182799239</a></p>
              <p><a href="tel:+234-8023002845">+234-8023002845</a></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <i class="ion-ios-email-outline"></i>
              <h3>Email</h3>
              <p><a href="mailto:info@gvi-group.com">info@gvi-group.com</a></p>
            </div>
          </div>

        </div>
        <div class="form">
          <div id="sendmessage"></div>
          <div id="errormessage"></div>
          <form action="" method="post" role="form" class="contactForm">
            @csrf
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"  />
                <div class="validation"></div>
              </div>
              <div class="form-group col-md-6">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
              <div class="validation"></div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>
        </div>

      </div>
    </section><!-- #contact -->
  

  </main>

  @endsection


@section('js')
<script>

      var owl = $('.owl-carousel');
      owl.owlCarousel({
        autoplay: true,
        loop: true,
        dots:false,
        responsive: {
          0: {
            items: 1
          },
          600: {
            items: 2
          },
          1000: {
            items: 3
          }
        }
      })
    
</script>

@endsection