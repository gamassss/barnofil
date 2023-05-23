@extends('layout.main')
@section('content')
    <h4 class="fw-bold py-3 mb-4">Top 5 Donatur Berdasarkan Frekuensi Donasi</h4>

    <table id="transaksi" class="display">
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama Donatur</th>
                <th>Nama Program</th>
                <th>Jumlah Donasi</th>
                <th>Email Donatur</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>


    <script>
        $(document).ready(function() {
            $('#transaksi').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{{ route('transaksis.index') }}',
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
                        data: 'nama_program',
                        name: 'nama_program'
                    },
                    {
                        data: 'formatted_amount',
                        name: 'formatted_amount'
                    },
                    {
                        data: 'email',
                        name: 'email'
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
