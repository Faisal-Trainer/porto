# Security Standards & Protocols
## Portofolio Nexus Project

### 🔑 Authentication
- Admin access is restricted by Email and MFA (Fortify/Jetstream).
- Hardcoded emails are strictly forbidden in source code.
- Admin email must be configured via `APP_ADMIN_EMAIL` in `.env`.

### 🛰️ API & MCP Security
- All external API calls (MCP) must bypass CSRF but are REQUIRED to include the `X-MCP-Token` header.
- The `MCP_TOKEN` must be a high-entropy string stored in `.env`.

### 📁 File & Storage
- Sensitive files like `.env` must be explicitly listed in `.gitignore`.
- Public storage access must be limited to the `public/storage` symbolic link.

---
*Maintained by Nexus Orchestrator*
