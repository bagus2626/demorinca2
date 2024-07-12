@extends('layouts.admin')

@section('content')
 <div class="container-fluid">
    <div class="dashboard-heading">
    <h2 class="dashboard-title">Edit Document</h2>
    <p class="dashboard-subtitle">
        Mengubah document
    </p>
    </div>
    <div class="dashboard-content">
    <div class="row">
        <div class="col-12">
        <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                <div class="form-group">
                    <label for="tanggal">Tanggal Mulai</label>
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
                        <label for="tanggal_estimasi">Estimasi Selesai</label>
                        <input
                            type="text"
                            class="form-control"
                            id="tanggal_estimasi"
                            name="tanggal_estimasi"
                            value="{{ $data->tanggal_estimasi ? \Carbon\Carbon::parse($data->tanggal_estimasi)->locale('id')->translatedFormat('d F Y') : \Illuminate\Support\Facades\Date::now()->format('Y-m-d') }}"
                            readonly
                        />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="tanggal_estimasi">Tanggal Selesai</label>
                        <input
                            type="text"
                            class="form-control"
                            id="tanggal_selesai"
                            name="tanggal_selesai"
                            value="{{ $data->tanggal_selesai ? \Carbon\Carbon::parse($data->tanggal_selesai)->locale('id')->translatedFormat('d F Y') : \Illuminate\Support\Facades\Date::now()->format('Y-m-d') }}"
                            readonly
                        />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="no_registrasi_sistem_simbg">No Registrasi Sistem Simbg</label>
                        <input
                            type="text"
                            class="form-control"
                            id="no_registrasi_sistem_simbg"
                            name="no_registrasi_sistem_simbg"
                            placeholder="Masukkan no registrasi sistem simbg"
                            value="{{ $data->no_registrasi_sistem_simbg ?? old('no_registrasi_sistem_simbg') }}"
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
                        placeholder="Masukkan nama pemohon"
                        value="{{ $data->nama_pemohon ?? old('nama_pemohon') }}"
                        readonly
                    />
                    </div>
                </div>
            
            </div>
        </div>
        </div>
        <div class="row mt-2 justify-content-end">
        <div class="col-sm-6 col-md-4">
            <a href="{{ route('documents.index') }}"
                class="btn btn-warning btn-block px-5"
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