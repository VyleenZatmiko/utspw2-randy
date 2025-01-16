@extends('layouts.app')
  
@section('contents')
<div class="d-flex align-items-center justify-content-between">
    <h1 class="mb-0">Edit Karyawan</h1>
    <a href="{{ route('karyawan') }}" type="submit" class="btn btn-primary" >Kembali</a>
</div>
    <hr />
    <form action="{{ route('karyawan.update', $karyawan->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row mb-2">
            <div class="col-md-5">
                <label class="form-label">Nama Karyawan</label>
                <input type="text" name="nama_karyawan" class="form-control @error('nama_karyawan') is-invalid @enderror" value="{{ $karyawan->nama_karyawan }}" >
            </div>
            <div class="col-md-5">
                <label class="form-label">NIP</label>
                <input type="text" name="nip" class="form-control @error('nip') is-invalid @enderror" value="{{ $karyawan->nip }}" >
            </div>
        </div>
        <div class="row mb-2">
            <div class="col-md-5">
                <label class="form-label">Email</label>
                <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ $karyawan->email }}" >
            </div>
            <div class="col-md-5">
                <label class="form-label">Telepon</label>
                <input type="text" name="telepon" class="form-control @error('telepon') is-invalid @enderror" value="{{ $karyawan->telepon }}" >
            </div>
        </div>
        <div class="row mb-2 mb-3">
            <div class="col-md-5">
                <label class="form-label">Divisi</label>
                <select name="divisi_id" class="form-control" id="divisi_id">
                    <option disabled value>--Pilih Divisi--</option>
                    <option value="{{ $karyawan->divisi_id }}">-{{ $karyawan->divisi->nama_divisi }}-</option>
                    @foreach ($divisi as $rs)
                    <option value="{{ $rs->id }}">{{ $rs->nama_divisi }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-5 mb-3">
                <label class="form-label">Alamat</label>
                <textarea class="form-control @error('alamat') is-invalid @enderror" name="alamat" style="height : 75px" >{{ $karyawan->alamat }}</textarea>
            </div>
        </div>


        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>

    </form>
@endsection