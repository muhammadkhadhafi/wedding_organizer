@extends('layouts.main')
@section('container')
  <h1 class="h3 mb-4 text-gray-800">Jasa Perusahaan</h1>

  <div class="card shadow mb-4">
    <div class="card-header d-flex justify-content-between align-items-center">
      <h6 class="m-0 font-weight-bold text-primary text-uppercase">Tambah Jasa Perusahaan</h6>
    </div>
    <div class="card-body">
      <form action="{{ url('/jasaperusahaan') }}" method="post" enctype="multipart/form-data">
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
          <div class="col-lg-12">
            <div class="mb-3">
              <label for="harga" class="form-label">Harga</label>
              <input type="text" class="form-control @error('harga') is-invalid @enderror" id="harga"
                name="harga" value="{{ old('harga') }}">
              @error('harga')
                <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="mb-3">
              <label for="kapasitas" class="form-label">Kapasitas</label>
              <input type="kapasitas" class="form-control @error('kapasitas') is-invalid @enderror" id="kapasitas"
                name="kapasitas">
              @error('kapasitas')
                <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="mb-3">
              <label for="gambar" class="form-label">Gambar</label>
              <input type="gambar" class="form-control @error('gambar') is-invalid @enderror" id="gambar"
                name="gambar">
              @error('gambar')
                <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="mb-3">
              <label for="lokasi" class="form-label">Lokasi</label>
              <input type="lokasi" class="form-control @error('lokasi') is-invalid @enderror" id="lokasi"
                name="lokasi">
              @error('lokasi')
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
                class="form-control @error('deskripsi') is-invalid @enderror"></textarea>
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
