@extends('layout.main')

@section('isi')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Tambah Kategori Baru</h1>
</div>

    @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
        {{ session('success') }}
        </div>
    @endif

  <div class="col-lg-8">
      <form method="post" action="/kategori" class="mb-5" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Kategori</label>
            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ old('nama') }}">
              @error('nama')
              <div class="invalid-feedback">
              {{ $message }}
              </div>
              @enderror
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
  </div>

@endsection