# VISUAL DESIGN GUIDE (LIGHT MODE)

Dokumen ini berisi panduan warna, elemen visual, dan aset untuk tema terang (Light Mode) aplikasi berbasis filosofi **The Lucid Curator**.

## 1. Palet Warna Utama & Surface Logic
Sistem warna ini menolak garis pembatas (1px border) dan menggunakan transisi warna (tonal shifts) serta kaca (glassmorphism).

- **Primary:** `#9000d4` (Warna utama untuk Display & Call to Actions)
- **Primary-container:** `#ac34f1` (Digunakan bersama Primary sebagai *Linear Gradient* 135-derajat)
- **Tertiary:** `#825100` (Amber gelap, digunakan untuk metadata, tags, scroll progress bar)
- **Surface (Base):** `#fff7fc` (Latar belakang utama yang sangat terang dengan nuansa ungu)
- **Surface-container-low:** `#feefff` (Sub-sections, membedakan Hero dan konten)
- **Surface-container-lowest:** `#ffffff` (Warna putih murni untuk *Interactive Cards*)
- **Surface-container-highest:** `#f5d9ff` (Digunakan untuk *Overlays*, Modals, atau Menu)
- **On-surface:** `#30004a` (Ungu sangat gelap, pengganti hitam murni `#000000` untuk teks agar harmoni terjaga)
- **Outline-variant (Ghost Border):** Transparansi 15% jika garis benar-benar dibutuhkan.

## 2. Tipografi
- **Display & Headlines:** `Plus Jakarta Sans` (Digunakan untuk *impact*, tracking -0.02em, kontras ukuran ekstrim `display-lg`).
- **Body & Titles:** `Inter` (Legibilitas maksimal untuk konten artikel panjang).
- **Labels & Metadata:** `Space Grotesk` (Gaya monospace-inspired untuk metadata, reading time, tags, memberikan kesan teknis).

## 3. Aturan Desain Inti (The Editorial Lens)
- **The "No-Line" Rule:** Dilarang keras menggunakan border 1px solid untuk memisahkan section. Gunakan perbedaan warna *Surface*.
- **The "Glass & Gradient" Rule:** Elemen melayang (*floating*) seperti Navbar dan Card harus menggunakan **Glassmorphism** (`backdrop-blur` 12px-20px pada *surface* transparan).
- **Tonal Layering & Ambient Shadows:** Jangan gunakan bayangan hitam murni. Gunakan bayangan dengan warna `on-surface` (`#30004a`), *blur* 32px, *offset-y* 0px, dan *opacity* 4%.
- **Intentional Asymmetry:** Biarkan judul tumpang tindih (*overlap*) dengan kontainer untuk kesan majalah editorial yang *high-end*.

## 4. Komponen Spesifik
- **Buttons:** 
  - *Primary:* Gradient fill (`primary` ke `primary-container`), teks putih, rounded `xl` (1.5rem), tanpa border.
  - *Tertiary:* Teks saja, menggunakan font `label-md` dengan warna `primary`.
- **Blog Cards (Glass Variant):** `surface-container-lowest` 80% opacity, `backdrop-blur` 16px, padding `xl`, tanpa garis pembatas.
- **Progress Indicators:** Gunakan garis 2px di atas layar dengan warna `tertiary` (`#825100`) sebagai ganti tombol "Load More" konvensional.

---
*Dikelola oleh AI Assistant (UX Engineer / Designer) & Project Owner.*
