@extends('layouts.admin')

@section('title', 'Manajemen User')
@section('page-title', 'Manajemen User')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Daftar User</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-primary btn-sm" id="btn-tambah-user">
                            <i class="fas fa-plus"></i> Tambah User
                        </button>
                    </div>
                </div>
                <div class="card-body table-responsive p-0">

                    @if (session('success'))
                        <div class="alert alert-success m-3">{{ session('success') }}</div>
                    @endif
                    @if (session('error'))
                        <div class="alert alert-danger m-3">{{ session('error') }}</div>
                    @endif

                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nama</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($users as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->username }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>
                                        @if ($user->is_admin)
                                            <span class="badge bg-success">Admin</span>
                                        @else
                                            <span class="badge bg-secondary">User</span>
                                        @endif
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-warning btn-sm btn-edit"
                                            data-id="{{ $user->id }}" data-url="{{ route('users.edit', $user->id) }}">
                                            <i class="fas fa-edit"></i> Edit
                                        </button>

                                        <form action="{{ route('users.destroy', $user->id) }}" method="POST"
                                            class="d-inline form-hapus">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">
                                                <i class="fas fa-trash"></i> Hapus
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="text-center">Belum ada data user.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <div class="card-footer clearfix">
                    {{ $users->links() }}
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="userModal" tabindex="-1" role="dialog" aria-labelledby="userModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="userModalLabel">Modal Title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="userForm">
                    @csrf
                    <div class="modal-body">
                        <input type="hidden" name="user_id" id="user_id">
                        <input type="hidden" name="_method" id="form_method">

                        <div class="form-group">
                            <label for="name">Nama Lengkap</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                            <small id="name-error" class="text-danger"></small>
                        </div>
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" id="username" name="username" required>
                            <small id="username-error" class="text-danger"></small>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                            <small id="email-error" class="text-danger"></small>
                        </div>

                        <hr>
                        <p class="text-muted" id="password-help"><i>Kosongkan password jika tidak ingin menggantinya.</i>
                        </p>

                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password">
                            <small id="password-error" class="text-danger"></small>
                        </div>
                        <div class="form-group">
                            <label for="password_confirmation">Konfirmasi Password</label>
                            <input type="password" class="form-control" id="password_confirmation"
                                name="password_confirmation">
                        </div>
                        <hr>

                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="is_admin" name="is_admin" value="1">
                            <label class="form-check-label" for="is_admin">Jadikan Admin (Superuser)</label>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary" id="btn-simpan">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            // Fungsi untuk membersihkan form dan error
            function clearForm() {
                $('#userForm')[0].reset();
                $('#user_id').val('');
                $('#form_method').val('');
                $('.form-control').removeClass('is-invalid');
                $('.text-danger').empty();
                $('#password-help').hide();
            }

            // 1. Tampilkan Modal untuk TAMBAH User
            $('#btn-tambah-user').click(function() {
                clearForm();
                $('#userModalLabel').text('Tambah User Baru');
                $('#form_method').val('POST');
                $('#password').attr('required', true);
                $('#password_confirmation').attr('required', true);
                $('#userForm').attr('action', "{{ route('users.store') }}");
                $('#userModal').modal('show');
            });

            // 2. Tampilkan Modal untuk EDIT User
            $('body').on('click', '.btn-edit', function() {
                clearForm();
                var userId = $(this).data('id');
                var url = $(this).data('url');

                $('#userModalLabel').text('Edit User');
                $('#form_method').val('PUT');
                $('#password').attr('required', false);
                $('#password_confirmation').attr('required', false);
                $('#password-help').show();
                $('#userForm').attr('action', '/admin/users/' + userId);

                // Ambil data user via AJAX
                $.get(url, function(data) {
                    $('#user_id').val(data.id);
                    $('#name').val(data.name);
                    $('#username').val(data.username);
                    $('#email').val(data.email);
                    if (data.is_admin == 1) {
                        $('#is_admin').prop('checked', true);
                    } else {
                        $('#is_admin').prop('checked', false);
                    }
                    $('#userModal').modal('show');
                }).fail(function(xhr) {

                    // ======================================================
                    // MENGGANTIKAN ALERT (1) - Error saat mengambil data
                    // ======================================================
                    Swal.fire({
                        icon: 'error',
                        title: 'Gagal Mengambil Data',
                        text: (xhr.responseJSON && xhr.responseJSON.error) ? xhr
                            .responseJSON.error : 'Terjadi kesalahan server.'
                    });

                });
            });

            // 3. Proses SIMPAN (Store & Update) via AJAX
            $('#userForm').submit(function(e) {
                e.preventDefault();

                $('.form-control').removeClass('is-invalid');
                $('.text-danger').empty();

                var formData = $(this).serialize();
                var url = $(this).attr('action');
                var method = $('#form_method').val();

                $.ajax({
                    url: url,
                    type: 'POST', // AJAX tetap POST, _method akan di-handle Laravel
                    data: formData,
                    success: function(response) {
                        $('#userModal').modal('hide');

                        // ======================================================
                        // MENGGANTIKAN ALERT (2) - Pesan Sukses
                        // ======================================================
                        Swal.fire({
                            icon: 'success',
                            title: 'Berhasil!',
                            text: response.success,
                            timer: 2000, // Tampilkan selama 2 detik
                            showConfirmButton: false // Sembunyikan tombol OK
                        }).then(function() {
                            // Reload halaman setelah SweetAlert tertutup
                            location.reload();
                        });

                    },
                    error: function(xhr) {
                        if (xhr.status === 422) {
                            // Tangani error validasi (ini tetap sama)
                            var errors = xhr.responseJSON.errors;
                            $.each(errors, function(key, value) {
                                $('#' + key).addClass('is-invalid');
                                $('#' + key + '-error').text(value[0]);
                            });
                        } else {

                            // ======================================================
                            // MENGGANTIKAN ALERT (3) - Error umum
                            // ======================================================
                            Swal.fire({
                                icon: 'error',
                                title: 'Oops... Terjadi Kesalahan',
                                text: 'Gagal menyimpan data. Silakan coba lagi.'
                            });
                        }
                    }
                });
            });

            $('body').on('submit', '.form-hapus', function(e) {
                // Hentikan form dari submit otomatis
                e.preventDefault();

                var form = $(this); // Ambil form yang di-klik
                var url = form.attr('action'); // Ambil URL dari atribut 'action' form
                var token = form.find('input[name="_token"]').val(); // Ambil CSRF token
                var tableRow = form.closest('tr'); // Ambil <tr> terdekat untuk dihapus
                Swal.fire({
                    title: 'Anda Yakin?',
                    text: "Data yang sudah dihapus tidak bisa dikembalikan!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33', // Merah untuk tombol hapus
                    cancelButtonColor: '#3085d6', // Biru untuk batal
                    confirmButtonText: 'Ya, Hapus Saja!',
                    cancelButtonText: 'Batal'
                }).then((result) => {
                    // Jika user menekan tombol "Ya, Hapus Saja!"
                    if (result.isConfirmed) {
                        $.ajax({
                            url: url,
                            type: 'POST', // Tetap POST
                            data: {
                                '_method': 'DELETE', // Method spoofing Laravel
                                '_token': token
                            },
                            success: function(response) {
                                // Tampilkan notifikasi SUKSES dengan timer
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Terhapus!',
                                    text: response
                                    .success, // Ambil pesan dari JSON
                                    timer: 1500, // Tampilkan selama 1.5 detik
                                    showConfirmButton: false // Sembunyikan tombol OK
                                }).then(function() {
                                    // Reload halaman setelah SweetAlert tertutup
                                    location.reload();
                                });
                            },
                            error: function(xhr) {
                                // Tampilkan notifikasi GAGAL
                                var errorMsg = (xhr.responseJSON && xhr.responseJSON
                                        .error) ?
                                    xhr.responseJSON.error :
                                    'Gagal menghapus data.';
                                Swal.fire(
                                    'Gagal!',
                                    errorMsg,
                                    'error'
                                );
                            }
                        });
                    }
                });
            });
        });
    </script>
@endpush
