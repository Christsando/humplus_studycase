<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KonsultanSeeder extends Seeder
{
    public function run()
    {
        DB::table('konsultans')->insert([
            [
                'nama' => 'Andrea Simanjuntak Georgia S. Ds.',
                'inisial' => 'AG',
                'spesialisasi' => 'Konsultan Personal',
                'warna_gradiasi' => 'from-blue-500 to-purple-600',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Agus Peterpant Susanto S. Ds.',
                'inisial' => 'AP',
                'spesialisasi' => 'Konsultan Design Pemasaran',
                'warna_gradiasi' => 'from-green-500 to-teal-600',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Peter Grifin Patrick S.E',
                'inisial' => 'PG',
                'spesialisasi' => 'Konsultan Bisnis',
                'warna_gradiasi' => 'from-orange-500 to-red-600',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Ariya Saputra Tanatos S.E',
                'inisial' => 'AS',
                'spesialisasi' => 'Konsultan Keuangan',
                'warna_gradiasi' => 'from-orange-500 to-red-600',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
