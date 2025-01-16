@extends('layouts.app')
  
@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">Tambah Data Karyawan</h1>
        <a href="{{ route('karyawan') }}" type="submit" class="btn btn-primary" >Kembali</a>
    </div>
    <hr />
    <form action="{{ route('karyawan.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-2">
            <div class="col-md-5">
                <label class="form-label">Nama Karyawan</label>
                <input type="text" class="form-control @error('nama_karyawan') is-invalid @enderror" name="nama_karyawan" placeholder="Masukan Nama Karyawan">
            </div>
            <div class="col-md-5">
                <label class="form-label">NIP</label>
                <input type="text" name="nip" class="form-control @error('nip') is-invalid @enderror" placeholder="Masukan Nip">
            </div>
        </div>
        <div class="row mb-2">
            <div class="col-md-5">
                <label class="form-label">Email</label>
                <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Masukan Email">
            </div>
            <div class="col-md-5">
                <label class="form-label">Telepon</label>
                <input type="text" name="telepon" class="form-control @error('telepon') is-invalid @enderror" placeholder="Masukan Nomor Telepon">
            </div>
        </div>
        <div class="row mb-2">
            <div class="col-md-5">
                <label class="form-label">Divisi</label>
                <select name="divisi_id" class="form-control" id="divisi_id">
                    <option disabled value>--Pilih Divisi--</option>
                    @foreach ($divisi as $rs)
                    <option value="{{ $rs->id }}">{{ $rs->nama_divisi }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-10 ">
                <label class="form-label">Alamat</label>
                <textarea class="form-control @error('alamat') is-invalid @enderror" name="alamat" placeholder="Masukan Alamat" style="height : 75px"></textarea>
            </div>
        </div>

        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Kirim</button>
            </div>
        </div>
    
    </form>
@endsection