# TECHNICAL RECORD: .htaccess Configuration Snapshot

**Project**: NEXUS LORE (Portfolio)
**Timestamp**: 2026-05-04 08:30:00
**Subject**: Extraction of `public/.htaccess` Configuration

---

## 1. Source Context
- **Path**: `public/.htaccess`
- **Size**: 2111 Bytes
- **Status**: Production-Ready

---

## 2. Extraction Detail (Snapshot)

### 2.1 Rewrite Logic
```apache
# Force HTTPS
RewriteCond %{HTTPS} off
RewriteRule ^(.*)$ https://%{HTTP_HOST}%{REQUEST_URI} [L,R=301]

# Force non-www + HTTPS (faisalyusra.my.id)
RewriteCond %{HTTP_HOST} ^www\.(.+)$ [NC]
RewriteRule ^(.*)$ https://%1/$1 [L,R=301]
```

### 2.2 Security Configuration
- **HSTS**: `max-age=31536000; includeSubDomains; preload`
- **X-Frame-Options**: `SAMEORIGIN`
- **Permissions-Policy**: Disabled geolocation, microphone, camera.

### 2.3 Caching Strategy
- **Images**: 1 Year access.
- **CSS/JS**: 1 Month access.

---

## 3. Knowledge Integration
- **Target Documentation**: `documentation/knowledge/server_config_htaccess.md`
- **Mapping Status**: 100% Correct.

---

**STATUS**: ✅ RECORDED (Pre-approved by User)
**ACTION**: Proceed to Audit
