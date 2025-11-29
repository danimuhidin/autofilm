@extends('layouts.admin')

@section('title', 'Manajemen Hero')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Daftar Hero</h3>
                    <div class="card-tools">
                        @if ($heroes->count() != 6)
                            <button type="button" class="btn btn-primary btn-sm" id="btn-tambah-hero">
                                <i class="fas fa-plus"></i> Tambah Hero
                            </button>
                        @endif
                    </div>
                </div>
                <div class="card-body table-responsive">

                    @if (session('success'))
                        <div class="alert alert-success m-3">{{ session('success') }}</div>
                    @endif
                    @if (session('error'))
                        <div class="alert alert-danger m-3">{{ session('error') }}</div>
                    @endif

                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Posisi</th>
                                <th>Gambar</th>
                                <th>Judul</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($heroes as $key => $hero)
                                <tr>
                                    <td class="text-center">{{ $loop->iteration }}</td>
                                    <td>
                                        @if($key == 0)
                                            Produk
                                        @elseif($key == 1)
                                            Galeri
                                        @elseif($key == 2)
                                            Tentang Kami
                                        @elseif($key == 3)
                                            Hubungi Kami
                                        @elseif($key == 4)
                                            Outlet
                                        @elseif($key == 5)
                                            Partner
                                        @endif
                                    </td>
                                    <td>
                                        <img src="{{ asset('storage/' . $hero->image) }}" alt="{{ $hero->title }}"
                                            width="100" height="60" class="img-thumbnail" style="object-fit: cover;">
                                    </td>
                                    <td>{{ $hero->title }}</td>
                                    <td>
                                        <button type="button" class="btn btn-warning btn-sm btn-edit"
                                            data-id="{{ $hero->id }}" data-url="{{ route('heroes.edit', $hero->id) }}">
                                            <i class="fas fa-edit"></i> Edit
                                        </button>

                                        <form action="{{ route('heroes.destroy', $hero->id) }}" method="POST"
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
                                    <td colspan="4" class="text-center">Belum ada data hero.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <div class="card-footer clearfix">
                    {{ $heroes->links() }}
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="heroModal" tabindex="-1" role="dialog" aria-labelledby="heroModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="heroModalLabel">Modal Title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="heroForm" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <input type="hidden" name="hero_id" id="hero_id">
                        <input type="hidden" name="_method" id="form_method">

                        <div class="form-group">
                            <label for="title">Judul <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="title" name="title" required>
                            <small id="title-error" class="text-danger"></small>
                        </div>

                        <div class="form-group">
                            <label for="image">Gambar Hero <span class="text-danger" id="image-required">*</span></label>
                            <input type="file" class="form-control-file" id="image" name="image"
                                accept="image/jpeg,image/png,image/jpg,image/gif">
                            <small class="form-text text-muted">Format: JPG, PNG, GIF. Max: 2MB. Ukuran rekomendasi:
                                1920x600px</small>
                            <small id="image-error" class="text-danger"></small>

                            <!-- Preview Image -->
                            <div id="image-preview-container" class="mt-2" style="display: none;">
                                <img id="image-preview" src="" alt="Preview" class="img-thumbnail" width="300">
                                <p><small id="current-image-name" class="text-muted"></small></p>
                            </div>
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
                $('#heroForm')[0].reset();
                $('#hero_id').val('');
                $('#form_method').val('');
                $('.form-control').removeClass('is-invalid');
                $('.text-danger').empty();
                $('#image-preview-container').hide();
                $('#image-preview').attr('src', '');
                $('#image').prop('required', true);
                $('#image-required').show();
            }

            // Preview image saat file dipilih
            $('#image').change(function() {
                const file = this.files[0];
                if (file) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        $('#image-preview').attr('src', e.target.result);
                        $('#image-preview-container').show();
                        $('#current-image-name').text('File baru: ' + file.name);
                    }
                    reader.readAsDataURL(file);
                }
            });

            // 1. Tampilkan Modal untuk TAMBAH Hero
            $('#btn-tambah-hero').click(function() {
                clearForm();
                $('#heroModalLabel').text('Tambah Hero Baru');
                $('#form_method').val('POST');
                $('#heroForm').attr('action', "{{ route('heroes.store') }}");
                $('#image').prop('required', true);
                $('#image-required').show();
                $('#heroModal').modal('show');
            });

            // 2. Tampilkan Modal untuk EDIT Hero
            $('body').on('click', '.btn-edit', function() {
                clearForm();
                var heroId = $(this).data('id');
                var url = $(this).data('url');

                $('#heroModalLabel').text('Edit Hero');
                $('#form_method').val('PUT');
                $('#heroForm').attr('action', '/admin/heroes/' + heroId);
                $('#image').prop('required', false);
                $('#image-required').hide();

                // Ambil data hero via AJAX
                $.get(url, function(data) {
                    $('#hero_id').val(data.id);
                    $('#title').val(data.title);

                    // Show existing image if available
                    if (data.image) {
                        $('#image-preview').attr('src', '/storage/' + data.image);
                        $('#image-preview-container').show();
                        $('#current-image-name').text('Gambar saat ini (Opsional upload baru)');
                    }

                    $('#heroModal').modal('show');
                }).fail(function(xhr) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Gagal Mengambil Data',
                        text: (xhr.responseJSON && xhr.responseJSON.error) ? xhr
                            .responseJSON.error : 'Terjadi kesalahan server.'
                    });
                });
            });

            // 3. Proses SIMPAN (Store & Update) via AJAX
            $('#heroForm').submit(function(e) {
                e.preventDefault();

                $('.form-control').removeClass('is-invalid');
                $('.text-danger').empty();

                var formData = new FormData(this);
                var url = $(this).attr('action');
                var method = $('#form_method').val();

                $.ajax({
                    url: url,
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        $('#heroModal').modal('hide');

                        Swal.fire({
                            icon: 'success',
                            title: 'Berhasil!',
                            text: response.success,
                            timer: 2000,
                            showConfirmButton: false
                        });
                        location.reload();
                    },
                    error: function(xhr) {
                        if (xhr.status === 422) {
                            // Tangani error validasi
                            var errors = xhr.responseJSON.errors;
                            $.each(errors, function(key, value) {
                                $('#' + key).addClass('is-invalid');
                                $('#' + key + '-error').text(value[0]);
                            });
                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: 'Oops... Terjadi Kesalahan',
                                text: 'Gagal menyimpan data. Silakan coba lagi.'
                            });
                        }
                    }
                });
            });

            // 4. Proses HAPUS via AJAX
            $('body').on('submit', '.form-hapus', function(e) {
                e.preventDefault();

                var form = $(this);
                var url = form.attr('action');
                var token = form.find('input[name="_token"]').val();

                Swal.fire({
                    title: 'Anda Yakin?',
                    text: "Data yang sudah dihapus tidak bisa dikembalikan!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#3085d6',
                    confirmButtonText: 'Ya, Hapus Saja!',
                    cancelButtonText: 'Batal'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: url,
                            type: 'POST',
                            data: {
                                '_method': 'DELETE',
                                '_token': token
                            },
                            success: function(response) {
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Terhapus!',
                                    text: response.success,
                                    timer: 1500,
                                    showConfirmButton: false
                                });
                                location.reload();
                            },
                            error: function(xhr) {
                                var errorMsg = (xhr.responseJSON && xhr.responseJSON
                                        .error) ?
                                    xhr.responseJSON.error : 'Gagal menghapus data.';
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
