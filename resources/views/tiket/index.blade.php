<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tiket Museum</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.28.0/feather.min.js" integrity="sha512-7x3zila4t2qNycrtZ31HO0NnJr8kg2VI67YLoRSyi9hGhRN66FHYWr7Axa9Y1J9tGYHVBPqIjSE1ogHrJTz51g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="assets/css/tailwind.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <style>
      @keyframes fadeIn {
        from {
          opacity: 0;
          transform: translateY(20px);
        }
        to {
          opacity: 1;
          transform: translateY(0);
        }
      }
  
      .animate-fade-in {
        animation: fadeIn 1s ease-in-out forwards;
      }
  
      .fade-delay-1 {
        animation-delay: 0.5s;
      }
  
      .fade-delay-2 {
        animation-delay: 1s;
      }
  
      .fade-delay-3 {
        animation-delay: 1.5s;
      }
  
      .fade-delay-4 {
        animation-delay: 2s;
      }
    </style>
</head>
<body class="bg-white font-sans">

    <!-- Navbar -->
    <div class="container max-w-screen-xl mx-auto px-4">
        <nav class="flex-wrap lg:flex items-center py-7 xl:relative z-10" x-data="{navbarOpen:false}">
            <div class="flex items-center justify-between mb-10 lg:mb-0">
                <a href="/">
                    <img src="{{ asset('assets/logo.png') }}" alt="Logo img" width="150">
                </a>
                <button class="lg:hidden w-10 h-10 ml-auto flex items-center justify-center text-green-700 border border-green-700 rounded-md" @click="navbarOpen = !navbarOpen">
                    <i data-feather="menu"></i>
                </button>
            </div>
            <ul class="lg:flex flex-col lg:flex-row lg:items-center lg:mx-auto lg:space-x-8 xl:space-x-16" :class="{'hidden':!navbarOpen,'flex':navbarOpen}">
                <li class="font-semibold text-gray-900 text-lg hover:text-gray-400 transition ease-in-out duration-300 mb-5 lg:mb-0">
                    <a href="/koleksi">Koleksi</a>
                </li>
                <li class="font-semibold text-gray-900 text-lg hover:text-gray-400 transition ease-in-out duration-300 mb-5 lg:mb-0">
                    <a href="/acara">Acara</a>
                </li>
                <li class="font-semibold text-gray-900 text-lg hover:text-gray-400 transition ease-in-out duration-300 mb-5 lg:mb-0">
                    <a href="/tiket">Tiket</a>
                </li>
                <li class="font-semibold text-gray-900 text-lg hover:text-gray-400 transition ease-in-out duration-300 mb-5 lg:mb-0">
                    <a href="/program-donasi">Donasi</a>
                </li>
            </ul>
        </nav>


  <!-- Main Content -->
  <div class="container mx-auto flex flex-col md:flex-row mt-10 gap-6">
    <!-- Left Section (Visit Prices) -->
    <div class="w-full md:w-1/2 h-[700px] bg-[url('https://via.placeholder.com/600x800')] bg-cover bg-center relative rounded-lg shadow-lg overflow-hidden">
      <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent p-8 flex flex-col justify-end text-white">
        <h2 class="text-4xl font-bold mb-5 animate-fade-in">Visit Prices</h2>
        <p class="text-lg mb-5 animate-fade-in fade-delay-1">Tiket hanya tersedia secara online. Pastikan Anda memesan tiket sebelum kunjungan untuk memastikan akses ke dalam museum.</p>
        <div class="space-y-4">
          <div class="opacity-0 transform translate-y-6 transition duration-500 ease-out animate-fade-in fade-delay-2">
            <p class="text-xl font-medium">DEWASA</p>
            <p class="text-2xl font-semibold">Rp 50.000 / Tiket</p>
          </div>
          <div class="opacity-0 transform translate-y-6 transition duration-500 ease-out animate-fade-in fade-delay-3">
            <p class="text-xl font-medium">ANAK-ANAK</p>
            <p class="text-2xl font-semibold">Rp 30.000 / Tiket</p>
          </div>
        </div>

        <div class="mt-6 opacity-0 transform translate-y-6 transition duration-500 ease-out animate-fade-in fade-delay-4">
          <p class="text-xl font-semibold">Diskon</p>
          <ul class="list-disc list-inside text-lg space-y-1">
            <li>5% untuk grup 10 - 50 orang</li>
            <li>10% untuk grup 50 - 100 orang</li>
            <li>15% untuk > 100 orang</li>
          </ul>
        </div>
      </div>
    </div>

    <!-- Right Section (Book Ticket) -->
    <div class="w-full md:w-1/2 h-auto bg-gray-50 rounded-lg shadow-lg overflow-hidden">
      <div class="p-8">
        <h3 class="text-3xl font-bold mb-6">Book Ticket</h3>
        <form>
          <!-- Ticket Type -->
          <label for="ticket-type" class="block text-lg font-medium">Ticket Type</label>
          <select id="ticket-type" class="w-full px-4 py-3 mt-2 mb-4 rounded bg-gray-200 text-gray-800 focus:ring focus:ring-orange-500 outline-none">
            <option>DEWASA</option>
            <option>ANAK-ANAK</option>
          </select>

          <!-- Date -->
          <label for="date" class="block text-lg font-medium">Date</label>
          <input
            type="date"
            id="date"
            class="w-full px-4 py-3 mt-2 mb-4 rounded bg-gray-200 text-gray-800 focus:ring focus:ring-orange-500 outline-none"
          />

          <!-- Visitors -->
          <label for="visitors" class="block text-lg font-medium">Visitors</label>
          <select id="visitors" class="w-full px-4 py-3 mt-2 mb-4 rounded bg-gray-200 text-gray-800 focus:ring focus:ring-orange-500 outline-none">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
          </select>

          <!-- Total Price -->
          <p class="text-lg font-semibold mb-4">Total Price: <span class="text-orange-500">100.000đ</span></p>

          <!-- Name -->
          <div class="flex gap-4">
            <input
              type="text"
              placeholder="Name"
              class="w-1/2 px-4 py-3 rounded bg-gray-200 text-gray-800 focus:ring focus:ring-orange-500 outline-none"
            />
            <input
              type="text"
              placeholder="Surname"
              class="w-1/2 px-4 py-3 rounded bg-gray-200 text-gray-800 focus:ring focus:ring-orange-500 outline-none"
            />
          </div>

          <!-- Phone Number -->
          <input
            type="text"
            placeholder="Your phone number"
            class="w-full px-4 py-3 mt-4 rounded bg-gray-200 text-gray-800 focus:ring focus:ring-orange-500 outline-none"
          />

          <!-- Email -->
          <input
            type="email"
            placeholder="Your Email"
            class="w-full px-4 py-3 mt-4 rounded bg-gray-200 text-gray-800 focus:ring focus:ring-orange-500 outline-none"
          />

          <!-- Submit Button -->
          <button
            type="submit"
            class="w-full mt-6 bg-orange-500 text-white px-4 py-3 rounded-lg hover:bg-orange-600 transition focus:ring focus:ring-orange-500 focus:outline-none"
          >
            NEXT
          </button>
        </form>
      </div>
    </div>
  </div>

    <!-- Footer -->
    <footer class="bg-white py-10 md:py-16">
      <div class="container max-w-screen-xl mx-auto px-4">
          <div class="flex flex-col lg:flex-row justify-between">
              <div class="text-center lg:text-left mb-10 lg:mb-0">
                  <div class="flex justify-center lg:justify-start mb-5">
                      <img src="{{ asset('assets/logo.png') }}" alt="Logo img" width="150">
                  </div>
                  <div class="flex items-center justify-center lg:justify-start space-x-5">
                      <a href="#" class="px-3 py-3 bg-gray-200 text-gray-700 rounded-full hover:bg-amber-950 hover:text-white transition ease-in-out duration-500">
                          <i data-feather="facebook"></i>
                      </a>
                      <a href="#" class="px-3 py-3 bg-gray-200 text-gray-700 rounded-full hover:bg-amber-950 hover:text-white transition ease-in-out duration-500">
                          <i data-feather="instagram"></i>
                      </a>
                      <a href="#" class="px-3 py-3 bg-gray-200 text-gray-700 rounded-full hover:bg-amber-950 hover:text-white transition ease-in-out duration-500">
                          <i data-feather="linkedin"></i>
                      </a>
                  </div>
              </div>
              <div class="text-center lg:text-left mb-10 lg:mb-0">
                  <h4 class="font-semibold text-gray-900 text-2xl mb-6">Alamat</h4>
                  <a href="#" class="block font-light text-gray-400 text-xl mb-6 hover:text-gray-800 transition ease-in-out duration-300">Jl. Kalimantan No. 1<br> Kecamatan Sumbersari <br>Kabupaten Jember<br> Kodepos 68121</a>
              </div>
              <div class="text-center lg:text-left mb-10 lg:mb-0">
                  <h4 class="font-semibold text-gray-900 text-2xl mb-6">Hubungi Kami</h4>
                  <a href="#" class="block font-light text-gray-400 text-xl mb-6 hover:text-gray-800 transition ease-in-out duration-300">pengujianmututembakau@yahoo.co.id</a>
                  <a href="#" class="block font-light text-gray-400 text-xl mb-6 hover:text-gray-800 transition ease-in-out duration-300">Office : (0331) 338396</a>
                  <a href="#" class="block font-light text-gray-400 text-xl mb-6 hover:text-gray-800 transition ease-in-out duration-300">WA : +62 823-3577-3521</a>
              </div>
      </div>
  </footer>
  
  
      <script src="https://unpkg.com/@popperjs/core@2"></script>
      <script src="https://unpkg.com/tippy.js@6"></script>
      <script>
          //Init tooltips
          tippy('.avatar')
      </script>

  <script>
    feather.replace()
  </script>
</body>
</html>
