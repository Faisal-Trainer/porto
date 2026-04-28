# Rancangan Fitur: Editorial Polish & Technical UX

## Tujuan Utama
Meningkatkan sentuhan profesional pada blog melalui fitur teknis yang memanjakan pembaca dan memperkuat identitas visual **The Lucid Curator**.

## Proposed Changes

### 1. Reading Time Estimation (Estimasi Waktu Baca)
**Lokasi:** `app/Models/Post.php` & `show.blade.php`
- **Konsep:** Memberikan ekspektasi waktu kepada pembaca.
- **Eksekusi:** Menambahkan *accessor* di model `Post` (e.g., `getReadingTimeAttribute`) yang menghitung jumlah kata dibagi 200 (rata-rata WPM). Menampilkannya di bawah judul artikel dengan ikon jam mungil.

### 2. Copy to Clipboard (Blok Kode)
**Lokasi:** `resources/views/pages/blog/show.blade.php`
- **Konsep:** Memudahkan pembaca teknis menyalin potongan kode.
- **Eksekusi:** Menggunakan script di `@push('modals')` yang mendeteksi elemen `<pre>`. Menyisipkan tombol "Copy" yang hanya muncul saat di-*hover*. Menggunakan `navigator.clipboard.writeText`.

### 3. Custom Tonal Scrollbar
**Lokasi:** `resources/css/app.css`
- **Konsep:** Menghilangkan elemen visual standar browser yang membosankan.
- **Eksekusi:** Menambahkan *utility* CSS untuk `::-webkit-scrollbar`. Menggunakan warna `--color-primary-800` untuk *thumb* dan transparansi untuk *track*.

### 4. Image Lightbox (Zoom Gambar)
**Lokasi:** `resources/views/pages/blog/show.blade.php`
- **Konsep:** Memungkinkan pembaca melihat detail gambar/aset dalam ukuran penuh.
- **Eksekusi:** Menambahkan komponen *modal* global di `@push('modals')`. Gambar di dalam `.prose` akan diberikan atribut `@click` untuk memicu *overlay* gambar.

### 5. Related Posts (Artikel Terkait)
**Lokasi:** `resources/views/pages/blog/show.blade.php`
- **Konsep:** Meningkatkan sirkulasi pengunjung antar artikel.
- **Eksekusi:** Menambahkan query di `BlogController` (atau langsung di Blade jika sederhana) untuk mengambil 3 artikel terbaru di kategori yang sama, ditampilkan di bagian bawah sebelum *footer*.

## User Review Required
> [!IMPORTANT]
> Mohon berikan persetujuan ("Lanjut", "Approve", dll) sebelum eksekusi dimulai. Paket fitur ini akan membuat blog Anda terasa seperti platform media profesional (seperti Medium atau Dev.to).
