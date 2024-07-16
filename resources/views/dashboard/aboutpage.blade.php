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
      <div class="row" data-aos="zoom-in" data-aos-delay="100">
        <div class="col-xl-12 text-start mt-3">
          <h1 class="title-about" style="font-weight: bold">Tentang Kami</h1>
        </div>
      </div>
    </div>
  </section>

<section id="about" class="about section">
  {{-- <div class="container section-title" data-aos="fade-up" data-aos-delay="100" data-aos-duration="800" data-aos-anchor-placement="top-bottom">
    <h2>Tentang Kami</h2>
  </div> --}}
  <div class="container">
    <div class="row gy-4">
      <div class="col-lg-6 content" data-aos="fade-right" data-aos-delay="100" data-aos-duration="800" data-aos-anchor-placement="top-bottom">
        <h4>
          Visi
        </h4>
        <p>
          Menjadi Konsultan Enjiniring yang Handal, Cakap, dan Memegang Teguh Sustatainable Desain Untuk Keberlangsungan
          Bumi Beserta Isinya
        </p>
      </div>
      <div class="col-lg-6" data-aos="fade-left" data-aos-delay="100" data-aos-duration="800" data-aos-anchor-placement="top-bottom">
        <h4>
          Misi
        </h4>
        <ul>
          <li><i class="bi bi-check2-circle"></i> <span>Mengembangkan Karya Enjiniring Indonesia yang Berkualitas.</span></li>
          <li><i class="bi bi-check2-circle"></i> <span>Menyediakan produk/ jasa Konsultan Enjiniring, Manajemen Proyek yang unggul dan berkesinambungan.</span></li>
          <li><i class="bi bi-check2-circle"></i> <span>Memberikan manfaat dan nilai tambah untuk Masyarakat sekitar.</span></li>
          <li><i class="bi bi-check2-circle"></i> <span>Memberdayakan pengetahuan, pengalaman, dan kreativitas untuk terciptanya solusi terbaik, dengan tidak lupa memegang teguh komitmen dan keper.</span></li>
        </ul>
      </div>
    </div>
  </div>
</section>

<section id="why-us" class="section why-us light-background" data-builder="section">
  <div class="container-fluid">
    <div class="row gy-4">
      <div class="col-lg-7 d-flex flex-column justify-content-center order-2 order-lg-1">
        <div class="content px-xl-5" data-aos="fade-up" data-aos-delay="100" data-aos-duration="800" data-aos-anchor-placement="top-bottom">
          <h3><span>KEGIATAN USAHA UTAMA</span></h3>
        </div>
        <div class="faq-container px-xl-5" data-aos="fade-right" data-aos-delay="100" data-aos-duration="800" data-aos-anchor-placement="top-bottom">
          <div class="faq-item faq-active">
            <h3><span>01</span> PERENCANAAN TATARUANG, BANGUNAN, DAN INDUSTRI</h3>
            <div class="faq-content">
            </div>
            <i class="faq-toggle bi bi-chevron-right"></i>
          </div>
          <div class="faq-item" data-aos="fade-left" data-aos-delay="200" data-aos-duration="800" data-aos-anchor-placement="top-bottom">
            <h3><span>02</span> PERIZINAN BANGUNAN GEDUNG DAN INDUSTRI</h3>
            <div class="faq-content">
            </div>
            <i class="faq-toggle bi bi-chevron-right"></i>
          </div>
          <div class="faq-item" data-aos="fade-right" data-aos-delay="300" data-aos-duration="800" data-aos-anchor-placement="top-bottom">
            <h3><span>03</span> DESAIN INTERIOR</h3>
            <div class="faq-content">
            </div>
            <i class="faq-toggle bi bi-chevron-right"></i>
          </div>
          <div class="faq-item"  data-aos="fade-left" data-aos-delay="400" data-aos-duration="800" data-aos-anchor-placement="top-bottom">
            <h3><span>04</span>NON - KONSTRUKSI</h3>
            <div class="faq-content">
            </div>
            <i class="faq-toggle bi bi-chevron-right"></i>
          </div>
        </div>
      </div>
      <div class="col-lg-5 order-1 order-lg-2 why-us-img">
        <img src="assets/img/why-us.png" class="img-fluid" alt="" data-aos="zoom-in" data-aos-delay="100" data-aos-duration="800" data-aos-anchor-placement="top-bottom">
      </div>
    </div>
  </div>
</section>
@endsection
