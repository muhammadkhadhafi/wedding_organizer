@extends('layouts.main')
@section('container')
  <h1 class="h3 mb-4 text-gray-800">Galeri Foto Kegiatan</h1>

  <div class="row">
    <div class="col-lg-3">
      <img src="{{ asset('storage/' . $galerifoto->foto_kegiatan) }}" class="img-fluid" style="width: 100%"
        alt="{{ $galerifoto->judul }}">
    </div>
    <div class="col-lg-9">
      <div class="card shadow mb-4">
        <form action="{{ url('/galerifoto/' . $galerifoto->id) }}" method="post" enctype="multipart/form-data">
          @csrf
          @method('put')
          <div class="card-header d-flex justify-content-between align-items-center">
            <h6 class="m-0 font-weight-bold text-primary text-uppercase">Edit Foto Kegiatan</h6>
            <button class="btn btn-primary btn-sm float-end float-right"><i class="far fa-save"></i>
              Simpan</button>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-lg-12">
                <div class="mb-3">
                  <label for="judul" class="form-label">Judul</label>
                  <input type="text" class="form-control @error('judul') is-invalid @enderror" id="judul"
                    name="judul" autofocus value="{{ $galerifoto->judul }}"">
                  @error('judul')
                    <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-4">
                <div class="mb-3">
                  <label for="foto_kegiatan" class="form-label">Foto Kegiatan</label>
                  <input type="number" class="form-control @error('foto_kegiatan') is-invalid @enderror"
                    id="foto_kegiatan" name="foto_kegiatan" value="{{ $galerifoto->foto_kegiatan }}">
                  @error('foto_kegiatan')
                    <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>
              </div>
              <div class="col-lg-4">
                <div class="mb-3">
                  <label for="kapasitas" class="form-label">Kapasitas</label>
                  <input type="number" class="form-control @error('kapasitas') is-invalid @enderror" id="kapasitas"
                    name="kapasitas" value="{{ $galerifoto->kapasitas }}">
                  @error('kapasitas')
                    <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>
              </div>
              <div class="col-lg-4">
                <div class="mb-3">
                  <label for="gambar" class="form-label">Gambar</label>
                  <input type="file" class="form-control @error('gambar') is-invalid @enderror" id="gambar"
                    name="gambar" accept=".jpg, .png">
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
                    name="lokasi" value="{{ $galerifoto->lokasi }}">
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
                    class="form-control @error('deskripsi') is-invalid @enderror">{{ $galerifoto->deskripsi }}</textarea>
                  @error('deskripsi')
                    <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>
              </div>
            </div>
        </form>
      </div>
    </div>
  </div>
  </div>
@endsection
