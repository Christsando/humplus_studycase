# Human Plus Institute - Sistem Konsultasi

Ini adalah aplikasi berbasis Laravel untuk sistem pemesanan dan manajemen jadwal konsultasi di Human Plus Institute. Pengguna dapat melakukan reservasi konsultasi, melihat riwayat konsultasi, dan melihat detail pemesanan.

## Fitur Utama

- Formulir pemesanan konsultasi
- Konfirmasi dan QR Code tiket
- Riwayat konsultasi dengan detail
- List konsultan aktif
- Validasi form dan notifikasi SweetAlert

## Teknologi yang Digunakan

- Laravel 10.x
- Tailwind CSS
- Alpine.js
- SweetAlert2
- Font Awesome 6
- MySQL

## Cara Menjalankan Proyek
- composer install
- npm install
- npm run build

## Konfigurasi DB
- DB_DATABASE=humplus
- DB_USERNAME=root
- DB_PASSWORD=

## Memulai program
- php artisan key:generate
- php artisan migrate
- php artisan db:seed
