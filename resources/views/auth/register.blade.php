@extends('layouts.global')

@section('title')
    Register - Akiong Warehouse
@endsection

@section('content')
    <div class="relative">
        <img class="w-full h-full object-cover" src="{{ asset('assets/bg.jpg') }}" alt="Background Image">
            <form action="{{ route('register.action') }}" method="post" class="w-full flex flex-col items-start">
                <div class="absolute top-0 left-0 w-full h-full bg-opacity-50 bg-gray-200">
                <div class="flex w-full max-w-sm mx-auto overflow-hidden bg-white rounded-lg shadow-lg dark:bg-gray-800 lg:max-w-4xl mt-20 mb-20">
                    @csrf
                    <div  class="w-full px-6 py-8 md:px-8 lg:w-1/2">
                        <img class="lg:block lg:w-full lg:h-full hidden md:block" src="{{ asset('assets/sign_up.png') }}" alt="">
                    </div>

                    <div class="w-full px-6 py-8 md:px-8 lg:w-1/2">
                        <div class="flex justify-center mx-auto">
                            <img class="w-auto h-7 sm:h-8" src="{{ asset('assets/Akiong-Warehouse.png') }}" alt="">
                        </div>

                        <p class="mt-3 text-xl text-center text-gray-600 dark:text-gray-200">
                            Welcome back!
                        </p>

                        <div class="mt-6">
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
                            <div class="p-2 rounded-sm bg-green-100 ring-1 ring-green-500">
                                <p class="text-green-500">
                                    {{ session('success') }}
                                </p>
                            </div>
                        </div>
                    @endif
                        </div>

                        <div class="mt-4">
                            <label class="block mb-2 text-sm font-medium text-gray-600 dark:text-gray-200">Full Name</label>
                            <input type="text" name="name" placeholder="Full Name"
                                class="block w-full px-4 py-2 text-gray-700 bg-white border rounded-lg dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring focus:ring-blue-300" />
                        </div>

                        <div class="mt-4">
                            <label class="block mb-2 text-sm font-medium text-gray-600 dark:text-gray-200">Username</label>
                            <input type="text" name="username" placeholder="Username"
                                class="block w-full px-4 py-2 text-gray-700 bg-white border rounded-lg dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring focus:ring-blue-300" />
                        </div>

                        <div class="mt-4">
                            <label class="block mb-2 text-sm font-medium text-gray-600 dark:text-gray-200">Password</label>
                            <input type="password" name="password" placeholder="Password"
                                class="block w-full px-4 py-2 text-gray-700 bg-white border rounded-lg dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring focus:ring-blue-300" />
                        </div>

                        <div class="mt-4">
                            <div class="flex justify-between">
                                <label class="block mb-2 text-sm font-medium text-gray-600 dark:text-gray-200">Confirm
                                    Password</label>
                            </div>

                            <input type="password" name="confirm_password" placeholder="Confirm Password"
                                class="block w-full px-4 py-2 text-gray-700 bg-white border rounded-lg dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring focus:ring-blue-300" />
                        </div>

                        <input type="hidden" name="role" value="admin">

                        <div class="mt-6">
                            <button type="submit"
                                class="w-full px-6 py-3 text-sm font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-blue-800 rounded-lg hover:bg-blue-700 focus:outline-none focus:ring focus:ring-gray-300 focus:ring-opacity-50">
                                Sign Up
                            </button>
                        </div>

                        <div class="flex items-center justify-between mt-4">
                            <span class="w-1/5 border-b dark:border-gray-600 md:w-1/4"></span>

                            <a href="{{ route('login') }}"
                                class="text-xs text-gray-500 uppercase dark:text-gray-400 hover:underline">Already have an
                                account?</a>

                            <span class="w-1/5 border-b dark:border-gray-600 md:w-1/4"></span>

                        </div>

                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
