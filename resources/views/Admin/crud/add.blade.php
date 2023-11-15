@extends('layouts.global')

@section('content')
    <div class="w-full h-full flex">
        @include('components.sidebar')
        <div class="w-full flex flex-col bg-slate-100">
            <div class="h-full m-4 p-8 bg-white rounded-lg drop-shadow-md">
                @if (session('error'))
                    <div class="w-full relative mb-6">
                        <div class="p-2 rounded-sm bg-red-100 ring-1 ring-red-500">
                            <p class="text-red-500">
                                {{ session('error') }}
                            </p>
                        </div>
                    </div>
                @endif
                @if (session('success'))
                    <div class="w-full relative mb-6">
                        <div class="p-2 rounded-sm bg-green-100 ring-1 ring-green-500 flex">
                            <p class="text-green-500">
                                {{ session('success') }}
                            </p>
                        </div>
                    </div>
                @endif
                <p class="text-4xl font-bold mb-4">Data Resep</p>
                <hr><br>
                <div class="w-full h-auto flex justify-end">
                    <a href="{{ route('admin.add') }}"
                        class="px-4 py-2 bg-green-600 rounded-md text text-white hover:bg-green-700">Tambah</a>
                </div><br>
                <div class="relative overflow-x-auto">
                    <table class="w-full text-sm text-left text-gray-500">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    No.
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    ID Resep
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Nama Resep
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Nama Obat
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Jumlah Obat
                                </th>
                                {{-- <th scope="col" class="px-6 py-3">
                                    Apoteker
                                </th> --}}
                                <th scope="col" class="px-6 py-3">
                                    Gambar Resep
                                </th>
                                <th scope="col" class="px-20 py-3">
                                    Aksi
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($resep as $rsp)
                                <tr class="bg-white border-b">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                        {{ $rsp->id }}
                                    </th>
                                    <td class="px-6 py-4">
                                        {{ $rsp->id_resep }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $rsp->nama_resep }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $rsp->nama_obat }}
                                    </td>
                                    <td class="px-6 py-4 text-center">
                                        {{ $rsp->jumlah_obat }}
                                    </td>
                                    {{-- <td class="px-6 py-4">
                                        {{ $rsp->apoteker->nama_apoteker }}
                                    </td> --}}
                                    <td class="px-6 py-4">
                                        <!-- Menampilkan gambar -->
                                        @if ($rsp->gambar_obat)
                                            <img src="{{ asset('storage/assets/images/' . $rsp->gambar_obat) }}" alt="Gambar Obat"
                                                class="w-auto h-auto">
                                        @else
                                            <p>No Image</p>
                                        @endif
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="w-full h-auto flex gap-2 justify-center">
                                            <a href="{{ route('staff.edit', $rsp->id) }}"
                                                class="p-2 bg-yellow-300 rounded-md hover:bg-yellow-400">
                                                <svg xmlns="http://www.w3.org/2000/svg" height="24"
                                                    viewBox="0 -960 960 960" width="24" class="fill-yellow-700">
                                                    <path
                                                        d="M200-200h56l345-345-56-56-345 345v56Zm572-403L602-771l56-56q23-23 56.5-23t56.5 23l56 56q23 23 24 55.5T829-660l-57 57Zm-58 59L290-120H120v-170l424-424 170 170Zm-141-29-28-28 56 56-28-28Z" />
                                                </svg>
                                            </a>
                                            <form action="{{ route('staff.delete', $rsp->id) }}" method="post">
                                                @csrf
                                                <button type="submit" class="p-2 bg-red-600 rounded-md hover:bg-red-700"
                                                    onclick="return confirm('Are you sure want to delete?')">
                                                    <svg xmlns="http://www.w3.org/2000/svg" height="24"
                                                        viewBox="0 -960 960 960" width="24" class="fill-red-100">
                                                        <path
                                                            d="M280-120q-33 0-56.5-23.5T200-200v-520h-40v-80h200v-40h240v40h200v80h-40v520q0 33-23.5 56.5T680-120H280Zm400-600H280v520h400v-520ZM360-280h80v-360h-80v360Zm160 0h80v-360h-80v360ZM280-720v520-520Z" />
                                                    </svg>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
