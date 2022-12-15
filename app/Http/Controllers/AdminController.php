<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\User;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    // Tabel Users
    // Tampil Admin
    public function index()
    {
        return view('admin.admin',[
            'judul' => 'Dashboard',
            'anggota' => DB::table('users')->where('level',1)->get(),
        ]);
    }

    // Tampilan Tambah Admin
        public function create(){
        return view('admin.tambah_admin',[
            "title" => "Tambah Admin"
        ]);
    }

    // Simpan Data Admin
    public function store(Request $request){
        $ValidatedData = $request -> validate([
            'name' => 'required|max:255',
            'username' => 'required|min:5|unique:users',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:8'
        ]);

        $ValidatedData['password'] = bcrypt($ValidatedData['password']);
        $ValidatedData['level'] = 1;

        User::create($ValidatedData);
        
        return redirect('/admin')->with('success','Data berhasil ditambahkan');
    }

    // Tampilan Edit
    public function edit($id){
        return view("admin.edit_admin",[
        'title' => 'Edit Admin',
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
        return redirect("/admin"); // untuk diarahkan kemana
    }

    public function reset($id){
        $user = User::find($id);
        $user->password = bcrypt('12345678');
        $user->save();
        // $request->session()->flash('updatesuccess','Data Anda berhasil disimpan');
        return redirect("/admin"); // untuk diarahkan kemana
    }

    // Hapus Data User
    public function destroy(Request $request, $id){
        User::destroy($id);
        // Session::flash('hapussuccess', 'Data berhasil dihapus!');
        return redirect("/admin"); // untuk diarahkan kemana
    }  
}
