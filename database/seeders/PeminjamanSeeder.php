<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Peminjaman;

class PeminjamanSeeder extends Seeder
{
    public function run(): void
    {
        Peminjaman::create([
            'user_id' => 1, // Admin User
            'buku_id' => 1, // Laravel Basics
            'borrow_date' => now(),
            'return_date' => now()->addDays(7), // 7 days loan
            'is_returned' => false,
        ]);

        Peminjaman::create([
            'user_id' => 2, // Regular User
            'buku_id' => 2, // Advanced PHP
            'borrow_date' => now(),
            'return_date' => now()->addDays(14), // 14 days loan
            'is_returned' => false,
        ]);
    }
}
