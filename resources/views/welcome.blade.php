<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tailwind Starter Template - Ghostwind CSS : Tailwind Toolbox</title>
    <meta name="author" content="name">
    <meta name="description" content="description here">
    <meta name="keywords" content="keywords,here">
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css"/> <!--Replace with your tailwind.css once created-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">
</style>
</head>
    <body class="bg-brown-200 font-sans leading-normal tracking-normal">

		{{-- Navbar --}}
		<nav class="bg-gray-800 p-4">
			<div class="container mx-auto flex items-center justify-between">
			<!-- Logo / Title -->
			<div class="text-white text-lg font-bold">
				MUSEUM TEMBAKAU
			</div>

			<!-- Navigation Links -->
			<ul class="flex space-x-6">
				<li>
				<a href="/koleksi" class="text-gray-300 hover:text-white transition duration-300">
					Koleksi
				</a>
				</li>
				<li>
				<a href="/acara" class="text-gray-300 hover:text-white transition duration-300">
					Acara
				</a>
				</li>
				<li>
				<a href="/tiket" class="text-gray-300 hover:text-white transition duration-300">
					Tiket
				</a>
				</li>
				<li>
				<a href="/donasi" class="text-gray-300 hover:text-white transition duration-300">
					Donasi
				</a>
				</li>
			</ul>
			</div>
		</nav>
	

	<!--Header-->
	<div class="w-full m-0 p-0 bg-cover bg-bottom" style="background-image:url('cover.jpg'); height: 60vh; max-height:460px;">
			<div class="container max-w-4xl mx-auto pt-16 md:pt-32 text-center break-normal">
				<!--Title-->
					<p class="text-black font-extrabold text-3xl md:text-5xl">
						MUSEUM TEMBAKAU
					</p>
					<p class="text-xl md:text-2xl text-gray-500"></p>
			</div>
		</div>
		
		<!--Container-->
		<div class="container px-4 md:px-0 max-w-6xl mx-auto -mt-32">
			
			<div class="mx-0 sm:mx-6">
				
				<!--Nav-->
				<nav class="mt-0 w-full">
					<div class="container mx-auto flex items-center">
					</div>
				</nav>

				<div class="bg-gray-200 w-full text-xl md:text-2xl text-gray-800 leading-normal rounded-t">
					
				<!--Lead Card-->
				<div class="flex h-full bg-white rounded overflow-hidden shadow-lg">
					<a href="post.html" class="flex flex-wrap no-underline hover:no-underline">
						<div class="w-full md:w-2/3 rounded-t">	
							<img src="https://source.unsplash.com/collection/494263/800x600" class="h-full w-full shadow">
						</div>

						<div class="w-full md:w-1/3 flex flex-col flex-grow flex-shrink">
							<div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
								<p class="w-full text-gray-600 text-xs md:text-sm pt-6 px-6">GETTING STARTED</p>
								<div class="w-full font-bold text-xl text-gray-900 px-6">👋 Welcome fellow Tailwind CSS and Ghost fan</div>
								<p class="text-gray-800 font-serif text-base px-6 mb-5">
									This starter template is an attempt to replicate the default Ghost theme "Casper" using Tailwind CSS and vanilla Javascript.
								</p>
							</div>

							<div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow-lg p-6">
								<div class="flex items-center justify-between">
									<img class="w-8 h-8 rounded-full mr-4 avatar" data-tippy-content="Author Name" src="http://i.pravatar.cc/300" alt="Avatar of Author">
									<p class="text-gray-600 text-xs md:text-sm">1 MIN READ</p>
								</div>
							</div>
						</div>

					</a>
				</div>
				<!--/Lead Card-->


				<!--Posts Container-->
				<div class="flex flex-wrap justify-between pt-12 -mx-6">

					<!--1/3 col -->
					<div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
						<div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
							<a href="#" class="flex flex-wrap no-underline hover:no-underline">
								<img src="https://source.unsplash.com/collection/225/800x600" class="h-64 w-full rounded-t pb-6">
								<p class="w-full text-gray-600 text-xs md:text-sm px-6">GETTING STARTED</p>
								<div class="w-full font-bold text-xl text-gray-900 px-6">Lorem ipsum dolor sit amet.</div>
								<p class="text-gray-800 font-serif text-base px-6 mb-5">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at ipsum eu nunc commodo posuere et sit amet ligula. 
								</p>
							</a>
						</div>
						<div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow-lg p-6">
							<div class="flex items-center justify-between">
								<img class="w-8 h-8 rounded-full mr-4 avatar" data-tippy-content="Author Name" src="http://i.pravatar.cc/300" alt="Avatar of Author">
								<p class="text-gray-600 text-xs md:text-sm">1 MIN READ</p>
							</div>
						</div>
					</div>
				
					
					<!--1/3 col -->
					<div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
						<div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
							<a href="#" class="flex flex-wrap no-underline hover:no-underline">
								<img src="https://source.unsplash.com/collection/3106804/800x600" class="h-64 w-full rounded-t pb-6">
								<p class="w-full text-gray-600 text-xs md:text-sm px-6">GETTING STARTED</p>
								<div class="w-full font-bold text-xl text-gray-900 px-6">Lorem ipsum dolor sit amet.</div>
								<p class="text-gray-800 font-serif text-base px-6 mb-5">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at ip Aliquam at ipsum eu nunc commodo posuere et sit amet ligula. 
								</p>
							</a>
							</div>
						<div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow-lg p-6">
							<div class="flex items-center justify-between">
								<img class="w-8 h-8 rounded-full mr-4 avatar" data-tippy-content="Author Name" src="http://i.pravatar.cc/300" alt="Avatar of Author">
								<p class="text-gray-600 text-xs md:text-sm">1 MIN READ</p>
							</div>
						</div>
					</div>

					<!--1/3 col -->
					<div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
						<div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
							<a href="#" class="flex flex-wrap no-underline hover:no-underline">
								<img src="https://source.unsplash.com/collection/539527/800x600" class="h-64 w-full rounded-t pb-6">
								<p class="w-full text-gray-600 text-xs md:text-sm px-6">GETTING STARTED</p>
								<div class="w-full  font-bold text-xl text-gray-900 px-6">Lorem ipsum dolor sit amet.</div>
								<p class="text-gray-800 font-serif text-base px-6 mb-5">
									Lorem ipsum eu nunc commodo posuere et sit amet ligula. 
								</p>
							</a>
						</div>
						<div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow-lg p-6">
							<div class="flex items-center justify-between">
								<img class="w-8 h-8 rounded-full mr-4 avatar" data-tippy-content="Author Name" src="http://i.pravatar.cc/300" alt="Avatar of Author">
								<p class="text-gray-600 text-xs md:text-sm">1 MIN READ</p>
							</div>
						</div>
					</div>


					<!--1/2 col -->
					<div class="w-full md:w-1/2 p-6 flex flex-col flex-grow flex-shrink">
						<div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
							<a href="#" class="flex flex-wrap no-underline hover:no-underline">
								<img src="https://source.unsplash.com/collection/3657445/800x600" class="h-full w-full rounded-t pb-6">
								<p class="w-full text-gray-600 text-xs md:text-sm px-6">GETTING STARTED</p>
								<div class="w-full font-bold text-xl text-gray-900 px-6">Lorem ipsum dolor sit amet.</div>
								<p class="text-gray-800 font-serif text-base px-6 mb-5">
									Lorem ipsum eu nunc commodo posuere et sit amet ligula. 
								</p>
							</a>
						</div>
						<div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow-lg p-6">
							<div class="flex items-center justify-between">
								<img class="w-8 h-8 rounded-full mr-4 avatar" data-tippy-content="Author Name" src="http://i.pravatar.cc/300" alt="Avatar of Author">
								<p class="text-gray-600 text-xs md:text-sm">1 MIN READ</p>
							</div>
						</div>
					</div>

					<!--1/2 col -->
					<div class="w-full md:w-1/2 p-6 flex flex-col flex-grow flex-shrink">
						<div class="flex-1 flex-row bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
							<a href="#" class="flex flex-wrap no-underline hover:no-underline">	
								<img src="https://source.unsplash.com/collection/764827/800x600" class="h-full w-full rounded-t pb-6">
								<p class="w-full text-gray-600 text-xs md:text-sm px-6">GETTING STARTED</p>
								<div class="w-full font-bold text-xl text-gray-900 px-6">Lorem ipsum dolor sit amet.</div>
								<p class="text-gray-800 font-serif text-base px-6 mb-5">
									Lorem ipsum eu nunc commodo posuere et sit amet ligula. 
								</p>
							</a>
						</div>
						<div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow-lg p-6">
							<div class="flex items-center justify-between">
								<img class="w-8 h-8 rounded-full mr-4 avatar" data-tippy-content="Author Name" src="http://i.pravatar.cc/300" alt="Avatar of Author">
								<p class="text-gray-600 text-xs md:text-sm">1 MIN READ</p>
							</div>
						</div>
					</div>



					<!--2/3 col -->
					<div class="w-full md:w-2/3 p-6 flex flex-col flex-grow flex-shrink">
						<div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
							<a href="#" class="flex flex-wrap no-underline hover:no-underline">	
								<img src="https://source.unsplash.com/collection/325867/800x600" class="h-full w-full rounded-t pb-6">
								<p class="w-full text-gray-600 text-xs md:text-sm px-6">GETTING STARTED</p>
								<div class="w-full font-bold text-xl text-gray-900 px-6">Lorem ipsum dolor sit amet.</div>
								<p class="text-gray-800 font-serif text-base px-6 mb-5">
									Lorem ipsum eu nunc commodo posuere et sit amet ligula. 
								</p>
							</a>
						</div>
						<div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow-lg p-6">
							<div class="flex items-center justify-between">
								<img class="w-8 h-8 rounded-full mr-4 avatar" data-tippy-content="Author Name" src="http://i.pravatar.cc/300" alt="Avatar of Author">
								<p class="text-gray-600 text-xs md:text-sm">1 MIN READ</p>
							</div>
						</div>
					</div>

					<!--1/3 col -->
					<div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
						<div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
							<a href="#" class="flex flex-wrap no-underline hover:no-underline">
								<img src="https://source.unsplash.com/collection/1118905/800x600" class="h-full w-full rounded-t pb-6">
								<p class="w-full text-gray-600 text-xs md:text-sm px-6">GETTING STARTED</p>
								<div class="w-full font-bold text-xl text-gray-900 px-6">Lorem ipsum dolor sit amet.</div>
								<p class="text-gray-800 font-serif text-base px-6 mb-5">
									Lorem ipsum eu nunc commodo posuere et sit amet ligula. 
								</p>
							</a>
						</div>
						<div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow-lg p-6">
							<div class="flex items-center justify-between">
								<img class="w-8 h-8 rounded-full mr-4 avatar" data-tippy-content="Author Name" src="http://i.pravatar.cc/300" alt="Avatar of Author">
								<p class="text-gray-600 text-xs md:text-sm">1 MIN READ</p>
							</div>
						</div>
					</div>

				</div>
				<!--/ Post Content-->
						
			</div>
		</div>
	

	</div>


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