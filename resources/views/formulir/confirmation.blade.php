@extends('layout.app')

@section('title', 'Human Plus Institute | Formulir')

@section('content')
    <div class="bg-gradient-to-br from-blue-50 to-cyan-50 min-h-screen">

        <!-- content -->
        <div class="container mx-auto px-6 py-8">
            <div class="bg-white rounded-2xl shadow-sm border border-slate-100 overflow-hidden">

                <!-- Header -->
                <div class="bg-slate-800 text-white p-6 flex items-center justify-between">
                    <span class="text-xl font-bold">Detail Pesanan</span>
                </div>

                <!-- Form Content -->
                <div class="p-2">
                    <div class="p-4 rounded-b-lg">
                        <p class="text-sm text-gray-500">NAMA PEMESAN</p>
                        <h2 class="text-base font-bold text-slate-800">{{ $data['nama'] }}</h2>

                        <p class="text-sm text-gray-500 mt-4">ID BOOKING</p>
                        <h2 class="text-base font-bold text-slate-800">{{ $data['bookingId'] }}</h2>

                        <p class="text-sm text-gray-500 mt-4">KONSULTAN</p>
                        <h2 class="text-base font-bold text-slate-800">{{ $data['konsultan'] }}</h2>

                        <p class="text-sm text-gray-500 mt-4">JENIS KONSULTASI</p>
                        <h2 class="text-base font-bold text-slate-800">{{ $data['jenis'] }}</h2>

                        <p class="text-sm text-gray-500 mt-4">TANGGAL KONSULTASI</p>
                        <h2 class="text-base font-bold text-slate-800">{{ $data['tanggal'] }}</h2>

                        <p class="text-sm text-gray-500 mt-4">CATATAN TAMBAHAN PEMESAN</p>
                        <h2 class="text-base font-bold text-slate-800">{{ $data['catatan'] }}</h2>

                        <p class="text-sm text-gray-500 mt-4">JAM KONSULTASI</p>
                        <h2 class="text-base font-bold text-slate-800">{{ $data['jam'] }}</h2>

                        <!-- Buttons -->
                        <div class="flex justify-end gap-4 pt-6">
                            <a href="javascript:history.back()"
                                class="font-bold border border-slate-400 text-slate-700 px-6 py-2 rounded-md hover:bg-slate-100 transition">
                                Batal
                            </a>
                            <form id="confirmationForm" 
                            action="{{ route('formulir.submitConfirmation') }}" 
                            method="POST" 
                            class="font-bold bg-yellow-500 hover:bg-yellow-600 text-white px-6 py-2 rounded-md transition">
                                @csrf
                                <button type="button" id="confirmBtn" class="btn btn-success" onclick="konfirmasiPopup()">
                                Konfirmasi
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('confirmBtn').addEventListener('click', function () {
        Swal.fire({
            icon: 'success',
            title: 'Reservasi Berhasil!',
            text: 'Tiket reservasi telah dibuat. Anda akan diarahkan ke halaman tiket.',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            willClose: () => {
                // ⬇️ Submit sebagai POST, bukan redirect GET
                document.getElementById('confirmationForm').submit();
            }
        });
    });
    </script>
@endsection
