<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesan Baru dari {{ $customer->username }}</title>
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
            border: 1px solid rgba(99, 102, 241, 0.3);
        }
        .header {
            background: linear-gradient(135deg, #6366f1, #8b5cf6);
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
            color: rgba(255, 255, 255, 0.8);
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
            color: #818cf8;
            margin-bottom: 6px;
        }
        .field .value {
            background: rgba(99, 102, 241, 0.1);
            border: 1px solid rgba(99, 102, 241, 0.2);
            border-radius: 8px;
            padding: 12px 16px;
            font-size: 14px;
            color: #e2e8f0;
            line-height: 1.6;
            word-break: break-word;
        }
        .highlight .value {
            background: rgba(139, 92, 246, 0.15);
            border-color: rgba(139, 92, 246, 0.4);
            color: #c4b5fd;
            font-weight: 600;
        }
        .divider {
            border: none;
            border-top: 1px solid rgba(99, 102, 241, 0.15);
            margin: 24px 0;
        }
        .cta {
            text-align: center;
            margin-top: 32px;
        }
        .cta a {
            background: linear-gradient(135deg, #6366f1, #8b5cf6);
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
            color: #818cf8;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="header">
            <h1>📬 Pesan Baru Masuk</h1>
            <p>Ada seseorang yang menghubungi melalui form kontak</p>
            <span class="badge">{{ now()->format('d M Y, H:i') }} WIB</span>
        </div>

        <div class="body">

            <div class="field highlight">
                <label>Dari</label>
                <div class="value">{{ $customer->username }}</div>
            </div>

            <div class="field">
                <label>Email</label>
                <div class="value">{{ $customer->email }}</div>
            </div>

            <div class="field">
                <label>Telepon / WhatsApp</label>
                <div class="value">{{ $customer->phone }}</div>
            </div>

            <div class="field">
                <label>Kategori Layanan</label>
                <div class="value">
                    @php
                        $categories = [
                            'web_application'   => '🌐 Web Application',
                            'it_support'        => '🛠️ IT Support',
                            'ui_ux'             => '🎨 UI/UX Design',
                            'digital_consulting'=> '💼 Digital Consulting',
                            'goes_to_school'    => '🏫 Goes to School',
                            'social_media'      => '📱 Social Media',
                            'other'             => '📋 Lainnya',
                        ];
                    @endphp
                    {{ $categories[$customer->category] ?? $customer->category }}
                </div>
            </div>

            <hr class="divider">

            <div class="field">
                <label>Pesan</label>
                <div class="value">{{ $customer->message }}</div>
            </div>

            <div class="cta">
                <a href="{{ config('app.url') }}/admin/costumers">
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
