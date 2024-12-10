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
<div class="container mx-auto flex flex-col md:flex-row mt-10 gap-6 px-4">
  <!-- Left Section (Visit Prices) -->
  <div class="w-full md:w-1/2 h-[700px] bg-[url('https://via.placeholder.com/600x800')] bg-cover bg-center relative rounded-lg shadow-lg overflow-hidden transform transition duration-500 hover:scale-105">
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
    </div>
  </div>

  <!-- Right Section (Book Ticket) -->
  <div class="w-full md:w-1/2 h-auto bg-white rounded-lg shadow-xl overflow-hidden p-6">
    <div class="max-w-md mx-auto">
      <h3 class="text-3xl font-bold mb-6 text-center">Book Ticket</h3>
      <form id="ticket-form">
        <!-- Ticket Type for Dewasa -->
        <label for="adult-count" class="block text-lg font-medium">Dewasa</label>
        <input type="number" id="adult-count" value="0" min="0" class="w-full px-4 py-3 mt-2 mb-4 rounded-lg bg-gray-100 text-gray-800 focus:ring focus:ring-orange-500 outline-none transition duration-300 hover:bg-gray-200" />

        <!-- Ticket Type for Anak-anak -->
        <label for="child-count" class="block text-lg font-medium">Anak-anak</label>
        <input type="number" id="child-count" value="0" min="0" class="w-full px-4 py-3 mt-2 mb-4 rounded-lg bg-gray-100 text-gray-800 focus:ring focus:ring-orange-500 outline-none transition duration-300 hover:bg-gray-200" />

        <!-- Total Price -->
        <p class="text-lg font-semibold mb-4">Total Price: <span class="text-orange-500" id="total-price">Rp 0</span></p>

        <!-- Name -->
        <div class="flex gap-4">
          <input
            type="text"
            placeholder="Name"
            id="name"
            class="w-1/2 px-4 py-3 rounded-lg bg-gray-100 text-gray-800 focus:ring focus:ring-orange-500 outline-none transition duration-300 hover:bg-gray-200"
          />
          <input
            type="text"
            placeholder="Surname"
            id="surname"
            class="w-1/2 px-4 py-3 rounded-lg bg-gray-100 text-gray-800 focus:ring focus:ring-orange-500 outline-none transition duration-300 hover:bg-gray-200"
          />
        </div>

        <!-- Phone Number -->
        <input
          type="text"
          placeholder="Your phone number"
          id="phone"
          class="w-full px-4 py-3 mt-4 rounded-lg bg-gray-100 text-gray-800 focus:ring focus:ring-orange-500 outline-none transition duration-300 hover:bg-gray-200"
        />

        <!-- Email -->
        <input
          type="email"
          placeholder="Your Email"
          id="email"
          class="w-full px-4 py-3 mt-4 rounded-lg bg-gray-100 text-gray-800 focus:ring focus:ring-orange-500 outline-none transition duration-300 hover:bg-gray-200"
        />

        <!-- Submit Button -->
        <button
          type="button"
          id="book-ticket-btn"
          class="w-full mt-6 bg-orange-500 text-white px-4 py-3 rounded-lg hover:bg-orange-600 transition focus:ring focus:ring-orange-500 focus:outline-none"
        >
          PESAN TIKET
        </button>
      </form>
    </div>
  </div>
</div>

<!-- Modal for Confirmation -->
<div id="ticket-modal" class="fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center hidden">
  <div class="bg-white p-8 rounded-lg shadow-lg max-w-sm w-full">
    <h3 class="text-2xl font-bold mb-4 text-center">Ticket Booking Confirmation</h3>
    <form>
      <div class="mb-4">
        <label for="modal-name" class="block text-lg font-medium">Name</label>
        <input type="text" id="modal-name" class="w-full px-4 py-3 mt-2 mb-4 rounded-lg bg-gray-100 text-gray-800" readonly />
      </div>
      <div class="mb-4">
        <label for="modal-email" class="block text-lg font-medium">Email</label>
        <input type="email" id="modal-email" class="w-full px-4 py-3 mt-2 mb-4 rounded-lg bg-gray-100 text-gray-800" readonly />
      </div>
      <div class="mb-4">
        <label for="qris" class="block text-lg font-medium">QRIS</label>
        <!-- Gambar QRIS -->
        <img src="https://via.placeholder.com/200x200" alt="QRIS" class="w-full h-auto rounded-lg shadow-lg" />
      </div>
      <p class="text-lg font-semibold mb-4">Total Price: <span class="text-orange-500" id="modal-total-price">Rp 0</span></p>
      <button type="button" class="w-full bg-green-500 text-white px-4 py-3 rounded-lg hover:bg-green-600 transition duration-300" id="confirm-btn">Confirm</button>
    </form>
  </div>
</div>

<script>
  // Function to calculate the total price
  function updateTotalPrice() {
    const adultCount = parseInt(document.getElementById("adult-count").value) || 0;
    const childCount = parseInt(document.getElementById("child-count").value) || 0;

    const adultPrice = 50000;
    const childPrice = 30000;

    const totalPrice = (adultCount * adultPrice) + (childCount * childPrice);
    document.getElementById("total-price").textContent = `Rp ${totalPrice.toLocaleString()}`;
  }

  // Event listeners for changes in ticket quantities
  document.getElementById("adult-count").addEventListener("input", updateTotalPrice);
  document.getElementById("child-count").addEventListener("input", updateTotalPrice);

  // Show modal with the final total price when booking ticket
  document.getElementById("book-ticket-btn").addEventListener("click", function() {
    // Show modal and populate it with the form data
    document.getElementById("modal-name").value = document.getElementById("name").value + " " + document.getElementById("surname").value;
    document.getElementById("modal-email").value = document.getElementById("email").value;

    // Copy the total price to the modal
    const totalPrice = document.getElementById("total-price").textContent;
    document.getElementById("modal-total-price").textContent = totalPrice;

    document.getElementById("ticket-modal").classList.remove("hidden");
  });

  // Hide modal after confirmation
  document.getElementById("confirm-btn").addEventListener("click", function() {
    document.getElementById("ticket-modal").classList.add("hidden");
    alert("Ticket has been booked successfully!");
  });

  // Close modal if clicked outside of it
  document.getElementById("ticket-modal").addEventListener("click", function(event) {
    if (event.target === this) {
      this.classList.add("hidden");
    }
  });

  // Initialize the price display
  updateTotalPrice();
</script>


<script>
  document.getElementById("book-ticket-btn").addEventListener("click", function() {
    // Show modal and populate it with the form data
    document.getElementById("modal-name").value = document.getElementById("name").value + " " + document.getElementById("surname").value;
    document.getElementById("modal-email").value = document.getElementById("email").value;
    document.getElementById("ticket-modal").classList.remove("hidden");
  });

  document.getElementById("confirm-btn").addEventListener("click", function() {
    // Hide the modal after confirmation
    document.getElementById("ticket-modal").classList.add("hidden");
    alert("Ticket has been booked successfully!");
  });

  // Close modal if clicked outside of it
  document.getElementById("ticket-modal").addEventListener("click", function(event) {
    if (event.target === this) {
      this.classList.add("hidden");
    }
  });
</script>



<script>
  document.getElementById("book-ticket-btn").addEventListener("click", function() {
    // Show modal and populate it with the form data
    document.getElementById("modal-name").value = document.getElementById("name").value + " " + document.getElementById("surname").value;
    document.getElementById("modal-email").value = document.getElementById("email").value;
    document.getElementById("ticket-modal").classList.remove("hidden");
  });

  document.getElementById("confirm-btn").addEventListener("click", function() {
    // Hide the modal after confirmation
    document.getElementById("ticket-modal").classList.add("hidden");
    alert("Ticket has been booked successfully!");
  });

  // Close modal if clicked outside of it
  document.getElementById("ticket-modal").addEventListener("click", function(event) {
    if (event.target === this) {
      this.classList.add("hidden");
    }
  });
</script>



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
