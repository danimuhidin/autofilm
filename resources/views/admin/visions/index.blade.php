@extends('layouts.admin')

@section('title', 'Vision Management')

@section('content')

    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Visi</h3>
                    <div class="card-tools">
                        @if (empty($vision))
                            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#visionModal"
                                onclick="resetForm()">
                                <i class="fas fa-plus"></i> Tambah Visi
                            </button>
                        @else
                            <button type="button" class="btn btn-info btn-sm" onclick="editVision({{ $vision->id }})">
                                <i class="fas fa-edit"></i> Edit Visi
                            </button>
                        @endif
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <tbody>
                            @if (empty($vision))
                                <tr>
                                    <td colspan="2" class="text-center">Tidak ada data visi.</td>
                                </tr>
                            @else
                                <tr>
                                    <td>{{ $vision->desc }}</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal -->
    <div class="modal fade" id="visionModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitle">Tambah Visi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="visionForm">
                    <div class="modal-body">
                        <input type="hidden" id="vision_id" name="vision_id">
                        <div class="form-group">
                            <label for="desc">Deskripsi <span class="text-danger">*</span></label>
                            <textarea class="form-control" id="desc" name="desc" rows="4" placeholder="Masukkan deskripsi visi"></textarea>
                            <span class="text-danger error-text desc_error"></span>
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

            $('#visionForm').on('submit', function(e) {
                e.preventDefault();

                let visionId = $('#vision_id').val();
                let url = visionId ? `/admin/visions/${visionId}` : '/admin/visions';
                let method = visionId ? 'PUT' : 'POST';

                $('.error-text').text('');

                $.ajax({
                    url: url,
                    method: method,
                    data: $(this).serialize(),
                    success: function(response) {
                        $('#visionModal').modal('hide');
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

        function resetForm() {
            $('#visionForm')[0].reset();
            $('#vision_id').val('');
            $('#modalTitle').text('Tambah Visi');
            $('.error-text').text('');
        }

        function editVision(id) {
            resetForm();
            $('#modalTitle').text('Edit Visi');

            $.ajax({
                url: `/admin/visions/${id}/edit`,
                method: 'GET',
                success: function(data) {
                    $('#vision_id').val(data.id);
                    $('#desc').val(data.desc);
                    $('#visionModal').modal('show');
                }
            });
        }

        function deleteVision(id) {
            Swal.fire({
                title: 'Apakah Anda yakin ingin menghapus visi ini?',
                text: "Anda tidak akan dapat mengembalikannya!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, hapus!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: `/admin/visions/${id}`,
                        method: 'DELETE',
                        success: function(response) {
                            Swal.fire({
                                icon: 'success',
                                title: 'Berhasil!',
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
