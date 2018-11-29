@extends('layouts.app')
@section('content')
@include('includes.nav')
<section>
        <div class="swiper-container swiper-slider swiper-slider_fullheight bg-gray-dark" data-simulate-touch="false" data-loop="true" data-autoplay="5000">
          <div class="swiper-wrapper">
            <div class="swiper-slide" data-slide-bg="{{ asset('images/opml-slider-1.jpg')}}">
              <div class="swiper-slide-caption text-left">
                <div class="container">
                  <div class="row justify-content-center justify-content-xxl-start">
                    <div class="col-lg-10 col-xxl-6">
                      <h1 data-caption-animate="fadeInUpSmall">NIGER BENUE TROUGH</h1>
                      <h5 class="font-weight-normal" data-caption-animate="fadeInUpSmall" data-caption-delay="200">Solid mineral production opportunity of up to 6,000m Cretaceous-Tertiary Sediment!</h5><a class="button button-primary" data-caption-animate="fadeInUpSmall" data-caption-delay="350" href="#">Know More</a>
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="swiper-slide text-center swiper-slide-overlay" data-slide-bg="{{ asset('images/opml-slider-2.jpg')}}">
              <div class="swiper-slide-caption">
                <div class="container">
                  <div class="row justify-content-lg-center">
                      <div class="col-lg-10 col-xxl-6">
                          <h1 data-caption-animate="fadeInUpSmall">NIGER BENUE TROUGH</h1>
                          <h5 class="font-weight-normal" data-caption-animate="fadeInUpSmall" data-caption-delay="200">Silver Deposits</h5><a class="button button-primary" data-caption-animate="fadeInUpSmall" data-caption-delay="350" href="#">Know More</a>
                          
                        </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="swiper-slide text-right swiper-slide-overlay" data-slide-bg="{{ asset('images/opml-slider-3.jpg')}}">
              <div class="swiper-slide-caption"> 
                <div class="container">
                  <div class="row justify-content-center justify-content-xxl-end">
                      <div class="col-lg-10 col-xxl-6">
                          <h1 data-caption-animate="fadeInUpSmall">NIGER BENUE TROUGH</h1>
                          <h5 class="font-weight-normal" data-caption-animate="fadeInUpSmall" data-caption-delay="200">Gold Deposits</h5><a class="button button-primary" data-caption-animate="fadeInUpSmall" data-caption-delay="350" href="#">Know More</a>
                          
                        </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Swiper Pagination-->
          <div class="swiper-pagination"></div>
          <!-- Swiper Navigation-->
          <div class="linear-icon-chevron-left"><i class="fa fa-chevron-left swiper-button-prev"></i></div>
          <div class="linear-icon-chevron-right"><i class="fa fa-chevron-right swiper-button-next"></i></div>
        </div>
      </section>

      <section class="section-md bg-accent bg-gray-lighter text-center">
        <div class="container">
          <div class="row justify-content-md-center">
            <div class="col-md-11 col-lg-9 col-xl-8">
              <h5 class="heading-decorated">
                  "OCEANPRIDE MULTYLINKS Limited is a private limited Nigerian company that engages in Solid Minerals prospecting,
                  exploration, extraction, mining and refining. We focus on achieving solid management, 
                 operational excellence, optimized capital structures and sound long term strategic and business objectives."</h5>
            </div>
          </div>
        </div>
      </section>

      <!-- Our Services-->
      <section class="section-md bg-default text-center">
        <div class="container"> 
          <h4 class="heading-decorated">Services</h4>
          <div class="row row-50 justify-content-md-center justify-content-lg-start">
            <div class="col-md-6 col-xl-4">
              <!-- Blurb circle-->
              <article class="blurb blurb-minimal">
                <div class="unit flex-row unit-spacing-md">
                  <div class="unit-left">
                    <div class="blurb-minimal__icon"><i class="fa fa-legal fa-4x"></i> </div>
                  </div>
                  <div class="unit-body">
                    <p class="blurb__title heading-6"><a href="#">Mining</a></p>
                    <p>The OPML mining project taps into Nigeria's rich deposits of LEAD, ZINC, GOLD, SILVER TIN and other precious metals.</p>
                  </div>
                </div>
              </article>
            </div>
            <div class="col-md-6 col-xl-4">
              <!-- Blurb circle-->
              <article class="blurb blurb-minimal">
                <div class="unit flex-row unit-spacing-md">
                  <div class="unit-left">
                    <div class="blurb-minimal__icon"><i class="fa fa-opencart fa-4x"></i> </div>
                  </div>
                  <div class="unit-body">
                    <p class="blurb__title heading-6"><a href="#">Exports</a></p>
                    <p>We have partners all over the world who enjoy the quality of our goods and services</p>
                  </div>
                </div>
              </article>
            </div>
            <div class="col-md-6 col-xl-4">
              <!-- Blurb circle-->
              <article class="blurb blurb-minimal">
                <div class="unit flex-row unit-spacing-md">
                  <div class="unit-left">
                    <div class="blurb-minimal__icon"><i class="fa fa-transgender-alt fa-4x"></i> </div>
                  </div>
                  <div class="unit-body">
                    <p class="blurb__title heading-6"><a href="#">Business Consulting</a></p>
                    <p>Our team of experts are ready to offer professional advice for rapid business growth.</p>
                  </div>
                </div>
              </article>
            </div>
          </div>
        </div>
      </section>

      <section class="section-md text-center bg-default">
          <div class="container">
            <h4 class="heading-decorated">Strategic Partner</h4>
            <div class="row">
              <div class="col-sm-3 col-md-3">
                <figure class="box-icon-image"><a href="#"><img src="images/Minutorlogo-e.png" alt="" style="width: 50%; height:auto" width="126" height="102"/></a></figure>
              </div>

              <div class="col-sm-9 col-md-9 ">
                <p class="js">Minutor mining is our South African Partner that provides services which cover the full range of the mining value chain, ranging from greenfields exploration to mine optimisation and mine design. 
                  The company is currently in partnership with us to ensure that we achieve optimisation of operations at our mine fields. </p>
              </div>
              
            </div>
          </div>
        </section>
@endsection