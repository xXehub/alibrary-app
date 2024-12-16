<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('buku')->insert([
            [
                'title' => 'Life is a illusion',
                'penulis' => 1, // Sesuaikan dengan ID di tabel penulis
                'penerbit' => 1, // Sesuaikan dengan ID di tabel penerbit
                'terbit' => '2023-01-01',
                'deskripsi' => 'Yes it is',
                'sinopsis' => 'You start we end',
                'genre' => 1, // Sesuaikan dengan ID di tabel genre
                'stock' => 10,
                'gambar_buku' => 'buku_test.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Why is why',
                'penulis' => 2,
                'penerbit' => 2,
                'terbit' => '2022-06-15',
                'deskripsi' => 'Now what ?',
                'sinopsis' => 'Oh some',
                'genre' => 2,
                'stock' => 5,
                'gambar_buku' => 'buku_test.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
