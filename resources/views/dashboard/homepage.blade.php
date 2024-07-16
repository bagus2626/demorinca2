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
</style>
@endpush
@section('content')
<section id="hero" class="call-to-action section dark-background">
  <img src="assets/img/cta-bg.jpg" alt="">
  <div class="container">
    <div class="row" data-aos="zoom-in" data-aos-delay="100">
      <div class="col-xl-8 text-center text-xl-start mt-3">
        <h1>Selamat Datang di PT Rinca Cipta Karya</h1>
        <p>PT Rinca Cipta Karya merupakan konsultan perencanaan
          arsitek dan pengurusan perizinan bangunan gedung yang
          sudah memiliki lisensi. Memiliki target market semua
          pemilik bangunan gedung, atau semua yang ingin
          membangun bangunan.</p>
          <div class="d-flex mt-4">
            <input type="text" class="tracking-input" style="margin-top: 10px" placeholder="Cari nomor document, cth: DC12345" id="valueTracking">
            <a class="cta-btn align-middle" href="#" onclick="searchTracking()">Cari</a>
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

<section id="about" class="about section">
  <div class="container section-title" data-aos="fade-up" data-aos-delay="100" data-aos-duration="800" data-aos-anchor-placement="top-bottom">
    <h2>Tentang Kami</h2>
  </div>
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

<section id="direktur" class="direktur section">
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
        <p class="fw-bold">
          Direktur & Tenaga Ahli Struktur
        </p>
        <p>
          PT Rinca Cipta Karya merupakan konsultan enjiniring yang mayoritas bergerak
          dibidang Arsitektural dan Sipil. PT Rinca
          Cipta Karya senantiasa menyempurnakan kemampuan terus menerus, untuk
          menyiapkan enjinir-enjinir muda dapat
          bersaing dalam taraf Internasional.
        </p>
      </div>
      <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200" data-aos-duration="800" data-aos-anchor-placement="top-bottom">
        <p>
          Dalam peningkatan dan pertumbuhan penjualan
          dan laba, Rinca Cipta Karya memperkuat bisnis
          yang ada, bidang-bidang proyek baru dan menamabah bisnis baru di bidang engineering, interior,
          dan perizinan bangunan gedung. Rinca Cipta
          Karya terus menyempurnakan produk dan layanan
          dengan harga kompetitif, agar seluruh masyarakat dapat mendapatkan manfaat yang adil.
        </p>
        <p>
          Pengembangan dan penyempurnaan terus
          menerus kami lakukan, seperti teknologi informasi
          yang menjadikan seluruh aktivitas lebih terkelola
          secara terintegrasi, efisien, transparan, dan akuntable. PT Rinca Cipta Karya berkomitmen menjadi
          konsultan yang sustainable dibangun dengan
          pemahaman dan komitmen kuat di dalam peningkatan kualitas karyawan dengan peningkatan
          kompetensi dan kemampuan
        </p>
        <p>
          Kepemimpinan menjadi sangat berperan didalam
          menentukan kinerja dan kerberhasilan perusahaan. Program pengembangan SDM dirumuskan
          dan dijalankan secara sungguh-sungguh dan
          berkesinambungan.
        </p>
        <p>
          PT Rinca Cipta Karya merupakan konsultan yang
          diproyeksikan menjadi salah satu terbaik di Indonesia, PT Rinca Cipta Karya senantiasa memegang teguh filosofi untuk PASTI MEMBERIKAN
          JASA TERBAIK UNTUK SELURUH KLIEN, dengan
          penuh Amanah, Kompeten, Kolaboratif, Adaptif,
          dan Loyal.
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

<section id="portfolio" class="portfolio section">
  <div class="container section-title" data-aos="fade-up" data-aos-delay="100" data-aos-duration="800" data-aos-anchor-placement="top-bottom">
    <h2>Proyek Kami</h2>
  </div>
  <div class="container projects-desktop">
    <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">
      <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">
        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
          <img src="assets/img/projects/1.png" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>PT Sun Tak Indonesia</h4>
            <p>Pengujian bangunan gedung untuk perizinan
              Sertifikat Laik Fungsi dan PBG Penambahan
              Bangunan Gedung</p>
            <a href="assets/img/projects/1.png" title="App 1" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
          <img src="assets/img/projects/2.png" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Perumahan Grand Cimandala Residence</h4>
            <p>Pengujian bangunan gedung untuk perizinan
              Sertifikat Laik Fungsi.</p>
            <a href="assets/img/projects/2.png" title="Product 1" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
          <img src="assets/img/projects/3.png" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Royal Tulip Luxury Hotels</h4>
            <p>Pengujian bangunan gedung untuk perizinan
              Sertifikat Laik Fungsi.</p>
            <a href="assets/img/projects/3.png" title="Branding 1" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
          <img src="assets/img/projects/4.png" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>PT Ultra Sakti</h4>
            <p>Penyusunan DED untuk perizinan Industri
              PT Ultra Sakti Narogong Kab. Bogor.</p>
            <a href="assets/img/projects/4.png" title="App 2" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
          <img src="assets/img/projects/5.png" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Asimetri Coffe</h4>
            <p>Pengujian bangunan gedung untuk perizinan
              Sertifikat Laik Fungsi.</p>
            <a href="assets/img/projects/5.png" title="Product 2" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
          <img src="assets/img/projects/6.png" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Perumahan Cikeas River Side</h4>
            <p>Pengujian bangunan gedung untuk perizinan
              Sertifikat Laik Fungsi.</p>
            <a href="assets/img/projects/6.png" title="Branding 2" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
          <img src="assets/img/projects/7.png" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>COZY CO-LIVING JELAMBAR</h4>
            <p>Pengejaan DED dan Parizinan Mendirikan
              Banguna</p>
            <a href="assets/img/projects/7.png" title="App 3" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
          <img src="assets/img/projects/8.png" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Pergudangan Sigma Kartika Gunung Sindur</h4>
            <p>Pengujian bangunan gedung untuk perizinan
              Sertifikat Laik Fungsi.</p>
            <a href="assets/img/projects/8.png" title="Product 3" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
          <img src="assets/img/projects/9.png" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>PT Dalya Citramandiri</h4>
            <p>Review DED dan Pembuatan Kajian Arsitektur
              untuk perencanaan Industri</p>
            <a href="assets/img/projects/9.png" title="Branding 2" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
          <img src="assets/img/projects/10.png" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>SDIT Kharisma Azzahra Bogor</h4>
            <p>Pengujian Bangunan untuk proses perizinan Sertifikat Laik Fungsi dan Persetujuan Bangunan
              Gedung</p>
            <a href="assets/img/projects/10.png" title="Branding 2" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
          <img src="assets/img/projects/11.png" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>PT Electra Mobilitas Indonesia</h4>
            <p>Pengujian bangunan gedung untuk keperluan
              Sertifikasi Bangunan Gedung</p>
            <a href="assets/img/projects/11.png" title="Branding 2" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
          <img src="assets/img/projects/12.png" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>PT SiSeSa Berkah Illahi</h4>
            <p>Pengujian bangunan gedung untuk keperluan
              Sertifikasi Bangunan Gedung dan Persetujuan
              Bangunan Gedung
              </p>
            <a href="assets/img/projects/12.png" title="Branding 2" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
          <img src="assets/img/projects/13.png" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>PT Ultra Sakti</h4>
            <p>Review Gambar untuk Pengajuan Persetujuan
              Bangunan Gedung plant Narogong
              </p>
            <a href="assets/img/projects/13.png" title="Branding 2" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
          <img src="assets/img/projects/14.png" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>SMK Muhammadiyah Cariu</h4>
            <p>Pengujian bangunan gedung untuk perizinan
              Sertifikat Laik Fungsi
              </p>
            <a href="assets/img/projects/14.png" title="Branding 2" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
          <img src="assets/img/projects/15.png" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Yayasan Al Ustmani</h4>
            <p>Pengujian bangunan gedung untuk proses
              perizinan Sertifikat Laik Fungi dan Persetujuan
              Bangunan
              </p>
            <a href="assets/img/projects/15.png" title="Branding 2" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
          <img src="assets/img/projects/16.png" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Puspanita Eco Spirit Center</h4>
            <p>Pengujian bangunan gedung utnuk perizinan
              Sertifikat Laik Fungsi
              </p>
            <a href="assets/img/projects/16.png" title="Branding 2" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
   <div class="slider-container projects-mobile">
        <div class="slider">
            <div class="slide">
                <img src="assets/img/projects/1.png" alt="">
                <div class="description">
                    <h3>PT Sun Tak Indonesia</h3>
                    <p>Pengujian bangunan gedung untuk perizinan
                       Sertifikat Laik Fungsi dan PBG Penambahan
                       Bangunan Gedung</p>
                </div>
            </div>
            <div class="slide">
                <img src="assets/img/projects/2.png" alt="">
                <div class="description">
                    <h3>Perumahan Grand Cimandala Residence</h3>
                    <p>
                      Pengujian bangunan gedung untuk perizinan Sertifikat Laik Fungsi.
                    </p>
                </div>
            </div>
            <div class="slide">
                <img src="assets/img/projects/3.png" alt="">
                <div class="description">
                    <h3>Royal Tulip Luxury Hotels</h3>
                    <p>Pengujian bangunan gedung untuk perizinan
                       Sertifikat Laik Fungsi.</p>
                </div>
            </div>
             <div class="slide">
                <img src="assets/img/projects/4.png" alt="">
                <div class="description">
                    <h3>PT Ultra Sakti</h3>
                     <p>Penyusunan DED untuk perizinan Industri
                        PT Ultra Sakti Narogong Kab. Bogor.</p>
                </div>
            </div>
             <div class="slide">
                <img src="assets/img/projects/5.png" alt="">
                <div class="description">
                    <h3>Asimetri Coffe</h3>
                     <p>Pengujian bangunan gedung untuk perizinan
                        Sertifikat Laik Fungsi.</p>
                </div>
            </div>
             <div class="slide">
                <img src="assets/img/projects/6.png" alt="">
                <div class="description">
                    <h3>Perumahan Cikeas River Side</h3>
                     <p>Pengujian bangunan gedung untuk perizinan
                        Sertifikat Laik Fungsi.</p>
                </div>
            </div>
             <div class="slide">
                <img src="assets/img/projects/7.png" alt="">
                <div class="description">
                    <h3>COZY CO-LIVING JELAMBAR</h3>
                     <p>Pengejaan DED dan Parizinan Mendirikan Banguna</p>
                </div>
            </div>
             <div class="slide">
                <img src="assets/img/projects/8.png" alt="">
                <div class="description">
                    <h3>Pergudangan Sigma Kartika Gunung Sindur</h3>
                    <p>Pengujian bangunan gedung untuk perizinan
                       Sertifikat Laik Fungsi.</p>
                </div>
            </div>
             <div class="slide">
                <img src="assets/img/projects/9.png" alt="">
                <div class="description">
                    <h3>PT Dalya Citramandiri</h3>
                    <p>Review DED dan Pembuatan Kajian Arsitektur
                       untuk perencanaan Industri</p>
                </div>
            </div>
             <div class="slide">
                <img src="assets/img/projects/10.png" alt="">
                <div class="description">
                    <h3>SDIT Kharisma Azzahra Bogor</h3>
                    <p>Pengujian Bangunan untuk proses perizinan Sertifikat Laik Fungsi dan Persetujuan Bangunan
                       Gedung</p>
                </div>
            </div>
             <div class="slide">
                <img src="assets/img/projects/11.png" alt="">
                <div class="description">
                    <h3>PT Electra Mobilitas Indonesia</h3>
                    <p>Pengujian bangunan gedung untuk keperluan
                       Sertifikasi Bangunan Gedung</p>
                </div>
            </div>
            <div class="slide">
                <img src="assets/img/projects/12.png" alt="">
                <div class="description">
                    <h3>PT SiSeSa Berkah Illahi</h3>
                    <p>Pengujian bangunan gedung untuk keperluan
                      Sertifikasi Bangunan Gedung dan Persetujuan
                      Bangunan Gedung
                    </p>
                </div>
            </div>
            <div class="slide">
                <img src="assets/img/projects/13.png" alt="">
                <div class="description">
                    <h3>PT Ultra Sakti</h3>
                    <p>Review Gambar untuk Pengajuan Persetujuan
                      Bangunan Gedung plant Narogong
                    </p>
                </div>
            </div>
            <div class="slide">
                <img src="assets/img/projects/14.png" alt="">
                <div class="description">
                    <h3>SMK Muhammadiyah Cariu</h3>
                    <p>Pengujian bangunan gedung untuk perizinan
                       Sertifikat Laik Fungsi
                    </p>
                </div>
            </div>
            <div class="slide">
                <img src="assets/img/projects/15.png" alt="">
                <div class="description">
                    <h3>Yayasan Al Ustmani</h3>
                    <p>Pengujian bangunan gedung untuk proses
                      perizinan Sertifikat Laik Fungi dan Persetujuan
                      Bangunan
                    </p>
                </div>
            </div>
            <div class="slide">
                <img src="assets/img/projects/16.png" alt="">
                <div class="description">
                    <h3>Puspanita Eco Spirit Center</h3>
                    <p>Pengujian bangunan gedung utnuk perizinan
                       Sertifikat Laik Fungsi
                    </p>
                </div>
            </div>
        </div>
        <button class="prev" onclick="changeSlide(-1)">&#10094;</button>
        <button class="next" onclick="changeSlide(1)">&#10095;</button>
    </div>
</section>

<section id="regulasi" class="faq-2 section light-background">
  <div class="container section-title"  data-aos="fade-up" data-aos-delay="100" data-aos-duration="800" data-aos-anchor-placement="top-bottom">
    <h2>Ruang Lingkup Usaha</h2>
    <p>Dalam menjalankan kegiatan pelayanannya, PT Rinca Cipta Karya mempunyai bidang/ layanan jasa konsultasi
      Konstruksi dan jasa Konsultansi Non Konstruksi, berikut layanan kami :</p>
  </div>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-10">
        <div class="faq-container">
        <div class="faq-item"  data-aos="fade-left" data-aos-delay="100" data-aos-duration="800" data-aos-anchor-placement="top-bottom">
            <i class="faq-icon bi bi-question-circle"></i>
            <h3>LAYANAN JASA KONSULTANSI KONSTRUKSI</h3>
            <div class="faq-content">
              <p>
                1. Arsitektur <br>
                2. Sipil <br>
                3. Mekanikal <br>
                4. Elektrikal <br>
                5. Tata Lingkungan <br>
                6. Jasa Survey <br>
                7. Jasa Analisis Engineering <br>
                8. Jasa Inspeksi Teknis <br>
                9. Jasa Manajemen Proyek <br>
                10. Jasa Engineering Terpadu
              </p>
            </div>
            <i class="faq-toggle bi bi-chevron-right"></i>
          </div>
          <div class="faq-item"  data-aos="fade-right" data-aos-delay="200" data-aos-duration="800" data-aos-anchor-placement="top-bottom">
            <i class="faq-icon bi bi-question-circle"></i>
            <h3>LAYANAN JASA KONSULTANSI PERIZINAN KONSTRUKSI</h3>
            <div class="faq-content">
              <p>
                1. Persetujuan Bangunan Gedung (PBG/IMB) <br>
                2. Sertifikat Laik Fungsi (SLF) <br>
                3. Dokumen Lingkungan (SPPL/ UKL-UPL/ Amdal) <br>
                4. Analisis Dampak Lalu Lintas (Andalalin) <br>
                5. SLO Lingkungan (B3/ IPAL) <br>
                6. Siteplan <br>
                7. Keterangan Rencana Kota/ Kabupaten <br>
                8. Kesesuaian Kegiatan Pemanfaatan Ruang (KKPR) <br>
                9. Surat Izin Pengambilan Air Tanah (SIPA)
              </p>
            </div>
            <i class="faq-toggle bi bi-chevron-right"></i>
          </div>
          <div class="faq-item"  data-aos="fade-left" data-aos-delay="300" data-aos-duration="800" data-aos-anchor-placement="top-bottom">
            <i class="faq-icon bi bi-question-circle"></i>
            <h3>LAYANAN JASA KONSULTANSI & KONTRAKTOR DESAIN INTERIOR</h3>
            <div class="faq-content">
              <p>
                Interior Design & Contractor Services
              </p>
            </div>
            <i class="faq-toggle bi bi-chevron-right"></i>
          </div>
          <div class="faq-item"  data-aos="fade-right" data-aos-delay="400" data-aos-duration="800" data-aos-anchor-placement="top-bottom">
            <i class="faq-icon bi bi-question-circle"></i>
            <h3>LAYANAN PENGEMBANGAN LAHAN, KAWASAN, & PROPERTI</h3>
            <div class="faq-content">
              <p>
                Land, Estate, & Property Development Services
              </p>
            </div>
            <i class="faq-toggle bi bi-chevron-right"></i>
          </div>
          <div class="faq-item"  data-aos="fade-left" data-aos-delay="500" data-aos-duration="800" data-aos-anchor-placement="top-bottom">
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
