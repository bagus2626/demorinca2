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
                  @php
                      $log = DB::table('log_documents')->orderBy('id', 'DESC')->where('id_document', $doc->id)->first();
                  @endphp
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
                        <div class="product-title {{ $log->status === 'Selesai' ? 'text-success' : 'text-warning' }}">{{ $log->status }}</div>
                      </td>
                      <td style="width: 15%;">
                        <div class="d-flex">
                          @if($log->status !== 'Selesai')
                            <a href="{{ route('documents.change-status', $doc->id) }}" class="btn btn-outline-success ms-2">
                              <i class="bi bi-check2-circle"></i>
                            </a>
                          @endif
                          <a href="{{ route('documents.edit', $doc->id) }}" class="btn btn-outline-warning me-2">
                              <i class="bi bi-pencil-square"></i>
                          </a>
                          <form action="{{ route('documents.destroy', $doc->id) }}" method="post">
                            @csrf
                            @method('delete')
                              <button type="submit" class="btn btn-outline-danger me-2"><i class="bi bi-trash"></i></button>
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
</script>
@endpush