@extends('layouts.app')

@section('title', 'Pesan Tiket Museum')

@section('content')
<section class="py-12 bg-gray-100">
    <div class="container mx-auto px-6">
        <h2 class="text-3xl font-bold text-center">Pesan Tiket</h2>
        <p class="text-gray-700 text-center mt-2">Pesan tiket untuk kunjungan Anda.</p>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-8">
            @foreach($tiket as $item)
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <div class="p-4">
                    <h3 class="text-lg font-bold">{{ $item->tipe_tiket }}</h3>
                    <p class="text-gray-600 mt-2">Harga: Rp{{ number_format($item->harga) }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
