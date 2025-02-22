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
            <div class="carousel-background"><img src="{{ asset('img/intro-carousel/cost.jpg')}}" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Procurement & Supply</h2>
          
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
    @includeWhen(!isset(\App\Page::where('route','=','procurement-supply')->latest()->first()->content), 'pages.procurement-supply')
    @if(isset(\App\Page::where('route','=','procurement-supply')->latest()->first()->content)){!! \App\Page::where('route','=','procurement-supply')->latest()->first()->content !!} @endif
@else
    @if(session('edit') == 1)
      <form action="{{route('procurement-supply.edit')}}" method="POST">
        @csrf
      <textarea id="edit" name="content">

    @endif
    @includeWhen(!isset(\App\Page::where('route','=','procurement-supply')->latest()->first()->content), 'pages.procurement-supply')
    @if(isset(\App\Page::where('route','=','procurement-supply')->latest()->first()->content)){!! \App\Page::where('route','=','procurement-supply')->latest()->first()->content !!} @endif
 
    @if(session('edit') == 1)
      </textarea>
      <br>
      <button class="btn btn-success" >Update</button>
      </form>
<br>
      <form action="{{route('procurement-supply.edit')}}" method="POST" ><input type="hidden" name="rollback" value="1">
      @csrf
      <button type="submit" class="btn btn-success" @if(!isset(\App\Page::where('route','=','procurement-supply')->latest()->first()->content)) {{'disabled'}} @endif> <i class="fa fa-undo"></i> Restore Previous Update</button></form>
    @endif
@endif

      </div>
    </section><!-- #about -->



  

  </main>

  @endsection