@extends('layouts.main')
@section('container')
  <h1 class="h3 mb-4 text-gray-800">Admin</h1>

  @if (session()->has('sukses'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      {{ session('sukses') }}<button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
  @endif
  <div class="card shadow m-0 mb-4">
    <div class="card-header justify-content-between d-flex align-items-center">
      <h6 class="m-0 font-weight-bold text-primary text-uppercase">Admin</h6>
      <a href="{{ url('/admin/create') }}" class="btn btn-sm btn-primary"><i class="fas fa-plus fa-sm"></i> Tambah
        Admin</a>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
          <thead class="bg-gradient-primary text-light text-uppercase">
            <th width="15px">No</th>
            <th width="80px">Aksi</th>
            <th>Nama</th>
            <th>Username</th>
          </thead>
          <tbody>
            @foreach ($admins as $admin)
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td>
                  <div class="btn-group">
                    <form action="{{ url('admin/' . $admin->id) }}" method="post"
                      onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                      @method('delete')
                      @csrf
                      <button type="submit" class="btn btn-sm btn-danger"><i class="far fa-trash-alt"></i> Hapus</button>
                    </form>
                  </div>
                </td>
                <td>{{ $admin->nama }}</td>
                <td>{{ $admin->username }}</td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection
