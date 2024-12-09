<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Museum Ticket Booking</title>
  <script src="https://cdn.tailwindcss.com"></script>
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
<body class="bg-white text-gray-800">
  <!-- Header -->
  <header class="p-5 bg-gray-100 shadow-lg sticky top-0 z-50">
    <div class="container mx-auto flex justify-between items-center">
      <h1 class="text-3xl font-extrabold tracking-wider text-orange-500">Museum</h1>
      <div class="flex items-center gap-4">
        <input type="text" placeholder="Search" class="text-gray-800 px-3 py-2 rounded shadow-inner focus:ring focus:ring-orange-500 outline-none" />
        <select class="text-gray-800 px-3 py-2 rounded shadow-inner focus:ring focus:ring-orange-500 outline-none">
          <option>EN</option>
          <option>VN</option>
        </select>
      </div>
    </div>
  </header>

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
  <footer class="mt-10 bg-gray-100 p-5 text-center text-gray-600">
    <div class="container mx-auto">
      <ul class="flex justify-center space-x-6">
        <li><a href="#" class="hover:text-gray-800 transition">Contact</a></li>
        <li><a href="#" class="hover:text-gray-800 transition">Privacy Policy</a></li>
        <li><a href="#" class="hover:text-gray-800 transition">Cookies</a></li>
        <li><a href="#" class="hover:text-gray-800 transition">Buy ticket</a></li>
        <li><a href="#" class="hover:text-gray-800 transition">Terms of use</a></li>
      </ul>
    </div>
  </footer>
</body>
</html>
