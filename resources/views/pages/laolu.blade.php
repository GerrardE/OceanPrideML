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
          <h3 class="profile-corporate__title">LAOLU MARTINS</h3>
          <p class="profile-corporate__subtitle">Chairman</p>
          <p>Mr. Martins holds a B.Sc. Degree in Business Administration from the University of Lagos; he is a Chartered Stockbroker and a Chartered Accountant with 12 years’ experience in investment banking, corporate banking, stockbroking, asset management and pension fund management. 
                He started his career with PricewaterhouseCoopers in 1999, joined Investment Banking & Trust Company Plc (now Stanbic IBTC Bank Plc) in 2000 where he served in the Financial Control and Trade Finance/Foreign Operations units of the Bank before being seconded to Stanbic IBTC Asset Management Ltd where at various times he was Financial Controller, Head Asset Management and lastly Head Stockbroking before resigning in November 2005 to join Shell Nig. CPFA Ltd (the Fund Manager of the Shell Companies in Nigeria Pensions Scheme with assets under management of over N148billion, as at June 2008) where he was Head - Investments up till June 2008 when he resigned to join NISL.
                </p>
        </div>
      </article>
    </div>
  </section>
@endsection