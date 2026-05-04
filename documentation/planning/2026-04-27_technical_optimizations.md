# Implementation Plan: Technical Optimizations

Berdasarkan hasil audit Senior Web Engineer, berikut adalah rencana optimasi untuk meningkatkan skalabilitas dan reliabilitas aplikasi.

## 1. Background Jobs (Queue Implementation)
**Tujuan:** Mempercepat respon user saat mengisi form pendaftaran/kontak.
- **Task:** Ubah pengiriman notifikasi dan email di `OtpController` dan `NotifyAdmins` menjadi asinkron.
- **Action:** 
  - Implementasikan interface `ShouldQueue` pada kelas Mailable (`NewContactMail`, `NewTalentMail`).
  - Gunakan `Queue::push` atau pastikan database driver queue dikonfigurasi (`.env`).

## 2. API Versioning & Documentation
**Tujuan:** Mempersiapkan integrasi sistem eksternal yang rapi.
- **Task:** Restrukturisasi rute `/mcp`.
- **Action:** Pindahkan rute MCP ke dalam prefix `/api/v1/` dan buatkan dokumentasi endpoint yang jelas di folder `docs`.

## 3. Automated Testing Suite
**Tujuan:** Mencegah bug regresi pada fitur-fitur kritis.
- **Task:** Buat unit/feature tests menggunakan Pest atau PHPUnit.
- **Focus Areas:**
  - `OtpVerificationTest`: Menguji alur dari pengisian form hingga verifikasi berhasil.
  - `UserActivationMiddlewareTest`: Memastikan user non-aktif diarahkan ke halaman approval dengan benar.
  - `RateLimitTest`: Memastikan throttle bekerja sesuai konfigurasi.

## 4. Enhanced Logging
**Tujuan:** Mempermudah debugging pada lingkungan produksi.
- **Task:** Tambahkan log kontekstual pada alur OTP yang gagal.
- **Action:** Gunakan `Log::warning()` di `OtpController` saat OTP salah dimasukkan, lengkap dengan informasi email/IP (tanpa data sensitif).

---
*Rencana ini disusun untuk meningkatkan standar engineering proyek Faisal Yusra Portfolio.*
