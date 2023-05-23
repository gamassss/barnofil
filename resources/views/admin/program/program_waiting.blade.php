@extends('layout.main')
@section('content')
    @if (session('success'))
        <script>
            $(document).ready(function() {
                Swal.fire({
                    icon: '{{ session('success')['type'] ?? '' }}',
                    title: '{{ session('success')['title'] ?? '' }}',
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000,
                });
            });
        </script>
    @endif

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
                    <div class="row">
                        <div class="col mb-3">
                            <label for="nama-program" class="form-label">Nama</label>
                            <div type="text" id="deskripsi-program" class="form-control" value="" readonly
                                style="max-height: 200px; overflow: auto;" />
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
                <div class="modal-footer" style="padding-right: 0px; padding-bottom: 0px; margin-top: 16px;">
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
                ajax: '{{ route('submission.waiting') }}',
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
            // Swal.fire('Any fool can use a computer')
        });
    </script>
@endsection
