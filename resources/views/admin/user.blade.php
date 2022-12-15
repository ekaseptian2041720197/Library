
@extends('layout.main')

@section('isi')

<div class="container-fluid">
    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        </div>
    @endif

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
       <h1 class="h3 mb-0 text-gray-800">User</h1>
       <a href="/useradmin/create" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
               class="fas fa-plus fa-sm text-white-50"></i> Tambah User</a>
   </div>
   <table class="table table-bordered">
       <tr>
           <th>ID User</th>
           <th>Nama</th>
           <th>Email</th>
           <th>Level</th>
           <th width="200px">Action</th>
       </tr>
       @foreach($anggota as $a)
       <tr>
           <td>{{ $a->id }}</td>
           <td>{{ $a->name }}</td>
           <td>{{ $a->email }}</td>
           <td>
               @if($a->level === 1) Admin 
               @else Anggota
               @endif
           </td>
           <td> 
                <form action="/useradmin/{{ $a->id }}" method="POST">
                {{-- Update  --}}
                <a type="button" href="/useradmin/{{ $a->id }}/edit" class="btn btn-success btn-sm">Edit</a>
                @method("delete")
                @csrf
                {{-- Delete  --}}
                <button type="submit"class="btn btn-danger btn-sm">Hapus</button>
                </form>                       
            </td>
       </tr>
       @endforeach
   </table>  

</div>

@endsection

