# UX & Usability Improvements Plan (Blog Index)

## Tujuan Utama
Mengimplementasikan perbaikan UX, *Usability*, dan aksesibilitas (A11y) pada halaman daftar blog berdasarkan hasil UX Audit.

## User Review Required
> [!IMPORTANT]
> Mohon tinjau rencana perubahan di bawah ini. Anda harus memberikan persetujuan ("Lanjut", "Approve", dll) sebelum AI Assistant memulai penulisan kode, sesuai prinsip **No Approval, No Code**.

## Proposed Changes

### Komponen Livewire: Blog Index

#### [MODIFY] `resources/views/livewire/blog-index.blade.php`
1. **Aksesibilitas Tombol (A11y):** 
   - Menambahkan atribut `aria-label="Hapus pencarian"` pada tombol *Clear Search* yang saat ini hanya berisi ikon.
   - Menambahkan *state* fokus visual (`focus-visible:ring-2`) pada tombol tersebut agar ramah navigasi keyboard.
2. **Indikator Loading Spesifik:** 
   - Menempatkan ikon *spinner* (*loading*) kecil di sisi kanan kotak pencarian (`<input>`) yang hanya akan muncul saat proses pencarian berlangsung (`wire:loading wire:target="search"`).
3. **Penyempurnaan Empty State:** 
   - Jika pengguna berada di suatu kategori namun tidak ada artikel, maka sistem akan menampilkan tombol *"Lihat Semua Artikel"* (`wire:click="setCategory('all')"`) agar pengguna tidak menemui jalan buntu (*Dead End*).

## Verification Plan
- **Manual Verification:** Membuka browser, menavigasi ke halaman `/blog` menggunakan tombol `Tab` (keyboard) untuk memastikan state *focus* terlihat. Mengetik di kotak pencarian untuk melihat *spinner*. Mencoba membuka kategori kosong untuk memastikan tombol "Lihat Semua Artikel" muncul dan berfungsi.
