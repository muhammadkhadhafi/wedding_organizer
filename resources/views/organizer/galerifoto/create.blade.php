@extends('layouts.main')
@section('container')
  <h1 class="h3 mb-4 text-gray-800">Galeri Foto Kegiatan</h1>

  <div class="card shadow mb-4">
    <div class="card-header d-flex justify-content-between align-items-center">
      <h6 class="m-0 font-weight-bold text-primary text-uppercase">Tambah Foto Kegiatan</h6>
    </div>
    <div class="card-body">
      <form action="{{ url('/galerifoto') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
          <div class="col-lg-12">
            <div class="mb-3">
              <label for="judul" class="form-label">Judul</label>
              <input type="text" class="form-control @error('judul') is-invalid @enderror" id="judul"
                name="judul" autofocus value="{{ old('judul') }}">
              @error('judul')
                <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6">
            <div class="mb-3">
              <label for="foto_kegiatan" class="form-label">Foto Kegiatan</label>
              <input type="file" class="form-control @error('foto_kegiatan') is-invalid @enderror" id="foto_kegiatan"
                name="foto_kegiatan" accept=".jpg, .png">
              @error('foto_kegiatan')
                <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>
          </div>
          <div class="col-lg-6">
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
              <label for="lokasi" class="form-label">Deskripsi</label>
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
