@extends('layouts.admin')

@section('title', 'Post Management')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Daftar Keunggulan</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#postModal"
                            onclick="resetForm()">
                            <i class="fas fa-plus"></i> Tambah Keunggulan
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Judul</th>
                                <th>Deskripsi</th>
                                <th>Gambar</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($posts as $index => $post)
                                <tr>
                                    <td class="text-center">{{ $posts->firstItem() + $index }}</td>
                                    <td>{{ $post->title }}</td>
                                    <td>{{ Str::limit($post->desc, 50) }}</td>
                                    <td>
                                        @if ($post->image)
                                            <img src="{{ asset('storage/' . $post->image) }}" alt="Image"
                                                style="max-width: 100px; max-height: 100px;">
                                        @else
                                            <span class="text-muted">
                                                Gambar tidak tersedia
                                            </span>
                                        @endif
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-info btn-sm"
                                            onclick="editPost({{ $post->id }})">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <button type="button" class="btn btn-danger btn-sm"
                                            onclick="deletePost({{ $post->id }})">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="text-center">Data tidak tersedia</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <div class="card-footer clearfix">
                    {{ $posts->links() }}
                </div>
            </div>
        </div>
    </section>

    <!-- Modal -->
    <div class="modal fade" id="postModal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitle">Tambah Keunggulan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="postForm" enctype="multipart/form-data">
                    <div class="modal-body">
                        <input type="hidden" id="post_id" name="post_id">
                        <div class="form-group">
                            <label for="title">Judul <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="title" name="title"
                                placeholder="Masukkan judul">
                            <span class="text-danger error-text title_error"></span>
                        </div>
                        <div class="form-group">
                            <label for="desc">Deskripsi <span class="text-danger">*</span></label>
                            <textarea class="form-control" id="desc" name="desc" rows="5" placeholder="Masukkan deskripsi"></textarea>
                            <span class="text-danger error-text desc_error"></span>
                        </div>
                        <div class="form-group">
                            <label for="image">Gambar</label>
                            <input type="file" class="form-control-file" id="image" name="image" accept="image/*">
                            <small class="form-text text-muted">Max 2MB (jpeg, png, jpg, gif)</small>
                            <span class="text-danger error-text image_error"></span>
                            <div id="image_preview" class="mt-2"></div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary" id="saveBtn">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('#image').on('change', function() {
                previewImage(this);
            });

            $('#postForm').on('submit', function(e) {
                e.preventDefault();

                let postId = $('#post_id').val();
                let url = postId ? `/admin/posts/${postId}` : '/admin/posts';
                let formData = new FormData(this);

                if (postId) {
                    formData.append('_method', 'PUT');
                }

                $('.error-text').text('');

                $.ajax({
                    url: url,
                    method: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        $('#postModal').modal('hide');
                        Swal.fire({
                            icon: 'success',
                            title: 'Berhasil!',
                            text: response.message,
                            showConfirmButton: false,
                            timer: 1500
                        });
                        location.reload();
                    },
                    error: function(xhr) {
                        if (xhr.status === 422) {
                            let errors = xhr.responseJSON.errors;
                            $.each(errors, function(key, value) {
                                $('.' + key + '_error').text(value[0]);
                            });
                        }
                    }
                });
            });
        });

        function previewImage(input) {
            if (input.files && input.files[0]) {
                let reader = new FileReader();
                reader.onload = function(e) {
                    $('#image_preview').html('<img src="' + e.target.result +
                        '" style="max-width: 300px; max-height: 300px;">');
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

        function resetForm() {
            $('#postForm')[0].reset();
            $('#post_id').val('');
            $('#modalTitle').text('Add Post');
            $('.error-text').text('');
            $('#image_preview').html('');
        }

        function editPost(id) {
            resetForm();
            $('#modalTitle').text('Edit Post');

            $.ajax({
                url: `/admin/posts/${id}/edit`,
                method: 'GET',
                success: function(data) {
                    $('#post_id').val(data.id);
                    $('#title').val(data.title);
                    $('#desc').val(data.desc);

                    if (data.image) {
                        $('#image_preview').html('<img src="/storage/' + data.image +
                            '" style="max-width: 300px; max-height: 300px;">');
                    }

                    $('#postModal').modal('show');
                }
            });
        }

        function deletePost(id) {
            Swal.fire({
                title: 'Apakah Anda yakin?',
                text: "Anda tidak akan dapat mengembalikan ini!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, hapus!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: `/admin/posts/${id}`,
                        method: 'DELETE',
                        success: function(response) {
                            Swal.fire({
                                icon: 'success',
                                title: 'Terhapus!',
                                text: response.message,
                                showConfirmButton: false,
                                timer: 1500
                            });
                            location.reload();
                        }
                    });
                }
            });
        }
    </script>
@endpush
