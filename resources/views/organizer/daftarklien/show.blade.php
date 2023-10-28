@extends('layouts.main')
@section('container')
  <h1 class="h3 mb-4 text-gray-800">Daftar Klien</h1>

  <div class="row">
    <div class="col-lg-3">
      <img src="{{ asset('storage/' . $klien->foto_klien) }}" class="img-fluid" style="width: 100%" alt="{{ $klien->nama }}">
    </div>
    <div class="col-lg-9">
      <div class="card shadow mb-4">
        <div class="card-header d-flex justify-content-between align-items-center">
          <h6 class="m-0 font-weight-bold text-primary text-uppercase">Detail Klien</h6>
          <a href="{{ url('/daftarklien/' . $klien->id) }}/edit" class="btn btn-sm btn-primary"><i
              class="fas fa-pencil-alt fa-sm"></i> Edit</a>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-lg-9">
              <dl>
                <dt>Nama</dt>
                <dd>{{ $klien->nama }}</dd>
                <dt>Tanggal Kegiatan</dt>
                <dd>{{ $klien->tanggal_kegiatan_string }}</dd>
                <dt>Deskripsi</dt>
                <dd>{{ $klien->deskripsi }}</dd>
                <dt>Foto Kegiatan</dt>
                <dd>
                  <img src="{{ asset('storage/' . $klien->foto_kegiatan) }}" class="img-fluid" style="width: 50%"
                    alt="{{ $klien->nama }}">
                </dd>
              </dl>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
