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
        <div class="card-header d-flex justify-content-between align-items-center">
          <h6 class="m-0 font-weight-bold text-primary text-uppercase">Detail Foto Kegiatan</h6>
          <a href="{{ url('/galerifoto/' . $galerifoto->id) }}/edit" class="btn btn-sm btn-primary"><i
              class="fas fa-pencil-alt fa-sm"></i> Edit</a>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-lg-9">
              <dl>
                <dt>Judul</dt>
                <dd>{{ $galerifoto->judul }}</dd>
                <dt>Tanggal Kegiatan</dt>
                <dd>{{ $galerifoto->tanggal_kegiatan_string }}</dd>
                <dt>Deskripsi</dt>
                <dd>{{ $galerifoto->deskripsi }}</dd>
              </dl>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
