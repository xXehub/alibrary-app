<x-app>
    <div class="page">
        <div class="page-wrapper">
            <!-- Page header -->
            <div class="page-header d-print-none">
                <div class="container-xl">
                    <div class="row g-2 align-items-center">
                        <div class="col">
                            <h2 class="page-title">
                                {{ $judul }}
                            </h2>
                            <div class="text-muted mt-1">{{ $tiangBiasa->firstItem() }}-{{ $tiangBiasa->lastItem() }}
                                dari {{ $totalUsers }} orang</div>
                        </div>
                        <!-- Page title actions -->
                        <div class="col-12 col-md-auto ms-auto d-print-none">
                            <div class="d-flex">
                                <!-- Form pencarian -->
                                <form method="GET" action="{{ route('users.index') }}" class="d-flex">
                                    <input type="search" name="search" class="form-control d-inline-block w-9 me-3"
                                        placeholder="Cari user…" value="{{ request()->query('search') }}" />
                                </form>
                                <!-- Tombol tambah data -->
                                <a href="#" class="btn btn-primary">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <line x1="12" y1="5" x2="12" y2="19" />
                                        <line x1="5" y1="12" x2="19" y2="12" />
                                    </svg>
                                    Tambah Data
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- Page body -->
            <div class="page-body">
                <div class="container-xl">
                    <div class="row row-cards" id="adminUsersContainer">
                        @foreach ($tiangBiasa as $user)
                            <div class="col-md-6 col-lg-3">
                                <div class="card">
                                    <div class="card-body p-4 text-center">
                                        <span class="avatar avatar-xl mb-3 avatar-rounded"
                                            style="background-image: url('{{ $user->gambar_profile_mas }}')"></span>
                                        {{-- <span class="avatar avatar-xl mb-3 avatar-rounded">
                                            {{ strtoupper(substr($user->username, 0, 2)) }}
                                        </span> --}}
                                        <h3 class="m-0 mb-1"><a href="#">{{ ucfirst($user->username) }}</a></h3>
                                        <div class="text-muted">{{ $user->email }}</div>
                                        <div class="mt-3">
                                            <span
                                                class="badge 
                                                    {{ $user->type === 'user'
                                                        ? 'bg-green-lt'
                                                        : ($user->type === 'admin'
                                                            ? 'bg-purple-lt'
                                                            : ($user->type === 'petugas'
                                                                ? 'bg-blue-lt'
                                                                : 'bg-gray-lt')) }}">
                                                {{ ucfirst($user->type) }}
                                            </span>
                                        </div>
                                    </div>
                                    <div class="d-flex">
                                        <a href="mailto:{{ $user->email }}" class="card-btn">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="icon icon-tabler icons-tabler-outline icon-tabler-settings">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path
                                                    d="M10.325 4.317c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756 .426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543 -.826 3.31 -2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756 -2.924 1.756 -3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065z" />
                                                <path d="M9 12a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />
                                            </svg>
                                            Ubah
                                        </a>
                                        <a href="javascript:void(0);" class="delete card-btn delete-user"
                                            data-id="{{ $user->id }}">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="icon icon-tabler icons-tabler-outline icon-tabler-trash">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path d="M4 7l16 0" />
                                                <path d="M10 11l0 6" />
                                                <path d="M14 11l0 6" />
                                                <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                                <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                                            </svg>
                                            Hapus
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <div class="d-flex mt-4">
                            <ul class="pagination ms-auto">
                                <!-- Previous Page Link -->
                                <li class="page-item {{ $tiangBiasa->onFirstPage() ? 'disabled' : '' }}">
                                    <a class="page-link" href="{{ $tiangBiasa->previousPageUrl() }}" tabindex="-1"
                                        aria-disabled="true">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24"
                                            height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <polyline points="15 6 9 12 15 18" />
                                        </svg>
                                        sebelumnya
                                    </a>
                                </li>

                                <!-- Page Numbers -->
                                @foreach ($tiangBiasa->links()->elements[0] as $page => $url)
                                    <li class="page-item {{ $page == $tiangBiasa->currentPage() ? 'active' : '' }}">
                                        <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                                    </li>
                                @endforeach

                                <!-- Next Page Link -->
                                <li class="page-item {{ $tiangBiasa->hasMorePages() ? '' : 'disabled' }}">
                                    <a class="page-link" href="{{ $tiangBiasa->nextPageUrl() }}">
                                        selanjutnya
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24"
                                            height="24" viewBox="0 0 24 24" stroke-width="2"
                                            stroke="currentColor" fill="none" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <polyline points="9 6 15 12 9 18" />
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
            $(document).ready(function() {
                $(document).on('click', '.delete', function() {
                    const id = $(this).data('id');
                    Swal.fire({
                        title: 'Anda yakin?',
                        text: 'Data pengguna akan dihapus secara permanen!',
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonText: 'Ya, hapus!',
                        cancelButtonText: 'Tidak, batal!',
                        reverseButtons: true
                    }).then((result) => {
                        if (result.isConfirmed) {
                            $.ajax({
                                url: `/users/${id}`,
                                type: 'DELETE',
                                success: function(result) {
                                    Swal.fire(
                                        'Dihapus!',
                                        'Data pengguna telah dihapus.',
                                        'success'
                                    ).then(() => {
                                        setTimeout(function() {
                                            location
                                                .reload();
                                        }, 500);
                                    });
                                },
                                error: function(err) {
                                    Swal.fire(
                                        'Error!',
                                        'Terjadi kesalahan saat menghapus pengguna.',
                                        'error'
                                    );
                                }
                            });
                        } else {
                            Swal.fire(
                                'Dibatalkan',
                                'Data pengguna tidak dihapus.',
                                'info'
                            );
                        }
                    });
                });

                // Page length change
                $('#pageLength').on('change', function() {
                    table.page.len($(this).val()).draw();
                });

                // Search input
                $('#searchInput').on('keyup', function() {
                    table.search($(this).val()).draw();
                });
            });
        </script>

</x-app>
