@extends('layouts.main')
@section('container')
  <h1 class="h3 mb-3">Admin</h1>

  <div class="card shadow mb-4">
    <div class="card-header d-flex justify-content-between align-items-center">
      <h6 class="m-0 font-weight-bold text-primary text-uppercase">Tambah Admin</h6>
    </div>
    <div class="card-body">
      <form action="{{ url('/admin') }}" method="post">
        @csrf
        <div class="row">
          <div class="col-lg-12">
            <div class="mb-3">
              <label for="nama" class="form-label">Nama</label>
              <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama"
                autofocus value="{{ old('nama') }}">
              @error('nama')
                <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>
          </div>
          <div class="col-lg-12">
            <div class="mb-3">
              <label for="username" class="form-label">Username</label>
              <input type="text" class="form-control @error('username') is-invalid @enderror" id="username"
                name="username" value="{{ old('username') }}">
              @error('username')
                <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control @error('password') is-invalid @enderror" id="password"
                name="password">
              @error('password')
                <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <button class="btn btn-primary btn-sm float-end float-right"><i class="far fa-save"></i>
              Simpan</button>
          </div>
        </div>
      </form>
    </div>
  </div>
@endsection
