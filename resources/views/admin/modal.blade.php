@foreach ($data as $dt)
@php
    $logs = DB::table('log_documents')->where('id_document', $dt->id)->get();
@endphp
<div class="modal fade" id="exampleModal-{{ $dt->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-12">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">tanggal </th>
                        <th scope="col">status</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($logs as $l)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $l->tanggal }}</td>
                            <td>{{ $l->status }}</td>
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
@endforeach

@foreach ($data as $dt)
@php
    $logs = DB::table('log_documents')->where('id_document', $dt->id)->get();
@endphp
<div class="modal fade" id="exampleModal2-{{ $dt->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-12">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">tanggal </th>
                        <th scope="col">status</th>
                      </tr>
                    </thead>
                    <tbody>
                      {{-- @foreach ($logs as $l)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $l->tanggal }}</td>
                            <td>{{ $l->status }}</td>
                        </tr>
                      @endforeach --}}
                    </tbody>
                  </table>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
@endforeach