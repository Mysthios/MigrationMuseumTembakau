@extends('layouts.app')

@section('title', 'Donasi Museum')

@section('content')
<!-- About Donation Program -->
<section class="py-12 bg-white">
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
<section class="py-12 bg-white">
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

@endsection