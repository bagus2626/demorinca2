@extends('layouts.dashboard')

@section('content')

<!-- Call To Action Section -->
<section id="call-to-action" class="call-to-action section dark-background">
  <img src="assets/img/cta-bg.jpg" alt="">
  <div class="container">
    <div class="row" data-aos="zoom-in" data-aos-delay="100">
      <div class="col-xl-8 text-center text-xl-start mt-3">
        <h2 class="tracking-title">Hasil pelacakan</h2>
        <input type="text" class="tracking-input" placeholder="Cari nomor document, cth: DC12345" id="valueTracking">
        <a class="cta-btn align-middle" href="#" onclick="searchTracking()">Cari</a>
      </div>
    </div>
    <div class="row">
      <div class="col-xl-9" id="tracking-result" style="display: none">
      </div>
    </div>
  </div>
</section>

@endsection