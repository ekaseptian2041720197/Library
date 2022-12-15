<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Buku;
use App\Models\Transaksi;
use App\Models\Kategori;
use DB;

class DashboardController extends Controller
{
    // Tampil Dashboard
    public function index()
    {
        return view('admin.index',[
            'judul' => 'Dashboard',
            'anggota' => User::all()->count(),
            'buku' => Buku::all()->count(),
            'transaksi' => Transaksi::all()->count(),
            'kategori' => Kategori::all()->count()
        ]);
    }

    // Tampil Anggota
    public function anggota()
    {
        return view('admin.admin',[
            'judul' => 'Dashboard',
            'anggota' => DB::table('users')->where('level',0)->get(),
        ]);
    }
}
