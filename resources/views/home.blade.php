@extends('layouts.guest-app')

@section('style')
<style type="text/css">
 
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

          <div class="carousel-item active">
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
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="img/intro-carousel/well-head.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>GVI NIGERIA LIMITED</h2>
                <p>Our core values of Professionalism, Diversity and Safety steer us on the critical path to our vision of becoming the best professional service provider.</p>
                <a href="#featured-services" class="btn-get-started scrollto">Learn More</a>
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

        <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section><!-- #intro -->

  <main id="main">
@guest
    @includeWhen(!isset(\App\Page::where('route','=','home')->latest()->first()->content), 'pages.home')
     @if(isset(\App\Page::where('route','=','home')->latest()->first()->content)){!! \App\Page::where('route','=','home')->latest()->first()->content !!} @endif
@else
    @if(session('edit') == 1)
      <form action="{{route('home.edit')}}" method="POST">
        @csrf
      <textarea id="edit" name="content">

    @endif
    @includeWhen(!isset(\App\Page::where('route','=','home')->latest()->first()->content), 'pages.home')
    @if(isset(\App\Page::where('route','=','home')->latest()->first()->content)){!! \App\Page::where('route','=','home')->latest()->first()->content !!} @endif
    @if(session('edit') == 1)
      </textarea>
      <br>
      <button class="btn btn-success" >Update</button>
      </form>
      <br>
      <form action="{{route('home.edit')}}" method="POST" > 
      @csrf <input type="hidden" name="rollback" value="1"> <button type="submit" class="btn btn-success" @if(!isset(\App\Page::where('route','=','home')->latest()->first()->content)) {{'disabled'}} @endif> <i class="fa fa-undo"></i> Restore Previous Update</button></form>
       <br>
    @endif
@endif

 
     
  </main>

  @endsection