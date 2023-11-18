@extends('layouts.global')
@section('title')
    Data Kategori - Admin
@endsection

@section('content')
    @include('components.sidebar')
    <div class="sm:ml-64">
        <div class="flex flex-col h-screen px-6 py-8 items-center bg-gray-700">
            <p class="text-4xl font-bold mb-10 mx-5 text-white">Data Kategori</p>
            <div class="h-full w-full m-4 p-8 bg-white rounded-lg drop-shadow-md">
                <div class="flex flex-col items-center rounded w-full bg-white">
                    <div class="w-full h-auto flex items-center justify-between mb-4">
                        <form action="{{ route('admin.searchkategoriadmin') }}" method="get" class="flex items-center">
                            @csrf
                            <input type="text" name="search" placeholder="Cari Nama Kategori"
                                class="px-2 py-1 text-lg border rounded-md">
                            <button type="submit"
                                class="bg-blue-500 text-white px-4 py-2 rounded-md ml-2 hover:bg-blue-600">
                                <i class="fas fa-search"></i> Cari
                            </button>
                        </form>
                    </div>
                    <table class="w-full text-sm text-center">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-100">
                            <tr>
                                <th class="py-2 px-4 border-b">No</th>
                                <th class="py-2 px-4 border-b">ID Kategori</th>
                                <th class="py-2 px-4 border-b">Nama Kategori</th>
                                <th class="py-2 px-4 border-b">Jumlah Barang</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kategori as $index => $item)
                                <tr>
                                    <td class="py-2 px-4 border-b">{{ $item->id }}</td>
                                    <td class="py-2 px-4 border-b">{{ $item->id_kategori }}</td>
                                    <td class="py-2 px-4 border-b">{{ $item->nama_kategori }}</td>
                                    <td class="py-2 px-4 border-b">{{ $item->total_barang }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
