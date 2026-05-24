<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesan Baru dari Portfolio</title>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
        .container { max-width: 600px; margin: 0 auto; padding: 20px; border: 1px solid #ddd; border-radius: 10px; }
        h2 { color: #6b21a5; }
        .info { background: #f4f4f4; padding: 10px; border-radius: 8px; margin: 15px 0; }
        .label { font-weight: bold; color: #444; }
        .message { background: #fafafa; padding: 15px; border-left: 4px solid #6b21a5; margin: 15px 0; }
        hr { border: none; border-top: 1px solid #eee; margin: 20px 0; }
        .footer { font-size: 12px; color: #888; text-align: center; }
    </style>
</head>
<body>
    <div class="container">
        <h2>✨ Pesan Baru dari Portfolio Anda</h2>
        <div class="info">
            <p><span class="label">Nama:</span> {{ $contact->name }}</p>
            <p><span class="label">Email:</span> {{ $contact->email }}</p>
            <p><span class="label">Dikirim pada:</span> {{ $contact->created_at->format('d/m/Y H:i') }}</p>
        </div>
        <div class="message">
            <p><strong>Pesan:</strong></p>
            <p>{{ $contact->message }}</p>
        </div>
        <hr>
        <div class="footer">
            <p>Anda menerima email ini karena ada pengunjung yang mengirim pesan melalui website portfolio Anda.</p>
            <p>&copy; {{ date('Y') }} Portfolio Ibnu Zaki</p>
        </div>
    </div>
</body>
</html>