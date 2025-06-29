<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservasi extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'booking_id',
        'konsultan',
        'jenis_konsultasi',
        'tanggal',
        'jam',
        'catatan',
        'status',
    ];
}
