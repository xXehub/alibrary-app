<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Penulis extends Model
{
    protected $table = 'penulis';
    protected $fillable = [
        'id',
        'kode_author',
        'nama_author',
        'bio',
    ];
    public function bukus()
    {
        return $this->hasMany(Buku::class, 'penulis');
    }
}
