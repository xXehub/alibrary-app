<x-client-app>

    <body class="font-mulish antialiased overflow-x-hidden text-sm md:text-base">


        <div class="flex min-h-screen bg-white lg:bg-gray-50 py-0 lg:py-16 px-0 lg:px-40">
            <div class="my-0 lg:my-auto w-full rounded-lg bg-white shadow-none lg:shadow-sm">
                <div class="fixed left-0 lg:left-5 bottom-0 lg:bottom-1 z-50">
                </div>
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-x-4 lg:gap-x-8 items-center">
                    <form class="needs-validation space-y-8 px-4 lg:px-8 py-4 lg:py-8" method="POST"
                        action="{{ route('login') }}">
                        @csrf
                        <h3 class="text-lg lg:text-2xl font-medium">Login Akun</h3>
                        <div class="mt-2 lg:mt-4">
                            <div class="flex items-center gap-1">
                                <label for="identity" class="font-normal text-xs lg:text-sm">
                                    <div class="flex flex-wrap items-center gap-x-1 ">
                                        <span>Username/NISN</span>
                                    </div>
                                </label>
                                <span class="text-sm text-red-600 font-medium">*</span>
                            </div>

                            <div class="relative">

                                <input type="text"
                                    class=" w-full bg-gray-50 mt-1 block p-3 lg:p-4 border border-gray-300 placeholder-gray-500 text-gray-900 rounded focus:outline-none focus:ring-primary-500 focus:border-primary-500 focus:z-10 text-xs lg:text-sm @error('username') is-invalid @enderror"
                                    id="username" placeholder="Username" autocomplete="off" name="username_or_email"
                                    value="{{ old('username_or_email') }}">
                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>

                        </div>

                        <div class="mt-2 lg:mt-4">
                            <div class="flex items-center gap-1">
                                <label for="password" class="font-normal text-xs lg:text-sm">
                                    <div class="flex flex-wrap items-center gap-x-1">
                                        <span>Kata Sandi</span>
                                    </div>
                                </label>
                                <span class="text-sm text-red-600 font-medium">*</span>
                            </div>

                            <div class="relative" x-data="{ isPasswordVisible: false }">
                                <input name="password" id="password" :type="isPasswordVisible ? 'text' : 'password'"
                                    placeholder="Password Anda"
                                    class="w-full bg-gray-50 mt-1 block p-3 lg:p-4 border border-gray-300 placeholder-gray-500 text-gray-900 rounded focus:outline-none focus:ring-primary-500 focus:border-primary-500 focus:z-10 text-xs lg:text-sm"
                                    value="" required="" />
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <div @click="isPasswordVisible = !isPasswordVisible"
                                    class="absolute top-1/2 transform -translate-y-1/2 right-4 text-gray-500 cursor-pointer">
                                    <svg x-show="!isPasswordVisible" class="w-4 h-4" fill="none"
                                        stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M3.98 8.223A10.477 10.477 0 001.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.45 10.45 0 0112 4.5c4.756 0 8.773 3.162 10.065 7.498a10.523 10.523 0 01-4.293 5.774M6.228 6.228L3 3m3.228 3.228l3.65 3.65m7.894 7.894L21 21m-3.228-3.228l-3.65-3.65m0 0a3 3 0 10-4.243-4.243m4.242 4.242L9.88 9.88">
                                        </path>
                                    </svg>
                                    <svg x-show="isPasswordVisible" class="w-4 h-4" fill="none" stroke="currentColor"
                                        stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                                        aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z">
                                        </path>
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>

                        <div class="flex items-center justify-between gap-2">
                            <div class="flex items-center">
                                <input id="remember_me" name="remember_me" type="checkbox"
                                    class="h-4 w-4 text-primary-600 focus:ring-primary-500 border-gray-300 rounded">
                                <label for="remember_me" class="ml-2 block text-sm text-gray-900">
                                    Ingat Saya
                                </label>
                            </div>

                            <a href="https://perpustakaan.jakarta.go.id/forgot-password"
                                class="text-sm text-primary-600 align">
                                Lupa Kata Sandi?
                            </a>
                        </div>

                        <button
                            class="g-recaptcha w-full flex justify-center p-4 border border-transparent text-base lg:text-lg font-medium rounded-md text-white bg-primary-600 hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500"
                            type="submit" data-action="submit">
                            Masuk
                        </button>

                        <div class="text-center text-sm">
                            Belum memiliki akun?
                            <a href="{{ route('register') }}"
                                class="font-bold text-primary-600 hover:text-primary-500">Daftar di sini</a>
                        </div>
                    </form>

                    <div class="hidden lg:flex justify-end">
                        <img src="{{ asset('static/logo.png') }}" style="height: 80px; width: auto;" alt=""
                            class="mx-auto">
                    </div>
                </div>
            </div>
        </div>
    </body>
</x-client-app>
