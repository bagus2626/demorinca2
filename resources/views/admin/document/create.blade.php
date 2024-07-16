@extends('layouts.admin')

@section('content')
 <div class="container-fluid">
    <div class="dashboard-heading">
    <h2 class="dashboard-title">Tambah Document</h2>
    <p class="dashboard-subtitle">
        Tambahkan document
    </p>
    </div>
    <div class="dashboard-content">
    <div class="row">
        <div class="col-12">
        <form action="{{ route('documents.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                    <div class="form-group">
                        <label for="tanggal">Tanggal Mulai</label>
                        <input
                            type="date"
                            class="form-control @error('tanggal') is-invalid @enderror"
                            id="tanggal"
                            name="tanggal"
                            value="{{ old('tanggal', \Illuminate\Support\Facades\Date::now()->format('Y-m-d')) }}"
                        />
                        @error('tanggal')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="tanggal_estimasi">Estimasi Selesai</label>
                            <input
                                type="date"
                                class="form-control @error('tanggal_estimasi') is-invalid @enderror"
                                id="tanggal_estimasi"
                                name="tanggal_estimasi"
                                value="{{ old('tanggal_estimasi', \Illuminate\Support\Facades\Date::now()->format('Y-m-d')) }}"
                            />
                            @error('tanggal_estimasi')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="no_registrasi_sistem_simbg">No Registrasi Sistem Simbg</label>
                        <input
                            type="text"
                            class="form-control @error('no_registrasi_sistem_simbg') is-invalid @enderror"
                            id="no_registrasi_sistem_simbg"
                            name="no_registrasi_sistem_simbg"
                            placeholder="Masukkan no registrasi sistem simbg"
                            value="{{ old('no_registrasi_sistem_simbg') }}"
                        />
                         @error('no_registrasi_sistem_simbg')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="nama_pemohon">Nama Pemohon</label>
                        <input
                            type="text"
                            class="form-control @error('nama_pemohon') is-invalid @enderror"
                            id="nama_pemohon"
                            name="nama_pemohon"
                            placeholder="Masukkan nama pemohon"
                            value="{{ old('nama_pemohon') }}"
                        />
                        @error('nama_pemohon')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                        <label for="keterangan">Keterangan</label>
                        <textarea class="form-control" name="keterangan" id="keterangan">{{ old('keterangan') }}</textarea>
                        </div>
                    </div>
                
                </div>
            </div>
            </div>
            <div class="row mt-2 justify-content-end">
            <div class="col-sm-6 col-md-4">
                <button
                    type="submit"
                    class="btn btn-success btn-block px-5"
                    >
                        Simpan
                </button>
            </div>
            </div>
        </form>
        </div>
    </div>
    </div>
</div>
@endsection