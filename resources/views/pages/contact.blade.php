@extends('layouts.app')
@section('content')
@include('includes.nav')
<section class="bg-gray-dark">
        <section class="section parallax-container" data-parallax-img="images/opml-bg-image-2.jpg">
          <div class="parallax-content parallax-header">
            <div class="parallax-header__inner">
              <div class="parallax-header__content">
                <div class="container">
                  <div class="row justify-content-sm-center">
                    <div class="col-md-10 col-xl-8">
                      <h2 class="heading-decorated">Contact</h2>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

</section>


<section class="section-md bg-default">
  <div class="container">
    <div class="row row-50">
      <div class="col-md-5 col-lg-4">
        <h4 class="heading-decorated">Contact Details</h4>
        <ul class="list-sm contact-info">
          <li>
            <dl class="list-terms-inline">
              <dt>Address</dt>
              <dd>16, Alhaji Kanike Street 
                South-West Ikoyi, Lagos</dd>
            </dl>
          </li>
          <li>
            <dl class="list-terms-inline">
              <dt>Phones</dt>
              <dd>
                <ul class="list-semicolon">
                  <li><a href="tel:#">(+234) OPML</a></li>
                </ul>
              </dd>
            </dl>
          </li>
          <li>
            <dl class="list-terms-inline">
              <dt>We are open</dt>
              <dd>Mn-Fr: 8 am-5 pm</dd>
            </dl>
          </li>
          <!--li>
            <ul class="list-inline-sm">
              <li><a class="icon-sm fa-facebook novi-icon icon" href="#"></a></li>
              <li><a class="icon-sm fa-twitter novi-icon icon" href="#"></a></li>
              <li><a class="icon-sm fa-google-plus novi-icon icon" href="#"></a></li>
              <li><a class="icon-sm fa-vimeo novi-icon icon" href="#"></a></li>
              <li><a class="icon-sm fa-youtube novi-icon icon" href="#"></a></li>
              <li><a class="icon-sm fa-pinterest-p novi-icon icon" href="#"></a></li>
            </ul>
          </li-->
        </ul>
      </div>
      <div class="col-md-7 col-lg-8">
        <h4 class="heading-decorated">Get in Touch</h4>
        <!-- RD Mailform-->
        <form class="rd-mailform rd-mailform_style-1" data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php">
          <div class="form-wrap form-wrap_icon ">
            <input class="form-input" id="contact-name" type="text" name="name" data-constraints="@Required">
            <label class="form-label" for="contact-name">Your name</label>
          </div>
          <div class="form-wrap form-wrap_icon ">
            <input class="form-input" id="contact-email" type="email" name="email" data-constraints="@Email @Required">
            <label class="form-label" for="contact-email">Your e-mail</label>
          </div>
          <div class="form-wrap form-wrap_icon ">
            <textarea class="form-input" id="contact-message" name="message" data-constraints="@Required"></textarea>
            <label class="form-label" for="contact-message">Your message</label>
          </div>
          <button class="button button-primary" type="submit">send</button>
        </form>
      </div>
    </div>
  </div>
</section>

@endsection