<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class BController extends Controller
{
    
    public function index(){
        return view('buku',[
            "title"=>"Buku",
            "buku" => Buku::latest()->get()
        ]);
    }
    
}
