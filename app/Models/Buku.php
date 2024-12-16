<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;

    protected $table = 'buku';
    protected $fillable = [
        'title',
        'penulis',
        'penerbit',
        'terbit',
        'deskripsi',
        'sinopsis',
        'genre',
        'stock',
        'gambar_buku',
    ];
    public function penulis()
    {
        return $this->belongsTo(Penulis::class, 'penulis', 'id');  // 'penulis' is the foreign key column in 'buku' table
    }

    public function penerbit()
    {
        return $this->belongsTo(Penerbit::class, 'penerbit', 'id');  // 'penerbit' is the foreign key column in 'buku' table
    }

    public function genre()
    {
        return $this->belongsTo(Genre::class, 'genre', 'id');  // 'genre' is the foreign key column in 'buku' table
    }
}
