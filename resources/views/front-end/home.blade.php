@extends('front-end/master')

@section('title', 'Home')

@section('konten')

<!-- service section -->

<section class="service_section">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-3 col-md-6">
        <div class="box">
          <a href="/stadium">
            <div class="img-box">
              <img src="{{ asset('assets/front-end/images/ztadium.png') }}" alt="" />
            </div>
            <div class="detail-box">
              <h4>
                STAGE
              </h4>
              <p>
                YOKOHAMA STADIUM
              </p>
            </div>
          </a>
        </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="box">
          <a href="/merchandise">
            <div class="img-box">
              <img src="{{ asset('assets/front-end/images/merchandise.png') }}" alt="" />
            </div>
            <div class="detail-box">
              <h4>
                MERCHANDISE
              </h4>
              <p>
                Our Tour Merchandise
              </p>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>


  <!-- end service section -->

  
  



@endsection