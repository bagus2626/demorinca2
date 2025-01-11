@extends('layouts.dashboard')

@push('after-style')
<style>
    .home {
        background-color: #06261A;
    }
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

    /* service */
    .client {
        padding-top: 38px;
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
    
    /* Mobile Version */
    @media (max-width: 768px) {
        /* hero */
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
            margin-bottom: 0px;
        }
        /* service */
        /* client */
        .client {
            padding-top: 30px;
        }
    }
</style>
@endpush

@section('content')
<div class="home">
    {{-- Hero --}}
    <section class="hero-section">
        <div class="container">
            <div class="hero-content">
                <p class="company">
                    ● PT Rinca Cipta Karya
                </p>
                <h1>
                    Konsultasikan Perencanaan <br class="d-none d-md-block"> &amp; <br class="d-md-none"> Perizinan Proyek<br class="d-md-none"> Anda <br class="d-none d-md-block">Bersama Kami
                </h1>
                <p class="mt-4 mt-md-0">
                    Konsultan Perizinan Bangunan &amp; Perencanaan Arsitektur Berlisensi
                </p>
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
    {{-- End Hero --}}

    {{-- Service --}}
    <section id="service">
        {{-- Client --}}
        <div class="client rounded-top-4 bg-light">
            <div class="container">
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        @php
                            $clients = [
                                'assets/img/clients/imcp-client.png',
                                'assets/img/clients/alva-client.png',
                                'assets/img/clients/suntak-client.png',
                                'assets/img/clients/sisesa-client.png',
                                'assets/img/clients/rs-juliana-client.png',
                                'assets/img/clients/sandimas-client.png',
                            ];
                        @endphp
                        <!-- Logo Client -->
                        @foreach($clients as $client)
                            <div class="swiper-slide text-center">
                                <img src="{{ $client }}" class="client-logo" alt="Client 1">
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        {{-- End Client --}}
    </section>
    {{-- End Service --}}
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