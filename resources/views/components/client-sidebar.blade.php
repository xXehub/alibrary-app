<aside class="scroll-container hidden lg:block w-1/6 border-r fixed left-0 top-0 h-screen py-6 overflow-y-auto z-10">
    <a href="{{ route('home') }}" class="flex items-center justify-center">
        <img src="{{ asset('static/logo.png') }}" style="height: 29px; width: auto;" alt="" class="mx-auto">
    </a>

    <div class="mt-6 flex flex-col gap-y-1 text-gray-500 fill-gray-500 text-sm">

        <a href="{{ route('home') }}"
            class="flex items-center space-x-2 p-2 hover:bg-gray-50 hover:text-primary-500 pl-4 lg:pl-6  {{ Route::is('home') ? 'border-l-4 border-l-primary-600 text-primary-600' : '' }}">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                </path>
            </svg>
            <span>Beranda</span>
        </a>

        <a href="{{ route('bukuClient.index') }}"
            class="flex items-center space-x-2 p-2 hover:bg-gray-50 hover:text-primary-500 pl-4 lg:pl-6 {{ Route::is('bukuClient.index') ? 'border-l-4 border-l-primary-600 text-primary-600' : '' }}">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253">
                </path>
            </svg>
            <span>Daftar Koleksi Buku</span>
            {{-- <span
            class="hidden xl:flex items-center justify-center px-2 py-1 text-xs font-medium leading-none text-white bg-primary-600 rounded-full animate-pulse">Baru</span> --}}
        </a>

        <a href="https://perpustakaan.jakarta.go.id/transaction"
            class="flex items-center space-x-2 p-2 hover:bg-gray-50 hover:text-primary-500 pl-4 lg:pl-6 ">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                </path>
            </svg>
            <span>History Peminjaman</span>
        </a>

        <a href="https://perpustakaan.jakarta.go.id/mobile-library"
            class="flex items-center space-x-2 p-2 hover:bg-gray-50 hover:text-primary-500 pl-4 lg:pl-6">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path d="M9 17a2 2 0 11-4 0 2 2 0 014 0zM19 17a2 2 0 11-4 0 2 2 0 014 0z"></path>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1m8-1a1 1 0 01-1 1H9m4-1V8a1 1 0 011-1h2.586a1 1 0 01.707.293l3.414 3.414a1 1 0 01.293.707V16a1 1 0 01-1 1h-1m-6-1a1 1 0 001 1h1M5 17a2 2 0 104 0m-4 0a2 2 0 114 0m6 0a2 2 0 104 0m-4 0a2 2 0 114 0">
                </path>
            </svg>
            <span>Jadwal Pengembalian</span>
        </a>

        <a href="https://perpustakaan.jakarta.go.id/account"
            class="flex items-center space-x-2 p-2 hover:bg-gray-50 hover:text-primary-500 pl-4 lg:pl-6 ">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
            </svg>
            <span>Tentang Akun</span>
        </a>
    </div>
</aside>
<aside
    class="scroll-container hidden lg:flex w-1/6 border-l fixed right-0 top-0 h-screen p-4 overflow-y-auto flex-col space-y-4">
    <form class="mx-auto w-full" action="https://perpustakaan.jakarta.go.id/book" method="GET">
        <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only"></label>
        <div class="relative">
            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-gray-500" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                </svg>
            </div>
            <input name="keyword" type="search" id="default-search"
                class="block w-full p-3 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-primary-500 focus:border-primary-500"
                value="" placeholder="Cari Judul/Kategori" autofocus="">
        </div>
    </form>

    {{-- <div class=""> --}}
    {{-- <a target="_blank" href="https://perpustakaan.jakarta.go.id/catalog-requests/create"
            class="flex items-center justify-center space-x-2 text-white bg-primary-700 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-200 font-medium rounded-lg text-xs px-3 py-1.5 cursor-pointer transition ease-in-out hover:-translate-y-1 hover:scale-110">
            {{-- <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                stroke-width="1.5" stroke="currentColor" class="h-4 w-4"> --}}
    {{-- <path stroke-linecap="round" stroke-linejoin="round"
                    d="M7.5 7.5h-.75A2.25 2.25 0 004.5 9.75v7.5a2.25 2.25 0 002.25 2.25h7.5a2.25 2.25 0 002.25-2.25v-7.5a2.25 2.25 0 00-2.25-2.25h-.75m0-3l-3-3m0 0l-3 3m3-3v11.25m6-2.25h.75a2.25 2.25 0 012.25 2.25v7.5a2.25 2.25 0 01-2.25 2.25h-7.5a2.25 2.25 0 01-2.25-2.25v-.75">
                </path>
            </svg>
            <span class="line-clamp-1">SIGN IN</span>
        </a>
    </div>
</div> --}}

    {{-- <div class="mt-2 justify-center">
    <h3 class="text-sm mb-2">Ganti Bahasa</h3>
    <div class="grid grid-cols-2 gap-2 text-sm">
        <a href="https://perpustakaan.jakarta.go.id/language/id"
            class="border text-orange-500 border border-orange-500 bg-orange-50 rounded-lg hover:bg-orange-50 hover:text-orange-500 hover:border-orange-500">
            <div class="rounded-lg flex items-center justify-center space-x-2 text-center p-3">
                <img src="images/Flag_of_Indonesia.svg" class="w-6 h-4 rounded border"
                    alt="">
                <span>ID</span>
            </div> --
        </a>
        <a href="https://perpustakaan.jakarta.go.id/language/en"
            class="relative border  rounded-lg hover:bg-orange-50 hover:text-orange-500 hover:border-orange-500">
            <div class="rounded-lg flex items-center justify-center space-x-2 text-center p-3">
                <img src="images/Flag_of_the_United_Kingdom.svg" class="w-6 h-4 rounded"
                    alt="">
                <span>EN</span>
            </div>
            <div
                class="absolute -top-3 -right-2 rounded px-1 py-0.5 text-xs bg-green-100 text-green-500">
                v0.25
            </div>
        </a>
    </div>
</div> --}}
    @guest
        <div class="mb-8">
            <h3 class="text-sm">Daftar/Masuk ke Akun:</h3>
            <div class="grid grid-cols-2 gap-2 mt-2 text-xs">
                <a href="{{ route('register') }}" class="col-span-full border rounded-lg">
                    <div
                        class="rounded-lg flex items-center justify-center space-x-1.5 text-center p-3 bg-gray-50 hover:bg-gray-100">
                        {{-- <svg class="w-4 h-4 shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"> --}}
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75">
                        </path>
                        </svg>
                        <span class="bold-text">DAFTAR</span>
                    </div>
                </a>
                <a href="{{ route('login') }}" class="col-span-full border rounded-lg">
                    <div
                        class="rounded-lg flex items-center justify-center space-x-1.5 text-center p-3 bg-gray-50 hover:bg-gray-100">
                        {{-- <svg class="w-4 h-4 shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"> --}}
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M8.625 9.75a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H8.25m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H12m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0h-.375m-13.5 3.01c0 1.6 1.123 2.994 2.707 3.227 1.087.16 2.185.283 3.293.369V21l4.184-4.183a1.14 1.14 0 0 1 .778-.332 48.294 48.294 0 0 0 5.83-.498c1.585-.233 2.708-1.626 2.708-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0 0 12 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018Z">
                        </path>
                        </svg>
                        <span class="bold-text">MASUK</span>
                    </div>
                </a>
            </div>
        </div>
    @endguest
    @auth
    <div class="">
        <div class="mb-8">
            {{-- <h3 class="text-sm">Daftar/Masuk ke Akun:</h3> --}}
            <div class="grid grid-cols-2 gap-2 mt-2 text-xs">
                <a href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();"
                    class="col-span-full border rounded-lg">
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                    <div
                        class="rounded-lg flex items-center justify-center space-x-1.5 text-center p-3 bg-gray-50 hover:bg-gray-100">
                        {{-- <svg class="w-4 h-4 shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"> --}}
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M8.625 9.75a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H8.25m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H12m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0h-.375m-13.5 3.01c0 1.6 1.123 2.994 2.707 3.227 1.087.16 2.185.283 3.293.369V21l4.184-4.183a1.14 1.14 0 0 1 .778-.332 48.294 48.294 0 0 0 5.83-.498c1.585-.233 2.708-1.626 2.708-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0 0 12 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018Z">
                        </path>
                        </svg>
                        <span class="bold-text">LOGOUT</span>
                    </div>
                </a>
            </div>
        </div>

            <div class="rounded-lg bg-primary-50/50 border border-primary-500 p-3">
                <div class="flex items-center space-x-2 text-primary-800">
                    <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z">
                        </path>
                    </svg>
                    <span class="sr-only">Info</span>
                    <h3 class="text-sm font-medium">Info</h3>
                </div>

                <div class="mt-2 mb-4 text-sm text-primary-800">
                    Tidak menemukan buku yang kamu cari?
                </div>

                <a target="_blank" href=""
                    class="flex items-center justify-center space-x-2 text-white bg-primary-700 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-200 font-medium rounded-lg text-xs px-3 py-1.5 cursor-pointer transition ease-in-out hover:-translate-y-1 hover:scale-110">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="h-4 w-4">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M7.5 7.5h-.75A2.25 2.25 0 004.5 9.75v7.5a2.25 2.25 0 002.25 2.25h7.5a2.25 2.25 0 002.25-2.25v-7.5a2.25 2.25 0 00-2.25-2.25h-.75m0-3l-3-3m0 0l-3 3m3-3v11.25m6-2.25h.75a2.25 2.25 0 012.25 2.25v7.5a2.25 2.25 0 01-2.25 2.25h-7.5a2.25 2.25 0 01-2.25-2.25v-.75">
                        </path>
                    </svg>
                    <span class="line-clamp-1">Hubungi Kami</span>
                </a>
            </div>
        </div>
    @endauth
</aside>
