<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('login.index',[
            'judul' => 'Login'
        ]);
    }

    public function authenticate(Request $request){
        // Syarat Admin
        $credentialsadmin = $request -> validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);
        $credentialsadmin['level'] = 1;

        // Syarat Anggota
        $credentialsanggota = $request -> validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);
        $credentialsanggota['level'] = 0;

        // IF ADMIN
        if(Auth::attempt($credentialsadmin)){            
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');

        // IF ANGGOTA
        }else if(Auth::attempt($credentialsanggota)){ 
            $request->session()->regenerate();
            return redirect()->intended('/user');

        // ELSE
        }else{
            return back()->with('loginError','Login Gagal!');
        }
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerate();
        return redirect('/login');
    }
}