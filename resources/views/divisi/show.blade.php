@extends('layouts.app')
  
@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">Detail Divisi</h1>
        <a href="{{ route('divisi') }}" type="submit" class="btn btn-primary" >Kembali</a>
    </div>
    <hr />
    <div class="row">
        <div class="col-md-5">
            <label class="form-label">Nama Divisi</label>
            <input type="text" name="nama_divisi" class="form-control" placeholder="Nama Divisi" value="{{ $divisi->nama_divisi }}" readonly>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-md-5">
            <label class="form-label">Deskripsi Divisi</label>
            <textarea class="form-control" name="deskripsi_divisi" placeholder="Deskripsi Divisi" style="height : 100px" readonly>{{ $divisi->deskripsi_divisi }}</textarea>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <label class="form-label">Dibuat</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $divisi->created_at }}" readonly>
        </div>
        <div class="col-md-3">
            <label class="form-label">Diupdate</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $divisi->updated_at }}" readonly>
        </div>
    </div>

@endsection