# Implementation Plan: Phase 7 — UI Refinement & Visual Polish

Berdasarkan audit visual terakhir (Screenshot "Layanan Kami"), ditemukan inkonsistensi pada kontras section dan logika background mode gelap.

## User Review Required

> [!IMPORTANT]
> - **Background Per Page:** Saya akan mengubah beberapa section yang menggunakan warna solid (seperti `bg-primary-400` di Home) menjadi menggunakan variabel dinamis agar tetap terlihat premium di mode gelap.
> - **Navbar Opacity:** Opasitas Navbar akan ditingkatkan sedikit agar konten di belakangnya (seperti social icons) tidak terlalu mengganggu teks menu.

## Proposed Changes

### 1. Global Layout & Logic

#### [MODIFY] [app.blade.php](file:///c:/xampp/htdocs/portofolio/resources/views/layouts/app.blade.php)
- Menghapus class `bg-(--color-bg-light)` yang bersifat statis pada tag `<body>`.
- Memindahkan pengaturan background utama ke dalam file CSS agar beralih otomatis saat class `.dark` aktif.

### 2. Styling Enhancements

#### [MODIFY] [app.css](file:///c:/xampp/htdocs/portofolio/resources/css/app.css)
- **Navbar:** Mengubah `background: rgba(255, 255, 255, 0.05)` menjadi `rgba(var(--color-navbar-rgb), 0.7)` untuk visibilitas yang lebih baik.
- **Card Neutrality:** Memastikan class `.card` memiliki background yang adaptif (tidak terlalu gelap di background ungu terang).
- **Global Body:** Menambahkan rule `body { background-color: var(--color-bg-light); }` dan `.dark body { background-color: var(--color-bg-dark); }`.

### 3. Page Specific Refinement

#### [MODIFY] [home.blade.php](file:///c:/xampp/htdocs/portofolio/resources/views/pages/home.blade.php)
- Mengubah background section **Layanan Kami** dari ungu solid `bg-(--color-primary-400)` menjadi transisi halus `bg-(--color-primary-50)` atau gradient yang lebih tenang.
- Memastikan teks judul tetap kontras.

#### [MODIFY] [service.blade.php](file:///c:/xampp/htdocs/portofolio/resources/views/pages/service.blade.php)
- Menyelaraskan desain kartu layanan dengan perubahan global.

## Verification Plan

### Manual Verification
1. **Toggle Dark Mode:** Pastikan seluruh background halaman (bukan hanya komponen) berubah menjadi gelap.
2. **Scroll Check:** Pastikan teks Navbar tetap terbaca jelas saat melewati elemen berwarna di Hero section.
3. **Contrast Check:** Pastikan kartu di section "Layanan Kami" memiliki kontras yang nyaman di mata.
