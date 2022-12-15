
@extends('layout.main')

@section('isi')

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
       <h1 class="h3 mb-0 text-gray-800">Edit Admin</h1>
   </div>

   <form class="user" action="/admin/{{ $item->id }}" method="POST">
    @method("put")
    @csrf   
    <div class="form-group">
        <input type="text" class="form-control form-control-user @error('name') is-invalid @enderror" id="name" name="name"
            placeholder="Name" value="{{ $item->name }}">
            
            @error('name')
            <div class="invalid-feedback">
            {{ $message }}
            </div>
            @enderror           
    </div>
   
    <div class="form-group">
        <input type="text" class="form-control form-control-user @error('username') is-invalid @enderror" id="username" name="username"
            placeholder="Username" value="{{ $item->username }}">
            
            @error('username')
            <div class="invalid-feedback">
            {{ $message }}
            </div>
            @enderror           
    </div>
    
    <div class="form-group">
        <input type="email" class="form-control form-control-user @error('email') is-invalid @enderror" id="email" name="email"
            placeholder="Email" value="{{ $item->email }}">
            
            @error('email')
            <div class="invalid-feedback">
            {{ $message }}
            </div>
            @enderror           
    </div>

    {{-- <div class="form-group">
        <input type="password" class="form-control form-control-user @error('password') is-invalid @enderror" id="password" name="password"
            placeholder="Password" value="{{ $item->password }}">
            
            @error('password')
            <div class="invalid-feedback">
            {{ $message }}
            </div>
            @enderror           
    </div> --}}
   
    <button type="submit" class="btn btn-primary btn-user ">
        Simpan
    </button>
    <hr>
</form>

<form method="POST" action="/resetpassword/{{ $item->id }}">
    @csrf
    <button class="btn btn-warning btn-user " type="submit" title="Setelah di reset, password akan menjadi 12345678">
        Reset User's Password
    </button>
</form>
</div>

@endsection

