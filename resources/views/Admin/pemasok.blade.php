@extends('layouts.global')
@section('title')
    Data Pemasok - Admin
@endsection

@section('content')
    @include('components.sidebar')
    <div class="sm:ml-64">
        <div class="flex flex-col h-screen px-6 py-8  items-center bg-gray-700 overflow-auto">
            <p class="text-4xl font-bold mb-10 mx-5 text-white">Data Pemasok</p>
            <div class="h-full w-full m-4 p-8 bg-white rounded-lg drop-shadow-md">
                    <table class="w-full text-sm text-center">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-100">
                            <tr>
                                <th class="py-2 px-4 border-b">ID</th>
                                <th class="py-2 px-4 border-b">ID Pemasok</th>
                                <th class="py-2 px-4 border-b">Nama Pemasok</th>
                                <th class="py-2 px-4 border-b">Jumlah Barang Pemasok</th>
                                <th class="py-2 px-4 border-b">Nomor Telepon</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pemasok as $index => $item)
                                <tr>
                                    <td class="py-2 px-4 border-b">{{ ++$index }}</td>
                                    <td class="py-2 px-4 border-b">{{ $item->id_pemasok }}</td>
                                    <td class="py-2 px-4 border-b">{{ $item->nama_pemasok }}</td>
                                    <td class="py-2 px-4 border-b">{{ $item->total_barang }}</td>
                                    <td class="py-2 px-4 border-b">{{ $item->no_telepon }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
