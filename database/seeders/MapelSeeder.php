<?php

namespace Database\Seeders;

use App\Models\Mapel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MapelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $mapels = [
            [
                'guru_id' => 1,
                'tahun_ajaran_id' => 1,
                'nama' => 'Matematika',
                'singkatan' => 'MTK',
                'kelompok' => 'Muatan Kejuruan',
            ],
            [
                'guru_id' => 2,
                'tahun_ajaran_id' => 1,
                'nama' => 'Bhs Indonesia',
                'singkatan' => 'BIndo',
                'kelompok' => 'Muatan Kejuruan',
            ],
            [
                'guru_id' => 1,
                'tahun_ajaran_id' => 1,
                'nama' => 'Penjaskes',
                'singkatan' => 'Penjas',
                'kelompok' => 'Muatan Kejuruan',
            ],
            [
                'guru_id' => 3,
                'tahun_ajaran_id' => 1,
                'nama' => 'Bhs Inggris',
                'singkatan' => 'BIng',
                'kelompok' => 'Muatan Kejuruan',
            ],
            [
                'guru_id' => 3,
                'tahun_ajaran_id' => 2,
                'nama' => 'Pendidikan Kewarganegaraan',
                'singkatan' => 'PKN',
                'kelompok' => 'Muatan Kejuruan',
            ],
            [
                'guru_id' => 2,
                'tahun_ajaran_id' => 2,
                'nama' => 'Pendidikan Kewarganegaraan',
                'singkatan' => 'PKN',
                'kelompok' => 'Muatan Nasional',
            ],
            [
                'guru_id' => 2,
                'tahun_ajaran_id' => 1,
                'nama' => 'Ilmu Pengetahuan Sosial',
                'singkatan' => 'IPS',
                'kelompok' => 'Muatan Nasional',
            ],
            [
                'guru_id' => 1,
                'tahun_ajaran_id' => 2,
                'nama' => 'Ilmu Pengetahuan Alam',
                'singkatan' => 'IPA',
                'kelompok' => 'Muatan Nasional',
            ],
        ];

        foreach ($mapels as $mapel) {
            Mapel::create([
                'guru_id' => $mapel['guru_id'],
                'tahun_ajaran_id' => $mapel['tahun_ajaran_id'],
                'nama' => $mapel['nama'],
                'singkatan' => $mapel['singkatan'],
                'kelompok' => $mapel['kelompok'],
            ]);
        }
    }
}
