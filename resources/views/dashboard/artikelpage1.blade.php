@extends('layouts.dashboard')

@push('after-style')
    <style>
        .title-about {
            font-size: 32px;
            line-height: 5px
        }
    </style>
@endpush
@section('content')

<section id="call-to-action" class="call-to-action section dark-background">
    <img src="assets/img/cta-bg.jpg" alt="">
    <div class="container">
      <div class="row">
        <div class="col-xl-12 text-start mt-3">
<!--           <h1 class="title-about" style="font-weight: bold">{{ __('about') }}</h1>
 -->        </div>
      </div>
    </div>
  </section>

<section id="artikel1" class="section why-us light-background">
  <div class="container">
    <div class="row gy-4">
      <div class="col-lg-6 content" data-aos="fade-right" data-aos-delay="100" data-aos-duration="800">
        <h4>
          Artikel 1
        </h4>
      </div>
      
  </div>
</section>

@endsection
