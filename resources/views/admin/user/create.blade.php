<x-app>
    <div class="page-body">
        <div class="container-xl">
            <div class="row row-cards">
                <div class="col-12">
                    <form class="card" action="{{ route('suppliers.store') }}" method="POST" id="supplierForm">
                        @csrf
                        <div class="card-header">
                            <h4 class="card-title">Tambah Supplier</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Kode</label>
                                        <input type="text" class="form-control" name="kode" id="kode"
                                            name="kode" value="{{ old('kode') }}" readonly disabled />
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label required">Jenis Pakan</label>
                                        <input type="text" class="form-control" name="jenis_pakan"
                                            value="{{ old('jenis_pakan') }}" required />
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label required">Nama Supplier</label>
                                        <input type="text" class="form-control" name="nama"
                                            value="{{ old('nama') }}" required />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label required">Harga/kg</label>
                                        <input type="text" class="form-control" name="harga_per_kg"
                                            value="{{ old('harga_per_kg') }}" required />
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label required">Telepon</label>
                                        <input type="text" class="form-control" name="telepon"
                                            value="{{ old('telepon') }}" required />
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="mb-12">
                                        <label class="form-label">Alamat
                                            <span class="form-label-description" id="ketikan_sakkarepmu">0/100</span>
                                        </label>
                                        <textarea class="form-control" name="alamat" id="alamat" rows="3" maxlength="100">{{ old('alamat') }}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-end">
                            <div class="d-flex">
                                <a href="{{ route('suppliers.index') }}" class="btn btn-link">Batal</a>
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
