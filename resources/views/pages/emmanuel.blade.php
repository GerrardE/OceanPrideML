@extends('layouts.app')
@section('content')
@include('includes.nav')
<section class="bg-gray-dark">
    <section class="section parallax-container" data-parallax-img="{{ asset('images/opml-bg-image-3.jpg')}}">
      <div class="parallax-content parallax-header"> 
        <div class="parallax-header__inner">
          <div class="parallax-header__content">
            <div class="container">
              <div class="row justify-content-sm-center">
                <div class="col-md-10 col-xl-8"> 
                  <h2 class="heading-decorated">PROFILE </h2>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  </section>

  <!-- PROFILE-->
  <section class="section-lg bg-default">
    <div class="container">
      <!-- Profile Corporate-->
      <article class="profile-corporate"><img class="profile-corporate__image" src="images/taylor-wilson-980x980.jpg" alt="" width="980" height="980"/>
        <div class="profile-corporate__caption"> 
          <h3 class="profile-corporate__title">EMMANUEL NWAZUE</h3>
          <p class="profile-corporate__subtitle">Chairman</p>
          <p>Strategic and multifaceted business man with an eye for viable opportunities and the requisite strategic vision to achieve business goals; Emmanuel Nwazue offers a unique blend of executive acumen, team-building, a strong return on investment and operational improvement. 
                Emmanuel Nwazue is the Managing Director at Ocean Pride Multy links ltd, His greatest expertise revolves in the worlds of logistic solutions performance management and strategy development. 
                He is an astute business man and possesses many years of cognate experience in Oil & Gas, Mining, Business and Logistics. He actively participates in consummating many logistic and Mining transactions in Nigeria, including acquisitions and in the operation of Oil and Gas Vessels in Nigeria. His has an impressive network of qualified relationships affiliates and an extensive skill set. 
                Emmanuel Nwazue attended university at the University of Lagos, Akoka Yaba; from where he obtained a B.Sc in Mass Communication.
                </p>
        </div>
      </article>
    </div>
  </section>

@endsection