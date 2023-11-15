<nav class="flex flex-row p-8 justify-between items-center">
    <img src="{{ asset('assets/Akiong-Warehouse.png') }}" alt="" class="w-fit h-10">
    <ul class="flex flex-row gap-2 items-center justify-center">
        <li class="flex">
            <a href="#about" class="font-normal text-[#636262] transition hover:text-[#013dd6] py-1.5 px-2">
                Tentang Kami
            </a>
        </li>
        <li class="flex">
            <a href="#benefit" class="font-normal text-[#636262] transition hover:text-[#013dd6] py-1.5 px-2">
                Keunggulan
            </a>
        </li>
        <li class="flex">
            <a href="#fitur" class="font-normal text-[#636262] transition hover:text-[#013dd6] py-1.5 px-2">
                Fitur-Fitur
            </a>
        </li>
        <li class="flex">
            <a href="#testi" class="font-normal text-[#636262] transition hover:text-[#013dd6] py-1.5 px-2">
                Tetimonial
            </a>
        </li>
    </ul>
    <a href="{{ route('login') }}"
        class="group relative bg-blue-700 px-8 py-4 w-36 text-white rounded-lg font-bold flex justify-center gap-4 hover:bg-blue-800 transition ease-in">
        Login
    </a>
</nav>
