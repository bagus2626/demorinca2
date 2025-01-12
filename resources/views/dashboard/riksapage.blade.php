@extends('layouts.dashboard')
@push('after-style')
<style>
    .riksa {
        background-color: #032F1E;
    }
    .hero-section {
        background: url('assets/img/background/riksa-background-md.png') no-repeat center center;
        background-size: cover;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 160px 0px 80px 0px;
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
    
    .hero-content h1 {
        font-size: 44px;
    }
    .hero-content p {
        font-size: 18px;
    }
    .input-search {
        width: 100%;
        height: 48px;
        width: 384px;
        box-sizing: border-box;
        border-radius: 12px;
        outline: none;
        color: #1F5D35;
    }
    .input-search::placeholder {
        font-size: 16px;
        color: #D1D5DB;
        font-weight: normal;
    }
    .btn-search {
        background-color: #1F5D35;
        border-radius: 12px;
        height: 48px;
        width: 48px;
        display: flex;
        align-items: center;
        justify-content: center;    
        color: white;
        white-space: nowrap;
        border: 0px;
    }

    .riksa-content {
        background-color: #F3F4F6;
        padding: 36px;
    }
    .result-tracking {
        background-color: white;
        padding: 36px;
        border-radius: 24px;
    }
    .result-content {
        border-top: 2px dotted #E5E7EB;
        /* border-bottom: 2px dashed #E5E7EB; */
        padding: 12px 0px;
    }
    .riksa-card {
        background-color: white;
        padding: 20px;
        border-radius: 12px;
        height: 222px;
    }

    /* Mobile Version */
    @media (max-width: 768px) {
        .hero-content h1 {
            font-size: 36px;
        }
        .hero-content p {
            font-size: 16px;
        }
        .riksa-content {
            padding: 40px 0px 0px 0px;
        }
        .result-tracking {
            padding: 20px;
        }
        .h-250 {
            height: 250px;
        }
        .h-322 {
            height: 322px;
        }
    }
</style>
@endpush

@section('content')
<div class="riksa">
    {{-- Hero Section --}}
    <section class="hero-section">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-7">
                    <div class="hero-content">
                        <p class="title-background">● RIKSA (Rinca Tracking & Simpan Data)</p>
                        <h1 class="fw-semibold">
                            Solusi Cerdas untuk Pelacakan & Penyimpanan Data Anda
                        </h1>
                        <p class="fw-light mt-4">Membantu Anda melacak status dokumen prizinan bangunan dengan presisi dan menyimpan data penting dengan tingkat keamanan tinggi. Kami hadir untuk mempermudah Anda fokus pada pengembangan bangunan tanpa khawatir kehilangan kontrol atas data atau aset Anda.</p>
                        <div class="d-flex">
                            <input type="text" class="form-control input-search me-3" placeholder="Masukkan nomor dokumen (contoh: DC12345)">
                            <button class="btn-search"><i class='bx bx-search'></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Content --}}
    <section id="riksa-content" class="riksa-content rounded-top-4" style="min-height: 100vh">
        <div class="container">
            {{-- Result Tracking --}}
            <div class="result-tracking w-100">
                <div class="container-fluid">
                    <div class="row justify-content-between">
                        <div class="col-12 text-center mb-4">
                            <p class="fw-medium" style="font-size: 16px; color: #111928;">“Hasil Pelacakan Dokumen Bangunan”</p>
                        </div>
                        <div class="col-12 col-md-5 result-content">
                            <p class="fw-medium" style="color: #374151;font-size:14px">Nomor Dokumen</p>
                            <h5 class="fw-medium" style="font-size: 16px;margin-top: -10px">DC12345</h5>
                        </div>
                        <div class="col-12 col-md-6 result-content">
                            <p class="fw-medium" style="color: #374151;font-size:14px">Tahapan Saat Ini</p>
                            <h5 class="fw-medium" style="font-size: 16px;margin-top: -10px">Proses Akhir</h5>
                        </div>
                        <div class="col-12 col-md-5 result-content">
                            <p class="fw-medium" style="color: #374151;font-size:14px">Status Pengajuan</p>
                            <h5 class="fw-medium" style="font-size: 16px;margin-top: -10px">
                                <span class="badge" style="background-color: #DEF7EC; color: #03543F">Disetujui</span>
                            </h5>
                        </div>
                        <div class="col-12 col-md-6 result-content">
                            <p class="fw-medium" style="color: #374151;font-size:14px">Tanggal Pengajuan</p>
                            <h5 class="fw-medium" style="font-size: 16px;margin-top: -10px">01 November 2024</h5>
                        </div>
                        <div class="col-12 col-md-5 result-content" style="border-bottom: 2px dashed #E5E7EB;">
                            <p class="fw-medium" style="color: #374151;font-size:14px">Persetujuan Akhir</p>
                            <p class="fw-medium" style="font-size: 16px;margin-top: -10px">Disetujui pada tanggal 07 November 2024</p>
                        </div>
                        <div class="col-12 mt-4">
                            <button class="btn d-flex text-white align-items-center justify-content-center m-auto" style="background-color: #1F5D35;border-radius:12px; height: 44px; width: 216px">
                                <i class='bx bxs-download me-3'></i> Download Dokumen
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Featred --}}
            <div class="featured mt-5">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="icon-rounded">● Unggulan</div>
                            <h2 class="fw-semibold mt-2" style="font-size: 32px">Fitur yang Dirancang untuk Kemudahan Anda</h2>
                        </div>
                    </div>

                    <div class="row mt-4">
                        @foreach ([
                            ['src' => 'realtime-riksa.png', 'title' => 'Pelacakan Real-Time', 'description' => 'Pantau aset bisnis kapan saja dan di mana saja'],
                            ['src' => 'database-riksa.png', 'title' => 'Penyimpanan Data Aman', 'description' => 'Keamanan tingkat tinggi untuk melindungi data Anda dari ancaman.'],
                            ['src' => 'telp-riksa.png', 'title' => 'Dukungan Pelanggan 24/7', 'description' => 'Tim profesional kami selalu siap membantu Anda kapan saja, memastikan pengalaman Anda tetap mulus tanpa hambatan'],
                            ['src' => 'cloud-riksa.png', 'title' => 'Berbasis Cloud', 'description' => 'Akses data Anda kapan saja, di mana saja, tanpa memerlukan server fisik yang mahal dan sulit dikelola'],
                        ] as $index => $item)
                            <div class="col-6 col-md-3 mb-3">
                                <div class="riksa-card {{ $index <= 1 ? 'h-250' : 'h-322' }}">
                                    <img src="assets/img/riksa/{{ $item['src'] }}" alt="" style="width: 52px; height: 52px">
                                    <h6 class="fw-bold mt-3" style="font-size: 16px">{{ $item['title'] }}</h6>
                                    <p class="" style="font-size: 14px">{{ $item['description'] }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection