<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    // Tampil user
    public function index()
    {
        return view('user.index',[
            'judul' => 'Halaman User',
            $id = auth()->user()->id,
            'a' => User::find($id),
        ]);
    }
    
    // Tampilan Edit
    public function edit($id){
        return view("user.edit_profil",[
        'title' => 'Edit User',
        'a' => User::find($id),
        'item' => User::find($id)
    ]);
    }
        
    // Simpan Hasil Edit
    public function update(Request $request, $id){
        $validatedData=$request->validate([
            'name' => 'required|min:5',
            'username' => 'required',
            'email' => 'required',
        ]);

        // Menyimpan update
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->username = $request->username;
        $user->save();
        
        $request->session()->flash('updatesuccess','Data Anda berhasil disimpan');
        return redirect("/user"); // untuk diarahkan kemana
    }
}
