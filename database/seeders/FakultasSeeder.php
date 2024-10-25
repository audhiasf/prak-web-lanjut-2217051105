<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Fakultas;


class FakultasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'Fakultas Matematika dan Ilmu Pengetahuan Alam',
            'Fakultas Teknik',
            'Fakultas Hukum',
        ];
        foreach ($data as $fakultas){
            Fakultas::create([
                'nama_fakultas' => $fakultas,
            ]);
        }
    }
}
