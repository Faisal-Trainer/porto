# Rancangan Fitur: Advanced Interaction & Performance Feel

## Tujuan Utama
Mentransformasi website dari "kumpulan halaman statis" menjadi "aplikasi digital yang hidup" melalui transisi halus, pencarian instan, dan navigasi cerdas.

## Proposed Changes

### 1. Smooth Navigation (Livewire wire:navigate)
**Lokasi:** `resources/views/navigation-menu.blade.php` & `app.blade.php`
- **Konsep:** Menghilangkan *page refresh* antar halaman.
- **Eksekusi:** Menambahkan atribut `wire:navigate` pada semua link utama di Navbar. 
- **Penyesuaian JS:** Memperbarui *Event Listeners* di `show.blade.php` agar mendengarkan `livewire:navigated` selain `DOMContentLoaded` guna memastikan fitur (TOC, Progress Bar) tetap aktif setelah pindah halaman.

### 2. Global Command Search (Cmd+K)
**Lokasi:** `resources/views/layouts/app.blade.php` & Livewire Component Baru
- **Konsep:** Akses pencarian instan dari manapun.
- **Eksekusi:** Membuat modal mengambang yang muncul saat menekan `Ctrl+K` atau `Cmd+K`. Modal ini akan memiliki kolom input pencarian yang mengarah ke hasil blog.

### 3. Sticky Social Share
**Lokasi:** `resources/views/pages/blog/show.blade.php`
- **Konsep:** Memudahkan penyebaran konten.
- **Eksekusi:** Menambahkan *fixed sidebar* (atau *bottom bar* di mobile) berisi ikon WhatsApp, LinkedIn, dan Salin Link dengan gaya desain yang selaras (*Glassmorphism*).

### 4. Scroll-Reveal Systematic
**Lokasi:** Global (`app.css` & `app.js`)
- **Konsep:** Memberikan kesan visual yang memukau saat halaman di-*scroll*.
- **Eksekusi:** Menggunakan *Intersection Observer* untuk memicu kelas `.visible` pada elemen dengan kelas `.reveal` secara otomatis dan halus.

### 5. Keyboard Navigation (Next/Prev Article)
**Lokasi:** `resources/views/pages/blog/show.blade.php`
- **Konsep:** Navigasi cepat untuk pembaca setia.
- **Eksekusi:** Script JS yang mendengarkan tombol panah kiri (kembali ke blog index) dan panah kanan (jika ada navigasi artikel selanjutnya).

## User Review Required
> [!IMPORTANT]
> Fitur **wire:navigate** sangat efisien namun bisa mengubah perilaku skrip JavaScript pihak ketiga jika ada. Saya telah merencanakan pembaruan skrip internal kita agar kompatibel. Mohon berikan persetujuan untuk memulai fase transformasi ini.
