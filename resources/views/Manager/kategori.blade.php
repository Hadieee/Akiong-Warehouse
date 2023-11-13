@extends('layouts.global')
@section('title')
    Dashboard - Admin
@endsection

@section('content')
    @include('components.sidebar')
    <div class="p-2 sm:ml-64">
        <div class="flex items-center justify-center h-screen py-8 my-8 rounded bg-gray-800">
            <div class="flex items-center justify-center rounded w-full h-full mx-12 bg-white">
                <p class="text-2xl text-gray-500">
                    Ini tabel pemasok
                </p>
            </div>
        </div>
    </div>
@endsection
