<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">tanggal pembuatan</th>
                        <th scope="col">token</th>
                        <th scope="col">No registrasi simbp</th>
                        <th scope="col">nama pemohon</th>
                        <th scope="col">status</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($data as $d)
                      @php
                          $enStatus = DB::table('log_documents')->where('id_document', $d->id)->orderBy('id','desc')->first();
                      @endphp
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $d->tanggal }}</td>
                            <td>{{ $d->token }}</td>
                            <td>{{ $d->no_registrasi_sistem_simbg }}</td>
                            <td>{{ $d->nama_pemohon }}</td>
                            <td>{{ $enStatus->status }}</td>
                            <td>
                                <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal-{{ $d->id }}" class="badge bg-primary">Detail</a>
                                <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal2-{{ $d->id }}" class="badge bg-warning">edit</a>
                            </td>
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-6">
                <h1>create</h1>
                <form action="{{ route('documents.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                    <label for="no_registrasi_sistem_simbg" class="form-label">No registrasi simbp</label>
                    <input type="text" class="form-control" id="no_registrasi_sistem_simbg" name="no_registrasi_sistem_simbg">
                    </div>
                    <div class="mb-3">
                        <label for="nama_pemohon" class="form-label">Nama pemohon</label>
                        <input type="text" class="form-control" id="nama_pemohon" name="nama_pemohon">
                    </div>
                    <div class="mb-3">
                        <label for="date_start" class="form-label">Tanggal mulai</label>
                        <input type="date" class="form-control" id="date_start" name="date_start">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
    @include('admin.modal')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>