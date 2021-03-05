@extends('admin/layout.master')

@section('title','pengaduan')
@section('title2','index')
@section('pengaduan','active')

@section('konten')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4">
            <img src="{{ asset('assets/img/produk/'.$data->foto) }}" class="img-thumbnail" width="100%" alt="bukti">
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h5>Pengaduan - {{ $data->tanggal_pengaduan }} | {{ $data->status }}</h5>
                </div>
                <div class="card-body">
                    <div class="form-group row">
                        <label class="col-md-2">NIK</label>
                        <input type="text" class="form-control col-md-4" value="{{ $data->nik }}" disabled>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">Nama</label>
                        <input type="text" class="form-control col-md-4" value="{{ $data->nama }}" disabled>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">Isi</label>
                        <textarea rows="10" disabled class="form-control col-md-10">{{ $data->isi_laporan }}</textarea>
                    </div>
                    <form action="/tambahtanggapan" method="POST">
                        @csrf
                        <div class="form-group row">
                            <label class="col-md-2">Tanggapan</label>
                            <input type="hidden" name="id" value="{{ $data->id_pengaduan }}">
                            <textarea rows="10" class="form-control col-md-10" name="isi"></textarea>
                        </div>
                        <a href="/pengaduan" class="btn btn-secondary ml-3 float-right"><i class="fas fa-undo-alt"></i> Kembali</a>
                        <button type="submit" class="btn btn-warning float-right"><i class="fas fa-paper-plane"></i> Kirim</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
