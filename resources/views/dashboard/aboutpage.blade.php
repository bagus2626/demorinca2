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

 <section id="perencanaan" class="section why-us light-background" data-builder="section">
      <div class="container-fluid">
        <div class="row gy-4">
          <div class="col-lg-7 d-flex flex-column justify-content-center order-2 order-lg-1">
            <div class="content px-xl-5" data-aos="fade-up" data-aos-delay="100">
              <h3><strong>01. Perencanaan Tata Ruang, Bangunan, dan Industri</strong></h3>
              <p>
                PT Rinca Cipta Karya menawarkan layanan perencanaan untuk tata ruang, bangunan, dan industri. Layanan ini meliputi:
              </p>
            </div>
            <div class="faq-container px-xl-5" data-aos="fade-up" data-aos-delay="200">
              <div class="faq-item">
                <h3>Perencanaan Tata Ruang</h3>
                <div class="faq-content">
                  <p>Melakukan analisis dan perencanaan tata ruang yang mencakup aspek lingkungan, sosial, dan ekonomi untuk memastikan pembangunan yang berkelanjutan dan terintegrasi.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div>
              <div class="faq-item">
                <h3>Perencanaan Bangunan</h3>
                <div class="faq-content">
                  <p>Membuat rencana arsitektural dan struktur bangunan yang sesuai dengan kebutuhan dan regulasi yang berlaku.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div>
              <div class="faq-item">
                <h3>Perencanaan Industri:</h3>
                <div class="faq-content">
                  <p>Merancang tata letak dan struktur industri untuk efisiensi operasional dan kepatuhan terhadap standar keamanan dan lingkungan.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div>
            </div>
          </div>
          <div class="col-lg-5 order-1 order-lg-2 why-us-img">
            <img src="assets/img/why-us.png" class="img-fluid" alt="" data-aos="zoom-in" data-aos-delay="100">
          </div>
        </div>
      </div>
    </section>

    <section id="perizinan" class="section why-us light-background" data-builder="section">
      <div class="container-fluid">
        <div class="row gy-4">
           <div class="col-lg-5 order-1 order-lg-1">
            <img src="assets/img/skills.png" class="img-fluid" alt="" data-aos="zoom-in" data-aos-delay="100">
          </div>
          <div class="col-lg-7 d-flex flex-column justify-content-center order-2 order-lg-2">
            <div class="content px-xl-5" data-aos="fade-up" data-aos-delay="100">
              <h3><strong>02. Perizinan Bangunan Gedung dan Industri</strong></h3>
              <p>
                PT Rinca Cipta Karya membantu klien dalam mendapatkan berbagai jenis izin yang diperlukan untuk pembangunan gedung dan operasional industri. Layanan ini mencakup:
              </p>
            </div>
            <div class="faq-container px-xl-5" data-aos="fade-up" data-aos-delay="200">
              <div class="faq-item">
                <h3>Izin Mendirikan Bangunan (IMB)</h3>
                <div class="faq-content">
                  <p>Proses mendapatkan izin untuk mendirikan bangunan baru atau melakukan perubahan pada bangunan yang ada.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div>
              <div class="faq-item">
                <h3>Sertifikat Laik Fungsi (SLF)</h3>
                <div class="faq-content">
                  <p>Sertifikasi yang menyatakan bahwa bangunan telah memenuhi persyaratan teknis dan laik digunakan.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div>
              <div class="faq-item">
                <h3>Izin Lingkungan</h3>
                <div class="faq-content">
                  <p>Mendapatkan izin yang diperlukan untuk memastikan bahwa proyek pembangunan atau industri tidak merusak lingkungan sekitar.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div>
              <div class="faq-item">
                <h3>Izin Operasional Industri</h3>
                <div class="faq-content">
                  <p>Mengurus semua dokumen yang diperlukan untuk memulai dan menjalankan operasi industri sesuai dengan peraturan yang berlaku.</p>
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
            <div class="content px-xl-5" data-aos="fade-up" data-aos-delay="100">
              <h3><strong>03. Desain Interior</strong></h3>
              <p>
                Layanan desain interior oleh PT Rinca Cipta Karya meliputi:
              </p>
            </div>
            <div class="faq-container px-xl-5" data-aos="fade-up" data-aos-delay="200">
              <div class="faq-item">
                <h3>Desain Konsep</h3>
                <div class="faq-content">
                  <p>Merancang konsep desain interior yang sesuai dengan keinginan klien dan fungsi ruang.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div>
              <div class="faq-item">
                <h3>Pemilihan Material</h3>
                <div class="faq-content">
                  <p>Membantu dalam pemilihan material yang berkualitas dan sesuai dengan tema desain.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div>
              <div class="faq-item">
                <h3>Pengawasan Pelaksanaan</h3>
                <div class="faq-content">
                  <p>Memastikan bahwa proses pelaksanaan desain interior berjalan sesuai dengan rencana dan spesifikasi yang telah disepakati.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div>
              <div class="faq-item">
                <h3>Furnishing</h3>
                <div class="faq-content">
                  <p>Menyediakan pilihan furnitur dan dekorasi yang melengkapi desain interior dan memberikan kenyamanan serta estetika yang diinginkan.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div>
            </div>
          </div>
           <div class="col-lg-5 order-1 order-lg-2 why-us-img">
            <img src="assets/img/hero-img.png" class="img-fluid" alt="" data-aos="zoom-in" data-aos-delay="100">
          </div>
        </div>
      </div>
    </section>

     <section id="non_kontruksi" class="section why-us light-background" data-builder="section">
      <div class="container-fluid">
        <div class="row gy-4">
           <div class="col-lg-5 order-1 order-lg-1">
            <img src="assets/img/consultation.jpg" class="img-fluid" alt="" data-aos="zoom-in" data-aos-delay="100">
          </div>
          <div class="col-lg-7 d-flex flex-column justify-content-center order-2 order-lg-2">
            <div class="content px-xl-5" data-aos="fade-up" data-aos-delay="100">
              <h3><strong>04. Non-Konstruksi</strong></h3>
              <p>
                Layanan non-konstruksi yang disediakan PT Rinca Cipta Karya meliputi berbagai jasa konsultasi dan pengurusan dokumen, termasuk:
              </p>
            </div>
            <div class="faq-container px-xl-5" data-aos="fade-up" data-aos-delay="200">
              <div class="faq-item">
                <h3>Konsultasi Pajak</h3>
                <div class="faq-content">
                  <p>Menyediakan layanan konsultasi dan pengurusan pajak untuk membantu klien mematuhi peraturan perpajakan dan mengoptimalkan kewajiban pajak mereka.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div>
              <div class="faq-item">
                <h3>Konsultasi Bisnis</h3>
                <div class="faq-content">
                  <p>Memberikan saran dan strategi bisnis untuk membantu klien dalam pengambilan keputusan yang tepat dan meningkatkan kinerja bisnis mereka.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div>
              <div class="faq-item">
                <h3>Pengurusan Dokumen Legalitas</h3>
                <div class="faq-content">
                  <p>Membantu dalam pengurusan berbagai dokumen legalitas yang diperlukan untuk operasional bisnis, seperti akta pendirian, izin usaha, dan sertifikasi lainnya.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div>
              <div class="faq-item">
                <h3>Sertifikasi ISO</h3>
                <div class="faq-content">
                  <p>Membantu klien dalam mendapatkan berbagai sertifikasi ISO yang penting untuk standardisasi dan peningkatan kualitas operasional bisnis.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

@endsection
