@extends('layouts.global')
@section('title')
    Data Kategori - Manager
@endsection

@section('content')
    @include('components.sidebar')
    <div class="sm:ml-64">
        <div class="flex flex-col h-screen px-6 py-8 items-center bg-gray-700 ">
            <p class="text-4xl font-bold mb-10 mx-5 text-white">Data Kategori</p>

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

            <div class="h-full w-full m-4 p-8 bg-white rounded-lg drop-shadow-md overflow-auto">
                <div class="flex flex-col items-center rounded w-full bg-white">
                    <hr><br>
                    <div class="w-full h-auto flex justify-end pr-5 mb-4">
                        <a href="{{ route('admin.addKategori') }}"
                            class="px-4 py-2 bg-green-600 rounded-md text text-white hover:bg-green-700 flex items-center">
                            <i class="fas fa-print mr-2"></i> Print
                        </a>
                    </div>
                    <table class="w-full text-sm text-center">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-100">
                            <tr>
                                <th class="py-2 px-4 border-b">No</th>
                                <th class="py-2 px-4 border-b">ID Kategori</th>
                                <th class="py-2 px-4 border-b">Nama Kategori</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kategori as $index => $item)
                                <tr>
                                    <td class="py-2 px-4 border-b">{{ $item->id }}</td>
                                    <td class="py-2 px-4 border-b">{{ $item->id_kategori }}</td>
                                    <td class="py-2 px-4 border-b">{{ $item->nama_kategori }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
