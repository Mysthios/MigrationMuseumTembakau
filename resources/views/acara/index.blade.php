@extends('layouts.app')

@section('title', 'Acara Museum')

@section('content')
<section class="py-12 bg-gray-100">
    <div class="container mx-auto px-6">
        <h2 class="text-3xl font-bold text-center">Acara</h2>
        <p class="text-gray-700 text-center mt-2">Ikuti acara seru kami.</p>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-8">
            @foreach($acara as $item)
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <img src="{{ $item->gambar_banner }}" alt="{{ $item->nama_acara }}" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-lg font-bold">{{ $item->nama_acara }}</h3>
                    <p class="text-gray-600 mt-2">{{ $item->deskripsi }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
