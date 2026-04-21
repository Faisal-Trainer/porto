# Web App Upgrade to Masterpiece
Rencana ini menjabarkan pemutakhiran portofolio web aplikasi Anda untuk berfokus pada **peningkatan lead (klien masuk)** dan **mengokohkan identitas desain yang *premium***. Elevasi fitur ini akan mentransformasi *website* Anda dari sekadar galeri/etalase menjadi mesin konversi otomatis.

## User Review Required
> [!IMPORTANT]
> Mohon tinjau semua rencana penambahan di bawah ini karena mencakup pembuatan skema bisnis (harga, layanan pelanggan) dan modifikasi database (*migration*). Apakah Anda ingin kita mengeksekusi SEMUA fase ini secara bertahap, atau Anda ingin memprioritaskan Fase tertentu (seperti WhatsApp/Pricing dulu)?

## Proposed Changes

### Phase 1: Conversion & Lead Generation Boost

Pembaruan yang ditujukan untuk mempercepat dan mempermudah klien potensial merekrut atau bekerjasama dengan Anda.

---
#### [NEW] `resources/views/components/floating-whatsapp.blade.php`
- Menambahkan tombol WhatsApp statis (*sticky*) di sudut kanan bawah setiap halaman utama (Home, Service, Portfolio).
- Disematkan ke dalam layout utama agar pengunjung selalu berada "1 klik dari menghubungi Faisal".

#### [MODIFY] `resources/views/pages/service.blade.php`
- **Pricing Section**: Menambahkan tabel perbandingan paket layanan (Misal: *Paket Starter, E-Commerce, Custom Web*). Ini memfilter klien dan menetapkan standar ekspektasi anggaran (*budgeting*).
- **FAQ Section**: Menambahkan bagian akordion untuk kumpulan pertanyaan (FAQ) beserta integrasi Schema JSON-LD `FAQPage` agar FAQ bisa muncul secara struktur di hasil pencarian Google (SEO boost!).

### Phase 2: UX & Portfolio Polish (Kepercayaan Klien)

Peningkatan interaktivitas yang menunjukkan kapasitas teknis (Skill Level) Anda sebagai *Web Developer*.

---
#### [MODIFY] `database/migrations/xxxx_xx_xx_create_projects_table.php` (Jika dibutuhkan)
#### [MODIFY] `resources/views/pages/portfolio/show.blade.php` (atau sejenisnya)
- Mengembangkan halaman detail Portofolio (seperti _Warung Siyas_ atau _Ank Parfume_) agar menjadi **Case Study**. 
- Menambahkan seksi *"Masalah yang Dihadapi"*, *"Solusi Teknologi"*, dan *"Hasil (Impact)"*. Tidak sekadar screenshot, melainkan narasi penyelesaian masalah.

#### [MODIFY] `resources/views/pages/portfolio.blade.php` & `resources/views/pages/blog/index.blade.php`
- Menerapkan fitur **Live Search / Kategori Instant** berbasis **Livewire**. Hal ini membuat pencarian karya dan artikel menjadi tanpa jeda (*zero refresh loading*).

### Phase 3: Engagement & Backend Maintenance

Sistem otomasi agar Anda tidak sepenuhnya bergantung pada pembaruan manual.

---
#### [NEW] `resources/views/components/newsletter-subscribe.blade.php`
- Mengemas ajakan *subscribe email* yang diletakkan di akhir artikel blog untuk membangun "*email list*" audiens Anda.

#### [MODIFY] `app/Filament/Resources/...` (Filament Admin)
- Rekomendasi tambahan: *Invoice / Quotation System*. Karena Anda adalah konsultan dan *freelancer*, web ini bisa menjadi *hub* untuk membuat dokumen penagihan dan men-generate-nya menjadi PDF.

## Open Questions

> [!WARNING]
> 1. Terkait daftar harga (*Pricing Packages*), apakah Anda sudah memiliki struktur harga standar? Ataukah kita gunakan teks *dummy* yang nanti Anda sesuaikan sendiri?
> 2. Untuk fitur *Live Search* dengan Livewire, apakah proyek ini sudah me-load *assets* Livewire di *base layout* Anda?
> 3. Fase manakah yang terasa paling mendesak/urgen untuk dieksekusi hari ini?

## Verification Plan

### Manual Verification
- Menjalankan `php artisan serve` dan `npm run dev` untuk mengecek perenderan komponen statis (*Pricing, FAQ, Floating Button*).
- Memastikan responsivitas tabel/kartu layanan di layar gawai (*mobile phone*).
- Verifikasi rute URL WhatsApp memastikan skrip URL sudah diformat dengan benar (nomor HP dan pesan prasetel).

### Automated Tests
- Menulis Unit/Feature Tests (jika mengeksekusi integrasi *database* baru seperti berlangganan _Newsletter_).
