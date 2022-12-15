
@extends('layout.main')

@section('isi')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Transaksi</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-plus fa-sm text-white-50"></i>Tambah Transaksi</a>
    </div>

    <table class="table table-bordered">
        <tr>
            <th>ID Peminjaman</th>
            <th>Tgl Pinjam</th>
            <th>Tgl Kembali</th>
            <th>ID Buku</th>
            <th>ID Anggota</th>
            <th>ID Admin</th>
            <th width="200px">Action</th>
        </tr>
        {{-- @foreach($mahasiswa as $mhs) --}}
        <tr>
            <td>a123</td>
            <td>Teknologi</td>
            <td>12-12-22</td>
            <td>12-12-23</td>
            <td>b123</td>
            <td>c123</td>
            <td>g123</td>
            <td>
                <form action="#" method="POST">
                    <a class="btn btn-primary">Edit</a>
                @csrf
                @method('DELETE') 
                <button type="submit" class="btn btn-danger">Delete</button>           
                </form>
            </td>
        </tr>
        <tr>
            <td>a123</td>
            <td>Teknologi</td>
            <td>12-12-22</td>
            <td>12-12-23</td>
            <td>b123</td>
            <td>c123</td>
            <td>g123</td>
            <td>
                <form action="#" method="POST">
                    <a class="btn btn-primary">Edit</a>
                @csrf
                @method('DELETE') 
                <button type="submit" class="btn btn-danger">Delete</button>           
                </form>
            </td>
        </tr>
        <tr>
            <td>a123</td>
            <td>Teknologi</td>
            <td>12-12-22</td>
            <td>12-12-23</td>
            <td>b123</td>
            <td>c123</td>
            <td>g123</td>
            <td>
                <form action="#" method="POST">
                    <a class="btn btn-primary">Edit</a>
                @csrf
                @method('DELETE') 
                <button type="submit" class="btn btn-danger">Delete</button>           
                </form>
            </td>
        </tr>
        {{-- @endforeach --}}
    </table>

</div>  
@endsection

