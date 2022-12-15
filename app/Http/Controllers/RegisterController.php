<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(){
        return view('register.index',[
            'judul' => 'Register'
        ]);
    }

    public function store(Request $request){
        $ValidatedData = $request -> validate([
            'name' => 'required|max:255',
            'username' => 'required|min:5|unique:users',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:8'
        ]);

        $ValidatedData['password'] = bcrypt($ValidatedData['password']);
        $ValidatedData['level'] = 0;

        User::create($ValidatedData);
        
        return redirect('/login')->with('success','Registrasi berhasil, silahkan Login');
    }

    public function storeuser(Request $request){
        $ValidatedData = $request -> validate([
            'name' => 'required|max:255',
            'username' => 'required|min:5|unique:users',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:8'
        ]);

        $ValidatedData['password'] = bcrypt($ValidatedData['password']);
        $ValidatedData['level'] = 0;

        User::create($ValidatedData);
        
        return redirect('/homeUser')->with('success','Data berhasil ditambahkan');
    }
}