@extends('layout.main')
@section('content')
    <h4 class="fw-bold py-3 mb-4">Restore Data Program</h4>

    <table id="myTable" class="display">
        <thead>
            <tr>
                <th class="text-center">No</th>
                <th class="text-center">Nama</th>
                <th class="text-center">Total Dana</th>
                <th class="text-center">Target Dana</th>
                <th class="text-center">Status</th>
                <th class="text-center">Tanggal Berakhir</th>
                <th class="text-center">Action</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>

    <script>
        $(document).ready(function() {
            $('#myTable').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{{ route('program.trash') }}',
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
                ]
            });
        });
    </script>
@endsection
