@extends('layout.main')
@section('content')
    <h4 class="fw-bold py-3 mb-4">Data Program</h4>

    <table id="myTable" class="display">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Total Dana</th>
                <th>Target Dana</th>
                <th>Status</th>
                <th>Tanggal Berakhir</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>

    <div class="modal fade" id="modal-edit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalCenterTitle">Pendaftaran Sub Event</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col mb-3">
                            <label for="peserta-nama" class="form-label">Nama</label>
                            <input type="text" id="peserta-nama" class="form-control" value="" />
                        </div>
                    </div>
                    <div class="row g-2 mb-1">
                        <div class="col mb-0">
                            <label for="peserta-fakultas" class="form-label">Fakultas</label>
                            <input type="text" id="peserta-fakultas" value="" class="form-control" />
                        </div>
                        <div class="col mb-0">
                            <label for="peserta-angkatan" class="form-label">Angkatan</label>
                            <input type="text" id="peserta-angkatan" value="" class="form-control" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <label for="peserta-nama" class="form-label">Kontak</label>
                            <input type="text" id="peserta-kontak" class="form-control" value="" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <label for="peserta-nama" class="form-label">Alamat</label>
                            <input type="text" id="peserta-alamat" class="form-control" value="" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <label for="peserta-nama" class="form-label">Instagrm</label>
                            <input type="text" id="peserta-instagram" class="form-control" value="" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <label for="peserta-nama" class="form-label">Drive</label>
                            <input type="text" id="peserta-drive" class="form-control" value="" />
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                        Close
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#myTable').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{{ route('program.index') }}',
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex',
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: 'nama',
                        name: 'nama'
                    },
                    {
                        data: 'total_dana',
                        name: 'total_dana'
                    },
                    {
                        data: 'target_dana',
                        name: 'target_dana'
                    },
                    {
                        data: 'status',
                        name: 'status'
                    },
                    {
                        data: 'tanggal_berakhir',
                        name: 'tanggal_berakhir'
                    },
                    {
                        data: 'action',
                        name: 'action',
                    },
                ],
                "lengthMenu": [
                    [10, 25, 50, -1],
                    [10, 25, 50, "All"]
                ]
            });
        });
    </script>
@endsection
