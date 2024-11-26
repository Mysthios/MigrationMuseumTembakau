<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Museum</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 text-gray-800">

    <!-- Header -->
    <header class="bg-blue-600 py-6">
        <div class="container mx-auto px-6 text-white">
            <h1 class="text-3xl font-bold text-center">Selamat Datang di Museum Tembakau</h1>
            <p class="text-center text-gray-200 mt-2">Jelajahi keindahan nyimengggg!</p>
        </div>
    </header>

    <!-- Main Content -->
    <main class="py-12">
        <div class="container mx-auto px-6">
            <div class="text-center mb-10">
                <h2 class="text-2xl font-semibold">Apa yang Anda Cari?</h2>
                <p class="text-gray-600">Pilih kategori di bawah untuk menjelajah lebih jauh</p>
            </div>
            
            <!-- Grid Options -->
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                <!-- Koleksi -->
                <a href="/koleksi" class="block p-6 bg-white rounded-lg shadow hover:shadow-lg text-center transition">
                    <img src="https://via.placeholder.com/150" alt="Koleksi" class="mx-auto mb-4 rounded-md">
                    <h3 class="text-lg font-semibold text-blue-600">Koleksi</h3>
                    <p class="text-gray-500 text-sm mt-2">Jelajahi koleksi seni dan sejarah museum.</p>
                </a>

                <!-- Acara -->
                <a href="/acara" class="block p-6 bg-white rounded-lg shadow hover:shadow-lg text-center transition">
                    <img src="https://via.placeholder.com/150" alt="Acara" class="mx-auto mb-4 rounded-md">
                    <h3 class="text-lg font-semibold text-blue-600">Acara</h3>
                    <p class="text-gray-500 text-sm mt-2">Lihat acara menarik yang sedang berlangsung.</p>
                </a>

                <!-- Program Donasi -->
                <a href="/program-donasi" class="block p-6 bg-white rounded-lg shadow hover:shadow-lg text-center transition">
                    <img src="https://via.placeholder.com/150" alt="Donasi" class="mx-auto mb-4 rounded-md">
                    <h3 class="text-lg font-semibold text-blue-600">Program Donasi</h3>
                    <p class="text-gray-500 text-sm mt-2">Dukung museum melalui program donasi kami.</p>
                </a>

                <!-- Tiket -->
                <a href="/tiket" class="block p-6 bg-white rounded-lg shadow hover:shadow-lg text-center transition">
                    <img src="https://via.placeholder.com/150" alt="Tiket" class="mx-auto mb-4 rounded-md">
                    <h3 class="text-lg font-semibold text-blue-600">Pesan Tiket</h3>
                    <p class="text-gray-500 text-sm mt-2">Pesan tiket kunjungan Anda secara online.</p>
                </a>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-blue-600 py-4 mt-12">
        <div class="container mx-auto px-6 text-center text-white">
            <p>&copy; 2024 Museum Tembakau. Semua Hak Dilindungi.</p>
        </div>
    </footer>

</body>
</html>
