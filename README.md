# Faisal Portfolio - Laravel 12 Web Application

Aplikasi web portofolio profesional dan blog yang dibangun dengan arsitektur modern menggunakan Laravel 12, Filament v4, dan Tailwind CSS 4.

## 🏗️ Pola Arsitektur

Aplikasi ini mengikuti pola arsitektur **MVC (Model-View-Controller)** standar Laravel dengan beberapa peningkatan modern:

1.  **Actions Pattern**: Digunakan untuk menangani logika bisnis yang spesifik, terutama dalam proses autentikasi (Fortify/Jetstream). Lihat di `app/Actions`.
2.  **Server-Driven UI (SDUI)**: Menggunakan **Filament v4** untuk panel administrasi yang cepat dan responsif, serta **Livewire 3** untuk interaktivitas sisi klien tanpa menulis banyak JavaScript.
3.  **Middleware Processing**: Dilengkapi dengan sistem persetujuan akun (`approval` middleware) dan manajemen peran (Role-based Access Control via Spatie).
4.  **SEO-First**: Implementasi sitemap dinamis, rute alias untuk optimasi kata kunci lokal (Bukittinggi), dan struktur HTML semantik.

## 🛠️ Teknologi & Versi

| Kategori | Teknologi | Versi |
| :--- | :--- | :--- |
| **Backend** | PHP | `^8.3` |
| **Framework** | Laravel | `^12.0` |
| **Admin Panel** | Filament | `^4.0` |
| **Frontend** | Livewire | `^3.0` |
| **Styling** | Tailwind CSS | `^4.0` |
| **Interaktivitas** | Alpine.js | Terpaket dalam Livewire |
| **Build Tool** | Vite | `^6.0` |
| **Database** | MySQL / SQLite | - |

## 📊 Ikhtisar Skema Database

Berikut adalah tabel-tabel utama yang digunakan dalam aplikasi:

-   **`users`**: Menyimpan data pengguna, termasuk fitur autentikasi dua faktor (2FA) dari Jetstream.
-   **`projects`**: Data item portofolio (judul, konten, slug, kategori, gambar, link).
-   **`technologies`**: Daftar teknologi yang digunakan dalam proyek (untuk integrasi di halaman portofolio).
-   **`customers`**: Data prospek/klien dari formulir kontak.
-   **`posts` & `categories`**: Sistem blog untuk artikel dan jurnal.
-   **`talent`**: Manajemen rekrutmen atau pengumpulan data talenta.
-   **`activity_log`**: Log aktivitas sistem (Spatie Activitylog).
-   **`permissions`**: Manajemen izin dan peran (Spatie Permission).

## 🚀 Cara Memulai Server Pengembangan

Ikuti langkah-langkah berikut untuk menjalankan proyek di lingkungan lokal:

1.  **Clone repositori** dan masuk ke direktori proyek.
2.  **Instal dependensi PHP**:
    ```bash
    composer install
    ```
3.  **Instal dependensi JavaScript**:
    ```bash
    npm install
    ```
4.  **Siapkan file lingkungan**:
    ```bash
    cp .env.example .env
    ```
5.  **Generate App Key**:
    ```bash
    php artisan key:generate
    ```
6.  **Jalankan migrasi database**:
    ```bash
    php artisan migrate
    ```
7.  **Jalankan server pengembangan** (menggunakan Laravel Boost atau standard):
    ```bash
    # Menggunakan script concurrently yang sudah ada di composer.json
    composer run dev
    # ATAU jalankan secara manual
    php artisan serve
    npm run dev
    ```

## ⚙️ Variabel Lingkungan (.env)

Pastikan Anda mengatur variabel berikut di file `.env` Anda:

-   `DB_DATABASE`: Nama database Anda.
-   `MAIL_USERNAME` & `MAIL_PASSWORD`: Diperlukan untuk fitur pengiriman email (kontak/notifikasi).
-   `APP_URL`: Pastikan sesuai dengan `http://localhost:8000` (atau sesuai konfigurasi server Anda).

---
*Dibuat dengan ❤️ menggunakan Laravel 12.*
