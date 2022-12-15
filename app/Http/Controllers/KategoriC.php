<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kategori;

class KategoriC extends Controller
{
    public function index(){
        return view('admin.kategori.index', [
            'kategori'=>kategori::all()
        ]);
    }

    public function create()
    {
        return view('admin.kategori.create');
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'nama' => 'required'
        ]);

        Kategori::create($validate);

        return redirect('/kategori')->with('success','Buku baru telah ditambahkan!');
    }

    public function edit(kategori $kategori)
    {
        
        return view('admin.kategori.edit', [
            'kategori' => $kategori
        ]);
    }

    public function update(Request $request, kategori $kategori)
    {
        $rules = $request->validate([
            'nama' => 'required'
        ]);

        kategori::where('id',$kategori->id)->update($rules);

        return redirect('/kategori')->with('success','Data telah ditambahkan!');
    }
    
    public function destroy(kategori $kategori)
    {
        $kategori->delete();
        return redirect('/kategori')->with('success','Data telah dihapus');
    }
}
