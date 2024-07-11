@extends('layouts.admin')

@section('content')
 <div class="container-fluid">
    <div class="dashboard-heading">
    <h2 class="dashboard-title">Setting</h2>
    <p class="dashboard-subtitle">
        Setting Akun
    </p>
    </div>
    <div class="dashboard-content">
    <div class="row">
        <div class="col-12">
        <form action="{{ route('settings.update') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="card">
            <div class="card-body">
              @if (session()->has('success'))
                <div id="successAlert" class="alert alert-success alert-dismissible fade show mt-2" role="alert">
                  {{ session('success') }}
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
                </div>
              @endif
              @if (session()->has('error'))
                <div id="successAlert" class="alert alert-danger alert-dismissible fade show mt-2" role="alert">
                  {{ session('error') }}
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
                </div>
              @endif
                <div class="row mt-3">
                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="name">Nama</label>
                        <input
                            type="text"
                            class="form-control"
                            id="name"
                            name="name"
                            value="{{ auth()->user()->name }}"
                            required
                        />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="email">Email</label>
                        <input
                            type="email"
                            class="form-control"
                            id="email"
                            name="email"
                            value="{{ auth()->user()->email }}"
                        />
                        </div>
                    </div>
                    <div class="col-md-12 mt-3">
                      <div class="form-group">
                        <label>Ubah Password</label>
                      </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="old_password">Password Lama</label>
                        <input
                            type="password"
                            class="form-control"
                            id="old_password"
                            name="old_password"
                        />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="new_password">Password Baru</label>
                        <input
                            type="password"
                            class="form-control"
                            id="new_password"
                            name="new_password"
                        />
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
                        Ubah
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
    document.addEventListener('DOMContentLoaded', function() {
      var successAlert = document.getElementById('successAlert');
      if (successAlert) {
          setTimeout(function() {
              let alertStatus = new bootstrap.Alert(successAlert);
              alertStatus.close();
          }, 3000);
      }
  });
</script>
@endpush