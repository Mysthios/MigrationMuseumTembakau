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
    <header class="bg-blue-800 text-white shadow">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <h1 class="text-2xl font-bold">Museum Tembakau</h1>
            <nav>
                <a href="#koleksi" class="text-gray-200 hover:text-white mx-4">Koleksi</a>
                <a href="#acara" class="text-gray-200 hover:text-white mx-4">Acara</a>
                <a href="#program-donasi" class="text-gray-200 hover:text-white mx-4">Program Donasi</a>
                <a href="#tiket" class="text-gray-200 hover:text-white mx-4">Tiket</a>
            </nav>
        </div>
    </header>

    <!-- Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-blue-800 text-white py-6">
        <div class="container mx-auto text-center">
            <p>&copy; 2024 Museum Kita. All rights reserved.</p>
        </div>
    </footer>

</body>
</html>
