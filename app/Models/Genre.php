<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    protected $table = 'genre';

    protected $fillable = [
        'id',
        'kode_genre',
        'nama_genre',
        'deskripsi',
    ];

    public function bukus()
    {
        return $this->hasMany(Buku::class, 'genre');
    }
}
