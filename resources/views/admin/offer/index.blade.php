@extends('layouts.admin')

@section('content')
  <div class="container-fluid">
    <div class="dashboard-heading">
      <h2 class="dashboard-title">Penawaran</h2>
      <p class="dashboard-subtitle">
        List Penawaran
      </p>
    </div>
    <div class="dashboard-content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
             
              <table
                class="table table-borderless table-cart mt-3"
                aria-describedby="Cart"
              >
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Nama Pemohon</th>
                    <th scope="col">Nama Perusahaan</th>
                    <th scope="col">Luas Area</th>
                    <th scope="col">Lokasi</th>
                    <th scope="col">Keterangan</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @forelse ($offers as $offer)
                    <tr>
                      <td style="width: 5%;">{{ $loop->iteration }}</td>
                      <td style="width: 15%;">
                        <div class="product-title">{{ \Carbon\Carbon::parse($offer->tanggal)->locale('id')->translatedFormat('d F Y - H:i') }}</div>
                      </td>
                      <td style="width: 15%;">
                        <div class="product-title">{{ $offer->nama_pemohon }}</div>
                      </td>
                      <td style="width: 15%;">
                        <div class="product-title">{{ $offer->nama_perusahaan }}</div>
                      </td>
                      <td style="width: 15%;">
                        <div class="product-title">{{ $offer->luas_area }}</div>
                      </td>
                      <td style="width: 15%;">
                        <div class="product-title">{{ $offer->lokasi_perusahaan }}</div>
                      </td>
                      <td style="width: 15%;">
                        <div class="product-title">{{ $offer->keterangan ?? '-' }}</div>
                      </td>
                      <td style="width: 15%;">
                        <div class="d-flex">
                            <a href="{{ route('offers.show', $offer->id) }}" class="btn btn-outline-primary ms-2">
                                <i class="bi bi-info-circle"></i>
                            </a>
                        </div>
                      </td>
                    </tr>
                  @empty
                    <tr>
                      <td colspan="6" class="text-center">Tidak ada data penawaran</td>
                    </tr>
                  @endforelse
                  
                </tbody>
              </table>

              {{-- MOBILE VERSION --}}
              <div class="dashboard-mobile d-lg-none d-sm-block">
                @forelse ($offers as $offer)
                  <a
                    class="card card-list d-block"
                    href="{{ route('offers.show', $offer->id) }}"
                  >
                    <div class="card-body">
                      <div class="row">
                        <div class="col-1 card-title">
                          {{ $loop->iteration }}
                        </div>
                        <div class="col-5 card-title">
                          {{ $offer->nama_pemohon }}
                        </div>
                        <div class="col-5 card-title">
                          {{ $offer->nomor_handphone }}
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