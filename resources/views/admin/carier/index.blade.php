@extends('layouts.admin')

@section('content')
  <div class="container-fluid">
    <div class="dashboard-heading">
      <h2 class="dashboard-title">Karir</h2>
      <p class="dashboard-subtitle">
        List Karir
      </p>
    </div>
    <div class="dashboard-content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
              <div class="col-8 col-md-3">
                <a
                  href="{{ route('cariers.create') }}"
                  class="btn btn-success mt-4 px-4 btn-block"
                >
                  Tambah
                </a>
              </div>
              @if (session()->has('success'))
                <div id="successAlert" class="alert alert-success alert-dismissible fade show mt-2" role="alert">
                  <strong>Berhasil</strong> {{ session('success') }}
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
                </div>
              @endif
              
              <table
                class="table table-borderless table-cart mt-3"
                aria-describedby="Cart"
              >
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Gambar</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @forelse ($cariers as $carier)
                    <tr>
                      <td style="width: 5%;">
                        {{ $loop->iteration }}
                      </td>
                      <td style="width: 15%;">
                        <div class="product-title">
                          <img src="{{ asset('storage/' . $carier->image) }}" height="70">
                        </div>
                      </td>
                      <td style="width: 15%;">
                        <div class="product-title">{{ $carier->name }}</div>
                      </td>
                      <td style="width: 15%;">
                        <div class="product-title">{{ $carier->description }}</div>
                      </td>
                      <td style="width: 15%;">
                        <div class="product-title {{ $carier->status === 1 ? 'text-success' : 'text-danger' }}">
                          {{ $carier->status === 1 ? 'Buka' : 'Tutup' }}
                        </div>
                      </td>
                      <td style="width: 15%;">
                        <div class="d-flex">
                          <a href="#" onclick="confirmChangeStatus({{ $carier->id }})" class="btn btn-outline-warning ms-2">
                            <i class="bi bi-arrow-left-right"></i>
                          </a>
                          <a href="{{ route('cariers.show', $carier->id) }}" class="btn btn-outline-primary ms-2">
                            <i class="bi bi-info-circle"></i>
                          </a>
                          <a href="{{ route('cariers.edit', $carier->id) }}" class="btn btn-outline-warning me-2">
                              <i class="bi bi-pencil-square"></i>
                          </a>
                          <form id="delete-form-{{ $carier->id }}" action="{{ route('cariers.destroy', $carier->id) }}" method="post">
                            @csrf
                            @method('delete')
                              <button type="button" onclick="confirmDeletion({{ $carier->id }})" class="btn btn-outline-danger me-2"><i class="bi bi-trash"></i></button>
                          </form>
                        </div>
                      </td>
                    </tr>
                  @empty
                    <tr>
                      <td colspan="6" class="text-center">Tidak ada data Karir</td>
                    </tr>
                  @endforelse
                  
                </tbody>
              </table>

              {{-- MOBILE VERSION --}}
              <div class="dashboard-mobile d-lg-none d-sm-block">
                @forelse ($cariers as $carier)
                  <a
                    class="card card-list d-block"
                    href="{{ route('cariers.show', $carier->id) }}"
                  >
                    <div class="card-body">
                      <div class="row">
                        <div class="col-1 card-title">
                          {{ $loop->iteration }}
                        </div>
                        <div class="col-5 card-title">
                          {{ $carier->name }}
                        </div>
                        <div class="col-5 card-title">
                          <div class="{{ $carier->status === 1 ? 'text-success' : 'text-danger' }}">
                            {{ $carier->status === 1 ? 'Buka' : 'Tutup' }}
                          </div>
                        </div>
                      </div>
                    </div>
                  </a>
                @empty
                @endforelse
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@push('after-script')
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      var successAlert = document.getElementById('successAlert');
      if (successAlert) {
          setTimeout(function() {
              var alert = new bootstrap.Alert(successAlert);
              alert.close();
          }, 3000);
      }
  });

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