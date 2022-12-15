
@extends('layout.main')

@section('isi')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left mt-2">
            <h2>Data Buku</h2>
        </div>
        <div class="float-right my-2">
            <a class="btn btn-success" href="{{ route('buku.create') }}"> Input Buku</a>
        </div>
    </div>
</div>

@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif

<table class="table table-bordered">
    <tr>
        <th>Judul</th>
        <th>Penulis</th>
        <th>Penerbit</th>
        <th>Tahun Terbit</th>
        <th>Kategori</th>
        <th>Stok</th>
        <th width="280px">Action</th>
    </tr>
    @foreach ($buku as $b)
    <tr>
        <td>{{ $b->judul }}</td>
        <td>{{ $b->penulis }}</td>
        <td>{{ $b->penerbit }}</td>
        <td>{{ $b->tahun }}</td>
        <td>{{ $b->kategori->nama }}</td>
        <td>{{ $b->stok }}</td>
        <td>
            <a href="{{ route('buku.edit',$b->id) }}" class="badge bg-info">Edit</span></a>
            <form action="{{ route('buku.destroy',$b->id) }}" method="POST" class="d-inline">
                @method('DELETE')
                @csrf
                <button class="badge bg-danger border-0" onclick="return confirm('apakah anda yakin ?')">Delete</button>
            </form>
        </td>
        
    </tr>
    @endforeach
</table>

@endsection

