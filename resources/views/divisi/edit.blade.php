@extends('layouts.app')
  
@section('contents')
<div class="d-flex align-items-center justify-content-between">
    <h1 class="mb-0">Edit Divisi</h1>
    <a href="{{ route('divisi') }}" type="submit" class="btn btn-primary" >Kembali</a>
</div>
    <hr />
    <form action="{{ route('divisi.update', $divisi->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-md-5">
                <label class="form-label">Nama Divisi</label>
                <input type="text" name="nama_divisi" class="form-control @error('nama_divisi') is-invalid @enderror" placeholder="Nama Divisi" value="{{ $divisi->nama_divisi }}" >
            </div>
        </div>
        <div class="row">
            <div class="col-md-5 mb-3">
                <label class="form-label">Deskripsi Divisi</label>
                <textarea class="form-control @error('deskripsi_divisi') is-invalid @enderror" name="deskripsi_divisi" placeholder="Deskripsi Divisi" style="height : 150px" >{{ $divisi->deskripsi_divisi }}</textarea>
            </div>
        </div>


        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>

    </form>
@endsection