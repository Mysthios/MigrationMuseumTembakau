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
            <img 
                src="/image/awalan.png" 
                alt="Gambar Museum" 
                class="w-full max-h-[500px] aspect-[3/4] object-cover rounded-lg shadow-lg hover:scale-105 transform transition duration-300 animate-fade-in">
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
                <img src="/image/image 8.png" alt="Konservasi" class="w-full h-40 object-cover rounded-lg mb-4">
                <h3 class="text-xl font-semibold mb-2 underline decoration-[#c09858] decoration-2">Konservasi</h3>
                <p class="text-gray-700">Menjaga dan melindungi artefak serta pameran bersejarah.</p>
            </div>
            <div class="text-center animate-fade-in">
                <img src="/image/edukasi.jpeg" alt="Edukasi" class="w-full h-40 object-cover rounded-lg mb-4">
                <h3 class="text-xl font-semibold mb-2 underline decoration-[#c09858] decoration-2">Edukasi</h3>
                <p class="text-gray-700">Mendanai workshop, seminar, dan pameran interaktif untuk segala usia.</p>
            </div>
            <div class="text-center animate-fade-in">
                <img src="/image/komunitas.jpeg" alt="Keterlibatan Komunitas" class="w-full h-40 object-cover rounded-lg mb-4">
                <h3 class="text-xl font-semibold mb-2 underline decoration-[#c09858] decoration-2">Keterlibatan Komunitas</h3>
                <p class="text-gray-700">Mendukung komunitas lokal melalui program edukasi dan penyuluhan.</p>
            </div>
        </div>
    </div>
  </section>

<!-- Donation Form Section -->
<!-- Donation Form Section -->
<div class="w-full md:w-1/2 h-auto bg-gradient-to-br from-[#f1e0b5] to-[#d8c29e] rounded-2xl shadow-xl overflow-hidden mx-auto transform transition-all duration-500 hover:scale-105 hover:shadow-2xl animate__animated animate__fadeIn">
    <div class="p-8 bg-white">
        <h3 class="text-4xl font-extrabold mb-6 text-center text-[#8b5e34] tracking-wide">Program Donasi</h3>
        <form id="donation-form" action="{{ route('program-donasi.store') }}" method="POST" onsubmit="handleFormSubmit(event)" class="max-w-lg mx-auto bg-white p-6 shadow-md rounded-md">
            @csrf
            <div class="mb-4">
                <label for="donor-name" class="block text-lg font-semibold text-gray-700 mb-2">Nama Donatur</label>
                <input 
                    type="text" 
                    id="donor-name" 
                    name="donor_name" 
                    placeholder="Nama Lengkap" 
                    class="w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                    required
                />
            </div>
        
            <div class="mb-4">
                <label for="email" class="block text-lg font-semibold text-gray-700 mb-2">Email</label>
                <input 
                    type="email" 
                    id="email" 
                    name="email" 
                    placeholder="Alamat Email" 
                    class="w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                    required
                />
            </div>
        
            <div class="mb-4">
                <label for="donation-amount" class="block text-lg font-semibold text-gray-700 mb-2">Nominal Donasi</label>
                <input 
                    type="number" 
                    id="donation-amount" 
                    name="donation_amount" 
                    placeholder="Masukkan Nominal Donasi (Rp)" 
                    class="w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                    required
                />
            </div>
        
            <div class="mb-4">
                <label for="notes" class="block text-lg font-semibold text-gray-700 mb-2">Pesan atau Dedikasi</label>
                <textarea 
                    id="notes" 
                    name="notes" 
                    placeholder="Tulis pesan atau dedikasi" 
                    class="w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                    rows="4"
                ></textarea>
            </div>
        
            <div class="flex justify-end">
                <button 
                    type="submit" 
                    class="bg-blue-500 text-white px-6 py-2 rounded-md shadow-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2"
                >
                    DONASI SEKARANG
                </button>
            </div>
        </form>
    </div>
</div>

<!-- Pop-Up Modal -->
<div id="donation-popup" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden">
    <div class="bg-white rounded-lg shadow-lg p-8 w-96 relative">
        <h3 class="text-2xl font-bold text-center text-[#8b5e34] mb-6">Detail Donasi Anda</h3>
        <p class="text-gray-700 mb-2"><strong>Nama:</strong> <span id="popup-donor-name"></span></p>
        <p class="text-gray-700 mb-2"><strong>Email:</strong> <span id="popup-email"></span></p>
        <p class="text-gray-700 mb-6"><strong>Total Donasi:</strong> Rp<span id="popup-donation-amount"></span></p>
        <div class="text-center">
            <img src="QR code.jpeg" alt="QRIS" class="w-48 mx-auto mb-4" />
            <p class="text-gray-500 text-sm">Silakan scan QRIS untuk melanjutkan donasi.</p>
        </div>
        <button 
            onclick="closePopup()" 
            class="bg-blue-500 text-white px-6 py-2 rounded-md shadow-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 mt-4 mx-auto block"
        >
            Tutup
        </button>
    </div>
</div>

<script>
    function handleFormSubmit(event) {
        event.preventDefault(); // Prevent default form submission temporarily

        // Ambil data form
        const donorName = document.getElementById('donor-name').value;
        const email = document.getElementById('email').value;
        const donationAmount = document.getElementById('donation-amount').value;

        // Set data ke pop-up
        document.getElementById('popup-donor-name').textContent = donorName;
        document.getElementById('popup-email').textContent = email;
        document.getElementById('popup-donation-amount').textContent = donationAmount;

        // Tampilkan pop-up
        document.getElementById('donation-popup').classList.remove('hidden');

        // Kirim data ke backend setelah pop-up muncul
        setTimeout(() => {
            document.getElementById('donation-form').submit();
        }, 2000); // Delay 2 detik sebelum data dikirim
    }

    function closePopup() {
        // Sembunyikan pop-up
        document.getElementById('donation-popup').classList.add('hidden');
    }
</script>



        



@endsection
