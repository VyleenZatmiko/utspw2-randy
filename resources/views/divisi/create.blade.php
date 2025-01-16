@extends('layouts.app')
  
@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">Tambah Data Divisi</h1>
        <a href="{{ route('divisi') }}" type="submit" class="btn btn-primary" >Kembali</a>
    </div>
    <hr />
    <form action="{{ route('divisi.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col-md-5">
                <label class="form-label">Nama Divisi</label>
                <input type="text" name="nama_divisi" class="form-control @error('nama_divisi') is-invalid @enderror" placeholder="Nama Divisi">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-5 ">
                <label class="form-label">Deskripsi Divisi</label>
                <textarea class="form-control @error('deskripsi_divisi') is-invalid @enderror" name="deskripsi_divisi" placeholder="Deskripsi Divisi" style="height : 150px"></textarea>
            </div>
        </div>

        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Kirim</button>
            </div>
        </div>
    
    </form>
@endsection