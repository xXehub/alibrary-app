<x-app>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1>Edit Supplier</h1>
                <form method="POST" action="{{ route('suppliers.update', $supplier->id) }}">
                    @csrf
                    @method('PUT')
                    
                    <div class="form-group mb-3">
                        <label for="kode">Kode</label>
                        <input type="text" class="form-control" id="kode" name="kode" value="{{ old('kode', $supplier->kode) }}" required>
                    </div>

                    <div class="form-group mb-3">
                        <label for="jenis_pakan">Jenis Pakan</label>
                        <input type="text" class="form-control" id="jenis_pakan" name="jenis_pakan" value="{{ old('jenis_pakan', $supplier->jenis_pakan) }}" required>
                    </div>

                    <div class="form-group mb-3">
                        <label for="nama">Nama Supplier</label>
                        <input type="text" class="form-control" id="nama" name="nama" value="{{ old('nama', $supplier->nama) }}" required>
                    </div>

                    <div class="form-group mb-3">
                        <label for="harga_per_kg">Harga Per KG</label>
                        <input type="number" class="form-control" id="harga_per_kg" name="harga_per_kg" value="{{ old('harga_per_kg', $supplier->harga_per_kg) }}" required>
                    </div>

                    <div class="form-group mb-3">
                        <label for="alamat">Alamat</label>
                        <textarea class="form-control" id="alamat" name="alamat" rows="3" required>{{ old('alamat', $supplier->alamat) }}</textarea>
                    </div>

                    <div class="form-group mb-3">
                        <label for="telepon">Telepon</label>
                        <input type="text" class="form-control" id="telepon" name="telepon" value="{{ old('telepon', $supplier->telepon) }}" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="{{ route('suppliers.index') }}" class="btn btn-secondary">Batal</a>
                </form>
            </div>
        </div>
    </div>
</x-app>
