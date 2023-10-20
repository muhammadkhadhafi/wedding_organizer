@extends('layouts.main')
@section('container')
  <h1 class="h3 mb-4 text-gray-800">Jasa Perusahaan</h1>

  @if (session()->has('sukses'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      {{ session('sukses') }}<button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
  @endif

  <div class="card shadow m-0 mb-4">
    <div class="card-header justify-content-between d-flex align-items-center">
      <h6 class="m-0 font-weight-bold text-primary text-uppercase">Jasa Perusahaan</h6>
      <a href="{{ url('/jasaperusahaan/create') }}" class="btn btn-sm btn-primary"><i class="fas fa-plus fa-sm"></i>
        Tambah
        Jasa Perusahaan</a>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
          <thead class="bg-gradient-primary text-light text-uppercase">
            <th width="15px">No</th>
            <th width="80px">Aksi</th>
            <th>Judul</th>
            <th>Lokasi</th>
          </thead>
          <tbody>
            @foreach ($jasaperusahaans as $jasaperusahaan)
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td>
                  <div class="btn-group">
                    <a href="{{ url('/jasaperusahaans' . $jasaperusahaan->id) }}" class="btn btn-sm btn-primary"><i
                        class="fas fa-info"></i></a>
                    <a href="{{ url('/jasaperusahaans' . $jasaperusahaan->id) }}/edit" class="btn btn-sm btn-warning"><i
                        class="fas fa-pencil-alt"></i></a>
                    <form action="{{ url('jasaperusahaan/' . $jasaperusahaan->id) }}" method="post"
                      onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                      @method('delete')
                      @csrf
                      <button type="submit" class="btn btn-sm btn-danger"><i class="far fa-trash-alt"></i></button>
                    </form>
                  </div>
                </td>
                <td>{{ $jasaperusahaan->judul }}</td>
                <td>{{ $jasaperusahaan->lokasi }}</td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection
