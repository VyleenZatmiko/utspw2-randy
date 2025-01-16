@extends('layouts.app')
  
@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">Detail Karyawan</h1>
        <a href="{{ route('karyawan') }}" type="submit" class="btn btn-primary" >Kembali</a>
    </div>
    <hr />
    <div class="row mb-2">
        <div class="col-md-5">
            <label class="form-label">Nama Karyawan</label>
            <input type="text" name="nama_karyawan" class="form-control" value="{{ $karyawan->nama_karyawan }}" readonly>
        </div>
        <div class="col-md-5">
            <label class="form-label">NIP</label>
            <input type="text" name="nip" class="form-control" value="{{ $karyawan->nip }}" readonly>
        </div>
    </div>
    <div class="row mb-2">
        <div class="col-md-5">
            <label class="form-label">Email</label>
            <input type="text" name="email" class="form-control" value="{{ $karyawan->email }}" readonly>
        </div>
        <div class="col-md-5">
            <label class="form-label">Telepon</label>
            <input type="text" name="telepon" class="form-control" value="{{ $karyawan->telepon }}" readonly>
        </div>
    </div>
    <div class="row mb-2">
        <div class="col-md-5">
            <label class="form-label">Nama Divisi</label>
            <input type="text" name="divisi_id" class="form-control" id="divisi_id" value="{{ $karyawan->divisi->nama_divisi }}" readonly>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-md-10">
            <label class="form-label">Alamat</label>
            <textarea class="form-control" name="alamat" style="height : 75px" readonly>{{ $karyawan->alamat }}</textarea>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <label class="form-label">Dibuat</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $karyawan->created_at }}" readonly>
        </div>
        <div class="col-md-3">
            <label class="form-label">Diupdate</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $karyawan->updated_at }}" readonly>
        </div>
    </div>

@endsection