
@extends('layout.main')

@section('isi')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">User</h1>
        <a href="/kategori/create" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-plus fa-sm text-white-50"></i>Tambah Kategori</a>
    </div>

    <table class="table table-bordered">
        <tr>
            <th>ID Kategori</th>
            <th>Nama Kategori</th>
            <th width="200px">Action</th>
        </tr>
        
        
        @foreach ($kategori as $kategori)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $kategori->nama }}</td>
            <td>
                <a href="{{ route('kategori.edit', $kategori->id) }}" class="badge bg-info"><span data-feather="edit">Edit</span></a>
                <form action="{{ route('kategori.destroy', $kategori->id) }}" method="POST" class="d-inline">
                  @method('DELETE')
                  @csrf
                  <button class="badge bg-danger border-0" onclick="return confirm('apakah anda yakin ?')"><span data-feather="x">Delete</span></button>
                </form>
            </td>
        </tr>

        @endforeach
    </table>

</div>  
@endsection

