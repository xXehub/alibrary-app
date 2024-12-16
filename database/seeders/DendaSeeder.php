<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Denda;

class DendaSeeder extends Seeder
{
    public function run(): void
    {
        Denda::create([
            'peminjaman_id' => 1, // Related to first loan
            'amount' => 10.00, // Late fee
        ]);

        Denda::create([
            'peminjaman_id' => 2, // Related to second loan
            'amount' => 5.00, // Late fee
        ]);
    }
}
