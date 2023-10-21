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
          <h6 class="m-0 font-weight-bold text-primary text-uppercase">Detail Jasa Perusahaan</h6>
          <a href="{{ url('/jasaperusahaan/' . $jasaperusahaan->id) }}/edit" class="btn btn-sm btn-primary"><i
              class="fas fa-pencil-alt fa-sm"></i> Edit</a>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-lg-9">
              <dl>
                <dt>Judul</dt>
                <dd>{{ $jasaperusahaan->judul }}</dd>
                <dt>Harga</dt>
                <dd>{{ $jasaperusahaan->harga }}</dd>
                <dt>Kapasitas</dt>
                <dd>{{ $jasaperusahaan->kapasitas }}</dd>
                <dt>Lokasi</dt>
                <dd>{{ $jasaperusahaan->judul }}</dd>
                <dt>Deskripsi</dt>
                <dd>{{ $jasaperusahaan->deskripsi }}</dd>
              </dl>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
