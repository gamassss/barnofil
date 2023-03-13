@extends('layout.main')
@section('content')
    <h4 class="fw-bold py-3 mb-4">Data User</h4>

    <table id="myTable" class="display">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Metode Registrasi</th>
                <th>Status Verifikasi Email</th>
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
                    <h5 class="modal-title" id="modalCenterTitle">Detail Program</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col mb-3">
                            <label for="nama-program" class="form-label">Nama</label>
                            <input type="text" id="nama-program" class="form-control" value="" readonly />
                        </div>
                    </div>
                    <div class="row g-2 mb-1">
                        <div class="col mb-0">
                            <label for="kategori-program" class="form-label">Kategori</label>
                            <input type="text" id="kategori-program" value="" class="form-control" readonly />
                        </div>
                        <div class="col mb-0">
                            <label for="status-program" class="form-label">Status</label>
                            <input type="text" id="status-program" value="" class="form-control" readonly />
                        </div>
                    </div>
                    <div class="row g-2 mb-1">
                        <div class="col mb-0">
                            <label for="dana-terkumpul" class="form-label">Dana Terkumpul</label>
                            <input type="text" id="dana-terkumpul" value="" class="form-control" readonly />
                        </div>
                        <div class="col mb-0">
                            <label for="target-dana" class="form-label">Target Dana</label>
                            <input type="text" id="target-dana" value="" class="form-control" readonly />
                        </div>
                    </div>
                    <div class="row g-2 mb-1">
                        <div class="col mb-0">
                            <label for="tanggal-mulai" class="form-label">Tanggal Mulai</label>
                            <input type="text" id="tanggal-mulai" value="" class="form-control" readonly />
                        </div>
                        <div class="col mb-0">
                            <label for="tanggal-berakhir" class="form-label">Tanggal Berakhir</label>
                            <input type="text" id="tanggal-berakhir" value="" class="form-control" readonly />
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
                ajax: '{{ route('user.index') }}',
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex',
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: 'name',
                        name: 'name'
                    },
                    {
                        data: 'email',
                        name: 'email'
                    },
                    {
                        data: 'metode_registrasi',
                        name: 'metode_registrasi'
                    },
                    {
                        data: 'status_email',
                        name: 'status_email'
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
