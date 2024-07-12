@extends('layouts.admin')

@section('content')
  <div class="container-fluid">
    <div class="dashboard-heading">
      <h2 class="dashboard-title">Documents</h2>
      <p class="dashboard-subtitle">
        List Documents
      </p>
    </div>
    <div class="dashboard-content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
              <div class="col-8 col-md-3">
                <a
                  href="{{ route('documents.create') }}"
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
                    <th scope="col">Token</th>
                    <th scope="col">No sistem simbg</th>
                    <th scope="col">Pemohon</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @forelse ($documents as $doc)
                    <tr>
                      <td style="width: 5%;">{{ $loop->iteration }}</td>
                      <td style="width: 15%;">
                        <div class="product-title">{{ $doc->token }}</div>
                      </td>
                      <td style="width: 15%;">
                        <div class="product-title">{{ $doc->no_registrasi_sistem_simbg }}</div>
                      </td>
                      <td style="width: 15%;">
                        <div class="product-title">{{ $doc->nama_pemohon }}</div>
                      </td>
                      <td style="width: 15%;">
                        <div class="product-title {{ $doc->status === 'Selesai' ? 'text-success' : 'text-warning' }}">{{ $doc->status }}</div>
                      </td>
                      <td style="width: 15%;">
                        <div class="d-flex">
                          @if($doc->status === 'Selesai')
                            <a href="{{ route('documents.show', $doc->id) }}" class="btn btn-outline-primary ms-2">
                              <i class="bi bi-info-circle"></i>
                            </a>
                          @else
                            <a href="#" onclick="confirmChangeStatus({{ $doc->id }})" class="btn btn-outline-success ms-2">
                              <i class="bi bi-check2-circle"></i>
                            </a>
                          @endif
                          <a href="{{ route('documents.edit', $doc->id) }}" class="btn btn-outline-warning me-2">
                              <i class="bi bi-pencil-square"></i>
                          </a>
                          <form id="delete-form-{{ $doc->id }}" action="{{ route('documents.destroy', $doc->id) }}" method="post">
                            @csrf
                            @method('delete')
                              <button type="button" onclick="confirmDeletion({{ $doc->id }})" class="btn btn-outline-danger me-2"><i class="bi bi-trash"></i></button>
                          </form>
                        </div>
                      </td>
                    </tr>
                  @empty
                    <tr>
                      <td colspan="6" class="text-center">Tidak ada data document</td>
                    </tr>
                  @endforelse
                  
                </tbody>
              </table>

              {{-- MOBILE VERSION --}}
              <div class="dashboard-mobile d-lg-none d-sm-block">
                @forelse ($documents as $doc)
                  <a
                    class="card card-list d-block"
                    href="{{ route('documents.show', $doc->id) }}"
                  >
                    <div class="card-body">
                      <div class="row">
                        <div class="col-1 card-title">
                          {{ $loop->iteration }}
                        </div>
                        <div class="col-5 card-title">
                          {{ $doc->token }}
                        </div>
                        <div class="col-5 card-title">
                          <div class="{{ $doc->status === 'Selesai' ? 'text-success' : 'text-warning' }}">{{ $doc->status }}</div>
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