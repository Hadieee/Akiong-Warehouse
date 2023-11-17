<div class="flex flex-col">
    <aside id="cta-button-sidebar"
        class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0"
        aria-label="Sidebar">
        <div class="h-full px-3 py-4 overflow-y-auto bg-gray-800 flex flex-col justify-between">
            <div>
                <a href="dashboard" class="flex items-center ps-2.5 mb-5">
                    <img src="{{ asset('assets/storage-stacks.png') }}" class="h-6 me-3 sm:h-7" />
                    <span class="self-center text-xl font-semibold whitespace-nowrap text-white">Akiong
                        Warehouse</span>
                </a>

            </div>
            <div>
                <ul class="font-medium space-y-10 justify-between">
                    <li>
                        <a href="kategori"
                            class="flex items-center p-2 rounded-lg text-white hover:bg-gray-700 group">
                            <svg class="flex-shrink-0 w-5 h-5 transition duration-75 text-gray-400 group-hover:group-hover:text-white"
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                viewBox="0 0 18 18">
                                <path
                                    d="M6.143 0H1.857A1.857 1.857 0 0 0 0 1.857v4.286C0 7.169.831 8 1.857 8h4.286A1.857 1.857 0 0 0 8 6.143V1.857A1.857 1.857 0 0 0 6.143 0Zm10 0h-4.286A1.857 1.857 0 0 0 10 1.857v4.286C10 7.169 10.831 8 11.857 8h4.286A1.857 1.857 0 0 0 18 6.143V1.857A1.857 1.857 0 0 0 16.143 0Zm-10 10H1.857A1.857 1.857 0 0 0 0 11.857v4.286C0 17.169.831 18 1.857 18h4.286A1.857 1.857 0 0 0 8 16.143v-4.286A1.857 1.857 0 0 0 6.143 10Zm10 0h-4.286A1.857 1.857 0 0 0 10 11.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 18 16.143v-4.286A1.857 1.857 0 0 0 16.143 10Z">
                                </path>
                            </svg>
                            <span class="flex-1 ms-3 whitespace-nowrap">Kategori</span>
                        </a>
                    </li>
                    <li>
                        <a href="barang"
                            class="flex items-center p-2 rounded-lg text-white hover:bg-gray-700 group">
                            <svg class="flex-shrink-0 w-5 h-5 transition duration-75 text-gray-400 group-hover:group-hover:text-white"
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                viewBox="0 0 18 20">
                                <path
                                    d="M17 5.923A1 1 0 0 0 16 5h-3V4a4 4 0 1 0-8 0v1H2a1 1 0 0 0-1 .923L.086 17.846A2 2 0 0 0 2.08 20h13.84a2 2 0 0 0 1.994-2.153L17 5.923ZM7 9a1 1 0 0 1-2 0V7h2v2Zm0-5a2 2 0 1 1 4 0v1H7V4Zm6 5a1 1 0 1 1-2 0V7h2v2Z">
                                </path>
                            </svg>
                            <span class="flex-1 ms-3 whitespace-nowrap">Barang</span>
                        </a>
                    </li>
                    <li>
                        <a href="pemasok"
                            class="flex items-center p-2 rounded-lg text-white hover:bg-gray-700 group">
                            <svg class="flex-shrink-0 w-5 h-5 transition duration-75 text-gray-400 group-hover:group-hover:text-white"
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                viewBox="0 0 20 18">
                                <path
                                    d="M14 2a3.963 3.963 0 0 0-1.4.267 6.439 6.439 0 0 1-1.331 6.638A4 4 0 1 0 14 2Zm1 9h-1.264A6.957 6.957 0 0 1 15 15v2a2.97 2.97 0 0 1-.184 1H19a1 1 0 0 0 1-1v-1a5.006 5.006 0 0 0-5-5ZM6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z">
                                </path>
                            </svg>
                            <span class="flex-1 ms-3 whitespace-nowrap">Pemasok</span>
                        </a>
                    </li>
                    <li class="flex-10"></li>
                </ul>
            </div>

            <div>
                <ul class="font-medium space-y-32">
                    <li class=""></li>
                    <li>
                        <a href="{{ route('logout') }}" onclick="return confirm('Are you sure?')"
                            class="flex items-center p-2 rounded-lg text-white hover:bg-gray-700 group">
                            <svg class="flex-shrink-0 w-5 h-5 transition duration-75 text-gray-400 group-hover:group-hover:text-white"
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 18 16">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M1 8h11m0 0L8 4m4 4-4 4m4-11h3a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-3" />
                            </svg>
                            <span class="flex-1 ms-3 whitespace-nowrap">Log Out</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </aside>
</div>
