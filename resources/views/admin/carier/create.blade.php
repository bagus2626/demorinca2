@extends('layouts.admin')

@section('content')
 <div class="container-fluid">
    <div class="dashboard-heading">
    <h2 class="dashboard-title">Tambah Karir</h2>
    <p class="dashboard-subtitle">
        Tambahkan Karir
    </p>
    </div>
    <div class="dashboard-content">
    <div class="row">
        <div class="col-12">
        <form action="{{ route('cariers.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                    <div class="form-group">
                        <label for="imgInp">Gambar</label>
                        <input
                            type="file"
                            class="form-control @error('image') is-invalid @enderror"
                            id="imgInp"
                            accept="image/*"
                            name="image"
                            required
                        />
                        <img id="blah" class="img-fluid"/>
                    </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">Nama</label>
                            <input
                                type="text"
                                class="form-control @error('name') is-invalid @enderror"
                                id="name"
                                name="name"
                                value="{{ old('name') }}"
                                required
                            />
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="status">Status</label>
                        <select name="status" id="status" class="form-control">
                            <option value="true" selected>Buka</option>
                            <option value="false">Tutup</option>
                        </select>
                         @error('status')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="description">Keterangan</label>
                        <textarea name="description" class="form-control">{{ old('description') }}</textarea>
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

@push('after-script')
    <script>
        imgInp.onchange = evt => {
        const [file] = imgInp.files
            if (file) {
                blah.src = URL.createObjectURL(file)
            }
        }
    </script>
@endpush