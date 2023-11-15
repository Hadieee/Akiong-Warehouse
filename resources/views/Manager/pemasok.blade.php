@extends('layouts.global')
@section('title')
    Data Pemasok - Manager
@endsection

@section('content')
    @include('components.sidebar')
    <div class="p-2 sm:ml-64">
        <div class="flex items-center justify-center h-screen py-8 rounded bg-gray-800">
            <div class="flex items-center justify-center rounded w-full h-auto mx-10 my-0 bg-white">
                <table class="w-full text-sm text-center">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                        <tr>

                            <th class="py-2 px-4 border-b">ID Pemasok</th>
                            <th class="py-2 px-4 border-b">Nama Pemasok</th>
                            <th class="py-2 px-4 border-b">Nomor Telepon</th>
                            <th class="py-2 px-4 border-b">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pemasok as $index => $item)
                        <tr>
                            <td class="py-2 px-4 border-b">{{ ++$index }}</td>
                            <td class="py-2 px-4 border-b">{{ $item->nama_pemasok }}</td>
                            <td class="py-2 px-4 border-b">{{ $item->no_telepon }}</td>
                            <td class="py-2 px-4 border-b">
                                <button class="bg-blue-500 text-white px-4 py-2 rounded-full hover:bg-blue-600">
                                    <i class="fas fa-edit"></i> Edit
                                </button>
                                <button class="bg-red-500 text-white px-4 py-2 rounded-full ml-2 hover:bg-red-600">
                                    <i class="fas fa-trash"></i> Hapus
                                </button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
