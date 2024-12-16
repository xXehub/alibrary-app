<x-app>
    <div class="page-body">
        <div class="container-xl">
            <div class="row row-cards">
                <div class="col-12">
                    <form class="card" action="{{ route('bukus.store') }}" method="POST" id="bukuForm"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="card-header">
                            <h4 class="card-title">Tambah Buku</h4>
                        </div>
                        <div class="card-body">
                            <!-- Judul Buku -->
                            <div class="mb-3">
                                <label for="title" class="form-label">Judul Buku</label>
                                <input type="text" class="form-control" id="title" name="title"
                                    value="{{ old('title') }}" required>
                                @error('title')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Penulis -->
                            <div class="mb-3">
                                <label for="penulis" class="form-label">Penulis</label>
                                <select class="form-control" id="penulis" name="penulis" required>
                                    <option value="" disabled selected>Pilih Penulis</option>
                                    @foreach ($penulis as $item)
                                        <option value="{{ $item->id }}"
                                            {{ old('penulis') == $item->id ? 'selected' : '' }}>
                                            {{ $item->nama_author }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('penulis')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Penerbit -->
                            <div class="mb-3">
                                <label for="penerbit" class="form-label">Penerbit</label>
                                <select class="form-control" id="penerbit" name="penerbit" required>
                                    <option value="" disabled selected>Pilih Penerbit</option>
                                    @foreach ($penerbit as $item)
                                        <option value="{{ $item->id }}"
                                            {{ old('penerbit') == $item->id ? 'selected' : '' }}>
                                            {{ $item->nama_penerbit }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('penerbit')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Tahun Terbit -->
                            <div class="mb-3">
                                <label for="terbit" class="form-label">Tahun Terbit</label>
                                <input type="date" class="form-control" id="terbit" name="terbit"
                                    value="{{ old('terbit') }}" required>
                                @error('terbit')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Genre -->
                            <div class="mb-3">
                                <label for="genre" class="form-label">Genre</label>
                                <select class="form-control" id="genre" name="genre" required>
                                    <option value="" disabled selected>Pilih Genre</option>
                                    @foreach ($genre as $item)
                                        <option value="{{ $item->id }}"
                                            {{ old('genre') == $item->id ? 'selected' : '' }}>
                                            {{ $item->nama_genre }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('genre')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Stok -->
                            <div class="mb-3">
                                <label for="stock" class="form-label">Stok</label>
                                <input type="number" class="form-control" id="stock" name="stock"
                                    value="{{ old('stock') }}" required>
                                @error('stock')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="gambar_buku">Gambar Buku</label>
                                <input type="file" class="form-control" id="gambar_buku" name="gambar_buku">
                            </div>
                        </div>

                        <!-- Tombol Submit -->
                        <div class="card-footer text-end">
                            <div class="d-flex">
                                <a href="{{ route('bukus.index') }}" class="btn btn-link">Batal</a>
                                <button type="submit" class="btn btn-primary ms-auto">Simpan Data</button>
                            </div>
                        </div>
                    </form>


                </div>
            </div>
        </div>
    </div>
    <script>
        // Gawe Count Text
        const textarea = document.getElementById('alamat');
        const ketikan_sakkarepmu = document.getElementById('ketikan_sakkarepmu');

        textarea.addEventListener('input', function() {
            const currentLength = textarea.value.length;
            const maxLength = textarea.getAttribute('maxlength');
            ketikan_sakkarepmu.textContent = `${currentLength}/${maxLength}`;
        });

        // Hapus readonly dan disabled sebelum submit
        document.getElementById('supplierForm').addEventListener('submit', function() {
            document.getElementById('kode').removeAttribute('readonly');
            document.getElementById('kode').removeAttribute('disabled');
        });
    </script>
</x-app>
