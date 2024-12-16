
@extends('admin.index')

@section('title', 'Acara Museum')
@section('content')
    <div class="flex h-screen">
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
@endsection




