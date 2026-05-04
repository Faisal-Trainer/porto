# Rancangan Fitur: Visual Fidelity & Design Synchronization

## Tujuan Utama
Menyeimbangkan antara visi desain di dokumentasi dengan implementasi teknis di kode untuk mencapai tingkat kemiripan desain (*fidelity*) yang sempurna dan konsisten.

## Proposed Changes

### 1. Design System Synchronization
**Lokasi:** `nexus/design/DESIGN.md` & `nexus/design/DARKDESIGN.md`
- **Konsep:** Sinkronisasi hex code antara dokumentasi dan variabel CSS.
- **Eksekusi:** Memperbarui file desain agar merujuk pada nilai yang sama dengan `--color-primary-*` dan `--color-accent-*` yang ada di `app.css`.

### 2. Z-Index Utility Definition
**Lokasi:** `resources/css/app.css`
- **Konsep:** Memastikan utility `z-200` yang dipanggil di HTML benar-benar terdaftar.
- **Eksekusi:** Menambahkan variabel `--z-index-cmd: 200;` dan kelas utility `.z-200` di dalam `@layer components`.

### 3. Refactor "No-Line" Strategy
**Lokasi:** `resources/css/app.css` & Blade Components
- **Konsep:** Menghilangkan border 1px pada elemen sesuai filosofi "The Lucid Curator".
- **Eksekusi:** 
  - Menghapus `border: 1px` pada kelas `.card`, `.porto-card`, dan `.service-card`.
  - Menggantinya dengan `box-shadow: var(--shadow-purple)` (light) atau bayangan dalam yang halus (dark).

### 4. Typography Check & Imports
**Lokasi:** `resources/views/layouts/app.blade.php`
- **Konsep:** Memastikan hirarki font sesuai speksifikasi.
- **Eksekusi:** Menambahkan impor Google Fonts untuk `Plus Jakarta Sans`, `Inter`, `Space Grotesk`, dan `Epilogue` jika belum ada. Memperbarui font-stack di CSS.

### 5. Glassmorphism Fine-Tuning
**Lokasi:** `resources/css/app.css`
- **Konsep:** Meningkatkan keterbacaan pada elemen transparan.
- **Eksekusi:** Menyesuaikan `backdrop-blur` dari 12px ke 20px pada Navbar dan Modal untuk efek "kaca buram" yang lebih premium.

## User Review Required
> [!IMPORTANT]
> Penghapusan border pada kartu mungkin akan mengubah sedikit tampilan yang sudah biasa Anda lihat. Saya akan menggantinya dengan efek bayangan yang memberikan kedalaman lebih baik. Mohon persetujuan untuk melakukan perubahan visual ini.
