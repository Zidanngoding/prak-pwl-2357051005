<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\MataKuliah;

class MataKuliahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['nama_mk' => 'Pemrograman Web', 'sks' => 3],
            ['nama_mk' => 'Basis Data', 'sks' => 3],
            ['nama_mk' => 'Jaringan Komputer', 'sks' => 2],
        ];

        foreach ($data as $mk) {
            MataKuliah::create($mk);
        }
    }
}
