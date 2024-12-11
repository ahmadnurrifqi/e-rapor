<?php

namespace Database\Seeders;

use App\Models\Kelas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kelases = [
            [
                'guru_id' => 1, 
                'tahun_ajaran_id' => 1, 
                'nama_kelas' => 'A', 
                'tingkat_kelas' => 'X (Sepuluh)', 
            ],
            [
                'guru_id' => 2, 
                'tahun_ajaran_id' => 1, 
                'nama_kelas' => 'B', 
                'tingkat_kelas' => 'X (Sepuluh)', 
            ],
            [
                'guru_id' => 3, 
                'tahun_ajaran_id' => 2, 
                'nama_kelas' => 'C', 
                'tingkat_kelas' => 'X (Sepuluh)', 
            ],
            [
                'guru_id' => 4,
                'tahun_ajaran_id' => 1, 
                'nama_kelas' => 'A', 
                'tingkat_kelas' => 'XI (Sebelas)', 
            ],
            [
                'guru_id' => 5,
                'tahun_ajaran_id' => 1, 
                'nama_kelas' => 'A', 
                'tingkat_kelas' => 'XI (Sebelas)', 
            ],
        ];

        foreach ($kelases as $kelas) {
            Kelas::create([
                'guru_id' => $kelas['guru_id'],
                'tahun_ajaran_id' => $kelas['tahun_ajaran_id'],
                'nama_kelas' => $kelas['nama_kelas'],
                'tingkat_kelas' => $kelas['tingkat_kelas'],
            ]);
        }
    }
}
