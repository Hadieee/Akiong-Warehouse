@extends('layouts.global')

@section('title')
    Edit Data Barang - Akiong Warehouse
@endsection

@section('content')
    <div class="relative h-screen">
        <img class="w-full h-full object-cover" src="{{ asset('assets/bg.jpg') }}" alt="Background Image">
        <div class="flex items-center justify-center h-full absolute inset-0">
            <div class="w-full max-w-sm p-4 border rounded-lg shadow sm:p-6 md:p-8 bg-gray-800 border-gray-700">
                <form class="space-y-6" action="{{ route('admin.updateBarang', $barangs->id) }}" method="post">
                    @csrf
                    <a href="/admin/barang">
                        <i class="fas fa-arrow-left scale-150 text-white mr-2 hover:text-gray-200"></i>
                    </a>
                    <h5 class="flex text-xl font-medium text-white justify-center">Edit Data
                        Barang
                    </h5>
                    <div>
                        <label for="id_barang" class="block mb-2 text-sm font-medium text-white">ID
                            Barang</label>
                        <input type="text" name="id_barang"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                            placeholder="id barang..." value="{{ $barangs->id_barang }}" required>
                    </div>
                    <div>
                        <label for="nama_barang" class="block mb-2 text-sm font-medium text-white">Nama
                            Barang</label>
                        <input type="text" name="nama_barang" placeholder="nama barang..."
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                            value="{{ $barangs->nama_barang }}" required>
                    </div>
                    <div>
                        <label for="stok_barang" class="block mb-2 text-sm font-medium text-white">Stok
                            Barang</label>
                        <input type="number" name="stok_barang" placeholder="stok barang..."
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                            value="{{ $barangs->stok_barang }}" required>
                    </div>
                    <div>
                        <label for="kategori_id"
                            class="block mb-2 text-sm font-medium text-white">Kategori Barang</label>
                        <select name="kategori_id"
                            class="w-full p-2.5 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                            <option value="" disabled selected>Kategori Barang...</option>
                            @foreach ($kategoris as $kategori)
                                <option value="{{ $kategori->id }}"
                                    {{ $barangs->kategori_id == $kategori->id ? 'selected' : '' }}>
                                    {{ $kategori->nama_kategori }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <label for="pemasok_id" class="block mb-2 text-sm font-medium text-white">Pemasok
                            Barang</label>
                        <select name="pemasok_id"
                            class="w-full p-2.5 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                            <option value="" disabled selected>Pemasok Barang...</option>
                            @foreach ($pemasoks as $pemasok)
                                <option value="{{ $kategori->id }}"
                                    {{ $barangs->pemasok_id == $pemasok->id ? 'selected' : '' }}>
                                    {{ $pemasok->nama_pemasok }}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit"
                        class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Edit Data
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
