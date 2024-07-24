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

 <section class="page-title black-background" style="background-image: url(assets/img/page-title-bg.jpg);">
    <div class="container position-relative">
      <div class="row" data-aos="fade-up" data-aos-delay="100">
        <div class="col-lg-6 text-start">
          <h2 class="text-uppercase fw-semibold">{{ __('about') }}</h2>
        </div>
      </div>
     
    </div>
  </section>

{{-- <section id="call-to-action" class="call-to-action section dark-background">
    <img src="assets/img/cta-bg.jpg" alt="">
    <div class="container">
      <div class="row">
        <div class="col-xl-12 text-start mt-3">
          <h1 class="title-about" style="font-weight: bold">{{ __('about') }}</h1>
        </div>
      </div>
    </div>
  </section> --}}

<section id="about" class="about section">
  <div class="container">
    <div class="row gy-4">
      <div class="col-lg-6 content" data-aos="fade-right" data-aos-delay="100" data-aos-duration="800">
        <h4>
          Visi
        </h4>
        <p>
          {{ __('visi') }}
        </p>
      </div>
      <div class="col-lg-6" data-aos="fade-left" data-aos-delay="100" data-aos-duration="800">
        <h4>
          Misi
        </h4>
        <ul>
          <li><i class="bi bi-check2-circle"></i> <span>{{ __('misi_1') }}</span></li>
          <li><i class="bi bi-check2-circle"></i> <span>{{ __('misi_2') }}</span></li>
          <li><i class="bi bi-check2-circle"></i> <span>{{ __('misi_3') }}</span></li>
          <li><i class="bi bi-check2-circle"></i> <span>{{ __('misi_4') }}</span></li>
        </ul>
      </div>
    </div>
  </div>
</section>

 <section id="perencanaan" class="section why-us light-background" data-builder="section">
      <div class="container-fluid">
        <div class="row gy-4">
          <div class="col-lg-7 d-flex flex-column justify-content-center order-2 order-lg-1">
            <div class="content px-xl-5">
              <h3><strong>01. {{ __('bussines_activities_1') }}</strong></h3>
              <p>
                {{ __('bussines_1_1') }}
              </p>
            </div>
            <div class="faq-container px-xl-5">
              <div class="faq-item">
                <h3>{{ __('bussines_1_2') }}</h3>
                <div class="faq-content">
                  <p>{{ __('bussines_1_3') }}</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div>
              <div class="faq-item">
                <h3>{{ __('bussines_1_4') }}</h3>
                <div class="faq-content">
                  <p>{{ __('bussines_1_5') }}</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div>
              <div class="faq-item">
                <h3>{{ __('bussines_1_6') }}</h3>
                <div class="faq-content">
                  <p>{{ __('bussines_1_7') }}</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div>
            </div>
          </div>
          <div class="col-lg-5 order-1 order-lg-2 why-us-img">
            <img src="assets/img/icon-modern-1.webp" class="img-fluid" alt="">
          </div>
        </div>
      </div>
    </section>

    <section id="perizinan" class="section why-us light-background" data-builder="section">
      <div class="container-fluid">
        <div class="row gy-4">
           <div class="col-lg-5 order-1 order-lg-1">
            <img src="assets/img/icon-modern-2.webp" class="img-fluid" alt="">
          </div>
          <div class="col-lg-7 d-flex flex-column justify-content-center order-2 order-lg-2">
            <div class="content px-xl-5">
              <h3><strong>02. {{ __('bussines_activities_2') }}</strong></h3>
              <p>
                {{ __('description_bussines') }}
              </p>
            </div>
            <div class="faq-container px-xl-5">
              <div class="faq-item">
                <h3>{{ __('imb_title') }}</h3>
                <div class="faq-content">
                  <p>{{ __('imb_content') }}</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div>
              <div class="faq-item">
                <h3>{{ __('slf_title') }}</h3>
                <div class="faq-content">
                  <p>{{ __('slf_content') }}</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div>
              <div class="faq-item">
                <h3>{{ __('environmental_permit_title') }}</h3>
                <div class="faq-content">
                  <p>{{ __('environmental_permit_content') }}</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div>
              <div class="faq-item">
                <h3>{{ __('industrial_permit_title') }}</h3>
                <div class="faq-content">
                  <p>{{ __('industrial_permit_content') }}</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="design" class="section why-us light-background" data-builder="section">
      <div class="container-fluid">
        <div class="row gy-4">
          <div class="col-lg-7 d-flex flex-column justify-content-center order-2 order-lg-1">
            <div class="content px-xl-5">
              <h3><strong>03. {{ __('bussines_activities_3') }}</strong></h3>
              <p>
                {{ __('interior_services_description') }}
              </p>
            </div>
            <div class="faq-container px-xl-5">
              <div class="faq-item">
                <h3>{{ __('concept_design_title') }}</h3>
                <div class="faq-content">
                  <p>{{ __('concept_design_content') }}</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div>
              <div class="faq-item">
                <h3>{{ __('material_selection_title') }}</h3>
                <div class="faq-content">
                  <p>{{ __('material_selection_content') }}</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div>
              <div class="faq-item">
                <h3>{{ __('implementation_supervision_title') }}</h3>
                <div class="faq-content">
                  <p>{{ __('implementation_supervision_content') }}</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div>
              <div class="faq-item">
                <h3>{{ __('furnishing_title') }}</h3>
                <div class="faq-content">
                  <p>{{ __('furnishing_content') }}</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div>
            </div>
          </div>
           <div class="col-lg-5 order-1 order-lg-2 why-us-img">
            <img src="assets/img/icon-modern-3.webp" class="img-fluid" alt="">
          </div>
        </div>
      </div>
    </section>
@endsection
