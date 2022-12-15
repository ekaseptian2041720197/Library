<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\kategori;

class Buku extends Model
{   
    protected $table = 'bukus';
    protected $primaryKey='id';
    
    protected $fillable = [
        'judul',
        'penulis',
        'penerbit',
        'tahun',
        'kategori',
        'stok',
        'image'
    ];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }
}
