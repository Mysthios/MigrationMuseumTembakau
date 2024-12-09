<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Program Donasi - Museum Tembakau</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
        .animate-fade-in {
            animation: fadeIn 1.5s ease-in-out forwards;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .animate-slide-up {
            animation: slideUp 1.5s ease-in-out forwards;
        }
        @keyframes slideUp {
            from { opacity: 0; transform: translateY(50px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body class="bg-gray-100 text-gray-800">
<!-- Navbar Section -->
<nav class="flex items-center justify-between p-4 bg-[#e8e8e5] shadow-md border-b border-gray-300">
    <div class="text-2xl font-bold text-gray-800">Museum Tembakau Jember</div>
    <div class="hidden md:flex space-x-4">
        <a href="/" class="hover:text-blue-500 transition">Beranda</a>
        <a href="/koleksi" class="hover:text-blue-500 transition">Koleksi</a>
        <a href="/acara" class="hover:text-blue-500 transition">Acara</a>
        <a href="/tiket" class="hover:text-blue-500 transition">Tiket</a>
        <a href="/program_donasi" class="text-blue-500 font-semibold">Donasi</a>
    </div>
</nav>

<!-- Hero Section -->
<section class="relative w-full h-[400px] bg-cover bg-center border-b-4 border-[#c8a876]" style="background-image: url('/image/image 8.png');">
    <div class="absolute inset-0 bg-black bg-opacity-50"></div>
    <div class="relative flex items-center justify-center h-full text-center text-white animate-fade-in">
        <div>
            <h1 class="text-4xl md:text-5xl font-bold mb-4 drop-shadow-md">Dukung Museum Tembakau Kami</h1>
            <p class="text-lg md:text-xl mb-6 drop-shadow-sm">Lestarikan warisan budaya tembakau di Jember melalui kontribusi Anda yang murah hati.</p>
            <a href="#donation-form" class="px-6 py-3 bg-[#c8a876] text-white font-medium rounded-full hover:bg-[#c09858] transition duration-300 transform hover:scale-105">Donasi Sekarang</a>
        </div>
    </div>
</section>

<!-- About Donation Program -->
<section class="py-12 bg-gray-50">
    <div class="container mx-auto px-6">
        <h2 class="text-3xl font-bold text-center mb-8 text-[#c8a876] tracking-wide animate-slide-up relative">
            Bergabung dalam Program Donasi Kami
            <span class="absolute left-1/2 transform -translate-x-1/2 bottom-[-6px] w-16 h-1 bg-[#c8a876] rounded"></span>
        </h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
            <img src="/image/frame 5.png" alt="Gambar Museum" class="w-full h-50 rounded-lg shadow-lg hover:scale-105 transform transition duration-300 animate-fade-in">
            <div class="animate-slide-up">
                <h3 class="text-2xl font-semibold mb-4 text-gray-800 underline decoration-[#c09858] decoration-2">Mengapa Donasi?</h3>
                <p class="text-gray-700 mb-6 leading-relaxed">
                    Dengan mendonasikan uang, Anda berkontribusi dalam pelestarian sejarah dan edukasi tentang dampak budaya dan ekonomi tembakau.
                    Dukungan Anda membantu kami untuk menjaga koleksi, mengadakan acara edukasi, dan memperluas koleksi kami.
                </p>
                <ul class="list-disc pl-6 space-y-2 text-gray-700">
                    <li class="hover:text-[#c09858] transition">Mendukung upaya konservasi untuk artefak bersejarah.</li>
                    <li class="hover:text-[#c09858] transition">Memberikan dana untuk program pendidikan di komunitas lokal.</li>
                    <li class="hover:text-[#c09858] transition">Menambah pengalaman pengunjung dengan pameran interaktif.</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Benefits Section -->
<section class="py-12 bg-gray-50">
    <div class="container mx-auto px-6">
        <h2 class="text-3xl font-bold text-center mb-8 text-[#c8a876] tracking-wide animate-slide-up relative">
            Bagaimana Donasi Anda Membantu
            <span class="absolute left-1/2 transform -translate-x-1/2 bottom-[-6px] w-16 h-1 bg-[#c8a876] rounded"></span>
        </h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="text-center animate-fade-in">
                <img src="https://your-image-url.com/conservation.jpg" alt="Konservasi" class="w-full h-40 object-cover rounded-lg mb-4">
                <h3 class="text-xl font-semibold mb-2 underline decoration-[#c09858] decoration-2">Konservasi</h3>
                <p class="text-gray-700">Menjaga dan melindungi artefak serta pameran bersejarah.</p>
            </div>
            <div class="text-center animate-fade-in">
                <img src="https://your-image-url.com/education.jpg" alt="Edukasi" class="w-full h-40 object-cover rounded-lg mb-4">
                <h3 class="text-xl font-semibold mb-2 underline decoration-[#c09858] decoration-2">Edukasi</h3>
                <p class="text-gray-700">Mendanai workshop, seminar, dan pameran interaktif untuk segala usia.</p>
            </div>
            <div class="text-center animate-fade-in">
                <img src="https://your-image-url.com/community.jpg" alt="Keterlibatan Komunitas" class="w-full h-40 object-cover rounded-lg mb-4">
                <h3 class="text-xl font-semibold mb-2 underline decoration-[#c09858] decoration-2">Keterlibatan Komunitas</h3>
                <p class="text-gray-700">Mendukung komunitas lokal melalui program edukasi dan penyuluhan.</p>
            </div>
        </div>
    </div>
</section>


<!-- Donation Form Section -->
<section class="py-12 bg-gray-100" id="donation-form">
    <div class="container mx-auto px-6">
        <h2 class="text-3xl font-bold text-center mb-8 text-[#c8a876] tracking-wide animate-slide-up">Buat Donasi</h2>
        <div class="max-w-lg mx-auto bg-white p-6 rounded-lg shadow-lg animate-fade-in">
            <form action="#" method="POST">
                <label for="name" class="block font-medium mb-2">Nama Anda</label>
                <input type="text" id="name" name="name" class="w-full px-4 py-2 border rounded-lg mb-4" placeholder="Masukkan nama Anda">

                <label for="email" class="block font-medium mb-2">Email Anda</label>
                <input type="email" id="email" name="email" class="w-full px-4 py-2 border rounded-lg mb-4" placeholder="Masukkan email Anda">

                <label for="amount" class="block font-medium mb-2">Jumlah Donasi</label>
                <input type="number" id="amount" name="amount" class="w-full px-4 py-2 border rounded-lg mb-4" placeholder="Masukkan jumlah">

                <button type="submit" class="w-full px-4 py-2 bg-[#c8a876] text-white font-medium rounded-full hover:bg-[#c09858] transition duration-300 transform hover:scale-105">Donasi Sekarang</button>
            </form>
        </div>
    </div>
</section>
</body>
</html>


<!-- Footer Section -->
<footer class="bg-gray-900 text-gray-200 py-8">
    <div class="container mx-auto px-6">
        <div class="flex flex-wrap justify-between">
            <div class="w-full md:w-1/3 mb-4">
                <h3 class="font-bold text-lg">Kunjungi Kami</h3>
                <p>Alamat: Jl. Kalimantan No.1, Sumbersari, Jember</p>
                <p>Jam Operasional: 08:30 - 16:00 (Setiap Hari)</p>
                <p>Telepon: +62 821-3295-0536</p>
            </div>
            <div class="w-full md:w-1/3 mb-4">
                <h3 class="font-bold text-lg">Tautan Cepat</h3>
                <ul>
                    <li><a href="/tentang" class="hover:underline">Tentang Kami</a></li>
                    <li><a href="/kontak" class="hover:underline">Kontak</a></li>
                    <li><a href="/privasi" class="hover:underline">Kebijakan Privasi</a></li>
                </ul>
            </div>
            <div class="w-full md:w-1/3">
                <h3 class="font-bold text-lg">Ikuti Kami</h3>
                <a href="https://instagram.com/museumtembakau" class="text-gray-400 hover:text-white">Instagram</a>
            </div>
        </div>
    </div>
</footer>

</body>
</html>
