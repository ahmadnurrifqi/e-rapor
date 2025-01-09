<?php

namespace Database\Seeders;

use App\Models\TahunAjaran;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TahunAjaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tahunAjarans = [
            [
                'tahun' => '2024/2025',
                'semester' => 'Ganjil',
                'tempat_pembagian' => 'Bontang',
                'tanggal_pembagian' => '2024-12-12',
                'is_active' => 1,
            ],
            [
                'tahun' => '2024/2025',
                'semester' => 'Genap',
                'tempat_pembagian' => 'Bontang',
                'tanggal_pembagian' => '2025-04-04',
                'is_active' => 0,
            ],
        ];

        foreach ($tahunAjarans as $tahunAjaran) {
            TahunAjaran::create([
                'tahun' => $tahunAjaran['tahun'],
                'semester' => $tahunAjaran['semester'],
                'tempat_pembagian' => $tahunAjaran['tempat_pembagian'],
                'tanggal_pembagian' => $tahunAjaran['tanggal_pembagian'],
                'is_active' => $tahunAjaran['is_active'],
            ]);
        }
    }
}
