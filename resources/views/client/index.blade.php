<x-client-app>
    <style>
        .bold-text {
      font-weight: bold;
    }
    </style>
    <body class="font-mulish antialiased overflow-x-hidden text-sm md:text-base">
        <div class="flex min-h-screen relative">
            <header class="w-full z-50 fixed lg:hidden">
                <section id="bottom-navigation" class="lg:hidden fixed inset-x-0 bottom-0 z-10 bg-white border-t-2">
                    <div x-data="{ searchChoiceCard: false }" x-cloak="" @click.outside="searchChoiceCard = false">
                        <div class="text-xs rounded-t bg-gray-100 p-4 shadow" x-show="searchChoiceCard">
                            <div class="flex items-center justify-between mb-4">
                                <div class="font-medium text-sm">
                                    Fitur Lainnya
                                </div>
                                <svg @click="searchChoiceCard = false" xmlns="http://www.w3.org/2000/svg"
                                    class="cursor-pointer h-4 w-4" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M6 18L18 6M6 6l12 12"></path>
                                </svg>
                            </div>

                            <div class="grid grid-cols-2 items-center justify-between gap-2">
                                <a href="https://kios-perpustakaan.jakarta.go.id/?nisn=">
                                    <div class="border rounded bg-white p-2 hover:bg-primary-600 hover:text-white">
                                        <div class="flex items-center gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01">
                                                </path>
                                            </svg>
                                            <span class="text-xs">Reservasi Event</span>
                                        </div>
                                    </div>
                                </a>

                                <a href="{{ route('bukuClient.index') }}">
                                    <div class="border rounded bg-white p-2 hover:bg-primary-600 hover:text-white">
                                        <div class="flex items-center gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253">
                                                </path>
                                            </svg>
                                            <span class="text-xs">Daftar Koleksi</span>
                                        </div>
                                    </div>
                                </a>

                                <a href="https://perpustakaan.jakarta.go.id/digital-book">
                                    <div class="border rounded bg-white p-2 hover:bg-primary-600 hover:text-white">
                                        <div class="flex items-center gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" class="size-6">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M6.429 9.75 2.25 12l4.179 2.25m0-4.5 5.571 3 5.571-3m-11.142 0L2.25 7.5 12 2.25l9.75 5.25-4.179 2.25m0 0L21.75 12l-4.179 2.25m0 0 4.179 2.25L12 21.75 2.25 16.5l4.179-2.25m11.142 0-5.571 3-5.571-3">
                                                </path>
                                            </svg>
                                            <span class="text-xs">Katalog Sastra</span>
                                        </div>
                                    </div>
                                </a>

                                <a href="https://perpustakaan.jakarta.go.id/e-resources">
                                    <div class="border rounded bg-white p-2 hover:bg-primary-600 hover:text-white">
                                        <div class="flex items-center gap-2">
                                            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="1.5"
                                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                                                aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 01-2.25 2.25M16.5 7.5V18a2.25 2.25 0 002.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 002.25 2.25h13.5M6 7.5h3v3H6v-3z">
                                                </path>
                                            </svg>
                                            <span class="text-xs">E-Resources</span>
                                        </div>
                                    </div>
                                </a>

                                <a href="https://perpustakaan.jakarta.go.id/event?type=Bacajakarta">
                                    <div class="border rounded bg-white p-2 hover:bg-primary-600 hover:text-white">
                                        <div class="flex items-center gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z">
                                                </path>
                                            </svg>
                                            <span class="text-xs">Event</span>
                                        </div>
                                    </div>
                                </a>

                                <a href="https://perpustakaan.jakarta.go.id/library/search">
                                    <div class="border rounded bg-white p-2 hover:bg-primary-600 hover:text-white">
                                        <div class="flex items-center gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z">
                                                </path>
                                            </svg>
                                            <span class="text-xs">Cari Perpustakaan</span>
                                        </div>
                                    </div>
                                </a>

                                <a href="https://perpustakaan.jakarta.go.id/catalog-requests/create">
                                    <div class="border rounded bg-white p-2 hover:bg-primary-600 hover:text-white">
                                        <div class="flex items-center gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M9 8.25H7.5a2.25 2.25 0 00-2.25 2.25v9a2.25 2.25 0 002.25 2.25h9a2.25 2.25 0 002.25-2.25v-9a2.25 2.25 0 00-2.25-2.25H15m0-3l-3-3m0 0l-3 3m3-3V15">
                                                </path>
                                            </svg>
                                            <span class="text-xs">Usul Buku</span>
                                        </div>
                                    </div>
                                </a>

                                <a href="">
                                    <div class="border rounded bg-white p-2 hover:bg-primary-600 hover:text-white">
                                        <div class="flex items-center gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                                                </path>
                                            </svg>
                                            <span class="text-xs">Agenda Literasi</span>
                                        </div>
                                    </div>
                                </a>

                                <a href="">
                                    <div class="border rounded bg-white p-2 hover:bg-primary-600 hover:text-white">
                                        <div class="flex items-center gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path
                                                    d="M9 17a2 2 0 11-4 0 2 2 0 014 0zM19 17a2 2 0 11-4 0 2 2 0 014 0z">
                                                </path>
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1m8-1a1 1 0 01-1 1H9m4-1V8a1 1 0 011-1h2.586a1 1 0 01.707.293l3.414 3.414a1 1 0 01.293.707V16a1 1 0 01-1 1h-1m-6-1a1 1 0 001 1h1M5 17a2 2 0 104 0m-4 0a2 2 0 114 0m6 0a2 2 0 104 0m-4 0a2 2 0 114 0">
                                                </path>
                                            </svg>
                                            <span class="text-xs">Jadwal Pusling</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div id="tabs" class="flex justify-between py-1">
                            <a href="https://perpustakaan.jakarta.go.id"
                                class="font-medium text-primary-400 w-full hover:text-primary-400 justify-center inline-block text-center pt-2 pb-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="inline-block mb-1 h-6 w-6"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                                    </path>
                                </svg>
                                <span class="tab tab-home block text-xs">Beranda</span>
                            </a>
                            <a href="https://perpustakaan.jakarta.go.id/cart"
                                class="text-gray-600 w-full hover:text-primary-400 justify-center inline-block text-center pt-2 pb-1">
                                <div class="relative inline-block">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="inline-block mb-1 h-6 w-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007ZM8.625 10.5a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm7.5 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z">
                                        </path>
                                    </svg>
                                </div>
                                <span class="tab tab-loan block text-xs">Keranjang</span>
                            </a>
                            <div @click="searchChoiceCard = !searchChoiceCard" onclick="return false"
                                class="w-full hover:text-primary-400 justify-center inline-block text-center pt-2 pb-1 text-gray-600">
                                <svg xmlns="http://www.w3.org/2000/svg" class="inline-block mb-1 h-6 w-6"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                </svg>
                                <span class="tab tab-explore block text-xs">Jelajahi</span>
                            </div>
                            <a href="https://perpustakaan.jakarta.go.id/transaction"
                                class="text-gray-600 w-full hover:text-primary-400 justify-center inline-block text-center pt-2 pb-1">
                                <div class="relative inline-block">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="inline-block mb-1 h-6 w-6"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                                        </path>
                                    </svg>
                                </div>
                                <span class="tab tab-cart block text-xs">Transaksi</span>
                            </a>
                            <a href="https://perpustakaan.jakarta.go.id/account"
                                class="text-gray-600 w-full hover:text-primary-400 justify-center inline-block text-center pt-2 pb-1">
                                <div class="relative inline-block">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="inline-block mb-1 h-6 w-6"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z">
                                        </path>
                                    </svg>
                                </div>
                                <span class="tab tab-account block text-xs">Akun</span>
                            </a>
                        </div>
                    </div>
                </section>
            </header>

{{-- NAVBAR NDE KENE --}}
            <main class="w-full lg:w-4/6 mx-auto p-4 mb-16 lg:mb-0">
                <div class="fixed left-0 lg:left-5 bottom-0 lg:bottom-1 z-50">
                </div>
                <div class="min-h-screen">

                    <section class="mb-4">
                        <div class="flex items-center gap-4 justify-between">
                            <div>
                                <h3 class="font-bold text-base lg:text-xl">Rekomendasi Buku</h3>
                                <p class="hidden lg:block text-xs lg:text-sm text-gray-600">Temukan inspirasi baca
                                    kamu!</p>
                            </div>

                            {{-- <ul class="flex text-xs text-gray-600 items-center space-x-4">
                                <li
                                    class="hidden lg:flex px-3 py-1 rounded bg-orange-50 text-orange-500 hover:bg-orange-100 cursor-pointer">
                                    Direkomendasikan
                                </li>
                                <li
                                    class="hidden lg:flex px-3 py-1 rounded bg-gray-50 text-gray-500 hover:bg-orange-50 hover:text-orange-500 cursor-pointer">
                                    <a
                                        href="https://perpustakaan.jakarta.go.id/book?subjects=Inspirasi&amp;subject_filter=Inspirasi">Inspirasi</a>
                                </li>
                                <li
                                    class="hidden lg:flex px-3 py-1 rounded bg-gray-50 text-gray-500 hover:bg-orange-50 hover:text-orange-500 cursor-pointer">
                                    <a
                                        href="https://perpustakaan.jakarta.go.id/book?subjects=Fiksi&amp;subject_filter=Fiksi">Fiksi</a>
                                </li>
                                <li
                                    class="hidden lg:flex px-3 py-1 rounded bg-gray-50 text-gray-500 hover:bg-orange-50 hover:text-orange-500 cursor-pointer">
                                    <a
                                        href="https://perpustakaan.jakarta.go.id/book?subjects=Administrasi&amp;subject_filter=Administrasi">Administrasi</a>
                                </li>
                                <li
                                    class="hidden lg:flex px-3 py-1 rounded bg-gray-50 text-gray-500 hover:bg-orange-50 hover:text-orange-500 cursor-pointer">
                                    <a
                                        href="https://perpustakaan.jakarta.go.id/book?subjects=Ensiklopedia&amp;subject_filter=Ensiklopedia">Ensiklopedia</a>
                                </li>
                                <li
                                    class="hidden lg:flex px-3 py-1 rounded bg-gray-50 text-gray-500 hover:bg-orange-50 hover:text-orange-500 cursor-pointer">
                                    <a
                                        href="https://perpustakaan.jakarta.go.id/book?subjects=Humor&amp;subject_filter=Humor">Humor</a>
                                </li>
                                <li
                                    class="block lg:hidden px-3 py-1 rounded bg-gray-50 text-gray-500 hover:bg-orange-50 hover:text-orange-500 cursor-pointer">
                                    <a href="https://perpustakaan.jakarta.go.id/book">Lainnya</a>
                                </li>
                            </ul> --}}
                        </div>

                        <div class="swiper book-recommendation-swiper z-0">
                            <div class="swiper-wrapper py-4 lg:py-6">
                                <div class="swiper-slide h-full">
                                    <a href="https://perpustakaan.jakarta.go.id/book/detail?cn=INLIS000000000849908">
                                        <div class="relative rounded-xl overflow-hidden cursor-pointer w-full">
                                            <img data-src="https://koleksiperpus.jakarta.go.id/dispusip/uploaded_files/sampul_koleksi/original/Monograf/238670.jpg"
                                                src="images/no-images.png"
                                                onerror="this.onerror=null; this.src='https://perpustakaan.jakarta.go.id/assets/img/no-images.png'"
                                                class="lazyload rounded object-center object-cover brightness-110 rounded-lg w-full h-72 sm:h-80 -z-10"
                                                alt="Kingdom of ash :  a throne of glass novel">
                                            <div
                                                class="absolute top-0 h-full w-full bg-gradient-to-t from-black/70  p-3 flex flex-col justify-between">
                                                <div class="flex items-center justify-between">





                                                </div>

                                                <div
                                                    class="self-center flex flex-col items-center space-y-1 text-center p-2 w-full">
                                                    <div
                                                        class="max-w-full capitalize line-clamp-1 overflow-x-hidden rounded-lg px-3 font-medium py-1 bg-primary-500/50 text-xs border-primary-500 text-white">
                                                        Fiksi Asing
                                                    </div>
                                                    <h1
                                                        class="capitalize text-white text-base sm:text-lg font-bold drop-shadow-md line-clamp-1">
                                                        Kingdom of ash : a throne of glass novel</h1>
                                                    <h3 class="text-gray-100 text-xs sm:text-sm line-clamp-1">Sarah J.
                                                        Maas (Pengarang)</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide h-full">
                                    <a href="https://perpustakaan.jakarta.go.id/book/detail?cn=INLIS000000000850832">
                                        <div class="relative rounded-xl overflow-hidden cursor-pointer w-full">
                                            <img data-src="https://koleksiperpus.jakarta.go.id/dispusip/uploaded_files/sampul_koleksi/original/Monograf/241721.jpg"
                                                src="images/no-images.png"
                                                onerror="this.onerror=null; this.src='https://perpustakaan.jakarta.go.id/assets/img/no-images.png'"
                                                class="lazyload rounded object-center object-cover brightness-110 rounded-lg w-full h-72 sm:h-80 -z-10"
                                                alt="Pasta kacang merah">
                                            <div
                                                class="absolute top-0 h-full w-full bg-gradient-to-t from-black/70  p-3 flex flex-col justify-between">
                                                <div class="flex items-center justify-between">
                                                </div>

                                                <div
                                                    class="self-center flex flex-col items-center space-y-1 text-center p-2 w-full">
                                                    <div
                                                        class="max-w-full capitalize line-clamp-1 overflow-x-hidden rounded-lg px-3 font-medium py-1 bg-primary-500/50 text-xs border-primary-500 text-white">
                                                        Fiksi Jepang / Kehidupan
                                                    </div>
                                                    <h1
                                                        class="capitalize text-white text-base sm:text-lg font-bold drop-shadow-md line-clamp-1">
                                                        Pasta kacang merah</h1>
                                                    <h3 class="text-gray-100 text-xs sm:text-sm line-clamp-1">Sukegawa,
                                                        Durian (Pengarang) ; Asri Pratiwi Wulandari (penerjemah) ; Ruth
                                                        Priscilia Angelina (editor)</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide h-full">
                                    <a href="https://perpustakaan.jakarta.go.id/book/detail?cn=INLIS000000000849842">
                                        <div class="relative rounded-xl overflow-hidden cursor-pointer w-full">
                                            <img data-src="https://koleksiperpus.jakarta.go.id/dispusip/uploaded_files/sampul_koleksi/original/Monograf/238453.jpg"
                                                src="images/no-images.png"
                                                onerror="this.onerror=null; this.src='https://perpustakaan.jakarta.go.id/assets/img/no-images.png'"
                                                class="lazyload rounded object-center object-cover brightness-110 rounded-lg w-full h-72 sm:h-80 -z-10"
                                                alt="Weyward">
                                            <div
                                                class="absolute top-0 h-full w-full bg-gradient-to-t from-black/70  p-3 flex flex-col justify-between">
                                                <div class="flex items-center justify-between">
                                                </div>

                                                <div
                                                    class="self-center flex flex-col items-center space-y-1 text-center p-2 w-full">
                                                    <div
                                                        class="max-w-full capitalize line-clamp-1 overflow-x-hidden rounded-lg px-3 font-medium py-1 bg-primary-500/50 text-xs border-primary-500 text-white">
                                                        Fiksi Asing
                                                    </div>
                                                    <h1
                                                        class="capitalize text-white text-base sm:text-lg font-bold drop-shadow-md line-clamp-1">
                                                        Weyward</h1>
                                                    <h3 class="text-gray-100 text-xs sm:text-sm line-clamp-1">Emilia
                                                        Hart (Pengarang)</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide h-full">
                                    <a href="https://perpustakaan.jakarta.go.id/book/detail?cn=INLIS000000000849942">
                                        <div class="relative rounded-xl overflow-hidden cursor-pointer w-full">
                                            <img data-src="https://koleksiperpus.jakarta.go.id/dispusip/uploaded_files/sampul_koleksi/original/Monograf/238795.jpg"
                                                src="images/no-images.png"
                                                onerror="this.onerror=null; this.src='https://perpustakaan.jakarta.go.id/assets/img/no-images.png'"
                                                class="lazyload rounded object-center object-cover brightness-110 rounded-lg w-full h-72 sm:h-80 -z-10"
                                                alt="Happy place">
                                            <div
                                                class="absolute top-0 h-full w-full bg-gradient-to-t from-black/70  p-3 flex flex-col justify-between">
                                                <div class="flex items-center justify-between">
                                                </div>

                                                <div
                                                    class="self-center flex flex-col items-center space-y-1 text-center p-2 w-full">
                                                    <div
                                                        class="max-w-full capitalize line-clamp-1 overflow-x-hidden rounded-lg px-3 font-medium py-1 bg-primary-500/50 text-xs border-primary-500 text-white">
                                                        Fiksi Asing
                                                    </div>
                                                    <h1
                                                        class="capitalize text-white text-base sm:text-lg font-bold drop-shadow-md line-clamp-1">
                                                        Happy place</h1>
                                                    <h3 class="text-gray-100 text-xs sm:text-sm line-clamp-1">Emily
                                                        Henry (Pengarang)</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide h-full">
                                    <a href="https://perpustakaan.jakarta.go.id/book/detail?cn=INLIS000000000834657">
                                        <div class="relative rounded-xl overflow-hidden cursor-pointer w-full">
                                            <img data-src="https://koleksiperpus.jakarta.go.id/dispusip/uploaded_files/sampul_koleksi/original/Monograf/187326.jpeg"
                                                src="images/no-images.png"
                                                onerror="this.onerror=null; this.src='https://perpustakaan.jakarta.go.id/assets/img/no-images.png'"
                                                class="lazyload rounded object-center object-cover brightness-110 rounded-lg w-full h-72 sm:h-80 -z-10"
                                                alt="The architecture of love.">
                                            <div
                                                class="absolute top-0 h-full w-full bg-gradient-to-t from-black/70  p-3 flex flex-col justify-between">
                                                <div class="flex items-center justify-between">
                                                </div>

                                                <div
                                                    class="self-center flex flex-col items-center space-y-1 text-center p-2 w-full">
                                                    <div
                                                        class="max-w-full capitalize line-clamp-1 overflow-x-hidden rounded-lg px-3 font-medium py-1 bg-primary-500/50 text-xs border-primary-500 text-white">
                                                        Fiksi Indonesia / Novel
                                                    </div>
                                                    <h1
                                                        class="capitalize text-white text-base sm:text-lg font-bold drop-shadow-md line-clamp-1">
                                                        The architecture of love.</h1>
                                                    <h3 class="text-gray-100 text-xs sm:text-sm line-clamp-1">Ika
                                                        Natassa (Pengarang) ; Rain Chudori (Pengarang)</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide h-full">
                                    <a href="https://perpustakaan.jakarta.go.id/book/detail?cn=INLIS000000000849926">
                                        <div class="relative rounded-xl overflow-hidden cursor-pointer w-full">
                                            <img data-src="https://koleksiperpus.jakarta.go.id/dispusip/uploaded_files/sampul_koleksi/original/Monograf/238731.jpeg"
                                                src="images/no-images.png"
                                                onerror="this.onerror=null; this.src='https://perpustakaan.jakarta.go.id/assets/img/no-images.png'"
                                                class="lazyload rounded object-center object-cover brightness-110 rounded-lg w-full h-72 sm:h-80 -z-10"
                                                alt="Cold, cold bones">
                                            <div
                                                class="absolute top-0 h-full w-full bg-gradient-to-t from-black/70  p-3 flex flex-col justify-between">
                                                <div class="flex items-center justify-between">
                                                </div>

                                                <div
                                                    class="self-center flex flex-col items-center space-y-1 text-center p-2 w-full">
                                                    <div
                                                        class="max-w-full capitalize line-clamp-1 overflow-x-hidden rounded-lg px-3 font-medium py-1 bg-primary-500/50 text-xs border-primary-500 text-white">
                                                        Fiksi Asing
                                                    </div>
                                                    <h1
                                                        class="capitalize text-white text-base sm:text-lg font-bold drop-shadow-md line-clamp-1">
                                                        Cold, cold bones</h1>
                                                    <h3 class="text-gray-100 text-xs sm:text-sm line-clamp-1">Kathy
                                                        Reichs (Pengarang)</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide h-full">
                                    <a href="https://perpustakaan.jakarta.go.id/book/detail?cn=INLIS000000000849929">
                                        <div class="relative rounded-xl overflow-hidden cursor-pointer w-full">
                                            <img data-src="https://koleksiperpus.jakarta.go.id/dispusip/uploaded_files/sampul_koleksi/original/Monograf/238745.png"
                                                src="images/no-images.png"
                                                onerror="this.onerror=null; this.src='https://perpustakaan.jakarta.go.id/assets/img/no-images.png'"
                                                class="lazyload rounded object-center object-cover brightness-110 rounded-lg w-full h-72 sm:h-80 -z-10"
                                                alt="Confessions of a forty-something f##k up">
                                            <div
                                                class="absolute top-0 h-full w-full bg-gradient-to-t from-black/70  p-3 flex flex-col justify-between">
                                                <div class="flex items-center justify-between">
                                                </div>

                                                <div
                                                    class="self-center flex flex-col items-center space-y-1 text-center p-2 w-full">
                                                    <div
                                                        class="max-w-full capitalize line-clamp-1 overflow-x-hidden rounded-lg px-3 font-medium py-1 bg-primary-500/50 text-xs border-primary-500 text-white">
                                                        Fiksi Asing
                                                    </div>
                                                    <h1
                                                        class="capitalize text-white text-base sm:text-lg font-bold drop-shadow-md line-clamp-1">
                                                        Confessions of a forty-something f##k up</h1>
                                                    <h3 class="text-gray-100 text-xs sm:text-sm line-clamp-1">Alexandra
                                                        Potter (Pengarang)</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide h-full">
                                    <a href="https://perpustakaan.jakarta.go.id/book/detail?cn=INLIS000000000844578">
                                        <div class="relative rounded-xl overflow-hidden cursor-pointer w-full">
                                            <img data-src="https://koleksiperpus.jakarta.go.id/dispusip/uploaded_files/sampul_koleksi/original/Monograf/221181.jpg"
                                                src="images/no-images.png"
                                                onerror="this.onerror=null; this.src='https://perpustakaan.jakarta.go.id/assets/img/no-images.png'"
                                                class="lazyload rounded object-center object-cover brightness-110 rounded-lg w-full h-72 sm:h-80 -z-10"
                                                alt="Why has nobody told me this before? :  everyday tools for life's ups &amp; down">
                                            <div
                                                class="absolute top-0 h-full w-full bg-gradient-to-t from-black/70  p-3 flex flex-col justify-between">
                                                <div class="flex items-center justify-between">
                                                </div>

                                                <div
                                                    class="self-center flex flex-col items-center space-y-1 text-center p-2 w-full">
                                                    <div
                                                        class="max-w-full capitalize line-clamp-1 overflow-x-hidden rounded-lg px-3 font-medium py-1 bg-primary-500/50 text-xs border-primary-500 text-white">
                                                        Mentality
                                                    </div>
                                                    <h1
                                                        class="capitalize text-white text-base sm:text-lg font-bold drop-shadow-md line-clamp-1">
                                                        Why has nobody told me this before? : everyday tools for life's
                                                        ups &amp; down</h1>
                                                    <h3 class="text-gray-100 text-xs sm:text-sm line-clamp-1">Smith,
                                                        Julie (Pengarang)</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide h-full">
                                    <a href="https://perpustakaan.jakarta.go.id/book/detail?cn=INLIS000000000849912">
                                        <div class="relative rounded-xl overflow-hidden cursor-pointer w-full">
                                            <img data-src="https://koleksiperpus.jakarta.go.id/dispusip/uploaded_files/sampul_koleksi/original/Monograf/238684.jpg"
                                                src="images/no-images.png"
                                                onerror="this.onerror=null; this.src='https://perpustakaan.jakarta.go.id/assets/img/no-images.png'"
                                                class="lazyload rounded object-center object-cover brightness-110 rounded-lg w-full h-72 sm:h-80 -z-10"
                                                alt="Circe">
                                            <div
                                                class="absolute top-0 h-full w-full bg-gradient-to-t from-black/70  p-3 flex flex-col justify-between">
                                                <div class="flex items-center justify-between">

                                                </div>

                                                <div
                                                    class="self-center flex flex-col items-center space-y-1 text-center p-2 w-full">
                                                    <div
                                                        class="max-w-full capitalize line-clamp-1 overflow-x-hidden rounded-lg px-3 font-medium py-1 bg-primary-500/50 text-xs border-primary-500 text-white">
                                                        Fiksi Asing
                                                    </div>
                                                    <h1
                                                        class="capitalize text-white text-base sm:text-lg font-bold drop-shadow-md line-clamp-1">
                                                        Circe</h1>
                                                    <h3 class="text-gray-100 text-xs sm:text-sm line-clamp-1">Madeline
                                                        Miller (Pengarang)</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide h-full">
                                    <a href="https://perpustakaan.jakarta.go.id/book/detail?cn=INLIS000000000849927">
                                        <div class="relative rounded-xl overflow-hidden cursor-pointer w-full">
                                            <img data-src="https://koleksiperpus.jakarta.go.id/dispusip/uploaded_files/sampul_koleksi/original/Monograf/238735.jpg"
                                                src="images/no-images.png"
                                                onerror="this.onerror=null; this.src='https://perpustakaan.jakarta.go.id/assets/img/no-images.png'"
                                                class="lazyload rounded object-center object-cover brightness-110 rounded-lg w-full h-72 sm:h-80 -z-10"
                                                alt="To kill a troubadour">
                                            <div
                                                class="absolute top-0 h-full w-full bg-gradient-to-t from-black/70  p-3 flex flex-col justify-between">
                                                <div class="flex items-center justify-between">
                                                </div>

                                                <div
                                                    class="self-center flex flex-col items-center space-y-1 text-center p-2 w-full">
                                                    <div
                                                        class="max-w-full capitalize line-clamp-1 overflow-x-hidden rounded-lg px-3 font-medium py-1 bg-primary-500/50 text-xs border-primary-500 text-white">
                                                        Fiksi Asing
                                                    </div>
                                                    <h1
                                                        class="capitalize text-white text-base sm:text-lg font-bold drop-shadow-md line-clamp-1">
                                                        To kill a troubadour</h1>
                                                    <h3 class="text-gray-100 text-xs sm:text-sm line-clamp-1">Martin
                                                        Walker (Pengarang)</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide h-full">
                                    <a href="https://perpustakaan.jakarta.go.id/book/detail?cn=INLIS000000000844470">
                                        <div class="relative rounded-xl overflow-hidden cursor-pointer w-full">
                                            <img data-src="https://koleksiperpus.jakarta.go.id/dispusip/uploaded_files/sampul_koleksi/original/Monograf/220836.jpg"
                                                src="images/no-images.png"
                                                onerror="this.onerror=null; this.src='https://perpustakaan.jakarta.go.id/assets/img/no-images.png'"
                                                class="lazyload rounded object-center object-cover brightness-110 rounded-lg w-full h-72 sm:h-80 -z-10"
                                                alt="Killing commendatore">
                                            <div
                                                class="absolute top-0 h-full w-full bg-gradient-to-t from-black/70  p-3 flex flex-col justify-between">
                                                <div class="flex items-center justify-between">
                                                </div>

                                                <div
                                                    class="self-center flex flex-col items-center space-y-1 text-center p-2 w-full">
                                                    <div
                                                        class="max-w-full capitalize line-clamp-1 overflow-x-hidden rounded-lg px-3 font-medium py-1 bg-primary-500/50 text-xs border-primary-500 text-white">
                                                        Japanese Literatures / Life
                                                    </div>
                                                    <h1
                                                        class="capitalize text-white text-base sm:text-lg font-bold drop-shadow-md line-clamp-1">
                                                        Killing commendatore</h1>
                                                    <h3 class="text-gray-100 text-xs sm:text-sm line-clamp-1">Murakami,
                                                        Haruki (Pengarang)</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide h-full">
                                    <a href="https://perpustakaan.jakarta.go.id/book/detail?cn=INLIS000000000842219">
                                        <div class="relative rounded-xl overflow-hidden cursor-pointer w-full">
                                            <img data-src="https://koleksiperpus.jakarta.go.id/dispusip/uploaded_files/sampul_koleksi/original/Monograf/212936.jpg"
                                                src="images/no-images.png"
                                                onerror="this.onerror=null; this.src='https://perpustakaan.jakarta.go.id/assets/img/no-images.png'"
                                                class="lazyload rounded object-center object-cover brightness-110 rounded-lg w-full h-72 sm:h-80 -z-10"
                                                alt="Lelaki - lelaki tanpa perempuan">
                                            <div
                                                class="absolute top-0 h-full w-full bg-gradient-to-t from-black/70  p-3 flex flex-col justify-between">
                                                <div class="flex items-center justify-between">
                                                </div>

                                                <div
                                                    class="self-center flex flex-col items-center space-y-1 text-center p-2 w-full">
                                                    <div
                                                        class="max-w-full capitalize line-clamp-1 overflow-x-hidden rounded-lg px-3 font-medium py-1 bg-primary-500/50 text-xs border-primary-500 text-white">
                                                        Kesusastraan Jepang / Roman
                                                    </div>
                                                    <h1
                                                        class="capitalize text-white text-base sm:text-lg font-bold drop-shadow-md line-clamp-1">
                                                        Lelaki - lelaki tanpa perempuan</h1>
                                                    <h3 class="text-gray-100 text-xs sm:text-sm line-clamp-1">Murakami,
                                                        Haruki (Pengarang) ; Ribeka Ota (penerjemah) ; Ining Isaiyas
                                                        (penyunting)</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide h-full">
                                    <a href="https://perpustakaan.jakarta.go.id/book/detail?cn=INLIS000000000843895">
                                        <div class="relative rounded-xl overflow-hidden cursor-pointer w-full">
                                            <img data-src="https://koleksiperpus.jakarta.go.id/dispusip/uploaded_files/sampul_koleksi/original/Monograf/218866.png"
                                                src="images/no-images.png"
                                                onerror="this.onerror=null; this.src='https://perpustakaan.jakarta.go.id/assets/img/no-images.png'"
                                                class="lazyload rounded object-center object-cover brightness-110 rounded-lg w-full h-72 sm:h-80 -z-10"
                                                alt="Novelist as a vocation">
                                            <div
                                                class="absolute top-0 h-full w-full bg-gradient-to-t from-black/70  p-3 flex flex-col justify-between">
                                                <div class="flex items-center justify-between">
                                                </div>

                                                <div
                                                    class="self-center flex flex-col items-center space-y-1 text-center p-2 w-full">
                                                    <div
                                                        class="max-w-full capitalize line-clamp-1 overflow-x-hidden rounded-lg px-3 font-medium py-1 bg-primary-500/50 text-xs border-primary-500 text-white">
                                                        Japanese Literature / Novel
                                                    </div>
                                                    <h1
                                                        class="capitalize text-white text-base sm:text-lg font-bold drop-shadow-md line-clamp-1">
                                                        Novelist as a vocation</h1>
                                                    <h3 class="text-gray-100 text-xs sm:text-sm line-clamp-1">Murakami,
                                                        Haruki (Pengarang)</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide h-full">
                                    <a href="https://perpustakaan.jakarta.go.id/book/detail?cn=INLIS000000000849938">
                                        <div class="relative rounded-xl overflow-hidden cursor-pointer w-full">
                                            <img data-src="https://koleksiperpus.jakarta.go.id/dispusip/uploaded_files/sampul_koleksi/original/Monograf/238780.jpg"
                                                src="images/no-images.png"
                                                onerror="this.onerror=null; this.src='https://perpustakaan.jakarta.go.id/assets/img/no-images.png'"
                                                class="lazyload rounded object-center object-cover brightness-110 rounded-lg w-full h-72 sm:h-80 -z-10"
                                                alt="The midnight library">
                                            <div
                                                class="absolute top-0 h-full w-full bg-gradient-to-t from-black/70  p-3 flex flex-col justify-between">
                                                <div class="flex items-center justify-between">
                                                </div>

                                                <div
                                                    class="self-center flex flex-col items-center space-y-1 text-center p-2 w-full">
                                                    <div
                                                        class="max-w-full capitalize line-clamp-1 overflow-x-hidden rounded-lg px-3 font-medium py-1 bg-primary-500/50 text-xs border-primary-500 text-white">
                                                        Fiksi Asing
                                                    </div>
                                                    <h1
                                                        class="capitalize text-white text-base sm:text-lg font-bold drop-shadow-md line-clamp-1">
                                                        The midnight library</h1>
                                                    <h3 class="text-gray-100 text-xs sm:text-sm line-clamp-1">Matt Haig
                                                        (Pengarang)</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide h-full">
                                    <a href="https://perpustakaan.jakarta.go.id/book/detail?cn=INLIS000000000849932">
                                        <div class="relative rounded-xl overflow-hidden cursor-pointer w-full">
                                            <img data-src="https://koleksiperpus.jakarta.go.id/dispusip/uploaded_files/sampul_koleksi/original/Monograf/238760.jpeg"
                                                src="images/no-images.png"
                                                onerror="this.onerror=null; this.src='https://perpustakaan.jakarta.go.id/assets/img/no-images.png'"
                                                class="lazyload rounded object-center object-cover brightness-110 rounded-lg w-full h-72 sm:h-80 -z-10"
                                                alt="Time shelter">
                                            <div
                                                class="absolute top-0 h-full w-full bg-gradient-to-t from-black/70  p-3 flex flex-col justify-between">
                                                <div class="flex items-center justify-between">
                                                </div>

                                                <div
                                                    class="self-center flex flex-col items-center space-y-1 text-center p-2 w-full">
                                                    <div
                                                        class="max-w-full capitalize line-clamp-1 overflow-x-hidden rounded-lg px-3 font-medium py-1 bg-primary-500/50 text-xs border-primary-500 text-white">
                                                        Fiksi Asing
                                                    </div>
                                                    <h1
                                                        class="capitalize text-white text-base sm:text-lg font-bold drop-shadow-md line-clamp-1">
                                                        Time shelter</h1>
                                                    <h3 class="text-gray-100 text-xs sm:text-sm line-clamp-1">Georgi
                                                        Gospodinov (Pengarang)</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide h-full">
                                    <a href="https://perpustakaan.jakarta.go.id/book/detail?cn=INLIS000000000848083">
                                        <div class="relative rounded-xl overflow-hidden cursor-pointer w-full">
                                            <img data-src="https://koleksiperpus.jakarta.go.id/dispusip/uploaded_files/sampul_koleksi/original/Monograf/232499.jpg"
                                                src="images/no-images.png"
                                                onerror="this.onerror=null; this.src='https://perpustakaan.jakarta.go.id/assets/img/no-images.png'"
                                                class="lazyload rounded object-center object-cover brightness-110 rounded-lg w-full h-72 sm:h-80 -z-10"
                                                alt="7 prajurit bapak">
                                            <div
                                                class="absolute top-0 h-full w-full bg-gradient-to-t from-black/70  p-3 flex flex-col justify-between">
                                                <div class="flex items-center justify-between">
                                                </div>

                                                <div
                                                    class="self-center flex flex-col items-center space-y-1 text-center p-2 w-full">
                                                    <div
                                                        class="max-w-full capitalize line-clamp-1 overflow-x-hidden rounded-lg px-3 font-medium py-1 bg-primary-500/50 text-xs border-primary-500 text-white">
                                                        Novel Indonesia
                                                    </div>
                                                    <h1
                                                        class="capitalize text-white text-base sm:text-lg font-bold drop-shadow-md line-clamp-1">
                                                        7 prajurit bapak</h1>
                                                    <h3 class="text-gray-100 text-xs sm:text-sm line-clamp-1">Wulan
                                                        Nuramalia (Pengarang) ; Fenisa Zahra (Penyunting)</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide h-full">
                                    <a href="https://perpustakaan.jakarta.go.id/book/detail?cn=INLIS000000000821064">
                                        <div class="relative rounded-xl overflow-hidden cursor-pointer w-full">
                                            <img data-src="https://koleksiperpus.jakarta.go.id/dispusip/uploaded_files/sampul_koleksi/original/Monograf/146874.png"
                                                src="images/no-images.png"
                                                onerror="this.onerror=null; this.src='https://perpustakaan.jakarta.go.id/assets/img/no-images.png'"
                                                class="lazyload rounded object-center object-cover brightness-110 rounded-lg w-full h-72 sm:h-80 -z-10"
                                                alt="Perempuan yang menangis kepada bulan hitam">
                                            <div
                                                class="absolute top-0 h-full w-full bg-gradient-to-t from-black/70  p-3 flex flex-col justify-between">
                                                <div class="flex items-center justify-between">
                                                </div>

                                                <div
                                                    class="self-center flex flex-col items-center space-y-1 text-center p-2 w-full">
                                                    <div
                                                        class="max-w-full capitalize line-clamp-1 overflow-x-hidden rounded-lg px-3 font-medium py-1 bg-primary-500/50 text-xs border-primary-500 text-white">
                                                        FIKSI INDONESIA / Adat Istiadat
                                                    </div>
                                                    <h1
                                                        class="capitalize text-white text-base sm:text-lg font-bold drop-shadow-md line-clamp-1">
                                                        Perempuan yang menangis kepada bulan hitam</h1>
                                                    <h3 class="text-gray-100 text-xs sm:text-sm line-clamp-1">Dian
                                                        Purnomo (Pengarang) ; Ruth Priscilia Angelina (editor)</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide h-full">
                                    <a href="https://perpustakaan.jakarta.go.id/book/detail?cn=INLIS000000000843020">
                                        <div class="relative rounded-xl overflow-hidden cursor-pointer w-full">
                                            <img data-src="https://koleksiperpus.jakarta.go.id/dispusip/uploaded_files/sampul_koleksi/original/Monograf/215923.jpg"
                                                src="images/no-images.png"
                                                onerror="this.onerror=null; this.src='https://perpustakaan.jakarta.go.id/assets/img/no-images.png'"
                                                class="lazyload rounded object-center object-cover brightness-110 rounded-lg w-full h-72 sm:h-80 -z-10"
                                                alt="Seribu wajah ayah">
                                            <div
                                                class="absolute top-0 h-full w-full bg-gradient-to-t from-black/70  p-3 flex flex-col justify-between">
                                                <div class="flex items-center justify-between">
                                                </div>

                                                <div
                                                    class="self-center flex flex-col items-center space-y-1 text-center p-2 w-full">
                                                    <div
                                                        class="max-w-full capitalize line-clamp-1 overflow-x-hidden rounded-lg px-3 font-medium py-1 bg-primary-500/50 text-xs border-primary-500 text-white">
                                                        Fiksi Indonesia / Ayah
                                                    </div>
                                                    <h1
                                                        class="capitalize text-white text-base sm:text-lg font-bold drop-shadow-md line-clamp-1">
                                                        Seribu wajah ayah</h1>
                                                    <h3 class="text-gray-100 text-xs sm:text-sm line-clamp-1">Nurun Ala
                                                        (Pengarang) ; Indah Sipahutar (editor)</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide h-full">
                                    <a href="https://perpustakaan.jakarta.go.id/book/detail?cn=INLIS000000000815362">
                                        <div class="relative rounded-xl overflow-hidden cursor-pointer w-full">
                                            <img data-src="https://koleksiperpus.jakarta.go.id/dispusip/uploaded_files/sampul_koleksi/original/Monograf/139492.jpg"
                                                src="images/no-images.png"
                                                onerror="this.onerror=null; this.src='https://perpustakaan.jakarta.go.id/assets/img/no-images.png'"
                                                class="lazyload rounded object-center object-cover brightness-110 rounded-lg w-full h-72 sm:h-80 -z-10"
                                                alt="The nightingale :  Best seller #1 New York times">
                                            <div
                                                class="absolute top-0 h-full w-full bg-gradient-to-t from-black/70  p-3 flex flex-col justify-between">
                                                <div class="flex items-center justify-between">
                                                </div>

                                                <div
                                                    class="self-center flex flex-col items-center space-y-1 text-center p-2 w-full">
                                                    <div
                                                        class="max-w-full capitalize line-clamp-1 overflow-x-hidden rounded-lg px-3 font-medium py-1 bg-primary-500/50 text-xs border-primary-500 text-white">
                                                        Fiksi Inggris / Fantasi
                                                    </div>
                                                    <h1
                                                        class="capitalize text-white text-base sm:text-lg font-bold drop-shadow-md line-clamp-1">
                                                        The nightingale : Best seller #1 New York times</h1>
                                                    <h3 class="text-gray-100 text-xs sm:text-sm line-clamp-1">Hannah,
                                                        Kristin (Pengarang) ; Airien Kusumawardhani (alih bahasa) ;
                                                        Grace Situngkir (editor)</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide h-full">
                                    <a href="https://perpustakaan.jakarta.go.id/book/detail?cn=INLIS000000000849289">
                                        <div class="relative rounded-xl overflow-hidden cursor-pointer w-full">
                                            <img data-src="https://koleksiperpus.jakarta.go.id/dispusip/uploaded_files/sampul_koleksi/original/Monograf/236595.jpeg"
                                                src="images/no-images.png"
                                                onerror="this.onerror=null; this.src='https://perpustakaan.jakarta.go.id/assets/img/no-images.png'"
                                                class="lazyload rounded object-center object-cover brightness-110 rounded-lg w-full h-72 sm:h-80 -z-10"
                                                alt="Namaku alam">
                                            <div
                                                class="absolute top-0 h-full w-full bg-gradient-to-t from-black/70  p-3 flex flex-col justify-between">
                                                <div class="flex items-center justify-between">
                                                </div>

                                                <div
                                                    class="self-center flex flex-col items-center space-y-1 text-center p-2 w-full">
                                                    <div
                                                        class="max-w-full capitalize line-clamp-1 overflow-x-hidden rounded-lg px-3 font-medium py-1 bg-primary-500/50 text-xs border-primary-500 text-white">
                                                        Fiksi Indonesia / Kehidupan
                                                    </div>
                                                    <h1
                                                        class="capitalize text-white text-base sm:text-lg font-bold drop-shadow-md line-clamp-1">
                                                        Namaku alam</h1>
                                                    <h3 class="text-gray-100 text-xs sm:text-sm line-clamp-1">Leila S.
                                                        Chudori (Pengarang) ; Endah Sulwesi (penyunting) ; Christina M.
                                                        Udiani (penyunting)</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide h-full">
                                    <a href="https://perpustakaan.jakarta.go.id/book/detail?cn=INLIS000000000843197">
                                        <div class="relative rounded-xl overflow-hidden cursor-pointer w-full">
                                            <img data-src="https://koleksiperpus.jakarta.go.id/dispusip/uploaded_files/sampul_koleksi/original/Monograf/216588.jpg"
                                                src="images/no-images.png"
                                                onerror="this.onerror=null; this.src='https://perpustakaan.jakarta.go.id/assets/img/no-images.png'"
                                                class="lazyload rounded object-center object-cover brightness-110 rounded-lg w-full h-72 sm:h-80 -z-10"
                                                alt="Teka-teki rumah aneh">
                                            <div
                                                class="absolute top-0 h-full w-full bg-gradient-to-t from-black/70  p-3 flex flex-col justify-between">
                                                <div class="flex items-center justify-between">
                                                </div>

                                                <div
                                                    class="self-center flex flex-col items-center space-y-1 text-center p-2 w-full">
                                                    <div
                                                        class="max-w-full capitalize line-clamp-1 overflow-x-hidden rounded-lg px-3 font-medium py-1 bg-primary-500/50 text-xs border-primary-500 text-white">
                                                        Kesusastraan Jepang / Arsitektur Rumah
                                                    </div>
                                                    <h1
                                                        class="capitalize text-white text-base sm:text-lg font-bold drop-shadow-md line-clamp-1">
                                                        Teka-teki rumah aneh</h1>
                                                    <h3 class="text-gray-100 text-xs sm:text-sm line-clamp-1">Uketsu
                                                        (Pengarang) ; Eri Pramestiningtyas (penerjemah) ; Tan, Juliana
                                                        (penyunting)</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide h-full">
                                    <a href="https://perpustakaan.jakarta.go.id/book/detail?cn=INLIS000000000849276">
                                        <div class="relative rounded-xl overflow-hidden cursor-pointer w-full">
                                            <img data-src="https://koleksiperpus.jakarta.go.id/dispusip/uploaded_files/sampul_koleksi/original/Monograf/236550.jpg"
                                                src="images/no-images.png"
                                                onerror="this.onerror=null; this.src='https://perpustakaan.jakarta.go.id/assets/img/no-images.png'"
                                                class="lazyload rounded object-center object-cover brightness-110 rounded-lg w-full h-72 sm:h-80 -z-10"
                                                alt="Dona dona">
                                            <div
                                                class="absolute top-0 h-full w-full bg-gradient-to-t from-black/70  p-3 flex flex-col justify-between">
                                                <div class="flex items-center justify-between">
                                                </div>

                                                <div
                                                    class="self-center flex flex-col items-center space-y-1 text-center p-2 w-full">
                                                    <div
                                                        class="max-w-full capitalize line-clamp-1 overflow-x-hidden rounded-lg px-3 font-medium py-1 bg-primary-500/50 text-xs border-primary-500 text-white">
                                                        Fiksi Jepang / Keluarga
                                                    </div>
                                                    <h1
                                                        class="capitalize text-white text-base sm:text-lg font-bold drop-shadow-md line-clamp-1">
                                                        Dona dona</h1>
                                                    <h3 class="text-gray-100 text-xs sm:text-sm line-clamp-1">
                                                        Kawaguchi, Toshikazu (Pengarang) ; Pegy Permatasari (alih
                                                        bahasa)</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide h-full">
                                    <a href="https://perpustakaan.jakarta.go.id/book/detail?cn=INLIS000000000849214">
                                        <div class="relative rounded-xl overflow-hidden cursor-pointer w-full">
                                            <img data-src="https://koleksiperpus.jakarta.go.id/dispusip/uploaded_files/sampul_koleksi/original/Monograf/236332.jpg"
                                                src="images/no-images.png"
                                                onerror="this.onerror=null; this.src='https://perpustakaan.jakarta.go.id/assets/img/no-images.png'"
                                                class="lazyload rounded object-center object-cover brightness-110 rounded-lg w-full h-72 sm:h-80 -z-10"
                                                alt="Kresek Hitam">
                                            <div
                                                class="absolute top-0 h-full w-full bg-gradient-to-t from-black/70  p-3 flex flex-col justify-between">
                                                <div class="flex items-center justify-between">
                                                </div>

                                                <div
                                                    class="self-center flex flex-col items-center space-y-1 text-center p-2 w-full">
                                                    <div
                                                        class="max-w-full capitalize line-clamp-1 overflow-x-hidden rounded-lg px-3 font-medium py-1 bg-primary-500/50 text-xs border-primary-500 text-white">
                                                        Novel / Islam
                                                    </div>
                                                    <h1
                                                        class="capitalize text-white text-base sm:text-lg font-bold drop-shadow-md line-clamp-1">
                                                        Kresek Hitam</h1>
                                                    <h3 class="text-gray-100 text-xs sm:text-sm line-clamp-1">Honey Dee
                                                        (Pengarang) ; Dion Rahman (Editor)</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide h-full">
                                    <a href="https://perpustakaan.jakarta.go.id/book/detail?cn=INLIS000000000847781">
                                        <div class="relative rounded-xl overflow-hidden cursor-pointer w-full">
                                            <img data-src="https://koleksiperpus.jakarta.go.id/dispusip/uploaded_files/sampul_koleksi/original/Monograf/231618.jpg"
                                                src="images/no-images.png"
                                                onerror="this.onerror=null; this.src='https://perpustakaan.jakarta.go.id/assets/img/no-images.png'"
                                                class="lazyload rounded object-center object-cover brightness-110 rounded-lg w-full h-72 sm:h-80 -z-10"
                                                alt="Yellowface">
                                            <div
                                                class="absolute top-0 h-full w-full bg-gradient-to-t from-black/70  p-3 flex flex-col justify-between">
                                                <div class="flex items-center justify-between">
                                                </div>

                                                <div
                                                    class="self-center flex flex-col items-center space-y-1 text-center p-2 w-full">
                                                    <div
                                                        class="max-w-full capitalize line-clamp-1 overflow-x-hidden rounded-lg px-3 font-medium py-1 bg-primary-500/50 text-xs border-primary-500 text-white">
                                                        Novel Amerika
                                                    </div>
                                                    <h1
                                                        class="capitalize text-white text-base sm:text-lg font-bold drop-shadow-md line-clamp-1">
                                                        Yellowface</h1>
                                                    <h3 class="text-gray-100 text-xs sm:text-sm line-clamp-1">Kuang,
                                                        Rebecca F. (Pengarang)</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide h-full">
                                    <a href="https://perpustakaan.jakarta.go.id/book/detail?cn=INLIS000000000849258">
                                        <div class="relative rounded-xl overflow-hidden cursor-pointer w-full">
                                            <img data-src="https://koleksiperpus.jakarta.go.id/dispusip/uploaded_files/sampul_koleksi/original/Monograf/236495.jpg"
                                                src="images/no-images.png"
                                                onerror="this.onerror=null; this.src='https://perpustakaan.jakarta.go.id/assets/img/no-images.png'"
                                                class="lazyload rounded object-center object-cover brightness-110 rounded-lg w-full h-72 sm:h-80 -z-10"
                                                alt="Kucing penyelamat buku">
                                            <div
                                                class="absolute top-0 h-full w-full bg-gradient-to-t from-black/70  p-3 flex flex-col justify-between">
                                                <div class="flex items-center justify-between">
                                                </div>

                                                <div
                                                    class="self-center flex flex-col items-center space-y-1 text-center p-2 w-full">
                                                    <div
                                                        class="max-w-full capitalize line-clamp-1 overflow-x-hidden rounded-lg px-3 font-medium py-1 bg-primary-500/50 text-xs border-primary-500 text-white">
                                                        Fiksi / Sastra Jepang
                                                    </div>
                                                    <h1
                                                        class="capitalize text-white text-base sm:text-lg font-bold drop-shadow-md line-clamp-1">
                                                        Kucing penyelamat buku</h1>
                                                    <h3 class="text-gray-100 text-xs sm:text-sm line-clamp-1">
                                                        Natsukawa, Sosuke (Pengarang) ; Lulu Wijaya (alih bahasa) ;
                                                        Tanti Lesmana (editor)</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide h-full">
                                    <a href="https://perpustakaan.jakarta.go.id/book/detail?cn=INLIS000000000845872">
                                        <div class="relative rounded-xl overflow-hidden cursor-pointer w-full">
                                            <img data-src="https://koleksiperpus.jakarta.go.id/dispusip/uploaded_files/sampul_koleksi/original/Monograf/225598.jpg"
                                                src="images/no-images.png"
                                                onerror="this.onerror=null; this.src='https://perpustakaan.jakarta.go.id/assets/img/no-images.png'"
                                                class="lazyload rounded object-center object-cover brightness-110 rounded-lg w-full h-72 sm:h-80 -z-10"
                                                alt="Almost adulting :  self-help approach to deal with quarter-life crisis">
                                            <div
                                                class="absolute top-0 h-full w-full bg-gradient-to-t from-black/70  p-3 flex flex-col justify-between">
                                                <div class="flex items-center justify-between">
                                                </div>

                                                <div
                                                    class="self-center flex flex-col items-center space-y-1 text-center p-2 w-full">
                                                    <div
                                                        class="max-w-full capitalize line-clamp-1 overflow-x-hidden rounded-lg px-3 font-medium py-1 bg-primary-500/50 text-xs border-primary-500 text-white">
                                                        Perkembangan Diri / Psikologi
                                                    </div>
                                                    <h1
                                                        class="capitalize text-white text-base sm:text-lg font-bold drop-shadow-md line-clamp-1">
                                                        Almost adulting : self-help approach to deal with quarter-life
                                                        crisis</h1>
                                                    <h3 class="text-gray-100 text-xs sm:text-sm line-clamp-1">Nadhira
                                                        Afifa (Pengarang) ; Nadire Yasmine (penyunting)</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide h-full">
                                    <a href="https://perpustakaan.jakarta.go.id/book/detail?cn=INLIS000000000842901">
                                        <div class="relative rounded-xl overflow-hidden cursor-pointer w-full">
                                            <img data-src="https://koleksiperpus.jakarta.go.id/dispusip/uploaded_files/sampul_koleksi/original/Monograf/215431.jpg"
                                                src="images/no-images.png"
                                                onerror="this.onerror=null; this.src='https://perpustakaan.jakarta.go.id/assets/img/no-images.png'"
                                                class="lazyload rounded object-center object-cover brightness-110 rounded-lg w-full h-72 sm:h-80 -z-10"
                                                alt="How to win friends and influence people :  in the digital age">
                                            <div
                                                class="absolute top-0 h-full w-full bg-gradient-to-t from-black/70  p-3 flex flex-col justify-between">
                                                <div class="flex items-center justify-between">
                                                </div>

                                                <div
                                                    class="self-center flex flex-col items-center space-y-1 text-center p-2 w-full">
                                                    <div
                                                        class="max-w-full capitalize line-clamp-1 overflow-x-hidden rounded-lg px-3 font-medium py-1 bg-primary-500/50 text-xs border-primary-500 text-white">
                                                        Motivasi
                                                    </div>
                                                    <h1
                                                        class="capitalize text-white text-base sm:text-lg font-bold drop-shadow-md line-clamp-1">
                                                        How to win friends and influence people : in the digital age
                                                    </h1>
                                                    <h3 class="text-gray-100 text-xs sm:text-sm line-clamp-1">Carnegie,
                                                        Dale (Pengarang) ; Nengah Krisnarini (penerjemah)</h3>
                                                </div>
                                            </div>
                                        </div>
                                </div>

                                <div class="swiper-slide h-full">
                                        <div class="relative rounded-xl overflow-hidden cursor-pointer w-full">
                                            <img data-src="https://koleksiperpus.jakarta.go.id/dispusip/uploaded_files/sampul_koleksi/original/Monograf/186291.jpg"
                                                src="images/no-images.png"
                                                onerror="this.onerror=null; this.src='https://perpustakaan.jakarta.go.id/assets/img/no-images.png'"
                                                class="lazyload rounded object-center object-cover brightness-110 rounded-lg w-full h-72 sm:h-80 -z-10"
                                                alt="Belantara = the dark forest">
                                            <div class="absolute top-0 h-full w-full bg-gradient-to-t from-black/70  p-3 flex flex-col justify-between">
                                                <div class="flex items-center justify-between">
                                                </div>

                                                <div class="self-center flex flex-col items-center space-y-1 text-center p-2 w-full">
                                                    <div class="max-w-full capitalize line-clamp-1 overflow-x-hidden rounded-lg px-3 font-medium py-1 bg-primary-500/50 text-xs border-primary-500 text-white">
                                                        Fiksi China
                                                    </div>
                                                    <h1 class="capitalize text-white text-base sm:text-lg font-bold drop-shadow-md line-clamp-1">
                                                        Belantara = the dark forest</h1>
                                                    <h3 class="text-gray-100 text-xs sm:text-sm line-clamp-1">Liu Cixin
                                                        ; Oni Surayaman, (penerjemah) ; Andya Primanda</h3>
                                                </div>
                                            </div>
                                        </div>
                                </div>

                                <div class="swiper-slide h-full">
                                        <div class="relative rounded-xl overflow-hidden cursor-pointer w-full">
                                            <img data-src="https://koleksiperpus.jakarta.go.id/dispusip/uploaded_files/sampul_koleksi/original/Monograf/229674.jpg"
                                                src="images/no-images.png"
                                                onerror="this.onerror=null; this.src='https://perpustakaan.jakarta.go.id/assets/img/no-images.png'"
                                                class="lazyload rounded object-center object-cover brightness-110 rounded-lg w-full h-72 sm:h-80 -z-10"
                                                alt="As long as the lemon trees grow">
                                            <div class="absolute top-0 h-full w-full bg-gradient-to-t from-black/70  p-3 flex flex-col justify-between">
                                                <div class="flex items-center justify-between">
                                                </div>

                                                <div class="self-center flex flex-col items-center space-y-1 text-center p-2 w-full">
                                                    <div class="max-w-full capitalize line-clamp-1 overflow-x-hidden rounded-lg px-3 font-medium py-1 bg-primary-500/50 text-xs border-primary-500 text-white">
                                                        Fiksi Inggris
                                                    </div>
                                                    <h1 class="capitalize text-white text-base sm:text-lg font-bold drop-shadow-md line-clamp-1">
                                                        As long as the lemon trees grow</h1>
                                                    <h3 class="text-gray-100 text-xs sm:text-sm line-clamp-1">Katouh,
                                                        Zoulfa (Pengarang)</h3>
                                                </div>
                                            </div>
                                        </div>
                                </div>

                                <div class="swiper-slide h-full">
                                    <a href="https://perpustakaan.jakarta.go.id/book/detail?cn=INLIS000000000847344">
                                        <div class="relative rounded-xl overflow-hidden cursor-pointer w-full">
                                            <img data-src="https://koleksiperpus.jakarta.go.id/dispusip/uploaded_files/sampul_koleksi/original/Monograf/230428.jpg"
                                                src="images/no-images.png"
                                                onerror="this.onerror=null; this.src='https://perpustakaan.jakarta.go.id/assets/img/no-images.png'"
                                                class="lazyload rounded object-center object-cover brightness-110 rounded-lg w-full h-72 sm:h-80 -z-10"
                                                alt="Mindreader :  ilmu baru untuk menguraikan apa yang sebenarnya dipikirkan orang, apa yang sebenarnya mereka inginkan, dan siapa mereka sebenarnya">
                                            <div
                                                class="absolute top-0 h-full w-full bg-gradient-to-t from-black/70  p-3 flex flex-col justify-between">
                                                <div class="flex items-center justify-between">
                                                </div>

                                                <div
                                                    class="self-center flex flex-col items-center space-y-1 text-center p-2 w-full">
                                                    <div class="max-w-full capitalize line-clamp-1 overflow-x-hidden rounded-lg px-3 font-medium py-1 bg-primary-500/50 text-xs border-primary-500 text-white">
                                                        Pikiran Manusia
                                                    </div>
                                                    <h1 class="capitalize text-white text-base sm:text-lg font-bold drop-shadow-md line-clamp-1">
                                                        Mindreader : ilmu baru untuk menguraikan apa yang sebenarnya
                                                        dipikirkan orang, apa yang sebenarnya mereka inginkan, dan siapa
                                                        mereka sebenarnya</h1>
                                                    <h3 class="text-gray-100 text-xs sm:text-sm line-clamp-1">
                                                        Lieberman, David J (Pengarang) ; Zia Anshor (Penerjemah)</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide h-full">
                                    <a href="https://perpustakaan.jakarta.go.id/book/detail?cn=INLIS000000000847345">
                                        <div class="relative rounded-xl overflow-hidden cursor-pointer w-full">
                                            <img data-src="https://koleksiperpus.jakarta.go.id/dispusip/uploaded_files/sampul_koleksi/original/Monograf/230431.jpg"
                                                src="images/no-images.png"
                                                onerror="this.onerror=null; this.src='https://perpustakaan.jakarta.go.id/assets/img/no-images.png'"
                                                class="lazyload rounded object-center object-cover brightness-110 rounded-lg w-full h-72 sm:h-80 -z-10"
                                                alt="Heidi">
                                            <div
                                                class="absolute top-0 h-full w-full bg-gradient-to-t from-black/70  p-3 flex flex-col justify-between">
                                                <div class="flex items-center justify-between">





                                                </div>

                                                <div
                                                    class="self-center flex flex-col items-center space-y-1 text-center p-2 w-full">
                                                    <div
                                                        class="max-w-full capitalize line-clamp-1 overflow-x-hidden rounded-lg px-3 font-medium py-1 bg-primary-500/50 text-xs border-primary-500 text-white">
                                                        Fiksi Inggris
                                                    </div>
                                                    <h1
                                                        class="capitalize text-white text-base sm:text-lg font-bold drop-shadow-md line-clamp-1">
                                                        Heidi</h1>
                                                    <h3 class="text-gray-100 text-xs sm:text-sm line-clamp-1">Spyri,
                                                        Johanna (Pengarang)</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide h-full">
                                    <a href="https://perpustakaan.jakarta.go.id/book/detail?cn=INLIS000000000847339">
                                        <div class="relative rounded-xl overflow-hidden cursor-pointer w-full">
                                            <img data-src="https://koleksiperpus.jakarta.go.id/dispusip/uploaded_files/sampul_koleksi/original/Monograf/230415.jpg"
                                                src="images/no-images.png"
                                                onerror="this.onerror=null; this.src='https://perpustakaan.jakarta.go.id/assets/img/no-images.png'"
                                                class="lazyload rounded object-center object-cover brightness-110 rounded-lg w-full h-72 sm:h-80 -z-10"
                                                alt="Design :  the definitive visual history">
                                            <div
                                                class="absolute top-0 h-full w-full bg-gradient-to-t from-black/70  p-3 flex flex-col justify-between">
                                                <div class="flex items-center justify-between">





                                                </div>

                                                <div
                                                    class="self-center flex flex-col items-center space-y-1 text-center p-2 w-full">
                                                    <div
                                                        class="max-w-full capitalize line-clamp-1 overflow-x-hidden rounded-lg px-3 font-medium py-1 bg-primary-500/50 text-xs border-primary-500 text-white">
                                                        Desain / Seni / Sejarah Art Design
                                                    </div>
                                                    <h1
                                                        class="capitalize text-white text-base sm:text-lg font-bold drop-shadow-md line-clamp-1">
                                                        Design : the definitive visual history</h1>
                                                    <h3 class="text-gray-100 text-xs sm:text-sm line-clamp-1">Black,
                                                        Alexandra (Pengarang) ; Grant, R. G. (Pengarang) ; Kay, Ann
                                                        (Pengarang) ; Wilkinson, Philip (Pengarang) ; Zaczek, Iain
                                                        (Pengarang) ; Fischel, Anna (Penyunting) ; Kennedy, Sammy
                                                        (Penyunting) ; Neilson, Stuart (Penyunting) ; Dorling Kindersley
                                                    </h3>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide h-full">
                                    <a href="https://perpustakaan.jakarta.go.id/book/detail?cn=INLIS000000000835377">
                                        <div class="relative rounded-xl overflow-hidden cursor-pointer w-full">
                                            <img data-src="https://koleksiperpus.jakarta.go.id/dispusip/uploaded_files/sampul_koleksi/original/Monograf/189733.png"
                                                src="images/no-images.png"
                                                onerror="this.onerror=null; this.src='https://perpustakaan.jakarta.go.id/assets/img/no-images.png'"
                                                class="lazyload rounded object-center object-cover brightness-110 rounded-lg w-full h-72 sm:h-80 -z-10"
                                                alt="You are a badass at making money">
                                            <div
                                                class="absolute top-0 h-full w-full bg-gradient-to-t from-black/70  p-3 flex flex-col justify-between">
                                                <div class="flex items-center justify-between">





                                                </div>

                                                <div
                                                    class="self-center flex flex-col items-center space-y-1 text-center p-2 w-full">
                                                    <div
                                                        class="max-w-full capitalize line-clamp-1 overflow-x-hidden rounded-lg px-3 font-medium py-1 bg-primary-500/50 text-xs border-primary-500 text-white">
                                                        pengembangan diri
                                                    </div>
                                                    <h1
                                                        class="capitalize text-white text-base sm:text-lg font-bold drop-shadow-md line-clamp-1">
                                                        You are a badass at making money</h1>
                                                    <h3 class="text-gray-100 text-xs sm:text-sm line-clamp-1">Sincero,
                                                        Jen (Pengarang) ; Nadya Andwiani (Penerjemah) ; Maria Lubis
                                                        (Penyunting)</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide h-full">
                                    <a href="https://perpustakaan.jakarta.go.id/book/detail?cn=INLIS000000000847350">
                                        <div class="relative rounded-xl overflow-hidden cursor-pointer w-full">
                                            <img data-src="https://koleksiperpus.jakarta.go.id/dispusip/uploaded_files/sampul_koleksi/original/Monograf/230442.jpg"
                                                src="images/no-images.png"
                                                onerror="this.onerror=null; this.src='https://perpustakaan.jakarta.go.id/assets/img/no-images.png'"
                                                class="lazyload rounded object-center object-cover brightness-110 rounded-lg w-full h-72 sm:h-80 -z-10"
                                                alt="Master your emotions :  panduan praktis untuk mengatasi perasaan negatif dan pandai mengelola perasaanmu">
                                            <div
                                                class="absolute top-0 h-full w-full bg-gradient-to-t from-black/70  p-3 flex flex-col justify-between">
                                                <div class="flex items-center justify-between">





                                                </div>

                                                <div
                                                    class="self-center flex flex-col items-center space-y-1 text-center p-2 w-full">
                                                    <div
                                                        class="max-w-full capitalize line-clamp-1 overflow-x-hidden rounded-lg px-3 font-medium py-1 bg-primary-500/50 text-xs border-primary-500 text-white">
                                                        Emosi dan Perasaan
                                                    </div>
                                                    <h1
                                                        class="capitalize text-white text-base sm:text-lg font-bold drop-shadow-md line-clamp-1">
                                                        Master your emotions : panduan praktis untuk mengatasi perasaan
                                                        negatif dan pandai mengelola perasaanmu</h1>
                                                    <h3 class="text-gray-100 text-xs sm:text-sm line-clamp-1">
                                                        Meurisse, Thibaut (Pengarang) ; Nadya Andwiani (Penerjemah) ;
                                                        Haris Priyatna (Penyunting)</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide h-full">
                                    <a href="https://perpustakaan.jakarta.go.id/book/detail?cn=INLIS000000000847355">
                                        <div class="relative rounded-xl overflow-hidden cursor-pointer w-full">
                                            <img data-src="https://koleksiperpus.jakarta.go.id/dispusip/uploaded_files/sampul_koleksi/original/Monograf/230452.jpg"
                                                src="images/no-images.png"
                                                onerror="this.onerror=null; this.src='https://perpustakaan.jakarta.go.id/assets/img/no-images.png'"
                                                class="lazyload rounded object-center object-cover brightness-110 rounded-lg w-full h-72 sm:h-80 -z-10"
                                                alt="The almanack of Naval Ravikant :  panduan asyik dan autentik untuk meraih kekayaan dan kebahagiaan">
                                            <div
                                                class="absolute top-0 h-full w-full bg-gradient-to-t from-black/70  p-3 flex flex-col justify-between">
                                                <div class="flex items-center justify-between">
                                                </div>

                                                <div class="self-center flex flex-col items-center space-y-1 text-center p-2 w-full">
                                                    <div class="max-w-full capitalize line-clamp-1 overflow-x-hidden rounded-lg px-3 font-medium py-1 bg-primary-500/50 text-xs border-primary-500 text-white">
                                                        Penghidupan yang Sukses / Motivasi Diri
                                                    </div>
                                                    <h1 class="capitalize text-white text-base sm:text-lg font-bold drop-shadow-md line-clamp-1">
                                                        The almanack of Naval Ravikant : panduan asyik dan autentik
                                                        untuk meraih kekayaan dan kebahagiaan</h1>
                                                    <h3 class="text-gray-100 text-xs sm:text-sm line-clamp-1">
                                                        Jorgenson, Eric (Pengarang) ; Nadya Andwiani (Penerjemah) ;
                                                        Maria Lubis (Penerjemah) ; Ida Wajdi (Penyunting)</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide h-full">
                                    <a href="https://perpustakaan.jakarta.go.id/book/detail?cn=INLIS000000000847374">
                                        <div class="relative rounded-xl overflow-hidden cursor-pointer w-full">
                                            <img data-src="https://koleksiperpus.jakarta.go.id/dispusip/uploaded_files/sampul_koleksi/original/Monograf/230510.jpg"
                                                src="images/no-images.png"
                                                onerror="this.onerror=null; this.src='https://perpustakaan.jakarta.go.id/assets/img/no-images.png'"
                                                class="lazyload rounded object-center object-cover brightness-110 rounded-lg w-full h-72 sm:h-80 -z-10"
                                                alt="Dallergut 2 :  toko penjual mimpi">
                                            <div
                                                class="absolute top-0 h-full w-full bg-gradient-to-t from-black/70  p-3 flex flex-col justify-between">
                                                <div class="flex items-center justify-between">
                                                </div>

                                                <div class="self-center flex flex-col items-center space-y-1 text-center p-2 w-full">
                                                    <div class="max-w-full capitalize line-clamp-1 overflow-x-hidden rounded-lg px-3 font-medium py-1 bg-primary-500/50 text-xs border-primary-500 text-white">
                                                        FIksi Korea
                                                    </div>
                                                    <h1 class="capitalize text-white text-base sm:text-lg font-bold drop-shadow-md line-clamp-1">
                                                        Dallergut 2 : toko penjual mimpi</h1>
                                                    <h3 class="text-gray-100 text-xs sm:text-sm line-clamp-1">Lee Miye
                                                        (Pengarang) ; Dwita Rizki (Penerjemah) ; Jia Effendie
                                                        (Penyunting)</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide h-full">
                                    <a href="https://perpustakaan.jakarta.go.id/book/detail?cn=INLIS000000000847361">
                                        <div class="relative rounded-xl overflow-hidden cursor-pointer w-full">
                                            <img data-src="https://koleksiperpus.jakarta.go.id/dispusip/uploaded_files/sampul_koleksi/original/Monograf/230474.jpg"
                                                src="images/no-images.png"
                                                onerror="this.onerror=null; this.src='https://perpustakaan.jakarta.go.id/assets/img/no-images.png'"
                                                class="lazyload rounded object-center object-cover brightness-110 rounded-lg w-full h-72 sm:h-80 -z-10"
                                                alt="The Indonesian table">
                                            <div
                                                class="absolute top-0 h-full w-full bg-gradient-to-t from-black/70  p-3 flex flex-col justify-between">
                                                <div class="flex items-center justify-between">
                                                </div>

                                                <div class="self-center flex flex-col items-center space-y-1 text-center p-2 w-full">
                                                    <div class="max-w-full capitalize line-clamp-1 overflow-x-hidden rounded-lg px-3 font-medium py-1 bg-primary-500/50 text-xs border-primary-500 text-white">
                                                        Resep makanan / Masakan Indonesia / Buku masakan
                                                    </div>
                                                    <h1
                                                        class="capitalize text-white text-base sm:text-lg font-bold drop-shadow-md line-clamp-1">
                                                        The Indonesian table</h1>
                                                    <h3 class="text-gray-100 text-xs sm:text-sm line-clamp-1">Elliott,
                                                        Petty Pandean (Pengarang)</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <div class="swiper-slide h-full">
                                    <a href="https://perpustakaan.jakarta.go.id/book/detail?cn=INLIS000000000847378">
                                        <div class="relative rounded-xl overflow-hidden cursor-pointer w-full">
                                            <img data-src="https://koleksiperpus.jakarta.go.id/dispusip/uploaded_files/sampul_koleksi/original/Monograf/230519.jpg"
                                                src="images/no-images.png"
                                                onerror="this.onerror=null; this.src='https://perpustakaan.jakarta.go.id/assets/img/no-images.png'"
                                                class="lazyload rounded object-center object-cover brightness-110 rounded-lg w-full h-72 sm:h-80 -z-10"
                                                alt="The Banda island :  hidden histories &amp; miracles of nature">
                                            <div
                                                class="absolute top-0 h-full w-full bg-gradient-to-t from-black/70  p-3 flex flex-col justify-between">
                                                <div class="flex items-center justify-between">
                                                </div>

                                                <div class="self-center flex flex-col items-center space-y-1 text-center p-2 w-full">
                                                    <div
                                                        class="max-w-full capitalize line-clamp-1 overflow-x-hidden rounded-lg px-3 font-medium py-1 bg-primary-500/50 text-xs border-primary-500 text-white">
                                                        Sejarah/ Kepulauan Banda (Maluku Tengah) / Tanaman rempah/
                                                        Kepulauan Banda (Maluku Tengah)
                                                    </div>
                                                    <h1
                                                        class="capitalize text-white text-base sm:text-lg font-bold drop-shadow-md line-clamp-1">
                                                        The Banda island : hidden histories &amp; miracles of nature
                                                    </h1>
                                                    <h3 class="text-gray-100 text-xs sm:text-sm line-clamp-1">Russel,
                                                        Jan (Penyunting)</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </section>

                        <section class="my-8">
                            <div class="flex items-center gap-2 lg:gap-4 justify-between">
                                <div>
                                    <h3 class="font-bold text-base lg:text-xl">Our Team Project A Library</h3>
                                    <p class="hidden lg:block text-sm text-gray-600">Siapa saja pengembang dibalik Website A Library ini?</p>
                                </div>
                            </div>

                            <div class="mt-6 grid grid-cols-2 lg:grid-cols-4 gap-2 lg:gap-4">
                                    <div class="rounded-lg border relative">
                                        <img src="{{ asset('static/amanda.jpg') }}"
                                            class="lazyload w-full h-48 rounded-lg object-center object-cover brightness-50"
                                            onerror="this.onerror=null; this.src='https://perpustakaan.jakarta.go.id/assets/img/no-images.png'"
                                            alt="">
                                        <div class="rounded-lg absolute top-0 h-full w-full bg-gradient-to-t from-primary-600/80 p-4 flex flex-col justify-between text-white">
                                            <div>
                                                <div class="capitalize text-sm lg:text-xl font-bold">Product Owner</div>
                                                <div class="text-gray-100 text-xs line-clamp-1">
                                                    Amanda Rachmawati
                                                </div>
                                            </div>

                                            <div class="mt-1 flex items-center space-x-2">
                                                <div class="line-clamp-1 w-full capitalize text-xs lg:text-base">
                                                    <p><span data-sheets-root="1">1204222081<br></span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="rounded-lg border relative">
                                        <img src="{{ asset('static/ilmon.jpg') }}"
                                            class="lazyload w-full h-48 rounded-lg object-center object-cover brightness-50"
                                            onerror="this.onerror=null; this.src='https://perpustakaan.jakarta.go.id/assets/img/no-images.png'"
                                            alt="">

                                        <div class="rounded-lg absolute top-0 h-full w-full bg-gradient-to-t from-primary-600/80 p-4 flex flex-col justify-between text-white">
                                            <div>
                                                <div class="capitalize text-sm lg:text-xl font-bold">Scrum Master</div>
                                                <div class="text-gray-100 text-xs line-clamp-1">
                                                    Ahmad Ilman Nafia
                                                </div>
                                            </div>
                                            <div class="mt-1 flex items-center space-x-2">
                                                <div class="line-clamp-1 w-full capitalize text-xs lg:text-base">
                                                    1204220026
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="rounded-lg border relative">
                                        <img src="{{ asset('static/angela.jpg') }}" class="lazyload w-full h-48 rounded-lg object-center object-cover brightness-50"
                                            onerror="this.onerror=null; this.src='https://perpustakaan.jakarta.go.id/assets/img/no-images.png'"
                                            alt="">
                                        <div class="rounded-lg absolute top-0 h-full w-full bg-gradient-to-t from-primary-600/80 p-4 flex flex-col justify-between text-white">
                                            <div>
                                                <div class="capitalize text-sm lg:text-xl font-bold">Development Team</div>
                                                <div class="text-gray-100 text-xs line-clamp-1">
                                                    Angela Fransisca Yulisiswati
                                                </div>
                                            </div>
                                            <div class="mt-1 flex items-center space-x-2">
                                                <div class="line-clamp-1 w-full capitalize text-xs lg:text-base">
                                                    <p>1204220007</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="rounded-lg border relative">
                                        <img src="{{ asset('static/sihub.jpg') }}"
                                            class="lazyload w-full h-48 rounded-lg object-center object-cover brightness-50"
                                            onerror="this.onerror=null; this.src='https://perpustakaan.jakarta.go.id/assets/img/no-images.png'"
                                            alt="">
                                        <div class="rounded-lg absolute top-0 h-full w-full bg-gradient-to-t from-primary-600/80 p-4 flex flex-col justify-between text-white">
                                            <div>
                                                <div class="capitalize text-sm lg:text-xl font-bold">Development Team</div>
                                                <div class="text-gray-100 text-xs line-clamp-1">
                                                    M. Izzul Haq Syihabbudin S.
                                                </div>
                                            </div>
                                                <div class="line-clamp-1 w-full capitalize text-xs lg:text-base">
                                                    <p>1204220052</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </section>
                    </div>
            </main>

            <aside
                class="scroll-container hidden lg:flex w-1/6 border-l fixed right-0 top-0 h-screen p-4 overflow-y-auto flex-col space-y-4">
                <form class="mx-auto w-full" action="https://perpustakaan.jakarta.go.id/book" method="GET">
                    <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only"></label>
                    <div class="relative">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-gray-500" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
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
                        <a href="{{ route('register') }}"
                            class="col-span-full border rounded-lg">
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
                        <a href="{{ route('login') }}"
                            class="col-span-full border rounded-lg">
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
                @endauth
            </aside>
        </div>
    </body>
</x-client-app>
