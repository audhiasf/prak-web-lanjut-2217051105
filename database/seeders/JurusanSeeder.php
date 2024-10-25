<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Jurusan;


class JurusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['nama_jurusan' => 'Ilmu Komputer', 'fakultas_id' => 1],
            ['nama_jurusan' => 'Matematika', 'fakultas_id' => 1],
            ['nama_jurusan' => 'Fisika', 'fakultas_id' => 1],
            ['nama_jurusan' => 'Teknik Mesin', 'fakultas_id' => 2],
        ];

        foreach ($data as $jurusan) {
            Jurusan::create($jurusan);
        }
    }
}
