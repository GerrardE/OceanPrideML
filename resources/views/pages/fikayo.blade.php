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
          <h3 class="profile-corporate__title">FIKAYO OLUSOLA</h3>
          <p class="profile-corporate__subtitle">Director</p>
          <p>Fikayo is a Barrister and Solicitor of the Supreme Court of Nigeria. Since his call to the Nigerian Bar, he has worked in various capacities at a number of reputable Law Firms within Nigeria, notable among which are Chief Afe Babalola Chambers and Boundless Solicitors. 
                He holds a Master of Laws (LLM) in Maritime and Telecommunications Law from the University of Hertfordshire UK
                His areas of competence also extend to Corporate Commercial Law, International Commercial Law and Intellectual Property Law. 
                Fikayo is a member of the International Bar Association and the International Telecommunications Society and currently brings his legal expertise to bear on the board of directors of Ocean Pride Multy links Ltd. 
                </p>
        </div>
      </article>
    </div>
  </section>
@endsection