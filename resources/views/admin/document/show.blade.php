@extends('layouts.admin')

@section('content')
 <div class="container-fluid">
    <div class="dashboard-heading">
    <h2 class="dashboard-title">Detail Document</h2>
    <p class="dashboard-subtitle">
        Detail document
    </p>
    </div>
    <div class="dashboard-content">
    <div class="row">
        <div class="col-12">
        <div class="row justify-content-end">
            <div class="col-4 d-lg-none">
                <a href="{{ route('documents.index') }}"
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
                            value="{{ $data->tanggal_estimasi ?? \Carbon\Carbon::parse($data->tanggal_estimasi)->locale('id')->translatedFormat('d F Y') }}"
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
                            value="{{ $data->tanggal_selesai ? \Carbon\Carbon::parse($data->tanggal_selesai)->locale('id')->translatedFormat('d F Y') : 'Belum selesai' }}"
                            readonly
                        />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="token">Token</label>
                        <input
                            type="text"
                            class="form-control"
                            id="token"
                            name="token"
                            value="{{ $data->token ?? old('token') }}"
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
                <div class="col-md-6">
                    <div class="form-group">
                    <label for="link">Link</label>
                    @if ($data->link)
                        <a target="_blank" href="{{ $data->link }}">
                            <input
                                type="text"
                                class="form-control"
                                id="link"
                                name="link"
                                value="{{ $data->link ?? old('link') }}"
                                readonly
                            />
                        </a>
                    @else
                        <input
                            type="text"
                            class="form-control"
                            id="link"
                            name="link"
                            value="-"
                            readonly
                        />
                    @endif
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
        <div class="col-4 col-md-4 d-lg-none">
            <form id="delete-form-{{ $data->id }}" action="{{ route('documents.destroy', $data->id) }}" method="post">
            @csrf
            @method('delete')
                <button type="button" onclick="confirmDeletion({{ $data->id }})" class="btn btn-danger btn-block">
                    Hapus
                </button>
            </form>
        </div>
        <div class="col-4 col-md-4 d-lg-none">
            <a href="{{ route('documents.edit', $data->id) }}"
                class="btn btn-warning btn-block"
                >
                    Edit
            </a>
        </div>
        @if($data->status !== 'Selesai')
            <div class="col-4 col-md-4 d-lg-none">
                <a href="#"
                    class="btn btn-success btn-block"
                    onclick="confirmChangeStatus({{ $data->id }})"
                    >
                        Selesai
                </a>
            </div>
        @endif
        <div class="col-4 col-md-4 btn-back">
            <a href="{{ route('documents.index') }}"
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
          title: 'Yakin document sudah selesai?',
          text: "Tanggal selesai akan di update",
          icon: 'success',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Ya, Selesai'
      }).then((result) => {
          if (result.isConfirmed) {
              window.location.href = "{{ route('documents.change-status', '') }}/" + docId;
          }
      });
  }
</script>
@endpush