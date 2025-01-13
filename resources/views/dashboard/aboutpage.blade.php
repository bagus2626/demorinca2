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
<<<<<<< HEAD
        </div>
    </div>
  </section>

  <section id="personal" class="pt-5 rounded-top-4" style="background-color: #F3F4F6;border:1px solid #F3F4F6">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-5">
          <img src="assets/img/personal/direktur.png" alt="Dawin Muhammad Yusuf" class="w-100">
        </div>
        <div class="col-12 col-md-7 personal-content d-flex flex-column justify-content-center">
          <div class="d-flex align-items-center justify-content-center position">
            <span class="fw-semibold" style="font-size: 14px">Direktur & Tenaga Ahli Struktur <i class="bi bi-arrow-down-right"></i></span> 
          </div>
          <h5 class="fw-semibold mt-2 personal-name">Dawin Muhammad Yusuf</h5>
          <p class="mt-2">PT Rinca Cipta Karya merupakan konsultan engineering yang mayoritas bergerak dibidang Arsitektural dan Sipil. PT Rinca Cipta Karya senantiasa menyempurnakan kemampuan terus menerus, untuk menyiapkan engineer muda dapat bersaing dalam taraf Internasional.</p>
          <div class="d-flex align-items-center">
            @foreach ([1,2,3,4] as $num)
              <img src="assets/img/personal/{{ $num }}-avatar.png" alt="" class="img-project" style="margin-left:{{ $num !== 1 ? '-15px' : '' }}">
            @endforeach
            <h6 class="ms-1 font-bold" style="color: #1F5D35; font-size:14px">+500 Projects Success</h6>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="visi" class="pt-5" style="background-color: #F3F4F6;border:1px solid #F3F4F6">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12 col-md-6 d-flex flex-column justify-content-center visi-padding">
          <div class="d-flex align-items-center justify-content-center badge">
            <span class="fw-semibold" style="font-size: 14px">Visi <i class="bi bi-arrow-down-right"></i></span> 
          </div>
          <h5 class="fw-semibold mt-2" style="font-size: 38px">Mewujudkan Komitmen Kami Sebagai Konsultan Engineering Andal</h5>
          <p class="mt-2">Menjadi konsultan enjiniring yang andal dan berkompeten, berkomitmen pada desain berkelanjutan demi mendukung keberlangsungan bumi dan kesejahteraannya.</p>
        </div>
        <div class="col-12 col-md-6">
          <img src="assets/img/personal/visi-image.png" alt="Visi" class="w-100">
        </div>
      </div>
    </div>
  </section>

  <section id="misi" class="py-5" style="background-color: #F3F4F6;border:1px solid #F3F4F6">
    <div class="container">
      <div class="row">
        <div class="col-4 d-none d-md-block">
          <img src="assets/img/personal/misi-image.png" alt="Misi" class="w-100">
        </div>
        <div class="col-12 col-md-8 d-flex flex-column justify-content-center">
          <div class="d-flex align-items-center mt-5 mt-md-0 justify-content-center badge">
            <span class="fw-semibold" style="font-size: 14px">Misi <i class="bi bi-arrow-down-right"></i></span> 
          </div>
          
          <div class="row mt-3">
            @foreach ([
              ['num' => '01', 'title' => 'Meningkatkan Karya Engineering Indonesia', 'description' => 'Mengembangkan solusi engineering berkualitas tinggi yang berakar pada keahlian lokal.'],
              ['num' => '02', 'title' => 'Memberikan Layanan Unggulan', 'description' => 'Menyediakan jasa konsultasi dan manajemen proyek dengan komitmen terhadap keunggulan dan keberlanjutan.'],
              ['num' => '03', 'title' => 'Menciptakan Nilai bagi Masyarakat', 'description' => 'Memberikan manfaat yang nyata dan berkesinambungan bagi kesejahteraan masyarakat sekitar.'],
              ['num' => '04', 'title' => 'Memanfaatkan Pengetahuan dan Inovasi', 'description' => 'Menggabungkan keahlian, pengalaman, dan kreativitas untuk menciptakan solusi efektif dengan komitmen tinggi terhadap integritas.'],
            ] as $item)
              <div class="col-12 col-md-6 d-flex">
                <div class="num-visi">{{ $item['num'] }}</div>
                <div>
                  <h4 class="fw-bold" style="font-size: 18px">{{ $item['title'] }}</h4>
                  <p class="mt-1" style="font-size: 14px">{{ $item['description'] }}</p>
=======
            <div class="faq-container px-xl-5">
              <div class="faq-item">
                <h3>{{ __('bussines_1_2') }}</h3>
                <div class="faq-content">
                  <p>{{ __('bussines_1_3') }}</p>
>>>>>>> parent of 05e2a84 (Merge branch 'main' of https://github.com/bagus2626/demorinca2)
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
