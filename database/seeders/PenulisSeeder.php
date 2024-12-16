<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenulisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('penulis')->insert([
            [
                'kode_author' => 'A001',
                'nama_author' => 'Tere Liye',
                'bio' => 'Seorang penulis terkenal asal Indonesia dengan berbagai karya yang berfokus pada kehidupan dan nilai-nilai moral.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_author' => 'A002',
                'nama_author' => 'Andrea Hirata',
                'bio' => 'Penulis novel terkenal "Laskar Pelangi" yang telah diterjemahkan ke berbagai bahasa.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_author' => 'A003',
                'nama_author' => 'Habiburrahman El Shirazy',
                'bio' => 'Penulis novel-novel islami seperti "Ayat-Ayat Cinta" yang telah diadaptasi menjadi film.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_author' => 'A004',
                'nama_author' => 'Dewi Lestari',
                'bio' => 'Penulis terkenal dengan karya-karya fiksi seperti "Supernova" yang menggabungkan unsur sains dan filosofi.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
