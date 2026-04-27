# VISUAL DESIGN GUIDE (DARK MODE)

Dokumen ini berisi panduan warna, elemen visual, dan aset untuk tema gelap (Dark Mode) aplikasi berbasis filosofi **The Ethereal Nocturne**.

## 1. Palet Warna Utama & Surface Architecture
Palet ini berakar pada bayangan dalam dari spektrum violet, diselingi oleh aksen berenergi tinggi (Amber).

- **Background / Surface:** `#1e0a29` (Ungu-Hitam Gelap, bukan hitam murni)
- **Surface-container-lowest:** Latar belakang paling dalam (Base).
- **Surface-container-low / Surface:** Duduk di atas Base untuk blok konten sekunder.
- **Surface-container-high:** Menciptakan pengangkatan (*lift*) alami untuk Interactive Cards.
- **Surface-container-highest:** Digunakan dengan *opacity* 60% untuk efek *Glassmorphism*.
- **Primary (Action):** `#ddb8ff` (Vibrant Lilac)
- **Primary-container:** `#b175ec` (Digunakan sebagai *Linear Gradient* bersama Primary untuk menambah "soul")
- **Secondary (Highlight):** `#ffe2ab` (Amber) 
- **Secondary-container:** `#ffbf00` (Dicadangkan untuk tombol CTA krusial seperti "Hire Me")
- **Tertiary (Accent):** `#fabc4e` (Golden Ochre)
- **Outline-variant (Ghost Border):** Transparansi 15% jika garis pembatas mutlak diperlukan.

## 2. Tipografi
- **Display & Headline:** `Epilogue` (Soul font, gunakan `display-lg` 3.5rem dengan *tracking* ketat -0.04em, biarkan tumpang tindih dengan elemen lain).
- **Body:** `Manrope` (Logic font, memberikan keterbacaan ekstrem `body-lg` 1rem untuk WCAG AA+).
- **Labels:** `Space Grotesk` (Detail font, untuk metadata, micro-copy, dan teknikal).

## 3. Aturan Desain Inti (The Ethereal Nocturne)
- **The "No-Line" Rule:** Border murni dilarang keras. Gunakan jarak (*negative space*) sebesar 48px atau pergeseran *background* 10% *hue* untuk memisahkan hirarki.
- **The "Glass & Gradient" Rule:** Hindari kesan "flat-dark". Elemen melayang harus menggunakan *fill* `surface-container-highest` 60% dengan `backdrop-blur: 24px`.
- **Tonal Layering & Ambient Shadows:** Gunakan cahaya dan transparansi untuk ilusi kedalaman. Untuk bayangan (*dropdown* dll), gunakan bayangan hitam `#000000` *opacity* 40%, *blur* 40px-60px, dengan *spread* -5px agar bayangan tetap "tersembunyi".
- **Dilarang Hitam Murni:** Penggunaan `#000000` sebagai *background* atau *border* membunuh kesan atmosferik.

## 4. Komponen Spesifik
- **Buttons:** 
  - *Primary:* Linear gradient (`primary` ke `primary-container`), rounded `full`, teks putih, tanpa border.
  - *Secondary (Amber):* Menggunakan `secondary-container`, khusus untuk prioritas sangat tinggi.
- **Cards & Containers:** Dilarang menggunakan garis pemisah. Gunakan padding `xl` (1.5rem) minimum dan radius lengkung `xl` (1.5rem) untuk melembutkan kesan *dark-mode*.
- **Input Fields:** Saat rileks menggunakan *fill* `surface-container-low`. Saat fokus, gunakan 1px ghost border `primary` (20%) dan efek `box-shadow` menyala 5% dari warna `primary`.

---
*Dikelola oleh AI Assistant (UX Engineer / Designer) & Project Owner.*
