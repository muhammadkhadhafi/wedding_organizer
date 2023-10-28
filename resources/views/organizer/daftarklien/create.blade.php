@extends('layouts.main')
@section('container')
  <h1 class="h3 mb-4 text-gray-800">Daftar Klien</h1>

  <div class="card shadow mb-4">
    <div class="card-header d-flex justify-content-between align-items-center">
      <h6 class="m-0 font-weight-bold text-primary text-uppercase">Tambah Daftar Klien</h6>
    </div>
    <div class="card-body">
      <form action="{{ url('/daftarklien') }}" method="post" enctype="multipart/form-data">
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
        </div>
        <div class="row">
          <div class="col-lg-4">
            <div class="mb-3">
              <label for="foto_klien" class="form-label">Foto Klien</label>
              <input type="file" class="form-control @error('foto_klien') is-invalid @enderror" id="foto_klien"
                name="foto_klien" accept=".jpg, .png">
              @error('foto_klien')
                <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>
          </div>
          <div class="col-lg-4">
            <div class="mb-3">
              <label for="foto_kegiatan" class="form-label">Foto Kegiatan</label>
              <input type="file" class="form-control @error('foto_kegiatan') is-invalid @enderror" id="foto_kegiatan"
                name="foto_kegiatan" accept=".jpg, .png">
              @error('foto_kegiatan')
                <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>
          </div>
          <div class="col-lg-4">
            <div class="mb-3">
              <label for="tanggal_kegiatan" class="form-label">Tanggal Kegiatan</label>
              <input type="date" class="form-control @error('tanggal_kegiatan') is-invalid @enderror"
                id="tanggal_kegiatan" name="tanggal_kegiatan" value="{{ old('tanggal_kegiatan') }}">
              @error('tanggal_kegiatan')
                <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="mb-3">
              <label for="deskripsi" class="form-label">Deskripsi</label>
              <textarea name="deskripsi" id="deskripsi" cols="30" rows="10"
                class="form-control @error('deskripsi') is-invalid @enderror">{{ old('deskripsi') }}</textarea>
              @error('deskripsi')
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
