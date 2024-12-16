<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Denda extends Model
{
    protected $table = 'denda';
    public function peminjaman() {
        return $this->hasMany(Peminjaman::class);
    }
}
