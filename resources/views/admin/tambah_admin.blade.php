
@extends('layout.main')

@section('isi')

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
       <h1 class="h3 mb-0 text-gray-800">Tambah Admin</h1>
   </div>

   <form class="user" action="/admin" method="POST">
    @csrf
    <div class="form-group">
        <input type="text" class="form-control form-control-user @error('name') is-invalid @enderror" id="name" name="name"
            placeholder="Name" value="{{ old('name') }}">
            
            @error('name')
            <div class="invalid-feedback">
            {{ $message }}
            </div>
            @enderror           
    </div>
   
    <div class="form-group">
        <input type="text" class="form-control form-control-user @error('username') is-invalid @enderror" id="username" name="username"
            placeholder="Username" value="{{ old('username') }}">
            
            @error('username')
            <div class="invalid-feedback">
            {{ $message }}
            </div>
            @enderror           
    </div>
    
    <div class="form-group">
        <input type="email" class="form-control form-control-user @error('email') is-invalid @enderror" id="email" name="email"
            placeholder="Email" value="{{ old('email') }}">
            
            @error('email')
            <div class="invalid-feedback">
            {{ $message }}
            </div>
            @enderror           
    </div>

    <div class="form-group">
        <input type="password" class="form-control form-control-user @error('password') is-invalid @enderror" id="password" name="password"
            placeholder="Password" value="{{ old('password') }}">
            
            @error('password')
            <div class="invalid-feedback">
            {{ $message }}
            </div>
            @enderror           
    </div>
   
    <button type="submit" class="btn btn-primary btn-user ">
        Simpan
    </button>
    <hr>
</form>

</div>

@endsection

