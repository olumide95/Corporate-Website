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
.section-header h3::after,.section-header h3::before{

    display:none
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
            <div class="carousel-background"><img src="{{ asset('img/call-to-action-bg.jpg')}}" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>QHSE</h2>
          
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

<div class="row">
  <div class="col-md-12">

<div class="section-header"> 


<!-- Create a tag that we will use as the editable area. -->
<!-- You can use a div tag as well. -->
<h3 class="pull-left">Quality Statement</h3></div>

  </div>
          <div class="col-md-12">

           
         
<p class="pull-left">It is the Policy of GVI Nigeria Limited & its Technical Partners to provide process technology and services that are devoid of errors and meet requirement of our clients. We are committed to understanding the specific requirements of our clients, mutually establishing what is to be provided in order to meet them and performing our work right the first time.</p>

</div> 

       <div class="col-md-12">

<div class="section-header"> 


<!-- Create a tag that we will use as the editable area. -->
<!-- You can use a div tag as well. -->
<h3 class="pull-left">Health Safety & Environment</h3></div>

  </div>
          <div class="col-md-12">

           
         
<p class="pull-left">At GVI, Health, Safety and Environmental (HSE) responsibilities are integral to the way we do business. Successfully managing HSE issues is an essential component of our business strategy. Through observance and encouragement of this policy, we assist in protecting the environment and overall wellbeing of all our stakeholders; specifically, our clients, employees, shareholders, subcontractors, and communities. In order to achieve these objectives, we will identify HSE risks arising from our activities and reduce them to the lowest practical levels.</p>

</div>   


          </div>

  
      </div>
    
    </section><!-- #about -->
  </main>

  @endsection