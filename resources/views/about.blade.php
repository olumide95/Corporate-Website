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
                <h2>ABOUT US</h2>
          
              </div>
            </div>
          </div>      

        </div>

        

      </div>
    </div>
  </section><!-- #intro -->

  <main id="main">

 
    <!--==========================
      About Us Section
    ============================-->
    <section id="about">
    
      <div class="container">


@guest
    @includeWhen(!isset(\App\Page::where('route','=','about')->latest()->first()->content), 'pages.about')
    @if(isset(\App\Page::where('route','=','about')->latest()->first()->content)){!! \App\Page::where('route','=','about')->latest()->first()->content !!} @endif
@else
    @if(session('edit') == 1)
      <form action="{{route('about.edit')}}" method="POST">
        @csrf
      <textarea id="edit" name="content">

    @endif
    @includeWhen(!isset(\App\Page::where('route','=','about')->latest()->first()->content), 'pages.about')
    @if(isset(\App\Page::where('route','=','about')->latest()->first()->content)){!! \App\Page::where('route','=','about')->latest()->first()->content !!} @endif

    @if(session('edit') == 1)
      </textarea>
      <br>
      <button class="btn btn-success" >Update</button>
      </form><br>
      <form action="{{route('about.edit')}}" method="POST" >
          @csrf <input type="hidden" name="rollback" value="1"> <button type="submit" class="btn btn-success" @if(!isset(\App\Page::where('route','=','about')->latest()->first()->content)) {{'disabled'}} @endif> <i class="fa fa-undo"></i> Restore Previous Update</button></form>
    @endif
@endif

 
  
      </div>
    
    </section><!-- #about -->
  </main>

  @endsection