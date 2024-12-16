<x-client-app>

    <body class="font-mulish antialiased overflow-x-hidden text-sm md:text-base">
        <div class="flex min-h-screen bg-white lg:bg-gray-50 py-0 lg:py-16 px-0 lg:px-56">
            <div class="my-0 lg:my-auto w-full rounded-lg bg-white shadow-none lg:shadow-sm">
                <div class="fixed left-0 lg:left-5 bottom-0 lg:bottom-1 z-50"></div>
                <div class="grid grid-cols-1 lg:grid-cols-1 gap-x-4 lg:gap-x-8 items-center">
                    <form class="needs-validation space-y-6 px-4 lg:px-8 pt-4 pb-8" method="POST"
                        action="{{ route('register') }}">
                        @csrf
                        <h3 class="text-lg lg:text-2xl font-medium">
                            Pendaftaran Akun
                        </h3>

                        <div class="space-y-2 lg:space-y-4">
                            <div class="grid grid-cols-1 lg:grid-cols-3 gap-2 lg:gap-4">
                                <div>
                                    <label for="nisn" class="font-normal text-xs lg:text-sm">
                                        NISN <span class="text-sm text-red-600 font-medium">*</span>
                                    </label>
                                    <input id="nisn" type="text"
                                        class="identity-number-format w-full bg-gray-50 mt-1 block p-2 lg:p-3 border border-gray-300 placeholder-gray-500 text-gray-900 rounded focus:outline-none focus:ring-primary-500 focus:border-primary-500 text-xs lg:text-sm @error('nisn') is-invalid @enderror"
                                        name="nisn" value="{{ old('nisn') }}" maxlength="10" pattern="\d*"
                                        required autofocus>

                                    @error('nisn')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div>
                                    <label for="nama" class="font-normal text-xs lg:text-sm">
                                        Nama Lengkap <span class="text-sm text-red-600 font-medium">*</span>
                                    </label>
                                    <input id="nama" type="text"
                                        class="latin-only-input w-full bg-gray-50 mt-1 block p-2 lg:p-3 border border-gray-300 placeholder-gray-500 text-gray-900 rounded focus:outline-none focus:ring-primary-500 focus:border-primary-500 text-xs lg:text-sm @error('nama') is-invalid @enderror"
                                        name="nama" value="{{ old('nama') }}" required>
                                    @error('nama')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div>
                                    <label for="jenis_kelamin" class="font-normal text-xs lg:text-sm">
                                        Jenis Kelamin <span class="text-sm text-red-600 font-medium">*</span>
                                    </label>
                                    <select name="jenis_kelamin" id="jenis_kelamin"
                                        class="w-full bg-gray-50 mt-1 block p-2 lg:p-3 border border-gray-300 placeholder-gray-500 text-gray-900 rounded focus:outline-none focus:ring-primary-500 focus:border-primary-500 text-xs lg:text-sm"
                                        required>
                                        <option value="" disabled selected>Pilih Jenis Kelamin</option>
                                        <option value="lakilaki"
                                            {{ old('jenis_kelamin') == 'lakilaki' ? 'selected' : '' }}>Laki-laki
                                        </option>
                                        <option value="perempuan"
                                            {{ old('jenis_kelamin') == 'perempuan' ? 'selected' : '' }}>Perempuan
                                        </option>
                                    </select>
                                    @error('jenis_kelamin')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="">
                                    <div class="flex items-center gap-1">
                                        <label for="no_telepon" class="font-normal text-xs lg:text-sm">
                                            <div class="flex flex-wrap items-center gap-x-1">
                                                <span>Email</span>
                                            </div>
                                        </label>
                                        <span class="text-sm text-red-600 font-medium">*</span>
                                    </div>

                                    <div class="relative">
                                        <input id="email" type="email"
                                            class="w-full bg-gray-50 mt-1 block p-2 lg:p-3 border border-gray-300 placeholder-gray-500 text-gray-900 rounded focus:outline-none focus:ring-primary-500 focus:border-primary-500 text-xs lg:text-sm @error('email') is-invalid @enderror"
                                            name="email" value="{{ old('email') }}" required>

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                    </div>
                                </div>

                                <div class="">
                                    <div class="flex items-center gap-1">
                                        <label for="email" class="font-normal text-xs lg:text-sm">
                                            <div class="flex flex-wrap items-center gap-x-1">
                                                <span>Username</span>
                                            </div>
                                        </label>
                                        <span class="text-sm text-red-600 font-medium">*</span>
                                    </div>

                                    <div class="relative">
                                        <input id="username" type="text"
                                            class="latin-only-input w-full bg-gray-50 mt-1 block p-2 lg:p-3 border border-gray-300 placeholder-gray-500 text-gray-900 rounded focus:outline-none focus:ring-primary-500 focus:border-primary-500 text-xs lg:text-sm @error('username') is-invalid @enderror"
                                            name="username" value="{{ old('username') }}" required>
                                        @error('username')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div>
                                    <label for="telepon" class="font-normal text-xs lg:text-sm">
                                        No. WhatsApp <span class="text-sm text-red-600 font-medium">*</span>
                                    </label>
                                    <input id="telepon" type="text"
                                        class="w-full bg-gray-50 mt-1 block p-2 lg:p-3 border border-gray-300 placeholder-gray-500 text-gray-900 rounded focus:outline-none focus:ring-primary-500 focus:border-primary-500 text-xs lg:text-sm @error('telepon') is-invalid @enderror"
                                        name="telepon" value="{{ old('telepon') }}" required>

                                    @error('telepon')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div>
                                    <label for="alamat"
                                        class="font-normal text-xs lg:text-sm">{{ __('Alamat') }}</label>

                                    <div class="col-md-6">
                                        <input id="alamat" type="text"
                                            class="w-full bg-gray-50 mt-1 block p-2 lg:p-3 border border-gray-300 placeholder-gray-500 text-gray-900 rounded focus:outline-none focus:ring-primary-500 focus:border-primary-500 text-xs lg:text-sm @error('alamat') is-invalid @enderror"
                                            name="alamat" value="{{ old('alamat') }}" required>

                                        @error('alamat')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="">
                                    <div class="flex items-center gap-1">
                                        <label for="password" class="font-normal text-xs lg:text-sm">
                                            <div class="flex flex-wrap items-center gap-x-1">
                                                <span>Kata Sandi</span>
                                            </div>
                                        </label>
                                        <span class="text-sm text-red-600 font-medium">*</span>
                                    </div>

                                    <div class="relative" x-data="{ isPasswordVisible: false }">
                                        <input id="password" type="password"
                                            class="w-full bg-gray-50 mt-1 block p-2 lg:p-3 border border-gray-300 placeholder-gray-500 text-gray-900 rounded focus:outline-none focus:ring-primary-500 focus:border-primary-500 text-xs lg:text-sm @error('password') is-invalid @enderror"
                                            name="password" required>

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                        <div @click="isPasswordVisible = !isPasswordVisible" class="absolute top-1/2 transform -translate-y-1/2 right-4 text-gray-500 cursor-pointer">
                                            <svg x-show="!isPasswordVisible" class="w-4 h-4" fill="none"
                                                stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M3.98 8.223A10.477 10.477 0 001.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.45 10.45 0 0112 4.5c4.756 0 8.773 3.162 10.065 7.498a10.523 10.523 0 01-4.293 5.774M6.228 6.228L3 3m3.228 3.228l3.65 3.65m7.894 7.894L21 21m-3.228-3.228l-3.65-3.65m0 0a3 3 0 10-4.243-4.243m4.242 4.242L9.88 9.88">
                                                </path>
                                            </svg>
                                            <svg x-show="isPasswordVisible" class="w-4 h-4" fill="none"
                                                stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z">
                                                </path>
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                            </svg>
                                        </div>
                                    </div>

                                    <span class="mt-1 block text-gray-400 text-xs">*Minimal 6 karakter dan memerlukan
                                        setidaknya satu huruf,
                                        angka, serta simbol</span>
                                </div>

                                <div class="">
                                    <div class="flex items-center gap-1">
                                        <label for="password_confirmation" class="font-normal text-xs lg:text-sm">
                                            <div class="flex flex-wrap items-center gap-x-1">
                                                <span>Konfirmasi Kata Sandi</span>
                                            </div>
                                        </label>
                                        <span class="text-sm text-red-600 font-medium">*</span>
                                    </div>

                                    <div class="relative" x-data="{ isPasswordVisible: false }">
                                        <input id="password-confirm" type="password"
                                            class="w-full bg-gray-50 mt-1 block p-2 lg:p-3 border border-gray-300 placeholder-gray-500 text-gray-900 rounded focus:outline-none focus:ring-primary-500 focus:border-primary-500 text-xs lg:text-sm"
                                            name="password_confirmation" required>

                                        <div @click="isPasswordVisible = !isPasswordVisible"
                                            class="absolute top-1/2 transform -translate-y-1/2 right-4 text-gray-500 cursor-pointer">
                                            <svg x-show="!isPasswordVisible" class="w-4 h-4" fill="none"
                                                stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M3.98 8.223A10.477 10.477 0 001.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.45 10.45 0 0112 4.5c4.756 0 8.773 3.162 10.065 7.498a10.523 10.523 0 01-4.293 5.774M6.228 6.228L3 3m3.228 3.228l3.65 3.65m7.894 7.894L21 21m-3.228-3.228l-3.65-3.65m0 0a3 3 0 10-4.243-4.243m4.242 4.242L9.88 9.88">
                                                </path>
                                            </svg>
                                            <svg x-show="isPasswordVisible" class="w-4 h-4" fill="none"
                                                stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z">
                                                </path>
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-2">
                                <input class="h-4 w-4 text-primary-600 focus:ring-primary-500 border-gray-300 rounded"
                                    id="disclaimer" name="disclaimer" required="" type="checkbox" />
                                <label for="disclaimer" class="block text-xs lg:text-sm text-gray-900">
                                    Saya menyatakan telah membaca dan menyetujui terkait
                                    <a href="https://perpustakaan.jakarta.go.id/supports/privacy-policy"
                                        class="font-bold underline text-primary-500">Kebijakan Privasi</a>
                                </label>
                            </div>
                        </div>

                        <div x-cloak="" x-data="{ otpSentViaModal: false }">
                            <button type="submit"
                                class="w-full flex justify-center p-4 border border-transparent text-base lg:text-lg font-medium rounded-md bg-primary-600 hover:bg-primary-700 text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">
                                Daftar
                            </button>


                        </div>

                        <div class="text-center">
                            <div class="text-sm">
                                Sudah memiliki akun?
                                <a href="{{ route('login')}}"
                                    class="font-bold text-primary-600 hover:text-primary-500">Masuk</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</x-client-app>
