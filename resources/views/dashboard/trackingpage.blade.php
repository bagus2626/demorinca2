@extends('layouts.dashboard')

@push('after-style')
<style>

</style>
@endpush

@section('content')

{{-- <section id="call-to-action" class="call-to-action section dark-background">
  <img src="assets/img/cta-bg.jpg" alt="">
  <div class="container">
    <div class="row" data-aos="zoom-in" data-aos-delay="100">
      <div class="col-xl-8 text-center text-xl-start mt-3">
        <h2 class="tracking-title">{{ __('tracking') }}</h2>
        <input type="text" class="tracking-input" placeholder="{{ __('search') }} nomor document, ex: DC12345" id="valueTracking">
        <a class="cta-btn align-middle" href="#" onclick="searchTracking()">{{ __('search') }}</a>
      </div>
    </div>
    <div class="row">
      <div class="col-xl-9" id="tracking-result" style="display: none">
      </div>
    </div>
  </div>
</section> --}}
  <section class="page-title black-background" style="background-image: url(assets/img/page-title-bg.jpg);">
    <div class="container position-relative">
      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="100">
        <div class="col-lg-6 text-start">
          <h2 class="text-uppercase fw-semibold">{{ __('tracking') }}</h2>
          <div class="d-flex mt-4">
            <input type="text" class="tracking-input" style="margin-top: 10px" placeholder="{{ __('search') }} nomor document, ex: DC12345" id="valueTracking">
            <button type="button" class="cta-btn align-middle bg-transparent fw-bold" onclick="searchTracking()">{{ __('search') }}</button>
          </div>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-xl-6" id="tracking-result" style="display: none">
        </div>
      </div>
     
    </div>
  </section>

<section id="clients" class="clients section light-background">
  <div class="container">
    <div class="swiper init-swiper">
      <script type="application/json" class="swiper-config">
        {
          "loop": true,
          "speed": 1000,
          "autoplay": {
            "delay": 1000
          },
          "slidesPerView": "auto",
          "pagination": {
            "el": ".swiper-pagination",
            "type": "bullets",
            "clickable": true
          },
          "breakpoints": {
            "320": {
              "slidesPerView": 2,
              "spaceBetween": 40
            },
            "480": {
              "slidesPerView": 3,
              "spaceBetween": 60
            },
            "640": {
              "slidesPerView": 4,
              "spaceBetween": 80
            },
            "992": {
              "slidesPerView": 5,
              "spaceBetween": 120
            },
            "1200": {
              "slidesPerView": 6,
              "spaceBetween": 120
            }
          }
        }
      </script>
      <div class="swiper-wrapper align-items-center">
        <div class="swiper-slide"><img src="assets/img/client/rosalia-indah.webp" class="img-fluid" alt=""></div>
        <div class="swiper-slide"><img src="assets/img/client/cozy-coliving.webp" class="img-fluid" alt=""></div>
        <div class="swiper-slide"><img src="assets/img/client/flimty.webp" class="img-fluid" alt=""></div>
        <div class="swiper-slide"><img src="assets/img/client/alva.webp" class="img-fluid" alt=""></div>
        <div class="swiper-slide"><img src="assets/img/client/ultra-sakti.webp" class="img-fluid" alt=""></div>
        <div class="swiper-slide"><img src="assets/img/client/imcp.webp" class="img-fluid" alt=""></div>
        <div class="swiper-slide"><img src="assets/img/client/eco-spirit.webp" class="img-fluid" alt=""></div>
        <div class="swiper-slide"><img src="assets/img/client/amaldi.webp" class="img-fluid" alt=""></div>
        <div class="swiper-slide"><img src="assets/img/client/crv.webp" class="img-fluid" alt=""></div>
        <div class="swiper-slide"><img src="assets/img/client/gcr.webp" class="img-fluid" alt=""></div>
        <div class="swiper-slide"><img src="assets/img/client/jr.webp" class="img-fluid" alt=""></div>
        <div class="swiper-slide"><img src="assets/img/client/rsj.webp" class="img-fluid" alt=""></div>
        <div class="swiper-slide"><img src="assets/img/client/sandimas.webp" class="img-fluid" alt=""></div>
        <div class="swiper-slide"><img src="assets/img/client/sisesa.webp" class="img-fluid" alt=""></div>
        <div class="swiper-slide"><img src="assets/img/client/al-utsmani.webp" class="img-fluid" alt=""></div>
        <div class="swiper-slide"><img src="assets/img/client/muhammadiyah.webp" class="img-fluid" alt=""></div>
        <div class="swiper-slide"><img src="assets/img/client/al-zahra.webp" class="img-fluid" alt=""></div>
        <div class="swiper-slide"><img src="assets/img/client/client-9.webp" class="img-fluid" alt=""></div>
        <div class="swiper-slide"><img src="assets/img/client/saranawisesa.webp" class="img-fluid" alt=""></div>
        <div class="swiper-slide"><img src="assets/img/client/sisesa.webp" class="img-fluid" alt=""></div>
        <div class="swiper-slide"><img src="assets/img/client/suntak.webp" class="img-fluid" alt=""></div>
      </div>
    </div>
  </div>
</section>

@endsection