@extends('layouts.app')
  
@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">Data Divisi</h1>
        <a href="{{ route('divisi.create') }}"  class="btn btn-primary">Tambah Divisi</a>
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
                <th>Nama Divisi</th>
                <th>Deskripsi Divisi</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @if($divisi->count() > 0)
                @foreach($divisi as $key => $rs)
                    <tr>
                        <td class="align-middle">{{ $divisi->firstItem() + $key }}</td>
                        <td class="align-middle">{{ $rs->nama_divisi }}</td>
                        <td class="align-middle">{{ $rs->deskripsi_divisi }}</td>  
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('divisi.show', $rs->id) }}" type="button" class="btn btn-secondary">Detail</a>
                                <a href="{{ route('divisi.edit', $rs->id)}}" type="button" class="btn btn-warning">Edit</a>
                                <form action="{{ route('divisi.destroy', $rs->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Yakin Ingin Menghapus Data??')">
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
                    <td class="text-center" colspan="5"> Data Divisi Tidak Ada</td>
                </tr>
                @endif
            </tbody>
        </table>

            <div class="d-flex align-items-center justify-content-between">
                <div>
                    Menampilkan
                    {{ $divisi->firstItem() }}
                    -
                    {{ $divisi->lastItem() }}
                    Data Dari
                    {{ $divisi->total() }}
                    Data
                </div>
                <div>
                    {{ $divisi->links() }}
                </div>
            </div>

@endsection