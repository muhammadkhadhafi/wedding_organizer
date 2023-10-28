@extends('layouts.main')
@section('container')
  <h1 class="h3 mb-4 text-gray-800">Daftar Klien</h1>

  @if (session()->has('sukses'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      {{ session('sukses') }}<button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
  @endif

  <div class="card shadow m-0 mb-4">
    <div class="card-header justify-content-between d-flex align-items-center">
      <h6 class="m-0 font-weight-bold text-primary text-uppercase">Daftar Klien</h6>
      <a href="{{ url('/daftarklien/create') }}" class="btn btn-sm btn-primary"><i class="fas fa-plus fa-sm"></i>
        Tambah
        Klien</a>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
          <thead class="bg-gradient-primary text-light text-uppercase">
            <th width="15px">No</th>
            <th width="80px">Aksi</th>
            <th width="500px">Nama</th>
            <th>Foto Klien</th>
          </thead>
          <tbody>
            @foreach ($daftarklien as $klien)
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td>
                  <div class="btn-group">
                    <a href="{{ url('/daftarklien/' . $klien->id) }}" class="btn btn-sm btn-primary"><i
                        class="fas fa-info"></i></a>
                    <a href="{{ url('/daftarklien/' . $klien->id) }}/edit" class="btn btn-sm btn-warning"><i
                        class="fas fa-pencil-alt"></i></a>
                    <form action="{{ url('daftarklien/' . $klien->id) }}" method="post"
                      onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                      @method('delete')
                      @csrf
                      <button type="submit" class="btn btn-sm btn-danger"><i class="far fa-trash-alt"></i></button>
                    </form>
                  </div>
                </td>
                <td>{{ $klien->nama }}</td>
                <td>
                  <img src="{{ asset('storage/' . $klien->foto_klien) }}" class="img-fluid" style="width: 70px"
                    alt="{{ $klien->nama }}">
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection
