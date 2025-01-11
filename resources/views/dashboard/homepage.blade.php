@extends('layouts.dashboard')

@push('after-style')
<style>
    /* Global Styles */
    /* * {
        outline: 1px solid rgba(255, 0, 0, 0.5);
    } */
    body {
        font-family: 'Inter', sans-serif;
    }

    .home {
        background-color: #06261A;
    }

    /* Hero Section */
    .hero-section {
        background: url('assets/img/background/home-background-md.png') no-repeat center center;
        background-size: cover;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 90vh;
        color: white;
        text-align: left;
    }

    .hero-content {
        max-width: 700px;
    }

    .hero-section h1 {
        font-size: 48px;
        font-weight: semibold;
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

    .hero-section p {
        font-size: 20px;
        margin-bottom: 14px;
        font-weight: 300;
    }

    /* Client Section */
    .client {
        padding-top: 38px;
        padding-bottom: 70px;
    }

    .client-logo {
        max-width: 150px;
        height: 64px;
        filter: grayscale(100%);
        transition: filter 0.3s ease-in-out;
    }

    .client-logo:hover {
        filter: grayscale(0%);
    }

    /* Main Service Section */
    .main-service {
        position: relative;
    }

    .main-service .title-main-service {
        color: #1F2A37;
        position: relative;
    }

    .image-service {
        width: 100%;
        /* max-width: 800px; */
        height: auto;
    }

    .main-service .card {
        border: 0;
        width: 100%;
        padding: 16px;
    }

    .main-service .img-icon {
        height: 50px;
        width: 50px;
    }

    .my-service {
        position: relative;
        padding: 60px 0;
        background: linear-gradient(
            to bottom,
            #ffffff 0%,
            #ffffff 80%,
            #06261A 80%,
            #06261A 100%
        );
    }

    /* Reason Section */
    #reason .title {
        font-size: 22px;
    }
    #reason .description {
        font-size: 16px;
    }
    
    /* Service Area Section */
    #service-area .menu-list {
        display: flex;
        justify-content: space-between;
        margin: 10px auto;
        padding: 10px 0;
        color: white;
        gap: 20px;
    }
    #service-area .menu-column {
        list-style: none;
        padding: 0;
        margin-right: 10px;
        width: 100%;
    }
    #service-area .menu-column li {
        padding: 8px 0;
        position: relative;
        font-size: 16px;
        font-weight: 300;
    }
    #service-area .menu-column li::after {
        content: "";
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 1px;
        background: repeating-linear-gradient(to right, rgba(255, 255, 255, 0.3), rgba(255, 255, 255, 0.3) 5px, transparent 5px, transparent 10px);
    }

    #service-area .sub-title {
        border-bottom: 2px dashed #1B4A2C;
        font-weight: 300;
        font-size: 14px;
        padding-bottom: 10px;
    }

    /* Testimonial Section */
    .testimonial-card {
        background-color: #1F3B31;
        color: white;
        border-radius: 15px;
        padding: 20px 15px;
        position: relative;
    }

    .user-profile {
        display: flex;
        align-items: center;
        margin-bottom: 20px;
    }

    .profile-image {
        width: 48px;
        height: 48px;
        border-radius: 50%;
        margin-right: 15px;
    }

    .user-name {
        font-size: 14px;
        font-weight: 400;
    }

    .star-rating {
        color: #ffd700;
        font-size: 18px;
    }

    .testimonial-text {
        font-size: 12px;
        line-height: 1.6;
        font-weight: 300;
        margin-bottom: 20px;
    }

    .quote-marks {
        position: absolute;
        right: 15px;
        top: -10px;
        font-size: 40px;
        color: white;
        font-family: "Arial", sans-serif;
        transform: rotate(180deg);
    }
    .testimonial-swiper {
        position: relative;
        padding: 20px 0;
    }
    .navigation-rounded {
        width: 52px;
        height: 52px;
        border: 1px solid white;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        transition: all 0.3s ease;
    }

    .navigation-rounded i {
        margin-top: 12px;
        font-size: 28px;
        color: white;
    }

    .swiper-button-prev {
        position: static !important;
        display: inline-block;
        margin-right: 15px;
    }

    .swiper-button-next {
        position: static !important;
        display: inline-block;
    }

    .swiper-button-prev::after,
    .swiper-button-next::after {
        display: none;
    }


    .num-rounded {
        background-color: #1B4A2C;
        color: white;
        height: 48px;
        width: 48px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 12px;
        flex-shrink: 0;
    }

    /* Icon Rounded */
    .icon-rounded {
        display: inline-flex;
        padding: 4px 12px;
        border-radius: 50px;
        color: #1F5D35;
        align-items: center;
        justify-content: center;
        margin-right: 10px;
        border: 1px solid #1F5D35;
        min-width: 50px;
        white-space: nowrap;
    }

    /* Fullscreen Container */
    .fullscreen-container {
        padding: 0px 16px;
    }

    /* Mobile Version */
    @media (max-width: 768px) {
        /* Hero Section */
        .hero-section {
            background: url('assets/img/background/home-background-sm.png') no-repeat center center;
            background-size: cover;
            display: flex;
            padding: 60px 16px;
            height: 75vh;
        }
        .hero-section .title-background {
            font-size: 14px;
        }

        .hero-section h1 {
            font-size: 36px;
        }

        .hero-section p {
            font-size: 1rem;
        }

        .btn {
            width: 100%;
            margin-bottom: 0;
        }

        /* Main Service Section */
        .main-service .img-icon {
            margin-right: 5px;
        }
    }

    /* Desktop Version */
    @media (min-width: 769px) {
        .hero-content .title-background {
            font-size: 18px;
        }
        .fullscreen-container {
            margin: 0;
            padding: 0;
            width: 100vw;
            height: auto;
            position: relative;
            top: 0;
            left: 0;
        }

        .fullscreen-container .row {
            margin-left: 0;
            margin-right: 0;
        }

        .fullscreen-container .col-12.col-md-6 {
            padding-left: 0;
            max-width: 50vw;
        }

        .image-service {
            width: 100%;
            height: auto;
            display: block;
        }

        .main-service .img-icon {
            margin-right: 20px;
        }
        .image-layout {
            margin-top: -100px;
        }
    }
</style>
@endpush

@section('content')
<div class="home">
    {{-- Hero Section --}}
    <section class="hero-section">
        <div class="container">
            <div class="hero-content">
                <p class="title-background fw-medium">● PT Rinca Cipta Karya</p>
                <h1>
                    Konsultasikan Perencanaan <br class="d-none d-md-block"> &amp; <br class="d-md-none"> Perizinan Proyek<br class="d-md-none"> Anda <br class="d-none d-md-block">Bersama Kami
                </h1>
                <p class="mt-4 mt-md-0">Konsultan Perizinan Bangunan &amp; Perencanaan Arsitektur Berlisensi</p>
                <div class="mt-4 d-grid d-md-flex gap-3">
                    <button class="btn btn-green-custom">
                        <i class="bi bi-whatsapp"></i> Mulai Konsultasi Sekarang
                    </button>
                    <button class="btn btn-outline-custom text-white">
                        <i class="bi bi-search"></i> Lacak Proyek Anda
                    </button>
                </div>
            </div>
        </div>
    </section>

    {{-- Service Section --}}
    <section id="service">
        {{-- Client Section --}}
        <div class="client rounded-top-4 bg-light">
            <div class="container">
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        @foreach([
                            'assets/img/clients/imcp-client.png',
                            'assets/img/clients/alva-client.png',
                            'assets/img/clients/suntak-client.png',
                            'assets/img/clients/sisesa-client.png',
                            'assets/img/clients/rs-juliana-client.png',
                            'assets/img/clients/sandimas-client.png'
                        ] as $client)
                            <div class="swiper-slide text-center">
                                <img src="{{ $client }}" class="client-logo" alt="Client">
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        {{-- Main Service Section --}}
        <div class="main-service bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-5">
                        <div class="icon-rounded">● Layanan Utama</div>
                        <h2 class="fw-semibold mt-2" style="font-size: 32px">Keahlian Profesional Kami</h2>
                    </div>
                    <div class="col-12 col-md-7">
                        <p class="title-main-service" style="font-size: 16px">"Tim profesional kami berlisensi dan berpengalaman dalam perencanaan arsitektur, perizinan, dan desain interior, menawarkan solusi inovatif dan berstandar tinggi untuk mewujudkan visi proyek Anda dengan hasil optimal."</p>
                    </div>
                </div>
            </div>

            <div class="container fullscreen-container">
                <div class="row mt-4 justify-content-center">
                    <div class="col-12 col-md-6 mb-3">
                        <img src="assets/img/background/service-background.png" class="image-service rounded-end-4" alt="Service">
                    </div>
                    <div class="col-12 col-md-6 d-flex align-items-center">
                        <div class="row">
                            @foreach([
                                ['src' => 'assets/img/icons/planning-icon.png', 'title' => 'Perencanaan Tata Ruang, Bangunan, dan Industri'],
                                ['src' => 'assets/img/icons/licenci-icon.png', 'title' => 'Perizinan Bangunan dan Industri'],
                                ['src' => 'assets/img/icons/design-icon.png', 'title' => 'Desain Interior dan Kontraktor']
                            ] as $item)
                                <div class="text-center">
                                    <div class="card d-flex flex-row align-items-center mb-1 w-100">
                                        <img class="img-icon" src="{{ $item['src'] }}" alt="{{ $item['title'] }}">
                                        <div class="title fw-medium" style="text-align: left;">{{ $item['title'] }}</div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- My Service Section --}}
        <div class="my-service bg-light pt-4">
            <div class="container">
                <div class="row text-center">
                    <div class="col-12">
                        <div class="icon-rounded">● Layanan Kami</div>
                        <h3 class="fw-semibold mt-2">Solusi Terpadu Legalitas & Desain Bangunan</h3>
                        <p class="fw-normal mt-1">Memberikan Kemudahan Perizinan dan Desain Bangunan yang Terencana dengan Teliti, Cepat, dan Sesuai Standar</p>
                    </div>
                </div>

                <div class="row mt-2">
                    @foreach([
                        ['src' => 'assets/img/services/planning-service.png', 'title' => 'Perencanaan Tata Ruang', 'description' => 'Dengan keahlian dan pengalaman di bidang perencanaan tata ruang, bangunan, dan industri. Kami memastikan setiap proyek dirancang secara terukur dan berkelanjutan'],
                        ['src' => 'assets/img/services/licenci-service.png', 'title' => 'Perizinan Gedung & Industri', 'description' => 'Kami membantu klien memastikan proyek bangunan dan industri mereka memenuhi semua persyaratan hukum dengan mudah & cepat'],
                        ['src' => 'assets/img/services/design-service.png', 'title' => 'Desain Interior', 'description' => 'Kami memastikan hasil akhir yang berkualitas. Dari konsep hingga pengerjaan, kami hadir untuk memberikan solusi interior yang sesuai dengan kebutuhan dan gaya klien']
                    ] as $item)
                        <div class="col-12 col-md-4 mb-3">
                            <div class="card" style="height: 476px">
                                <img src="{{ $item['src'] }}" class="card-img-top" alt="{{ $item['title'] }}">
                                <div class="card-body">
                                    <h5 class="card-title fw-bolder">{{ $item['title'] }}</h5>
                                    <p class="card-text">{{ $item['description'] }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    {{-- Reason Section --}}
    <section id="reason" class="pt-4">
        <div class="container">
            <div class="row d-flex flex-col align-items-center">
                <div class="col-12 col-md-5">
                    <p class="title-background">● Alasan Memilih Kami</p>
                    <h4 class="mt-1 text-white fw-semibold" style="font-size: 36px">Mengapa PT Rinca Cipta Karya?</h4>
                    <p class="mt-1 text-white fw-light">Komitmen kami terhadap keunggulan menjadikan kami pilihan terbaik untuk konsultasi perizinan dan bangunan</p>
                </div>
                <div class="col-12 col-md-7">
                    @foreach ([
                         ['src' => 'assets/img/reasons/1-reason.png', 'title' => 'Tim Profesional', 'description' => 'Tim berpengalaman kami memastikan semua kebutuhan proyek Anda terpenuhi dengan teliti dan cepat'],
                         ['src' => 'assets/img/reasons/2-reason.png', 'title' => 'Solusi Terbaik', 'description' => 'Kami tidak hanya menawarkan konsultasi; kami memberikan solusi yang disesuaikan dengan kebutuhan unik setiap klien'],
                         ['src' => 'assets/img/reasons/3-reason.png', 'title' => 'Hasil Memuaskan', 'description' => 'Hasil berkualitas dan handal dengan harga yang kompetitif']
                    ] as $index => $item)
                        <div class="row mb-4 {{ $index === 1 ? 'ms-md-5 justify-content-end' : '' }}">
                            <div class="col-9 col-md-5">
                                <img src="{{ $item['src'] }}" alt="{{ $item['title'] }}" class="w-100 mb-4">
                            </div>
                            <div class="col-12 col-md-7 d-flex flex-row align-items-end {{ $index === 1 ? 'text-end text-md-start' : '' }}">
                                <div>
                                    <h4 class="text-white title fw-bold">{{ $item['title'] }}</h4>
                                    <p class="text-white fw-light description">{{ $item['description'] }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    {{-- Service Area Section --}}
    <section id="service-area" class="mt-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-6 text-center">
                    <p class="title-background m-auto">● Bidang Layanan</p>
                    <h3 class="fw-semibold text-white mt-3">Bidang Layanan Kami</h3>
                    <p class="fw-light text-white mt-3">Kami menawarkan berbagai layanan konsultasi yang mencakup bidang konstruksi dan non-konstruksi untuk mendukung kegiatan operasional</p>
                </div>
            </div>

            <div class="row mt-4">
                {{-- Konsultasi Konstruksi --}}
                <div class="col-12 col-md-6">
                    <div class="d-flex flex-row align-items-center">
                        <div class="num-rounded fw-bold me-2">01</div>
                        <h4 class="text-white fw-semibold" style="font-size: 20px">Konsultasi Konstruksi</h4>
                    </div>
                    <div class="menu-list">
                        <div class="d-none d-md-flex w-100">
                            <ul class="menu-column">
                                @foreach (['Arsitektur', 'Sipil', 'Mekanical', 'Elektrikal', 'Tata Lingkungan'] as $item)
                                    <li>{{ $item }}</li>
                                @endforeach
                            </ul>
                            <ul class="menu-column">
                                @foreach (['Jasa Survey', 'Jasa Analisis Engineering', 'Jasa Inspeksi Teknis', 'Jasa Manajemen Proyek', 'Jasa Engineering Terpadu'] as $item)
                                    <li>{{ $item }}</li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="d-block d-md-none w-100">
                            <ul class="menu-column">
                                @foreach (['Arsitektur', 'Sipil', 'Mekanical', 'Elektrikal', 'Tata Lingkungan', 'Jasa Survey', 'Jasa Analisis Engineering', 'Jasa Inspeksi Teknis', 'Jasa Manajemen Proyek', 'Jasa Engineering Terpadu'] as $item)
                                    <li>{{ $item }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 mt-3 mt-md-5">
                    <img src="assets/img/services/1-service-area.png" alt="Konsultasi Konstruksi" class="w-100">
                </div>
                {{-- Konsultasi Perizinan Konstruksi --}}
                <div class="col-md-5 image-layout d-none d-md-block">
                    <img src="assets/img/services/2-service-area.png" alt="Konsultasi Konstruksi" class="w-100">
                </div>
                <div class="col-12 col-md-7 mt-3">
                    <div class="d-flex flex-row align-items-center">
                        <div class="num-rounded fw-bold me-2">02</div>
                        <h4 class="text-white fw-semibold" style="font-size: 20px">Konsultasi Perizinan Konstruksi</h4>
                    </div>
                    <div class="menu-list" >
                        <div class="d-none d-md-flex w-100">
                            <ul class="menu-column">
                                @foreach (['Persetujuan Bangunan Gedung (PBG/IMB)', 'Sertifikat Laik Fungsi (SLF)', 'Dokumen Lingkungan (SPPL/ UKL-UPL/ Amdal)', 'Analisis Dampak Lalu Lintas (Andalalin)', 'SLO Lingkungan (B3/IPAL)'] as $item)
                                    <li>{{ $item }}</li>
                                @endforeach
                            </ul>
                            <ul class="menu-column">
                                @foreach (['Siteplan', 'Keterangan Rencana Kota/ Kabupaten', 'Kesesuaian Kegiatan Pemanfaatan Ruang (KKPR)', 'Surat Izin Pengambilan Air Tanah (SIPA)'] as $item)
                                    <li>{{ $item }}</li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="d-block d-md-none w-100">
                            <ul class="menu-column">
                                @foreach (['Persetujuan Bangunan Gedung (PBG/IMB)', 'Sertifikat Laik Fungsi (SLF)', 'Dokumen Lingkungan (SPPL/ UKL-UPL/ Amdal)', 'Analisis Dampak Lalu Lintas (Andalalin)', 'SLO Lingkungan (B3/IPAL)', 'Siteplan', 'Keterangan Rencana Kota/ Kabupaten', 'Kesesuaian Kegiatan Pemanfaatan Ruang (KKPR)', 'Surat Izin Pengambilan Air Tanah (SIPA)'] as $item)
                                    <li>{{ $item }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 d-md-none">
                    <img src="assets/img/services/2-service-area.png" alt="Konsultasi Konstruksi" class="w-100">
                </div>

                {{-- Konsultasi & Kontraktor Desain Interior --}}
                <div class="col-12 col-md-6 mt-3">
                    <div class="d-flex mt-2 flex-row align-items-center">
                        <div class="num-rounded fw-bold me-2">03</div>
                        <h4 class="text-white fw-semibold" style="font-size: 20px">Konsultasi & Kontraktor Desain Interior</h4>
                    </div>
                    <p class="mt-3 text-white fw-light sub-title">Interior Design & Contractor Services</p>
                    <img src="assets/img/services/3-service-area.png" alt="Konsultasi & Kontraktor Desain Interior" class="w-100">
                </div>
                {{-- Pengembangan Lahan, Kawasan, & Properti --}}
                <div class="col-12 col-md-6 mt-3">
                    <img src="assets/img/services/4-service-area.png" alt="Pengembangan Lahan, Kawasan, & Properti" class="w-100 d-none d-md-block">
                    <div class="d-flex mt-2 flex-row align-items-center">
                        <div class="num-rounded fw-bold me-2">04</div>
                        <h4 class="text-white fw-semibold" style="font-size: 20px">Pengembangan Lahan, Kawasan, & Properti</h4>
                    </div>
                    <p class="mt-3 text-white fw-light sub-title">Land, Estate, & Property Development Services</p>
                    <img src="assets/img/services/4-service-area.png" alt="Konsultasi & Kontraktor Desain Interior" class="w-100 d-md-none">
                </div>
            </div>
        </div>
    </section>

    {{-- Testimonial Section --}}
    <section id="testimonial" class="mt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <p class="title-background m-auto">● Testimoni Klien</p>
                    <h3 class="fw-semibold text-white mt-3">Apa Kata Mereka Tentang Kami?</h3>
                </div>
            </div>
        </div>

        <div class="container mt-5">
            <div class="swiper testimonial-swiper">
                <div class="swiper-wrapper">
                    @foreach ([1,2,3,4,5,6,7,8,9,10] as $item)
                        <div class="swiper-slide">
                            <div class="testimonial-card">
                                <div class="user-profile">
                                    <img src="assets/img/testimonial-avatar.png" alt="Andi S." class="profile-image">
                                    <div>
                                        <div class="user-name">Andi S.</div>
                                        <div class="star-rating">
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bx-star'></i>
                                        </div>
                                    </div>
                                </div>
                                <p class="testimonial-text">
                                    "Saya sangat puas dengan pelayanan yang diberikan oleh tim konsultan ini. Semua proses perizinan bangunan selesai dengan cepat dan tanpa hambatan. Mereka benar-benar memahami setiap detail prosedur, sehingga saya merasa tenang dan tidak perlu khawatir. Terima kasih!"
                                </p>
                                <div class="quote-marks"><i class='bx bxs-quote-alt-right'></i></div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="row mt-5 justify-content-center d-none d-md-block">
                    <div class="col-12 text-center">
                        <div class="swiper-button-prev navigation-rounded me-4">
                            <i class='bx bx-left-arrow-alt'></i>
                        </div>
                        <div class="swiper-button-next navigation-rounded">
                            <i class='bx bx-right-arrow-alt'></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection

@push('after-script')
<script>
    const swiper = new Swiper(".mySwiper", {
        slidesPerView: 2,
        spaceBetween: 30,
        loop: true,
        speed: 3000, 
        autoplay: {
            delay: 0, 
            disableOnInteraction: false,
        },
        allowTouchMove: false,
        breakpoints: {
            768: { slidesPerView: 3 },
            1024: { slidesPerView: 5 }
        }
    });
    document.addEventListener('DOMContentLoaded', function() {
        const testimonialSwiper = new Swiper(".testimonial-swiper", {
            slidesPerView: 1,
            spaceBetween: 30,
            loop: true,
            allowTouchMove: true,
            speed: 3000,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev'
            },
            breakpoints: {
                768: {
                    slidesPerView: 2
                },
                1024: {
                    slidesPerView: 3
                }
            }
        });

        const swiperContainer = document.querySelector('.testimonial-swiper');
        swiperContainer.addEventListener('mouseenter', () => {
            testimonialSwiper.autoplay.stop();
        });
        swiperContainer.addEventListener('mouseleave', () => {
            testimonialSwiper.autoplay.start();
        });
    });

</script>
@endpush