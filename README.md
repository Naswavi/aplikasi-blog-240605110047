# Aplikasi Blog Laravel

## Identitas Mahasiswa

* Nama: Naswa Vifda Zalianti
* NIM: 240605110047

## Deskripsi Aplikasi

Aplikasi Blog Laravel merupakan sistem manajemen konten (CMS) yang digunakan untuk mengelola artikel, penulis, dan kategori artikel. Aplikasi ini memiliki dua jenis halaman, yaitu:

1. Halaman Administrator (CMS)

   * Login dan Logout
   * Kelola Penulis (CRUD)
   * Kelola Kategori Artikel (CRUD)
   * Kelola Artikel (CRUD)

2. Halaman Pengunjung

   * Menampilkan 5 artikel terbaru
   * Menampilkan daftar kategori artikel
   * Filter artikel berdasarkan kategori
   * Menampilkan detail artikel
   * Menampilkan artikel terkait berdasarkan kategori yang sama

Aplikasi dibangun menggunakan Framework Laravel dan database MySQL sesuai ketentuan UAS Pemrograman Web.

## Langkah Menjalankan Aplikasi

1. Clone repository

   git clone https://github.com/Naswavi/aplikasi-blog-240605110047.git

2. Masuk ke folder project

   cd aplikasi-blog-240605110047

3. Install dependency

   composer install

4. Salin file konfigurasi

   cp .env.example .env

5. Generate application key

   php artisan key:generate

6. Atur konfigurasi database pada file .env

7. Jalankan migrasi database (jika diperlukan)

   php artisan migrate

8. Jalankan aplikasi

   php artisan serve

9. Buka browser

   http://localhost:8000

## Video Demonstrasi

Link YouTube: https://youtu.be/DOEPM-SznEo 

