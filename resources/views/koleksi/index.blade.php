@extends('layouts.app')

@section('title', 'Koleksi Museum')

@section('content')
<!-- component -->
<!-- Google Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;1,100;1,200&display=swap"
    rel="stylesheet" />

<!-- Tailwind -->
<script src="https://cdn-tailwindcss.vercel.app/"></script>

<style>
    section {
        font-family: "Poppins", sans-serif;
    }
</style>

<!-- Card List Section -->
<section class="bg-gray-100 dark:bg-gray-900 py-10 px-12">
    <!-- Card Grid -->
    <div class="grid grid-flow-row gap-8 text-neutral-600 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
        <!-- Card Item 1 -->
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
</section>
@endsection
