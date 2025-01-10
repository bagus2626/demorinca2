@extends('layouts.dashboard')

@push('after-style')
<style>
    .hero-section {
        background: url('assets/img/background/home-background-md.png') no-repeat center center;
        background-size: cover;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
        color: white;
        text-align: left;
    }
    
    .hero-content {
        max-width: 700px;
        padding: 20px 0px;
    }
    
    .hero-section h1 {
        font-size: 48px;
        font-weight: semibold;
    }
    
    .hero-section .company {
        width: fit-content;
        background: linear-gradient(to right, #20322b, #18412D);
        color: white;
        display: flex;
        align-items: center;
        padding: 6px 12px;
        border-radius: 5px;
        margin-bottom: 0px;
        font-size: 16px;
    }
    
    .hero-section p {
        font-size: 1.25rem;
        margin-bottom: 14px;
        font-weight: 300;
    }
    
    /* .btn-outline-white {
        border: 2px solid white;
        color: white;
    } */
    
    /* Mobile Version */
    @media (max-width: 768px) {
        .hero-section {
            background: url('assets/img/background/home-background-sm.png') no-repeat center center;
            background-size: cover;
            display: flex;
            padding: 60px 16px;
            height: 75vh;
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
    }
</style>
@endpush

@section('content')
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
@endsection