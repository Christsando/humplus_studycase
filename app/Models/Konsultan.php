<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Konsultan extends Model
{
    protected $fillable = ['nama', 'inisial', 'spesialisasi', 'warna_gradiasi'];

    public function jadwal()
    {
        return $this->hasMany(JadwalKonsultan::class);
    }
}

