@extends('front-end.master')

@section('title', 'About Us')

@section('konten')
<section class="about_section layout_padding" style="background-image: url('{{ asset('assets/front-end/images/oneok6.jpg') }}'); background-size: cover;">
  <div class="container-fluid">
    <div class="box">
      <div class="img-box" style="position: relative; display: inline-block;">
        
        {{-- Gambar utama dari post --}}
        @if(isset($aboutPost) && $aboutPost->image)
          <img src="{{ asset('assets/img/' . $aboutPost->image) }}" alt="About Image" style="width: 100%; height: auto;" />
        @endif

        {{-- Gambar overlay --}}
        <img src="{{ asset('assets/front-end/images/oneok7.jpg') }}" 
             alt="Overlay" 
             style="position: absolute; top: 10px; left: 10px; width: 200px; height: auto;" />
      </div>

      <div class="detail-box">
        <h2>ALKISAH AMBAFAIZ</h2>
        <div>
          {!! $aboutPost->content ?? 'Konten belum tersedia.' !!}
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
