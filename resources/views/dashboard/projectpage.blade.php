@extends('layouts.dashboard')

@php
    $data_projects = [
        [
            'src' => 'pt-sun-project.png',
            'title' => 'PT Sun Tak Indonesia',
            'description' => 'Pengujian gedung untuk perizinan Sertifikat Laik Fungsi dan PBG Penambahan Bangunan',
        ],
        [
            'src' => 'cindamala-project.png',
            'title' => 'Perumahan Grand Cimandala Residence',
            'description' => 'Pengujian bangunan gedung untuk perizinan Sertifikat Laik Fungsi.',
        ],
        [
            'src' => 'royal-tulip-project.png',
            'title' => 'Royal Tulip Luxury Hotels',
            'description' => 'Pengujian bangunan gedung untuk perizinan Sertifikat Laik Fungsi.',
        ],
        [
            'src' => 'asimetri-project.png',
            'title' => 'Asimetri Coffe',
            'description' => 'Pengujian bangunan gedung untuk perizinan Sertifikat Laik Fungsi.',
        ],
        [
            'src' => 'pt-ultra-project.png',
            'title' => 'PT Ultra Sakti',
            'description' => 'Penyusunan DED untuk perizinan Industri PT Ultra Sakti Narogong Kab. Bogor.',
        ],
        [
            'src' => 'perumahan-cikeas-project.png',
            'title' => 'Perumahan Cikeas River Side',
            'description' => 'Pengujian bangunan gedung untuk perizinan Sertifikat Laik Fungsi.',
        ],
        [
            'src' => 'sigma-project.png',
            'title' => 'Sigma Kartika Green Warehouse',
            'description' => 'Pengujian bangunan gedung untuk perizinan Sertifikat Laik Fungsi.',
        ],
        [
            'src' => 'cozy-project.png',
            'title' => 'Cozy Co-Living Jelambar',
            'description' => 'Pengejaan DED dan Parizinan Mendirikan Banguna',
        ],
        [
            'src' => 'pt-dalya-project.png',
            'title' => 'PT Dalya Citramandiri',
            'description' => 'Review DED dan Pembuatan Kajian Arsitektur untuk perencanaan Industri',
        ],
        [
            'src' => 'pt-sisesa-project.png',
            'title' => 'PT SiSeSa Berkah Illahi',
            'description' => 'Pengujian Bangunan untuk Sertifikat Laik Fungsi dan Persetujuan Bangunan',
        ],
        [
            'src' => 'sdit-kharisma-project.png',
            'title' => 'SDIT Kharisma Azzahra Bogor',
            'description' => 'Pengujian untuk Sertifikat Laik Fungsi dan Persetujuan Bangunan',
        ],
        [
            'src' => 'pt-electra-project.png',
            'title' => 'PT Electra Mobilitas Indonesia',
            'description' => 'Pengujian untuk perizinan Sertifikat Laik Fungsi dan Persetujuan Gedung',
        ],
        [
            'src' => 'al-utsmani-project.png',
            'title' => 'Yayasan Al Ustmani',
            'description' => 'Pengujian untuk Sertifikat Laik Fungsi dan Izin Bangunan',
        ],
        [
            'src' => 'pt-ultra-2-project.png',
            'title' => 'PT Ultra Sakti',
            'description' => 'Review Gambar untuk Izin Bangunan Gedung plant Narogong',
        ],
        [
            'src' => 'smk-muhammadiyah-project.png',
            'title' => 'SMK Muhammadiyah Cariu',
            'description' => 'Pengujian bangunan gedung untuk perizinan Sertifikat Laik Fungsi',
        ],
        [
            'src' => 'puspanita-project.png',
            'title' => 'Puspanita Eco Spirit Center',
            'description' => 'Pengujian bangunan gedung untuk perizinan Sertifikat Laik Fungsi',
        ],
    ];
@endphp

@push('after-style')
<style>
    .project {
        background-color: #032F1E;
    }
    .hero-section {
        background: url('assets/img/background/project-background.png') no-repeat center center;
        background-size: cover;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 120px 0px;
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
    .project-card {
        border: 0px;
        border-radius: 8px;
        height: 432px;
    }
    .project-card h5 {
        font-size: 20px;
    }
    .project-card p {
        font-size: 16px;
    }
    .project-card img {
        border-top-left-radius: 8px;
        border-top-right-radius: 8px;
        height: 311px;
        background-size: cover;
    }
    .truncate-3 {
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    /* Mobile Version */
    @media (max-width: 768px) {
        .hero-content h1 {
            font-size: 36px;
        }
        .hero-content p {
            font-size: 18px;
        }
        .project-card {
            height: 255px;
        }
        .project-card img {
            height: 130px;
        }
        .project-card h5 {
            font-size: 16px;
        }
        .project-card p {
            font-size: 14px;
        }
    }
</style>
@endpush

@section('content')
<div class="project">
    {{-- Hero Section --}}
    <section class="hero-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-8 text-center">
                    <div class="hero-content">
                        <p class="title-background fw-medium m-auto">● Projek Kami</p>
                        <h1 class="mt-3">
                            Mitra Tepercaya dalam Setiap Langkah<br>Proyek Konstruksi Anda
                        </h1>
                        <p class="mt-3 fw-light">"Kami mengubah visi menjadi kenyataan melalui perencanaan arsitektur dan konsultasi perizinan. Tim berlisensi dan berpengalaman, melayani berbagai sektor. Kami memastikan setiap proyek sesuai regulasi dan berkualitas."</p>
                        <button class="btn btn-green-custom">
                            <i class="bi bi-whatsapp"></i> Mulai Konsultasi Sekarang
                        </button>
                    </div>
                </div>
            </div>

            <div class="row mt-5">
                @foreach ($data_projects as $item)
                    <div class="col-6 col-md-4 mb-4">
                        <div class="card project-card">
                            <img src="assets/img/projects/{{ $item['src'] }}" class="card-img-top" alt="{{ $item['title'] }}">
                            <div class="card-body">
                                <h5 class="card-title fw-semibold truncate-2" style="margin-top: -10px">{{ $item['title'] }}</h5>
                                <p class="card-text fw-light truncate-3">{{ $item['description'] }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</div>
@endsection