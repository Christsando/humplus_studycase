<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JadwalKonsultanSeeder extends Seeder
{
    public function run()
    {
        $today = now()->toDateString();

        DB::table('jadwal_konsultans')->insert([
            [
                'konsultan_id' => 1,
                'tanggal' => $today,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'konsultan_id' => 2,
                'tanggal' => $today,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

