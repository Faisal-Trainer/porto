# Rancangan Fitur: Reading Progress Bar

## Tujuan Utama
Menambahkan fitur *Reading Progress Bar* (Bilah Kemajuan Membaca) pada halaman detail artikel blog (`show.blade.php`) untuk memberikan *feedback* visual kepada pengguna mengenai seberapa jauh mereka telah membaca artikel.

## Analisis Masalah Navbar
Berdasarkan keluhan *User* bahwa penambahan *progress bar* sebelumnya merusak struktur `navigation-menu.blade.php`, hal ini biasanya terjadi karena *progress bar* dimasukkan ke dalam hierarki DOM Navbar yang menggunakan `flexbox` atau `grid`, sehingga menggeser elemen (*Logo* atau *Menu*).

**Solusi:**
Kita **tidak akan menyentuh** file `navigation-menu.blade.php`.
*Progress bar* akan diinjeksi murni hanya pada halaman `show.blade.php` menggunakan direktif `@push('modals')` (yang di-*render* di bagian paling bawah `app.blade.php` tepat sebelum penutup `</body>`).
Dengan menggunakan *class* `fixed top-0 left-0 w-full z-[100] pointer-events-none`, *progress bar* akan mengambang (*floating*) di atas Navbar tanpa mempengaruhi *layout* (*padding*, *margin*, atau *flexbox*) dari Navbar sedikit pun.

## User Review Required
> [!IMPORTANT]
> Mohon tinjau rencana perubahan di bawah ini. Anda harus memberikan persetujuan ("Lanjut", "Approve", dll) sebelum AI Assistant memulai penulisan kode, sesuai prinsip **No Approval, No Code**.

## Proposed Changes

### [MODIFY] `resources/views/pages/blog/show.blade.php`
Menambahkan blok kode berikut di bagian paling atas atau bawah dalam `<x-app-layout>`:
```blade
@push('modals')
    <div id="reading-progress-container" class="fixed top-0 left-0 w-full h-1.5 bg-transparent z-[100] pointer-events-none">
        <div id="reading-progress-bar" class="h-full bg-linear-to-r from-(--color-primary-400) to-(--color-primary-600) w-0 rounded-r-full shadow-[0_0_8px_rgba(147,51,234,0.8)] transition-all duration-150 ease-out"></div>
    </div>

    <script>
        document.addEventListener('scroll', function() {
            const scrollTop = document.documentElement.scrollTop || document.body.scrollTop;
            const scrollHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight;
            const scrollPercentage = (scrollTop / scrollHeight) * 100;
            const progressBar = document.getElementById('reading-progress-bar');
            
            if (progressBar) {
                progressBar.style.width = scrollPercentage + '%';
            }
        }, { passive: true });
    </script>
@endpush
```

## Verification Plan
1. Buka halaman detail artikel manapun di browser (contoh: `/blog/judul-artikel`).
2. Perhatikan bagian paling atas layar. Seharusnya ada garis tipis 1.5px yang muncul dan bergerak ke kanan saat Anda *scroll* ke bawah.
3. Periksa tampilan Navbar, pastikan tidak ada *layout* yang bergeser, rusak, atau terdorong ke bawah.
