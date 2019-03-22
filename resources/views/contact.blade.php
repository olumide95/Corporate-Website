@extends('layouts.guest-app')

@section('style')
<style type="text/css">
   
   #header{

        background: black;
   }

   #intro {
  height: 50vh;
}

#intro .carousel-item {
  height: 50vh;

}
 </style>
@endsection

@section('content')
 <!--==========================
    Intro Section
  ============================-->
  <br><br><br>
  <section id="intro">
    <div class="intro-container">
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

       

        <div class="carousel-inner" role="listbox">


          <div class="carousel-item active">
            <div class="carousel-background"><img src="{{ asset('img/intro-carousel/banner1.jpg')}}" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>CONTACT US</h2>
          
              </div>
            </div>
          </div>      

        </div>

        

      </div>
    </div>
  </section><!-- #intro -->

  <main id="main">

<!--==========================
      Contact Section
    ============================-->
    <section id="contact" class="section-bg wow fadeInUp">
      <div class="container">
<input type="hidden" id="submiturl" value="{{route('contactform.submit')}}">
        

@guest
    @includeWhen(!isset(\App\Page::where('route','=','contact')->latest()->first()->content), 'pages.contact')
    @if(isset(\App\Page::where('route','=','contact')->latest()->first()->content)){!! \App\Page::where('route','=','contact')->latest()->first()->content !!} @endif
@else
    @if(session('edit') == 1)
      <form action="{{route('contact.edit')}}" method="POST">
        @csrf
      <textarea id="edit" name="content">

    @endif
    @includeWhen(!isset(\App\Page::where('route','=','contact')->latest()->first()->content), 'pages.contact')
    @if(isset(\App\Page::where('route','=','contact')->latest()->first()->content)){!! \App\Page::where('route','=','contact')->latest()->first()->content !!} @endif
    @if(session('edit') == 1)
      </textarea>
      <br>
      <button class="btn btn-success" >Update</button>
      </form>
      <br>
      <form action="{{route('contact.edit')}}" method="POST" >
          @csrf <input type="hidden" name="rollback" value="1"> <button type="submit" class="btn btn-success" @if(!isset(\App\Page::where('route','=','contact')->latest()->first()->content)) {{'disabled'}} @endif> <i class="fa fa-undo"></i> Restore Previous Update</button></form>
        <br>
    @endif
@endif


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