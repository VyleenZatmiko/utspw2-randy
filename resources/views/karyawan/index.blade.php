@extends('layouts.app')
  
@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">Data Karyawan</h1>
        <a href="{{ route('karyawan.create') }}"  class="btn btn-primary">Tambah Karyawan</a>
    </div>
    <hr />
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th>#</th>
                <th>Nama Karyawan</th>
                <th>Nip</th>
                <th>Email</th>
                <th>Telepon</th>
                <th>Alamat</th>
                <th>Divisi</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @if($karyawan->count() > 0)
                @foreach($karyawan as $key => $rs)
                    <tr>
                        <td class="align-middle">{{ $karyawan->firstItem() + $key }}</td>
                        <td class="align-middle">{{ $rs->nama_karyawan }}</td>
                        <td class="align-middle">{{ $rs->nip }}</td>
                        <td class="align-middle">{{ $rs->email }}</td>
                        <td class="align-middle">{{ $rs->telepon }}</td>
                        <td class="align-middle">{{ $rs->alamat }}</td>
                        <td class="align-middle">{{ $rs->divisi->nama_divisi }}</td>  
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('karyawan.show', $rs->id) }}" type="button" class="btn btn-secondary">Detail</a>
                                <a href="{{ route('karyawan.edit', $rs->id)}}" type="button" class="btn btn-warning">Edit</a>
                                <form action="{{ route('karyawan.destroy', $rs->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Yakin Ingin Menghapus Data??')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger m-0">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="8"> Data Karyawan Tidak Ada</td>
                </tr>
            @endif
        </tbody>
    </table>

    <div class="d-flex align-items-center justify-content-between">
        <div>
            Menampilkan
            {{ $karyawan->firstItem() }}
            -
            {{ $karyawan->lastItem() }}
            Data Dari
            {{ $karyawan->total() }}
            Data
        </div>
        <div>
            {{ $karyawan->links() }}
        </div>
    </div>

@endsection