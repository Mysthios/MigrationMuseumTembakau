@extends('layouts.app')

@section('title', 'Koleksi Museum')

@section('content')
<section class="py-12 bg-white">
    <div class="container mx-auto px-6">
        <h2 class="text-3xl font-bold text-center">Koleksi Museum</h2>
        <p class="text-gray-700 text-center mt-2">Lihat koleksi-koleksi terbaik kami.</p>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-8">
            @foreach($koleksi as $item)
            <div class="bg-gray-100 shadow-lg rounded-lg overflow-hidden">
                <img src="{{ $item->gambar }}" alt="{{ $item->judul }}" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-lg font-bold">{{ $item->judul }}</h3>
                    <p class="text-gray-600 mt-2">{{ $item->deskripsi }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
