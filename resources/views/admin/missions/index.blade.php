@extends('layouts.admin')

@section('title', 'Mission Management')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Daftar Misi</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                            data-target="#missionModal" onclick="resetForm()">
                            <i class="fas fa-plus"></i> Tambah Misi
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Deskripsi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($missions as $index => $mission)
                                <tr>
                                    <td class="text-center">{{ $missions->firstItem() + $index }}</td>
                                    <td>{{ $mission->desc }}</td>
                                    <td>
                                        <button type="button" class="btn btn-info btn-sm"
                                            onclick="editMission({{ $mission->id }})">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <button type="button" class="btn btn-danger btn-sm"
                                            onclick="deleteMission({{ $mission->id }})">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="3" class="text-center">Tidak ada data.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <div class="card-footer clearfix">
                    {{ $missions->links() }}
                </div>
            </div>
        </div>
    </section>

    <!-- Modal -->
    <div class="modal fade" id="missionModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitle">Tambah Misi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="missionForm">
                    <div class="modal-body">
                        <input type="hidden" id="mission_id" name="mission_id">
                        <div class="form-group">
                            <label for="desc">Deskripsi <span class="text-danger">*</span></label>
                            <textarea class="form-control" id="desc" name="desc" rows="4" placeholder="Masukkan deskripsi misi"></textarea>
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

            $('#missionForm').on('submit', function(e) {
                e.preventDefault();

                let missionId = $('#mission_id').val();
                let url = missionId ? `/admin/missions/${missionId}` : '/admin/missions';
                let method = missionId ? 'PUT' : 'POST';

                $('.error-text').text('');

                $.ajax({
                    url: url,
                    method: method,
                    data: $(this).serialize(),
                    success: function(response) {
                        $('#missionModal').modal('hide');
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
            $('#missionForm')[0].reset();
            $('#mission_id').val('');
            $('#modalTitle').text('Tambah Misi');
            $('.error-text').text('');
        }

        function editMission(id) {
            resetForm();
            $('#modalTitle').text('Edit Misi');

            $.ajax({
                url: `/admin/missions/${id}/edit`,
                method: 'GET',
                success: function(data) {
                    $('#mission_id').val(data.id);
                    $('#desc').val(data.desc);
                    $('#missionModal').modal('show');
                }
            });
        }

        function deleteMission(id) {
            Swal.fire({
                title: 'Apakah Anda yakin?',
                text: "Anda tidak akan dapat mengembalikannya!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, hapus!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: `/admin/missions/${id}`,
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
