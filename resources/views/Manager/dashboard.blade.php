@extends('layouts.global')
@section('title')
    Dashboard - Admin
@endsection

@section('content')
    @include('components.sidebar')
    <div class="p-4 sm:ml-64 bg-gray-700 ">
        <div class="grid grid-cols-3 gap-4 mb-4 ">
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
                    <div class="text-white text-2xl">{{ \App\Models\Kategori::count() }}</div>
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
                    <div class="text-white text-2xl">{{ \App\Models\Barang::count() }}</div>
                </div>
                <div class="flex-grow"></div>
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
                    <div class="text-white text-2xl">{{ \App\Models\Pemasok::count() }}</div>
                </div>
                <div class="flex-grow"></div> <!-- Menambahkan elemen flex-grow untuk memberikan ruang di sebelah kanan -->
            </div>
        </div>
        <div class="flex">
            <div class="flex-1 h-[700px] mx-4 bg-gray-800 rounded p-10">
                <h2 class="text-white text-lg font-semibold mb-4">Barang Kategori</h2>
                <canvas id="chartBarangByKategori" width="400" height="400"></canvas>
            </div>

            <div class="flex-1 h-[700px] mx-4 bg-gray-800 rounded p-10">
                <h2 class="text-white text-lg font-semibold mb-4">Barang Pemasok</h2>
                <canvas id="chartBarangByPemasok" width="400" height="400"></canvas>
            </div>
        </div>

        <script>
            document.addEventListener("DOMContentLoaded", function () {
            // Chart 1
            var ctxBarangByKategori = document.getElementById('chartBarangByKategori').getContext('2d');
            var chartBarangByKategori = new Chart(ctxBarangByKategori, {
                type: 'pie',
                data: {
                    labels: {!! json_encode($kategoriLabels) !!},
                    datasets: [{
                        data: {!! json_encode($barangCountByKategori) !!},
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.8)',
                            'rgba(54, 162, 235, 0.8)',
                            'rgba(255, 206, 86, 0.8)',
                            'rgba(75, 192, 192, 0.8)',
                            'rgba(153, 102, 255, 0.8)',
                            'rgba(255, 159, 64, 0.8)'
                            // Tambahkan warna sesuai dengan jumlah label yang Anda miliki
                        ],
                    }],
                },
                options: {
                    plugins: {
                        legend: {
                            labels: {
                                color: 'white' // Ganti dengan warna yang diinginkan
                            }
                        }
                    }
                }
            });

            // Chart 2
            var ctxBarangByPemasok = document.getElementById('chartBarangByPemasok').getContext('2d');
            var chartBarangByPemasok = new Chart(ctxBarangByPemasok, {
                type: 'pie',
                data: {
                    labels: {!! json_encode($pemasokLabels) !!},
                    datasets: [{
                        data: {!! json_encode($barangCountByPemasok) !!},
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.8)',
                            'rgba(54, 162, 235, 0.8)',
                            'rgba(255, 206, 86, 0.8)',
                            'rgba(75, 192, 192, 0.8)',
                            'rgba(153, 102, 255, 0.8)',
                            'rgba(255, 159, 64, 0.8)'
                            // Tambahkan warna sesuai dengan jumlah label yang Anda miliki
                        ],
                    }],
                },
                options: {
                    plugins: {
                        legend: {
                            labels: {
                                color: 'white' // Ganti dengan warna yang diinginkan
                            }
                        }
                    }
                }
            });
        });

        </script>
        <div class="flex items-center justify-center h-screen py-10 my-8 rounded bg-gray-800">
            <div class="flex flex-col items-center justify-center rounded w-full h-full my-20 mx-12 bg-white">
                <p class="text-5xl text-gray-500 mb-7">
                    Selamat Datang
                </p>
                <p class="text-5xl text-gray-500">
                    Manager {{ Auth::user()->name }}
                </p>
            </div>
        </div>

    </div>
@endsection
