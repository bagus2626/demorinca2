@extends('layouts.admin')

@section('content')
 <div class="container-fluid">
    <div class="dashboard-heading">
    <h2 class="dashboard-title">Detail Penawaran</h2>
    <p class="dashboard-subtitle">
        Detail Penawaran
    </p>
    </div>
    <div class="dashboard-content">
    <div class="row">
        <div class="col-12">
        <div class="row justify-content-end">
            <div class="col-4 d-lg-none">
                <a href="{{ route('offers.index') }}"
                    class="btn btn-warning btn-block"
                    >
                        Kembali
                </a>
            </div>
        </div>
        <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                <div class="form-group">
                    <label for="tanggal">Tanggal Penawaran</label>
                    <input
                        type="text"
                        class="form-control"
                        id="tanggal"
                        name="tanggal"
                        value="{{ $data->tanggal ? \Carbon\Carbon::parse($data->tanggal)->locale('id')->translatedFormat('d F Y') : \Illuminate\Support\Facades\Date::now()->format('Y-m-d') }}"
                        readonly
                    />
                </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="nama_pemohon">Nama Pemohon</label>
                        <input
                            type="text"
                            class="form-control"
                            id="nama_pemohon"
                            name="nama_pemohon"
                            value="{{ $data->nama_pemohon }}"
                            readonly
                        />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="nama_perusahaan">Nama Perusahaan</label>
                        <input
                            type="text"
                            class="form-control"
                            id="nama_perusahaan"
                            name="nama_perusahaan"
                            value="{{ $data->nama_perusahaan }}"
                            readonly
                        />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="nomor_handphone">Nomor Telepon</label>
                        <input
                            type="text"
                            class="form-control"
                            id="nomor_handphone"
                            name="nomor_handphone"
                            value="{{ $data->nomor_handphone }}"
                            readonly
                        />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input
                            type="text"
                            class="form-control"
                            id="email"
                            name="email"
                            value="{{ $data->email }}"
                            readonly
                        />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                    <label for="luas_area">Luas Area</label>
                    <input
                        type="text"
                        class="form-control"
                        id="luas_area"
                        name="luas_area"
                        value="{{ $data->luas_area }}"
                        readonly
                    />
                    </div>
                </div>
               <div class="col-md-6">
                    <div class="form-group">
                    <label for="lokasi_perusahaan">Lokasi Perusahaan</label>
                    <input
                        type="text"
                        class="form-control"
                        id="lokasi_perusahaan"
                        name="lokasi_perusahaan"
                        value="{{ $data->lokasi_perusahaan }}"
                        readonly
                    />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                    <label for="keterangan">Keterangan</label>
                    <textarea name="keterangan" id="keterangan" class="form-control" readonly>{{ $data->keterangan ?? old('keterangan') }}</textarea>
                    </div>
                </div>
            
            </div>
        </div>
        </div>
        <div class="row mt-2 justify-content-end">
        <div class="col-4 col-md-4 btn-back">
            <a href="{{ route('offers.index') }}"
                class="btn btn-warning btn-block"
                >
                    Kembali
            </a>
        </div>
        </div>
        </div>
    </div>
    </div>
</div>
@endsection