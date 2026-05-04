# Comprehensive UX Improvements Plan

## Tujuan Utama
Merencanakan dan mengimplementasikan semua rekomendasi fitur UX (*User Experience*) tahap lanjut untuk membuat web terasa lebih *premium*, responsif, dan mudah digunakan (inklusif).

## User Review Required
> [!IMPORTANT]
> Karena rencana ini memuat banyak modifikasi di berbagai file, mohon tinjau secara seksama. Jika ada fitur yang menurut Anda belum perlu atau penempatannya kurang pas (misalnya, takut merusak Navbar lagi), beri tahu saya. Saya tidak akan menulis kode tanpa izin Anda (No Approval, No Code).

## Proposed Changes

### 1. Reading Progress Bar (Aman dari Navbar)
**File:** `resources/views/pages/blog/show.blade.php`
- **Konsep:** Kita menggunakan metode *DOM Isolation* dengan menyuntikkan elemen via `@push('modals')`.
- **Eksekusi:** Membuat `div` dengan `fixed top-0 left-0 z-[100]`. Komponen ini dijamin 100% tidak akan menggeser atau merusak elemen Navbar karena konteksnya di luar kerangka utama.

### 2. Floating "Back to Top" Button
**File:** `resources/views/layouts/app.blade.php` (Berlaku Global)
- **Konsep:** Memudahkan pengguna kembali ke atas setelah membaca halaman/artikel panjang.
- **Eksekusi:** Menambahkan komponen tombol bulat melayang di pojok kanan bawah. Menggunakan logika bawaan `Alpine.js` (`x-data="{ show: false }" @scroll.window="show = (window.pageYOffset > 400)"`) agar tombol hanya muncul ketika layar sudah ter-*scroll* cukup jauh.

### 3. Sticky Table of Contents (Daftar Isi)
**File:** `resources/views/pages/blog/show.blade.php`
- **Konsep:** Memudahkan pembaca melihat kerangka artikel dan melompat ke sub-judul tertentu.
- **Eksekusi:** Memodifikasi kontainer artikel. Di layar lebar (*Desktop*), *layout* akan dibagi menjadi 2 kolom. Kolom utama (lebar) untuk konten, dan kolom samping (sempit) untuk wadah *Daftar Isi* yang akan mengambang (`sticky top-32`) saat di-*scroll*. Di layar *Mobile*, Daftar Isi akan disembunyikan atau diubah menjadi menu rentang (*accordion*) biasa.

### 4. Skeleton Loading (Livewire)
**File:** `resources/views/livewire/blog-index.blade.php`
- **Konsep:** Meningkatkan persepsi kecepatan (*Perceived Performance*).
- **Eksekusi:** Saat Livewire sedang memuat pencarian atau pergantian kategori, kita tidak lagi hanya mem-*blur* *grid* artikel, melainkan merendernya ulang menjadi kotak abu-abu beranimasi `animate-pulse` (Skeleton).

### 5. Dark Mode Toggle (Mode Gelap)
**File:** `resources/views/navigation-menu.blade.php` & Konfigurasi *Tailwind*
- **Konsep:** Fitur aksesibilitas tingkat tinggi untuk membaca di malam hari.
- **Eksekusi:** Menambahkan tombol bulan/matahari mungil di Navbar (kemungkinan diletakkan di samping tombol "Contact" atau "Login" agar tidak merusak urutan menu tengah). Tombol ini akan memicu *class* `dark` pada tag `<html>`.

## Verification Plan
1. **Pengecekan Layout:** Memastikan Navbar tetap tidak rusak ketika semua fitur ini berjalan berdampingan.
2. **Pengecekan Fungsi Alpine.js:** Tombol *Back to Top* harus bereaksi responsif dengan ketukan *scroll*.
3. **Pengecekan Livewire:** Perilaku *skeleton loading* berjalan mulus tanpa mengorbankan kecepatan nyata.
