@extends('layouts.global')
@section('title')
    Data Barang - Admin
@endsection

@section('content')
    @include('components.sidebar')
    <div class=" sm:ml-64">
        <div class="flex flex-col h-screen px-6 py-8 items-center bg-gray-700 overflow-auto">
            <p class="text-4xl font-bold mb-10 mx-5 text-white">Data Barang</p>

            @if (session('error'))
                <div class="w-full mb-4">
                    <div class="p-2 rounded-sm bg-red-100 ring-1 ring-red-500">
                        <p class="text-red-500">
                            {{ session('error') }}
                        </p>
                    </div>
                </div>
            @endif

            @if (session('success'))
                <div class="w-full mb-4">
                    <div class="p-2 rounded-sm bg-green-100 ring-1 ring-green-500 flex">
                        <p class="text-green-500">
                            {{ session('success') }}
                        </p>
                    </div>
                </div>
            @endif

            <div class="h-full w-full m-4 p-8 bg-white rounded-lg drop-shadow-md">
                <div class="flex flex-col items-center rounded w-full bg-white">
                    <div class="w-full h-auto flex items-center justify-between mb-4">
                        <form action="{{ route('admin.searchbarangadmin') }}" method="post" class="flex items-center">
                            @csrf
                            <input type="text" name="search" placeholder="Cari Nama Barang"
                                class="px-2 py-1 text-lg border rounded-md">
                            <button type="submit"
                                class="bg-blue-500 text-white px-4 py-2 rounded-md ml-2 hover:bg-blue-600">
                                <i class="fas fa-search"></i> Cari
                            </button>
                        </form>
                        <a href="{{ route('admin.addBarang') }}"
                            class="bg-green-600 text-white px-4 py-2 rounded-md flex items-center hover:bg-green-700">
                            <i class="fas fa-plus mr-2"></i> Tambah
                        </a>
                    </div>
                    <table class="w-full text-sm text-center">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-100">
                            <tr>
                                <th class="py-2 px-4 border-b">No</th>
                                <th class="py-2 px-4 border-b">ID Barang</th>
                                <th class="py-2 px-4 border-b">Kategori Barang</th>
                                <th class="py-2 px-4 border-b">Pemasok Barang</th>
                                <th class="py-2 px-4 border-b">Nama Barang</th>
                                <th class="py-2 px-4 border-b">Stok Barang</th>
                                <th class="py-2 px-4 border-b">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $i=1 @endphp
                            @foreach ($barang['data'] as $item)
                                <tr>
                                    <td class="py-2 px-4 border-b">{{ $i++ }}</td>
                                    <td class="py-2 px-4 border-b">{{ $item['id_barang'] }}</td>
                                    <td class="py-2 px-4 border-b">{{ $item['kategori']['nama_kategori'] }}</td>
                                    <td class="py-2 px-4 border-b">{{ $item['pemasok']['nama_pemasok'] }}</td>
                                    <td class="py-2 px-4 border-b">{{ $item['nama_barang'] }}</td>
                                    <td class="py-2 px-4 border-b">{{ $item['stok_barang'] }}</td>
                                    <td class="py-2 px-4 border-b">
                                        <div class="flex items-center justify-center space-x-4">
                                            <a href="{{ route('admin.editBarang', $item['id']) }}"
                                                class="bg-blue-500 text-white px-4 py-2 rounded-full hover:bg-blue-600">
                                                <i class="fas fa-edit"></i> Edit
                                            </a>
                                            <form action="{{ route('admin.deleteBarang', $item['id']) }}" method="post">
                                                @csrf
                                                <button type="submit"
                                                    class="bg-red-500 text-white px-4 py-2 rounded-full mb-3 mt-2 hover:bg-red-600"
                                                    onclick="return confirm('Are you sure want to delete?')">
                                                    <i class="fas fa-trash"></i> Hapus
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @php $i++ @endphp
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
