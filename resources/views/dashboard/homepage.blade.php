@extends('layouts.dashboard')

@push('after-style')
<style>
    /* Global Styles */
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

    .hero-section .company {
        background: url('assets/img/background/title-background.png') no-repeat center center;
        background-size: cover;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        text-align: center;
        width: 249px;
    }

    .hero-section p {
        font-size: 1.25rem;
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
        max-width: 746px;
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

        .hero-section .company {
            width: 200px;
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
    }
</style>
@endpush

@section('content')
<div class="home">
    {{-- Hero Section --}}
    <section class="hero-section">
        <div class="container">
            <div class="hero-content">
                <p class="company">● PT Rinca Cipta Karya</p>
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
                        <h2 class="fs-3 fw-semibold mt-2">Keahlian Profesional Kami</h2>
                    </div>
                    <div class="col-12 col-md-7">
                        <p class="title-main-service">"Tim profesional kami berlisensi dan berpengalaman dalam perencanaan arsitektur, perizinan, dan desain interior, menawarkan solusi inovatif dan berstandar tinggi untuk mewujudkan visi proyek Anda dengan hasil optimal."</p>
                    </div>
                </div>
            </div>

            <div class="fullscreen-container">
                <div class="row mt-4">
                    <div class="col-12 col-md-6 mb-3">
                        <img src="assets/img/background/service-background.png" class="image-service rounded-end-4" alt="Service">
                    </div>
                    <div class="col-12 col-md-6 d-flex align-items-center">
                        <div class="container">
                            <div class="row">
                                @foreach([
                                    ['src' => 'assets/img/icons/planning-icon.png', 'title' => 'Perencanaan Tata Ruang, Bangunan, dan Industri'],
                                    ['src' => 'assets/img/icons/licenci-icon.png', 'title' => 'Perizinan Bangunan dan Industri'],
                                    ['src' => 'assets/img/icons/design-icon.png', 'title' => 'Desain Interior dan Kontraktor']
                                ] as $item)
                                    <div class="col-12 col-md-11 text-center">
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
</script>
@endpush