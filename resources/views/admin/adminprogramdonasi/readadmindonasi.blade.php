<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Manajemen Koleksi</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.0/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="flex h-screen">
        <!-- Sidebar -->
        @include('admin.sidebar')

        <!-- Main Content -->
        <div class="p-6 bg-white shadow-md rounded-lg">
            <h1 class="text-2xl font-bold text-gray-800 mb-4">Manajemen Program Donasi</h1>
            <table class="table-auto w-full border-collapse border border-gray-300">
                <thead>
                    <tr>
                        <th class="border border-gray-300 px-4 py-2">ID</th>
                        <th class="border border-gray-300 px-4 py-2">Nama Donatur</th>
                        <th class="border border-gray-300 px-4 py-2">Email</th>
                        <th class="border border-gray-300 px-4 py-2">Nominal</th>
                        <th class="border border-gray-300 px-4 py-2">Catatan</th>
                        <th class="border border-gray-300 px-4 py-2">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($donations as $donation)
                    <tr>
                        <td class="border border-gray-300 px-4 py-2">{{ $donation->id }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $donation->donor_name }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $donation->email }}</td>
                        <td class="border border-gray-300 px-4 py-2">Rp{{ number_format($donation->amount, 0, ',', '.') }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $donation->notes }}</td>
                        <td class="border border-gray-300 px-4 py-2">
                            <form action="{{ route('admin.donations.delete', $donation->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="text-red-600 hover:text-red-800">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        
        
    </div>
</body>
</html>




