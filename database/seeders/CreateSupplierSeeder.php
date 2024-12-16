<?php
namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Supplier;

class CreateSupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $suppliers = [
            [
                'kode' => 'PD-CES',
                'jenis_pakan' => 'Pollard',
                'nama' => 'CV ESHAN SENTOSA',
                'harga_per_kg' => 4500,
                'alamat' => 'Jl. KH. Syafi\'i No. 26 Suci Manyar Gresik',
                'telepon' => '087853881525'
            ],
            [
                'kode' => 'AS-E',
                'jenis_pakan' => 'Ampas Sawit',
                'nama' => 'Eko',
                'harga_per_kg' => 2800,
                'alamat' => 'Ngoro',
                'telepon' => '082144267410'
            ],
            // Add the rest of the data here
        ];

        foreach ($suppliers as $supplier) {
            Supplier::create($supplier);
        }
    }
}
