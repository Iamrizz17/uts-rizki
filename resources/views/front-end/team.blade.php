@extends('front-end/master')  

@section('title', 'Our Personnel')

@section('konten')

<!-- team section -->

<section class="team_section layout_padding">
    <div class="container-fluid">
      <div class="heading_container">
        <h2>
          Our Personnel
        </h2>
        <p>
        Dream as if you will live forever And live as if you'll die today.
        </p>
      </div>
      <div class="carousel-wrap ">
        <div class="owl-carousel team_carousel">
          <div class="item">
            <div class="box">
              <div class="img-box">
                <img src="{{ asset('assets/front-end/images/oneoktaka.jpg') }}" alt="" />
              </div>
              <div class="detail-box">
                <h6> Vocal</h6>
                <h6>
                  Takahiro Moriuchi
                </h6>
                <div class="social_box">
                  <a href="">
                    <i class="fa fa-facebook" aria-hidden="true"></i>
                  </a>
                  <a href="">
                    <i class="fa fa-twitter" aria-hidden="true"></i>
                  </a>
                  <a href="">
                    <i class="fa fa-linkedin" aria-hidden="true"></i>
                  </a>
                  <a href="">
                    <i class="fa fa-instagram" aria-hidden="true"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="box">
              <div class="img-box">
                <img src="{{ asset('assets/front-end/images/oneoktoru.jpg') }}" alt="" />
              </div>
              <div class="detail-box">
                <h6> Lead Guitar </h6>
                <h6>
                  Toru Yamashita
                </h6>
                <div class="social_box">
                  <a href="">
                    <i class="fa fa-facebook" aria-hidden="true"></i>
                  </a>
                  <a href="">
                    <i class="fa fa-twitter" aria-hidden="true"></i>
                  </a>
                  <a href="">
                    <i class="fa fa-linkedin" aria-hidden="true"></i>
                  </a>
                  <a href="">
                    <i class="fa fa-instagram" aria-hidden="true"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="box">
              <div class="img-box">
                <img src="{{ asset('assets/front-end/images/oneoktomoya.jpg') }}" alt="" />
              </div>
              <div class="detail-box">
                <h6>
                    Drummer
                </h6>
                <h6>
                  Tomoya Kanki
                </h6>
                <div class="social_box">
                  <a href="">
                    <i class="fa fa-facebook" aria-hidden="true"></i>
                  </a>
                  <a href="">
                    <i class="fa fa-twitter" aria-hidden="true"></i>
                  </a>
                  <a href="">
                    <i class="fa fa-linkedin" aria-hidden="true"></i>
                  </a>
                  <a href="">
                    <i class="fa fa-instagram" aria-hidden="true"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="box">
              <div class="img-box">
                <img src="{{ asset('assets/front-end/images/oneokryota.jpg') }}" alt="" />
              </div>
              <div class="detail-box">
                <h6> Bassist</h6>
                <h6>
                  Ryota Kohama
                </h6>
                <div class="social_box">
                  <a href="">
                    <i class="fa fa-facebook" aria-hidden="true"></i>
                  </a>
                  <a href="">
                    <i class="fa fa-twitter" aria-hidden="true"></i>
                  </a>
                  <a href="">
                    <i class="fa fa-linkedin" aria-hidden="true"></i>
                  </a>
                  <a href="">
                    <i class="fa fa-instagram" aria-hidden="true"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
          
  </section>

  <!-- end team section -->

  <!-- info section -->
<section class="info_section layout_padding2">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <div class="info_contact">
          <h5>Address</h5>
          <div class="contact_link_box">
            <a href="">
              <i class="fa fa-map-marker" aria-hidden="true"></i>
              <span>Tokyo, Japan</span>
            </a>
            <a href="">
              <i class="fa fa-phone" aria-hidden="true"></i>
              <span>Call +01 1234567890</span>
            </a>
            <a href="">
              <i class="fa fa-envelope" aria-hidden="true"></i>
              <span>oneokrock.world@gmail.com</span>
            </a>
          </div>
        </div>
        <div class="info_social">
          <a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
          <a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
          <a href=""><i class="fa fa-linkedin" aria-hidden="true"></i></a>
          <a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a>
        </div>
      </div>
      <div class="col-md-4">
        <div class="info_link_box">
        <h5>
  Navigation
</h5>
<div class="info_links">
  <a href="{{ url('/') }}"> <i class="fa fa-angle-right" aria-hidden="true"></i> Home</a>
  <a href="{{ url('/about') }}"> <i class="fa fa-angle-right" aria-hidden="true"></i> About Us</a>
  <a class="active" href="{{ url('/team') }}"> <i class="fa fa-angle-right" aria-hidden="true"></i> Our Personnel</a>
  <a href="{{ url('/contact') }}"> <i class="fa fa-angle-right" aria-hidden="true"></i> Ask Anything</a>
</div>

        </div>
      </div>
      <div class="col-md-4">
        <h5>Get our notification</h5>
        <form action="">
          <input type="text" placeholder="Enter Your email" />
          <button type="submit">Subscribe</button>
        </form>
      </div>
    </div>
  </div>
</section>

  <!-- end info section -->

   @endsection
