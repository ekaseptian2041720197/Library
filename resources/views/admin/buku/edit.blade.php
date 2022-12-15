@extends('layout.main')

@section('isi')
<div class="container mt-5">

  <div class="row justify-content-center align-items-center">
      <div class="card" style="width: 24rem;">
          <div class="card-header">
              Edit Buku
          </div>
          <div class="card-body">
              @if ($errors->any())
                  <div class="alert alert-danger">
                      <strong>Whoops!</strong> There were some problems with your input.<br><br>
                      <ul>
                      @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                      @endforeach
                      </ul>
                  </div>
              @endif
              <form method="post" action="{{ route('buku.update', $buku) }}" id="myForm">
                  @csrf
                  @method('put')
                  <div class="form-group">
                      <label for="judul">Judul</label>
                      <input type="text" name="judul" class="form-control" id="judul" value="{{ $buku->judul }}" aria-describedby="judul" >
                  </div>
                  <div class="form-group">
                      <label for="penulis">Penulis</label>
                      <input type="text" name="penulis" class="form-control" id="penulis" value="{{ $buku->penulis }}" aria-describedby="penulis" >
                  </div>
                  <div class="form-group">
                      <label for="penerbit">Penerbit</label>
                      <input type="penerbit" name="penerbit" class="form-control" id="penerbit" value="{{ $buku->penerbit }}" ariadescribedby="penerbit" >
                  </div>
                  <div class="form-group">
                      <label for="tahun">Tahun Terbit</label>
                      <input type="tahun" name="tahun" class="form-control" id="tahun" value="{{ $buku->tahun }}" aria-describedby="tahun" >
                  </div>
                  <div class="form-group">
                      <label for="kategori">Kategori</label>
                      <select class="form-control" name="kategori_id" id="kategori">
                          @foreach($kategori as $k)
                            <option value="{{$k->id}}" {{$buku->kategori_id == $k->id ? 'selected' : ''}}>{{ $k->nama }}</option>
                          @endforeach
                      </select>
                    </div>
                  <div class="form-group"> 
                      <label for="stok">Stok</label>
                      <input type="stok" name="stok" class="form-control" id="stok" value="{{ $buku->stok }}" aria-describedby="stok" >
                  </div>
                  <div class="form-group">
                      <label for="jurusan">Image</label>
                      <img class="img-preview img-fluid mb-3 col-sm-3">
                      <input class="form-control" type="file" id="image" name="image" value="{{ $buku->image }}" aria-describedby="image">
                  </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
              </form>
          </div>
      </div>
  </div>
</div>

@endsection