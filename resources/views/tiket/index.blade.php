{{-- <!DOCTYPE html>
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



<div class="container mx-auto flex flex-col md:flex-row mt-10 gap-6 px-4">

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


  <div class="w-full md:w-1/2 h-auto bg-white rounded-lg shadow-xl overflow-hidden p-6">
    <div class="max-w-md mx-auto">
      <h3 class="text-3xl font-bold mb-6 text-center">Book Ticket</h3>
      <form id="ticket-form">

        <label for="adult-count" class="block text-lg font-medium">Dewasa</label>
        <input type="number" id="adult-count" value="0" min="0" class="w-full px-4 py-3 mt-2 mb-4 rounded-lg bg-gray-100 text-gray-800 focus:ring focus:ring-orange-500 outline-none transition duration-300 hover:bg-gray-200" />

     
        <label for="child-count" class="block text-lg font-medium">Anak-anak</label>
        <input type="number" id="child-count" value="0" min="0" class="w-full px-4 py-3 mt-2 mb-4 rounded-lg bg-gray-100 text-gray-800 focus:ring focus:ring-orange-500 outline-none transition duration-300 hover:bg-gray-200" />

  
        <p class="text-lg font-semibold mb-4">Total Price: <span class="text-orange-500" id="total-price">Rp 0</span></p>

    
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


        <input
          type="text"
          placeholder="Your phone number"
          id="phone"
          class="w-full px-4 py-3 mt-4 rounded-lg bg-gray-100 text-gray-800 focus:ring focus:ring-orange-500 outline-none transition duration-300 hover:bg-gray-200"
        />

     
        <input
          type="email"
          placeholder="Your Email"
          id="email"
          class="w-full px-4 py-3 mt-4 rounded-lg bg-gray-100 text-gray-800 focus:ring focus:ring-orange-500 outline-none transition duration-300 hover:bg-gray-200"
        />

    
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
  >
        <img src="https://via.placeholder.com/200x200" alt="QRIS" class="w-full h-auto rounded-lg shadow-lg" />
      </div>
      <p class="text-lg font-semibold mb-4">Total Price: <span class="text-orange-500" id="modal-total-price">Rp 0</span></p>
      <button type="button" class="w-full bg-green-500 text-white px-4 py-3 rounded-lg hover:bg-green-600 transition duration-300" id="confirm-btn">Confirm</button>
    </form>
  </div>
</div>

<script>

  function updateTotalPrice() {
    const adultCount = parseInt(document.getElementById("adult-count").value) || 0;
    const childCount = parseInt(document.getElementById("child-count").value) || 0;

    const adultPrice = 50000;
    const childPrice = 30000;

    const totalPrice = (adultCount * adultPrice) + (childCount * childPrice);
    document.getElementById("total-price").textContent = `Rp ${totalPrice.toLocaleString()}`;
  }


  document.getElementById("adult-count").addEventListener("input", updateTotalPrice);
  document.getElementById("child-count").addEventListener("input", updateTotalPrice);


  document.getElementById("book-ticket-btn").addEventListener("click", function() {

    document.getElementById("modal-name").value = document.getElementById("name").value + " " + document.getElementById("surname").value;
    document.getElementById("modal-email").value = document.getElementById("email").value;

   
    const totalPrice = document.getElementById("total-price").textContent;
    document.getElementById("modal-total-price").textContent = totalPrice;

    document.getElementById("ticket-modal").classList.remove("hidden");
  });


  document.getElementById("confirm-btn").addEventListener("click", function() {
    document.getElementById("ticket-modal").classList.add("hidden");
    alert("Ticket has been booked successfully!");
  });


  document.getElementById("ticket-modal").addEventListener("click", function(event) {
    if (event.target === this) {
      this.classList.add("hidden");
    }
  });


  updateTotalPrice();
</script>


<script>
  document.getElementById("book-ticket-btn").addEventListener("click", function() {

    document.getElementById("modal-name").value = document.getElementById("name").value + " " + document.getElementById("surname").value;
    document.getElementById("modal-email").value = document.getElementById("email").value;
    document.getElementById("ticket-modal").classList.remove("hidden");
  });

  document.getElementById("confirm-btn").addEventListener("click", function() {

    document.getElementById("ticket-modal").classList.add("hidden");
    alert("Ticket has been booked successfully!");
  });


  document.getElementById("ticket-modal").addEventListener("click", function(event) {
    if (event.target === this) {
      this.classList.add("hidden");
    }
  });
</script>



<script>
  document.getElementById("book-ticket-btn").addEventListener("click", function() {
 
    document.getElementById("modal-name").value = document.getElementById("name").value + " " + document.getElementById("surname").value;
    document.getElementById("modal-email").value = document.getElementById("email").value;
    document.getElementById("ticket-modal").classList.remove("hidden");
  });

  document.getElementById("confirm-btn").addEventListener("click", function() {

    document.getElementById("ticket-modal").classList.add("hidden");
    alert("Ticket has been booked successfully!");
  });


  document.getElementById("ticket-modal").addEventListener("click", function(event) {
    if (event.target === this) {
      this.classList.add("hidden");
    }
  });
</script>



   
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
 
          tippy('.avatar')
      </script>

  <script>
    feather.replace()
  </script>
</body>
</html> --}}







{{-- <!DOCTYPE html>
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
     <!-- Main Content -->
     <div class="container mx-auto px-4 grid grid-cols-1 md:grid-cols-2 gap-8">

      <!-- Left Section (Information) -->
      <div class="background-tiket bg-white bg-opacity-90 rounded-lg shadow-lg p-6">
          <h2 class="text-2xl font-bold mb-4">Harga Tiket</h2>
          <div class="space-y-4">
              <div>
                  <h3 class="text-xl font-semibold">Domestik Jawa Timur</h3>
                  <ul class="list-disc pl-6">
                      <li>Umum: <strong>Rp 10.000</strong></li>
                      <li>Pelajar: <strong>Rp 5.000</strong></li>
                  </ul>
              </div>
              <div>
                  <h3 class="text-xl font-semibold">Domestik Luar Jatim</h3>
                  <ul class="list-disc pl-6">
                      <li>Umum: <strong>Rp 15.000</strong></li>
                      <li>Pelajar: <strong>Rp 7.500</strong></li>
                  </ul>
              </div>
              <div>
                  <h3 class="text-xl font-semibold">Mancanegara</h3>
                  <ul class="list-disc pl-6">
                      <li><strong>Rp 50.000</strong></li>
                  </ul>
              </div>
          </div>
      </div>

      <!-- Right Section (Form) -->
      <div class="bg-white rounded-lg shadow-lg p-6">
          <h2 class="text-2xl font-bold mb-4">Pesan Tiket</h2>
          @if (Session::has('fail'))
              <span class="block bg-red-100 text-red-700 p-2 rounded mb-4">{{ Session::get('fail') }}</span>
          @endif
          <form action="{{ route('AddUser') }}" method="post" class="space-y-4">
              @csrf
              <div>
                  <label for="full_name" class="block text-sm font-medium text-gray-700">Full Name</label>
                  <input type="text" name="full_name" id="full_name" class="block w-full border border-gray-300 rounded p-2 mt-1" value="{{ old('full_name') }}" placeholder="Enter Full Name">
                  @error('full_name')
                      <span class="text-red-500 text-sm">{{ $message }}</span>
                  @enderror
              </div>
              <div>
                  <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                  <input type="email" name="email" id="email" class="block w-full border border-gray-300 rounded p-2 mt-1" value="{{ old('email') }}" placeholder="Enter Email">
                  @error('email')
                      <span class="text-red-500 text-sm">{{ $message }}</span>
                  @enderror
              </div>
              <div>
                  <label for="phone_number" class="block text-sm font-medium text-gray-700">Phone Number</label>
                  <input type="text" name="phone_number" id="phone_number" class="block w-full border border-gray-300 rounded p-2 mt-1" value="{{ old('phone_number') }}" placeholder="Enter Phone Number">
                  @error('phone_number')
                      <span class="text-red-500 text-sm">{{ $message }}</span>
                  @enderror
              </div>
              <div>
                  <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                  <input type="password" name="password" id="password" class="block w-full border border-gray-300 rounded p-2 mt-1" placeholder="Enter Password">
                  @error('password')
                      <span class="text-red-500 text-sm">{{ $message }}</span>
                  @enderror
              </div>
              <div>
                  <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirm Password</label>
                  <input type="password" name="password_confirmation" id="password_confirmation" class="block w-full border border-gray-300 rounded p-2 mt-1" placeholder="Confirm Password">
                  @error('password_confirmation')
                      <span class="text-red-500 text-sm">{{ $message }}</span>
                  @enderror
              </div>
              <button type="submit" class="w-full bg-green-600 text-white font-bold py-2 rounded hover:bg-green-700 transition">Pesan Tiket</button>
          </form>
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
</html> --}}




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


        <div class="container mx-auto flex flex-col md:flex-row mt-10 gap-6 px-4">

          <!-- Left Section (Information) -->
          <div class="w-full md:w-1/2 h-[700px] relative rounded-lg shadow-lg overflow-hidden transform transition duration-500 hover:scale-105">
              <img src="image/tiket.jpeg" alt="Museum" class="w-full h-full object-cover rounded-lg">
              <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent p-8 flex flex-col justify-end text-white">
                  <h2 class="text-4xl font-bold mb-5 animate-fade-in">Visit Prices</h2>
                  <p class="text-lg mb-5 animate-fade-in fade-delay-1">Tiket hanya tersedia secara online. Pastikan Anda memesan tiket sebelum kunjungan untuk memastikan akses ke dalam museum.</p>
                  <div class="space-y-4">
                      <div class="opacity-0 transform translate-y-6 transition duration-500 ease-out animate-fade-in fade-delay-2">
                          <p class="text-xl font-medium">DEWASA</p>
                          <p class="text-2xl font-semibold">Rp 15.000 / Tiket</p>
                      </div>
                      <div class="opacity-0 transform translate-y-6 transition duration-500 ease-out animate-fade-in fade-delay-3">
                          <p class="text-xl font-medium">ANAK-ANAK</p>
                          <p class="text-2xl font-semibold">Rp 5.000 / Tiket</p>
                      </div>
                  </div>
              </div>
          </div>
      
          <!-- Right Section (Form) -->
          <div class="w-full md:w-1/2 bg-white rounded-lg shadow-lg p-6 flex flex-col h-[700px]">
              <h2 class="text-2xl font-bold mb-4">Pesan Tiket</h2>
              @if (Session::has('fail'))
                  <span class="block bg-red-100 text-red-700 p-2 rounded mb-4">{{ Session::get('fail') }}</span>
              @endif
              <form action="{{ route('AddUser') }}" method="post" class="space-y-4 flex-grow">
                  @csrf
                  <div>
                      <label for="full_name" class="block text-sm font-medium text-gray-700">Full Name</label>
                      <input type="text" name="full_name" id="full_name" class="block w-full border border-gray-300 rounded p-2 mt-1" value="{{ old('full_name') }}" placeholder="Enter Full Name">
                      @error('full_name')
                          <span class="text-red-500 text-sm">{{ $message }}</span>
                      @enderror
                  </div>
                  <div>
                      <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                      <input type="email" name="email" id="email" class="block w-full border border-gray-300 rounded p-2 mt-1" value="{{ old('email') }}" placeholder="Enter Email">
                      @error('email')
                          <span class="text-red-500 text-sm">{{ $message }}</span>
                      @enderror
                  </div>
                  <div>
                      <label for="phone_number" class="block text-sm font-medium text-gray-700">Phone Number</label>
                      <input type="text" name="phone_number" id="phone_number" class="block w-full border border-gray-300 rounded p-2 mt-1" value="{{ old('phone_number') }}" placeholder="Enter Phone Number">
                      @error('phone_number')
                          <span class="text-red-500 text-sm">{{ $message }}</span>
                      @enderror
                  </div>
                  <div>
                      <label for="ticket_type" class="block text-sm font-medium text-gray-700">Tipe Tiket</label>
                      <select name="ticket_type" id="ticket_type" class="block w-full border border-gray-300 rounded p-2 mt-1">
                        <option value="dewasa">Dewasa - Rp 15.000</option>
                        <option value="anak-anak">Anak-anak - Rp 5.000</option>
                      </select>
                      @error('ticket_type')
                          <span class="text-red-500 text-sm">{{ $message }}</span>
                      @enderror
                  </div>
                  <div>
                      <label for="ticket_quantity" class="block text-sm font-medium text-gray-700">Jumlah Tiket</label>
                      <input type="number" name="ticket_quantity" id="ticket_quantity" class="block w-full border border-gray-300 rounded p-2 mt-1" placeholder="Masukkan jumlah tiket">
                      @error('ticket_quantity')
                          <span class="text-red-500 text-sm">{{ $message }}</span>
                      @enderror
                  </div>
                  <div>
                      <label for="purchase_date" class="block text-sm font-medium text-gray-700">Tanggal Pembelian</label>
                      <input type="date" name="purchase_date" id="purchase_date" class="block w-full border border-gray-300 rounded p-2 mt-1">
                      @error('purchase_date')
                          <span class="text-red-500 text-sm">{{ $message }}</span>
                      @enderror
                  </div>
                  <div>
                    <label for="visit_date" class="block text-sm font-medium text-gray-700">Tanggal Kunjungan</label>
                    <input type="date" name="visit_date" id="visit_date" class="block w-full border border-gray-300 rounded p-2 mt-1" placeholder="Pilih tanggal kunjungan">
                    @error('visit_date')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                  </div>
                
                  <button type="submit" class="w-full bg-green-600 text-white font-bold py-2 rounded hover:bg-green-700 transition">Pesan Tiket</button>
              </form>
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