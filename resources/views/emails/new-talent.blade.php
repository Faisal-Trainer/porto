<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Talent Baru: {{ $talent->name }}</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #0f0f1a;
            color: #e2e8f0;
        }
        .wrapper {
            max-width: 600px;
            margin: 40px auto;
            background: linear-gradient(135deg, #1a1a2e 0%, #16213e 100%);
            border-radius: 16px;
            overflow: hidden;
            border: 1px solid rgba(16, 185, 129, 0.3);
        }
        .header {
            background: linear-gradient(135deg, #059669, #10b981);
            padding: 32px;
            text-align: center;
        }
        .header h1 {
            margin: 0;
            font-size: 24px;
            font-weight: 700;
            color: #ffffff;
        }
        .header p {
            margin: 8px 0 0;
            color: rgba(255, 255, 255, 0.85);
            font-size: 14px;
        }
        .badge {
            display: inline-block;
            background: rgba(255, 255, 255, 0.2);
            color: #fff;
            padding: 4px 14px;
            border-radius: 99px;
            font-size: 12px;
            font-weight: 600;
            margin-top: 12px;
            letter-spacing: 1px;
            text-transform: uppercase;
        }
        .body {
            padding: 32px;
        }
        .field {
            margin-bottom: 20px;
        }
        .field label {
            display: block;
            font-size: 11px;
            font-weight: 700;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            color: #34d399;
            margin-bottom: 6px;
        }
        .field .value {
            background: rgba(16, 185, 129, 0.08);
            border: 1px solid rgba(16, 185, 129, 0.2);
            border-radius: 8px;
            padding: 12px 16px;
            font-size: 14px;
            color: #e2e8f0;
            line-height: 1.6;
            word-break: break-word;
        }
        .highlight .value {
            background: rgba(16, 185, 129, 0.15);
            border-color: rgba(16, 185, 129, 0.4);
            color: #6ee7b7;
            font-weight: 600;
            font-size: 16px;
        }
        .row {
            display: flex;
            gap: 16px;
        }
        .row .field {
            flex: 1;
        }
        .divider {
            border: none;
            border-top: 1px solid rgba(16, 185, 129, 0.15);
            margin: 24px 0;
        }
        .cv-link {
            background: rgba(16, 185, 129, 0.1);
            border: 1px solid rgba(16, 185, 129, 0.25);
            border-radius: 8px;
            padding: 12px 16px;
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 14px;
        }
        .cv-link a {
            color: #34d399;
            text-decoration: none;
            font-weight: 600;
        }
        .no-cv {
            background: rgba(100, 116, 139, 0.1);
            border: 1px solid rgba(100, 116, 139, 0.2);
            border-radius: 8px;
            padding: 12px 16px;
            font-size: 14px;
            color: #64748b;
            font-style: italic;
        }
        .cta {
            text-align: center;
            margin-top: 32px;
        }
        .cta a {
            background: linear-gradient(135deg, #059669, #10b981);
            color: #ffffff;
            text-decoration: none;
            padding: 14px 32px;
            border-radius: 10px;
            font-size: 14px;
            font-weight: 600;
            display: inline-block;
        }
        .footer {
            background: rgba(0, 0, 0, 0.2);
            padding: 20px 32px;
            text-align: center;
            font-size: 12px;
            color: #64748b;
        }
        .footer a {
            color: #34d399;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="header">
            <h1>🎯 Talent Baru Mendaftar!</h1>
            <p>Ada pendaftar baru yang ingin bergabung sebagai talent</p>
            <span class="badge">{{ now()->format('d M Y, H:i') }} WIB</span>
        </div>

        <div class="body">

            <div class="field highlight">
                <label>Nama Pendaftar</label>
                <div class="value">{{ $talent->name }}</div>
            </div>

            <div class="field">
                <label>Email</label>
                <div class="value">{{ $talent->email }}</div>
            </div>

            <div class="field">
                <label>Telepon / WhatsApp</label>
                <div class="value">{{ $talent->phone }}</div>
            </div>

            <hr class="divider">

            <div class="field">
                <label>Skill Utama</label>
                <div class="value">{{ $talent->skill_label }}</div>
            </div>

            <div class="field">
                <label>Level Pengalaman</label>
                <div class="value">{{ $talent->experience_label }}</div>
            </div>

            <div class="field">
                <label>Ketersediaan Waktu</label>
                <div class="value">{{ $talent->availability_label }}</div>
            </div>

            <hr class="divider">

            <div class="field">
                <label>Bio / Tentang Diri</label>
                <div class="value">{{ $talent->bio }}</div>
            </div>

            <div class="field">
                <label>File CV</label>
                @if($talent->cv_url)
                    <div class="cv-link">
                        📄 <a href="{{ $talent->cv_url }}" target="_blank">Download CV – {{ $talent->name }}</a>
                    </div>
                @else
                    <div class="no-cv">Tidak ada file CV yang dilampirkan.</div>
                @endif
            </div>

            <div class="cta">
                <a href="{{ config('app.url') }}/admin/talents">
                    Lihat di Admin Panel →
                </a>
            </div>
        </div>

        <div class="footer">
            Email ini dikirim otomatis oleh
            <a href="{{ config('app.url') }}">{{ config('app.name') }}</a>
            · Jangan reply email ini langsung.
        </div>
    </div>
</body>
</html>
