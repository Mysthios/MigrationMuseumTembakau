@extends('layouts.app')

@section('title', 'Koleksi Museum')

@section('content')

<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;1,100;1,200&display=swap"
    rel="stylesheet" />

<script src="https://cdn-tailwindcss.vercel.app/"></script>

<style>
    section {
        font-family: "Poppins", sans-serif;
    }
</style>


<section class="bg-gray-100 py-10 px-12">
    {{-- <div class="flex justify-between items-center mb-4">
        <h1 class="text-xl font-bold text-black">Daftar Koleksi</h1>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
        @foreach ($koleksis as $koleksi)
        
        <div
        class="rounded shadow-lg shadow-gray-200 dark:shadow-gray-900 bg-white dark:bg-gray-800 duration-300 hover:-translate-y-1">
        <a href="link" class="cursor-pointer">
            <img src="{{ url('storage/' . $koleksi->gambar) }}" alt="{{ $koleksi->judul }}"
                    class="rounded-t h-72 w-full object-cover">
                    <figcaption class="p-4">
                        <p
                        class="text-lg mb-4 font-bold leading-relaxed text-gray-800 dark:text-gray-300">
                        {{ $koleksi->judul }}
                    </p>
                    <small
                    class="leading-5 text-gray-500 dark:text-gray-400">
                    {{ $koleksi->deskripsi }}
                </small>
                <button class="text-blue-500 hover:text-blue-700" onclick="openKoleksi({name: 'Produk 1', price: 50000, description: 'Deskripsi singkat produk'})">Edit</button>
                    <a href="{{ route("koleksi.destroy.new", $product->id) }}">
                        <button class="text-red-500 hover:text-red-700" type="submit" onclick="confirm('Yakin ingin menghapus?')">Hapus</button>
                    </a>
                </figcaption>
            </a>
        </div>
        @endforeach
        
        @if ($koleksis->isEmpty())
        <p class="col-span-full text-center text-gray-600">Koleksi kosong.</p>
        @endif
    </div> --}}
    
    
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    
    <main class="my-8">
        <div class="container mx-auto px-6">
            <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600"
                onclick="document.getElementById('addKoleksi').classList.remove('hidden')">
                Tambah Koleksi
            </button>
            <h3 class="text-gray-600 text-2xl font-medium">Koleksi Museum</h3>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                @if ($koleksis->isEmpty())
                <p>Tidak ada koleksi yang tersedia saat ini.</p>
                @else
                    @foreach ($koleksis as $koleksi)
                        <div class="w-full max-w-sm mx-auto rounded-md shadow-md overflow-hidden">
                            <div class="flex items-end justify-end h-56 w-full bg-cover" style="background-image: {{ url('storage/' . $koleksi->gambar) }}" alt="{{ $koleksi->judul }}">
                                <button class="p-2 rounded-full bg-blue-600 text-white mx-5 -mb-4 hover:bg-blue-500 focus:outline-none focus:bg-blue-500">
                                    <svg class="h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                                </button>
                            </div>
                            <div class="px-5 py-3">
                                <h3 class="text-gray-700 uppercase">{{ $koleksi->judul }}</h3>
                                <small class="leading-5 text-gray-500 dark:text-gray-400">{{ $koleksi->deskripsi }}</small>
                                {{-- <span class="text-gray-500 mt-2">$12</span> --}}
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </main>

    {{-- Pop up tambah koleksi --}}
    <div id="addKoleksi" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden">
        <div class="bg-white p-6 rounded shadow-md w-96">
            <h2 class="text-lg font-bold mb-4">Tambah Koleksi</h2>
            <form action="{{ route('readadminkoleksi.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-4">
                    <label for="admin_id" class="block text-sm">Admin ID</label>
                    <input type="number" id="admin_id" name="admin_id" class="border p-2 w-full rounded">
                </div>
                <div class="mb-4">
                    <label for="judul" class="block text-sm">Nama Koleksi</label>
                    <input type="text" id="judul" name="judul" class="border p-2 w-full rounded">
                </div>
                <div class="mb-4">
                    <label for="deskripsi" class="block text-sm">Deskripsi Koleksi</label>
                    <textarea id="deskripsi" name="deskripsi" class="border p-2 w-full rounded"></textarea>
                </div>
                <div class="mb-4">
                    <label for="gambar" class="block text-sm">Gambar Produk</label>
                    <input type="file" id="gambar" name="gambar" class="border p-2 w-full rounded">
                </div>
                <div class="flex justify-end space-x-2">
                    <button type="button" class="px-4 py-2 bg-gray-300 rounded"
                        onclick="document.getElementById('addKoleksi').classList.add('hidden')">Batal</button>
                    <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded">Simpan</button>
                </div>
            </form>
        </div>
    </div>
    
    {{-- Pop up edit koleksi --}}
    {{-- <div id="editKoleksi" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden">
        <div class="bg-white p-6 rounded shadow-md w-96">
            <h2 class="text-lg font-bold mb-4">Ubah Koleksi</h2>
            <form>
                <div class="mb-4">
                    <label for="edit_judul" class="block text-sm">Nama Koleksi</label>
                    <input type="text" id="edit_judul" class="border p-2 w-full rounded">
                </div>
                <div class="mb-4">
                    <label for="edit_deskripsi" class="block text-sm">Deskripsi Koleksi</label>
                    <textarea id="edit_deskripsi" class="border p-2 w-full rounded"></textarea>
                </div>
                <div class="mb-4">
                    <label for="edit_gambar" class="block text-sm">Gambar Koleksi</label>
                    <input type="file" id="edit_gambar" class="border p-2 w-full rounded">
                </div>
                <div class="flex justify-end space-x-2">
                    <button type="button" class="px-4 py-2 bg-gray-300 rounded"
                        onclick="document.getElementById('editKoleksi').classList.add('hidden')">Batal</button>
                    <button type="button" class="px-4 py-2 bg-blue-500 text-white rounded">Simpan</button>
                </div>
            </form>
        </div>
    </div> --}}
 
    <script>
        function openEditKoleksi(koleksi) {
            document.getElementById('editKoleksi').classList.remove('hidden');
            document.getElementById('edit_judul').value = koleksi.judul;
            document.getElementById('edit_deskripsi').value = koleksi.deskripsi;
        }
    </script>

</section>
@endsection


