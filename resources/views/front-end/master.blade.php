<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>@yield('title')</title>

  <!-- owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/front-end/css/bootstrap.css') }}" />

  <!-- fonts awesome style -->
  <link href="{{ asset('assets/front-end/css/font-awesome.min.css') }}" rel="stylesheet" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:400,500,700&display=swap" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="{{ asset('assets/front-end/css/style.css') }}" rel="stylesheet" />

  <!-- responsive style -->
  <link href="{{ asset('assets/front-end/css/responsive.css') }}" rel="stylesheet" />

</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="contact_nav_container">
        <div class="container">
          <div class="contact_nav">
            <a href="">
              <i class="fa fa-map-marker" aria-hidden="true"></i>
              <span> Address : {{ $contact->alamat ?? '' }} </span>
            </a>
            <a href="">
              <i class="fa fa-envelope" aria-hidden="true"></i>
              <span> Email : {{ $contact->email ?? '' }} </span>
            </a>
            <a href="">
              <i class="fa fa-phone" aria-hidden="true"></i>
              <span> Phone Call : {{ $contact->nomor_telepon ?? '' }} </span>
            </a>
          </div>
        </div>
      </div>
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container">
          <div class="custom_menu-btn">
            <button onclick="openNav()">
              <span class="s-1"> </span>
              <span class="s-2"> </span>
              <span class="s-3"> </span>
            </button>
          </div>
          <div id="myNav" class="overlay">
            <div class="menu_btn-style ">
              <button onclick="closeNav()">
                <span class="s-1"> </span>
                <span class="s-2"> </span>
                <span class="s-3"> </span>
              </button>
            </div>
            <div class="overlay-content">
              <a class="{{ request()->is('/') ? 'active' : '' }}" href="/"> Home <span class="sr-only">(current)</span></a>
              <a class="{{ request()->is('admin/about') ? 'active' : '' }}" href="/admin/about"> About Us</a>
              <a class="{{ request()->is('team') ? 'active' : '' }}" href="/team"> Our Personnel</a>
              <a class="{{ request()->is('contact') ? 'active' : '' }}" href="/contact"> Ask Anything</a>
            </div>
          </div>
          <a class="navbar-brand" href="/home">
            <span> ONE OK ROCK </span>
          </a>
          <div class="user_option">
            
            
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->

    <!-- slider section -->
    <section class="slider_section position-relative"
    @if(isset($sliderPost) && $sliderPost->image)
        style="background-image: url('{{ asset('assets/img/' . $sliderPost->image) }}'); background-size: cover; background-position: center; background-repeat: no-repeat;"
    @endif
>

      <div id="customCarousel1" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#customCarousel1" data-slide-to="0" class="active"></li>
          <li data-target="#customCarousel1" data-slide-to="1"></li>
          <li data-target="#customCarousel1" data-slide-to="2"></li>
          <li data-target="#customCarousel1" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="box">
              <div class="baby_detail">
                <div class="baby_text">
                  <h2>GET<br /> YOUR TICKET NOW</h2>
                </div>
                <a href="/buynow">Buy now</a>
              </div>
              <div class="care_detail">
                <a href="/readmore">Read more</a>
                <div class="care_text">
                  <h2>DETOX <br /> Tour Japan <br /> 2025</h2>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="box">
              <div class="baby_detail">
                <div class="baby_text">
                  <h2>get <br /> your ticket now</h2>
                </div>
                <a href="/buynow">Buy now</a>
              </div>
              <div class="care_detail">
                <a href="/readmore">Read More</a>
                <div class="care_text">
                  <h2>DETOX <br /> Tour Japan <br /> 2025</h2>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="box">
              <div class="baby_detail">
                <div class="baby_text">
                  <h2>get <br /> your ticket now</h2>
                </div>
                <a href="/buynow">buy now</a>
              </div>
              <div class="care_detail">
                <a href="/readmore">Read More</a>
                <div class="care_text">
                  <h2>DETOX <br /> Tour Japan <br /> 2025</h2>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="box">
              <div class="baby_detail">
                <div class="baby_text">
                  <h2>get <br /> your ticket now</h2>
                </div>
                <a href="/buynow">buy now</a>
              </div>
              <div class="care_detail">
                <a href="/readmore">Read more</a>
                <div class="care_text">
                  <h2>DETOX <br /> Tour Japan <br /> 2025</h2>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end slider section -->
  </div>

  @yield('konten')

  <!-- info section (footer) -->
  <section class="info_section layout_padding2">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="info_contact">
            <h5>Address</h5>
            <div class="contact_link_box">
              <a href="">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span>{{ $contact->alamat ?? '' }}</span>
              </a>
              <a href="">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>Call {{ $contact->nomor_telepon ?? '' }}</span>
              </a>
              <a href="">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span>{{ $contact->email ?? '' }}</span>
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
            <h5>Navigation</h5>
            <div class="info_links">
              <a class="{{ Request::is('/') ? 'active' : '' }}" href="{{ url('/') }}"> <i class="fa fa-angle-right" aria-hidden="true"></i> Home</a>
              <a class="{{ Request::is('admin/about') ? 'active' : '' }}" href="{{ url('/admin/about') }}"> <i class="fa fa-angle-right" aria-hidden="true"></i> About</a>
              <a class="{{ Request::is('team') ? 'active' : '' }}" href="{{ url('/team') }}"> <i class="fa fa-angle-right" aria-hidden="true"></i> Our Personnel</a>
              <a class="{{ Request::is('contact') ? 'active' : '' }}" href="{{ url('/contact') }}"> <i class="fa fa-angle-right" aria-hidden="true"></i> Ask Anything</a>
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
  <!-- end info section (footer) -->

  <footer class="footer_section container-fluid">
    <p>
      &copy; <span id="displayYear"></span> ONE OK ROCK JAPAN
      <a href="https://html.design/">PRESENTED</a>
    </p>
  </footer>

  <script src="{{ asset('assets/front-end/js/jquery-3.4.1.min.js') }}"></script>
  <script src="{{ asset('assets/front-end/js/bootstrap.js') }}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <script src="{{ asset('assets/front-end/js/custom.js') }}"></script>

</body>
</html>
