<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\JadwalKonsultan; 
use App\Models\Reservasi;

class DashboardController extends Controller 
    {
        public function index()
        {
            $today = now()->toDateString();

            $konsultansHariIni = JadwalKonsultan::with('konsultan')
                ->where('tanggal', $today)
                ->get()
                ->map(function ($jadwal) {
                    return [
                        'nama' => $jadwal->konsultan->nama,
                        'inisial' => $jadwal->konsultan->inisial,
                        'spesialisasi' => $jadwal->konsultan->spesialisasi,
                        'warna' => $jadwal->konsultan->warna_gradiasi,
                    ];
                });

            $history = Reservasi::orderByDesc('created_at')->get();

            return view('dashboard', [
                'konsultansHariIni' => $konsultansHariIni,
                'history' => $history,
            ]);
        }
    }