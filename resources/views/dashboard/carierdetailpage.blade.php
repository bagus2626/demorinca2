@extends('layouts.dashboard')

@push('after-style')
<style>
  .blog {
    padding: 40px 0 20px 0;
  }
  .blog .entry {
    padding: 30px;
    margin-bottom: 60px;
    box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);
  }
  .blog .entry .entry-img {
    max-height: 440px;
    margin: -30px -30px 20px -30px;
    overflow: hidden;
  }
  .blog .entry .entry-title {
    font-size: 28px;
    font-weight: bold;
    padding: 0;
    margin: 0 0 20px 0;
  }
  .blog .entry .entry-title a {
    color: #012970;
    transition: 0.3s;
  }
  .blog .entry .entry-title a:hover {
    color: #4154f1;
  }
  .blog .entry .entry-meta {
    margin-bottom: 15px;
    color: #4084fd;
  }
  .blog .entry .entry-meta ul {
    display: flex;
    flex-wrap: wrap;
    list-style: none;
    align-items: center;
    padding: 0;
    margin: 0;
  }
  .blog .entry .entry-meta ul li + li {
    padding-left: 20px;
  }
  .blog .entry .entry-meta i {
    font-size: 16px;
    margin-right: 8px;
    line-height: 0;
  }
  .blog .entry .entry-meta a {
    color: #777777;
    font-size: 14px;
    display: inline-block;
    line-height: 1;
  }
  .blog .entry .entry-content p {
    line-height: 24px;
    color: black
  }
  .blog .entry .entry-content h3 {
    font-size: 22px;
    margin-top: 30px;
    font-weight: bold;
  }
  .blog .entry-single {
    margin-bottom: 30px;
  }
  .blog .blog-comments .reply-form {
    margin-top: 30px;
    padding: 30px;
    box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);
  }
  .blog .blog-comments .reply-form h4 {
    font-weight: bold;
    font-size: 22px;
  }
  .blog .blog-comments .reply-form p {
    font-size: 14px;
  }
  .blog .blog-comments .reply-form input {
    border-radius: 4px;
    padding: 10px 10px;
    font-size: 14px;
  }
  .blog .blog-comments .reply-form input:focus {
    box-shadow: none;
    border-color: #a0aaf8;
  }
  .blog .blog-comments .reply-form textarea {
    border-radius: 4px;
    padding: 10px 10px;
    font-size: 14px;
  }
  .blog .blog-comments .reply-form textarea:focus {
    box-shadow: none;
    border-color: #a0aaf8;
  }
  .blog .blog-comments .reply-form .form-group {
    margin-bottom: 25px;
  }
  .blog .blog-comments .reply-form .btn-primary {
    border-radius: 4px;
    padding: 10px 20px;
    border: 0;
    background-color: #012970;
  }
  .blog .blog-comments .reply-form .btn-primary:hover {
    background-color: #013289;
  }
  .blog .sidebar {
    padding: 30px;
    margin: 0 0 60px 20px;
    box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);
  }

  .carier-page {
      padding: 120px 0;
      position: relative;
      clip-path: inset(0);
  }

  .carier-page .image {
      position: fixed;
      top: 0;
      left: 0;
      display: block;
      width: 100%;
      height: 100%;
      object-fit: cover;
      z-index: 1;
  }

  .carier-page:before {
      content: "";
      background: color-mix(in srgb, var(--background-color), transparent 35%);
      position: absolute;
      inset: 0;
      z-index: 2;
  }

  .carier-page .container {
      position: relative;
      z-index: 3;
  }
  .portfolio-details .portfolio-details-slider img {
      width: 100%;
    }

    .portfolio-details .portfolio-details-slider .swiper-pagination {
      margin-top: 20px;
      position: relative;
    }

    .portfolio-details .portfolio-details-slider .swiper-pagination .swiper-pagination-bullet {
      width: 12px;
      height: 12px;
      background-color: color-mix(in srgb, var(--default-color), transparent 85%);
      opacity: 1;
    }

    .portfolio-details .portfolio-details-slider .swiper-pagination .swiper-pagination-bullet-active {
      background-color: var(--accent-color);
    }

    .portfolio-details .portfolio-info {
      background-color: var(--surface-color);
      padding: 30px;
      box-shadow: 0px 0 30px rgba(0, 0, 0, 0.1);
    }

    .portfolio-details .portfolio-info h3 {
      font-size: 22px;
      font-weight: 700;
      margin-bottom: 20px;
      padding-bottom: 20px;
      border-bottom: 1px solid color-mix(in srgb, var(--default-color), transparent 85%);
    }

    .portfolio-details .portfolio-info ul {
      list-style: none;
      padding: 0;
      font-size: 15px;
    }

    .portfolio-details .portfolio-info ul li+li {
      margin-top: 10px;
    }

    .portfolio-details .portfolio-description {
      padding-top: 30px;
    }

    .portfolio-details .portfolio-description h2 {
      font-size: 26px;
      font-weight: 700;
      margin-bottom: 20px;
    }

    .portfolio-details .portfolio-description p {
      padding: 0;
      color: color-mix(in srgb, var(--default-color), transparent 30%);
    }

    .portfolio-info {
      background: #f9f9f9;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }

    .portfolio-info h3 {
      font-size: 1.5rem;
      color: #333;
      margin-bottom: 20px;
      text-align: center;
    }

    .contact-container {
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    .info-wrap {
      margin: 10px 0;
      width: 100%;
    }

    .contact-link {
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 15px;
      text-decoration: none;
      font-size: 1.2rem;
      border-radius: 5px;
      transition: background 0.3s, transform 0.3s;
    }

    .contact-link i {
      margin-right: 10px;
    }

    .whatsapp {
      background: #25D366;
      color: #fff;
    }

    .email {
      background: #5aa4ee;
      color: #fff;
    }
</style>
@endpush

@section('content')
    <section class="page-title black-background" style="background-image: url(assets/img/page-title-bg.jpg);">
      <div class="container position-relative">
        <h1>{{ __('carier') }}</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="{{ route('dashboard.carier') }}">{{ __('carier') }}</a></li>
            <li class="current">{{ __('carier') }} Detail</li>
          </ol>
        </nav>
      </div>
    </section>
    <section id="portfolio-details" class="portfolio-details section mt-4">
      {{-- <div class="page-title">
        <div class="container">
          <nav class="breadcrumbs">
            <ol>
              <li class="current fw-bold fst-italic" style="font-size: 18px; color: green">{{ __('carier') }}</li>
              <li class="current fst-italic" style="font-size: 18px; color: green">{{ __('carier') }} Detail</li>
            </ol>
          </nav>
        </div>
      </div> --}}
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-4">
          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper init-swiper">
              <div class="swiper-wrapper align-items-center">
                <div class="swiper-slide">
                  <img src="{{ asset('storage/' . $data->image) }}" alt="">
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="portfolio-info" data-aos="fade-up" data-aos-delay="200">
              <h3>KIRIM CV KAMU KE KONTAK KAMI SERTAKAN PORTOFOLIO JIKA ADA</h3>
              <div class="row contact-container">
                <div class="col-12">
                  <a target="_blank" href="https://api.whatsapp.com/send/?phone=6281328256653" class="contact-link fw-semibold whatsapp">
                    <i class="bi bi-whatsapp"></i> +6281328256653
                  </a>
                </div>
                <div class="col-12 mt-3">
                  <a target="_blank" href="mailto:contact@rincakonsultan.com" class="contact-link fw-semibold email">
                    <i class="bi bi-envelope"></i> rinca.studio@gmail.com
                  </a>
                </div>
              </div>
            </div>
            <div class="portfolio-description" data-aos="fade-up" data-aos-delay="300">
              <h2 class="text-black">{{ $data->name }}</h2>
              <p>
                {{ $data->description ?? '-' }}
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection
