@extends('layout.user.main')

@section('isi')
    <h1 style="padding-left: 2%"> Selamat Datang {{ $a->name }}!</h1><hr>
    <h2 style="padding-left: 2%">Pada halaman ini Anda dapat:</h2>
    <ul>
        <li>Mengedit Profil Anda</li>
        <li>Melihat Daftar Buku</li>
        <li>Mengecek Peminjaman yang Anda Lakukan</li>
    </ul>
@endsection