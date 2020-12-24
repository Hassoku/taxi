@extends('layouts.master')
@section('content')
      <!--begin home section -->
      <section class="home-section" id="home">

         <div class="home-section-overlay"></div>

         <!--begin container -->
         <div class="container">

            <!--begin row -->
            <div class="row">
               
                  <!--begin col-md-6-->
                  <div class="col-md-6">

                     <h1>Hi. <span class="red">I'm Erika</span>. I design awesome websites.</h1>

                     <p class="hero-text">I am a website designer based in the heart of Camden Town, London.</p>

                     <!--begin popup-video-wrapper-->
                     <div class="popup-gallery-wrapper">
                           
                           <!--begin popup-video-->
                           <div class="popup-gallery">
                              
                     <a class="btn btn-warning" href="{{route('setup.queries1')}}" style="width: 150px; height: 50px;">
                                 Start
                        <i class="fas fa-play"></i>

                     </a>

                           </div>
                           <!--end popup-video-->

                           <p class="popup-video-text">Watch Presentation Video</p>

                     </div>
                     <!--end popup-video-wrapper-->

                  </div>
                  <!--end col-md-6-->

            </div>
            <!--end row -->

         </div>
         <!--end container -->

      </section>
      <!--end home section -->

      <!--begin section-white -->
      <section class="section-white" id="services">
      
         <!--begin services-wrapper -->
         <div class="services-wrapper">
               <!--begin container -->
               <div class="container">

                  <!--begin row -->
                  <div class="row">

                     <!--begin col-md-12-->
                     <div class="col-md-12 text-center">

                           <h2 class="section-title">How it works</h2>

                           <p class="section-subtitle">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text </p>

                     </div>
                     <!--end col-md-12 -->

                  </div>
                  <!--end row -->

                  <!--begin row -->
                  <div class="row">

                     <!--begin col-md-4 -->
                     <div class="col-md-4">

                           <div class="main-services">

                              <i class="pe-7s-medal"></i>

                              <h4>Step One</h4>

                              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                              <div class="card" style="width: 18rem;">
                                
                               </div>
                           </div>

                     </div>
                     <!--end col-md-4 -->

                     <!--begin col-md-4 -->
                     <div class="col-md-4">

                           <div class="main-services">

                              <i class="pe-7s-tools"></i>

                              <h4>Step Two</h4>

                              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                              
                           </div>

                     </div>
                     <!--end col-md-4 -->

                     <!--begin col-md-4 -->
                     <div class="col-md-4">

                           <div class="main-services">

                              <i class="pe-7s-umbrella"></i>

                              <h4>Step Three</h4>

                              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                              
                           </div>

                     </div>
                     <!--end col-md-4 -->

                  </div>
                  <!--end row -->
                  
               </div>
               <!--end container -->

         </div>
         <!--end services-wrapper -->

      </section>
      <!--end section-white -->

      <!--begin section-grey -->
      <section class="section-grey" id="about">
         
         <!--begin container-->
         <div class="container">

               <!--begin row-->
               <div class="row">
               
                  <!--begin col-md-6-->
                  <div class="col-md-6">

                     <!--begin col-md-6-->
                     <div class="left-image">

                           <img src="http://placehold.it/555x590" class="image-shadow width-100" alt="Happy">

                     </div>
                     <!--end col-sm-6-->
                     
                  </div>
                  <!--end col-sm-6-->
                  
                  <!--begin col-md-6-->
                  <div class="col-md-6 margin-top-20">

                     <h3>A little about me</h3>

                     <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                     
                   <!--  <ul class="benefits">
                           <li><i class="fas fa-check"></i> Quias netus magni netsum eos qui ratione sequi.</li>
                           <li><i class="fas fa-check"></i> Venis ratione sequi netus enim quia tempor magni.</li>
                           <li><i class="fas fa-check"></i> Enim ipsam netus voluptatem quia voluptas.</li>
                     </ul>--->

                     <!--begin row-->
                     <div class="row">
                     
                           <!--begin col-md-6-->
                           <div class="col-md-6">

                              <!--<ul class="freelancer-details">
                                 <li><span class="freelancer-main-details">Location</span><span class="freelancer-second-details">Manchester, UK</span></li>
                                 <li><span class="freelancer-main-details">Age</span><span class="freelancer-second-details">27 yo</span></li>
                                 <li><span class="freelancer-main-details">Freelance</span><span class="freelancer-second-details">Available</span></li>
                              </ul>-->

                           </div>
                           <!--end col-sm-6-->
                           
                           <!--begin col-md-6-->
                           <div class="col-md-6">

                              <!--<ul class="freelancer-details">
                                 <li><span class="freelancer-main-details">Phone</span><span class="freelancer-second-details">(021) 555 789</span></li>
                                 <li><span class="freelancer-main-details">Email</span><span class="freelancer-second-details myemail">hi@erika-s.com</span></li>
                                 <li><span class="freelancer-main-details">LinkedIn</span><a href="#" target="_blank"><span class="freelancer-second-details">john.smith</span></a></li>
                              </ul>-->

                           </div>
                           <!--end col-sm-6-->
                           
                     </div>
                     <!--end row-->
                     
                     <a href="#" class="btn-red small scrool">Download CV</a>

                  </div>
                  <!--end col-md-6-->
               
               </div>
               <!--end row-->
      
         </div>
         <!--end container-->
      
      </section>
      <!--end section-grey -->

      <!--begin section-white -->
      <section class="section-white">
         
         <!--begin container-->
         <div class="container">

               <!--begin row-->
               <div class="row">
               
                  <!--begin col-md-6-->
                  <div class="col-md-6">

                     <h3>Skills and Education</h3>

                     <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                  
                     <a href="#gallery" class="btn-red small scrool">Discover My Work</a>

                  </div>
                  <!--end col-sm-6-->
                  
                  <!--begin col-md-6-->
                  <div class="col-md-6">

                     <!--begin progress-list -->
                     <ul class="progress-list">
                           
                           <li>
                              <p>CSS/HTML <span>99%</span></p>
                              <div class="progress" style="height: 20px;">
                                 <div class="progress-bar" role="progressbar" style="width: 97%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                           </li>
                           
                           <li>
                              <p>jQuery <span>90%</span></p>
                              <div class="progress" style="height: 20px;">
                                 <div class="progress-bar" role="progressbar" style="width: 90%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                           </li>
                           
                           <li>
                              <p>Wordpress <span>75%</span></p>
                              <div class="progress" style="height: 20px;">
                                 <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                           </li>
                           
                           <li>
                              <p>Joomla <span>87%</span></p>
                              <div class="progress" style="height: 20px;">
                                 <div class="progress-bar" role="progressbar" style="width: 87%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                           </li>
                           
                           <li>
                              <p>SEO <span>65%</span></p>
                              <div class="progress" style="height: 20px;">
                                 <div class="progress-bar" role="progressbar" style="width: 65%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                           </li>

                     </ul>
                     <!--end progress-list -->
                     
                  </div>
                  <!--end col-md-6-->
               
               </div>
               <!--end row-->
      
         </div>
         <!--end container-->
      
      </section>
      <!--end section-white -->

      <!--begin testimonials section -->
      <section class="section-grey" id="testimonials">

         <!--begin container -->
         <div class="container">

               <!--begin row -->
               <div class="row align-items-center">

                  <!--begin col-md-5 -->
                  <div class="col-md-5 col-sm-12">

                     <h2>What People Are Saying.</h2>

                     <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                     
                           <!--begin row-->
                           <div class="row">
                           
                              <!--begin col-md-4-->
                              <div class="col-md-4 col-sm-6">

                                 <!--begin testim-platform-->
                                 <div class="testim-platform first">

                                       <p>LinkedIn</p>

                                       <div class="testim-rating">
                                          <i class="fa fa-star" aria-hidden="true"></i>
                                          <i class="fa fa-star" aria-hidden="true"></i>
                                          <i class="fa fa-star" aria-hidden="true"></i>
                                          <i class="fa fa-star" aria-hidden="true"></i>
                                          <i class="fas fa-star-half-alt" aria-hidden="true"></i>
                                       </div>

                                 </div>
                                 <!--end testim-platform-->
                                 
                              </div>
                              <!--end col-sm-4-->
                              
                              <!--begin col-md-4-->
                              <div class="col-md-4 col-sm-6">

                                 <!--begin testim-platform-->
                                 <div class="testim-platform">

                                       <p>Upwork</p>

                                       <div class="testim-rating">
                                          <i class="fa fa-star" aria-hidden="true"></i>
                                          <i class="fa fa-star" aria-hidden="true"></i>
                                          <i class="fa fa-star" aria-hidden="true"></i>
                                          <i class="fa fa-star" aria-hidden="true"></i>
                                          <i class="far fa-star" aria-hidden="true"></i>
                                       </div>

                                 </div>
                                 <!--end testim-platform-->
                                 
                              </div>
                              <!--end col-sm-4-->
                              
                           </div>
                           <!--end row-->
                           
                  </div>
                  <!--end col-md-5 -->

                  <!--begin col-md-1 -->
                  <div class="col-md-1"></div>
                  <!--end col-md-1 -->

                  <!--begin col-md-6-->
                  <div class="col-md-6">

                     <!--begin accordion -->
                     <div class="accordion" id="accordionFAQ">

                           <!--begin card -->
                           <div class="card">
                              
                              <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionFAQ">
                                 <div class="card-body">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged
                                 </div>
                              </div>

                              <div class="card-header" id="headingOne">
                                 <h5 class="mb-0">
                                 <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <img src="http://placehold.it/200x200" alt="testimonials" class="testim-img">
                                    <p class="testim-name">Alexandra Smith / <span>Manager - SmartCoders</span></p>
                                 </button>
                                 </h5>
                              </div>

                           </div>
                           <!--end card -->

                           <!--begin card -->
                           <div class="card">

                              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionFAQ">
                                 <div class="card-body">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged
                                 </div>
                              </div>

                              <div class="card-header" id="headingTwo">
                                 <h5 class="mb-0">
                                 <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <img src="http://placehold.it/200x200" alt="testimonials" class="testim-img">
                                    <p class="testim-name">John Doe / <span>CEO - Epic Design</span></p>
                                 </button>
                                 </h5>
                              </div>

                           </div>
                           <!--end card -->

                           <!--begin card -->
                           <div class="card">

                              <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionFAQ">
                                 <div class="card-body">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged
                                 </div>
                              </div>

                              <div class="card-header" id="headingThree">
                                 <h5 class="mb-0">
                                 <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <img src="http://placehold.it/200x200" alt="testimonials" class="testim-img">
                                    <p class="testim-name">Christina Pages / <span>Designer - New Fashion</span></p>
                                 </button>
                                 </h5>
                              </div>

                           </div>
                           <!--end card -->

                     </div>
                     <!--end accordion -->

                  </div>
                  <!--end col-md-6-->

               </div>
               <!--end row -->

         </div>
         <!--end container -->

      </section>
      <!--end testimonials section -->
      
      <!--begin gallery section -->
      <section class="section-white" id="gallery">

         <!--begin container -->
         <div class="container">

               <!--begin row -->
               <div class="row">
         
                  <!--begin col-md-12 -->
                  <div class="col-md-12 text-center padding-bottom-30">

                     <h2 class="section-title">Meet our team</h2>

                     <p class="section-subtitle">Discover bellow the latest projects.</p>
                     
                  </div>
                  <!--end col-md-12 -->
            
               </div>
               <!--end row -->
         
         </div>
         <!--end container -->
      
         <!--begin container -->
         <div class="container">

               <!--begin row-->
               <div class="row">

                  <!--begin col-md-4 -->
                  <div class="col-md-4 col-sm-6 col-xs-12">
                     <figure class="gallery-insta">
                           <!--begin popup-gallery-->
                           <div class="popup-gallery popup-gallery-rounded portfolio-pic">
                              <a class="popup2" href="http://placehold.it/555x370">
                                 <img src="http://placehold.it/555x370" class="width-100" alt="pic">
                                 <span class="eye-wrapper"><i class="fa fa-search-plus eye-icon" style="font-size: 38px;"></i></span>
                              </a>
                           </div>
                           <!--end popup-gallery-->
                     </figure>
                  </div>
                  <!--end col-md-4 -->

                  <!--begin col-md-4 -->
                  <div class="col-md-4 col-sm-6 col-xs-12">
                     <figure class="gallery-insta">
                           <!--begin popup-gallery-->
                           <div class="popup-gallery popup-gallery-rounded portfolio-pic">
                              <a class="popup2" href="http://placehold.it/555x370">
                                 <img src="http://placehold.it/555x370" class="width-100" alt="pic">
                                 <span class="eye-wrapper"><i class="fa fa-search-plus eye-icon" style="font-size: 38px;"></i></span>
                              </a>
                           </div>
                           <!--end popup-gallery-->
                     </figure>
                  </div>
                  <!--end col-md-4 -->

                  <!--begin col-md-4 -->
                  <div class="col-md-4 col-sm-6 col-xs-12">
                     <figure class="gallery-insta">
                           <!--begin popup-gallery-->
                           <div class="popup-gallery popup-gallery-rounded portfolio-pic">
                              <a class="popup2" href="http://placehold.it/555x370">
                                 <img src="http://placehold.it/555x370" class="width-100" alt="pic">
                                 <span class="eye-wrapper"><i class="fa fa-search-plus eye-icon" style="font-size: 38px;"></i></span>
                              </a>
                           </div>
                           <!--end popup-gallery-->
                     </figure>
                  </div>
                  <!--end col-md-4 -->

                  <!--begin col-md-4 -->
                  <div class="col-md-4 col-sm-6 col-xs-12">
                     <figure class="gallery-insta">
                           <!--begin popup-gallery-->
                           <div class="popup-gallery popup-gallery-rounded portfolio-pic">
                              <a class="popup2" href="http://placehold.it/555x370">
                                 <img src="http://placehold.it/555x370" class="width-100" alt="pic">
                                 <span class="eye-wrapper"><i class="fa fa-search-plus eye-icon" style="font-size: 38px;"></i></span>
                              </a>
                           </div>
                           <!--end popup-gallery-->
                     </figure>
                  </div>
                  <!--end col-md-4 -->

                  <!--begin col-md-4 -->
                  <div class="col-md-4 col-sm-6 col-xs-12">
                     <figure class="gallery-insta">
                           <!--begin popup-gallery-->
                           <div class="popup-gallery popup-gallery-rounded portfolio-pic">
                              <a class="popup2" href="http://placehold.it/555x370">
                                 <img src="http://placehold.it/555x370" class="width-100" alt="pic">
                                 <span class="eye-wrapper"><i class="fa fa-search-plus eye-icon" style="font-size: 38px;"></i></span>
                              </a>
                           </div>
                           <!--end popup-gallery-->
                     </figure>
                  </div>
                  <!--end col-md-4 -->

                  <!--begin col-md-4 -->
                  <div class="col-md-4 col-sm-6 col-xs-12">
                     <figure class="gallery-insta">
                           <!--begin popup-gallery-->
                           <div class="popup-gallery popup-gallery-rounded portfolio-pic">
                              <a class="popup2" href="http://placehold.it/555x370">
                                 <img src="http://placehold.it/555x370" class="width-100" alt="pic">
                                 <span class="eye-wrapper"><i class="fa fa-search-plus eye-icon" style="font-size: 38px;"></i></span>
                              </a>
                           </div>
                           <!--end popup-gallery-->
                     </figure>
                  </div>
                  <!--end col-md-4 -->

               </div>
               <!--end row -->

         </div>
         <!--end container -->

         <!--begin container -->
         <div class="container">

               <!--begin row -->
               <div class="row">
         
                  <!--begin col-md-12 -->
                  <div class="col-md-12 text-center padding-top-10">

                     <p class="follow-instagram">Like what you see? Follow me <a href="#">@erika-smith</a></p>
                     
                  </div>
                  <!--end col-md-12 -->
            
               </div>
               <!--end row -->
         
         </div>
         <!--end container -->
      
      </section>
      <!--end gallery section -->

      <!--begin pricing section -->
      <section class="section-grey" id="pricing">

         <!--begin container -->
         <div class="container">

               <!--begin row -->
               <div class="row align-items-center">

                  <!--begin col-md-4 -->
                  <div class="col-md-4 col-sm-12">

                     <h3>Great pricing plans tailored to your needs.</h3>

                     <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                     
                  </div>
                  <!--end col-md-4 -->

                  <!--begin col-md-4-->
                  <div class="col-md-4 col-sm-6">

                     <div class="price-box-white">

                           <ul class="pricing-list">

                              <li class="price-title">GRAPHIC DESIGN</li>

                              <li class="price-value">$19</li>

                              <li class="price-subtitle">Per Hour</li>

                              <li class="price-tag"><a href="#">GET STARTED</a></li>

                              <li class="price-text">First two weeks free.</li>
                              
                              <li class="price-text">Amazing freatures.</li>

                           </ul>

                     </div>

                  </div>
                  <!--end col-md-4 -->

                  <!--begin col-md-4 -->
                  <div class="col-md-4 col-sm-6">

                     <div class="price-box-grey">

                           <ul class="pricing-list">

                              <li class="price-title">Step One</li>

                              <li class="price-value">$29</li>

                              <li class="price-subtitle">Per Hour</li>

                              <li class="price-tag"><a href="#">GET STARTED</a></li>

                              <li class="price-text">First two weeks free.</li>
                              
                              <li class="price-text">Save 45% with this plan</li>

                              <li class="price-text">Amazing freatures.</li>

                           </ul>

                     </div>

                  </div>
                  <!--end col-md-4 -->

               </div>
               <!--end row -->

         </div>
         <!--end container -->

      </section>
      <!--end pricing section -->

      <!--begin faq section -->
      <section class="section-white" id="faq">

         <!--begin container -->
         <div class="container">

               <!--begin row -->
               <div class="row">

                  <!--begin col-md-12-->
                  <div class="col-md-12 text-center padding-bottom-10">

                     <h2 class="section-title">Frequently Asked Questions</h2>

                     <p class="section-subtitle">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>

                  </div>
                  <!--end col-md-12 -->

               </div>
               <!--end row -->

               <!--begin row -->
               <div class="row">

                  <!--begin col-md-6-->
                  <div class="col-md-6">

                     <div class="faq-box">

                           <h5>Velit ut tortizi pretium viverra suspendisse?</h5>

                           <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>

                     </div>

                     <div class="faq-box">

                           <h5>Maecenas volutpat blandit etiam?</h5>

                           <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>

                     </div>
                     
                  </div>
                  <!--end col-md-6 -->

                  <!--begin col-md-6-->
                  <div class="col-md-6">

                     <div class="faq-box">

                           <h5>Nibh sit amet aliquam commodo?</h5>

                           <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>

                     </div>

                     <div class="faq-box">

                           <h5>Elementum curabitur vitae?</h5>

                           <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>

                     </div>

                  </div>

                  <!--end col-md-6 -->

               </div>
               <!--end row -->

         </div>
         <!--end container -->

      </section>
      <!--end faq section -->

      <!--begin section-bg-1 -->
      <section class="section-bg-1">
         
         <div class="section-bg-red-overlay"></div>

         <!--begin container-->
         <div class="container">

               <!--begin row-->
               <div class="row">
               
                  <!--begin col md 7 -->
                  <div class="col-md-7 mx-auto margin-bottom-20 text-center">

                     <h3 class="white-text">Fun Facts About My Work</h3>

                  </div>
                  <!--end col md 7-->
               
               </div>
               <!--end row-->
      
               <!--begin row-->
               <div class="row">
         
                  <!--begin fun-facts-box -->
                  <div class="col-md-2 offset-md-2 fun-facts-box text-center">
                     
                     <i class="far fa-gem"></i>
                     
                     <p class="fun-facts-title"><span class="facts-numbers">1050+</span><br>Projects Completed</p>
                     
                  </div>
                  <!--end fun-facts-box -->

                  <!--begin fun-facts-box -->
                  <div class="col-md-2 fun-facts-box text-center">
                     
                     <i class="far fa-heart"></i>
                                                
                     <p class="fun-facts-title"><span class="facts-numbers">217k</span><br>Happy Clients</p>
                           
                  </div>
                  <!--end fun-facts-box -->

                  <!--begin fun-facts-box -->
                  <div class="col-md-2 fun-facts-box text-center">
                     
                     <i class="fas fa-award"></i>
                                                
                     <p class="fun-facts-title"><span class="facts-numbers">1210</span><br>Design Awards</p>
                           
                  </div>
                  <!--end fun-facts-box -->

                  <!--begin fun-facts-box -->
                  <div class="col-md-2 fun-facts-box text-center">
                     
                     <i class="fas fa-anchor"></i>
                                                
                     <p class="fun-facts-title"><span class="facts-numbers">2137</span><br>Line Of Codes</p>
                           
                  </div>
                  <!--end fun-facts-box -->

               </div>
               <!--end row-->
      
         </div>
         <!--end container-->
      
      </section>
      <!--end section-bg-1 -->

      <!--begin section-white -->
      <section class="section-white no-padding" id="contact">
         
         <!--begin container-->
         <div class="container-fluid px-0">

               <!--begin row-->
               <div class="row no-gutters align-items-center">
               
                  <!--begin col-md-6-->
                  <div class="col-md-6">

                     <img src="http://placehold.it/795x755" class="bottom-margins-images width-100" alt="Happy">

                  </div>
                  <!--end col-sm-6-->
                  
                  <!--begin col-md-6-->
                  <div class="col-md-6">

                     <!--begin small-column-inside-->
                     <div class="small-col-inside">

                           <h3>Get In Touch</h3>

                           <p>Please contact me using the form bellow.</p>

                           <!--begin success message -->
                           <p class="contact_success_box" style="display:none;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</p>
                           <!--end success message -->

                           <!--begin contact form -->
                           <form id="contact-form" class="contact" action="php/contact.php" method="post">

                              <input class="contact-input white-input" required="" name="contact_names" placeholder="Full Name*" type="text">

                              <input class="contact-input white-input" required="" name="contact_email" placeholder="Email Adress*" type="email">

                              <input class="contact-input white-input" required="" name="contact_phone" placeholder="Phone Number*" type="text">

                              <textarea class="contact-commnent white-input" rows="2" cols="20" name="contact_message" placeholder="Your Message..."></textarea>

                              <input value="Get In Touch" id="submit-button" class="contact-submit" type="submit">

                           </form>
                           <!--end contact form -->

                           <p class="register-form-terms">Free Quotes • TrustMark Accredited</p>

                     </div>
                     <!--end small-column-inside-->

                  </div>
                  <!--end col-md-6-->
               
               </div>
               <!--end row-->
      
         </div>
         <!--end container-->
      
      </section>
      <!--end section-white -->

@endsection


   
   


   