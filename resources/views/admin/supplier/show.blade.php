<x-app>
    <div class="page-body">
        <div class="container-xl">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Base info</h3>
            </div>
            <div class="card-body">
              <div class="datagrid">
                <div class="datagrid-item">
                  <div class="datagrid-title">Kode Supplier</div>
              	<div class="input-icon">
                    <input type="text" value="{{ $supplier->kode }}" class="form-control" placeholder="Search…" readonly />
                    <span class="input-icon-addon">
                        <!-- Download SVG icon from http://tabler-icons.io/i/files -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M15 3v4a1 1 0 0 0 1 1h4" />
                            <path d="M18 17h-7a2 2 0 0 1 -2 -2v-10a2 2 0 0 1 2 -2h4l5 5v7a2 2 0 0 1 -2 2z" />
                            <path d="M16 17v2a2 2 0 0 1 -2 2h-7a2 2 0 0 1 -2 -2v-10a2 2 0 0 1 2 -2h2" />
                        </svg>
                    </span>
                </div>
                </div>
                <div class="datagrid-item">
                  <div class="datagrid-title">Nama</div>
                  <div class="datagrid-content">{{ $supplier->nama }}</div>
                </div>
                <div class="datagrid-item">
                  <div class="datagrid-title">Jenis Pakan</div>
                  <div class="datagrid-content">{{ $supplier->jenis_pakan }}</div>
                </div>
                <div class="datagrid-item">
                  <div class="datagrid-title">Harga/kg</div>
                  <div class="datagrid-content">{{ $supplier->harga_per_kg }}</div>
                </div>  
                <div class="datagrid-item">
                  <div class="datagrid-title">Telepon</div>
                  <div class="datagrid-content">{{ $supplier->telepon }}</div>
                </div>
                <div class="datagrid-item">
                  <div class="datagrid-title">Status</div>
                  <div class="datagrid-content">
                    <span class="status status-green">
                      Aktif
                    </span>
                  </div>
                </div>
                
                <div class="datagrid-item">
                    <div class="datagrid-title">Tgl Dibuat</div>
                    <div class="datagrid-content">{{ $supplier->created_at }}</div>
                  </div>
               
                <div class="datagrid-item">
                  <div class="datagrid-title">Alamat</div>
                  <div class="datagrid-content">
                 {{ $supplier->alamat }}
                  </div>
                </div>
                
              </div>
            </div>
            <div class="card-footer text-end">
                <div class="d-flex">
                    <a href="{{ route('suppliers.index') }}" class="btn btn-link">Kembali</a>
                </div>
            </div>
          </div>
        </div>
      </div>
</x-app>
