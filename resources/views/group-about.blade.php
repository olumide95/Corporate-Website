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
<div class="row">
  <div class="col-md-12">

<div class="section-header"> 


<!-- Create a tag that we will use as the editable area. -->
<!-- You can use a div tag as well. -->
<h3 class="">GVI Group</h3></div>

  </div>
          <div class="col-md-12">

           
         
<p class="">GVI Group is a broad based Company with interests in Power, Construction, Facility Maintenance as well as in Upstream and Midstream value chain of the Oil and Gas Industry.  
</p>
<p class="">We were incorporated to provide one stop support to all Engineering needs and seek ways to ultimately create value with our Ideas.</p>
          
<div class="col-md-12"><br></div>
     <div class="col-md-12">
       
<div class="section-header"> 
<h3 class="">OUR BOARD OF DIRECTORS</h3>
</div>

</div> 
<div class="row">    
<div class="col-md-6">
<h5 class="" style="font-weight:bold">Chikwe Edoziem – Chairman</h5>
 <p class="">Dr. Edoziem recently retired from ExxonMobil as the Executive Director and General Manager, Exploration after 36 years of meritorious service in the Oil and Gas Industry with the last twenty-six years spent in ExxonMobil. He provides effective guidance to the GVI board.</p>
    </div>   

<div class="col-md-6">
<h5 class="" style="font-weight:bold">Festus Oluwaseun – Managing Director</h5>
 <p class="">Mr. Festus Oluwaseun has over 27 years corporate work experience in Accounting, Corporate Finance, Investment Banking, Audit, Tax and Treasury functions, with the last 15 years in the Oil and Gas sector. He serves as Managing Director/Chief Executive Officer to the GVI group.</p>
  </div>   

 <div class="col-md-6">
 <h5 class="" style="font-weight:bold">Engineer Mike Alawode – Executive Director</h5>
 <p class="">Engr. Michael has over 28 years work experience in civil & facilities engineering, project initiation, development, execution and management, human and materials resources management in the oil, gas, power, industrial & public Infrastructures construction sector. His experiences span the whole 9 yards of the upstream industry.</p>
    </div>   
<div class="col-md-6">
 <h5 class="" style="font-weight:bold">Chika Onyewuchi – Executive Director</h5>
 <p class="">Mr. Onyewuchi is an Executive Director with GVI Nigeria Limited and has over 8 years experience in the oil and gas sector. His skill sets span Contracts and Procurement, Well Site Operations, Reserves and Business Analysis, Operations Geology and Seismic Interpretation</p>
    </div>   
<div class="col-md-6">
 <h5 class="" style="font-weight:bold">Donald Ibebuike – Company Secretary</h5>
 <p class="">Barr. Donald Ibebuike is a Law graduate with over 17 years in Oil & Gas Law. He holds an LL.B Hons and was called to the Nigerian Bar in 2004. He obtained an LLM in Oil & Gas Law in 2010 from the prestigious University of Aberdeen, UK. He is also very experienced in Shipping and Maritime Laws.</p>
    </div>   
<div class="col-md-6">
 <h5 class="" style="font-weight:bold">Dwight Schmitz – Group Technical Director</h5>
 <p class="">Dwight has over 15 years of experience in the oil and gas industry; with the ability to produce solid business relationships which is verified through his former role as president and owner of Inline Valve and Spyder Solutions. Inline Valve and Spyder Solutions was a competitive oil and gas supplier of valves, automation, and instrumentation/electrical parts.</p>
    </div>   </div>   


          </div>

 
  
      </div>
    
    </section><!-- #about -->
  </main>

  @endsection