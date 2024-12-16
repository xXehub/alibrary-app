<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('genre')->insert([
            [
                'kode_genre' => 'G001',
                'nama_genre' => 'Fiksi',
                'deskripsi' => 'Genre yang mencakup cerita-cerita imajinatif yang dibuat berdasarkan ide kreatif.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_genre' => 'G002',
                'nama_genre' => 'Non-Fiksi',
                'deskripsi' => 'Genre yang berdasarkan fakta dan informasi nyata.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_genre' => 'G003',
                'nama_genre' => 'Romantis',
                'deskripsi' => 'Genre yang berfokus pada cerita cinta dan hubungan emosional.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_genre' => 'G004',
                'nama_genre' => 'Petualangan',
                'deskripsi' => 'Genre yang mengisahkan perjalanan atau pengalaman luar biasa.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_genre' => 'G005',
                'nama_genre' => 'Fantasi',
                'deskripsi' => 'Genre yang menciptakan dunia fiksi dengan elemen-elemen magis atau supranatural.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
