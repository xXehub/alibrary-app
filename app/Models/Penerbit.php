<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Penerbit extends Model
{
    protected $table = 'penerbit';
    protected $fillable = [
        'id',
        'kode_penerbit',
        'nama_penerbit',
        'alamat',
        'email',
    ];
    public function bukus()
    {
        return $this->hasMany(Buku::class, 'penerbit');
    }
}
