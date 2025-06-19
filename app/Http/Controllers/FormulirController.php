<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class FormulirController extends Controller
{
    public function confirmation(Request $request)
    {
        $validated = $request->validate([
            'jenisKonsultasi' => 'required',
            'tanggalKonsultasi' => 'required',
            'konsultan' => 'required',
            'jamKonsultasi' => 'required',
        ]);

        $data = [
            'nama' => auth()->user()->name ?? 'Anderson Peterson',
            'jenis' => $request->jenisKonsultasi,
            'tanggal' => $request->tanggalKonsultasi,
            'konsultan' => $request->konsultan,
            'jam' => $request->jamKonsultasi,
            'catatan' => $request->catatanTambahan ?? '-',
            'bookingId' => 'ASOM-' . strtoupper(Str::random(4)) . '-' . strtoupper(Str::random(4)) . '-' . strtoupper(Str::random(4)),
        ];

        session(['last_reservation' => $data]);
        
        return view('formulir.confirmation', compact('data'));
    }

    public function submitConfirmation(Request $request)
    {
        $data = session('last_reservation'); // Ambil dari session yang diset di confirmation()

        // return redirect()->route('dashboard')
        //     ->with('success', 'Konsultasi berhasil dikonfirmasi.')
        //     ->with('jadwal', $data); // <- Ini penting!

        return redirect()->route('formulir.ticket', ['id' => $data['bookingId']]);

    }

    public function showTicket($id)
    {
        $data = session('last_reservation');

        if (!$data || !is_array($data) || !isset($data['bookingId']) || $data['bookingId'] != $id) {
            return redirect()->route('dashboard');
        }

        // Ambil semua jadwal sebelumnya dari session
        $jadwal = session('jadwal', []);

        // Jika $jadwal adalah satu item jadwal (bukan array of array), ubah jadi array of jadwal
        if (is_array($jadwal) && isset($jadwal['bookingId'])) {
            $jadwal = [$jadwal];
        } elseif (!is_array($jadwal)) {
            $jadwal = [];
        }

        // Cek apakah bookingId yang sama sudah ada
        $exists = collect($jadwal)->contains(function ($item) use ($data) {
            return is_array($item) && isset($item['bookingId']) && $item['bookingId'] === $data['bookingId'];
        });

        if (!$exists) {
            $jadwal[] = $data;
            session(['jadwal' => $jadwal]);
        }

        return view('formulir.ticket', compact('data'));
    }

}