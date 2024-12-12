@extends('layouts.app')

@section('title', 'Koleksi Museum')

@section('content')

{{-- <link rel="preconnect" href="https://fonts.googleapis.com" />
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


<section class="bg-gray-100 dark:bg-gray-900 py-10 px-12">

    <div class="grid grid-flow-row gap-8 text-neutral-600 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">

        <div class="my-8 rounded shadow-lg shadow-gray-200 dark:shadow-gray-900 bg-white dark:bg-gray-800 duration-300 hover:-translate-y-1">
            @if ($koleksis->isEmpty())
                <p>Tidak ada koleksi yang tersedia saat ini.</p>
            @else
                @foreach ($koleksis as $koleksi)
                <a href="link" class="cursor-pointer">
                    <img src="{{ url('storage/' . $koleksi->gambar) }}" alt="{{ $koleksi->judul }}" class="rounded-t h-72 w-full object-cover">
                    <figcaption class="p-4">
                        <p class="text-lg mb-4 font-bold leading-relaxed text-gray-800 dark:text-gray-300">{{ $koleksi->judul }}</p>
                        <small class="leading-5 text-gray-500 dark:text-gray-400">{{ $koleksi->deskripsi }}</small>
                    </figcaption>
                </a>
                @endforeach
            @endif
        </div>
    </div>
</section> --}}


<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

    <main class="my-8">
        <div class="container mx-auto px-6">
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

@endsection
