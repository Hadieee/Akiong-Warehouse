    @extends('layouts.global')

    @section('title')
    Tambah Data Kategori - Akiong Warehouse
    @endsection

    @section('content')
        <div class="relative h-screen">
            <img class="w-full h-full object-cover" src="{{ asset('assets/bg.jpg') }}" alt="Background Image">
            <div class="flex items-center justify-center h-full absolute inset-0">
                <div class="w-full max-w-sm p-4 border rounded-lg shadow sm:p-6 md:p-8 bg-gray-800 border-gray-700">
                    <form class="space-y-6" action="{{route('admin.storeKategori')}}" method="post">
                        @csrf
                        <a href="/admin/kategori">
                            <i class="fas fa-arrow-left scale-150 text-white mr-2 hover:text-gray-200"></i>
                        </a>
                        <h5 class="flex text-xl font-medium text-white justify-center">Tambah Data
                            Kategori
                        </h5>
                        <div>
                            <label for="id_kategori" class="block mb-2 text-sm font-medium text-white ">ID
                                Kategori</label>
                            <input type="text" name="id_kategori"
                                class="bg-gray-50 border border-gray-300 text-white text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 "
                                placeholder="id kategori..." required>
                        </div>
                        <div>
                            <label for="nama_kategori"
                                class="block mb-2 text-sm font-medium text-white">Nama
                                Kategori</label>
                            <input type="text" name="nama_kategori" placeholder="nama kategori..."
                                class="bg-gray-50 border border-gray-300 text-white text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 "
                                required>
                        </div>
                        <button type="submit"
                            class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Tambah
                            Data</button>
                    </form>
                </div>
            </div>
        </div>
    @endsection
