@extends('layout.app')

@section('title', 'Human Plus Institute | Tiket')

@section('content')
    <div class="bg-gradient-to-br from-blue-50 to-cyan-50 min-h-screen">

        <!-- content -->
        <div class="container mx-auto px-6 py-8">
            <div class="bg-white rounded-2xl shadow-sm border border-slate-100 overflow-hidden">

                <!-- Header -->
                <div class="bg-slate-800 text-white p-6 flex items-center justify-between">
                    <div class="flex items-center gap-3">
                        <a href="{{ route('dashboard') }}" class="text-white hover:text-gray-300">
                            <i class="fas fa-arrow-left text-lg"></i>
                        </a>

                        <span class="text-xl font-bold">Tiket Reservasi</span>
                    </div>
                </div>

                <div class="p-4">
                    <div class="p-4 rounded-b-lg ">
                        <p class="text-sm text-gray-500">NAMA PEMESAN</p>
                        <h2 class="text-base font-bold text-slate-800 ">{{ $data['nama'] }}</h2>

                        <p class="text-sm text-gray-500 mt-2">ID BOOKING</p>
                        <h2 class="text-base font-bold text-slate-800">{{ $data['bookingId'] }}</h2>

                        <p class="text-sm text-gray-500 mt-2">KONSULTAN</p>
                        <h2 class="text-base font-bold text-slate-800">{{ $data['konsultan'] }}</h2>

                        <p class="text-sm text-gray-500 mt-2">JENIS KONSULTASI</p>
                        <h2 class="text-base font-bold text-slate-800">{{ $data['jenis'] }}</h2>

                        <p class="text-sm text-gray-500 mt-2">TANGGAL KONSULTASI</p>
                        <h2 class="text-base font-bold text-slate-800">{{ $data['tanggal'] }}</h2>

                        <p class="text-sm text-gray-500 mt-2">JAM KONSULTASI</p>
                        <h2 class="text-base font-bold text-slate-800">{{ $data['jam'] }}</h2>

                        <p class="text-sm text-gray-500 mt-2">CATATAN TAMBAHAN</p>
                        <h2 class="text-base font-bold text-slate-800">{{ $data['catatan'] }}</h2>

                        <!-- QR Code -->
                        <div class="pt-6">
                            <p class="text-sm text-gray-500">Kode QR</p>
                            <img src="https://api.qrserver.com/v1/create-qr-code/?size=160x160&data={{ $data['bookingId'] }}"
                                alt="QR Tiket" class="mt-2 rounded-md">
                            <p class="text-xs text-gray-400 mt-2 italic">
                                Tunjukkan QR ini saat sesi konsultasi dimulai. QR hanya berlaku satu kali.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
