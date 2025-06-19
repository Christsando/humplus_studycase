<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JadwalKonsultan extends Model
{
    protected $fillable = ['konsultan_id', 'tanggal'];

    public function konsultan()
    {
        return $this->belongsTo(Konsultan::class);
    }
}
