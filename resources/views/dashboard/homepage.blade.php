@extends('layouts.dashboard')

@push('after-style')
<style>
  .slider-container {
      position: relative;
      max-width: 1200px;
      margin: auto;
      overflow: hidden;
      border: 1px solid #ddd;
      background-color: #fff;
      padding: 20px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  }

  .slider {
      display: flex;
      transition: transform 0.5s ease-in-out;
      width: 300%;
  }

  .slide {
      min-width: 33.33%;
      box-sizing: border-box;
      text-align: center;
      padding: 10px;
  }

  img {
      width: 100%;
      height: auto;
      border-radius: 8px;
  }

  .description {
      margin-top: 10px;
  }

  .description h3 {
      font-size: 18px;
      margin: 10px 0;
  }

  .description p {
      font-size: 16px;
      color: #666;
  }

  .discounted-price {
      color: red;
      text-decoration: line-through;
  }

  button {
      cursor: pointer;
      position: absolute;
      top: 50%;
      width: auto;
      padding: 16px;
      margin-top: -22px;
      color: white;
      font-weight: bold;
      font-size: 18px;
      transition: 0.6s ease;
      border: none;
      background-color: rgba(0,0,0,0.5);
      user-select: none;
  }

  button:hover {
      background-color: rgba(0,0,0,0.8);
  }

  .prev {
      left: 0;
  }

  .next {
      right: 0;
  }

  .grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 1.5rem;
}

  .card {
    background-color: #3cb371; /* Box color */
    padding: 1.5rem;
    border-radius: 8px;
    text-align: center;
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.3);
}

.card img {
    max-width: 50px;
    margin-bottom: 1rem;
}

.card h2 {
    font-size: 1.2rem;
    margin-bottom: 1rem;
}

.card p {
    font-size: 1rem;
    line-height: 1.5;
  }

.header {
      background-color: #5db54d;
    heading-color: #ffffff;
     color: var(--default-color);
}

  .modern-building-3 { 
    position: relative; 
    background: url("assets/img/background/modern-building-3.jpg") no-repeat 
        bottom; 
    background-size: cover; 
    padding: 60px 0; 
  } 
  .modern-building-3 .container { 
      position: relative; 
      z-index: 2; 
  } 
  .modern-building-3::before { 
      content: ""; 
      position: absolute; 
      bottom: 0; 
      left: 0; 
      right: 0; 
      height: 100%; 
      background:  rgba(255, 255, 255, 0.7); 
      /* background:  rgba(167, 167, 167, 0.7); */ 
      z-index: 1; 
  } 

  .modern-building-1 { 
    position: relative; 
    background: url("assets/img/background/modern-building-1.jpg") no-repeat 
        bottom; 
    background-size: cover; 
    padding: 60px 0; 
  } 
  .modern-building-1 .container { 
      position: relative; 
      z-index: 2; 
  } 
  .modern-building-1::before { 
      content: ""; 
      position: absolute; 
      bottom: 0; 
      left: 0; 
      right: 0; 
      height: 100%; 
      background:  rgba(255, 255, 255, 0.7); 
      /* background:  rgba(167, 167, 167, 0.7); */ 
      z-index: 1; 
  } 
</style>
<style type="text/css">
  

</style>
@endpush
@section('content')
<section id="hero" class="call-to-action section dark-background">
  <img src="assets/img/cta-bg.jpg" alt="">

  <div class="container">

    <div class="row" data-aos="zoom-in" data-aos-delay="100">
      <div class="col-xl-8 text-center text-xl-start mt-3">
        <h1>{{ __('welcome') }} PT Rinca Cipta Karya</h1>
        <p>{{ __('description_rinca') }}</p>
          <div class="d-flex mt-4">
            <input type="text" class="tracking-input" style="margin-top: 10px" placeholder="{{ __('search') }} nomor document, ex: DC12345" id="valueTracking">
            <a class="cta-btn align-middle" href="#" onclick="searchTracking()">{{ __('search') }}</a>
          </div>
      </div>
      <div class="col-xl-3 cta-btn-container text-center">
      </div>
    </div>
    <div class="row">
      <div class="col-xl-9" id="tracking-result" style="display: none">
      </div>
    </div>
  </div>
</section>

<section id="clients" class="clients section light-background">
  <div class="container" data-aos="zoom-in">
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
        <div class="swiper-slide"><img src="assets/img/clients/rosalia-indah.png" class="img-fluid" alt=""></div>
        <div class="swiper-slide"><img src="assets/img/clients/cozy-coliving.jpeg" class="img-fluid" alt=""></div>
        <div class="swiper-slide"><img src="assets/img/clients/flimty.webp" class="img-fluid" alt=""></div>
        <div class="swiper-slide"><img src="assets/img/clients/alva.webp" class="img-fluid" alt=""></div>
        <div class="swiper-slide"><img src="assets/img/clients/ultra-sakti.webp" class="img-fluid" alt=""></div>
        <div class="swiper-slide"><img src="assets/img/clients/imcp.png" class="img-fluid" alt=""></div>
        <div class="swiper-slide"><img src="assets/img/clients/eco-spirit.jpg" class="img-fluid" alt=""></div>
        <div class="swiper-slide"><img src="assets/img/clients/amaldi.png" class="img-fluid" alt=""></div>
        <div class="swiper-slide"><img src="assets/img/clients/crv.png" class="img-fluid" alt=""></div>
        <div class="swiper-slide"><img src="assets/img/clients/gcr.png" class="img-fluid" alt=""></div>
        <div class="swiper-slide"><img src="assets/img/clients/jr.png" class="img-fluid" alt=""></div>
        <div class="swiper-slide"><img src="assets/img/clients/rsj.png" class="img-fluid" alt=""></div>
        <div class="swiper-slide"><img src="assets/img/clients/sandimas.png" class="img-fluid" alt=""></div>
        <div class="swiper-slide"><img src="assets/img/clients/sisesa.png" class="img-fluid" alt=""></div>
        <div class="swiper-slide"><img src="assets/img/clients/al-utsmani.png" class="img-fluid" alt=""></div>
        <div class="swiper-slide"><img src="assets/img/clients/muhammadiyah.png" class="img-fluid" alt=""></div>
        <div class="swiper-slide"><img src="assets/img/clients/al-zahra.png" class="img-fluid" alt=""></div>
        <div class="swiper-slide"><img src="assets/img/clients/client-9.png" class="img-fluid" alt=""></div>
        <div class="swiper-slide"><img src="assets/img/clients/saranawisesa.jfif" class="img-fluid" alt=""></div>
        <div class="swiper-slide"><img src="assets/img/clients/sisesa.png" class="img-fluid" alt=""></div>
        <div class="swiper-slide"><img src="assets/img/clients/suntak.png" class="img-fluid" alt=""></div>
      </div>
    </div>
  </div>
</section>

{{--<section id="about" class="about section">--}}
{{--  <div class="container section-title" data-aos="fade-up" data-aos-delay="100" data-aos-duration="800" data-aos-anchor-placement="top-bottom">--}}
{{--    <h2>Tentang Kami</h2>--}}
{{--  </div>--}}
{{--  <div class="container">--}}
{{--    <div class="row gy-4">--}}
{{--      <div class="col-lg-6 content" data-aos="fade-right" data-aos-delay="100" data-aos-duration="800" data-aos-anchor-placement="top-bottom">--}}
{{--        <h4>--}}
{{--          Visi--}}
{{--        </h4>--}}
{{--        <p>--}}
{{--          Menjadi Konsultan Enjiniring yang Handal, Cakap, dan Memegang Teguh Sustatainable Desain Untuk Keberlangsungan--}}
{{--          Bumi Beserta Isinya--}}
{{--        </p>--}}
{{--      </div>--}}
{{--      <div class="col-lg-6" data-aos="fade-left" data-aos-delay="100" data-aos-duration="800" data-aos-anchor-placement="top-bottom">--}}
{{--        <h4>--}}
{{--          Misi--}}
{{--        </h4>--}}
{{--        <ul>--}}
{{--          <li><i class="bi bi-check2-circle"></i> <span>Mengembangkan Karya Enjiniring Indonesia yang Berkualitas.</span></li>--}}
{{--          <li><i class="bi bi-check2-circle"></i> <span>Menyediakan produk/ jasa Konsultan Enjiniring, Manajemen Proyek yang unggul dan berkesinambungan.</span></li>--}}
{{--          <li><i class="bi bi-check2-circle"></i> <span>Memberikan manfaat dan nilai tambah untuk Masyarakat sekitar.</span></li>--}}
{{--          <li><i class="bi bi-check2-circle"></i> <span>Memberdayakan pengetahuan, pengalaman, dan kreativitas untuk terciptanya solusi terbaik, dengan tidak lupa memegang teguh komitmen dan keper.</span></li>--}}
{{--        </ul>--}}
{{--      </div>--}}
{{--    </div>--}}
{{--  </div>--}}
{{--</section>--}}

<section id="direktur" class="direktur modern-building-3 section">
  <div class="container section-title" data-aos="fade-up" data-aos-delay="100" data-aos-duration="800" data-aos-anchor-placement="top-bottom">
    <h2>Direktur</h2>
  </div>
  <div class="container">
    <div class="row gy-4">
      <div class="col-lg-4 content text-center" data-aos="fade-up" data-aos-delay="100" data-aos-duration="800" data-aos-anchor-placement="top-bottom">
        <img src="assets/img/personal/direktur.png" alt="" class="img-fluid">
        <h5 class="mt-3">
          DAWIN MUHAMAD YUSUF
        </h5>
        <p class="text-dark fw-semibold fst-italic">
          {{ __('divisi') }}
        </p>
        <p class="text-dark fw-semibold fst-italic">
          {{ __('direktur_description_1') }}
        </p>
      </div>
      <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200" data-aos-duration="800" data-aos-anchor-placement="top-bottom">
        <p class="text-dark fw-semibold fst-italic">
          {{ __('direktur_description_2') }}
        </p>
        <p class="text-dark fw-semibold fst-italic">
          {{ __('direktur_description_3') }}
        </p>
        <p class="text-dark fw-semibold fst-italic">
          {{ __('direktur_description_4') }}
        </p>
        <p class="text-dark fw-semibold fst-italic">
          {{ __('direktur_description_5') }}
        </p>
      </div>
    </div>
  </div>
</section>

<section id="why-us" class="section why-us light-background" data-builder="section">
  <div class="container-fluid">
    <div class="row gy-4">
      <div class="col-lg-7 d-flex flex-column justify-content-center order-2 order-lg-1">
        <div class="content px-xl-5" data-aos="fade-up" data-aos-delay="100" data-aos-duration="800" data-aos-anchor-placement="top-bottom">
          <h3><span>{{ __('bussines_activities') }}</span></h3>
        </div>
        <div class="faq-container px-xl-5" data-aos="fade-right" data-aos-delay="100" data-aos-duration="800" data-aos-anchor-placement="top-bottom">
          <a href="{{ route('dashboard.about') }}#perencanaan">
            <div class="faq-item mt-3">
              <h3><span>01</span> {{ __('bussines_activities_1') }}</h3>
            </div>
          </a>
          <a href="{{ route('dashboard.about') }}#perizinan">
            <div class="faq-item mt-3" data-aos="fade-left" data-aos-delay="200" data-aos-duration="800" data-aos-anchor-placement="top-bottom">
              <h3><span>02</span> {{ __('bussines_activities_2') }}</h3>
            </div>
          </a>
          <a href="{{ route('dashboard.about') }}#design">
            <div class="faq-item mt-3" data-aos="fade-right" data-aos-delay="300" data-aos-duration="800" data-aos-anchor-placement="top-bottom">
              <h3><span>03</span> {{ __('bussines_activities_3') }}</h3>
            </div>
          </a>
         <!--  <a href="{{ route('dashboard.about') }}#non_kontruksi">
            <div class="faq-item mt-3"  data-aos="fade-left" data-aos-delay="400" data-aos-duration="800" data-aos-anchor-placement="top-bottom">
              <h3><span>04</span>NON - KONSTRUKSI</h3>
          </div>
          </a> -->
          
        </div>
      </div>
      <div class="col-lg-5 order-1 order-lg-2 why-us-img">
        <img src="assets/img/why-us.png" class="img-fluid" alt="" data-aos="zoom-in" data-aos-delay="100" data-aos-duration="800" data-aos-anchor-placement="top-bottom">
      </div>
    </div>
  </div>
</section>

{{--<section id="skills" class="skills section" style="background-color: #e2e0e0">--}}
{{--  <div class="container section-title" data-aos="fade-up" data-aos-delay="100" data-aos-duration="800" data-aos-anchor-placement="top-bottom">--}}
{{--    <h2>Legalitas Perusahaan</h2>--}}
{{--    <p>CORPORATE MEMBERSHIP</p>--}}
{{--  </div>--}}
{{--  <div class="container">--}}
{{--    <div class="row justify-content=center"  data-aos="fade-left" data-aos-delay="100" data-aos-duration="800" data-aos-anchor-placement="top-bottom">--}}
{{--      <div class="col-lg-6 pt-4 pt-lg-0 content text-center">--}}
{{--        <img src="assets/img/sertifikat/1.png" class="img-fluid" alt="">--}}
{{--        <h5 class="mt-3">PERKINDO DKI JAKARTA</h5>--}}
{{--        <p class="fst-italic">Keanggotaan Persatuan Konsultan IndonesiaLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>--}}
{{--      </div>--}}
{{--      <div class="col-lg-6 pt-4 pt-lg-0 content text-center"  data-aos="fade-right" data-aos-delay="100" data-aos-duration="800" data-aos-anchor-placement="top-bottom">--}}
{{--        <img src="assets/img/sertifikat/2.png" class="img-fluid" alt="">--}}
{{--          <h5 class="mt-3">SERTIFIKAT BADAN USAHA--}}
{{--            JASA KONSTRUKSI</h5>--}}
{{--          <p class="fst-italic">Kami telah legal dan tersertifikasi</p>--}}
{{--      </div>--}}
{{--    </div>--}}
{{--  </div>--}}
{{--</section>--}}

{{-- <body>
    <div class="container">
        <h1>Mengapa Memilih Kami?</h1>
        <div class="grid">
            <div class="header">
                <img src="path/to/icon1.png" alt="">
                <h2>Tim Yang Professional.</h2>
                <p>Tim kami siap untuk mengakomodasi seluruh kebutuhan anda. Kami berkomitmen, terampil, dan menjunung tinggi profesionalisme dan efisiensi , agar pekerjaan anda selesai lebih cepat dengan hasil sesuai.</p>
            </div>
            <div class="header">
                <img src="path/to/icon2.png" alt="">
                <h2>Memberikan Solusi Terbaik.</h2>
                <p>Kami sadar KONSULTAN memang tempatnya bertanya dan konsultasi, maka misi kami memberikan SOLUSI TERBAIK untuk masalah PERIZINAN PERUSAHAAN anda.</p>
            </div>
            <div class="header">
                <img src="path/to/icon3.png" alt="">
                <h2>Hasil yang Memuaskan.</h2>
                <p>Kami PT RINCA CIPTA KARYA memberikan hasil terbaik, dengan harga relatif murah dibanding pesaing kami.</p>
            </div>
            <!-- Repeat similar blocks for other cards -->
        </div>
    </div>
</body> --}}

<!-- Services Section -->
<section id="services" class="services modern-building-1 section light-background">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>{{ __('why_choose_us') }}</h2>
  </div>
  <div class="container">
    <div class="row gy-4">
      <div class="col-xl-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
        <div class="service-item position-relative">
          <div class="icon"><i class="bi bi-person-video3 icon"></i></div>
          <h4><a href="" class="stretched-link">{{ __('profesional_team') }}</a></h4>
          <p>{{ __('profesional_team_description') }}</p>
        </div>
      </div>
      <div class="col-xl-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
        <div class="service-item position-relative">
          <div class="icon"><i class="bi bi-activity icon"></i></div>
          <h4><a href="" class="stretched-link">{{ __('solution') }}</a></h4>
          <p>{{ __('solution_description') }}</p>
        </div>
      </div>
      <div class="col-xl-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
        <div class="service-item position-relative">
          <div class="icon"><i class="bi bi-bar-chart-line icon"></i></div>
          <h4><a href="" class="stretched-link">{{ __('result') }}</a></h4>
          <p>{{ __('result_description') }}</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="portfolio" class="portfolio section modern-building-1">
  <div class="container section-title" data-aos="fade-up" data-aos-delay="100" data-aos-duration="800" data-aos-anchor-placement="top-bottom">
    <h2>{{ __('project') }}</h2>
  </div>
  <div class="container projects-desktop">
    <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">
      <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">
        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
          <img src="assets/img/projects/1.png" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>PT Sun Tak Indonesia</h4>
            <p>{{ __('project_1') }}</p>
            <a href="assets/img/projects/1.png" title="App 1" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
          <img src="assets/img/projects/2.png" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Perumahan Grand Cimandala Residence</h4>
            <p>{{ __('project_2') }}</p>
            <a href="assets/img/projects/2.png" title="Product 1" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
          <img src="assets/img/projects/3.png" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Royal Tulip Luxury Hotels</h4>
            <p>{{ __('project_2') }}</p>
            <a href="assets/img/projects/3.png" title="Branding 1" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
          <img src="assets/img/projects/4.png" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>PT Ultra Sakti</h4>
            <p>{{ __('project_3') }}.</p>
            <a href="assets/img/projects/4.png" title="App 2" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
          <img src="assets/img/projects/5.png" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Asimetri Coffe</h4>
            <p>{{ __('project_2') }}</p>
            <a href="assets/img/projects/5.png" title="Product 2" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
          <img src="assets/img/projects/6.png" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Perumahan Cikeas River Side</h4>
            <p>{{ __('project_2') }}</p>
            <a href="assets/img/projects/6.png" title="Branding 2" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
          <img src="assets/img/projects/7.png" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>COZY CO-LIVING JELAMBAR</h4>
            <p>{{ __('project_4') }}</p>
            <a href="assets/img/projects/7.png" title="App 3" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
          <img src="assets/img/projects/8.png" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Pergudangan Sigma Kartika Gunung Sindur</h4>
            <p>{{ __('project_2') }}</p>
            <a href="assets/img/projects/8.png" title="Product 3" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
          <img src="assets/img/projects/9.png" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>PT Dalya Citramandiri</h4>
            <p>{{ __('project_5') }}</p>
            <a href="assets/img/projects/9.png" title="Branding 2" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
          <img src="assets/img/projects/10.png" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>SDIT Kharisma Azzahra Bogor</h4>
            <p>{{ __('project_6') }}</p>
            <a href="assets/img/projects/10.png" title="Branding 2" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
          <img src="assets/img/projects/11.png" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>PT Electra Mobilitas Indonesia</h4>
            <p>{{ __('project_6') }}</p>
            <a href="assets/img/projects/11.png" title="Branding 2" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
          <img src="assets/img/projects/12.png" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>PT SiSeSa Berkah Illahi</h4>
            <p>{{ __('project_6') }}</p>
            <a href="assets/img/projects/12.png" title="Branding 2" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
          <img src="assets/img/projects/13.png" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>PT Ultra Sakti</h4>
            <p>{{ __('project_7') }}</p>
            <a href="assets/img/projects/13.png" title="Branding 2" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
          <img src="assets/img/projects/14.png" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>SMK Muhammadiyah Cariu</h4>
            <p>{{ __('project_2') }}</p>
            <a href="assets/img/projects/14.png" title="Branding 2" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
          <img src="assets/img/projects/15.png" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Yayasan Al Ustmani</h4>
            <p>{{ __('project_6') }}</p>
            <a href="assets/img/projects/15.png" title="Branding 2" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
          <img src="assets/img/projects/16.png" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Puspanita Eco Spirit Center</h4>
            <p>{{ __('project_2') }}</p>
            <a href="assets/img/projects/16.png" title="Branding 2" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
   <div class="slider-container projects-mobile" style="z-index: 1">
        <div class="slider">
            <div class="slide">
                <img src="assets/img/projects/1.png" alt="">
                <div class="description">
                    <h3>PT Sun Tak Indonesia</h3>
                    <p>{{ __('project_1') }}</p>
                </div>
            </div>
            <div class="slide">
                <img src="assets/img/projects/2.png" alt="">
                <div class="description">
                    <h3>Perumahan Grand Cimandala Residence</h3>
                    <p>
                      {{ __('project_2') }}
                    </p>
                </div>
            </div>
            <div class="slide">
                <img src="assets/img/projects/3.png" alt="">
                <div class="description">
                    <h3>Royal Tulip Luxury Hotels</h3>
                    <p>{{ __('project_2') }}</p>
                </div>
            </div>
             <div class="slide">
                <img src="assets/img/projects/4.png" alt="">
                <div class="description">
                    <h3>PT Ultra Sakti</h3>
                     <p>{{ __('project_3') }}</p>
                </div>
            </div>
             <div class="slide">
                <img src="assets/img/projects/5.png" alt="">
                <div class="description">
                    <h3>Asimetri Coffe</h3>
                     <p>{{ __('project_2') }}</p>
                </div>
            </div>
             <div class="slide">
                <img src="assets/img/projects/6.png" alt="">
                <div class="description">
                    <h3>Perumahan Cikeas River Side</h3>
                     <p>{{ __('project_2') }}</p>
                </div>
            </div>
             <div class="slide">
                <img src="assets/img/projects/7.png" alt="">
                <div class="description">
                    <h3>COZY CO-LIVING JELAMBAR</h3>
                     <p>{{ __('project_4') }}</p>
                </div>
            </div>
             <div class="slide">
                <img src="assets/img/projects/8.png" alt="">
                <div class="description">
                    <h3>Pergudangan Sigma Kartika Gunung Sindur</h3>
                    <p>{{ __('project_2') }}</p>
                </div>
            </div>
             <div class="slide">
                <img src="assets/img/projects/9.png" alt="">
                <div class="description">
                    <h3>PT Dalya Citramandiri</h3>
                    <p>{{ __('project_5') }}</p>
                </div>
            </div>
             <div class="slide">
                <img src="assets/img/projects/10.png" alt="">
                <div class="description">
                    <h3>SDIT Kharisma Azzahra Bogor</h3>
                    <p>{{ __('project_6') }}</p>
                </div>
            </div>
             <div class="slide">
                <img src="assets/img/projects/11.png" alt="">
                <div class="description">
                    <h3>PT Electra Mobilitas Indonesia</h3>
                    <p>{{ __('project_6') }}</p>
                </div>
            </div>
            <div class="slide">
                <img src="assets/img/projects/12.png" alt="">
                <div class="description">
                    <h3>PT SiSeSa Berkah Illahi</h3>
                    <p>{{ __('project_6') }}</p>
                </div>
            </div>
            <div class="slide">
                <img src="assets/img/projects/13.png" alt="">
                <div class="description">
                    <h3>PT Ultra Sakti</h3>
                    <p>{{ __('project_7') }}</p>
                </div>
            </div>
            <div class="slide">
                <img src="assets/img/projects/14.png" alt="">
                <div class="description">
                    <h3>SMK Muhammadiyah Cariu</h3>
                    <p>{{ __('project_2') }}</p>
                </div>
            </div>
            <div class="slide">
                <img src="assets/img/projects/15.png" alt="">
                <div class="description">
                    <h3>Yayasan Al Ustmani</h3>
                    <p>{{ __('project_6') }}</p>
                </div>
            </div>
            <div class="slide">
                <img src="assets/img/projects/16.png" alt="">
                <div class="description">
                    <h3>Puspanita Eco Spirit Center</h3>
                    <p>{{ __('project_2') }}</p>
                </div>
            </div>
        </div>
        <button class="prev" onclick="changeSlide(-1)">&#10094;</button>
        <button class="next" onclick="changeSlide(1)">&#10095;</button>
    </div>
</section>

<section id="regulasi" class="faq-2 section light-background">
  <div class="container section-title"  data-aos="fade-up" data-aos-delay="100" data-aos-duration="800" data-aos-anchor-placement="top-bottom">
    <h2>{{ __('bussines_scope') }}</h2>
    <p>{{ __('bussines_scope_description') }}</p>
  </div>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-10">
        <div class="faq-container">
        <div class="faq-item"  data-aos="fade-left" data-aos-delay="100" data-aos-duration="800" data-aos-anchor-placement="top-bottom">
            <i class="faq-icon bi bi-question-circle"></i>
            <h3>{{ __('bussines_scope_1') }}</h3>
            <div class="faq-content">
              <p>
                {!! __('bussines_scope_1_description') !!}
              </p>
            </div>
            <i class="faq-toggle bi bi-chevron-right"></i>
          </div>
          <div class="faq-item"  data-aos="fade-right" data-aos-delay="200" data-aos-duration="800" data-aos-anchor-placement="top-bottom">
            <i class="faq-icon bi bi-question-circle"></i>
            <h3>{{ __('bussines_scope_2') }}</h3>
            <div class="faq-content">
              <p>
                {!! __('bussines_scope_2_description') !!}
              </p>
            </div>
            <i class="faq-toggle bi bi-chevron-right"></i>
          </div>
          <div class="faq-item"  data-aos="fade-left" data-aos-delay="300" data-aos-duration="800" data-aos-anchor-placement="top-bottom">
            <i class="faq-icon bi bi-question-circle"></i>
            <h3>{{ __('bussines_scope_3') }}</h3>
            <div class="faq-content">
              <p>
                {!! __('bussines_scope_3_description') !!}
              </p>
            </div>
            <i class="faq-toggle bi bi-chevron-right"></i>
          </div>
          <div class="faq-item"  data-aos="fade-right" data-aos-delay="400" data-aos-duration="800" data-aos-anchor-placement="top-bottom">
            <i class="faq-icon bi bi-question-circle"></i>
            <h3>{{ __('bussines_scope_4') }}</h3>
            <div class="faq-content">
              <p>
                {!! __('bussines_scope_4_description') !!}
              </p>
            </div>
            <i class="faq-toggle bi bi-chevron-right"></i>
          </div>
         <!--  <div class="faq-item"  data-aos="fade-left" data-aos-delay="500" data-aos-duration="800" data-aos-anchor-placement="top-bottom">
            <i class="faq-icon bi bi-question-circle"></i>
            <h3>LAYANAN JASA KONSULTANSI PERIZINAN NON-KONSTRUKSI</h3>
            <div class="faq-content">
              <p>
                1. Izin Ketenaga Listrikan (IUJPTL & SBUJPTL) <br>
                2. Izin Usaha Jasa Pertambangan (IUJP) <br>
                3. Jasa Pendirian Perusahaan (CV, PT, atau Yayasan) <br>
                4. Jasa Sertifikasi Tingkat Komponan Dalam Negeri (TKDN) <br>
                5. Jasa Pendampingan OSS Berbasis Resiko <br>
                6. Jasa Layanan Perpajakan (PKP & SPPKP)
              </p>
            </div>
            <i class="faq-toggle bi bi-chevron-right"></i>
          </div> -->
        </div>
      </div>

    </div>

  </div>


</section>
@endsection

@push('after-script')
    <script>
      let slideIndex = 0;
      const slides = document.querySelectorAll('.slide');
      const totalSlides = slides.length;
      const slidesToShow = 3;

      function showSlides() {
          const slider = document.querySelector('.slider');
          const slideWidth = slider.clientWidth / slidesToShow;
          slider.style.transform = `translateX(${-slideWidth * slideIndex}px)`;
      }

      function changeSlide(n) {
          slideIndex += n;
          if (slideIndex >= totalSlides) {
              slideIndex = 0;
          }
          if (slideIndex < 0) {
              slideIndex = totalSlides - 1;
          }
          showSlides();
      }

      function autoSlide() {
          changeSlide(1);
          setTimeout(autoSlide, 3000);
      }

      document.addEventListener('DOMContentLoaded', () => {
          showSlides();
          autoSlide();
      });
    </script>
@endpush
