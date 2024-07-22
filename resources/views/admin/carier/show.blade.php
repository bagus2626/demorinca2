@extends('layouts.admin')

@section('content')
 <div class="container-fluid">
    <div class="dashboard-heading">
    <h2 class="dashboard-title">Detail Karir</h2>
    <p class="dashboard-subtitle">
        Detail Karir
    </p>
    </div>
    <div class="dashboard-content">
    <div class="row">
        <div class="col-12">
        <div class="row justify-content-end">
            <div class="col-4 d-lg-none">
                <a href="{{ route('cariers.index') }}"
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
                        <label for="imgInp">Gambar</label>
                        <img id="blah" src="{{ asset('storage/' . $data->image) }}" class="w-100"/>
                    </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Nama</label>
                            <input
                                type="text"
                                class="form-control @error('name') is-invalid @enderror"
                                value="{{ $data->name }}"
                                readonly
                            />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Status</label>
                            <input
                                type="text"
                                class="form-control @error('name') is-invalid @enderror"
                                value="{{ $data->status === 1 ? 'Buka' : 'Tutup' }}"
                                readonly
                            />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                        <label>Keterangan</label>
                        <textarea name="description" class="form-control" readonly>{{ $data->description }}</textarea>
                        </div>
                    </div>
                  
                </div>
            </div>
        </div>
        <div class="row mt-2 justify-content-end">
        <div class="col-4 col-md-4 d-lg-none">
            <form id="delete-form-{{ $data->id }}" action="{{ route('cariers.destroy', $data->id) }}" method="post">
            @csrf
            @method('delete')
                <button type="button" onclick="confirmDeletion({{ $data->id }})" class="btn btn-danger btn-block">
                    Hapus
                </button>
            </form>
        </div>
        <div class="col-4 col-md-4 d-lg-none">
            <a href="{{ route('cariers.edit', $data->id) }}"
                class="btn btn-warning btn-block"
                >
                    Edit
            </a>
        </div>
        <div class="col-4 col-md-4 d-lg-none">
            <a href="#"
                class="btn btn-warning btn-block"
                onclick="confirmChangeStatus({{ $data->id }})"
                >
                   Ubah Status
            </a>
        </div>
        <div class="col-4 col-md-4 btn-back">
            <a href="{{ route('cariers.index') }}"
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
@push('after-script')
<script>
    function confirmDeletion(docId) {
      Swal.fire({
          title: 'Yakin menghapus data?',
          text: "data akan dihapus tidak dapat dikembalikan",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Ya, hapus'
      }).then((result) => {
          if (result.isConfirmed) {
              document.getElementById('delete-form-' + docId).submit();
          }
      })
  }

    function confirmChangeStatus(docId) {
      Swal.fire({
          title: 'Yakin update status karir?',
          text: "Status karir akan berubah",
          icon: 'success',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Ya, Selesai'
      }).then((result) => {
          if (result.isConfirmed) {
              window.location.href = "{{ route('cariers.change-status', '') }}/" + docId;
          }
      });
  }
</script>
@endpush