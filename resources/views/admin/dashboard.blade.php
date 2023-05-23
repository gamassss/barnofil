@extends('layout.main')
@section('content')
    <h4 class="fw-bold py-3 mb-4">Top 5 Donatur Berdasarkan Frekuensi Donasi</h4>

    <table id="freq_donate" class="display">
        <thead>
            <tr>
                <th>ID</th>
                <th>Frekuensi Donasi</th>
                <th>User Name</th>
                <th>User Email</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>

    <h4 class="fw-bold py-3 mt-5 mb-4">Top 5 Donatur Berdasarkan Jumlah Donasi</h4>

    <table id="amount_donate" class="display" style="margin-top: 24px;">
        <thead>
            <tr>
                <th>ID</th>
                <th>Jumlah Donasi</th>
                <th>User Name</th>
                <th>User Email</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>


    <script>
        $(document).ready(function() {
            $('#freq_donate').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{{ route('most.donate.frequency') }}',
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex',
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: 'frequency',
                        name: 'frequency'
                    },
                    {
                        data: 'name',
                        name: 'name'
                    },
                    {
                        data: 'email',
                        name: 'email'
                    },
                ],
                "lengthMenu": [
                    [5],
                    [5]
                ]
            });

            $('#amount_donate').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{{ route('most.donate.amount') }}',
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex',
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: 'total_amount',
                        name: 'total_amount'
                    },
                    {
                        data: 'name',
                        name: 'name'
                    },
                    {
                        data: 'email',
                        name: 'email'
                    },
                ],
                "lengthMenu": [
                    [5],
                    [5]
                ]
            });
        });
    </script>
@endsection
