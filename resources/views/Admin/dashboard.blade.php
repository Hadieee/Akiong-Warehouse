@extends('layouts.global')
@section('title')
    Dashboard - Admin
@endsection

@section('content')
    @include('components.sidebar')
    <div class="p-4 sm:ml-64">
        <div class="grid grid-cols-3 gap-4 mb-4">
            <div class="flex items-center justify-center h-24 rounded bg-gray-800">
                <span class="text-white stamp mr-3 bg-indigo" style="border-radius: 8px;">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-file-database" width="64"
                        height="64" viewBox="0 0 24 24" stroke-width="1.25" stroke="currentColor" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <ellipse cx="12" cy="12.75" rx="4" ry="1.75"></ellipse>
                        <path d="M8 12.5v3.75c0 .966 1.79 1.75 4 1.75s4 -.784 4 -1.75v-3.75"></path>
                        <path d="M14 3v4a1 1 0 0 0 1 1h4"></path>
                        <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z">
                        </path>
                    </svg>
                </span>
                <div class="lh-sm">
                    <div class="strong text-white ">
                        Data Kategori
                    </div>
                    <div class="text-white text-2xl">0</div>
                </div>
                <div class="flex-grow"></div> <!-- Menambahkan elemen flex-grow untuk memberikan ruang di sebelah kanan -->
            </div>

            <div class="flex items-center justify-center h-24 rounded bg-gray-800">
                <span class="text-white stamp mr-3 bg-indigo" style="border-radius: 8px;">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-file-database"
                        width="64" height="64" viewBox="0 0 24 24" stroke-width="1.25" stroke="currentColor"
                        fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <ellipse cx="12" cy="12.75" rx="4" ry="1.75"></ellipse>
                        <path d="M8 12.5v3.75c0 .966 1.79 1.75 4 1.75s4 -.784 4 -1.75v-3.75"></path>
                        <path d="M14 3v4a1 1 0 0 0 1 1h4"></path>
                        <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z">
                        </path>
                    </svg>
                </span>
                <div class="lh-sm">
                    <div class="strong text-white ">
                        Data Barang
                    </div>
                    <div class="text-white text-2xl">0</div>
                </div>
                <div class="flex-grow"></div> <!-- Menambahkan elemen flex-grow untuk memberikan ruang di sebelah kanan -->
            </div>

            <div class="flex items-center justify-center h-24 rounded bg-gray-800">
                <span class="text-white stamp mr-3 bg-indigo" style="border-radius: 8px;">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-file-database"
                        width="64" height="64" viewBox="0 0 24 24" stroke-width="1.25" stroke="currentColor"
                        fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <ellipse cx="12" cy="12.75" rx="4" ry="1.75"></ellipse>
                        <path d="M8 12.5v3.75c0 .966 1.79 1.75 4 1.75s4 -.784 4 -1.75v-3.75"></path>
                        <path d="M14 3v4a1 1 0 0 0 1 1h4"></path>
                        <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z">
                        </path>
                    </svg>
                </span>
                <div class="lh-sm">
                    <div class="strong text-white ">
                        Data Pemasok
                    </div>
                    <div class="text-white text-2xl">0</div>
                </div>
                <div class="flex-grow"></div> <!-- Menambahkan elemen flex-grow untuk memberikan ruang di sebelah kanan -->
            </div>
        </div>
        <div class="flex items-center justify-center h-screen py-10 my-8 rounded bg-gray-800">
            <div class="flex items-center justify-center rounded w-full h-full my-20 mx-12 bg-white">
                <p class="text-2xl text-gray-500">
                    Test
                </p>
            </div>
        </div>
    </div>
@endsection
