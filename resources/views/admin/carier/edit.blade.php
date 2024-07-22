@extends('layouts.admin')

@section('content')
 <div class="container-fluid">
    <div class="dashboard-heading">
    <h2 class="dashboard-title">Edit Karir</h2>
    <p class="dashboard-subtitle">
        Mengubah Karir
    </p>
    </div>
    <div class="dashboard-content">
    <div class="row">
        <div class="col-12">
        <form action="{{ route('cariers.update',  $data->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
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
                        />
                        <img id="blah" src="{{ asset('storage/' . $data->image) }}" class="w-100"/>
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
                                value="{{ old('name', $data->name) }}"
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
                            <option value="true" {{ $data->status === 1 ?? 'selected' }}>Buka</option>
                            <option value="false" {{ $data->status === 0 ?? 'selected' }}>Tutup</option>
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
                        <textarea name="description" class="form-control">{{ $data->description ?? old('description') }}</textarea>
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
                        Edit
                </button>
            </div>
            </div>
        </form>
        </div>
    </div>
    </div>
</div>
@endsection