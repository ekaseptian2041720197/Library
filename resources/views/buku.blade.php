@extends('layout.index')

@section('isi')

<h1 class="mt-3 mb-3 text-center text-light">
    <b> Our Books </b>
</h1>

@if ($buku->count())
<div class="card mb-3">
    <div style="max-height: 400px; overflow:hidden">
        <img src="/img/book.jpg" class="card-img-top" alt="{{ $buku[0]->photo }}" class="img-fluid ">
    </div>
    <div class="card-body text-center">
      <h5 class="card-title">{{ $buku[0]->judul }}</h5>
      <p class="card-text"> {{ $buku[0]->penulis }}</p>
      <p class="card-text"> {{ $buku[0]->penerbit }}</p>
      <p class="card-text"> {{ $buku[0]->tahun }}</p>
      <p class="card-text"> {{ $buku[0]->kategori }}</p>
      <p class="card-text"><small class="text-muted">Last updated {{ $buku[0]->created_at->diffForHumans() }}</small></p>
      {{-- <a href="/buku/{{ $buku[0]->id }}" class="btn btn-primary">Read more</a> --}}
    </div>
  </div>
@else
  <p class="text-light text-center fs-4">Buku masih belum tersedia.</p>
@endif
    
<div class="container">
    <div class="row">
        @foreach ($buku->skip(1) as $b)
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div style="max-height: 500px; overflow:hidden">
                        <img src="{{ asset('storage/' . $b->photo) }}" class="card-img-top" alt="{{ $b->photo }}">
                     </div>
                    <div class="card-body">
                    <h5 class="card-title">{{ $b->judul }}</h5>
                    <p class="card-text"> {{ $b->penulis }}</p>
                    <p class="card-text"> {{ $b->penerbit }}</p>
                    <p class="card-text"> {{ $b->tahun }}</p>
                    <p class="card-text"> {{ $b->kategori }}</p>
                    <p class="card-text"><small class="text-muted">Last updated {{ $b->created_at->diffForHumans() }}</small></p>
                    {{-- <a href="/product/{{ $b->id }}" class="btn btn-primary">Read more</a> --}}
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>


    
@endsection