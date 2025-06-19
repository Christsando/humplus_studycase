<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class ReservasiSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('reservasis')->insert([
            [
                'nama' => 'Anderson Simanjuntak',
                'booking_id' => Str::uuid(),
                'konsultan' => 'Dr. Ahmad Wijaya',
                'jenis_konsultasi' => 'Konsultasi Karir',
                'tanggal' => now()->subDays(5)->toDateString(),
                'jam' => '09:00 - 10:00',
                'catatan' => 'Diskusi peluang kerja.',
                'status' => 'done',
                'created_at' => now()->subDays(5),
                'updated_at' => now()->subDays(5),
            ],
            [
                'nama' => 'Anderson Simanjuntak',
                'booking_id' => Str::uuid(),
                'konsultan' => 'Dr. Lia Permata',
                'jenis_konsultasi' => 'Konsultasi Pendidikan',
                'tanggal' => now()->subDays(2)->toDateString(),
                'jam' => '13:00 - 14:00',
                'catatan' => 'Rencana studi lanjut.',
                'status' => 'done',
                'created_at' => now()->subDays(2),
                'updated_at' => now()->subDays(2),
            ]
        ]);
    }
}
