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
    background-color: #3cb371; 
    padding: 1.5rem;
    border-radius: 8px;
    text-align: center;
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);

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

/* .header {
      background-color: #5db54d;
    heading-color: #ffffff;
     color: var(--default-color);
} */


</style>
@endpush
@section('content')
{{-- <section id="hero" class="call-to-action section dark-background">
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
</section> --}}
<section id="hero" class="hero section black-background">

      <div class="info d-flex align-items-center">
        <div class="container">
          <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="100">
            <div class="col-lg-6 text-center">
              <h2>{!! __('welcome') !!} PT Rinca Cipta Karya</h2>
              <p>{{ __('description_rinca') }}</p>
              <div class="d-flex mt-4">
                <input type="text" class="tracking-input" style="margin-top: 10px" placeholder="{{ __('search') }} nomor document, ex: DC12345" id="valueTracking">
                <a class="cta-btn align-middle" href="#" onclick="searchTracking()">{{ __('search') }}</a>
              </div>
            </div>
          </div>
           <div class="row justify-content-center">
            <div class="col-lg-6 text-center" id="tracking-result" style="display: none">
            </div>
          </div>
        </div>
      </div>

      {{-- DESKTOP VERSION --}}
      <div id="hero-carousel" class="carousel slide d-none d-md-block" data-bs-ride="carousel" data-bs-interval="5000">

        <div class="carousel-item">
          <img src="assets/img/hero-carousel/hero-carousel-1.jpg" loading="lazy" alt="">
        </div>
      
        <div class="carousel-item active">
          <img src="assets/img/hero-carousel/hero-carousel-2.jpg" loading="lazy" alt="">
        </div>
      
        <div class="carousel-item">
          <img src="assets/img/hero-carousel/hero-carousel-3.jpg" loading="lazy" alt="">
        </div>
      
        <div class="carousel-item">
          <img src="assets/img/hero-carousel/hero-carousel-4.jpg" loading="lazy" alt="">
        </div>
      
        <div class="carousel-item">
          <img src="assets/img/hero-carousel/hero-carousel-5.jpg" loading="lazy" alt="">
        </div>
      
        <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>
      
        <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>
      
      </div>

      <div id="hero-carousel" class="carousel slide d-md-none" data-bs-ride="carousel" data-bs-interval="5000">

        <div class="carousel-item">
          <img src="assets/img/hero-carousel/carousel-mobile-1.jpg" loading="lazy" alt="">
        </div>
      
        <div class="carousel-item active">
          <img src="assets/img/hero-carousel/carousel-mobile-2.jpg" loading="lazy" alt="">
        </div>
      
        <div class="carousel-item">
          <img src="assets/img/hero-carousel/carousel-mobile-3.jpg" loading="lazy" alt="">
        </div>

        <div class="carousel-item">
          <img src="assets/img/hero-carousel/carousel-mobile-4.jpg" loading="lazy" alt="">
        </div>
      
      </div>

    </section><!-- /Hero Section -->

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


<section id="direktur" class="modern-building-1 section">
  <div class="container section-title">
    <h2 class="text-white">Direktur</h2>
  </div>
  <div class="container">
    <div class="row gy-4">
      <div class="col-lg-4 content text-center">
        <div class="row">
          <div class="col-5 col-lg-12">
            <img src="assets/img/personal/direktur.png" alt="" class="img-fluid">
          </div>
          <div class="col-7 col-lg-12">
            <h5 class="mt-3 info-wrap">
              DAWIN MUHAMAD YUSUF <br> <span style="font-size: 14px">( {{ __('divisi') }} )</span>
            </h5>
          </div>
          <div class="info-wrap">
            <p class="fst-italic">
              <i class="bi bi-option"></i> {{ __('direktur_description_1') }}
            </p>
          </div>
        </div>
      </div>
      <div class="col-lg-8">
        <div class="info-wrap">
          <p class="fst-italic">
            <i class="bi bi-option"></i> {{ __('direktur_description_2') }}
          </p>
        </div>
        <div class="info-wrap">
          <p class="fst-italic">
            <i class="bi bi-option"></i> {{ __('direktur_description_3') }}
          </p>
        </div>
        <div class="info-wrap">
          <p class="fst-italic">
            <i class="bi bi-option"></i> {{ __('direktur_description_4') }}
          </p>
        </div>
        <div class="info-wrap">
          <p class="fst-italic">
            <i class="bi bi-option"></i> {{ __('direktur_description_5') }}
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="why-us" class="section why-us light-background" data-builder="section">
  <div class="container-fluid">
    <div class="row gy-4 info-wrap">
      <div class="col-lg-7 d-flex flex-column justify-content-center order-2 order-lg-1">
        <div class="content px-xl-5" data-aos="fade-up" data-aos-delay="100" data-aos-duration="800">
          <h3><span>{{ __('bussines_activities') }}</span></h3>
        </div>
        <div class="faq-container px-xl-5" data-aos="fade-right" data-aos-delay="100" data-aos-duration="800">
          <a href="{{ route('dashboard.about') }}#perencanaan">
            <div class="row gy-3 info-wrap">
              <h3><span>01</span> {{ __('bussines_activities_1') }}</h3>
            </div>
          </a>
          <a href="{{ route('dashboard.about') }}#perizinan">
            <div class="row gy-3 info-wrap" data-aos="fade-left" data-aos-delay="200" data-aos-duration="800">
              <h3><span>02</span> {{ __('bussines_activities_2') }}</h3>
            </div>
          </a>
          <a href="{{ route('dashboard.about') }}#design">
            <div class="row gy-3 info-wrap" data-aos="fade-right" data-aos-delay="300" data-aos-duration="800">
              <h3><span>03</span> {{ __('bussines_activities_3') }}</h3>
            </div>
          </a>
        </div>
      </div>
      <div class="col-lg-5 order-1 order-lg-2 why-us-img">
        <img src="assets/img/icon-modern-1.webp" class="img-fluid" alt="" data-aos="zoom-in" data-aos-delay="100" data-aos-duration="800">
      </div>
    </div>
  </div>
</section>

<section id="services" class="services modern-building-1 section light-background">
  <div class="container section-title">
    <h2 class="text-white">{{ __('why_choose_us') }}</h2>
  </div>
  <div class="container">
    <div class="row gy-4 justify-content-center">
      <div class="col-xl-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
        <div class="service-item position-relative">
          <div class="icon"><i class="bi bi-person-video3 icon"></i></div>
          <h4><a href="" class="row gy-4 info-wrap">{{ __('profesional_team') }}</a></h4>
          <p>{{ __('profesional_team_description') }}</p>
        </div>
      </div>
      <div class="col-xl-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
        <div class="service-item position-relative">
          <div class="icon"><i class="bi bi-activity icon"></i></div>
          <h4><a href="" class="row gy-4 info-wrap">{{ __('solution') }}</a></h4>
          <p>{{ __('solution_description') }}</p>
        </div>
      </div>
      <div class="col-xl-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
        <div class="service-item position-relative">
          <div class="icon"><i class="bi bi-bar-chart-line icon"></i></div>
          <h4><a href="" class="row gy-4 info-wrap">{{ __('result') }}</a></h4>
          <p>{{ __('result_description') }}</p>
        </div>
      </div>
    </div>
  </div>
</section>

<style>
#about {
  padding: 60px 0 30px 0;
}

#about .about-img {
  overflow: hidden;
}

#about .about-img img {
  margin-left: -15px;
  max-width: 100%;
}

@media (max-width: 768px) {
  #about .about-img {
    height: auto;
  }

  #about .about-img img {
    margin-left: 0;
    padding-bottom: 30px;
  }
}

#about .content h2 {
  color: #0c8a53;
  font-weight: 700;
  font-size: 36px;
  font-family: "Raleway", sans-serif;
}

#about .content h3 {
  color: #555;
  font-weight: 300;
  font-size: 18px;
  line-height: 26px;
  font-style: italic;
}

#about .content p {
  line-height: 26px;
}

#about .content p:last-child {
  margin-bottom: 0;
}

#about .content i {
  font-size: 20px;
  padding-right: 4px;
  color: #50d8af;
}

#about .content ul {
  list-style: none;
  padding: 0;
}

#about .content ul li {
  padding-bottom: 10px;
}
.btn-search-tracking {
    background-color: #ffffff;
    border: 2px solid #0c8a53; 
    color: #0c8a53; 
    font-weight: bold;
    padding: 11px 23px;
    text-align: center; 
    text-decoration: none; 
    display: inline-block; 
    font-size: 18px; 
    margin: 4px 2px; 
    border-radius: 5px; 
}
</style>

  <section id="about">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-6 about-img">
            <img src="assets/img/about-image.jpeg" alt="">
          </div>

          <div class="col-lg-6 content">
            <h2>TRACKING PLATFORM</h2>
            <h3>PT RINCA CIPTA KARYA </h3>

            <ul>
              <li><i class="bi bi-check-circle"></i> {{ __('device_1') }}</li>
              <li><i class="bi bi-check-circle"></i> {{ __('device_2') }}</li>
              <li><i class="bi bi-check-circle"></i> {{ __('device_3') }}</li>
            </ul>

            <a href="{{ route('dashboard.tracking') }}" class="btn-search-tracking btn btn-success"><i class="bi bi-search"></i> Tracking</a>
          </div>
        </div>

      </div>
    </section>

<section id="portfolio" class="portfolio section modern-building-1 section light-background">
  <div class="container section-title">
    <h2 class="text-white">{{ __('project') }}</h2>
  </div>
  <div class="container projects-desktop">
    <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">
      <div class="row gy-4 isotope-container">
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
  <div class="container section-title"  data-aos="fade-up" data-aos-delay="100" data-aos-duration="800">
    <h2>{{ __('bussines_scope') }}</h2>
    <p>{{ __('bussines_scope_description') }}</p>
  </div>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-10">
        <div class="faq-container">
        <div class="faq-item"  data-aos="fade-left" data-aos-delay="100" data-aos-duration="800">
            <i class="faq-icon bi bi-question-circle"></i>
            <h3 >{{ __('bussines_scope_1') }}</h3>
            <div class="faq-content">
              <p>
                {!! __('bussines_scope_1_description') !!}
              </p>
            </div>
            <i class="faq-toggle bi bi-chevron-right"></i>
          </div>
          <div class="faq-item"  data-aos="fade-right" data-aos-delay="200" data-aos-duration="800">
            <i class="faq-icon bi bi-question-circle"></i>
            <h3>{{ __('bussines_scope_2') }}</h3>
            <div class="faq-content">
              <p>
                {!! __('bussines_scope_2_description') !!}
              </p>
            </div>
            <i class="faq-toggle bi bi-chevron-right"></i>
          </div>
          <div class="faq-item"  data-aos="fade-left" data-aos-delay="300" data-aos-duration="800">
            <i class="faq-icon bi bi-question-circle"></i>
            <h3>{{ __('bussines_scope_3') }}</h3>
            <div class="faq-content">
              <p>
                {!! __('bussines_scope_3_description') !!}
              </p>
            </div>
            <i class="faq-toggle bi bi-chevron-right"></i>
          </div>
          <div class="faq-item"  data-aos="fade-right" data-aos-delay="400" data-aos-duration="800">
            <i class="faq-icon bi bi-question-circle"></i>
            <h3>{{ __('bussines_scope_4') }}</h3>
            <div class="faq-content">
              <p>
                {!! __('bussines_scope_4_description') !!}
              </p>
            </div>
            <i class="faq-toggle bi bi-chevron-right"></i>
          </div>
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
