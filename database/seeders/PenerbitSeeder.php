<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenerbitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('penerbit')->insert([
            [
                'kode_penerbit' => 'P001',
                'nama_penerbit' => 'Gramedia',
                'alamat' => 'Jl. Palmerah Barat, Jakarta',
                'email' => 'info@gramedia.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_penerbit' => 'P002',
                'nama_penerbit' => 'Erlangga',
                'alamat' => 'Jl. Kapuk Raya, Jakarta',
                'email' => 'info@erlangga.co.id',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_penerbit' => 'P003',
                'nama_penerbit' => 'Mizan',
                'alamat' => 'Jl. Cinambo No. 12, Bandung',
                'email' => 'info@mizan.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
