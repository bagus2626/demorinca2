@extends('layouts.dashboard')

@push('after-style')
    <style>
      .about {
        background-color: #032F1E;
      }
      .hero-section {
          background: url('assets/img/background/about-me-background-md.png') no-repeat center center;
          background-size: cover;
          display: flex;
          align-items: center;
          justify-content: center;
          padding: 140px 0px 80px 0px;
          color: white;
      }
      .title-background {
        background: 
            linear-gradient(to left, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0) 20%), 
            linear-gradient(to right, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0) 20%), 
            url('assets/img/background/title-background.png') no-repeat center center;
        background-size: cover;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 4px 0px;
        color: white;
        text-align: center;
        width: max-content;
    }
    .position {
      color: #1F5D35;
      border-radius: 14px;
      border: 1.5px solid #1F5D35;
      width: 244px;
      height: 30px;
    }
    .badge {
      color: #1F5D35;
      border-radius: 16px;
      border: 1.5px solid #1F5D35;
      width: 70px;
      height: 30px;
    }
    .img-project {
      height: 42px;
      width: 42px;
      border: 1.5px solid #F3F4F6;
      border-radius: 50%;
    }
    .num-visi {
      color: black;
      border: 1.5px solid black;
      border-radius: 50%;
      font-size: 14px;
      font-weight: bold;
      height: 42px;
      width: 42px;
      display: flex;
      align-items: center;
      justify-content: center;
      margin-right: 10px;
      flex-shrink: 0;
    }
    .personal-name {
      font-size: 42px;
    }
    .personal-content {
      padding-left: 50px;
    }
    .visi-padding {
      padding-left: 60px;
    }

    /* Mobile Version */
    @media (max-width: 768px) {
       .personal-name {
        font-size: 36px;
       }
       .position {
        margin-top: 20px;
       }
       .personal-content {
        padding-left: 16px;
      }
      .visi-padding {
        padding-left: 16px;
      }
    }
    </style>
@endpush
@section('content')
<div class="about">
  {{-- Hero Section --}}
  <section class="hero-section">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-7">
                <div class="hero-content">
                  <p class="title-background">● Tentang Kami</p>
                  <h1 class="fw-semibold">
                    Tentang PT Rinca Cipta Karya
                  </h1>
                  <p class="fw-light mt-2">Konsultan Engineering dan Perizinan Terpercaya untuk Solusi Berkelanjutan</p>
                </div>
            </div>
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
                </div>
              </div>
            @endforeach
          </div>
        </div>
        <div class="col-12 d-block d-md-none">
          <img src="assets/img/personal/misi-image.png" alt="Misi" class="w-100">
        </div>
      </div>
    </div>
  </section>
</div>
@endsection
