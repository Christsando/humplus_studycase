<div class="bg-white rounded-2xl shadow-sm border border-slate-100 overflow-hidden">
    <!-- Header -->
    <div class="bg-slate-800 text-white p-6 flex items-center justify-between">
        <div class="flex items-center gap-3">
            <a href="{{ route('dashboard') }}" class="text-white hover:text-gray-300">
                <i class="fas fa-arrow-left text-lg"></i>
            </a>

            <span class="text-xl font-bold">Formulir Konsultasi</span>
        </div>
    </div>

    <!-- Form Content -->
    <div class="p-6">
        <form id="consultationForm" class="space-y-2" method="POST" action="{{ route('formulir.confirmation') }}">
            @csrf

            <!-- Grid Layout untuk Form dan Textarea -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">

                <!-- Left Column - Form Fields -->
                <div class="space-y-4">

                    <!-- Jenis Konsultasi -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">
                            Jenis konsultasi
                        </label>
                        <select id="jenisKonsultasi" name="jenisKonsultasi"
                            class="w-full px-3 py-2 border border-gray-300 rounded-lg bg-gray-100 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            <option value="">Pilih jenis konsultasi</option>
                            <option value="Konsultasi Personal">Konsultasi Personal</option>
                            <option value="Konsultasi Bisnis">Konsultasi Bisnis</option>
                            <option value="Konsultasi Karir">Konsultasi Karir</option>
                            <option value="Konsultasi Pendidikan">Konsultasi Pendidikan</option>
                        </select>
                    </div>

                    <!-- Pilih Tanggal Konsultasi -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">
                            Pilih tanggal konsultasi
                        </label>
                        <select id="tanggalKonsultasi" name="tanggalKonsultasi"
                            class="w-full px-3 py-2 border border-gray-300 rounded-lg bg-gray-100 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            <option value="">DD / MM / YYYY</option>
                            <option value="2025-06-20">20 / 06 / 2025</option>
                            <option value="2025-06-21">21 / 06 / 2025</option>
                            <option value="2025-06-22">22 / 06 / 2025</option>
                            <option value="2025-06-23">23 / 06 / 2025</option>
                        </select>
                    </div>

                    <!-- Pilih Konsultan -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">
                            Pilih konsultan
                        </label>
                        <select id="konsultan" name="konsultan"
                            class="w-full px-3 py-2 border border-gray-300 rounded-lg bg-gray-100 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            <option value="">Pilih konsultan</option>
                            <option value="Dr. Ahmad Wijaya">Dr. Ahmad Wijaya</option>
                            <option value="Dr. Sari Indah">Dr. Sari Indah</option>
                            <option value="Dr. Budi Santoso">Dr. Budi Santoso</option>
                            <option value="Dr. Lia Permata">Dr. Lia Permata</option>
                        </select>
                    </div>

                    <!-- Jam Konsultasi -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">
                            Jam Konsultasi
                        </label>
                        <select id="jamKonsultasi" name="jamKonsultasi"
                            class="w-full px-3 py-2 border border-gray-300 rounded-lg bg-gray-100 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            <option value="">Pilih jam konsultasi</option>
                            <option value="09:00 - 10:00">09:00 - 10:00</option>
                            <option value="10:00 - 11:00">10:00 - 11:00</option>
                            <option value="11:00 - 12:00">11:00 - 12:00</option>
                            <option value="13:00 - 14:00">13:00 - 14:00</option>
                            <option value="14:00 - 15:00">14:00 - 15:00</option>
                            <option value="15:00 - 16:00">15:00 - 16:00</option>
                        </select>
                    </div>

                    <!-- Submit Button -->
                    <div class="pt-4">
                        <button type="submit"
                            class="bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-3 px-8 rounded-lg transition-colors duration-200">
                            Reserve
                        </button>
                    </div>
                </div>

                <!-- Right Column - Textarea -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">
                        Catatan Tambahan
                    </label>
                    <textarea rows="12" id="catatanTambahan" name="catatanTambahan"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg resize-none focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                        placeholder="Masukan catatan tambahan yang ingin diberikan..."></textarea>
                </div>
            </div>
        </form>
    </div>
</div>
<script>
    document.getElementById('consultationForm').addEventListener('submit', function (e) {
        const jenis = document.getElementById('jenisKonsultasi').value.trim();
        const tanggal = document.getElementById('tanggalKonsultasi').value.trim();
        const konsultan = document.getElementById('konsultan').value.trim();
        const jam = document.getElementById('jamKonsultasi').value.trim();

        if (!jenis || !tanggal || !konsultan || !jam) {
            e.preventDefault(); // Mencegah form terkirim

            Swal.fire({
                icon: 'warning',
                title: 'Form belum lengkap!',
                text: 'Semua field wajib diisi kecuali catatan tambahan.',
                confirmButtonColor: '#facc15', // warna kuning (Tailwind: yellow-400)
                confirmButtonText: 'Mengerti'
            });
        }
    });
</script>

