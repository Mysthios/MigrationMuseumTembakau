@extends('layouts.app')

@section('title', 'Koleksi Museum')

@section('content')

<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

<main class="my-8">
    <div class="container mx-auto px-6">
        <h3 class="text-gray-600 text-2xl font-medium mb-4">Koleksi Museum</h3>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
            @if ($koleksis->isEmpty())
                <p class="text-gray-500">Tidak ada koleksi yang tersedia saat ini.</p>
            @else
                @foreach ($koleksis as $koleksi)
                <div class="w-full max-w-sm mx-auto rounded-lg shadow-md overflow-hidden bg-white relative">
                    <!-- Bagian Gambar -->
                    <div class="relative h-56 w-full">
                        <div class="absolute inset-0 bg-cover bg-center" 
                            style="background-image: url('{{ asset('storage/' . $koleksi->gambar) }}');">
                        </div>
                    </div>
                    <!-- Tombol Aksi -->
                    {{-- <div class="absolute right-4 bottom-6 z-10">
                        <button class="p-2 rounded-full bg-blue-600 text-white shadow-lg hover:bg-blue-500 focus:outline-none">
                            <svg class="h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>
                        </button>
                    </div> --}}
                    <!-- Detail Koleksi -->
                    <div class="px-5 py-4">
                        <h3 class="text-gray-700 uppercase font-semibold text-lg">{{ $koleksi->judul }}</h3>
                        <p class="text-gray-500 text-sm mt-1">{{ $koleksi->deskripsi }}</p>
                    </div>
                </div>
                
                @endforeach
            @endif
        </div>
    </div>
</main>

@endsection
