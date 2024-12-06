<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Museum Info')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans">
 
    <!-- Navbar -->
    <header>
        <div class="container mx-auto px-6 py-3">
            <div class="flex items-center justify-between">
                <div class="hidden w-full text-gray-600 md:flex md:items-center">
                    <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M16.2721 10.2721C16.2721 12.4813 14.4813 14.2721 12.2721 14.2721C10.063 14.2721 8.27214 12.4813 8.27214 10.2721C8.27214 8.06298 10.063 6.27212 12.2721 6.27212C14.4813 6.27212 16.2721 8.06298 16.2721 10.2721ZM14.2721 10.2721C14.2721 11.3767 13.3767 12.2721 12.2721 12.2721C11.1676 12.2721 10.2721 11.3767 10.2721 10.2721C10.2721 9.16755 11.1676 8.27212 12.2721 8.27212C13.3767 8.27212 14.2721 9.16755 14.2721 10.2721Z" fill="currentColor" /><path fill-rule="evenodd" clip-rule="evenodd" d="M5.79417 16.5183C2.19424 13.0909 2.05438 7.39409 5.48178 3.79417C8.90918 0.194243 14.6059 0.054383 18.2059 3.48178C21.8058 6.90918 21.9457 12.6059 18.5183 16.2059L12.3124 22.7241L5.79417 16.5183ZM17.0698 14.8268L12.243 19.8965L7.17324 15.0698C4.3733 12.404 4.26452 7.97318 6.93028 5.17324C9.59603 2.3733 14.0268 2.26452 16.8268 4.93028C19.6267 7.59603 19.7355 12.0268 17.0698 14.8268Z" fill="currentColor" />
                    </svg>
                    <span class="mx-1 text-sm">NY</span>
                </div>
                <div class="w-full text-gray-700 md:text-center text-2xl font-semibold">
                    <a href="\">
                        Museum Tembakau
                    </a>
                </div>
                <div class="flex items-center justify-end w-full">
                    <button @click="cartOpen = !cartOpen" class="text-gray-600 focus:outline-none mx-4 sm:mx-0">
                        <svg class="h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                            <path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                    </button>

                    <div class="flex sm:hidden">
                        <button @click="isOpen = !isOpen" type="button" class="text-gray-600 hover:text-gray-500 focus:outline-none focus:text-gray-500" aria-label="toggle menu">
                            <svg viewBox="0 0 24 24" class="h-6 w-6 fill-current">
                                <path fill-rule="evenodd" d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <nav :class="isOpen ? '' : 'hidden'" class="sm:flex sm:justify-center sm:items-center mt-4">
                <div class="flex flex-col sm:flex-row">
                    <a class="mt-3 text-gray-600 hover:underline sm:mx-3 sm:mt-0" href="\koleksi">Koleksi</a>
                    <a class="mt-3 text-gray-600 hover:underline sm:mx-3 sm:mt-0" href="\acara">Acara</a>
                    <a class="mt-3 text-gray-600 hover:underline sm:mx-3 sm:mt-0" href="\tiket">Tiket</a>
                    <a class="mt-3 text-gray-600 hover:underline sm:mx-3 sm:mt-0" href="\programDonasi">Donasi</a>
                </div>
            </nav>
            <div class="relative mt-6 max-w-lg mx-auto">
            <span class="absolute inset-y-0 left-0 pl-3 flex items-center">
                <svg class="h-5 w-5 text-gray-500" viewBox="0 0 24 24" fill="none">
                    <path d="M21 21L15 15M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </span>

                <input class="w-full border rounded-md pl-10 pr-4 py-2 focus:border-blue-500 focus:outline-none focus:shadow-outline" type="text" placeholder="Search">
            </div>
        </div>
    </header>

    <!-- Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-900 text-gray-200">
        <div class="container max-w-6xl mx-auto px-2 py-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <!-- Visiting Us -->
                <div>
                    <h3 class="font-bold text-lg mb-4">Visiting Us</h3>
                    <p><strong>Opening Times:</strong></p>
                    <p>Everyday: 08.30 – 16:00</p>
                    <p>68124, Jl. Kalimantan No.1, Krajan Timur, Sumbersari, Kec. Sumbersari, Kabupaten Jember, Jawa Timur 68121</p>
                    <p>East Java, Indonesia</p>
                    <p>: +62 821-3295-0536</p>
                </div>
                
                <!-- Admission -->
                <div>
                    <h3 class="font-bold text-lg mb-4">Admission</h3>
                    <ul>
                        <li>Adults: £14.50</li>
                        <li>Concessions: £12.50</li>
                        <li>Young Persons (12-16): £9.00</li>
                        <li>Children under 12: Free</li>
                        <li>Members and Patrons: Free</li>
                    </ul>
                </div>
                
                <!-- About the Museum -->
                <div>
                    <h3 class="font-bold text-lg mb-4">About the Museum</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="hover:underline">Blog</a></li>
                        <li><a href="#" class="hover:underline">About Us</a></li>
                        <li><a href="#" class="hover:underline">Contact Us</a></li>
                        <li><a href="#" class="hover:underline">Privacy Policy</a></li>
                    </ul>
                </div>
                
                <!-- Social Media -->
                <div>
                    <div class="flex w-1/2 justify-end content-center">		
                        <a class="inline-block text-gray-500 no-underline hover:text-white hover:text-underline text-center h-14 p-4 md:h-auto md:p-6 avatar" data-tippy-content="@museumtembakau.jember" href="https://www.instagram.com/museumtembakau.jember/" target="_blank">
                            <svg class="fill-current h-10 w-10" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                <path d="M16 2.88c4.21 0 4.7.02 6.35.09 1.55.07 2.38.33 2.94.54.73.28 1.25.63 1.8 1.18.55.55.9 1.07 1.18 1.8.21.56.47 1.39.54 2.94.07 1.65.09 2.14.09 6.35s-.02 4.7-.09 6.35c-.07 1.55-.33 2.38-.54 2.94a4.4 4.4 0 0 1-1.18 1.8 4.4 4.4 0 0 1-1.8 1.18c-.56.21-1.39.47-2.94.54-1.65.07-2.14.09-6.35.09s-4.7-.02-6.35-.09c-1.55-.07-2.38-.33-2.94-.54a4.4 4.4 0 0 1-1.8-1.18 4.4 4.4 0 0 1-1.18-1.8c-.21-.56-.47-1.39-.54-2.94-.07-1.65-.09-2.14-.09-6.35s.02-4.7.09-6.35c.07-1.55.33-2.38.54-2.94.28-.73.63-1.25 1.18-1.8.55-.55 1.07-.9 1.8-1.18.56-.21 1.39-.47 2.94-.54 1.65-.07 2.14-.09 6.35-.09m0-2.88C11.64 0 11.14.02 9.46.09 7.78.16 6.56.46 5.6.88a6.37 6.37 0 0 0-2.3 1.5A6.37 6.37 0 0 0 1.8 4.68c-.42.96-.72 2.18-.79 3.86C.94 10.34.92 10.84.92 16s.02 5.66.09 7.46c.07 1.68.37 2.9.79 3.86a6.37 6.37 0 0 0 1.5 2.3 6.37 6.37 0 0 0 2.3 1.5c.96.42 2.18.72 3.86.79 1.8.07 2.3.09 7.46.09s5.66-.02 7.46-.09c1.68-.07 2.9-.37 3.86-.79a6.37 6.37 0 0 0 2.3-1.5 6.37 6.37 0 0 0 1.5-2.3c.42-.96.72-2.18.79-3.86.07-1.8.09-2.3.09-7.46s-.02-5.66-.09-7.46c-.07-1.68-.37-2.9-.79-3.86a6.37 6.37 0 0 0-1.5-2.3 6.37 6.37 0 0 0-2.3-1.5c-.96-.42-2.18-.72-3.86-.79C21.66.02 21.16 0 16 0zm0 7.74a8.26 8.26 0 1 0 8.26 8.26A8.27 8.27 0 0 0 16 7.74zm0 13.62a5.36 5.36 0 1 1 5.36-5.36 5.36 5.36 0 0 1-5.36 5.36zm10.41-13.97a1.93 1.93 0 1 1-1.93-1.93 1.93 1.93 0 0 1 1.93 1.93z"></path>
                            </svg>
                        </a>							
                    </div>
                </div>
            </div>
        </div>
    </footer>
    
    
        <script src="https://unpkg.com/@popperjs/core@2"></script>
        <script src="https://unpkg.com/tippy.js@6"></script>
        <script>
            //Init tooltips
            tippy('.avatar')
        </script>
</body>
</html>
