# Nexus Maintenance Guide
## Keeping the Ecosystem Healthy

### 🧹 Cleaning Procedures
- **Log Management**: Hapus file `.log` di root `nexus/` secara berkala. Semua log penting harus sudah dipindahkan ke `nexus/docs/records/`.
- **Session Cleanup**: Hapus file `cycle_summary_*.json` jika siklus sudah dianggap selesai dan sudah dicatat dalam dokumen `.md`.

### 📂 Document Lifecycle
- **Audit**: Simpan audit terbaru sebagai file utama (e.g., `audit_FINAL.md`). Audit lama bisa dipindahkan ke folder `archive/` di dalam folder audit.
- **Planning**: Rencana yang sudah di-approve dan dieksekusi harus dipindahkan statusnya ke `COMPLETED` di dalam dokumen tersebut.

### 🧪 Skill Registry
- Jika menambahkan kapabilitas baru pada AI Agent (misal: integrasi API pihak ketiga), catat metodenya di `nexus/skill/` agar Agent lain bisa menggunakannya.

### 🧠 Knowledge Enrichment
- Jika Anda menemukan solusi untuk error yang sulit, buatlah file baru di `nexus/docs/knowledge/patterns/` dengan format: `PROBLEM_SOLUTION_NAME.md`.

---
*Maintained by Nexus Orchestrator*
