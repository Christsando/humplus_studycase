@extends('layout.app')

@section('title', 'Human Plus Institute | Dashboard')

@section('content')
    <div class="bg-gradient-to-br from-blue-50 to-cyan-50 min-h-screen">
        <!-- Main Content -->
        <div class="container mx-auto px-6 py-8">
            <!-- Greeting -->
            <div class="mb-6">
                <h1 class="text-3xl font-bold text-slate-800">
                    Hi, Anderson <span class="inline-block animate-bounce">👋</span>
                </h1>
                <p class="text-slate-600">Lagi butuh konsultasi apa Anderson?</p>
            </div>

            <!-- Dashboard Cards -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 ">


                <!-- Schedule Consultation Card -->
                <div class="lg:col-span-2">
                    <div class="bg-white rounded-2xl shadow-sm border border-slate-100 overflow-hidden h-96">

                        <!-- Header -->
                        <div class="bg-slate-800 text-white p-6 flex items-center justify-between">
                            <span class="text-xl font-bold">Jadwal Konsultasi</span>
                            <button
                                class="w-7 h-7 bg-white bg-opacity-20 rounded-full flex items-center justify-center hover:bg-opacity-30 transition-all">
                                <a href="{{ route('formulir') }}" class="text-white hover:text-gray-300">
                                    <i class="fas fa-plus text-sm"></i>
                                </a>
                            </button>
                        </div>

                        <!-- Content -->
                        <div class="px-6 py-4 overflow-y-auto" style="max-height: calc(100% - 84px);">

                            @php
                                $jadwalList = session('jadwal');
                                if (is_array($jadwalList) && isset($jadwalList[0])) {
                                    // Bentuk array of jadwal
                                    $list = $jadwalList;
                                } elseif (is_array($jadwalList) && isset($jadwalList['tanggal'])) {
                                    // Bentuk satu data jadwal
                                    $list = [$jadwalList];
                                } else {
                                    $list = [];
                                }
                            @endphp

                            @if (count($list))
                                <!-- Modal -->
                                <div x-data="{ showModal: false, selected: {} }" class="flex flex-col space-y-4 overflow-y-auto">

                                    @foreach ($list as $item)
                                        <div class="bg-slate-50 p-4 rounded-lg shadow cursor-pointer hover:bg-slate-100 transition"
                                            @click="selected = {{ Illuminate\Support\Js::from($item) }}; showModal = true">
                                            <div class="flex justify-between">
                                                <div>
                                                    <p class="text-sm text-gray-500">Tanggal</p>
                                                    <p class="text-base font-bold text-slate-800">{{ $item['tanggal'] }}
                                                    </p>
                                                </div>
                                                <div>
                                                    <p class="text-sm text-gray-500">Jam</p>
                                                    <p class="text-base font-bold text-slate-800">{{ $item['jam'] }}
                                                    </p>
                                                </div>
                                            </div>
                                            <hr class="my-3 border-gray-300" />
                                            <div class="space-y-2">
                                                <div>
                                                    <p class="text-sm text-gray-500">Jenis Konsultasi</p>
                                                    <p class="text-base font-semibold text-slate-800">
                                                        {{ $item['jenis'] ?? '-' }}</p>
                                                </div>
                                                <div>
                                                    <p class="text-sm text-gray-500">Konsultan</p>
                                                    <p class="text-base font-semibold text-slate-800">
                                                        {{ $item['konsultan'] }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                    <div x-show="showModal"
                                        class="fixed inset-0 bg-black bg-opacity-40 flex items-center justify-center z-50">
                                        <div @click.away="showModal = false"
                                            class="bg-white p-6 rounded-lg shadow-lg w-[90%] max-w-md transition">
                                            <h2 class="text-xl font-bold text-slate-800 mb-4">Detail Janji Temu</h2>

                                            <div class="space-y-2 text-sm text-slate-700">
                                                <div>
                                                    <p class="text-gray-500">Tanggal</p>
                                                    <p x-text="selected.tanggal" class="font-semibold"></p>
                                                </div>
                                                <div>
                                                    <p class="text-gray-500">Jam</p>
                                                    <p x-text="selected.jam" class="font-semibold"></p>
                                                </div>
                                                <div>
                                                    <p class="text-gray-500">Jenis Konsultasi</p>
                                                    <p x-text="selected.jenis" class="font-semibold"></p>
                                                </div>
                                                <div>
                                                    <p class="text-gray-500">Konsultan</p>
                                                    <p x-text="selected.konsultan" class="font-semibold"></p>
                                                </div>
                                                <div>
                                                    <p class="text-gray-500">Catatan Tambahan</p>
                                                    <p x-text="selected.catatan || '-'" class="font-semibold"></p>
                                                </div>
                                                <!-- QR Code -->
                                                <div class="pt-6 text-center">
                                                    <p class="text-sm text-gray-500">Kode QR</p>
                                                    <template x-if="selected.bookingId">
                                                        <img :src="`https://api.qrserver.com/v1/create-qr-code/?size=160x160&data=${selected.bookingId}`"
                                                            alt="QR Tiket" class="mt-2 rounded-md mx-auto" />
                                                    </template>
                                                    <p class="text-xs text-gray-400 mt-2 italic">
                                                        Tunjukkan QR ini saat sesi konsultasi dimulai. QR hanya berlaku satu
                                                        kali.
                                                    </p>
                                                </div>

                                            </div>

                                            <div class="flex justify-end mt-6">
                                                <button @click="showModal = false"
                                                    class="px-4 py-2 text-sm font-bold bg-slate-700 text-white rounded hover:bg-slate-600">
                                                    Tutup
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @else
                                <div
                                    class="flex flex-col justify-center items-center text-center py-12 text-slate-400 text-lg min-h-[208px]">
                                    <p>Anda belum membuat</p>
                                    <p>janji temu</p>
                                </div>
                            @endif
                        </div>

                    </div>
                </div>

                <!-- Consultant List Card -->
                <div class="lg:col-span-1">
                    <div class="bg-white rounded-2xl shadow-sm border border-slate-100 overflow-hidden h-96">
                        <!-- Header -->
                        <div class="bg-slate-800 text-white p-6 flex items-center justify-between">
                            <span class="text-xl font-bold">Konsultan Hari Ini</span>
                        </div>

                        <div class="p-6 space-y-4">
                            @forelse ($konsultansHariIni as $konsultan)
                                <div class="flex items-center space-x-3 p-3 hover:bg-slate-50 rounded-lg transition-colors">
                                    <div
                                        class="w-10 h-10 bg-gradient-to-br {{ $konsultan['warna'] }} rounded-full flex items-center justify-center text-white font-semibold">
                                        {{ $konsultan['inisial'] }}
                                    </div>
                                    <div>
                                        <div class="font-medium text-slate-800">{{ $konsultan['nama'] }}</div>
                                        <div class="text-sm text-slate-500">{{ $konsultan['spesialisasi'] }}</div>
                                    </div>
                                </div>
                            @empty
                                <p class="text-sm text-gray-500">Tidak ada konsultan hari ini.</p>
                            @endforelse
                        </div>
                    </div>
                </div>

                <!-- Consultation History Card -->
                <div class="lg:col-span-3">
                    <div class="bg-white rounded-2xl shadow-sm border border-slate-100 overflow-hidden min-h-[288px]">
                        <!-- Header -->
                        <div class="bg-slate-800 text-white p-6 flex items-center justify-between">
                            <span class="text-xl font-bold">History Konsultasi</span>
                        </div>

                        <div class="text-center py-16"style="height: calc(100% - 84px);">
                            <div class="text-slate-400 text-lg">
                                Belum ada history
                            </div>
                            <div class="text-slate-400 text-lg">
                                janji
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
