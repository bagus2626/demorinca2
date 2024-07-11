<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>PT RINCA KARYA CIPTA</title>
  <meta content="konsultan perencanaan arsitek dan pengurusan perizinan bangunan gedung yang sudah memiliki lisensi." name="description">
  <meta content="Konsultan perizinan bangunan" name="keywords">

  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <link href="{{ 'assets/css/main.css' }}" rel="stylesheet">

</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="index.html" class="logo d-flex align-items-center me-auto">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="sitename">PT Rinca Karya Cipta</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#hero" class="active">Home</a></li>
          <li><a href="#about">Tracking</a></li>
          <li><a href="#regulasi">Regulasi</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a class="btn-getstarted" href="#about">Signin</a>

    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="zoom-out">
            <h1>PT. Rinca Karya Cipta</h1>
            <p>konsultan perencanaan
              arsitek dan pengurusan perizinan bangunan gedung yang
              sudah memiliki lisensi.</p>
           <form action="">
            <div class="row">
              <div class="col">
                <input type="text" class="form-control" placeholder="Nomer dokumen">
              </div>
              <div class="col">
                <button type="submit" class="btn text-dark ps-3 pe-3" style="background-color: #ffffff"><i class="bi bi-search"></i></button>
              </div>
            </div>
           </form>
          </div>
          <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="200">
            <img src="assets/img/hero-img.png" class="img-fluid animated" alt="">
          </div>
        </div>
      </div>

    </section><!-- /Hero Section -->

    <!-- Clients Section -->
    <section id="clients" class="clients section light-background">

      <div class="container" data-aos="zoom-in">

        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
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
          </div>
        </div>

      </div>

    </section><!-- /Clients Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Tentang Kami</h2>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
            <h4>
              Visi
            </h4>
            <p>
              Menjadi Konsultan Enjiniring yang Handal, Cakap, dan Meme- gang Teguh Sustatainable Desain Untuk Keberlangsungan
              Bumi Beserta Isinya
            </p>
          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
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

    </section><!-- /About Section -->

    <section id="direktur" class="about section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Direktur</h2>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-4 content" data-aos="fade-up" data-aos-delay="100">
            <img src="assets/img/personal/default.jfif" alt="" class="img-fluid">
            <h5 class="mt-3">
              DAWIN MUHAMAD YUSUF
            </h5>
            <p>
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

          <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">
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

      <!-- Services Section -->
    
    <!-- Why Us Section -->
    <section id="why-us" class="section why-us light-background" data-builder="section">

      <div class="container-fluid">

        <div class="row gy-4">

          <div class="col-lg-7 d-flex flex-column justify-content-center order-2 order-lg-1">

            <div class="content px-xl-5" data-aos="fade-up" data-aos-delay="100">
              <h3><span>Eum ipsam laborum deleniti </span><strong>velit pariatur architecto aut nihil</strong></h3>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
              </p>
            </div>

            <div class="faq-container px-xl-5" data-aos="fade-up" data-aos-delay="200">

              <div class="faq-item faq-active">

                <h3><span>01</span> Non consectetur a erat nam at lectus urna duis?</h3>
                <div class="faq-content">
                  <p>Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3><span>02</span> Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque?</h3>
                <div class="faq-content">
                  <p>Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3><span>03</span> Dolor sit amet consectetur adipiscing elit pellentesque?</h3>
                <div class="faq-content">
                  <p>Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

            </div>

          </div>

          <div class="col-lg-5 order-1 order-lg-2 why-us-img">
            <img src="assets/img/why-us.png" class="img-fluid" alt="" data-aos="zoom-in" data-aos-delay="100">
          </div>
        </div>

      </div>

    </section><!-- /Why Us Section -->

    <!-- Skills Section -->
    <section id="skills" class="skills section" style="background-color: #e2e0e0">

      <div class="container section-title" data-aos="fade-up">
        <h2>Legalitas Perusahaan</h2>
        <p>CORPORATE MEMBERSHIP</p>
      </div>

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row justify-content=center">
          <div class="col-lg-6 pt-4 pt-lg-0 content text-center">
            <img src="assets/img/sertifikat/1.png" class="img-fluid" alt="">
            <h5 class="mt-3">PERKINDO DKI JAKARTA</h5>
            <p class="fst-italic">Keanggotaan Persatuan Konsultan IndonesiaLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content text-center">
            <img src="assets/img/sertifikat/2.png" class="img-fluid" alt="">
              <h5 class="mt-3">SERTIFIKAT BADAN USAHA
                JASA KONSTRUKSI</h5>
              <p class="fst-italic">Kami telah legal dan tersertifikasi</p>
          </div>
        </div>
      </div>

    </section><!-- /Skills Section -->



    <!-- Call To Action Section -->
    <section id="call-to-action" class="call-to-action section dark-background">

      <img src="assets/img/cta-bg.jpg" alt="">

      <div class="container">

        <div class="row" data-aos="zoom-in" data-aos-delay="100">
          <div class="col-xl-9 text-center text-xl-start">
            <h3>Call To Action</h3>
            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
          <div class="col-xl-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="#">Call To Action</a>
          </div>
        </div>

      </div>

    </section><!-- /Call To Action Section -->

    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Proyek Kami</h2>
      </div><!-- End Section Title -->

      <div class="container">

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
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
              <img src="assets/img/projects/2.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Perumahan Grand Cimandala Residence</h4>
                <p>Pengujian bangunan gedung untuk perizinan
                  Sertifikat Laik Fungsi.</p>
                <a href="assets/img/projects/2.png" title="Product 1" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
              <img src="assets/img/projects/3.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Royal Tulip Luxury Hotels</h4>
                <p>Pengujian bangunan gedung untuk perizinan
                  Sertifikat Laik Fungsi.</p>
                <a href="assets/img/projects/3.png" title="Branding 1" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <img src="assets/img/projects/4.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>PT Ultra Sakti</h4>
                <p>Penyusunan DED untuk perizinan Industri
                  PT Ultra Sakti Narogong Kab. Bogor.</p>
                <a href="assets/img/projects/4.png" title="App 2" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
              <img src="assets/img/projects/5.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Asimetri Coffe</h4>
                <p>Pengujian bangunan gedung untuk perizinan
                  Sertifikat Laik Fungsi.</p>
                <a href="assets/img/projects/5.png" title="Product 2" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
              <img src="assets/img/projects/6.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Perumahan Cikeas River Side</h4>
                <p>Pengujian bangunan gedung untuk perizinan
                  Sertifikat Laik Fungsi.</p>
                <a href="assets/img/projects/6.png" title="Branding 2" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <img src="assets/img/projects/7.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>COZY CO-LIVING JELAMBAR</h4>
                <p>Pengejaan DED dan Parizinan Mendirikan
                  Banguna</p>
                <a href="assets/img/projects/7.png" title="App 3" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
              <img src="assets/img/projects/8.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Pergudangan Sigma Kartika Gunung Sindur</h4>
                <p>Pengujian bangunan gedung untuk perizinan
                  Sertifikat Laik Fungsi.</p>
                <a href="assets/img/projects/8.png" title="Product 3" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
              <img src="assets/img/projects/9.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>PT Dalya Citramandiri</h4>
                <p>Review DED dan Pembuatan Kajian Arsitektur
                  untuk perencanaan Industri</p>
                <a href="assets/img/projects/9.png" title="Branding 2" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
              <img src="assets/img/projects/10.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>SDIT Kharisma Azzahra Bogor</h4>
                <p>Pengujian Bangunan untuk proses perizinan Sertifikat Laik Fungsi dan Persetujuan Bangunan
                  Gedung</p>
                <a href="assets/img/projects/10.png" title="Branding 2" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
              <img src="assets/img/projects/11.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>PT Electra Mobilitas Indonesia</h4>
                <p>Pengujian bangunan gedung untuk keperluan
                  Sertifikasi Bangunan Gedung</p>
                <a href="assets/img/projects/11.png" title="Branding 2" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

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
            </div><!-- End Portfolio Item -->

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
            </div><!-- End Portfolio Item -->

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
            </div><!-- End Portfolio Item -->

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
            </div><!-- End Portfolio Item -->

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
            </div><!-- End Portfolio Item -->


          </div><!-- End Portfolio Container -->

        </div>

      </div>

    </section><!-- /Portfolio Section -->

    <!-- Team Section -->
    <section id="team" class="team section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Team</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="team-member d-flex align-items-start">
              <div class="pic"><img src="assets/img/team/team-1.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Walter White</h4>
                <span>Chief Executive Officer</span>
                <p>Explicabo voluptatem mollitia et repellat qui dolorum quasi</p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""> <i class="bi bi-linkedin"></i> </a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="team-member d-flex align-items-start">
              <div class="pic"><img src="assets/img/team/team-2.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Sarah Jhonson</h4>
                <span>Product Manager</span>
                <p>Aut maiores voluptates amet et quis praesentium qui senda para</p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""> <i class="bi bi-linkedin"></i> </a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
            <div class="team-member d-flex align-items-start">
              <div class="pic"><img src="assets/img/team/team-3.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>William Anderson</h4>
                <span>CTO</span>
                <p>Quisquam facilis cum velit laborum corrupti fuga rerum quia</p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""> <i class="bi bi-linkedin"></i> </a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
            <div class="team-member d-flex align-items-start">
              <div class="pic"><img src="assets/img/team/team-4.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Amanda Jepson</h4>
                <span>Accountant</span>
                <p>Dolorum tempora officiis odit laborum officiis et et accusamus</p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""> <i class="bi bi-linkedin"></i> </a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->

        </div>

      </div>

    </section><!-- /Team Section -->

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Testimonials</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              }
            }
          </script>
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                <h3>Saul Goodman</h3>
                <h4>Ceo &amp; Founder</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                <h3>Sara Wilsson</h3>
                <h4>Designer</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                <h3>Jena Karlis</h3>
                <h4>Store Owner</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                <h3>Matt Brandon</h3>
                <h4>Freelancer</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                <h3>John Larson</h3>
                <h4>Entrepreneur</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section><!-- /Testimonials Section -->

    <!-- Faq 2 Section -->
    <section id="regulasi" class="faq-2 section light-background">

      <div class="container section-title" data-aos="fade-up">
        <h2>Ruang Lingkup Usaha</h2>
        <p>Dalam menjalankan kegiatan pelayanannya, PT Rinca Cipta Karya mempunyai bidang/ layanan jasa konsultasi
          Konstruksi dan jasa Konsultansi Non Konstruksi, berikut layanan kami :</p>
      </div>

      <div class="container">

        <div class="row justify-content-center">

          <div class="col-lg-10">

            <div class="faq-container">

            <div class="faq-item faq-active">

                <h3> LAYANAN JASA KONSULTANSI KONSTRUKSI</h3>
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
              </div><!-- End Faq item-->

              <div class="faq-item" data-aos="fade-up" data-aos-delay="300">
                <i class="faq-icon bi bi-question-circle"></i>
                <h3>LAYANAN JASA KONSULTANSI KONSTRUKSI</h3>
                <div class="faq-content d-flex">
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
              </div><!-- End Faq item-->

              <div class="faq-item" data-aos="fade-up" data-aos-delay="300">
                <i class="faq-icon bi bi-question-circle"></i>
                <h3>LAYANAN JASA KONSULTANSI PERIZINAN KONSTRUKSI</h3>
                <div class="faq-content d-flex">
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
              </div><!-- End Faq item-->

               <div class="faq-item" data-aos="fade-up" data-aos-delay="300">
                <i class="faq-icon bi bi-question-circle"></i>
                <h3>LAYANAN JASA KONSULTANSI & KONTRAKTOR DESAIN INTERIOR</h3>
                <div class="faq-content d-flex">
                  <p>
                    Interior Design & Contractor Services
                  </p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

               <div class="faq-item" data-aos="fade-up" data-aos-delay="300">
                <i class="faq-icon bi bi-question-circle"></i>
                <h3>LAYANAN PENGEMBANGAN LAHAN, KAWASAN, & PROPERTI</h3>
                <div class="faq-content d-flex">
                  <p>
                    Land, Estate, & Property Development Services
                  </p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item" data-aos="fade-up" data-aos-delay="300">
                <i class="faq-icon bi bi-question-circle"></i>
                <h3>LAYANAN JASA KONSULTANSI PERIZINAN NON-KONSTRUKSI</h3>
                <div class="faq-content d-flex">
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
              </div><!-- End Faq item-->     


            </div>

          </div>

        </div>

      </div>

    </section><!-- /Faq 2 Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Hubungi Kami</h2>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-5">

            <div class="info-wrap">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.726493099638!2d106.78374157441282!3d-6.429172562870289!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69e969ec75ef31%3A0x15233b52721e5447!2sRafika%20village%202!5e0!3m2!1sid!2sid!4v1720713300480!5m2!1sid!2sid" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>

          <div class="col-lg-7">
            <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
              <div class="row">

                <div class="col-md-12">
                  <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                    <i class="bi bi-geo-alt flex-shrink-0"></i>
                    <div>
                      <h3>Alamat</h3>
                      <p>Jl Nangka (Rafika Village 2 No.B8), Kel. Pasir Putih, Kec. Sawangan, Kota Depok</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                    <i class="bi bi-telephone flex-shrink-0"></i>
                    <div>
                      <h3>Telpon</h3>
                      <p>+62856-1652-206</p>
                    </div>
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                    <i class="bi bi-envelope flex-shrink-0"></i>
                    <div>
                      <h3>Email</h3>
                      <p>info@rincakonsultan.com</p>
                    </div>
                  </div>
                </div>

                </div>
            </form>
              </div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>

    </section><!-- /Contact Section -->

  </main>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
