<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tiket Museum</title>
</head>
<body>
    <h1>Tiket Museum</h1>
    <p>Pilih tiket yang ingin Anda beli:</p>

    <!-- Data tiket bisa ditampilkan di sini -->
    <ul>
        <li>Tiket Reguler</li>
        <li>Tiket VIP</li>
        <li>Tiket Grup</li>
    </ul>

    <a href="{{ route('user.index') }}">Kembali ke Info Museum</a>
</body>
</html>
