@extends('layouts.main')
@section('container')
  <h1 class="h3 mb-4 text-gray-800">Jasa Perusahaan</h1>

  <div class="row">
    <div class="col-lg-3">
      <img src="{{ asset('storage/' . $jasaperusahaan->gambar) }}" class="img-fluid" style="width: 100%"
        alt="{{ $jasaperusahaan->judul }}">
    </div>
    <div class="col-lg-9">
      <div class="card shadow mb-4">
        <div class="card-header d-flex justify-content-between align-items-center">
          <h6 class="m-0 font-weight-bold text-primary text-uppercase">Edit Jasa Perusahaan</h6>
        </div>
        <div class="card-body">
          <form action="{{ url('/jasaperusahaan/' . $jasaperusahaan->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="row">
              <div class="col-lg-12">
                <div class="mb-3">
                  <label for="judul" class="form-label">Judul</label>
                  <input type="text" class="form-control @error('judul') is-invalid @enderror" id="judul"
                    name="judul" autofocus value="{{ $jasaperusahaan->judul }}"">
                  @error('judul')
                    <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-4">
                <div class="mb-3">
                  <label for="harga" class="form-label">Harga</label>
                  <input type="number" class="form-control @error('harga') is-invalid @enderror" id="harga"
                    name="harga" value="{{ $jasaperusahaan->harga }}">
                  @error('harga')
                    <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>
              </div>
              <div class="col-lg-4">
                <div class="mb-3">
                  <label for="kapasitas" class="form-label">Kapasitas</label>
                  <input type="number" class="form-control @error('kapasitas') is-invalid @enderror" id="kapasitas"
                    name="kapasitas" value="{{ $jasaperusahaan->kapasitas }}">
                  @error('kapasitas')
                    <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>
              </div>
              <div class="col-lg-4">
                <div class="mb-3">
                  <label for="gambar" class="form-label">Gambar</label>
                  <input type="file" class="form-control @error('gambar') is-invalid @enderror" id="gambar"
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
                    name="lokasi" value="{{ $jasaperusahaan->lokasi }}">
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
                    class="form-control @error('deskripsi') is-invalid @enderror">{{ $jasaperusahaan->deskripsi }}</textarea>
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
    </div>
  </div>
@endsection
