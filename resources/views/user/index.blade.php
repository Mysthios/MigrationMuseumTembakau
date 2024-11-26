<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Info Museum</title>
</head>
<body>
    <h1>Info Museum</h1>
    <p>Selamat datang di website museum kami!</p>

    <nav>
        <ul>
            <li><a href="{{ route('user.koleksi') }}">Koleksi</a></li>
            <li><a href="{{ route('user.acara') }}">Acara</a></li>
            <li><a href="{{ route('user.programDonasi') }}">Program Donasi</a></li>
            <li><a href="{{ route('user.tiket') }}">Tiket</a></li>
        </ul>
    </nav>
</body>
</html>
