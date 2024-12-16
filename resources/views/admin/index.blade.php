<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <link rel="icon" type="image/png" href="{{ asset('assets/logotembakau.png') }}">
</head>
<body>
    <main>
        <h1 class="text-3xl font-bold text-gray-700 pl-5 pt-5">Selamat datang di Dashboard Admin</h1>
        <div class="flex overflow-hidden bg-white pt-16">
            @include('admin.sidebar')
            <div id="main-content" class="h-full w-full bg-gray-50 relative overflow-y-auto lg:ml-64">
                @yield('content')

            </div>

        </div>
    </main>
</body>
</html>